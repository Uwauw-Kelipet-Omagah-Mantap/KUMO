<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajemenPembayaranPMController extends Controller
{
    public function index()
    {
        return view("pemilik-mobil.manajemenpembayaranpm.index");
    }
}
