@extends('layouts.app')
@section('content')
    <h1 class="h3-title">{{__('Votes des soumissions !')}}</h1>
    <p>{{__('Veuillez voter ici pour vos mots préférés. Vous pouvez voter pour autant de mots que vous le souhaitez. Les mots avec le plus de votes seront ajoutés au dictionnaire officiel.')}}</p>

    <div class="d-flex flex-wrap justify-content-center">
        @foreach($submissions as $submission)
            <livewire:submission :item="$submission" :wire:key="$submission->id"/>
        @endforeach
    </div>

@endsection
