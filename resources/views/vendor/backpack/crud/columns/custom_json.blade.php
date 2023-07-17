{{-- regular object attribute --}}
@php
    $locale = app()->getLocale();
    $column['value'] = $column['value'] ?? data_get($entry, $column['name']);
    $column['text'] = $column['default'] ?? '-';

    if($column['value'] instanceof \Closure) {
        $column['value'] = $column['value']($entry);
    }

    if(is_array($column['value'])) {
        $column['value'] = json_encode($column['value']);
    }

    if(!empty($column['value'])) {
        $column['text'] = $column['value'];
    }

    $text = json_decode($column['text']);
@endphp

<span>
    @includeWhen(!empty($column['wrapper']), 'crud::columns.inc.wrapper_start')
        {{ $text->FR}}
    @includeWhen(!empty($column['wrapper']), 'crud::columns.inc.wrapper_end')
</span>
