@props(['car_id' => '', 'thumbnail', 'index', 'name', 'price', 'type', 'route' => '#'])

<div class="rounded-xl sm:rounded-[20px] bg-[#F3F4F6] flex flex-col gap-3 sm:gap-5 overflow-hidden" data-aos="fade-up" data-aos-delay="{{ 50 * ($index+1) }}">
    <div class="sm:pt-5 sm:px-5">
        <div class="relative sm:rounded-[15px] overflow-hidden">
            @if(isset($thumbnail))
            <img src="{{ $thumbnail }}" class="w-full h-[130px] sm:h-[172px] sm:rounded-[15px]" alt="">
                @if($car->total_images > 0)
                    <button type="button"
                        class="inline-flex gap-1 sm:gap-3 items-center p-2 sm:py-2 sm:px-[10px] bg-white bg-opacity-60 rounded-[10px] absolute bottom-2 left-2 sm:bottom-3 sm:left-3">
                        <img src="{{ asset('assets/svgs/sneak-peek.svg') }}" class="w-3 h-3 sm:w-4 sm:h-4" alt="">
                        <p class="text-[10px] font-semibold sm:text-sm text-dark"  onclick="app.openGallery({{ $car_id }})">
                            Sneak Peak
                        </p>
                    </button>
                @endif
            @endif

        </div>
    </div>

    <div class="px-3 pb-3 sm:px-5 sm:pb-5">
        <p class="text-base font-bold text-dark -tracking-[0.4px] line-clamp-1">
            {{ $name }}
        </p>
        <p class="text-base font-medium text-opacity-50 font text-dark -tracking-[0.4px] capitalize">
            {{ $type }}
        </p>
        <div class="flex flex-col gap-3 mt-3 sm:mt-8 sm:items-center sm:justify-between sm:flex-row sm:flex-wrap">
            <div>
                <p class="text-base font-medium text-opacity-50 text-dark -tracking-[0.4px]">
                    From
                </p>
                <p class="text-base font-semibold text-primary -tracking-[0.4px]">
                    £{{ $price }}/day
                </p>
            </div>
            <a href="{{ $route }}"
                class="w-full py-3 btn btn-primary sm:w-auto sm:py-4 rounded-lg sm:rounded-[15px]">
                Select
            </a>
        </div>
    </div>
</div>
