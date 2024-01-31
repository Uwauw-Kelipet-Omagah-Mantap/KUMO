<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Hash;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TabelAkunController extends Controller
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new Akun;
    }

    public function index()
    {
        $data = [
            'user' => Akun::all()
        ];
        return view('akun.index', $data);
    }

    public function tambah()
    {
        $data = ['user' => Akun::all()];
        return view('akun.tambah', $data);
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
        return redirect()->to('/dashboard/manage-user');
    }


    public function edit($id)
    {
        $user = Akun::find($id);
        
        if (!$user) {
            return redirect()->route('akun.index')->with('error', 'akun tidak ditemukan');
        }
        
        return view('akun.edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'username' => ['required', 'max:40'],
            'role' => ['required']
        ]);

        $user = Akun::query()->find($id);
        $user -> fill($data);
        $user -> save();

        return redirect('/dashboard/manage-user')->with('success', 'User berhasil di update');
    }
    
    public function destroy($id)
    {
       $user = Akun::find($id);
       if($user){
            $user->delete();
        }
       return redirect()->route('akun.index')->with('success', 'Data berhasil dihapus');
    }

}