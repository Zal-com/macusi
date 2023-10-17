@extends('layouts.app')

@section('content')
    <div class="container card shadow w-50">
        <div class="row">
            <div class="col-md-12 py-5 px-5">
                <h3 class="h3-title p-2 font-weight-bold">{{ __('Reset Password') }}</h3>
                <div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <form method="POST" action="{{ route('password.email', app()->getLocale()) }}">
                    @csrf

                    <div class="mb-4">
                        <div class="col-md-10 offset-md-1 px-0">
                            <input id="page_email" placeholder="{{__('Email Address')}}" type="email" class="form-control rounded-pill bg-transparent @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-0 mt-4">
                        <div class="col-md-10 offset-md-1">
                            <button type="submit" class="btn download py-2 px-5 border-0 rounded-pill bg-secondary text-white font-weight-700 align-baseline text-uppercase float-right">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
