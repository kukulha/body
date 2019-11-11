@if ($paginator->hasPages())

        <ul class="pagination ">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous') " class="yellow-text"><i class="material-icons">chevron_left</i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span class="white-text">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active yellow"><a href="#!" class="black-text">{{ $page }}</a></li>
                        @else
                            <li class="waves-effect"><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')" class="yellow-text"><i class="material-icons">chevron_right</i></a>
                </li>
            @else
                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
            @endif
        </ul>
@endif
