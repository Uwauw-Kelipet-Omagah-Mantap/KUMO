<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            if (Auth::user()->role === 'admin') {
                return redirect()->intended('/admin/dashboard');
            } else if (Auth::user()->role === 'pelanggan') {
                return redirect()->intended('/pelanggan/dashboard');
            } else if (Auth::user()->role === 'pemilik_mobil') {
                return redirect()->intended('/pemilik-mobil/dashboard');
            }
        }

        return redirect()->route('formlogin.index')->with('error', 'Login gagal. Periksa kembali username dan password Anda.');
    }

    public function showRegisterForm()
    {
        return view('formregister.index');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:akun',
            'password' => 'required|min:6',
            'role' => 'required|in:admin,pelanggan,pemilik_mobil',
        ]);

        $user = Akun::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        // Lakukan tindakan setelah registrasi berhasil, misalnya autentikasi atau redirect ke halaman login
        // ...

        return redirect()->route('formlogin.index')->with('success', 'Registrasi berhasil. Silakan login.');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('formlogin.index');
    }
}