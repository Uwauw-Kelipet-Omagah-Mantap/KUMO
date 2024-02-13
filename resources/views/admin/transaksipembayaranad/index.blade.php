@extends('admin.layoutad.layout')
@section('title', 'Riwayat Transaksi')
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
                        <span class="h2">Riwayat Transaksi</span>
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
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Status Pembayaran</th>
                                    <th>Status Pemesanan</th>
                                    <th>Total Biaya</th>
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
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td <a href="">
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
                    <div class="modal fade" id="tambahAkunModal" tabindex="-1" aria-labelledby="tambahAkunModalLabel"
                        aria-hidden="true">
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
                                            <input type="text" name="Username" class="form-control mb-3"
                                                placeholder="Masukkan Username" value="FALSE TRANSACTION" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Mobil</label>
                                            <input type="text" name="Mobil" class="form-control mb-3"
                                                placeholder="Nama Pemilik Rekening">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Tanggal Mulai</label>
                                            <input type="date" name="No Rekening" class="form-control mb-3"
                                                placeholder="No Rekening">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Tanggal Selesai</label>
                                            <input type="date" name="No Rekening" class="form-control mb-3"
                                                placeholder="No Rekening">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Status Pemesanan</label>
                                            <select name="role" class="form-select mb-3">
                                                <option value="belum_dibayar">Belum Dibayar</option>
                                                <option value="sudah_dibayar">Sudah Diabayar</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Status Pemesanan</label>
                                            <select name="role" class="form-select mb-3">
                                                <option value="menunggu_konfirmasi">Menunggu Konfirmasi</option>
                                                <option value="di_konfirmasi">Di Konfirmasi</option>
                                                <option value="sedang_diantar">Sedang Diantar</option>
                                                <option value="sudah_ada_ditujuan">Sudah Ada Ditujuan</option>
                                                <option value="sedang_dalam_masa_penggunaan">Sedang dalam Masa penggunaan
                                                </option>
                                                <option value="dalam_masa_pengembalian">Dalam Masa Pengembalian</option>
                                                <option value="sudah_dikembalikan">Sudah Dikembalikan</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Tanggal Selesai</label>
                                            <input input type="number" min="0.00" max="1.000.000.000" step="100.000"
                                                name="Total Biaya" class="form-control mb-3" placeholder="Total Biaya">
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
