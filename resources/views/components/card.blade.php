@props(['mot', 'count'])
@php
    $locale = (string) strtoupper(app()->getLocale());
@endphp
<div id="{{'heading' . $count}}" class="w-40 my-2 mx-2">
    <button class="btn border-secondary rounded-4 w-100 text-left" data-bs-toggle="collapse" data-bs-target="{{'#collapse' . $count}}" aria-expanded="true" aria-controls="{{'collapse' . $count}}">
        <div id="header" class="align-middle font-weight-bold">
            <img src="{{Storage::url('img/icon-comment.svg')}}" class="mx-2"> {{json_decode($mot->trads)->$locale}} : {{$mot->enMacusi}} <span class="float-right align-middle"><img src="{{Storage::url('img/icon-arrow.svg')}}"></span>
        </div>
        <div id="{{'collapse' . $count}}" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                @if($mot->types->count() == 1)
                    <h5>Type</h5>
                    <hr class="hr">
                    <p>{{ $mot->typesString() }} </p>
                @else
                    <h5>Types</h5>
                    <hr class="hr">
                    <p>{{ $mot->typesString() }} </p>
                @endif

                    <h5>Concept</h5>
                    <hr class="hr">
                @if(!str_contains($mot->typesString(), 'Chiffre'))
                    <p>{{$mot->syllabesString()}}</p>
                @endif
            </div>
        </div>
    </button>
</div>


<!--
<div class="border border-1 border-dark rounded w-25 mx-1 my-3 bg-black bg-opacity-10">
<div>
<h2 class="text-center py-4 border-bottom text-primary bg-white border-top rounded">{{ $mot->enMacusi }}</h2>
</div>
<div class="px-4 lh-2 ">

{{-- Traduction --}}
<p class="fw-bold lead text-center">{{json_decode($mot->trads)->$locale}}</p>

<p>
{{-- Listing of type(s) --}}
@if($mot->types->count() == 1)
    <p>Type : {{ $mot->typesString() }} </p>
@elseif($mot->types->count() == 2)
    <p>Types : {{ $mot->typesString() }} </p>
@endif

{{-- Concept --}}
@if(!str_contains($mot->typesString(), 'Chiffre'))
    <p>Concept : {{$mot->syllabesString()}}</p>
@endif
</div>
</div>
-->

