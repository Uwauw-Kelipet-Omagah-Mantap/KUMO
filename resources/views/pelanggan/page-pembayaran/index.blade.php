@extends('layout.layout')
@section('title', 'Halaman Dashboard')
<html>

<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <style>
        body {
            overflow-x: hidden;
        }

        .card {
            margin-top: 20px;
        }

        .card-title {
            font-size: 20px;
            font-family: Poppins;
        }

        .card-text {
            font-size: 16px;
            font-family: Poppins;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Selesaikan Pembayaran Anda</div>

                    <div class="card-body">
                        <h5 class="card-title">Nama Rekening</h5>
                        <p class="card-text">abcdefg</p>
                        <h5 class="card-title">No Rekening</h5>
                        <p class="card-text">000000000</p>
                        <h5 class="card-title">Total Pembayaran</h5>
                        <p class="card-text">Rp.000.000.000</p>
                    </div>
                    <div class="card-footer text-end">
                        <a href="{{ route('pelanggan.dashboardpl.index') }}"" type="button"
                            class="btn btn-primary">Bayar
                            Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
