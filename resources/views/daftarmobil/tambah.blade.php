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
                    <span class="h3">Tambah Mobil</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('daftarmobil.simpan')}}" enctype="multipart/form-data">
                        <div class="row">
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Id Pemilik</label>
                                    <input type="text" class="form-control mb-3" name="id_pemilik_mobil">
                                    <label>Id Model Mobil</label>
                                    <input type="text" class="form-control mb-3" name="id_model_mobil">
                                    <label>Foto Mobil</label>
                                    <input type="file" class="form-control mb-3" name="foto_mobil">
                                    <label>Harga</label>
                                    <input type="text" class="form-control mb-3" name="harga_mobil" placeholder="Masukkan harga">
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