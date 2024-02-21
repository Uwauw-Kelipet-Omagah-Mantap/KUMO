@extends('pemilik-mobil.layoutpm.layout')
@section('title', 'Tabel Pemilik Mobil')
@section('content')

<style>
    .container {
        margin: 100px;
        margin-left: 25px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <span class="h2">Daftar User</span>
                </div>
                <div class="card-body">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" name="search" placeholder="Search"
                        aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <table class="table table-hovered table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>USERNAME</th>
                                <th>NAMA</th>
                                <th>ALAMAT</th>
                                <th>NO TELEPON</th>
                                <th>FOTO KTP</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($pemilik as $pm)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $pm->username }}</td>
                                    <td>{{ $pm->nama_pemilik }}</td>
                                    <td>{{ $pm->alamat_pemilik }}</td>
                                    <td>{{ $pm->nomor_pemilik_mobil }}</td>
                                    <td>{{ $pm->foto_ktp_pemilik}}</td>
                                    <td>
                                        <button class="btn btn-success">Edit</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#tambahAkunModal">Tambah</button>
                </div>
                <!-- A Modal Tambah Mobil -->
                <div class="modal fade" id="tambahAkunModal" tabindex="-1" aria-labelledby="tambahAkunModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahAkunModalLabel">Tambah Akun</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Form Tambah Mobil -->  
                                <form method="post" action="{{ route('penggunapm.simpan') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control mb-3"
                                            placeholder="Masukkan Username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nama</label>
                                        <input type="text" name="nama_pemilik" class="form-control mb-3"
                                            placeholder="Masukkan Nama Lengkap">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Alamat</label>
                                        <input type="text" name="alamat_pemilik" class="form-control mb-3"
                                            placeholder="Masukkan Alamat">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nomor Telepon</label>
                                        <input type="number" name="nomor_telepon_pemilik" class="form-control mb-3"
                                            placeholder="Masukkan Nomor Telepon">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Foto KTP</label>
                                        <input type="file" name="foto_ktp_pemilik" class="form-control mb-3">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>           
            </div>
        </div>
    </div>
</div>

@endsection  