@props(['paginator', 'route' => Request::url(), 'pageDetail' => true])

@if ($paginator->hasPages())
    <div class="mt-[50px] flex flex-col gap-5 justify-center items-center" data-aos="fade-up">
        @if ($pageDetail)
            @include('components.pagination.detail', ['data' => $paginator])
        @endif
        <ul
            class="relative z-0 flex flex-wrap items-center justify-center flex-1 gap-2 sm:flex-nowrap sm:inline-flex lg:flex lg:gap-4 rtl:flex-row-reverse">
            <li>
                <a href="{{ $paginator->previousPageUrl() }}"
                    class="flex justify-center items-center w-9 h-9 sm:w-[46px] sm:h-[46px] rounded-full overflow-hidden bg-[#151919] bg-opacity-10 hover:bg-[#151919] transition-all group {{ $paginator->currentPage() == 1 ? 'pointer-events-none cursor-not-allowed opacity-45' : null }}">
                    <img src="{{ asset('assets/svgs/sharp-chevron-down.svg') }}"
                        class="w-4 h-4 rotate-90 group-hover:invert" alt="">
                </a>
            </li>
            @foreach ($paginator->links()->elements as $element)
                @if (is_string($element))
                    <span aria-disabled="true">
                        <span class="flex items-center justify-center w-9 h-9">{{ $element }}</span>
                    </span>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        <li>
                            <a href="{{ $route . $url }}"
                                class="flex justify-center items-center w-9 h-9 rounded-[15px] overflow-hidden text-dark transition-all group">
                                <p
                                    class="text-dark text-opacity-50 border-b-[3px] border-b-transparent font-semibold text-sm sm:text-[15px] group-hover:text-opacity-100 group-hover:border-b-dark pb-1 lg:pb-3 {{ $paginator->currentPage() == $page ? '!border-b-dark !text-opacity-100' : null }}">
                                    {{ $page }}
                                </p>
                            </a>
                        </li>
                    @endforeach
                @endif
            @endforeach
            <li>
                <a href="{{ $paginator->nextPageUrl() }}"
                    class="flex justify-center items-center w-9 h-9 sm:w-[46px] sm:h-[46px] rounded-full overflow-hidden bg-[#151919] bg-opacity-10 hover:bg-[#151919] transition-all group {{ $paginator->hasMorePages() == 1 ? 'pointer-events-none cursor-not-allowed opacity-45' : null }}">
                    <img src="{{ asset('assets/svgs/sharp-chevron-down.svg') }}"
                        class="w-4 h-4 -rotate-90 group-hover:invert" alt="">
                </a>
            </li>
        </ul>
    </div>
@endif
