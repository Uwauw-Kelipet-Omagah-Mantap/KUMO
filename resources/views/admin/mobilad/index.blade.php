@extends('admin.layoutad.layout')
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
                        <!-- Tab Sedan -->
                        <div class="tab-pane fade show active" id="sedan-tab-pane" role="tabpanel"
                            aria-labelledby="sedan-tab" tabindex="0">
                            <!-- Tabel untuk Sedan -->
                            <table class="table table-hovered table-bordered">
                                <!-- Table Header -->
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>TIPE MOBIL</th>
                                        <th>MERK MOBIL</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <!-- Table Body -->
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($mobil->where('tipe_mobil', 'sedan') as $kendaraan)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $kendaraan->tipe_mobil }}</td>
                                            <td class="text-capitalize">{{ $kendaraan->merk_mobil }}</td>
                                            <td>
                                                <a href="">
                                                    <button class="btn btn-primary">Detail</button>
                                                </a>
                                                <form action="{{ route('mobilad.destroy', $kendaraan->id_model_mobil) }}"
                                                    method="POST" class="d-inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                            {{-- END SEDAN --}}

                            {{-- START SUV --}}
                            <div class="tab-pane fade" id="suv-tab-pane" role="tabpanel" aria-labelledby="suv-tab"
                                tabindex="0">
                                <table class="table table-hovered table-bordered">
                                    <!-- Table Header -->
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>TIPE MOBIL</th>
                                            <th>MERK MOBIL</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <!-- Table Body -->
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($mobil->where('tipe_mobil', 'suv') as $kendaraan)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $kendaraan->tipe_mobil }}</td>
                                                <td class="text-capitalize">{{ $kendaraan->merk_mobil }}</td>
                                                <td>
                                                    <a href="">
                                                        <button class="btn btn-primary">Detail</button>
                                                    </a>
                                                    <form action="{{ route('mobilad.destroy', $kendaraan->id_model_mobil) }}"
                                                        method="POST" class="d-inline">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{-- END SUV --}}

                            {{-- START MINIBUS --}}
                            <div class="tab-pane fade" id="minibus-tab-pane" role="tabpanel" aria-labelledby="minibus-tab"
                                tabindex="0">
                                <table class="table table-hovered table-bordered">
                                    <!-- Table Header -->
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>TIPE MOBIL</th>
                                            <th>MERK MOBIL</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <!-- Table Body -->
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($mobil->where('tipe_mobil', 'minibus') as $kendaraan)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $kendaraan->tipe_mobil }}</td>
                                                <td class="text-capitalize">{{ $kendaraan->merk_mobil }}</td>
                                                <td>
                                                    <a href="">
                                                        <button class="btn btn-primary">Detail</button>
                                                    </a>
                                                    <form action="{{ route('mobilad.destroy', $kendaraan->id_model_mobil) }}"
                                                        method="POST" class="d-inline">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{-- END MINIBUS --}}

                            {{-- START TRUCK --}}
                            <div class="tab-pane fade" id="truck-tab-pane" role="tabpanel" aria-labelledby="truck-tab"
                                tabindex="0">
                                <table class="table table-hovered table-bordered">
                                    <!-- Table Header -->
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>TIPE MOBIL</th>
                                            <th>MERK MOBIL</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <!-- Table Body -->
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($mobil->where('tipe_mobil', 'truck') as $kendaraan)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $kendaraan->tipe_mobil }}</td>
                                                <td class="text-capitalize">{{ $kendaraan->merk_mobil }}</td>
                                                <td>
                                                    <a href="">
                                                        <button class="btn btn-primary">Detail</button>
                                                    </a>
                                                    <form action="{{ route('mobilad.destroy', $kendaraan->id_model_mobil) }}"
                                                        method="POST" class="d-inline">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{-- END TRUCK --}}
                            
                            <!-- resources/views/posts/index.blade.php -->
                            <div class="card-footer">
                                <button class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#tambahMobilModal">Tambah</button>
                            </div>
                            <!-- Modal Tambah Mobil -->
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
                                                    <select name="tipe_mobil" class="form-select mb-3" required>
                                                        <option value="sedan">Sedan</option>
                                                        <option value="suv">SUV</option>
                                                        <option value="minibus">Minibus</option>
                                                        <option value="truck">Truk</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="merk_mobil" class="form-label">Merk Mobil</label>
                                                    <select name="merk_mobil" class="form-select mb-3" required>
                                                        <option value="toyota">Toyota</option>
                                                        <option value="daihatsu">Daihatsu</option>
                                                        <option value="suzuki">Suzuki</option>
                                                        <option value="mitsubishi">Mitsubishi</option>
                                                        <option value="nissan">Nissan</option>
                                                        <option value="isuzu">Isuzu</option>
                                                        <option value="bmw">BMW</option>
                                                        <option value="mercedes-benz">Mercedes-Benz</option>
                                                        <option value="wuling">Wuling</option>
                                                        <option value="honda">Honda</option>
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
