@extends('layoutpm.layout')
@section('title', 'Daftar Mobil')
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
                    <span class="h3 text">Daftar Mobil</span>
                </div>
                <div class="card-body">
                    <table class="table table-hovered tabel-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>ID PEMILIK</th>
                                <th>TIPE MOBIL</th>
                                <th>MERK MOBIL</th>
                                <th>FOTO MOBIL</th>
                                <th>HARGA</th>
                                <th>AKSI</th>
                            </tr>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ( $mobil as $m )
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <img src="{{ asset($m->foto_mobil) }}" alt="fotomobil">
                                        </td>
                                        <td>{{ $m->harga_mobil }}</td>
                                        <td>
                                            <a href="">
                                                <button class="btn btn-secondary">Detail</button>
                                            </a>
                                            <a href="">
                                                <button class="btn btn-primary">Edit</button>
                                            </a>
                                            <form type='submit' class="btn btn-danger">Hapus</form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </thead>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{route('daftarmobilpm.tambah')}}"><button class="btn btn-success">Tambah</button></a>
                </div>
            </div>
        </div>
    </div>
</div>