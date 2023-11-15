<html>
    <head>
        @vite(['resources/sass/app.scss','resources/js/app.js'])
        <title>@yield('title')</title>
        @yield('header')
        <style>
            /* Menetapkan tinggi halaman agar sesuai dengan konten */
            html, body {
                height: 100%;
            }
    
            /* Menetapkan warna latar belakang sidebar dan mengatur lebar sidebar */
            .sidebar {
                background-color: #f8f9fa;
                width: 250px;
                position: fixed;
                height: 100%;
                padding-top: 20px;
            }
    
            /* Menetapkan warna latar belakang halaman konten */
            .content {
                margin-left: 250px;
                padding: 20px;
            }
    
            /* Menetapkan margin kanan pada formulir agar sesuai dengan halaman konten */
            .login-form {
                margin-right: 20px;
            }
    
            /* Menetapkan padding pada gambar agar tidak menyentuh tepi sidebar */
            .sidebar img {
                padding: 0 20px;
                max-width: 100%;
                border-radius: 50%;
                margin-bottom: 10px;
            }
    
            /* Menetapkan gaya untuk nama pengguna */
            .username {
                font-weight: bold;
                margin-bottom: 10px;
            }
    
            /* Menetapkan gaya untuk daftar mobil */
            .car-list {
                list-style: none;
                padding: 0;
            }
    
            .car-list li {
                margin-bottom: 5px;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 sidebar">
                    
                </div>
            </div>
        </div>
        <div class="container">
            @yield('content')
        </div>
    </body>
    <footer>
        @yield('footer')
    </footer>
</html>