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
                        <button class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#tambahMobilModal">Tambah</button>
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
                                    <div class="container" style="margin-top: 0px;">
                                        <div class="row">
                                            {{-- --}}
                                            <div class="1 col-md-1-5 col-lg-3 mx-0 shadow p-3 bg-white rounded"
                                                style="width: 232px">
                                                <div class="image col-lg-10">
                                                    <img src="{{ asset('brocklesnar.jpg') }}"
                                                        style="max-width: 198.825px; max-height: auto; margin:0%;"
                                                        alt="" class="mx-auto">
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
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Nama Mobil</label>
                                                                <input type="text" class="form-control"
                                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                    placeholder="Nama Mobil">
                                                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share
                                                                    your email with anyone else.</small> --}}
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label">Tipe Mobil</label>
                                                                <select name="tipe_mobil" class="form-select mb-3" required>
                                                                    <option value="sedan">Sedan</option>
                                                                    <option value="suv">SUV</option>
                                                                    <option value="minibus">Minibus</option>
                                                                    <option value="truck">Truk</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label">Merk Mobil</label>
                                                                <select name="merk_mobil" class="form-select mb-3" required>
                                                                    <option value="toyota">Toyota</option>
                                                                    <option value="daihatsu">Daihatsu</option>
                                                                    <option value="suzuki">Suzuki</option>
                                                                    <option value="mitsubishi">Mitsubishi</option>
                                                                    <option value="nisaan">Nissan</option>
                                                                    <option value="isuzu">Isuzu</option>
                                                                    <option value="bmw">BMW</option>
                                                                    <option value="mersedes-benz">Mersedes-Benz</option>
                                                                    <option value="wuling">Wuling</option>
                                                                    <option value="honda">Honda</option>
                                                                </select>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">Rp</span>
                                                                <input type="text" class="form-control"
                                                                    onkeypress="return /[0-9]/i.test(event.key)"
                                                                    placeholder="Tarif
                                                                    aria-label="Amount
                                                                    (to the nearest dollar)">
                                                                <span class="input-group-text">.00</span>
                                                            </div>
                                                        </form>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
