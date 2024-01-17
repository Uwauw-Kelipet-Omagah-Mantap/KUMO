@extends('layout.layout')
@section('title', 'Tambah Mobil')
@section('content')

<style>
    .card {
        margin-top: 100px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <span class="h3">Edit Pemilik</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('pemilikmobil.update', $pm->nama_pemilik) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="username" class="form-control mb-3" name="nama_pemilik">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control mb-3" name="alamat_pemilik">
                                    <label>Nomor Telepon</label>
                                    <input type="text" class="form-control mb-3" name="nomor_telepon_pemilik">
                                    <label>Foto KTP</label>
                                    <input type="file" class="form-control mb-3" name="foto_ktp_pemilik">
                                    @csrf
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>