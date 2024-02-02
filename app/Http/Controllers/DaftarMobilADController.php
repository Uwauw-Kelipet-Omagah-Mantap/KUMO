<?php

namespace App\Http\Controllers;

use App\Models\ModelMobil;

use Illuminate\Http\Request;

class DaftarMobilADController extends Controller
{
    public function index()
    {
        $mobil = ModelMobil::all();
        return view("mobilad.index", compact('mobil'));
    }
    public function simpan(Request $request)
    {
        // Validasi input
        $request->validate([
            'tipe_mobil' => 'required|string',
            'merk_mobil' => 'required|string',
        ]);

        // Buat objek Mobil dan simpan data ke database
        $mobil = new ModelMobil([
            'tipe_mobil' => $request->tipe_mobil,
            'merk_mobil' => $request->merk_mobil,
        ]);
        $mobil->save();

        // Redirect ke halaman manajemen mobil
        return redirect('/admin/manage-mobil')->with('success', 'Mobil berhasil ditambahkan!');
    }
}
