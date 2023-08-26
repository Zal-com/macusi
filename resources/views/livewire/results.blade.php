<div wire:model="render">
    @foreach($mots as $mot)
        @if($mot->typesString() != 'Chiffre')
            <x-card :mot="$mot" :count="$count""/>
            @php
                $count++;
            @endphp
        @endif
    @endforeach
</div>
