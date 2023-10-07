@extends('layouts.app')
@section('content')
    <h2>Modifier les informations d'un membre</h2>

    <form action="{{-- route('admin.members.update' ,$member->id) --}}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="username">Username</label>
            <input type="text" id="username" name="username"
                   @if(old('username'))
                       value="{{ old('username') }}"
                   @else
                       value="{{ $member->username }}"
                   @endif
                   class="@error('username') is-invalid @enderror">

            @error('username')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="email">E-mail</label>
            <input type="text" id="email" name="email"
                   @if(old('email'))
                       value="{{ old('email') }}"
                   @else
                       value="{{ $member->email }}"
                   @endif
                   class="@error('email') is-invalid @enderror">

            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button>Modifier</button>
        <a href="{{ back() }}">Annuler</a>
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
@endsection
