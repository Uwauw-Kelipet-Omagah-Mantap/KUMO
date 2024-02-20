@extends('pemilik-mobil.layoutpm.layout')
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
                                    {{-- <th>ID MOBIL</th> --}}
                                    <th>NAMA PEMILIK</th>
                                    <th>NAMA MOBIL</th>
                                    <th>TIPE MOBIL</th>
                                    <th>MERK MOBIL</th>
                                    <th>FOTO MOBIL</th>
                                    <th>TARIF</th>
                                    <th>AKSI</th>
                                </tr>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($mobil as $m)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        {{-- <td>{{ $m->id_mobil }}</td> --}}
                                        <td>{{ $m->pemilik_mobil->nama_pemilik }}</td>
                                        <td>{{ $m->nama_mobil }}</td>
                                        <td>{{ $m->tipe_mobil }}</td>
                                        <td>{{ $m->merk_mobil }}</td>
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
                        <button class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#tambahMobilModal">Tambah
                        </button>
                    </div>
                    <!-- Modal Tambah Mobil -->
                    <div class="modal fade" id="tambahMobilModal" tabindex="-1" aria-labelledby="tambahMobilModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tambahMobilModalLabel">Tambah Mobil</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <!-- Form Tambah Mobil -->
                                <div class="modal-body">
                                    <div class="container">
                                        <form method="POST" action="{{ route('pemilik-mobil.daftarmobilpm.simpan') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        @foreach ($pemilik_mobil as $p)
                                                            <input type="hidden" name="id_pemilik_mobil" value="{{ $p->id_pemilik_mobil }}">
                                                        @endforeach   
                                                    </div>
                                                    <!-- Tambahkan input hidden untuk id_pemilik_mobil -->
                                                    {{-- <input type="hidden" name="nama_pemilik" value="{{ Auth::user()->nama_pemilik }}"> --}}
                                                    <div class="form-group">
                                                        <label for="nama_mobil">Nama Mobil</label>
                                                        <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" placeholder="Masukkan Nama Mobil">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Tipe Mobil</label>
                                                        <select name="tipe_mobil" class="form-select mb-3" required>
                                                            @foreach ($model_mobil as $m)
                                                                <option value="{{ $m->tipe_mobil }}">{{ $m->tipe_mobil }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Merk Mobil</label>
                                                        <select name="merk_mobil" class="form-select mb-3" required>
                                                            @foreach ($model_mobil as $m)
                                                                <option value="{{ $m->id_model_mobil }}">{{ $m->merk_mobil }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- Pratinjau gambar -->
                                                    <div class="form-group">
                                                        <label for="foto_mobil">Foto Mobil</label>
                                                        <input type="file" name="foto_mobil" id="fileUpload" onchange="previewImage()" class="file-input" accept="image/jpeg, .jpeg, .jpg, image/png, .png">
                                                        <img id="imagePreview" src="#" alt="Preview" style="display: none; max-width: 100%; max-height: 200px; margin-top: 10px;">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="harga_mobil">Harga Mobil</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">Rp</span>
                                                            <input name="harga_mobil" type="text" class="form-control" onkeypress="return /[0-9]/i.test(event.key)" placeholder="Masukkan Harga" aria-label="Amount (to the nearest dollar)">
                                                            <span class="input-group-text">.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success">Simpan</button>
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

    