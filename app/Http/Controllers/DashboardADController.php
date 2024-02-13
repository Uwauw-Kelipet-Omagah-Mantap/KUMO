<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardADController extends Controller
{
    public function index()
    {
        return view('admin.dashboardad.index');
    }
}
