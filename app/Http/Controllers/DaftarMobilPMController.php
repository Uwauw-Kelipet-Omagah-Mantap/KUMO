<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\ModelMobil;
use Illuminate\Http\Request;
use App\Models\PemilikMobil;
use Illuminate\Support\Facades\Storage;

class DaftarMobilPMController extends Controller
{
    public function index()
    {
        $data = [
            "mobil" => Mobil::all(),
            "model_mobil" => ModelMobil::all(),
            'pemilik_mobil' => PemilikMobil::all()
        ];
        return view("pemilik-mobil.daftarmobilpm.index", $data);
    }
    public function simpan(Request $request)
    {
        dd($request);
        // Validasi input
        $data = $request->validate([
            'nama_pemilik' => 'required',
            'nama_mobil' => 'required',
            'foto_mobil' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'harga_mobil' => 'required|numeric',
            'tipe_mobil' => 'required', // tambahkan validasi untuk tipe_mobil
            'merk_mobil' => 'required', // tambahkan validasi untuk merk_mobil
        ]);

        // Ambil ID pemilik mobil berdasarkan nama pemilik dari pengguna yang sedang login
        $namaPemilik = $request->nama_pemilik;
        $pemilik = PemilikMobil::where('nama_pemilik', $namaPemilik)->first();
        if (!$pemilik) {
            return redirect()->route('pemilik-mobil.daftarmobilpm.index')->with('error', 'Pemilik mobil tidak ditemukan');
        }
        $idPemilikMobil = $pemilik->id_pemilik_mobil;

        // Ambil ID tipe mobil dan merk mobil berdasarkan nama dari request
        $tipeMobil = $request->tipe_mobil;
        $merkMobil = $request->merk_mobil;
        $modelMobil = ModelMobil::where('tipe_mobil', $tipeMobil)->where('merk_mobil', $merkMobil)->first();
        if (!$modelMobil) {
            return redirect()->route('pemilik-mobil.daftarmobilpm.index')->with('error', 'Model mobil tidak ditemukan');
        }

        // Simpan foto mobil ke direktori yang sesuai dalam storage
        if ($request->hasFile('foto_mobil')) {
            $file = $request->file('foto_mobil');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/file', $fileName);

            // Simpan data mobil ke dalam tabel mobil menggunakan metode create
            Mobil::create([
                'id_pemilik_mobil' => $idPemilikMobil,
                'id_model_mobil' => $modelMobil->id_model_mobil,
                'nama_mobil' => $data['nama_mobil'],
                'foto_mobil' => $fileName, // ubah menjadi nama file saja
                'harga_mobil' => $data['harga_mobil'],
            ]);
            return redirect()->route('pemilik-mobil.daftarmobilpm.index')->with('success', 'Mobil berhasil ditambah');
        } else {
            return redirect()->route('pemilik-mobil.daftarmobilpm.index')->with('error', 'Mobil gagal ditambah');
        }
    }
}