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
    
}
