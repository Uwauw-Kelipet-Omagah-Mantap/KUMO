<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPLController extends Controller
{
    public function index()
    {
       return view('dashboardpl.index');
    }
}
