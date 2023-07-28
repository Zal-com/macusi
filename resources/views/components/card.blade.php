@props(['mot', 'count'])
@php
    $locale = (string) strtoupper(app()->getLocale());
@endphp
<div id="{{'heading' . $count}}" class="w-40 my-2 mx-2">
    <button class="btn border-secondary rounded-4 w-100 text-left" data-bs-toggle="collapse" data-bs-target="{{'#collapse' . $count}}" aria-expanded="true" aria-controls="{{'collapse' . $count}}">
        <div id="header" class="align-middle font-weight-bold">
            <img src="{{Storage::url('img/icon-comment.svg')}}" class="mx-2"> <span class="LoMa font-weight-bold">{{json_decode($mot->trads)->$locale}} : {{$mot->enMacusi}}</span><span class="MaLo font-weight-bold">{{$mot->enMacusi}} : {{json_decode($mot->trads)->$locale}}</span> <span class="float-right align-middle"><img src="{{Storage::url('img/icon-arrow-right.svg')}}"></span>
        </div>
        <div id="{{'collapse' . $count}}" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <div class="mt-2 p-2">
                    @if($mot->types->count() == 1)
                        <h5 class="text-secondary mb-0 font">Type</h5>
                        <hr class="hr my-1 text-secondary">
                        <p>{{ $mot->typesString() }} </p>
                    @else
                        <h5 class="text-secondary mb-0">Types</h5>
                        <hr class="hr my-1 text-secondary">
                        <p>{{ $mot->typesString() }} </p>
                    @endif
                    <h5 class="text-secondary mb-0">Concept</h5>
                    <hr class="hr my-1 text-secondary">
                    @if(!str_contains($mot->typesString(), 'Chiffre'))
                        <p>{{$mot->syllabesString()}}</p>
                    @endif
                </div>
            </div>
        </div>
    </button>
</div>


