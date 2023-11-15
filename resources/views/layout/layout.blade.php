<html>
    <head>
        @vite(['resources/sass/app.scss','resources/js/app.js'])
        <title>@yield('title')</title>
        @yield('header')
        
    </head>
    <body>
        
        </div>
        <div class="container">
            @yield('content')
        </div>
    </body>
    <footer>
        @yield('footer')
    </footer>
</html>