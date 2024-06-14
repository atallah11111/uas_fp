<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/css/master.css">
</head>

<style>
    form div{
        margin-bottom: 10px;
    }
</style>

<body>
    
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
                       <li class="nav-item me-4 mt-2">
                           
                           <a class="nav-link" style="color:#F5E9CF;" href="/recruitment">Home</a>
                           </li>
                           <li class="nav-item me-4 mt-2">
                               <a class="nav-link" style="color:#F5E9CF;" href="/projects/create">Job</a>

                           </li>
                           <li class="nav-item me-4 mt-2">
                               <a class="nav-link" style="color:#F5E9CF;" href="/">Saran</a>

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
    
  <!-- body -->
  <section class="about">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-15">
                    <h3 class="text-center mb-3">Berbagai Divisi Kami</h3><br><br>
                    <!-- <a href="{{ route('projects.create') }}" class="btn btn-primary">Create</a><br><br> -->
    
                    @foreach ($forms as $form)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 ">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $form->name }}</h5>
                                    <p class="card-text text-truncate">{{ $form->phone}}</p>
                                    <h5 class="card-title"> Saran </h5>
                                    <p class="card-text text-harga">{{ $form->description}}</p>
                                    
                                </div>
                            </div> 
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="fontawesome/js/all.min.js"></script>
</body>
</html>