<html>

<head>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>@yield('title')</title>
    @yield('header')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Livewire.on('show-toast', ({
                type,
                message
            }) => {
                Swal.fire({
                    icon: type,
                    title: message,
                    showConfirmButton: false,
                    timer: 2000,
                });
            });
        });
    </script>
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
            <img src="{{ asset('logo.svg') }}" alt="logo">
            <a class="navbar-brand" href="#">NUSA WHEELS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pemilik-mobil.pemilikmobil.index') }}">Manajemen User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pemilik-mobil.daftarmobilpm.index') }}">Manajemen Mobil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pemilik-mobil.daftarmobilpm.index') }}">Manajemen Pembayaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pemilik-mobil.daftarmobilpm.index') }}">Riwayat Transaksi</a>
                    </li>
                </ul>
                {{-- START LOGOUT --}}
                @if (Auth::check())
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <button class="btn btn-danger">Logout</button>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}">Login</a>
                @endif
                {{-- END LOGOUT --}}
                <img class="img" src="{{ asset('brocklesnar.jpg') }}" alt="">
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
