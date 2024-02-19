<?php

namespace App\Http\Controllers;

use App\Models\PemilikMobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PemilikMobilController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $pemilik = PemilikMobil::when($search, function ($query) use ($search) {
            $query->where('nama_pemilik', 'like', '%' . $search . '%')
                ->orWhere('alamat_pemilik', 'like', '%' . $search . '%')
                ->orWhere('nomor_telepon_pemilik', 'like', '%' . $search . '%');
        })->get();
        return view('pemilik-mobil.pemilikmobil.index', compact('pemilik'));
    }
    
    public function simpan(Request $request)
    {
        // Validasi data
        $data = $request->validate([
            'nama_pemilik' => ['required'],
            'alamat_pemilik' => ['required'],
            'nomor_telepon_pemilik' => ['required'],
            'foto_ktp_pemilik' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048']
        ]);

        // Ambil username pengguna yang sedang login
        $username = Auth::user()->username;

         // Simpan foto KTP pemilik ke direktori yang sesuai dalam storage
         if ($request->file('foto_ktp_pemilik')) {
            $file = $request->file('foto_ktp_pemilik');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/file', $fileName);

            // Simpan data pemilik mobil ke dalam tabel pemilik_mobil menggunakan metode create
            PemilikMobil::create([
                'username' => $username,'username',
                'nama_pemilik' => $request->nama_pemilik,
                'alamat_pemilik' => $request->alamat_pemilik,
                'nomor_telepon_pemilik' => $request->nomor_telepon_pemilik,
                'foto_ktp_pemilik' => 'storage/file/' . $fileName,
            ]);
            return redirect()->route('pemilik-mobil.pemilikmobil.index')->with('success', 'Pemilik berhasil ditambah');
        } else {
            return redirect()->route('pemilik-mobil.pemilikmobil.index')->with('error', 'Pemilik gagal ditambah');
        }
    }

    public function edit($id)
    {
        $pemilik = PemilikMobil::find($id);
        return view('penggunapm.edit', compact('pemilik'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'username' => 'required',
            'nama_pemilik' => 'required',
            'alamat_pemilik' => 'required',
            'nomor_telepon_pemilik' => 'required',
            'foto_ktp_pemilik' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // tambahkan validasi gambar
        ]);

        $pemilik = PemilikMobil::find($id);

        // Hapus foto KTP lama jika ada
        if ($request->hasFile('foto_ktp_pemilik') && file_exists(public_path($pemilik->foto_ktp_pemilik))) {
            unlink(public_path($pemilik->foto_ktp_pemilik));
        }

        // Simpan foto KTP baru jika diunggah
        if ($request->hasFile('foto_ktp_pemilik')) {
            $file = $request->file('foto_ktp_pemilik');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/file', $fileName);
            $data['foto_ktp_pemilik'] = 'storage/file/' . $fileName;
        }

        // Update data pemilik
        $pemilik->update($data);

        return redirect()->route('penggunapm.index')->with('success', 'Data pemilik berhasil diperbarui');
    }

}

