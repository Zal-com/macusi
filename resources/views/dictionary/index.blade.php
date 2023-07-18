@extends('layouts.app')
@php
       $localesArray = ['FR' => 'Français', 'EN' => 'English', 'IT' => 'italiano', 'DE' => 'deutsch'];

       $locale = strtoupper(app()->getLocale());

       $localeString = $localesArray[$locale];

       $count = 0;
@endphp

@section('content')
    <h1 class="h3-title">Bienvenue sur le dictionnaire !</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <p>Explorez notre vaste collection de mots. Téléchargez le PDF en un clic pour découvrir le pouvoir des mots et de notre incroyable dictionnaire en ligne MaCuSi dès maintenant !</p>
            </div>
            <div class="col-md-3 d-flex flex-column text-center">
                <a href="" class="btn download py-3 px-4 border-0 rounded-pill bg-secondary text-white font-weight-bold align-baseline"><img src="{{Storage::url('img/icon-download.svg')}}" alt="Télécharger" height="23"> Télécharger en PDF</a>
                <a href="" class="mt-2 text-secondary">Autres formats ici</a>
            </div>
        </div>
    </div>

    <div class="language-switch d-flex justify-content-center align-baseline">
        <p>MaCuSi <img src="{{Storage::url('img/icon-simple-arrow.svg')}}"> {{$localeString}}</p>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="switch" checked>
        </div>
        <p>{{$localeString}} <img src="{{Storage::url('img/icon-simple-arrow.svg')}}"> MaCuSi</p>
    </div>


    <div class="d-flex flex-wrap justify-content-center" id="accordion">
        @foreach($mots as $mot)
            @if($mot->typesString() != 'Chiffre')
                <x-card :mot="$mot" :count="$count"/>
                @php
                    $count++;
                @endphp
            @endif
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $mots->links() }}
    </div>
    <script>
        $(document).ready(function(){
            $(".MaLo").hide();
        })

        $(function () {
            $("#switch").change(function () {
                if ($(this).is(":checked")) {
                    $(".LoMa").show();
                    $(".MaLo").hide();
                } else {
                    $(".LoMa").hide();
                    $(".MaLo").show();
                }
            });
        });
    </script>

@endsection
