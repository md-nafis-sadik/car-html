@props([
    'name' => 'Default Step name',
    'currentStep' => 3,
    'total' => 5,
])

@php
    if (($currentStep > $total)) {
        $name = "<p class='text-xl font-semibold animate-bounce text-rose-600'>The currentStep shouldn't be greater than the total step!</p>";
        $currentStep = $total - 1;
    }
@endphp

<section class="w-full px-4 max-w-screen-2xl" data-aos="fade-up">
    <div class="flex items-center justify-between mb-3">
        <p class="text-base font-medium text-white">
            {!! $name !!}
        </p>
        <p class="text-sm font-medium text-white text-opacity-70">
            Step {{ $currentStep }} of {{ $total }}
        </p>
    </div>
    <ol class="flex items-center justify-center w-full mx-auto">
        @foreach (range(1, $total) as $stepper)
            <li
                class="stepper-horizontal group {{ $stepper <= $currentStep ? 'is-complete' : null }} {{ $stepper === $currentStep ? 'is-current-step' : '' }}">
                <div class="relative">
                    <div
                        class="relative flex items-center justify-center w-3 sm:w-5 h-3 sm:h-5 bg-primary group-[.is-current-step]:!bg-white group-[.is-complete]:!bg-primary rounded-full shrink-0 hover:scale-110 transition-all group-last:w-0 group-last:h-0 group-last:ml-[5px]">
                        <div class="w-[6px] h-[6px] sm:w-2 sm:h-2 rounded-full bg-primary hidden group-[.is-current-step]:block"></div>
                    </div>
                </div>
            </li>
        @endforeach
    </ol>
</section>
