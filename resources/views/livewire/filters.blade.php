<div id="filters" class="my-4 text-center">

    <button class="rounded-pill border-secondary bg-white px-3 py-1 @if($filter['order'] === 'asc') bg-secondary text-white @endif" wire:click="order_asc" wire:model="order">Alphabétique A - Z</button>
    <button class="rounded-pill border-secondary bg-white px-3 py-1 @if($filter['order'] === 'desc') bg-secondary text-white @endif" wire:click="order_desc" wire:model="filter" name="order" value="desc">Alphabétique Z - A</button>
    <button id="beginsWith" style="cursor: default" class="rounded-pill border-secondary bg-white px-3 py-1 @if($filter['beginsWith'] != '')) bg-secondary text-white @endif ">Commence par :
        <select style="cursor: pointer;" name="beginsWith" class="border-0 bg-transparent @if($filter['beginsWith'] != '') text-white @endif" wire:model="beginsWith" wire:change.debounce="beginsWith">
           <option value="">-</option>
            @foreach(\App\Models\Syllabe::all() as $syllabe)
                <option value="{{$syllabe->syllabe}}">{{$syllabe->syllabe}}</option>
            @endforeach
        </select>
    </button>
    <button id="nbreSyllabes" style="cursor: default;" class="rounded-pill border-secondary bg-white px-3 py-1 @if($filter['nbreSyllabes'] != '') bg-secondary text-white @endif">Nombre de syllabes :
        <select style="cursor: pointer;" name="nbreSyllabes" class="border-0 bg-transparent @if($filter['nbreSyllabes'] != '') text-white @endif " wire:model="nbreSyllabes" wire:change.debounce="nbreSyllabes">
            <option value="">-</option>
            @for($i = 1; $i<=6; $i++)
                <option value="{{$i}}">{{$i}}</option>
            @endfor
        </select>
    </button>
    <input class="rounded-pill px-3 py-1 text-black" type="search" placeholder="{{__('Rechercher')}} {{__('from ')}}{{strtolower(config('custom.available_languages')[strtoupper(app()->getLocale())])}}" wire:model="search" wire:change.debounce="search">

    <div class="d-flex justify-content-center align-items-center mt-3">
        <p class="pr-2 mb-0">MaCuSi
            <img src="{{Storage::url('img/icon-simple-arrow.svg')}}" style="height: 15px">
            {{config('custom.available_languages')[strtoupper(app()->getLocale())]}}
        </p>

        <label class="switch mb-0">
            <input wire:change.debounce="switch" type="checkbox" checked>
            <span></span>
        </label>

        <p class="pl-2 mb-0">
            {{config('custom.available_languages')[strtoupper(app()->getLocale())]}}
            <img src="{{Storage::url('img/icon-simple-arrow.svg')}}" style="height: 15px">
            MaCuSi
        </p>
    </div>

</div>

