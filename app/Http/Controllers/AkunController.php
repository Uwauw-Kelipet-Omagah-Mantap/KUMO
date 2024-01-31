<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;
use Hash;
use RealRashid\SweetAlert\Facades\Alert;

class TabelAkunController extends Controller
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new Akun;
    }

    public function index(Request $request)
    {
        $search = $request->input('search');

        $user = Akun::when($search, function ($query) use ($search) {
            $query->where('username', 'like', '%' . $search . '%')
                ->orWhere('role', 'like', '%' . $search . '%');
        })->get();
        $data = [
            'user' => Akun::all()
        ];
        return view('pengguna.index', $data, compact('user'));
    }

    public function tambah()
    {
        $data = [
            'user' => Akun::all()
        ];
        return view('pengguna.tambah', $data);
    }

    public function simpan(Request $request)
    {
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);
        $user = new Akun($data);
        $user->password = Hash::make($data['password']);
        $user->save();
        Alert::success('Data berhasil ditambah');
        return redirect()->to('/admin/manage-user');
    }

    public function edit($id)
    {
        $user = Akun::find($id);
        if (!$user) {
            return redirect()->route('pengguna.index')->with('eror', 'Pengguna tidak ditemukan');
        }
        return view('pengguna.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {  
        $data = $request->validate([
            'username' => ['required'],
            'role' => ['required']
        ]);
        $user = Akun::query()->find($id);
        $user -> fill($data);
        $user -> save();
        return redirect('admin/manage-user')->with('success', 'User berhasil di update');
    }

    public function destroy($id)
    {
       $user = Akun::find($id);
       if ($user) {
            $user->delete();
       }
       return redirect()->route('pengguna.index')->with('success', 'User berhasil di hapus');
    }
}
