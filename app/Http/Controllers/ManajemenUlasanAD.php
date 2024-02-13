<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajemenUlasanAD extends Controller
{
    public function index()
    {
        return view('admin.ulasanad.index');
    }
}
