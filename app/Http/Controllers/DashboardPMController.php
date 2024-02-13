<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPMController extends Controller
{
    public function index()
    {
        return view("pemilik-mobil.dashboardpm.index");
    }
}
