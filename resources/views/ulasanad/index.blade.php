@extends('layoutad.layout')
@section('title', 'Manajemen Ulasan')
@section('content')

    <style>
        .container {
            margin: 100px;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <span class="h2">Manajemen Ulasan</span>
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
                                    <th>Mobil</th>
                                    <th>Ulasan</th>
                                    <th>Rating</th>
                                    <th>Aksi</th>
                                </tr>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                {{-- @foreach ($user as $pengguna) --}}
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td></td>
                                    <td class="text-capitalize"></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="">
                                            <button class="btn btn-primary">Edit</button>
                                        </a>
                                        <form action="" method="POST" class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                {{-- @endforeach --}}
                            </tbody>
                            </thead>
                        </table>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#tambahAkunModal">Tambah</button>
                    </div>
                    <!-- A Modal Tambah Mobil -->
                    <div class="modal fade" id="tambahAkunModal" tabindex="-1"
                    aria-labelledby="tambahAkunModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tambahAkunModalLabel">Tambah Transaksi (Example)</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Form Tambah Mobil -->
                                <form method="post" action="{{ route('pengguna.simpan') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Username</label>
                                        <input type="text" name="Username" class="form-control mb-3" placeholder="Masukkan Username" value="FALSE TRANSACTION" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Mobil</label>
                                        <input type="text" name="Mobil" class="form-control mb-3" placeholder="Mobil">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Ulasan</label>
                                        <input type="text" name="Ulasan" class="form-control mb-3" placeholder="Ulasan">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Rating</label>
                                        <input type="text" name="Rating" class="form-control mb-3" placeholder="Rating" onkeypress="return /[1-5]/i.test(event.key)">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
    
                </div>
                </div>
            </div>
        </div>
    </div>
