<div class="bg-main rounded-4">
    <div class="row">
        <div class="col-md-4 d-flex justify-content-center m-auto">
            <img class="h-60 w-60" src="{{Storage::url('img/logo-orange.svg')}}" alt="logo">
        </div>
        <div class="vr" style="height: inherit; opacity: 50%; color: white; padding: 0; margin-top: 50px; margin-bottom: 50px; width: 1.5px;"></div>
        <div class="col-md-7 py-5 px-5">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <h3 class="h3-title text-white p-2 font-weight-bold">{{ __('Reset Password') }}</h3>
            <form method="POST" action="{{ route('password.email', ['lang'=> app()->getLocale()]) }}">
                @csrf
                @method('POST')

                <div class="mb-4 mt-4">
                    <div class="col-md-10 px-0">
                        <input wire:model="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror bg-transparent rounded-pill" placeholder="{{__('Email')}}" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>


                <div class="row mb-0 mt-4">
                    <div class="col-md-10">
                        <button type="submit" class="btn download py-2 px-5 border-0 rounded-pill bg-secondary text-white font-weight-700 align-baseline text-uppercase float-right">
                            {{ __('Send Password Reset Link') }}
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

