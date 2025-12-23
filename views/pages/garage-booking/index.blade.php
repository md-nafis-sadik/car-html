@extends('layouts.garage-bookings', [
    'title' => 'Book A Repair - Service - MOT'
])

@php
    $services = [
        (object)[
            'name' => 'MOT & Service',
            'caption' => 'We will perform a vehicle MOT and service your vehicle',
            'route' => route('book.mot')
        ],
        (object)[
            'name' => 'Tracker Installation',
            'caption' => 'We will install an industry-leading tracker to your vehicle',
            'route' => route('book.trackers')
        ],
        (object)[
            'name' => 'Wheel Alignment',
            'caption' => 'We will perform wheel alignment on your vehicle',
            'route' => route('book.wheel-alignment')
        ],
        (object)[
            'name' => 'Book a Repair',
            'caption' => 'Book your vehicle in for a diagnostic or repair',
            'route' => route('book.diagnostic-repair')
        ],
    ];
@endphp

@section('main')
    <section class="flex flex-col items-center justify-center my-20">
        <h1 class="text-4xl md:text-[50px] font-epilogue text-white font-black text-center -tracking-[0.4px]" data-aos="fade-up">
            Welcome to our bookings platform
        </h1>
        <p class="mt-4 text-white text-opacity-70 font-light text-base md:text-[23px] text-center mb-[50px]" data-aos="fade-up">
            Choose your service to get started
        </p>

        <div class="flex flex-col gap-4 w-full max-w-[550px]" data-aos="fade-up">
            @foreach ($services as $service)
                <div class="flex items-center gap-[18px] p-4 sm:py-6 sm:px-[30px] border border-white border-opacity-[0.23] bg-[#D9D9D9] bg-opacity-15 rounded-full backdrop-blur hover:backdrop-blur-0 relative transition-all duration-700">
                    <img src="{{ asset('assets/svgs/green_lantern.svg') }}" class="h-4" alt="">
                    <div class="flex-grow">
                        <a href="{{ $service->route }}" class="stretched-link">
                            <h4 class="font-semibold text-base sm:text-[22px] text-white -tracking-[0.4px]">
                                {{ $service->name }}
                            </h4>
                        </a>
                        <p class="text-white text-opacity-60 text-sm sm:text-[15px] font-medium -tracking-[0.4px] mt-[6px]">
                            {{ $service->caption }}
                        </p>
                    </div>
                    <img src="{{ asset('assets/svgs/chevron-right.svg') }}" alt="">
                </div>
            @endforeach
        </div>
    </section>
@endsection
