@props([
    'name' => '',
    'caption' => '',
    'slot' => '',
    'absolute' => true,
    'dark' => true,
])

@if($dark)
<div class="bg-black bg-opacity-70 w-full h-full absolute top-0 left-0 z-10"></div>
@endif
<div class="absolute z-10 top-[5%] sm:top-[15%] lg:top-1/2 lg:-translate-y-1/2 lg:left-[10%] px-4">
    @if ($name !== '')
        <h1 class="font-epilogue font-black text-3xl sm:text-4xl md:text-5xl lg:text-[72px] text-white" data-aos="fade-up"
            data-aos-delay="500">
            {{ $name }}
        </h1>
    @endif
    @if ($caption !== '')
        <p class="mt-5 text-sm text-white md:text-xl mb-9 md:leading-[30px] font-light" data-aos="fade-up" data-aos-delay="700">
            {{ $caption }}
        </p>
    @endif
    @if ($slot !== '')
        <div data-aos="fade-up" data-aos-delay="900" data-aos-offset="0">
            {{ $slot }}
        </div>
    @endif
</div>
{{--@props([--}}
{{--    'name' => '',--}}
{{--    'caption' => '',--}}
{{--    'slot' => '',--}}
{{--    'absolute' => true--}}
{{--])--}}

{{--@php--}}
{{--    $container_classes;--}}
{{--    if($absolute) {--}}
{{--        $container_classes = 'absolute z-10 top-1/2 -translate-y-1/2 lg:left-[10%] px-4';--}}
{{--    } else {--}}
{{--        $container_classes = 'relative';--}}
{{--    }--}}

{{--@endphp--}}

{{--<div class="{{ $container_classes }}">--}}
{{--    @if ($name !== '')--}}
{{--        <h1 class="font-epilogue font-black text-4xl sm:text-5xl lg:text-[72px] text-white" data-aos="fade-up"--}}
{{--            data-aos-delay="500">--}}
{{--            {{ $name }}--}}
{{--        </h1>--}}
{{--    @endif--}}
{{--    @if ($caption !== '')--}}
{{--        <p class="mt-5 text-sm text-white md:text-xl mb-9 md:leading-[30px] font-light" data-aos="fade-up" data-aos-delay="700">--}}
{{--            {{ $caption }}--}}
{{--        </p>--}}
{{--    @endif--}}
{{--    @if ($slot !== '')--}}
{{--        <div data-aos="fade-up" data-aos-delay="900" data-aos-offset="0">--}}
{{--            {{ $slot }}--}}
{{--        </div>--}}
{{--    @endif--}}
{{--</div>--}}
