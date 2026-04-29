<?php

namespace App\Livewire\Konten;

use Livewire\Component;
use App\Models\Konten;  
use DB;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class Add extends Component
{
    public $judul;
    public $tanggal;
    public $deskripsi;
    public $foto;

    public function render()
    {
        return view('livewire.konten.add');
    }

    public function submit()
    {
        DB::beginTransaction();
        try {

            Konten::create([
                'judul'      => $this->judul,
                'tanggal'    => $this->tanggal,
                'deskripsi'  => $this->deskripsi,
                'file'       => $this->foto,
            ]);

            LivewireAlert::title('Konten Berhasil Ditambahkan!')
            ->success()
            ->show();

            DB::commit();
            return $this->redirect('/publikasi/konten', navigate: true);
        } catch (\Exception $e) {
            DB::rollBack();
            LivewireAlert::title('Gagal!')
            ->text($e->getMessage())
            ->warning()
            ->show();
            session()->flash('error', $e->getMessage());
            return $this->redirect('/publikasi/konten/add', navigate: true);
        }
    }
}
