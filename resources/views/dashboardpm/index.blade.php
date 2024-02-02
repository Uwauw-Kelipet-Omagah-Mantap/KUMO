@extends('layoutpm.layout')
@section('title', 'Halaman Dashboard')
@section('content')

@extends('layoutad.layout')
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
                    <span class="h2">Manajemen Mobil</span>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="sedan-tab" data-bs-toggle="tab" data-bs-target="#sedan-tab-pane" type="button" role="tab" aria-controls="sedan-tab-pane" aria-selected="true">Sedan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="suv-tab" data-bs-toggle="tab" data-bs-target="#suv-tab-pane" type="button" role="tab" aria-controls="suv-tab-pane" aria-selected="false">SUV</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="minibus-tab" data-bs-toggle="tab" data-bs-target="#minibus-tab-pane" type="button" role="tab" aria-controls="minibus-tab-pane" aria-selected="false">Mini Bus</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="truck-tab" data-bs-toggle="tab" data-bs-target="#truck-tab-pane" type="button" role="tab" aria-controls="truck-tab-pane" aria-selected="false">Truck</button>
                        </li>
                      </ul>
                      <form class="d-flex">
                        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="sedan-tab-pane" role="tabpanel" aria-labelledby="sedan-tab" tabindex="0">
                            <table class="table table-hovered table-bordered">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>MERK MOBIL</th>
                                    <th>HARGA</th>
                                    <th>AKSI</th>
                                </tr>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    {{-- @foreach ( $user as $pengguna ) --}}
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="text-capitalize"></td>
                                            <td>
                                                <a href="{{ url('/admin') }}/manage-user/edit/">
                                                    <button class="btn btn-primary">Edit</button>
                                                </a>
                                                <form action="{{ url('/admin', ['manage-user', 'destroy',]) }}" method="POST" class="d-inline">
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
                        <div class="tab-pane fade" id="suv-tab-pane" role="tabpanel" aria-labelledby="suv-tab" tabindex="0">
                            <table class="table table-hovered table-bordered">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>MERK MOBIL</th>
                                    <th>HARGA</th>
                                    <th>AKSI</th>
                                </tr>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    {{-- @foreach ( $user as $pengguna ) --}}
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="text-capitalize"></td>
                                            <td>
                                                <a href="">
                                                    <button class="btn btn-primary">Edit</button>
                                                </a>
                                                <form action="" method="POST" class="d-inline">
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
                        <div class="tab-pane fade" id="minibus-tab-pane" role="tabpanel" aria-labelledby="minibus-tab" tabindex="0">
                            <table class="table table-hovered table-bordered">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>MERK MOBIL</th>
                                    <th>HARGA</th>
                                    <th>AKSI</th>
                                </tr>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    {{-- @foreach ( $user as $pengguna ) --}}
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="text-capitalize"></td>
                                            <td>
                                                <a href="">
                                                    <button class="btn btn-primary">Edit</button>
                                                </a>
                                                <form action="" method="POST" class="d-inline">
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
                        <div class="tab-pane fade" id="truck-tab-pane" role="tabpanel" aria-labelledby="truck-tab" tabindex="0"><table class="table table-hovered table-bordered">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>MERK MOBIL</th>
                                    <th>HARGA</th>
                                    <th>AKSI</th>
                                </tr>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    {{-- @foreach ( $user as $pengguna ) --}}
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="text-capitalize"></td>
                                            <td>
                                                <a href="">
                                                    <button class="btn btn-primary">Edit</button>
                                                </a>
                                                <form action="" method="POST" class="d-inline">
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
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahMobilModal">Tambah</button>
                    </div>
                    <!-- Modal Tambah Mobil -->
                    <div class="modal fade" id="tambahMobilModal" tabindex="-1" aria-labelledby="tambahMobilModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tambahMobilModalLabel">Tambah Mobil</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Form Tambah Mobil -->
                                    <form method="post" action="{{ url('/admin/manage-mobil/simpan') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="merk_mobil" class="form-label">Merk Mobil</label>
                                            <input type="text" class="form-control" id="merk_mobil" name="merk_mobil" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="harga" class="form-label">Harga</label>
                                            <input type="number" class="form-control" id="harga" name="harga" required>
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
</div>