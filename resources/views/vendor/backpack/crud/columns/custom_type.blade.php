{{-- regular object attribute --}}
@php
    $locale = app()->getLocale();
    $column['value'] = $column['value'] ?? data_get($entry, $column['name']);
    $column['text'] = $column['default'] ?? '-';

    $taille = sizeof($column['value']);

    $str = '';


    //var_dump(json_decode($column['value'][0]['trads'])->FR);

    if(empty($column['value'])){
        $str = '-';
        }

    if($taille == 1){
        $str = json_decode($column['value'][0]['trads'])->FR;
    }
    if($taille > 1){
        for($i = 0; $i < $taille; $i++) {
          $str .= json_decode($column['value'][$i]['trads'])->FR . ' / ';
        }
        $str = substr($str, 0, strlen($str)-3);
    }


    if($column['value'] instanceof \Closure) {
        $column['value'] = $column['value']($entry);
    }

    if(is_array($column['value'])) {
        $column['value'] = json_encode($column['value']);
    }

    if(!empty($column['value'])) {
        $column['text'] = $column['value'];
    }

@endphp

<span>
    @includeWhen(!empty($column['wrapper']), 'crud::columns.inc.wrapper_start')
    {{$str}}
    @includeWhen(!empty($column['wrapper']), 'crud::columns.inc.wrapper_end')
</span>

