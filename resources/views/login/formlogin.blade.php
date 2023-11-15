<html>
    <head>
        @vite(['resources/sass/app.scss','resources/js/app.js'])
        <style>
            body {
                background-color: #7fb2ff
            }

            h3 {
                font-weight: bold;
                color: #0d6efd;
            }
        </style>
    </head>
    <body>
        
        <div class="container mt-5">
            <div class="row justify-content-end">
                <div class="col-md-5 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">LOGIN</h3>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="username">Username:</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password:</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
                                </div>
                                <p>Don't have an account? <a href="{{route('register.formregister')}}">Register</a></p>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>