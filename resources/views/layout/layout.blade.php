<html>
    <head>
        <link rel="stylesheet" href="{{asset('style.css')}}">
        @vite(['resources/sass/app.scss','resources/js/app.js'])
        <title>@yield('title')</title>
        @yield('header')
        <style>
            body {
                background-color: rgb(0, 149, 255);
            }

            .img {
                border-radius: 50%;
                width: 40px; 
                height: 40px; 
                object-fit: cover;
            }

            .btn btn-danger {
                margin-right: 5;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
            <div class="container-fluid">
                <img src="{{asset('logo.svg')}}" alt="logo">
                <a class="navbar-brand" href="#">NUSA WHEELS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('dashboard.index')}}">Dashboard</a>
                        </li>
                        <li class="nav-item">                   
                            <a class="nav-link" href="{{route('daftarmobil.index')}}">Daftar Mobil</a>
                        </li>                       
                    </ul>
                    <a href="" class="btn btn-danger me-4" type="submit">Logout</a>
                    <img class="img" src="{{asset('brocklesnar.jpg')}}" alt="">
                </div>
            </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>
    </body>
    <footer>
        @yield('footer')
    </footer>
</html>