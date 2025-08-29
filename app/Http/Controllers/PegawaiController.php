<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\User;

class PegawaiController extends Controller
{
    //    public function index() {
    //     $data = Pegawai::paginate(20);
    //     return view('pegawai.index',compact('data'));
    // }

    // public function add() {
    //     return view('pegawai.add');
    // }

    // public function store(Request $request) {

    //     Pegawai::insert([
    //         'nama' => $request->nama,
    //         'nip' => $request->nip,
    //         'pangkat_gol' => $request->pangkat_gol,
    //         'jabatan' => $request->jabatan,
    //         'unit_kerja' => $request->unit_kerja,

    //     ]);
    //     return redirect('/pegawai');
    // }

    // public function edit($id) {
    //     $data = Pegawai::find($id);
    //     return view('pegawai.edit',compact('data'));
    // }

    // public function update(Request $request) {
    // }

    public function delete($id) {
        $pegawai = Pegawai::find($id);
        $pegawai->user()->delete();
        $pegawai->delete();
        session()->flash('success','Data Berhasil Dihapus!');
        return redirect('/pegawai');
    }

    
}
