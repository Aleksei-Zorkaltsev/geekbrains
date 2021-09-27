@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}">
        <div class="custom_Paginator">
                @if ($paginator->onFirstPage())
                    <div class="custom_button_paginator">
                        <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}" class="custom_Paginator_leftarrow">
                            <i class="fas fa-chevron-left inactive_arrow"></i>
                        </span>
                    </div>
                @else
                    <div class="custom_button_paginator">
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="{{ __('pagination.previous') }}" class="custom_Paginator_leftarrow">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                    </div>
                @endif
                    {{-- Previous Page Link --}}


                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <div class="custom_button_paginator">
                                <span aria-disabled="true">
                                    <span class="">{{ $element }}</span>
                                </span>
                            </div>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <div class="custom_button_paginator">
                                        <span class="custom_paginator_currentPage">{{ $page }}</span>
                                    </div>
                                @else
                                    <div class="custom_button_paginator">
                                        <a href="{{ $url }}" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                            {{ $page }}
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <div class="custom_button_paginator">
                            <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="{{ __('pagination.next') }}" class="custom_Paginator_rightarrow">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    @else
                        <div class="custom_button_paginator">
                            <span aria-disabled="true" aria-label="{{ __('pagination.next') }}" class="custom_Paginator_rightarrow">
                                <i class="fas fa-chevron-right inactive_arrow"></i>
                            </span>
                        </div>
                    @endif
        </div>
    </nav>
@endif
