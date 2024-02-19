<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;

class ListMobilController extends Controller
{
    public function __construct()
    {
        $this->userModel = new Akun;
    }

    public function index(Request $request)
    {
        $search = $request->input('search');

        $peminjaman = $request->input('peminjaman');
        
        $user = Akun::when($search, function ($query) use ($search) {
            $query->where('username', 'like', '%' . $search . '%')
                ->orWhere('role', 'like', '%' . $search . '%');
        })->get();
        return view('list-mobil.index', compact('user'));
    }

}
