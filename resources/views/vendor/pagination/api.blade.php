
@if (@$machines_data->last_page > 1)
    @php
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") .
        "://$_SERVER[HTTP_HOST]".strtok($_SERVER["REQUEST_URI"],'?');
        $prev_page_num = @$machines_data->current_page - 1 ;
        $next_page_num = @$machines_data->current_page + 1 ;
        $prev_page_url = $actual_link . '?page='. $prev_page_num;
        $next_page_url = $actual_link . '?page='. $next_page_num;
        $pages = @$machines_data->last_page ;
        $elements = [];
        for ($i=1; $i <= $pages; $i++) {
            if ($i == @$machines_data->current_page) {
                $elements[] = $i;
            }else {
                $elements[$i] = [
                    $i => $actual_link . '?page='. $i
                ];
            }
        }
    @endphp
    <ul class="pagination" role="navigation">
        {{-- Previous Page Link --}}
        @if (@$machines_data->current_page == 1)
            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span class="page-link" aria-hidden="true">&lsaquo;</span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ @$prev_page_url }}" rel="prev"
                    aria-label="@lang('pagination.previous')">&lsaquo;</a>
            </li>
        @endif
        
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_numeric($element))
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == @$machines_data->current_page)
                        <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if (@$machines_data->last_page - @$machines_data->current_page >= 1)
            <li class="page-item">
                <a class="page-link" href="{{ @$next_page_url }}" rel="next"
                    aria-label="@lang('pagination.next')">&rsaquo;</a>
            </li>
        @else
            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span class="page-link" aria-hidden="true">&rsaquo;</span>
            </li>
        @endif
    </ul>
@endif