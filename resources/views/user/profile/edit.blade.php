@extends('layouts.app')
@section('content')
    <x-user_sidebar :url="$url"/>
    <div class="right px-5 float-right">
        <h1>Modification du profil de {{ $user->username }}</h1>
        <div class="border rounded-1 shadow-sm p-lg-3">
            <form action="{{-- route('admin.members.update' ,$user->id) --}}" method="post">
                @csrf
                @method('PUT')
                <div>
                <div>
                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email"
                           @if(old('email'))
                               value="{{ old('email') }}"
                           @else
                               value="{{ $user->email }}"
                           @endif
                           class="@error('email') is-invalid @enderror">

                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button>{{__('Modifier')}}</button>
                <a href="{{ back() }}">{{__('Annuler')}}</a>
            </form>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <h2>Liste des erreurs de validation</h2>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endsection
