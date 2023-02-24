@props(['mot'])
<div class="border border-1 border-dark rounded w-25 mx-1 my-3 bg-black bg-opacity-10">
    <div>
        <h2 class="text-center py-4 border-bottom text-primary bg-white border-top rounded">{{ $mot->enMacusi }}</h2>
    </div>
    <div class="px-4 lh-2 ">
        @php
            $locale = (string) strtoupper(app()->getLocale());
        @endphp
        {{-- Traduction --}}
        <p class="fw-bold lead text-center">{{json_decode($mot->trads)->$locale}}</p>

        {{-- Listing of type(s) --}}
        <p>{{ $mot->typesString() }}</p>

        {{-- Concept --}}
        @if(!str_contains($mot->typesString(), 'Chiffre'))
           <p>Concept : {{$mot->syllabesString()}}</p>
        @endif
    </div>
</div>

