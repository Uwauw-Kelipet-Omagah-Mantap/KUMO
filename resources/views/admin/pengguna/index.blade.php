@extends('admin.layoutad.layout')
@section('title', 'Manajemen User')
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
                                    <th>ROLE</th>
                                    <th>AKSI</th>
                                </tr>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($user as $pengguna)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $pengguna->username }}</td>
                                        <td class="text-capitalize">{{ $pengguna->role }}</td>
                                        <td>
                                            <button class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#editAkunModal{{ $loop->iteration }}">Edit</button>

                                            <form
                                                action="{{ url('/admin', ['manage-user', 'destroy', $pengguna->username]) }}"
                                                method="POST" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="editAkunModal{{ $loop->iteration }}" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editAkunModalLabel{{ $pengguna->id }}">Edit
                                                        Akun</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body py-0">
                                                    <!-- Form Edit Mobil -->
                                                    <form method="post"
                                                        action="{{ route('pengguna.update', $pengguna->username) }}">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Username</label>
                                                            <input type="text" name="username" class="form-control mb-3"
                                                                placeholder="Masukkan Username"
                                                                value="{{ old('username') ?? $pengguna->username }}">
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Password</label>
                                                            <input type="password" name="password" class="form-control mb-3"
                                                                placeholder="Masukkan Password">
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Role</label>
                                                            <select name="role" class="form-select mb-3">
                                                                <option value="admin"
                                                                    {{ $pengguna->role === 'admin' ? 'selected' : '' }}>
                                                                    Admin</option>
                                                                <option value="pemilik_mobil"
                                                                    {{ $pengguna->role === 'pemilik_mobil' ? 'selected' : '' }}>
                                                                    Pemilik Mobil</option>
                                                                <option value="pelanggan"
                                                                    {{ $pengguna->role === 'pelanggan' ? 'selected' : '' }}>
                                                                    Pelanggan</option>
                                                            </select>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Edit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                            </thead>
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
                                    <form method="post" action="{{ route('pengguna.simpan') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="" class="form-label">Username</label>
                                            <input type="text" name="username" class="form-control mb-3"
                                                placeholder="Masukkan Username">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control mb-3"
                                                placeholder="Masukkan Password">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Role</label>
                                            <select name="role" class="form-select mb-3">
                                                <option value="admin">Admin</option>
                                                <option value="pemilik_mobil">Pemilik Mobil</option>
                                                <option value="pelanggan">Pelanggan</option>
                                            </select>
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
