@extends('layouts.app')
@section('content')
    <h1 class="h3-title">{{__('Mon compte')}}</h1>
    <div class="parent mt-5 d-flex justify-content-between">
        <div class="div1 w-25">
            <x-user_sidebar :url="$url"/>
        </div>
        <div class="div2 w-75">
            <div class="right px-5 card border-0 shadow p-3 h-100">
                <h3 class="h3-title mt-2">{{__('Détails') }}</h3>
                <table class="mt-4 table table-borderless">
                    <tr>
                        <td>{{__('Nom')}} :</td>
                        <td>{{$user->last_name}}</td>
                    </tr>
                    <tr>
                        <td>{{__('Prénom')}} :</td>
                        <td>{{$user->first_name}}</td>
                    </tr>
                    <tr>
                        <td>{{__('Pseudo')}} :</td>
                        <td>{{$user->name}}</td>
                        <td>
                            <a href="#">
                                <img src="{{asset('storage/img/icon-pen.svg')}}" alt="Modifier">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>{{__('Email')}} :</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a href="#">
                                <img src="{{asset('storage/img/icon-pen.svg')}}" alt="Modifier">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>{{__('Nationalité')}} :</td>
                        <td>{{ $user->nationalite->nationalite ?? 'N/A' }}</td>
                        <td>
                            <a href="#">
                                <img src="{{asset('storage/img/icon-pen.svg')}}" alt="Modifier">
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>


@endsection
