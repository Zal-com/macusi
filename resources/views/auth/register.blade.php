@extends('layouts.app')

@section('content')

    @php
        $nationalités = \App\Models\Nationalite::all();
    @endphp
<div class="container card shadow w-50">
    <div class="row">
        <div class="col-md-12 py-5 px-5">
            <h3 class="h3-title p-2 font-weight-bold">{{ __('Register') }}</h3>
                    <form method="POST" action="{{ route('register', app()->getLocale())}}">
                        @csrf

                        <div class="mb-4 mt-4">
                            <div class="col-md-10 offset-md-1 px-0">
                                <input id="page_name" placeholder="{{__('Username')}}" type="text" class="form-control bg-transparent rounded-pill @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="col-md-10 offset-md-1 px-0">
                                <input id="page_firstname" placeholder="{{__('First name')}}" type="text" class="form-control bg-transparent rounded-pill @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="col-md-10 offset-md-1 px-0">
                                <input id="page_lastname" placeholder="{{__('Last name')}}" type="text" class="form-control bg-transparent rounded-pill @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="col-md-10 offset-md-1 px-0">
                                <input id="page_email" type="email" placeholder="{{__('Email Address')}}" class="form-control bg-transparent rounded-pill @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="col-md-10 offset-md-1 px-0">
                                <select id="page_nationality" class="form-control bg-transparent rounded-pill @error('nationality') is-invalid @enderror" name="nationality" value="{{ old('nationality') }}" required autocomplete="nationality">
                                    @foreach($nationalités as $nationalité)
                                        <option hidden>{{__('Nationalité')}}</option>
                                        <option value="{{$nationalité->code}}">{{$nationalité->nationalite}}</option>
                                    @endforeach

                                </select>

                                @error('nationality')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="col-md-10 offset-md-1 px-0">
                                <input id="page_password" placeholder="{{__('Password')}}" type="password" class="form-control bg-transparent rounded-pill @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="col-md-10 offset-md-1 px-0">
                                <input id="page_password-confirm" placeholder="{{__('Confirm Password')}}" type="password" class="form-control bg-transparent rounded-pill" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row mb-0 mt-4">
                            <div class="col-md-10 offset-md-1">
                                <button type="submit" class="btn download py-2 px-5 border-0 rounded-pill bg-secondary text-white font-weight-700 align-baseline text-uppercase float-right">
                                    {{ __('Register') }}
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
