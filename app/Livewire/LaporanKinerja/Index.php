<?php

namespace App\Livewire\LaporanKinerja;

use Livewire\Component;
use App\Models\LaporanKinerja;
use App\Models\Pegawai;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use App\Exports\LaporanKinerjaExport;
use Maatwebsite\Excel\Facades\Excel;

class Index extends Component
{
    use WithPagination;
    public $search;
    public $atas;
    public $bulan;
    public $tahun;

    public function render()
    {
        $data = LaporanKinerja::where('uraian_kegiatan','like','%'.$this->search.'%');
        if ($this->bulan != null) {
            $data = $data->where('bulan',$this->bulan);
        }
        if ($this->tahun != null) {
            $data = $data->where('tahun',$this->tahun);
        }
        //->where('tahun',$this->tahun)
        $data = $data->where('nip',auth()->user()->nip)->paginate(15);
        $atasan = Pegawai::select(['id','nama'])->whereNotIn('pangkat_gol',['V','IX'])->get();
        return view('livewire.laporan-kinerja.index',compact('data','atasan'));
    }

    public function searchData(){
        $this->resetPage();
        
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

    public function excel(){
        return Excel::download(new LaporanKinerjaExport, 'users.xlsx');
    }

    public function pdf(){
        return Excel::download(new LaporanKinerjaExport, 'Laporan Kinerja.pdf',\Maatwebsite\Excel\Excel::DOMPDF);
    }
}
