<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagePembayaranController extends Controller
{
    public function index()
    {
        return view("page-pembayaran.index");
    }
}
