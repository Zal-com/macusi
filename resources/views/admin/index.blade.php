@extends('layouts.app')

@section('content')
    <div class="container">
        <x-admin_sidebar :url="$url"/>
        <h1>Dashboard</h1>
    </div>
@endsection
