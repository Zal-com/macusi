@extends('layouts.app')

@section('content')
    <div class="d-flex flex-wrap justify-content-around ">
        @foreach($mots as $mot)
            <x-card :mot="$mot"/>
        @endforeach
    </div>
@endsection
