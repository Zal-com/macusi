@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        {{ $mots->links() }}
    </div>
    <div class="d-flex flex-wrap justify-content-around ">
        @foreach($mots as $mot)
            <x-card :mot="$mot"/>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-4">
         {{ $mots->links() }}
    </div>

@endsection
