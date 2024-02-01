@extends('layoutad.layout')
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
                                    <th>Insert Text</th>
                                    <th>Insert Text</th>
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
                        <a href="">
                            <button class="btn btn-success">Tambah</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
