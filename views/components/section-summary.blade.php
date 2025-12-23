@props([
    'header' => '',
    'caption' => '',
    'textMedium' => '',
    'text' => '',
    'containerWidth' => 'max-w-[470px]',
    'captionWidth' => null
])

<div class="{{ $containerWidth }} flex flex-col gap-5 sm:gap-9" data-aos="fade-right" data-aos-delay="200">
    @if ($header !== '')
        <h4 class="text-3xl font-black sm:text-5xl font-epilogue">
            {!! $header !!}
        </h4>
    @endif

    @if ($caption !== '')
        <p class="text-base font-medium sm:text-xl {{ $captionWidth }}">
            {!! $caption !!}
        </p>
    @endif

    @if ($text !== '' || $textMedium !== '')
        <div class="flex items-baseline gap-5 {{ $captionWidth }}">
            <img src="{{ asset('assets/svgs/green_lantern_horizontal.svg') }}" alt="">
            <p class="text-sm font-normal sm:text-base">
                @if ($textMedium != '')
                    <span class="font-medium">{!! $textMedium !!}</span>
                @endif
                {{ $text }}
            </p>
        </div>
    @endif
</div>
