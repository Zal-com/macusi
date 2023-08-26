@props(['item'])
@php
    $locale = (string) strtoupper(app()->getLocale());
@endphp
<div class="card shadow border-0 w-30 mx-3">
    <div>
        <div id="header" class="align-middle text-center pt-3">
            <h4 class="font-weight-bold text-secondary">{{$item->enMacusi_sug}} : {{json_decode($item->trads_sug)->$locale}}</h4>
            <div class="px-3">
                <hr class="hr text-secondary my-0 px-3" style="border-top: 2px solid var(--secondary-color); opacity: 100%">
            </div>
        </div>
        <div class="card-body">
            @auth()
                <div class="w-70 mx-auto p-2 d-flex justify-content-around">
                    <button
                        id="thumbsUp_{{$item->id_sug}}"
                        type="button"
                        class="rounded-circle border-1 bg-transparent align-center
                            @if(Auth::user()->hasVotedPositively($item->id_sug))
                                 voted
                            @endif"
                        value="1"
                        style="height: 50px; width: 50px; border: 2px solid var(--secondary-color);"
                        wire:model="addPositive"
                        wire:click="addPositive"
                        onclick="addPositive(this.id)">
                        <img src="{{Storage::url('img/Thumbs.svg')}}">
                    </button>
                    <button
                        id="thumbsDown_{{$item->id_sug}}"
                        type="button"
                        class="rounded-circle border-1 bg-transparent align-center
                            @if(Auth::user()->hasVotedNegatively($item->id_sug))
                                voted
                           @endif"
                        value="0"
                        style="height: 50px; width: 50px; border: 2px solid var(--secondary-color);"
                        wire:model="addNegative"
                        wire:click="addNegative"
                        onclick="addNegative(this.id)">
                        <img src="{{Storage::url('img/Thumbs.svg')}}" style="rotate: 180deg">
                    </button>
                </div>
            @endauth
            @guest()
                <div class="w-70 mx-auto p-2 d-flex justify-content-around">
                    <button type="button" class="rounded-circle border-1 bg-transparent align-center disabled" value="1" style="height: 50px; width: 50px; border: 2px solid var(--secondary-color);">
                        <img src="{{Storage::url('img/Thumbs.svg')}}">
                    </button>
                    <button type="button" class="rounded-circle border-1 bg-transparent align-center disabled" value="0" style="height: 50px; width: 50px; border: 2px solid var(--secondary-color);">
                        <img src="{{Storage::url('img/Thumbs.svg')}}" style="rotate: 180deg">
                    </button>
                </div>
            @endguest
        </div>
        <div class="card-footer bg-transparent border-0">
            <hr class="hr text-secondary my-0 px-3" style="border-top: 1px solid var(--secondary-color); opacity: 20%">
            <div class="d-flex justify-content-end pt-2 pr-2">
                <div class=" d-flex mr-3 align-items-center">
                    <img src="{{Storage::url('img/Thumbs.svg')}}" class="mr-1" style="height: 15px" alt="thumbs up">
                    <span id="thumbsUpCount_{{$item->id_sug}}" wire:ignore>{{$positive_count}}</span>
                </div>
                <div>
                    <img src="{{Storage::url('img/Thumbs.svg')}}" style="rotate: 180deg; height: 15px" alt="thumbs down">
                    <span id="thumbsDownCount_{{$item->id_sug}}" wire:ignore>{{$negative_count}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
