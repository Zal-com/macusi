<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/f92d7e8a24.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/custom.js'])
</head>
<body class="d-flex min-vh-100 flex-column">
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light shadow-sm bg-main text-secondary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home', app()->getLocale()) }}">
                <img src="{{Storage::url('img/logo-orange.svg')}}" alt="logo macusi">
            </a>
            <button class="navbar-toggler text-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <i class="fa-solid fa-bars fa-xl text-secondary"></i>
            </button>

            <div class="collapse navbar-collapse bg-main" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="{{ route('construction', app()->getLocale()) }}" class="nav-link text-secondary text-uppercase font-weight-bold">{{__('Construction')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dico.index', app()->getLocale()) }}" class="nav-link text-secondary text-uppercase font-weight-bold">{{__('Dictionnaire')}}</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link text-secondary text-uppercase font-weight-bold" href="{{ route('login', app()->getLocale()) }}"><i class="fa-solid fa-right-to-bracket text-secondary"></i> {{ __('Login') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-secondary fw-bold text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->username }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end bg-main" aria-labelledby="navbarDropdown">
                                <a href="{{route('user.profile.index', ['lang' => app()->getLocale(),'id' => Auth::user()->id])}}" class="dropdown-item text-secondary"><i class="fa-solid fa-user"></i> {{ __('Profil') }}</a>
                                @if(Auth::user()->isAdmin())
                                    <a href="{{route('backpack.dashboard')}}" class="dropdown-item text-secondary"><i class="fa-solid fa-toolbox text-secondary"></i> {{'Administration'}}</a>
                                @endif
                                <a class="dropdown-item text-secondary" href="{{ route('logout', app()->getLocale()) }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa-solid fa-right-from-bracket text-secondary"></i> {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" class="d-none text-secondary">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-secondary font-weight-bold" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           {{strtoupper(App::getLocale())}}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end w-auto bg-main">
                            @foreach(config('custom.available_languages') as $language)
                                @if($language == 'EN')
                                    <a class="dropdown-item text-secondary" href="{{route(Route::currentRouteName(), array_merge(Route::current()->parameters(), ['lang'=>'en']))}}"> EN</a>
                                @else
                                    <a class="dropdown-item text-secondary" href="{{route(Route::currentRouteName(), array_merge(Route::current()->parameters(), ['lang'=>strtolower($language)]))}}"> {{$language}}</a>

                                @endif
                            @endforeach
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="py-4 container">
        @include('flash-message')
        @yield('content')
    </main>
</div>
<script src="../../js/custom.js"></script>
<!-- Footer -->
<footer class="text-center text-lg-start bg-main border-top mt-auto">
    <!-- Section: Links  -->
    <div class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <img src="{{Storage::url('img/logo-orange.svg')}}" alt="logo macusi">
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="fw-bold text-secondary mb-4 fs-18">
                        A propos
                    </h6>
                    <p>
                        <a href="{{route('c-est-quoi', app()->getLocale()) }}" class="text-decoration-none text-white">Macusi, c'est quoi ? </a>
                    </p>
                    <p>
                        <a href="{{ route('construction', app()->getLocale()) }}" class="text-decoration-none text-white">{{__('Construction')}}</a>
                    </p>
                    <p>
                        <a href="{{route('dico.index', app()->getLocale())}}" class="text-decoration-none text-white">{{__('Dictionnaire')}}</a>
                    </p>
                    @guest
                        <p>
                            <a href="{{route('login', app()->getLocale())}}" class="text-decoration-none text-white">{{__('Login')}}</a>
                        </p>
                    @else
                        <p>
                            <a href="{{route('dictionary.create', app()->getLocale())}}" class="text-decoration-none text-white">{{__('Soumettre un mot')}}</a>
                        </p>
                    @endguest
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="fw-bold mb-4 text-secondary fs-18">Contact</h6>
                    <p class="text-white">
                        <i class="fas fa-envelope me-3 text-white"></i>
                        contact@macusi.be
                    </p>
                    <p class="text-white">
                        <i class="fas fa-envelope me-3 text-white"></i>
                        dev@macusi.be
                    </p>
                    <p class="text-white"><i class="fas fa-link me-3 text-white"></i>Formulaire de contact</p>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-secondary fw-bold mb-4 fs-18">Réseaux</h6>
                    <a href="https://www.facebook.com/profile.php?id=100087166600089" target="_blank" class="me-4 text-reset text-decoration-none">
                        <i class="fab fa-facebook-f text-white"></i>
                        <a href="https://youtube.com/" target="_blank" class="me-4 text-white text-decoration-none">
                            <i class="fab fa-youtube text-white"></i>
                        </a>
                    </a>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </div>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4 text-white" style="background-color: #050021;">
        <p class="m-0">
        © COPYRIGHT MACUSI 2023
        <span class="vertical">|</span>
        TERMS AND CONDITIONS
        <span class="vertical">|</span>
        <a href="{{route('privacy-and-policy', app()->getLocale())}}">PRIVACY POLICY</a>
        </p>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
@vite(['resources/js/custom.js'])
</body>
</html>
