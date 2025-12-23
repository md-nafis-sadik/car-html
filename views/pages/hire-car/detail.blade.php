@extends('layouts.app')

@php
    $param = str_replace('-', ' ', Route::current()->parameter('slug'));

    if (mb_strlen($param, 'UTF-8') > 3) {
        $param = ucwords($param);
    } else {
        $param = strtoupper($param);
    }
@endphp

@section('title', 'Book a ' . $param)

@section('main')
    <header class="page-header">
        <img src="{{ asset('assets/images/audi-r8.png') }}" class="w-full h-full" alt="">

        @component('components.header-content')
            <p class="text-sm text-white md:text-xl md:leading-[30px] font-light" data-aos="fade-up" data-aos-delay="700">
                Performance
            </p>
            <h1 class="font-epilogue font-black text-5xl lg:text-[72px] text-white mt-4" data-aos="fade-up" data-aos-delay="500">
                {{ $param }}
            </h1>
            <div class="mt-7">
                <button type="button"
                    class="flex gap-1 sm:gap-3 items-center p-2 sm:py-2 sm:px-[10px] bg-white bg-opacity-60 rounded-[10px]">
                    <img src="{{ asset('assets/svgs/sneak-peek.svg') }}" class="w-3 h-3 sm:w-4 sm:h-4" alt="">
                    <p class="text-[10px] font-semibold sm:text-sm text-dark">
                        Car Gallery
                    </p>
                </button>
            </div>
        @endcomponent
    </header>

    @php
        $features = [
            (object) [
                'icon' => asset('assets/svgs/feature-capacity.svg'),
                'name' => 'Capacity',
                'caption' => 2 . ' people',
            ],
            (object) [
                'icon' => asset('assets/svgs/feature-age_limit.svg'),
                'name' => 'Age Limit',
                'caption' => 25 . ' + Hire',
            ],
            (object) [
                'icon' => asset('assets/svgs/feature-transmission.svg'),
                'name' => 'Transmission',
                'caption' => 'Auto',
            ],
            (object) [
                'icon' => asset('assets/svgs/features-doors_count.svg'),
                'name' => 'Doors count',
                'caption' => 2,
            ],
        ];
    @endphp
    <section class="pt-12 pb-[100px] max-w-screen-xl mx-auto px-4 lg:px-10">
        <div class="grid md:grid-cols-12 gap-[30px]">
            <div class="md:col-span-6 lg:col-span-8">
                <div class="grid grid-cols-2 gap-4 lg:grid-cols-4">
                    @foreach ($features as $feature)
                        <div class="bg-[#F3F4F6] p-5 flex items-center gap-3 rounded-[13px]" data-aos="fade-up"
                            data-aos-delay="{{ ($loop->index + 1) * 150 }}">
                            <img src="{{ $feature->icon }}" alt="">
                            <div class="flex flex-col gap-1">
                                <p class="text-xs font-medium text-dark text-opacity-60">
                                    {{ $feature->name }}
                                </p>
                                <p class="text-base font-medium tetx-dark">
                                    {{ $feature->caption }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-[54px] mb-5" data-aos="fade-up">
                    @component('components.banner-info')
                        @slot('type', 'light')
                        @slot('body')
                            Book this car online now to pick up and drop off at our Autofusion Clydebank. For custom pick up and drop off locations, please complete our contact form to receive a quote.
                        @endslot
                    @endcomponent
                </div>

                {{-- Car Details --}}
                <div class="mb-8" data-aos="fade-up">
                    <p class="text-base font-medium sm:text-xl text-dark">
                        The supercar that combines the breathtaking performance of the R8 with the open-top thrill of a convertible. This 2-door high-performance Audi Sport convertible with a 5.2 litre V10 engine is sure to be memorable.
                    </p>

                    <p class="text-sm font-medium text-dark">
                        <span class="font-semibold">Engine Size: </span> &nbsp;
                        5.2
                        <span class="font-semibold">Fuel: </span> &nbsp;
                        Petrol
                    </p>
                    <br>
                    <p class="text-sm font-medium text-dark">
                        Available for self drive or chauffeur service.
                    </p>
                    <br>
                    <p class="text-sm font-medium text-dark">
                        Hire for pleasure, business, event, wedding or special occasion. <br>
                        Drivers must be over the age of 25.
                    </p>
                    <br>
                    <p class="text-sm font-semibold text-dark">
                        Follow us on all major social media platforms for weekly deals, exclusive offers and new car updates.
                    </p>
                </div>

                @php
                    $exampleFeatureList = ['USB Input', 'Radio', 'Parking Sensors', 'Bluetooth', 'GPS', 'Air Conditioning'];
                @endphp
                <ul class="grid sm:grid-cols-2 gap-y-2 sm:gap-x-10 max-w-[310px]" data-aos="fade-up">
                    @foreach ($exampleFeatureList as $list)
                        <li class="flex items-start gap-3">
                            <img src="{{ asset('assets/svgs/blue-check-square.svg') }}"  alt="">
                            <p class="font-medium text-dark text-[13px] max-w-[105px]">{{ $list }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="md:col-span-6 lg:col-span-4">
                <form action="" method="" class="py-4 sm:py-8 sm:px-[14px] rounded-[20px] bg-[#2C2F36]" data-aos="fade-up">
                    @csrf
                    @method('POST')
                    <p class="text-lg font-semibold text-primary px-4 sm:px-[10px]">
                        £1,600 per day (1 days)
                    </p>
                    {{-- If not logged in or not registered user --}}
                    @guest
                        <p class="my-5 text-xs font-medium text-white px-4 sm:px-[10px]">
                            Not logged in. You must be
                            <a href="#" class="underline">registered</a> and <br>
                            <a href="#" class="underline">logged in</a>,
                            in order to secure this booking.
                        </p>
                    @endguest

                    <div class="bg-white sm:rounded-[14px] p-5 border border-[#E1E1E1]">
                        <p class="font-medium text-sm text-dark text-opacity-40 mb-[26px]">
                            Date & Time
                        </p>
                        <div class="flex flex-col gap-2 mb-5">
                            <label for="date_range" class="text-sm font-semibold text-dark">
                                Pickup & Dropoff
                            </label>
                            <x-input-field type="text" name="date_range" class-name="!text-sm !border !border-solid !border-[#cbcbcb] !bg-[#F3F4F6]" value="09/03/2023 - 10/03/2023" />
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="date_range" class="text-sm font-semibold text-dark">
                                Pickup Time
                            </label>
                            <select name="date_range" id="date_range" class="inputStyle !text-sm !border !border-solid !border-[#cbcbcb] !bg-[#F3F4F6]">
                                <option value="a">09:00</option>
                                <option value="b">10:00</option>
                                <option value="c">11:00</option>
                            </select>
                        </div>

                        <p class="mt-[11px] mb-7 pb-[22px] text-xs text-dark font-medium border-b border-b-[#E1E1E1]">
                            <span class="font-bold">Congrats!</span> This car is available on the date/time above.
                        </p>

                        <div class="flex flex-col gap-2">
                            <label for="pickup_location" class="text-sm font-semibold text-dark text-opacity-60">
                                Pickup Location
                            </label>
                            <select name="pickup_location" id="pickup_location" class="inputStyle !text-sm !border !border-solid !border-[#cbcbcb] !bg-[#F3F4F6]">
                                <option value="a">Autofusion Cludebank</option>
                                <option value="b">Location A</option>
                                <option value="c">Location B</option>
                            </select>
                        </div>

                        <div class="inline-flex items-center gap-3 mt-3">
                            <x-input-checkbox name="include_driver" />
                            <label for="include_driver" class="text-xs font-medium uppercase text-dark">INCLUDE A CHAUFFEUR FOR £120/day</label>
                        </div>

                        <p class="my-6 pb-[26px] text-xs text-dark text-opacity-65 font-medium border-b border-b-[#E1E1E1]">
                            No deposit will be required for chauffeur <br class="desktop"> bookings.
                        </p>

                        <div class="flex items-center justify-between gap-5">
                            <div>
                                <p class="mb-1 text-base font-semibold text-dark">Total</p>
                                <p class="text-sm font-medium text-dark text-opacity-60">Incl. VAT</p>
                            </div>
                            <p class="font-semibold text-[26px] text-primary">
                                £1,600
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col items-center justify-center">
                        <p class="mt-[30px] mb-[15px] text-white text-xs text-opacity-40 font-medium text-center">
                            Next we will ask you for your payment details
                        </p>
                        @guest
                            <a href="{{ route('login') }}" class="btn btn-primary">
                                Login to Book
                            </a>
                        @endguest
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="dark-container !bg-[#F3F4F6] mt-11 flex flex-col items-center">
        <h4 class="text-3xl font-black text-center sm:text-5xl text-dark font-epilogue" data-aos="fade-up">
            Not the perfect car for you?
        </h4>
        <p class="text-dark text-base sm:text-[23px] leading-7 font-medium text-center mx-auto mt-5 mb-10"
            data-aos="fade-up">
            We have a fleet of over 30 performance, luxury and supercars available to hire.
        </p>

        <a href="#" class="btn btn-primary" data-aos="fade-up">
            View all available vehicles
        </a>
    </section>
@endsection
