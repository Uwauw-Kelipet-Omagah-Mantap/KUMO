<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;

class ListMobilControllerPL extends Controller
{
    public function __construct()
    {
        $this->pengguneModel = new Akun;
    }

    public function index(Request $request)
    {
        $search = $request->input('search');

        $peminjaman = $request->input('peminjaman');

        $penggune = Akun::when($search, function ($query) use ($search) {
            $query->where('username', 'like', '%' . $search . '%')
                ->orWhere('role', 'like', '%' . $search . '%');
        })->get();
        return view('pelanggan.list-mobil.index', compact('penggune'));
    }
}
