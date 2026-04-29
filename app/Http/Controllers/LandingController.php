<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konten;

class LandingController extends Controller
{
    //

    public function beranda()
    {
        $konten = Konten::latest()->take(6)->get();
        return view('landing.beranda', compact('konten'));
    }

    public function sejarah()
    {
        return view('landing.sejarah');
    }

    public function visiMisi()
    {
        return view('landing.visi-misi');
    }

    public function tugasFungsi()
    {
        return view('landing.tugas-fungsi');
    }

    public function unitKerja()
    {
        return view('landing.unit-kerja');
    }

    public function berita()
    {
        return view('landing.berita');
    }

    public function dataKeagamaan()
        {
            return view('landing.data-keagamaan');
        }

    public function dataPendidikan()
        {
            return view('landing.data-pendidikan');
        }   

    public function manajemenPerubahan()
        {
            return view('landing.manajemen-perubahan');
        }
        
}
