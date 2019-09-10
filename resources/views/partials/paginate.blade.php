<!-- pagination -->
@if ($paginator->hasPages())
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())


        @else
            <a href="{{$paginator->previousPageUrl()}}" class="page-numbers"><i class="ti ti-arrow-left"></i></a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)


            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a href="{{ $url }}" class="page-numbers current">{{ $page }}</a>
                    @else
                        <a href="{{ $url }}" class="page-numbers">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="page-numbers"><i class="ti ti-arrow-right"></i></a>
        @else


        @endif
@endif
<!-- end pagination -->
