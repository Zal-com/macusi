<div class="bg-main rounded-4">
    <div class="row">
        <div class="col-md-4 d-flex justify-content-center m-auto">
            <img class="h-60 w-60" src="{{Storage::url('img/logo-orange.svg')}}" alt="logo">
        </div>
        <div class="vr" style="height: inherit; opacity: 50%; color: white; padding: 0; margin-top: 50px; margin-bottom: 50px; width: 1.5px;"></div>
        <div class="col-md-7 py-5 px-5">
            <h3 class="h3-title text-white p-2 font-weight-bold">{{ __('Login') }}</h3>
            @error('fail')
            <span class="error">
                <strong class="font-weight-bold text-danger">{{ $message }}</strong>
            </span>
            @enderror
            <form method="POST" wire:submit.prevent="submit" action="{{ route('login', app()->getLocale()) }}">
                @csrf

                <div class="mb-4 mt-4">
                    <div class="col-md-10 px-0">
                        <input wire:model="email" id="email" type="email" class="form-control rounded-pill bg-transparent px-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('Email Address') }}" autofocus>

                        @error('email')
                        <span class="invalid-feedback error" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <div class="col-md-10 px-0">
                        <input wire:model="password" id="password" type="password" class="form-control rounded-pill bg-transparent px-3 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">

                        @error('password')
                        <span class="invalid-feedback error" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3 d-flex">
                    <div class="col-md-6">
                        <div class="form-check d-inline align-middle">
                            <input wire:model="remember" class="form-check-input border-0 rounded-circle remember-me" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label text-white font-weight-light ml-1" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-block pt-1">
                            @if (Route::has('password.request'))
                                <button type="button" id="passwordLink" class="nav-link border-0 bg-transparent text-secondary text-decoration-none forgot float-right" wire:model="form" wire:click="showPassword">
                                    {{ __('Forgot Your Password?') }}
                                </button>
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
                    <p class="text-white font-weight-light text-center">{{__('Vous ne possédez pas de compte ?')}} <button type="button" id="registerLink" name="form" wire:click="showRegister" wire:model="form" value="register" class="border-0 bg-transparent text-secondary text-decoration-none">{{__('Register')}}</p>
                </div>
            </form>
        </div>
    </div>
</div>
