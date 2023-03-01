@extends('layouts.app')

@section('content')
    <x-admin_sidebar :url="$url"/>
    <div class="right px-5">
        <h2>Gestion du dictionnaire</h2>
        {{$mots->links()}}
        <table class="table">
            <thead>
                <tr>
                    <td>Mot</td>
                    <td>Francais</td>
                    <td>Type.s</td>
                    <td>Concept</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
            @php
                $locale = strtoupper(app()->getLocale());
            @endphp
            @foreach($mots as $mot)
                <tr>
                    <td>{{ $mot->enMacusi }}</td>
                    <td>{{ json_decode($mot->trads)->$locale }}</td>
                    <td>{{ $mot->typesString() }}</td>
                    <td>{{ $mot->syllabesString() }}</td>
                    <td>
                        <a href="{{ route('admin.dictionary.edit', ['id' => $mot->id]) }}" class="btn btn-primary btn-sm disabled">Modifier</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
