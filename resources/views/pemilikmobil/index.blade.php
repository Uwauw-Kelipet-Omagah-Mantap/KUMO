@extends('layoutpm.layout')
@section('title', 'Daftar Mobil')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyJq41R9u11qZ/Cq0FF2m6N5BIb/D5Q5c3" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js" integrity="sha384-FG7aR1z7U4Z6BYl719/RA7L+TC9a0Cd8PcAe0qsnzO+zdA9Kxq8GWRNEo96gZL1B" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyJq41R9u11qZ/Cq0FF2m6N5BIb/D5Q5c3" crossorigin="anonymous"></script>


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
                    <span class="h2">Pemilik Mobil</span>
                </div>
                <div class="card-body">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <table class="table table-hovered table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>ALAMAT</th>
                                <th>NOMOR TELEPON</th>
                                <th>FOTO KTP</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1
                            @endphp    
                            @foreach ( $pemilik as $pm )
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $pm->nama_pemilik }}</td>
                                    <td>{{ $pm->alamat_pemilik}}</td>
                                    <td>{{ $pm->nomor_telepon_pemilik }}</td>
                                    <td>
                                        <img src="{{asset("$pm->foto_ktp_pemilik")}}" alt="" width="100" height="100">
                                    </td>
                                    <td>
                                        <a href="{{ url('/dashboard') }}/pemilikmobil/edit/{{ $pm->nama_pemilik }}">
                                            <button class="btn btn-primary">Edit</button>
                                        </a>
                                        <form action="">
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{ route('pemilikmobil.tambah') }}"><button class="btn btn-success">Tambah</button></a>
                </div>
            </div>
        </div>
    </div>
</div>