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
                    class="flex justify-center items-center w-11 h-11 rounded-[15px] overflow-hidden bg-[#151919] bg-opacity-10 hover:bg-[#151919] transition-all group disabled:opacity-45 hover:text-white {{ $paginator->currentPage() == 1 ? 'pointer-events-none cursor-not-allowed opacity-45' : null }}">
                    <img src="{{ asset('assets/svgs/sharp-chevron-down.svg') }}"
                        class="w-4 h-4 rotate-90 group-hover:invert" alt="">
                </a>
            </li>
            @foreach ($paginator->links()->elements as $element)
                @if (is_string($element))
                    <span aria-disabled="true">
                        <span
                            class="flex justify-center items-center w-11 h-11 rounded-[15px] overflow-hidden bg-[#151919] bg-opacity-10 hover:bg-[#151919] transition-all group disabled:opacity-45 hover:text-white">{{ $element }}</span>
                    </span>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        <li>
                            <a href="{{ $route . $url }}">
                                <p
                                    class="flex justify-center items-center w-11 h-11 rounded-[15px] overflow-hidden bg-[#151919] bg-opacity-10 hover:bg-[#151919] transition-all group disabled:opacity-45 hover:text-white {{ $paginator->currentPage() == $page ? 'pointer-events-none cursor-not-allowed opacity-45' : null }}">
                                    {{ $page }}
                                </p>
                            </a>
                        </li>
                    @endforeach
                @endif
            @endforeach
            <li>
                <a href="{{ $paginator->nextPageUrl() }}"
                    class="flex justify-center items-center w-11 h-11 rounded-[15px] overflow-hidden bg-[#151919] bg-opacity-10 hover:bg-[#151919] transition-all group disabled:opacity-45 hover:text-white {{ $paginator->hasMorePages() == 1 ? 'pointer-events-none cursor-not-allowed opacity-45' : null }}">
                    <img src="{{ asset('assets/svgs/sharp-chevron-down.svg') }}"
                        class="w-4 h-4 -rotate-90 group-hover:invert" alt="">
                </a>
            </li>
        </ul>
    </div>
@endif
