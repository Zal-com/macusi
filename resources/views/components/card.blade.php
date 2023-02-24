@props(['mot'])
<div class="border rounded w-25 mx-1 my-3">
    <div>
        <h2 class="text-center py-4 border-bottom text-primary">{{ $mot->enMacusi }}</h2>
    </div>
    <div class="text-center">
        @php
            $locale = (string) strtoupper(app()->getLocale());
        @endphp
        <p>{{json_decode($mot->trads)->$locale}}</p>
        @if($mot->types->count() > 1)
            @php
                $str = 'Types : ';
                foreach ($mot->types as $type){
                    $str .= json_decode($type->trads)->$locale . ' / ';
                    }
                $string = substr($str, 0, strlen($str)-2);
            @endphp

            <p>{{$string}}</p>
        @else <p>Type : {{ json_decode($mot->types[0]->trads)->$locale}}</p>

        @endif

    </div>
</div>

