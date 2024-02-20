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
                        <div class="modal-body">
                            <!-- Form Tambah Mobil -->  
                            <form method="post" action="{{ route('penggunapm.simpan') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Pemilik</label>
                                    <input type="text" name="nama_pemilik" class="form-control mb-3" placeholder="Masukkan Nama Pemilik">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Alamat Pemilik</label>
                                    <input type="text" name="alamat_pemilik" class="form-control mb-3" placeholder="Masukkan Alamat Pemilik">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Nomor Telepon Pemilik</label>
                                    <input type="text" name="nomor_telepon_pemilik" class="form-control mb-3" placeholder="Masukkan Nomor Telepon Pemilik">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Foto KTP Pemilik</label>
                                    <input type="file" name="foto_ktp_pemilik" class="form-control mb-3">
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>                                    
            </div>
        </div>
    </div>
</div>

@endsection    