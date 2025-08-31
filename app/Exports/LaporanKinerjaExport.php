<?php

namespace App\Exports;

use App\Models\LaporanKinerja;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LaporanKinerjaExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return LaporanKinerja::select(['tanggal','kegiatan','uraian_kegiatan','volume'])->get();
    }

    public function headings(): array
    {
        return [
            'Tanggal',
            'Kegiatan',
            'Uraian Kegiatan',
            'Volume'
        ];
    }
}
