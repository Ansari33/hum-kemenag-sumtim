<?php

namespace App\Livewire\Berita;

use Livewire\Component;
use App\Models\Berita;
use DB;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class Add extends Component
{
   // use LivewireAlert;

    public $judul;
    public $tipe;
    public $isi;
    public $foto;
    public function render()
    {
        return view('livewire.berita.add');
    }

     public function submit()
    {
        DB::beginTransaction();
        try {

            Berita::create([
                'judul'      => $this->judul,
                'tipe'    => $this->tipe,
                'isi'  => $this->isi,
                'gambar'       => $this->foto,
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
}
