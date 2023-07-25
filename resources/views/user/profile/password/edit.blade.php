@extends('layouts.app')
@section('content')
    <div class="parent mt-5 d-flex justify-content-between">
        <x-user_sidebar :url="$url"/>
        <div class="right px-5 card border-0 shadow p-3 h-100">
            <h3 class="h3-title mt-2">{{__('Modifier le mot de passe')}}</h3>
            <form action="{{route('user.profile.password.update', ['lang'=>app()->getLocale(), 'id' => Auth::id()])}}" method="post">
                @csrf
                @method('PUT')
                <label for="oldPassword">Ancien mot de passe</label>
                <input type="password" name="oldPassword" id="oldPassword">
                <label for="newPassword">Nouveau mot de passe</label>
                <input type="password" name="newPassword" id="newPassword">
                <label for="newPassword_">Confirmation du mot de passe</label>
                <input type="password" name="newPassword_" id="newPassword_">
                <input type="submit" value="Modifier">
            </form>
        </div>
    </div>
@endsection
