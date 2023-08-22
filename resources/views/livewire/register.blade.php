@php
    $nationalités = \App\Models\Nationalite::all();
@endphp
<div class="bg-main rounded-4">
    <div class="row">
        <div class="col-md-4 d-flex justify-content-center m-auto">
            <img class="h-60 w-60" src="{{Storage::url('img/logo-orange.svg')}}" alt="logo">
        </div>
        <div class="vr" style="height: inherit; opacity: 50%; color: white; padding: 0; margin-top: 50px; margin-bottom: 50px; width: 1.5px;"></div>
        <div class="col-md-7 py-5 px-5">
            <h3 class="h3-title text-white p-2 font-weight-bold">{{ __('Register') }}</h3>
            <form method="POST" action="{{ route('register', app()->getLocale())}}">
                @csrf
                <div class="container-fluid">
                    <div class="row mb-4 mt-4">
                        <div class="col-md-10 p-0">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror bg-transparent rounded-pill " name="name" placeholder="{{__('Username')}}" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-5 pl-0">
                            <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror bg-transparent rounded-pill " placeholder="{{ __('First name') }}" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                            @error('firstname')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-md-5 pr-0">
                            <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror bg-transparent rounded-pill " name="lastname" placeholder="{{ __('Last name') }}" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                            @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-7">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror bg-transparent rounded-pill " name="email" placeholder="{{ __('Email Address') }}" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <select id="nationality" class="form-control @error('nationality') is-invalid @enderror rounded-pill bg-transparent" name="nationality" value="{{ old('nationality') }}" required autocomplete="nationality">
                            <option value="" selected disabled>{{__('Nationalité')}}</option>
                            @foreach($nationalités as $nationalité)
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
                <div class="row mb-4">
                    <div class="col-md-10">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror bg-transparent rounded-pill " name="password" placeholder="{{ __('Password') }}" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-10">
                        <input id="password-confirm" type="password" class="form-control bg-transparent rounded-pill " name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-10">
                        <button type="submit" class="btn download py-2 px-5 border-0 rounded-pill bg-secondary text-white font-weight-700 align-baseline text-uppercase float-right">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
                <div class="col-md-10 mt-3" style="font-size: 12px">
                    <p class="text-white font-weight-light text-center">{{__('Déjà un compte ?')}} <button type="button" id="registerLink" name="form" wire:click="showLogin" wire:model="form" class="border-0 bg-transparent text-secondary text-decoration-none">{{__('Login')}}</p>
                </div>
            </form>
        </div>
    </div>
</div>

