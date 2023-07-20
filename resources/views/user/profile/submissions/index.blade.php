@extends('layouts.app')

@section('content')
    @php
        $localesArray = ['FR' => 'français', 'EN' => 'English', 'IT' => 'italiano', 'DE' => 'deutsch'];

        $locale = strtoupper(app()->getLocale());

        $localeString = $localesArray[$locale];
    @endphp

    <h1 class="h3-title">Mon Compte</h1>
    <div class="parent mt-5 d-flex justify-content-between">
        <div class="div1 w-25">
            <x-user_sidebar :url="$url"/>
        </div>
        <div class="div2 w-75">
            <div class="right px-5 card border-0 shadow p-3 h-100">
                <h3 class="h3-title mt-2">{{__('Mes soumissions')}}</h3>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <td>Date d'ajout</td>
                        <td>Mot en MaCuSi</td>
                        <td>Mot en {{$localeString}}</td>
                        <td>Type</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($submissions as $submission)
                        <tr>
                            <td>{{$submission->formattedDate()}}</td>
                            <td>{{$submission->enMacusi_sug}}</td>
                            <td>{{json_decode($submission->trads_sug)->$locale}}</td>
                            <td>{{$submission->typesString()}}</td>
                            <td>
                                <a href=""><img src="{{asset('storage/img/icon-pen.svg')}}" alt="Modifier"></a>
                                <a href=""><img src="{{asset('storage/img/icon-trash.svg')}}" alt="Supprimer"></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
