<div id="filters">
    <input class="rounded-pill px-3 py-1" type="search" placeholder="Rechercher">
    <button class="rounded-pill border-secondary px-3 py-1" wire:click="order_asc" wire:model="order">Alphabétique A - Z</button>
    <button class="rounded-pill border-secondary px-3 py-1" wire:click="order_desc" wire:model="filter" name="order" value="desc">Alphabétique Z - A</button>
    <label id="beginsWith" class="rounded-pill border-secondary px-3 py-1">Commence par :
    <select name="beginsWith" class="border-0 bg-transparent">
        @foreach(\App\Models\Syllabe::all() as $syllabe)
            <option value="{{$syllabe->syllabe}}">{{$syllabe->syllabe}}</option>
        @endforeach
    </select>
    </label>
    <label class="rounded-pill border-secondary px-3 py-1">Nombre de syllabes :
        <select name="nbreSyllabes" class="border-0 bg-transparent">
            @for($i = 1; $i<=6; $i++)
                <option value="{{$i}}">{{$i}}</option>
            @endfor
        </select>
    </label>
</div>

