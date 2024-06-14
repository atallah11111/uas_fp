<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/css/master.css">

    <!-- Fonts
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> -->

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
 <!-- navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#000000">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-size:16px;">
                    <li class="nav-item me-4 mt-1">
                        <img src="/image/gijobmas.png" style="height: 45px;" alt="">
                    </li>
                    <li class="nav-item me-4">
                    <a class="nav-link" style="color:#F5E9CF;" href="/">Home</a>
                    </li>
                    <li class="nav-item me-4">
                    <a class="nav-link" style="color:#F5E9CF;" href="/projects">Job</a>
                    </li>
                    <li class="nav-item me-4">
                    <a class="nav-link" style="color:#F5E9CF;" href="/forms">Forms</a>
                    </li>
                    <li class="nav-item me-4">
                    <a class="nav-link" style="color:#F5E9CF;" href="/faq">FAQ</a>
                    </li>
                    <li class="nav-item me-4">
                    <a class="nav-link" style="color:#F5E9CF;" href="/recruitments/create">Recruitments</a>
                    </li>
                </ul>
            </div>
            <div >
                <!-- <a href="/recruitments"  style="font-size:16px; color:#F5E9CF; " class=" btn  pd-4 " type="button"  aria-expanded="false">
                    Login Admin
                </a> -->
        </div>
        </div>
    </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
