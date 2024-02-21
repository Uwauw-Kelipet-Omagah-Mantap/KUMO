@extends('layout.layout')
@section('title', 'Halaman Dashboard')
<html>

<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <style>
        body {
            overflow-x: hidden;
        }
        .container {
            display: flex;
            margin-top: 200px;
            padding-left: 10px;
        }

        .content {
            margin-left: -45px;
            font-family: Poppins;

        }

        h1,
        b {
            font-size: 50px;
            width: 900px;
            line-height: 40px;
        }

        p {
            display: inline-block;
        }

        .text {
            font-size: 20px;
            width: 750px;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="badan">
        <div class="text">Selesaikan pembayaran anda</div>
    </div>
    <div class="card" style="width: 18rem;">
        <p class="card-text">Nama Rekening</p>
    </div>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">No Rekening</h5>
          <p class="card-text">000000000</p>
          <h5 class="card-title">Total Pembayaran</h5>
          <p class="card-text">Rp.000.000.000</p>
        </div>
      </div>
</body>

</html>
