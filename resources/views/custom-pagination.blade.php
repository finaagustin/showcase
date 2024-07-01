{{-- resources/views/custom-pagination.blade.php --}}

@if ($paginator->hasPages())
    <ul class="pagination justify-content-center">
        {{-- Tautan Halaman Sebelumnya --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <span class="page-link" aria-hidden="true">&lsaquo;&lsaquo; Previous</span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="Previous">&lsaquo;&lsaquo; Previous</a>
            </li>
        @endif

        {{-- Tautan Halaman Nomor --}}
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <li class="page-item {{ ($paginator->currentPage() == $i) ? 'active' : '' }}">
                <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
            </li>
        @endfor

        {{-- Tautan Halaman Berikutnya --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="Next">Next &rsaquo;&rsaquo;</a>
            </li>
        @else
            <li class="page-item disabled">
                <span class="page-link" aria-hidden="true">Next &rsaquo;&rsaquo;</span>
            </li>
        @endif
    </ul>
    
    <p class="text-center">Showing {{ $paginator->firstItem() }} to {{ $paginator->lastItem() }} of {{ $paginator->total() }} results</p>
@endif
