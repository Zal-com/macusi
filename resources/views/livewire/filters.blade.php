<div id="filters" class="my-4 text-center">
    <input class="rounded-pill px-3 py-1 text-black" type="search" placeholder="Rechercher" wire:model="search" wire:change.debounce="search">
    <button class="rounded-pill border-secondary px-3 py-1 @if($filter === 'order_asc') bg-secondary text-white @endif" wire:click="order_asc" wire:model="order">Alphabétique A - Z</button>
    <button class="rounded-pill border-secondary px-3 py-1 @if($filter === 'order_desc') bg-secondary text-white @endif" wire:click="order_desc" wire:model="filter" name="order" value="desc">Alphabétique Z - A</button>
   <label id="beginsWith" class="rounded-pill border-secondary px-3 py-1 @if($filter === 'beginsWith')) bg-secondary text-white @endif ">Commence par :
    <select name="beginsWith" class="border-0 bg-transparent @if($filter === 'beginsWith') text-white @endif" wire:model="beginsWith" wire:change.debounce="beginsWith">
        @foreach(\App\Models\Syllabe::all() as $syllabe)
            <option value="{{$syllabe->syllabe}}">{{$syllabe->syllabe}}</option>
        @endforeach
    </select>
    </label>
    <label id="nbreSyllabes" class="rounded-pill border-secondary px-3 py-1 @if($filter === 'nbreSyllabes') bg-secondary text-white @endif">Nombre de syllabes :
        <select name="nbreSyllabes" class="border-0 bg-transparent @if($filter === 'nbreSyllabes') text-white @endif " wire:model="nbreSyllabes" wire:change.debounce="nbreSyllabes">
            @for($i = 1; $i<=6; $i++)
                <option value="{{$i}}">{{$i}}</option>
            @endfor
        </select>
    </label>

    <div class="language-switch d-flex justify-content-center align-baseline mt-2">

        <p>MaCuSi
            <img src="{{Storage::url('img/icon-simple-arrow.svg')}}" style="height: 15px">
            {{config('custom.available_languages')[strtoupper(app()->getLocale())]}}
        </p>

        <div class="form-check form-switch">
            <input wire:change.debounce="switch" class="form-check-input" type="checkbox" id="switch" checked>
        </div>

        <p>
            {{config('custom.available_languages')[strtoupper(app()->getLocale())]}}
            <img src="{{Storage::url('img/icon-simple-arrow.svg')}}" style="height: 15px">
            MaCuSi
        </p>
    </div>
</div>

