@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true"><span>&laquo; Sebelumnya &nbsp;</span></li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo; Sebelumnya &nbsp;</a></li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Selanjutnya &raquo;</a></li>
            @else
                <li class="disabled" aria-disabled="true"><span>Selanjutnya &raquo;</span></li>
            @endif
        </ul>
    </nav>
@endif
