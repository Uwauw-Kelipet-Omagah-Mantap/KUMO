<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('formlogin.index');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role === 'admin'){
                return redirect()->intended('/admin/dashboard');
            } else if (Auth::user()->role === 'pelanggan') {
                return redirect()->intended('/pelanggan/dashboard');
            } else if (Auth::user()->role === 'pemilik_mobil') {
                return redirect()->intended('/pemilik-mobil/dashboard');
            }
            alert::success('Login Berhasil', 'Selamat Datang.');
        }
    }

    public function showRegisterForm()
    {
        return view('formregister.index');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6'
        ]);

        $data['username'] = $request->username;
        $data['password'] = Hash::make($request->password);
        $data['role'] = 'admin';

        Akun::create($data);

        $login = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($login)) {
            if (Auth::user()->role === 'admin') {
                return redirect()->intended('/admin/dashboard');
            } else if (Auth::user()->role === 'pelanggan') {
                return redirect()->intended('/pelanggan/dashboard');
            } else if (Auth::user()->role === 'pemilik_mobil') {
                return redirect()->intended('/pemilik-mobil/dashboard');
            }
            alert::success('Login Berhasil', 'Selamat Datang.');
        }
    }


    public function logout()
    {
        Auth::logout();

        return redirect()->route('formlogin.index');
    }
}