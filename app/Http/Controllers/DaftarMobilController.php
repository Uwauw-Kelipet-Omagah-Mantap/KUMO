<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class DaftarMobilController extends Controller
{
    public function index()
    {
        $mobil = Mobil::all();
        return view("daftarmobil.index", compact('mobil'));
    }

    public function tambah()
    {
        return view('daftarmobil.tambah');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'id_pemilik_mobil' => 'required',
            'id_model_mobil' => 'required',
            'foto_mobil' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'harga_mobil' => 'required|numeric' // tambahkan validasi untuk tipe data harga
        ]);

        // Simpan foto mobil ke direktori yang sesuai dalam storage
        if ($request->file('foto_mobil')) {
            $file = $request->file('foto_mobil');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/file', $fileName);

            // Simpan data mobil ke dalam tabel mobil menggunakan metode create
            Mobil::create([
                'id_pemilik_mobil' => $request->id_pemilik_mobil,
                'id_model_mobil' => $request->id_model_mobil,
                'foto_mobil' => 'storage/file/' . $fileName,
                'harga_mobil' => $request->harga_mobil,
            ]);

            return redirect()->route('daftarmobil.index')->with('success', 'Mobil berhasil ditambah');
        } else {
            return redirect()->route('daftarmobil.index')->with('error', 'Mobil gagal ditambah');
        }
    }
}
