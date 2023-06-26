@extends('layouts.app')

@section('content')
    @php
        $locale = strtoupper(app()->getLocale())
    @endphp
    <x-user_sidebar :url="$url"/>
    <div class="right px-5">
        <h2 class="mb-4">Liste des soumissions</h2>
        <a href="{{route('translate', app()->getLocale())}}" class="btn btn-primary">{{__('Translate')}}</a>
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <td>Mot</td>
                <td>Traduction</td>
                <td>Date de soumission</td>
                <td>Statut</td>
                <td>Actions</td>
            </tr>
            </thead>
            @foreach($submissions as $submission)
                <tr>
                    <td>{{$submission->enMacusi_sug}}</td>
                    <td>{{json_decode($submission->trads_sug)->$locale}}</td>
                    <td>{{$submission->dateAjout_sug}}</td>
                    <td>{{$submission->isValidated_sug}}</td>
                    <td>
                        <a href="" class="btn btn-sm btn-primary">Modifier</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <component :is="'script'">
        function translateAll(){
            const Reverso = require('reverso-api')
        }
    </component>
@endsection
