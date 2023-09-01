@extends('layouts.app')
@php
    $localesArray = ['FR' => 'Français', 'EN' => 'English', 'IT' => 'italiano', 'DE' => 'deutsch'];

    $locale = strtoupper(app()->getLocale());

    $localeString = $localesArray[$locale];

    $count = 0;
@endphp

@section('content')
    <h1 class="h3-title">{{__('Bienvenue sur le dictionnaire !')}}</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <p>{{__('Explorez notre vaste collection de mots. Téléchargez le PDF en un clic pour découvrir le pouvoir des mots et de notre incroyable dictionnaire en ligne MaCuSi dès maintenant !')}}</p>
            </div>
            <div class="col-md-3 d-flex flex-column text-center">
                <a href="{{route('dico.download', ['lang' => app()->getLocale(), 'format' => 'PDF'])}}" class="btn download py-3 px-4 border-0 rounded-pill bg-secondary text-white font-weight-bold align-baseline"><img src="{{Storage::url('img/icon-download.svg')}}" alt="Télécharger" height="23">
                    {{__('Télécharger en PDF')}}</a>
                {{-- <a href="" class="mt-2 text-secondary">{{__('Autres formats')}}</a> --}}
            </div>
        </div>
    </div>
    <livewire:filters/>
    <div class="language-switch d-flex justify-content-center align-baseline mt-2">
        <p>MaCuSi <img src="{{Storage::url('img/icon-simple-arrow.svg')}}" style="height: 15px"> {{ucfirst($localeString)}}</p>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="switch" checked>
        </div>
        <p>{{ucfirst($localeString)}} <img src="{{Storage::url('img/icon-simple-arrow.svg')}}" style="height: 15px"> MaCuSi</p>
    </div>
    <livewire:results/>
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
