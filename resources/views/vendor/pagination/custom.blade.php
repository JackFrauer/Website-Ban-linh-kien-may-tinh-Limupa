<div class="paginatoin-area">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            Showing {{ $paginator->firstItem() }} to {{ $paginator->lastItem() }} of {{ $paginator->total() }} items
        </div>
        <div class="col-lg-6 col-md-6">
            <ul class="pagination-box">
                @if ($paginator->onFirstPage())
                    <li class="disabled"><span><i class="fa fa-chevron-left"></i></span></li>
                @else
                    <li><a href="{{ $paginator->previousPageUrl() }}"><i class="fa fa-chevron-left"></i></a></li>
                @endif

                @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                    <li class="{{ ($i == $paginator->currentPage()) ? 'active' : '' }}"><a href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                @endfor

                @if ($paginator->hasMorePages())
                    <li><a href="{{ $paginator->nextPageUrl() }}"><i class="fa fa-chevron-right"></i></a></li>
                @else
                    <li class="disabled"><span><i class="fa fa-chevron-right"></i></span></li>
                @endif
            </ul>
        </div>
    </div>
</div>