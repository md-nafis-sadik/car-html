@extends('layouts.garage-bookings', [
    'stepper_layout' => true,
])

@php
    $data = (object)[
        'email' => 'rainbow@mail.com',
        'vehicle_name' => 'tesla model s 75',
        'register_number' => 'AP11JET',
        'service_type' => 'Standard Service',
        'service_name' => 'Standard MOT',
        'mileage' => 3000,
        'service_location' => 'Autofusion Clydebank',
        'service_date' => '25th Jan 2024',
        'drop_off_time' => '13:30'
    ];
@endphp

@section('main')
    <div class="flex flex-col items-center justify-center mt-16 sm:mt-7">
        @include('components.horizontal-stepper', [
            'name' => 'Choose Appointment',
            'total' => 6,
            'currentStep' => 6,
        ])

        <section class="bg-white w-full lg:min-h-[calc(100vh-150px)] h-full mt-10">
            <div class="max-w-screen-md px-4 py-10 mx-auto sm:px-10" data-aos="fade-up">
                <div class="flex flex-col gap-4 mb-7">
                    <h1 class="text-xl font-bold sm:text-3xl font-epilogue text-dark">We've got your booking</h1>
                    <p class="text-sm font-normal sm:text-base text-dark">
                        We've sent a confirmation email to <span class="font-bold">{{ $data->email }}</span> with all the details about your booking.
                    </p>
                    <a href="#" class="btn btn-primary w-fit">
                        Set Password
                    </a>
                </div>

                <div class="bg-white rounded-[15px] border border-dark border-opacity-10 overflow-hidden">
                    <div class="p-4 flex items-center justify-between gap-4 bg-[#f3f4f6]">
                        <p class="text-xl font-bold text-dark">
                            Booking Summary
                        </p>
                    </div>
                    <ul>
                        <li class="flex flex-col gap-1 p-4 border-b border-b-dark border-opacity-10 last:border-b-0">
                            <p class="text-xs sm:text-base text-dark text-opacity-60">Your vehicle</p>
                            <p class="text-lg font-semibold uppercase text-dark">
                                {{ $data->vehicle_name  }}
                            </p>
                            <div class="px-2 py-1 text-sm font-bold text-center bg-yellow-300 rounded text-dark w-max">
                                {{ $data->register_number }}
                            </div>
                        </li>
                        <li class="flex flex-col gap-1 p-4 border-b border-b-dark border-opacity-10 last:border-b-0">
                            <p class="text-xs sm:text-base text-dark text-opacity-60">Description of work</p>
                            <div class="flex flex-wrap items-center gap-3">
                                <p class="text-base font-semibold sm:text-lg text-dark">
                                    {{ $data->service_type  }}
                                </p>
                                <span class="text-opacity-30 text-dark">|</span>
                                <p class="text-base font-semibold sm:text-lg text-dark">
                                    {{ $data->service_name  }}
                                </p>
                            </div>
                        </li>
                        <li class="flex flex-col gap-1 p-4 border-b border-b-dark border-opacity-10 last:border-b-0">
                            <p class="text-xs sm:text-base text-dark text-opacity-60">Mileage</p>
                            <p class="text-lg font-semibold text-dark">
                                {{ $data->mileage  }}
                            </p>
                        </li>
                        <li class="flex flex-wrap gap-4 p-4 border-b md:gap-10 border-b-dark border-opacity-10 last:border-b-0">
                            <div class="flex flex-col gap-1">
                                <p class="text-xs sm:text-base text-dark text-opacity-60">When and where</p>
                                <p class="text-lg font-semibold text-dark">
                                    {{ $data->service_location  }}
                                </p>
                                <p class="text-base font-normal text-dark">
                                    {{ $data->service_date  }}
                                </p>
                            </div>
                            <div class="flex flex-col gap-1">
                                <p class="text-xs sm:text-base text-dark text-opacity-60">Remember to bring</p>
                                <p class="inline-flex items-center gap-2 text-base font-normal text-dark">
                                    <img src="{{ asset('assets/svgs/blue-check-square.svg') }}" class="w-4 h-4" alt="">
                                    Service book
                                </p>
                            </div>
                        </li>
                        <li class="flex flex-col gap-1 p-4 border-b border-b-dark border-opacity-10 last:border-b-0">
                            <p class="text-xs sm:text-base text-dark text-opacity-60">Drop-off Time</p>
                            <p class="text-lg font-semibold text-dark">
                                {{ $data->drop_off_time  }}
                            </p>
                        </li>
                    </ul>
                </div>

                <div class="flex flex-col gap-2 my-7">
                    <p class="text-sm font-semibold sm:text-base text-dark">
                        Need to hire a car for your booking?
                        <a href="{{ route('hire.index') }}" class="underline transition-all underline-offset-4 hover:text-primary">
                            See hire cars
                        </a>
                    </p>
                </div>
            </div>
        </section>
    </div>
@endsection
