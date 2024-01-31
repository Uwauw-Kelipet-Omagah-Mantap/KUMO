<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class DaftarMobilPMController extends Controller
{
    public function index()
    {
        $mobil = Mobil::all();
        return view("daftarmobilpm.index", compact('mobil'));
    }

    public function tambah()
    {
        return view('daftarmobilpm.tambah');
    }

    public function simpan(Request $request)
    {
        $data = $request->validate([
            'id_pemilik_mobil' => 'required',
            'tipe_mobil' => 'required',
            'merk_mobil' => 'required',
            'foto_mobil' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'harga_mobil' => 'required|numeric', // tambahkan validasi untuk tipe data harga
        ]);
        
        // Simpan foto mobil ke direktori yang sesuai dalam storage
        if ($request->file('foto_mobil')) {
            $file = $request->file('foto_mobil');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/file', $fileName);

            // Simpan data mobil ke dalam tabel mobil menggunakan metode create
            $mobil = new Mobil($data);
            $mobil->save();
            

            return redirect()->route('daftarmobilpm.index')->with('success', 'Mobil berhasil ditambah');
        } else {
            return redirect()->route('daftarmobilpm.index')->with('error', 'Mobil gagal ditambah');
        }
    }
}
