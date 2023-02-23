@props(['mot'])
<div class="border rounded w-25 mx-1 my-3">
    <div>
        <h2 class="text-center py-4 border-bottom text-primary">{{ $mot->enMacusi }}</h2>
    </div>
    <div class="text-center">
        @php
            $locale = strtoupper(app()->getLocale())
        @endphp
        <p class="">{{json_decode($mot->trads)->$locale}}</p>
    </div>
</div>

