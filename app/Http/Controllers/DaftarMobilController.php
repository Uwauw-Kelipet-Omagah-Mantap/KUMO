<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarMobilController extends Controller
{
    public function index()
    {
        return view("daftarmobil.index");
    }
}
