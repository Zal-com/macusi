@extends('layouts.app')

@section('content')

    <div class="container card shadow w-50">
        <div class="row">
            {{--  <div class="col-md-4 d-flex justify-content-center m-auto">
                  <img class="h-60 w-60" src="{{Storage::url('img/logo-orange.svg')}}" alt="logo">
              </div>
              <div class="vr" style="height: inherit; opacity: 50%; color: var(--main-color); padding: 0; margin-top: 50px; margin-bottom: 50px; width: 1.5px;"></div>
              --}}
            <div class="col-md-12 py-5 px-5">
                    <h3 class="h3-title p-2 font-weight-bold">{{ __('Login') }}</h3>
                <form method="POST" action="{{ route('login', app()->getLocale()) }}">
                    @csrf
                    <div class="mb-4 mt-4">
                        <div class="col-md-10 offset-md-1 px-0">
                            <input id="page_email" type="email" class="form-control rounded-pill bg-transparent px-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('Email Address') }}" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="col-md-10 offset-md-1 px-0">
                            <input id="page_password" type="password" class="form-control rounded-pill bg-transparent px-3 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3 d-flex">
                        <div class="col-md-6 offset-md-1">
                            <div class="form-check d-inline align-middle">
                                <input class="form-check-input border-0 rounded-circle remember-me" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label font-weight-light ml-1" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-block pt-1">
                                @if (Route::has('password.request'))
                                    <a class="link text-secondary text-decoration-none forgot float-right" href="{{ route('password.request', app()->getLocale()) }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0 mt-4">
                        <div class="col-md-10 offset-md-1">
                            <button type="submit" class="btn download py-2 px-5 border-0 rounded-pill bg-secondary text-white font-weight-700 align-baseline text-uppercase float-right">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                    <div class="col-md-10 offset-md-1 mt-3" style="font-size: 12px">
                        <p class="font-weight-light text-center">Vous ne possédez pas de compte ? <a href="{{route('register', app()->getLocale())}}" class="text-secondary text-decoration-none">{{__('Register')}}</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>


    {{--

            VERSION 2
        <div class="container bg-main w-75">
            <div class="row">
                <div class="col-md-4 d-flex justify-content-center m-auto">
                    <img class="h-60 w-60" src="{{Storage::url('img/logo-orange.svg')}}" alt="logo">
                </div>
                <div class="vr" style="height: inherit; opacity: 50%; color: white; padding: 0; margin-top: 50px; margin-bottom: 50px; width: 1.5px;"></div>
                <div class="col-md-7 py-5 px-5">
                    <h3 class="h3-title text-white p-2 font-weight-bold">{{ __('Login') }}</h3>
                    <form method="POST" action="{{ route('login', app()->getLocale()) }}">
                        @csrf
                        <div class="mb-4 mt-4">
                            <div class="col-md-10 px-0">
                                <input id="email" type="email" class="form-control rounded-pill bg-transparentpx-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('Email Address') }}" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="col-md-10 px-0">
                                <input id="password" type="password" class="form-control rounded-pill bg-transparentpx-3 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 d-flex">
                            <div class="col-md-6">
                                <div class="form-check d-inline align-middle">
                                    <input class="form-check-input border-0 rounded-circle remember-me" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-white font-weight-light ml-1" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-block pt-1">
                                    @if (Route::has('password.request'))
                                        <a class="link text-secondary text-decoration-none forgot float-right" href="{{ route('password.request', app()->getLocale()) }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0 mt-4">
                            <div class="col-md-10">
                                <button type="submit" class="btn download py-2 px-5 border-0 rounded-pill bg-secondary text-white font-weight-700 align-baseline text-uppercase float-right">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                        <div class="col-md-10 mt-3" style="font-size: 12px">
                            <p class="text-white font-weight-light text-center">Vous ne possédez pas de compte ? <a href="{{route('register', app()->getLocale())}}" class="text-secondary text-decoration-none">{{__('Register')}}</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        --}}

    {{--
        VERSION 1
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card bg-main text-secondary rounded-0">
                <div class="card-header">
                    <h2 class="h3-title text-white p-2 font-weight-bold">{{ __('Login') }}</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login', app()->getLocale()) }}">
                        @csrf
                        <div class="mb-4">
                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control rounded-pill bg-transparent text-uppercase @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('Email Address') }}" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control rounded-pill bg-transparent text-uppercase @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-1">
                                <div class="form-check">
                                    <input class="form-check-input border-0 rounded-circle" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-white" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn download py-3 px-4 border-0 rounded-pill bg-secondary text-white font-weight-700 align-baseline text-uppercase px-5 py-1">
                                    {{ __('Login') }}
                                </button>
                                <a href="{{route('register', app()->getLocale())}}">{{__('Register')}}</a>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request', app()->getLocale()) }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    --}}
@endsection
