<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajemenUlasanPM extends Controller
{
    public function index()
    {
        return view('pemilik-mobil.ulasanpm.index');
    }
}
