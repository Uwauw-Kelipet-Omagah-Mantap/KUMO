<?php

namespace App\Http\Controllers;

use App\Models\PemilikMobil;
use Illuminate\Http\Request;

class PemilikMobilController extends Controller
{
    public function index()
    {
        $pemilik = PemilikMobil::all();
        return view('pemilikmobil.index', compact('pemilik'));
    }
}
