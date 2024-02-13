@extends('pemilik-mobil.layoutpm.layout')
@section('title', 'Daftar Mobil')
@section('content')

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyJq41R9u11qZ/Cq0FF2m6N5BIb/D5Q5c3" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"
        integrity="sha384-FG7aR1z7U4Z6BYl719/RA7L+TC9a0Cd8PcAe0qsnzO+zdA9Kxq8GWRNEo96gZL1B" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyJq41R9u11qZ/Cq0FF2m6N5BIb/D5Q5c3" crossorigin="anonymous">
    </script>


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
                        <div class="container" style="margin-top: 0px;">
                            <div class="row">
                                {{-- --}}
                                <div class="1 col-md-1-5 col-lg-3 mx-0 shadow p-3 bg-white rounded">
                                    <div class="image col-lg-10">
                                        <img src="{{ asset('brocklesnar.jpg') }}"
                                            style="max-width: 198.825px; max-height: auto; margin:0%;" alt=""
                                            class="mx-auto">
                                    </div>
                                    <div class="button col-md-1-5 col-lg-10 mx-0 p-1">
                                        {{-- <button type="button" class="btn btn-outline-dark btn-sm btn-block">Pilih Foto</button> --}}
                                        <input type="file" name="profilePicture" class=""
                                            accept="image/jpeg, .jpeg, .jpg, image/png, .png">
                                    </div>
                                </div>
                                <div class="2 col-sm-auto">
                                    <table class="table table-hovered table-bordered">
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($pemilik as $pm)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $pm->nama_pemilik }}</td>
                                                    <td>{{ $pm->alamat_pemilik }}</td>
                                                    <td>{{ $pm->nomor_telepon_pemilik }}</td>
                                                    <td>
                                                        <img src="{{ asset("$pm->foto_ktp_pemilik") }}" alt=""
                                                            width="100" height="100">
                                                    </td>
                                                    <td>
                                                        <a
                                                            href="{{ url('/dashboard') }}/pemilikmobil/edit/{{ $pm->nama_pemilik }}">
                                                            <button class="btn btn-primary">Edit</button>
                                                        </a>
                                                        <form action="">
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <form>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="Enter email">
                                                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share
                                                        your email with anyone else.</small> --}}
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                                        placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputNumber1">Nomor Telepon</label>
                                                    <input type="text" class="form-control" id="exampleInputNumber1"
                                                        placeholder="number" onkeypress="return /[0-9]/i.test(event.key)">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputPhoto1">Foto Ktp</label>
                                                    <div>
                                                        <input type="file" name="profilePicture" class=""
                                                            accept="image/jpeg, .jpeg, .jpg, image/png, .png">
                                                    </div>
                                                </div>
                                            </form>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href=""><button class="btn btn-success">Simpan</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
