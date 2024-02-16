@extends('layout.layout')
@section('title', 'Halaman Dashboard')
<html>

<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <style>
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

    <div class="container">
        <div class="content d-flex flex-row">
            <div class="text">
                <h1><b>BERKENDARA DENGAN <p class="text-primary">KEPERCAYAAN</p> HARGA YANG TERJANGKAU</b></h1>
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt
                    ut
                    labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
            </div>
            <div class="img">
                <img src="mobil.png" alt="mobil" style="width: 500px;margin-left: -5px;">
            </div>
        </div>
    </div>
    <a href="{{ route('list-mobil.index') }}" type="button" class="btn btn-primary btn-lg text-center fs-2"
        style="margin-left: 35px;width: 283.333334px;height: 67.33333400000001px;">MULAI</a>
</body>

</html>
