<?php

namespace App\Livewire\LaporanKinerja;

use Livewire\Component;
use App\Models\LaporanKinerja;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class Index extends Component
{
    use WithPagination;
    public $search ='';

    public function render()
    {
        $data = LaporanKinerja::where('nip',auth()->user()->nip)->paginate(15);
        return view('livewire.laporan-kinerja.index',compact('data'));
    }

    public function confirmDelete($nama)
    {
        LivewireAlert::title('Hapus Kinerja ' . $nama . '?')
            ->question()
            ->withCancelButton('Batal')
            ->withConfirmButton('Hapus')
            ->onConfirm('delete', ['nama' => $nama])
            ->timer(10000)
            ->show();
    }

    public function delete($data)
    {
        LaporanKinerja::where('kegiatan',$data['nama'])->delete();
        LivewireAlert::title('Data Terhapus!')
            ->success()
            ->show();
        $this->resetPage();
    }
}
