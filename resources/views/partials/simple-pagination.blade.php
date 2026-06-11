@if ($paginator->hasPages())
    <div class="join flex justify-center my-4">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <button class="join-item btn btn-disabled">«</button>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="join-item btn">«</a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="join-item btn">»</a>
        @else
            <button class="join-item btn btn-disabled">»</button>
        @endif
    </div>
@endif