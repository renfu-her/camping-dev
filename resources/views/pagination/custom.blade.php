@if ($paginator->hasPages())
    <div class="col-12 mt-5">
        <div class="pagination d-flex justify-content-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <a href="#" class="rounded-circle disabled">&laquo;</a>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="rounded-circle">&laquo;</a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <a href="#" class="rounded-circle disabled">{{ $element }}</a>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a href="#" class="rounded-circle active">{{ $page }}</a>
                        @else
                            <a href="{{ $url }}" class="rounded-circle">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="rounded-circle">&raquo;</a>
            @else
                <a href="#" class="rounded-circle disabled">&raquo;</a>
            @endif
        </div>
    </div>
@endif
