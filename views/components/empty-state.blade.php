@props([
    'title' => '',
    'caption' => '',
])

{{--xl:gap-[200px]--}}
<div class="flex flex-wrap justify-between w-full gap-10  p-5 md:px-8 bg-dark md:py-9 rounded-[14px]">
    @if($title)
    <h5 class="text-white text-[31px] font-bold">
        {!! $title !!}
    </h5>
    @endif

    <div class="flex-grow">
        <p class="text-lg text-[#737A8B] font-medium mb-5">
            {{ $caption }}
        </p>

        @if ($slot != '')
            {{ $slot }}
        @endif
    </div>
</div>
