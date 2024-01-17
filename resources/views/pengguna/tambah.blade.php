@extends('layoutad.layout')
@section('title', 'Tambah User')
@section('content')

<style>
    .container {
        margin-top: 100px;
    }
</style>
 
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <span class="h2">Tambah User</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('pengguna.simpan') }}" enctype="multipart/form-data">
                        <div class="row">
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control mb-3" placeholder="Masukkan Username">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control mb-3" placeholder="Masukkan Password">
                                    <label>Role</label>
                                    <select name="role" class="form-select mb-3">
                                        <option value="admin">Admin</option>
                                        <option value="pemilik_mobil">Pemilik Mobil</option>
                                        <option value="pelanggan">Pelanggan</option>
                                    </select>
                                    @csrf
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="{{ route('pengguna.index') }}" class="btn btn-danger">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>