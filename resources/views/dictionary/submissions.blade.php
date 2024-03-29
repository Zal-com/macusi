@extends('layouts.app')
@section('content')
    <h1 class="h3-title">{{__('Votes des soumissions !')}}</h1>
    <p>{{__('Veuillez voter ici pour vos mots préférés. Vous pouvez voter pour autant de mots que vous le souhaitez. Les mots avec le plus de votes seront ajoutés au dictionnaire officiel.')}}</p>
    @guest()
        <div class="alert alert-secondary d-flex align-items-center">
            <i class="fa-solid fa-circle-info mr-2" style="color: #0d0054;"></i>{{__('Le vote n\'est disponible que pour les membres connectés.')}}
            <button type="button" id="nav-login" class="btn btn-link p-0 text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" :form="login">
                {{__('Login')}}
            </button>
        </div>
    @endguest
    <div class="d-flex flex-wrap justify-content-center">
        @foreach($submissions as $submission)
            <livewire:submission :item="$submission" :wire:key="$submission->id"/>
        @endforeach
    </div>

    <script>
        function addNegative(id) {

            if (!$('#' + id).hasClass('voted')) {

                id = id.split('_')[1];
                let text = $('#thumbsDownCount_' + id).text()
                $('#thumbsDownCount_' + id).text(++text)

                text = $('#thumbsUpCount_' + id).text()
                $('#thumbsUpCount_' + id).text(--text)
            }
        }

        function addPositive(id){
            if (!$('#' + id).hasClass('voted')) {

                id = id.split('_')[1];
                let text = $('#thumbsUpCount_' + id).text()
                $('#thumbsUpCount_' + id).text(++text)

                text = $('#thumbsDownCount_' + id).text()
                $('#thumbsDownCount_' + id).text(--text)
            }
        }
    </script>

@endsection
