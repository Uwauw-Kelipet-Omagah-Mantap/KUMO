<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListMobilController extends Controller
{
    public function index()
    {
        return view('list-mobil.index');
    }
}
