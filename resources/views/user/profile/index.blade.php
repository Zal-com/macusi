@extends('layouts.app')
@section('content')
    <x-user_sidebar :url="$url"/>
    <div class="right px-5">
        <h1>Profil de {{ $user->username }}</h1>
        <div class="border rounded-1 shadow-sm p-lg-3">
            <p class="lh-1">Nom d'utilisateur : <span class="lead">{{ $user->username }}</span></p>
            <p class="lh-1">E-mail : <span class="lead">{{ $user->email }}</span></p>
            <p class="lh-1">Nationalité : <span class="lead">{{ $user->nationalite->nationalite ?? 'N/A' }}</span></p>
        </div>
    </div>
@endsection
