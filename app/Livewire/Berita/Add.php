<?php

namespace App\Livewire\Berita;

use Livewire\Component;
use App\Models\Berita;
use DB;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Add extends Component
{
   // use LivewireAlert;
   use WithFileUploads;

    public $judul;
    public $tipe;
    public $content;
    public $foto;
    public $link;
    public $tanggal;
    public $link_gambar;

    public function render()
    {
        return view('livewire.berita.add');
    }

     public function submit()
    {
        DB::beginTransaction();
        try {
            $gambar = str()->random(20);
             ($this->foto) ? $this->foto->storeAs('berita', $gambar . '.' . $this->foto->extension(), 'public') : null;
  
            Berita::create([
                'judul'      => $this->judul,
                'tipe'       => $this->tipe,
                'tanggal'    => $this->tanggal,
                'isi'        => $this->content,
                'gambar'     => ($this->foto) ? $gambar . '.' . $this->foto->extension() : null,
                'link'       => $this->link,
                'link_gambar'=> $this->link_gambar,
            ]);

            LivewireAlert::title('Berita Berhasil Ditambahkan!')
            ->success()
            ->show();

            DB::commit();
           
            return $this->redirect('/publikasi/berita', navigate: true);
        } catch (\Exception $e) {
            DB::rollBack();
            LivewireAlert::title('Gagal!')
            ->text($e->getMessage())
            ->warning()
            ->show();
            session()->flash('error', $e->getMessage());
            return $this->redirect('/publikasi/berita/add', navigate: true);
        }
    }
    // This will update all Jodit editors on the page
    //$this->dispatch('update-jodit-content', $newContent);
}
