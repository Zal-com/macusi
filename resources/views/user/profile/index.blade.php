@extends('layouts.app')
@section('content')
    <x-user_sidebar :url="$url"/>
    <div class="right px-5">
        <h1>{{__('Profil utilisateur') }}</h1>
        <div class="border rounded-1 shadow-sm p-lg-3">
            <p class="lh-1">{{__('Nom d\'utilisateur')}} : <span class="lead">{{ $user->username }}</span></p>
            <p class="lh-1">{{__('Email Address')}} : <span class="lead">{{ $user->email }}</span></p>
            <p class="lh-1">{{__('Nationalité') }} : <span class="lead">{{ $user->nationalite->nationalite ?? 'N/A' }}</span></p>
        </div>
    </div>
@endsection
