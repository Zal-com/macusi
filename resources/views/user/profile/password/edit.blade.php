@extends('layouts.app')
@section('content')
    <h1 class="h3-title">{{__('Mon compte')}}</h1>
    <div class="parent mt-5 d-flex justify-content-between">
        <div class="div1 w-25">
            <x-user_sidebar :url="$url"/>
        </div>
        <div class="div2 w-75">
            <div class="right px-5 card border-0 shadow p-3 h-100">
                <h3 class="h3-title mt-2">{{__('Modifier le mot de passe')}}</h3>
                <form action="{{route('user.profile.password.update', ['lang'=>app()->getLocale(), 'id' => Auth::id()])}}" method="post" class="password_edit_form">
                    @csrf
                    @method('PUT')
                    <table class="table table-borderless">
                        <tr>
                            <td class="w-40 align-middle">Mot de passe actuel</td>
                            <td><input class="rounded-pill text-black px-2" type="password" name="oldPassword" id="oldPassword"></td>
                        </tr>
                        <tr>
                            <td class="align-middle">Nouveau mot de passe</td>
                            <td><input class="rounded-pill text-black px-2" type="password" name="newPassword" id="newPassword"></td>
                        </tr>
                        <tr>
                            <td class="align-middle">Confirmation du mot de passe</td>
                            <td><input class="rounded-pill text-black px-2" type="password" name="newPassword_" id="newPassword_"></td>
                        </tr>
                    </table>
                    <button type="submit" class="btn btn-primary border-0 rounded-pill float-right px-4 bg-secondary fw-bold">{{__('Edit')}}</button>
                </form>
            </div>
        </div>
    </div>


@endsection
