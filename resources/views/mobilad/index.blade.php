@extends('layoutad.layout')
@section('title', 'Manajemen Mobil')
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
                                <button class="nav-link active" id="sedan-tab" data-bs-toggle="tab"
                                    data-bs-target="#sedan-tab-pane" type="button" role="tab"
                                    aria-controls="sedan-tab-pane" aria-selected="true">Sedan</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="suv-tab" data-bs-toggle="tab" data-bs-target="#suv-tab-pane"
                                    type="button" role="tab" aria-controls="suv-tab-pane"
                                    aria-selected="false">SUV</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="minibus-tab" data-bs-toggle="tab"
                                    data-bs-target="#minibus-tab-pane" type="button" role="tab"
                                    aria-controls="minibus-tab-pane" aria-selected="false">Mini Bus</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="truck-tab" data-bs-toggle="tab"
                                    data-bs-target="#truck-tab-pane" type="button" role="tab"
                                    aria-controls="truck-tab-pane" aria-selected="false">Truck</button>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" name="search" placeholder="Search"
                                aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="sedan-tab-pane" role="tabpanel"
                                aria-labelledby="sedan-tab" tabindex="0">
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>TIPE MOBIL</th>
                                            <th>MERK MOBIL</th>
                                            <th>AKSI</th>
                                        </tr>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($mobil as $kendaraan)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $kendaraan->tipe_mobil }}</td>
                                                <td class="text-capitalize">{{ $kendaraan->merk_mobil }}</td>
                                                <td>
                                                    <a href="">
                                                        <button class="btn btn-primary">Detail</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    </thead>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="suv-tab-pane" role="tabpanel" aria-labelledby="suv-tab"
                                tabindex="0">
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>TIPE MOBIL</th>
                                            <th>MERK MOBIL</th>
                                            <th>AKSI</th>
                                        </tr>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        {{-- @foreach ($user as $pengguna) --}}
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="text-capitalize"></td>
                                            <td>
                                                <a href="">
                                                    <button class="btn btn-primary">Detail</button>
                                                </a>
                                            </td>
                                        </tr>
                                        {{-- @endforeach --}}
                                    </tbody>
                                    </thead>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="minibus-tab-pane" role="tabpanel" aria-labelledby="minibus-tab"
                                tabindex="0">
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>TIPE MOBIL</th>
                                            <th>MERK MOBIL</th>
                                            <th>AKSI</th>
                                        </tr>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        {{-- @foreach ($user as $pengguna) --}}
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="text-capitalize"></td>
                                            <td>
                                                <a href="">
                                                    <button class="btn btn-primary">Detail</button>
                                                </a>
                                            </td>
                                        </tr>
                                        {{-- @endforeach --}}
                                    </tbody>
                                    </thead>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="truck-tab-pane" role="tabpanel" aria-labelledby="truck-tab"
                                tabindex="0">
                                <table class="table table-hovered table-bordered">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>TIPE MOBIL</th>
                                            <th>MERK MOBIL</th>
                                            <th>AKSI</th>
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
                                                    <button class="btn btn-primary">Detail</button>
                                                </a>
                                            </td>
                                        </tr>
                                        {{-- @endforeach --}}
                                    </tbody>
                                    </thead>
                                </table>
                            </div>

                            <!-- resources/views/posts/index.blade.php -->
                            <div class="card-footer">
                                <button class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#tambahMobilModal">Tambah</button>
                            </div>
                            <!-- A Modal Tambah Mobil -->
                            <div class="modal fade" id="tambahMobilModal" tabindex="-1"
                            aria-labelledby="tambahMobilModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="tambahMobilModalLabel">Tambah Mobil</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form Tambah Mobil -->
                                        <form method="post" action="{{ route('mobilad.simpan') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="" class="form-label">Tipe Mobil</label>
                                                <select name="tipe" id="tipe" class="form-select input">
                                                    <option value="">Pilih</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Merk Mobil</label>
                                                <select name="merk" id="merk" class="form-select input">
                                                    <option value=""></option>
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
    </div>

        {{-- <script>
            // Daftar merk mobil untuk setiap tipe mobil
            let sedan = ["Toyota", "Honda", "Nissan"];
            let suv = ["Ford", "Chevrolet", "Jeep"];
            let minibus = ["Mercedes", "Volkswagen", "Iveco"];
            let truck = ["Isuzu", "Volvo", "Scania"];
        
            let slct1 = document.getElementById("slct1");
            let slct2 = document.getElementById("slct2");
        
            slct1.addEventListener("change", function () {
                slct2.innerHTML = "<option></option>";
                if (this.value == "Sedan") {
                    addToSlct2(sedan);
                }
                if (this.value == "Suv") {
                    addToSlct2(suv);
                }
            });
        
            function addToSlct2(arr) {
                arr.forEach(function (item) {
                    let option = document.createElement("option");
                    option.text = item;
                    option.value = item;
                    slct2.appendChild(option);
                });
            }
        </script> --}}
        
