@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        {{ $mots->links() }}
    </div>
    <div class="d-flex flex-wrap justify-content-around ">
        @foreach($mots as $mot)
            @if($mot->typesString() != 'Chiffre')
                <x-card :mot="$mot"/>
            @endif
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-4">
         {{ $mots->links() }}
    </div>

@endsection
