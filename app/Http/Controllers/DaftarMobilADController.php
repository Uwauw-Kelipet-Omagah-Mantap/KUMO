<?php

namespace App\Http\Controllers;

use App\Models\ModelMobil;
use App\Models\Tipe;

use Illuminate\Http\Request;

class DaftarMobilADController extends Controller
{



    public function index()
    {
        $mobil = ModelMobil::all();
        return view("admin.mobilad.index", compact('mobil'));
    }
    public function simpan(Request $request)
    {
        // Validasi input
        $request->validate([
            // 'id_model_mobil' => 'required|string',
            'tipe_mobil' => 'required|string',
            'merk_mobil' => 'required|string',
        ]);

        // Buat objek Mobil dan simpan data ke database
        $mobil = new ModelMobil([
            // 'id_model_mobil' => $request->id_model_mobil,
            'tipe_mobil' => $request->tipe_mobil,
            'merk_mobil' => $request->merk_mobil,
        ]);
        $mobil->save();

        // Redirect ke halaman manajemen mobil
        return redirect('/admin/manage-mobil')->with('success', 'Mobil berhasil ditambahkan!');
    }
    public function destroy($id)
    {
        $mobil = ModelMobil::find($id);
        if ($mobil) {
            $mobil->delete();
        }
        return redirect('/admin/manage-mobil')->with('success', 'Mobil berhasil dihapus!');
    }
}