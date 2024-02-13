<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiMobilADController extends Controller
{
    public function index()
    {
        return view("admin.informasimobilad.index");
    }
}
