@props([
    'type' => 'dark', // dark or light
    'body' => 'Default Body',
])

@php
    $containerClass; $textClass;
    if ($type == 'dark') {
        $containerClass = "bg-[#d9d9d9] bg-opacity-10";
        $textClass = "text-[#c7c7c9]";
    } else if ($type == 'light') {
        $containerClass = "bg-[#F3F4F6]";
        $textClass = "text-dark";
    }
@endphp

<div class="sm:py-[14px] sm:px-5 p-3 rounded-[14px] w-fit flex items-center gap-6 {{ $containerClass }}">
    <img src="{{ asset('assets/svgs/green_lantern.svg') }}" class="w-4 h-auto" alt="">
    <p class="text-sm leading-[18px] font-medium {{ $textClass }}">
        {{ $body }}
    </p>
</div>
