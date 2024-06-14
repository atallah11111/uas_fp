<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> -->

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>


    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#000000">
           <div class="container">
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                   data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
                   aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                   <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                       <li class="nav-item me-4 mt-1">
                           <img src="/image/gijobmas.png" style="height: 45px;" alt="">
                       </li>
                   </ul>
               </div>
               <div >
               <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a style="font-size: 16px;" class="nav-link text-light" href="{{ route('login') }}">{{ Auth::user()->name }}</a>
                            </li>

                            <li class="nav-item">
                                <a href="/" style="font-size: 15px;" class="nav-link text-light" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endguest
                    </ul>
           </div>
           </div>
       </nav>
   
           <main class="py-4">
               @yield('content')
           </main>
       </div>
</body>
</html>
