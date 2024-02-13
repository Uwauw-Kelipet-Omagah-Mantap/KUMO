<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajemenPembayaranADController extends Controller
{
    public function index()
    {
        return view("admin.manajemenpembayaranad.index");
    }
}
