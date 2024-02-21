@extends('pelanggan.layoutpl2.layout')

<html>

<head>

</head>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

</html>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <div class="container-fluid ">
            <div class="logo">
                <img src="logo.svg" alt="logo">
                <a class="navbar-brand" href="#">Nusa Wheels</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="btn">
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link text-light" type="submit" aria-current="page"
                                href="{{ route('formlogin.index') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-danger" type="submit"
                                href="{{ route('formregister.index') }}">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <main class="kotak" style="padding-top: 100px">
        <div class="row justify-content-center">
            @foreach ($penggune as $pengguna)
                <div class="col-auto mb-3">
                    <div class="card" style="width: 23rem">
                        <div class="card-body">
                            <img src="{{ asset('mobil.png') }}" alt="W3Schools.com"
                                style="width: 10rem;margin-bottom:10rm">
                            <h5 class="card-title">{{ $pengguna->username }}</h5>
                            <p class="card-text">{{ $pengguna->role }}</p>
                            <div class="button text-end">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#sewaMobilModal{{ $loop->iteration }}">Sewa</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="sewaMobilModal{{ $loop->iteration }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="sewaMobilModalLabel">Pilih Tanggal Penyewaan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Form Penyewaan Mobil -->
                                <form method="post" action="{{ route('pengguna.simpan') }}">
                                    @csrf
                                    <form method="POST">
                                        <div class="input-group mb-3">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">Peminjaman</span>
                                                <input type="date" name="peminjaman" class="form-control mb-3"
                                                    id="peminjaman">
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">Pengembalian</span>
                                                <input type="date" name="pengembalian" class="form-control mb-3"
                                                    id="pengembalian">
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <div class="">
                                                <label for="" class="form-label ">Harga</label>
                                                <br>
                                                <label for="" class="form-label">Rp.0</label>
                                            </div>
                                        </div>
                                    </form>
                                    <button type="button" class="btn btn-primary" class="btn btn-primary"
                                        data-bs-toggle="modal" data-bs-target="#lanjutMobilModal{{ $loop->iteration }}"
                                        id="lanjut">Lanjut</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="lanjutMobilModal{{ $loop->iteration }}" tabindex="-1"
                    aria-labelledby="tambahAkunModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="lanjutMobilModalLabel">Pesanan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Form Penyewaan Mobil -->
                                <form method="post" action="{{ route('pengguna.simpan') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nama Mobil</label>
                                        <br>
                                        <span>{{ $pengguna->username }}</span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Tarif Mobil</label>
                                        <br>
                                        <span>{{ $pengguna->role }}</span>
                                    </div>
                                    <div class="mb-3">
                                        <div id="peminjamanT">Peminjaman: <span></span></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Pengembalian</label>
                                        <br>
                                        <span>{{ $pengguna->role }}</span>
                                    </div>
                                    <a href="{{ route('pelanggan.page-pembayaran.index') }}" type="submit"
                                        class="btn btn-primary">Pesan</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#lanjut').click(function() {
                    var peminjaman = $('#peminjaman').val();
                    var pengembalian = $('#pengembalian').val();

                    if (peminjaman !== "") {
                        $('#peminjamanT').text(peminjaman);
                    }
                    if (pengembalian !== "") {
                        $('#pengembalianT span').text(pengembalian);
                    }
                });
            });
        </script>
    </main>
</body>
