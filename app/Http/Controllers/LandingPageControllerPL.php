<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageControllerPL extends Controller
{
    public function index()
    {
        return view("pelanggan.landingpage.index");
    }
}
