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
    <main class="kotak">
        <div class="container row" style="padding-top:100px ">
            <div class="col-auto ">
                <div class="mx-0 shadow p-3 bg-white rounded">
                    <div class="filter">
                        Filter Pencarian
                    </div>
                    <div class="isi-filter col-sm-auto">
                        <div class="tittle">Jenis Kendaraan</div>
                        <div class="tittle">Tipe Tersedia</div>
                    </div>
                </div>
            </div>
            <div class="col-2 ">
                <h1>100px</h1>
            </div>
        </div>
    </main>
</body>
