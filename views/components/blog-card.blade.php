@props(['thumbnail', 'index', 'title', 'date', 'body', 'route' => '#'])

<div class="col-sm-6">
    <div class="card p-0 rounded-4 overflow-hidden">
        <div class="d-flex position-relative">
            <img src="{{ $thumbnail }}" class="" alt="image">
            <span class="mfd">
                <span class="mfd__day">{{ \Carbon\Carbon::parse($date)->format('d') }}</span>
                <div class="mfd__month">{{ \Carbon\Carbon::parse($date)->format('M Y') }}</div>
            </span>
        </div>
        <div class="p-4">
            <h2 class="text-h5 fw-bold mb-3">{{ $title }}</h2>
            <p class="text-b3-regular fw-normal text-secondary text-opacity-75 mb-4">{{ $body }}</p>
            <a href="{{ $route }}" class="link-dark text-decoration-underline fw-semibold">Read More</a>
        </div>
    </div>
</div>

{{-- <div class="rounded-xl sm:rounded-[20px] bg-[#F3F4F6] flex flex-col gap-3 sm:gap-5 overflow-hidden" data-aos="fade-up" data-aos-delay="{{ 50 * ($index+1) }}">
    <div class="sm:pt-5 sm:px-5">
        <a href="{{ $route }}" class="relative sm:rounded-[15px] overflow-hidden">
            <img src="{{ $thumbnail }}" class="w-full h-[130px] sm:h-[172px] sm:rounded-[15px]" alt="">
        </a>
    </div>

    <div class="px-3 pb-3 sm:px-5 sm:pb-5">
        <p class="text-[10px] sm:text-sm font-medium text-opacity-50 font text-dark -tracking-[0.4px] uppercase">
            {{ $date }}
        </p>
        <a href="{{ $route }}">
            <p class="text-sm leading-4 sm:text-2xl sm:leading-7 font-bold text-dark -tracking-[0.4px] line-clamp-3 mt-3 mb-2 capitalize">
                {{ $title }}
            </p>
            <p class="text-xs sm:text-base sm:leading-5 font-medium text-opacity-50 font text-dark -tracking-[0.4px] line-clamp-3 sm:line-clamp-4 pr-1 mb-2 text-pretty">
                {{ $body }}
            </p>
        </a>
    </div> 
</div> --}}
