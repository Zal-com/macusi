@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if (!$paginator->onFirstPage())
                <li class="page-item pagination-end">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><img src="{{Storage::url('img/icon-arrow-right.svg')}}" alt="test" style="transform: rotate(180deg); margin-right: 5px">@lang('pagination.previous')</a>
                </li>
            @endif
            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item pagination-end">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">@lang('pagination.next')<img src="{{Storage::url('img/icon-arrow-right.svg')}}" alt="test" style="margin-left: 5px"></a>
                </li>
            @endif
        </ul>
    </nav>
@endif
