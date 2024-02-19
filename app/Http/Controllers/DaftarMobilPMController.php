<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\ModelMobil;
use Illuminate\Http\Request;
use App\Models\PemilikMobil;

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
        // dd($request);
        $data = $request->validate([
            'nama_pemilik' => 'required', // Pastikan ada input untuk id_pemilik_mobil
            'nama_mobil' => 'required',
            'foto_mobil' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'harga_mobil' => 'required|numeric', // tambahkan validasi untuk tipe data harga
        ]);

        
        // Ambil ID pemilik mobil berdasarkan nama pemilik dari pengguna yang sedang login
        $namaPemilik = $request->nama_pemilik;
        $pemilik = PemilikMobil::where('nama_pemilik', $namaPemilik)->first();
        $idPemilikMobil = $pemilik->id_pemilik_mobil;
    
        // Ambil ID tipe mobil dan merk mobil berdasarkan nama dari request
        $tipeMobil = $request->tipe_mobil;
        $merkMobil = $request->merk_mobil;
        $modelMobil = ModelMobil::where('tipe_mobil', $tipeMobil)->where('merk_mobil', $merkMobil)->first();
        
        // Simpan foto mobil ke direktori yang sesuai dalam storage
        if ($request->file('foto_mobil')) {
            $file = $request->file('foto_mobil');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/file', $fileName);
    
            // Simpan data mobil ke dalam tabel mobil menggunakan metode create
            Mobil::create([
                'id_pemilik_mobil' => $idPemilikMobil,
                'id_model_mobil' => $modelMobil->id, // Gunakan ID model mobil dari pencarian sebelumnya
                'nama_mobil' => $data['nama_mobil'],
                'foto_mobil' => 'storage/file/' . $fileName,
                'harga_mobil' => $data['harga_mobil'],
            ]);
            return redirect()->route('daftarmobilpm.index')->with('success', 'Mobil berhasil ditambah');
        } else {
            return redirect()->route('daftarmobilpm.index')->with('error', 'Mobil gagal ditambah');
        }
    }    
}
