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
                        <td>{{'Nom'}} :</td>
                        <td>{{$user->last_name}}</td>
                    </tr>
                    <tr>
                        <td>{{__('Prénom')}} :</td>
                        <td>{{$user->first_name}}</td>
                    </tr>
                    <tr>
                        <td>{{__('Pseudo')}} :</td>
                        <td>{{$user->name}}</td>
                    </tr>
                    <tr>
                        <td>{{__('Email')}} :</td>
                        <td>{{$user->email}}</td>
                    <tr>
                        <td>{{__('Nationalité')}} :</td>
                        <td>{{ $user->nationalite->nationalite ?? 'N/A' }}</td>
                    </tr>
                </table>
                <button id="profile_edit" type="button" class="btn btn-primary border-0 rounded-pill float-right px-4 bg-secondary" data-bs-toggle="modal" data-bs-target="#profileModal">{{__('Modifier')}}</button>
            </div>
        </div>
    </div>

    <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog w-50" role="document">
            <div class="bg-main rounded-4 p-5 modal-content">
                <h3 class="h3-title text-white p-2 font-weight-bold">{{ __('Modification du profil') }}</h3>
                <form method="post" action="{{route('user.profile.update', ['lang'=> app()->getLocale(), 'id' => Auth::user()->id])}}">
                    @csrf
                    @method('PUT')
                    <div class="text-white">
                        <div class="row">
                            <div class="col-md-12">
                                <p>{{__('Nom')}} : {{\Illuminate\Support\Facades\Auth::user()->last_name}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>{{__('Prénom')}} : {{\Illuminate\Support\Facades\Auth::user()->first_name}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label> {{__('Username')}} :
                                    <input name="name" class="text-black from-control rounded-pill px-2" required autocomplete="username" autofocus type="text" value="{{\Illuminate\Support\Facades\Auth::user()->name}}">
                                </label>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label> {{__('Email')}} :
                                        <input name="email" class="text-black rounded-pill px-2" required autocomplete="email" autofocus type="text" value="{{\Illuminate\Support\Facades\Auth::user()->email}}">
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label> {{__('Nationalité')}} :
                                        <select name="nationality" class="rounded-pill p-1 pr-2">
                                            @foreach(\App\Models\Nationalite::all() as $nationalite)
                                                <option value="{{$nationalite->code}}"
                                                        @if(\Illuminate\Support\Facades\Auth::user()->code_nationalite == $nationalite->code) selected @endif>{{$nationalite->nationalite}}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                        <input type="submit" value="{{__('Save')}}" class="btn btn-primary border-0 rounded-pill float-right px-4 bg-secondary">
                </form>
            </div>
        </div>
    </div>


@endsection
