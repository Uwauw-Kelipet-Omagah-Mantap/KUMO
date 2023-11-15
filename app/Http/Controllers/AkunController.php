<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function __construct()
    {
        $this->userModel = new Akun;
    }
    public function index()
    {
        $data = [
            'user' => Akun::all()
        ];
        return view('login.formlogin', $data);
    }
}
