@extends('layouts.app')
@section('content')

    @foreach($submissions as $submission)
        <x-submissions-card :item="$submission"/>
    @endforeach

@endsection
