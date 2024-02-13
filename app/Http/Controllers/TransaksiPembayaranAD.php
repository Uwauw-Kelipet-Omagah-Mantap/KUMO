<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiPembayaranAD extends Controller
{
    public function index()
    {
        return view("admin.transaksipembayaranad.index");
    }
}
