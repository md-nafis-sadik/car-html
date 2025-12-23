@extends('layouts.garage-bookings', [
    'stepper_layout' => true,
])

@php
    $data = (object) [
        'email' => 'rainbow@mail.com',
        'vehicle_name' => 'tesla model s 75',
        'register_number' => 'AP11JET',
        'service_type' => 'Standard Service',
        'service_name' => 'Standard MOT',
        'mileage' => 3000,
        'service_location' => 'Autofusion Clydebank',
        'service_date' => '25th Jan 2024',
        'drop_off_time' => '13:30',
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
            <div class="max-w-screen-lg px-4 py-10 mx-auto md:px-10" data-aos="fade-up">
                <div class="flex flex-col gap-4 mb-7">
                    <h1 class="text-xl font-bold sm:text-3xl font-epilogue text-dark">
                        Please review and confirm your booking
                    </h1>
                </div>
                <div class="flex flex-col gap-5 md:grid md:grid-cols-12">
                    <div class="md:col-span-7 lg:col-span-8">
                        <div class="bg-white rounded-[15px] border border-dark border-opacity-10 overflow-hidden">
                            <ul>
                                <li
                                    class="flex items-start justify-between gap-3 p-4 border-b border-b-dark border-opacity-10 last:border-b-0">
                                    <div class="flex flex-col gap-1">
                                        <p class="text-xs sm:text-base text-dark text-opacity-60">Your vehicle</p>
                                        <p class="text-lg font-semibold uppercase text-dark">
                                            {{ $data->vehicle_name }}
                                        </p>
                                        <div
                                            class="px-2 py-1 text-sm font-bold text-center bg-yellow-300 rounded text-dark w-max">
                                            {{ $data->register_number }}
                                        </div>
                                    </div>
                                    <button type="button" title="Edit booking data">
                                        <img src="{{ asset('assets/svgs/pencil-edit.svg') }}"
                                            class="w-6 h-6 transition-all hover:invert" alt="">
                                    </button>
                                </li>
                                <li
                                    class="flex flex-col gap-1 p-4 border-b border-b-dark border-opacity-10 last:border-b-0">
                                    <p class="text-xs sm:text-base text-dark text-opacity-60">Description of work</p>
                                    <div class="flex flex-wrap items-center gap-3">
                                        <p class="text-base font-semibold sm:text-lg text-dark">
                                            {{ $data->service_type }}
                                        </p>
                                        <span class="text-opacity-30 text-dark">|</span>
                                        <p class="text-base font-semibold sm:text-lg text-dark">
                                            {{ $data->service_name }}
                                        </p>
                                    </div>
                                </li>
                                <li
                                    class="flex flex-col gap-1 p-4 border-b border-b-dark border-opacity-10 last:border-b-0">
                                    <p class="text-xs sm:text-base text-dark text-opacity-60">Mileage</p>
                                    <p class="text-lg font-semibold text-dark">
                                        {{ $data->mileage }}
                                    </p>
                                </li>
                                <li
                                    class="flex flex-wrap gap-4 p-4 border-b md:gap-10 border-b-dark border-opacity-10 last:border-b-0">
                                    <div class="flex flex-col gap-1">
                                        <p class="text-xs sm:text-base text-dark text-opacity-60">When and where</p>
                                        <p class="text-lg font-semibold text-dark">
                                            {{ $data->service_location }}
                                        </p>
                                        <p class="text-base font-normal text-dark">
                                            {{ $data->service_date }}
                                        </p>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <p class="text-xs sm:text-base text-dark text-opacity-60">Remember to bring</p>
                                        <p class="inline-flex items-center gap-2 text-base font-normal text-dark">
                                            <img src="{{ asset('assets/svgs/blue-check-square.svg') }}" class="w-4 h-4"
                                                alt="">
                                            Service book
                                        </p>
                                    </div>
                                </li>
                                <li
                                    class="flex flex-col gap-1 p-4 border-b border-b-dark border-opacity-10 last:border-b-0">
                                    <p class="text-xs sm:text-base text-dark text-opacity-60">Drop-off Time</p>
                                    <p class="text-lg font-semibold text-dark">
                                        {{ $data->drop_off_time }}
                                    </p>
                                </li>
                                <li
                                    class="flex flex-col gap-1 p-4 border-b border-b-dark border-opacity-10 last:border-b-0">
                                    <form action="" method="">
                                        @csrf
                                        @method('POST')
                                        <p class="text-xs sm:text-base text-dark text-opacity-60">Coupon</p>
                                        <div class="flex flex-col gap-2 mt-2 lg:flex-row">
                                            <x-input-field type="text" name="coupon_code" placeholder="Enter code here"
                                                class-name="flex-grow !bg-[#F3F4F6]" />
                                            <button class="btn btn-primary">Redeem Code</button>
                                        </div>
                                    </form>
                                </li>
                                <li
                                    class="flex flex-col gap-1 p-4 border-b border-b-dark border-opacity-10 last:border-b-0">
                                    <div class="flex items-center justify-between gap-5">
                                        <div>
                                            <p class="mb-1 text-base font-semibold sm:text-2xl text-dark">Total Due</p>
                                            <p class="text-sm font-medium text-dark text-opacity-60">Incl. VAT</p>
                                        </div>
                                        <p class="font-semibold text-[26px] text-primary">
                                            £1,600
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:col-span-5 lg:col-span-4">
                        <form action="" method=""
                            class="bg-white rounded-[15px] border border-dark border-opacity-10 overflow-hidden">
                            @csrf
                            @method('POST')
                            <div class="flex flex-col gap-4 p-4">
                                <p
                                    class="pb-4 text-xs border-b border-opacity-10 sm:text-base lg:text-lg text-dark text-opacity-60">
                                    Make a payment</p>
                                @component('components.input-radio')
                                    @slot('name', 'payment_type')
                                    @slot('value', 'credit_debit_card')
                                    @slot('className', 'gap-5 rounded-lg py-3 px-4 border-2 border-opacity-10')
                                    <div>
                                        <p class="text-sm font-semibold sm:text-base text-dark">
                                            Credit / Debit Card
                                        </p>
                                    </div>
                                @endcomponent
                                @component('components.input-radio')
                                    @slot('name', 'payment_type')
                                    @slot('value', 'pay_in_store')
                                    @slot('className', 'gap-5 rounded-lg py-3 px-4 border-2 border-opacity-10')
                                    <div>
                                        <p class="text-sm font-semibold sm:text-base text-dark">
                                            Pay In Store
                                        </p>
                                    </div>
                                @endcomponent
                                <div class="grid items-center justify-between w-full grid-cols-12 gap-2"
                                    id="inputCreditCard">
                                    <div class="relative col-span-8">
                                        <x-input-field type="number" name="card_number" placeholder="Card number"
                                            class-name="!bg-[#f3f4f6] !pl-10 !p-3 !rounded-lg !text-xs sm:!text-sm w-full" />
                                        <img src="{{ asset('assets/svgs/credit-card.svg') }}"
                                            class="absolute w-5 h-5 -translate-y-1/2 top-1/2 left-3 brightness-50"
                                            alt="">
                                    </div>
                                    <div class="col-span-4">
                                        <x-input-field type="number" name="card_expiry_date" placeholder="MM/YY"
                                            class-name="!bg-[#f3f4f6] !p-3 !rounded-lg !text-xs sm:!text-sm w-full" />
                                    </div>
                                </div>

                                <div class="py-4 border-t border-t-dark border-opacity-10">
                                    <p class="text-xs text-dark text-opacity-70">
                                        I accept the terms and conditions and agree to waive any cancellation right once
                                        work has been started on my vehicle.
                                    </p>
                                    <div class="p-2 bg-[#f3f4f6] rounded-lg inline-flex gap-2 items-center w-full my-3">
                                        <x-input-checkbox name="accept_terms" />
                                        <label for="accept_terms" class="text-sm font-medium text-dark">I accept and
                                            aggree</label>
                                    </div>
                                    <p class="text-xs text-dark text-opacity-70">
                                        The personal information you provide to us at this stage will only be used for the
                                        purposes of your booking. If you would like to find out more on how we use your
                                        info, please see our privacy policy. This can be found on <a href="#"
                                            class="font-medium text-blue-500 underline transition-all hover:text-blue-400 underline-offset-2">here</a>.
                                    </p>
                                </div>

                                <button type="button" class="btn btn-primary">
                                    Confirm Booking
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
