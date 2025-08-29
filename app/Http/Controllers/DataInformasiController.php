<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataInformasi;

class DataInformasiController extends Controller
{
    public function delete($id) {
        $data = DataInformasi::find($id);
        $data->delete();
        session()->flash('success', 'Data Berhasil Terhapus!');
        return redirect('/data-informasi');
    }
}
