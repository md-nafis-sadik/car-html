<!-- @props(['thumbnail', 'index', 'name', 'price', 'type', 'route' => '#', 'route_name' => $routeName, 'details' => []])

<div class="rounded-xl sm:rounded-[20px] bg-[#F3F4F6] flex flex-col gap-3 sm:gap-5 overflow-hidden" data-aos="fade-up" data-aos-delay="{{ 50 * ($index+1) }}">
    <div class="@if(isset($thumbnail)) sm:pt-5 @endif sm:px-5">
        <div class="relative sm:rounded-[15px] overflow-hidden">
            @if(isset($thumbnail))
            <img src="{{ $thumbnail }}" class="w-full h-[130px] sm:h-[172px] sm:rounded-[15px]" alt="">
            <button type="button"
                class="inline-flex gap-1 sm:gap-3 items-center p-2 sm:py-2 sm:px-[10px] bg-white bg-opacity-60 rounded-[10px] absolute bottom-2 left-2 sm:bottom-3 sm:left-3">
                <img src="{{ asset('assets/svgs/sneak-peek.svg') }}" class="w-3 h-3 sm:w-4 sm:h-4" alt="">
                <p class="text-[10px] font-semibold sm:text-sm text-dark">
                    Sneak Peek
                </p>
            </button>
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
        @if(isset($details) && is_array($details))
        <div class="py-4 gap-y-1">
            @foreach($details as $detail)
                <p class="text-sm -tracking-[0.4px] line-clamp-1">
                    <span class="font-bold">{{ $detail->name }}</span> {{ $detail->value }}
                </p>
            @endforeach
        </div>
        @endif
        <div class="flex flex-col gap-3 mt-3 sm:mt-8 sm:items-center sm:justify-between sm:flex-row sm:flex-wrap">
            <div>
{{--                <p class="text-base font-medium text-opacity-50 text-dark -tracking-[0.4px]">--}}
{{--                    From--}}
{{--                </p>--}}
                <p class="text-base font-semibold text-primary -tracking-[0.4px]">
                    £{{ $price }}
                </p>
            </div>
            @if($route)
            <a href="{{ $route }}"
                class="w-full py-3 btn btn-primary sm:w-auto sm:py-2 rounded-lg sm:rounded-[15px]">
                {{ $routeName }}
            </a>
            @endif
        </div>
    </div>
</div> -->

@props(['thumbnail', 'index', 'name', 'price', 'type', 'route' => '#', 'routeName' => 'View', 'details' => []])

<div class="col-sm-6 col-md-4 col-xl-3">
    <div class="card card__light p-4 rounded-4" data-aos="fade-up" data-aos-delay="{{ 50 * ($index+1) }}">
        <div class="">
            {{-- Badge for booking type and status --}}
            <div class="badge mb-3 bg-white rounded-pill text-bg-light py-2 text-b6-medium">
                {{ $type }}
            </div>
            
            {{-- Booking Reference --}}
            <h3 class="text-b5-medium mb-2 text-dark">{{ $name }}</h3>
            
            {{-- Details Section --}}
            @if(isset($details) && is_array($details))
                @foreach($details as $detail)
                    <div class="text-b5-semibold text-dark @if(!$loop->last) mb-2 @endif">
                        <span class="text-secondary text-opacity-50">{{ $detail->name }}</span> 
                        {{ $detail->value }}
                    </div>
                @endforeach
            @endif

            {{-- Price and Action Button --}}
            <div class="d-flex align-items-center justify-content-between mt-4">
                <span class="text-b3-semibold text-dark">£{{ $price }}</span>
                @if($route)
                    <a href="{{ $route }}" class="btn text-b6-medium py-2 px-4 btn--gradient-primary">
                        {{ $routeName }}
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>