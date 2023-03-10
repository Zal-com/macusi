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
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="d-flex min-vh-100 flex-column">
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/c-est-quoi') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="{{ url('/c-est-quoi') }}" class="nav-link">{{__('C\'est quoi?')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/construction') }}" class="nav-link">{{__('Construction')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/dictionary') }}" class="nav-link">{{__('Dictionnaire')}}</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><i class="fa-solid fa-right-to-bracket"></i> {{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}"><i class="fa-solid fa-user-plus"></i> {{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->username }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a href="{{route('user.profile.index', ['id' => Auth::user()->id])}}" class="dropdown-item"><i class="fa-solid fa-user"></i> {{ __('Profil') }}</a>
                                @if(Auth::user()->isAdmin())
                                    <a href="{{route('admin.')}}" class="dropdown-item"><i class="fa-solid fa-toolbox"></i> {{ __('Administration') }}</a>
                                @endif
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa-solid fa-right-from-bracket"></i> {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4 container">
        @include('flash-message')
        @yield('content')
    </main>
</div>
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted border-top mt-auto">
    <!-- Section: Links  -->
    <div class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>MaCuSi
                    </h6>
                    <p>
                        Idéolangue née pendant la pandémie de COVID-19, le projet est de créer un language universel
                        compréhensible par tous et se basant sur des sonorités communes à la plupart des lanques du monde.
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Liens utiles
                    </h6>
                    <p>
                        <a href="{{route('c-est-quoi')}}" class="text-reset text-decoration-none">MaCuSi, c'est quoi ? </a>
                    </p>
                    <p>
                        <a href="{{ route('construction') }}" class="text-reset text-decoration-none">Construction</a>
                    </p>
                    <p>
                        <a href="{{route('dico.index')}}" class="text-reset text-decoration-none">Dictionnaire</a>
                    </p>
                    @guest
                        <p>
                            <a href="{{route('login')}}" class="text-reset text-decoration-none">Se connecter</a>
                        </p>
                    @else
                        <p>
                            <a href="{{route('dictionary.create')}}" class="text-reset text-decoration-none">Soumettre un mot</a>
                        </p>
                    @endguest
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        contact@macusi.be
                    </p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        dev@macusi.be
                    </p>
                    <p><i class="fas fa-link me-3"></i>Formulaire de contact</p>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Réseaux sociaux</h6>
                    <a href="https://www.facebook.com/profile.php?id=100087166600089" class="me-4 text-reset text-decoration-none">
                        <i class="fab fa-facebook-f"></i>
                        <a href="https://youtube.com/" class="me-4 text-reset text-decoration-none">
                            <i class="fab fa-youtube"></i>
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
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2023 Copyright
        <span class="text-reset fw-bold">Macusi.be</span>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
@vite(['resources/js/custom.js'])
</body>
</html>
