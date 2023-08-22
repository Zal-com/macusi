@props(['item'])
@php
    $locale = (string) strtoupper(app()->getLocale());
@endphp
<div class="card shadow border-0">
    <div class="w-40 my-2 mx-2">
        <div id="header" class="align-middle font-weight-bold">
            {{$item->enMacusi_sug}} : {{json_decode($item->trads_sug)->$locale}}
        </div>
        <div class="card-body">
            <div class="mt-2 p-2">
                <h5 class="text-secondary mb-0 font">Type</h5>
                <hr class="hr my-1 text-secondary">
            </div>
        </div>
    </div>
</div>
