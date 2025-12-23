@extends('layouts.garage-bookings', [
    'stepper_layout' => true,
])

@section('main')
    <div class="flex flex-col items-center justify-center mt-16 sm:mt-7">
        @include('components.horizontal-stepper', [
            'name' => 'Choose Appointment',
            'total' => 6,
            'currentStep' => 4,
        ])

        <section class="bg-white w-full lg:min-h-[calc(100vh-150px)] h-full mt-10">
            <div class="py-10 mx-auto max-w-screen-2xl sm:px-10" data-aos="fade-up">
                <div class="grid gap-6 sm:grid-cols-12">
                    <div class="col-span-12 md:col-span-8">
                        <div class="pt-9 pb-[50px] px-4 md:px-11 bg-[#F3F4F6] sm:rounded-[14px]">
                            <h5 class="font-epilogue text-3xl sm:text-[35px] text-dark font-black">
                                Which wheel alignment would you like?
                            </h5>
                            <p class="mt-2 mb-10 text-base sm:text-[19px] text-dark text-opacity-70">
                                Choose the best option for your vehicle
                            </p>

                            <div class="flex flex-col gap-4">
                                @component('components.input-radio')
                                    @slot('name', 'alignment_option')
                                    @slot('value', 'two_wheel')
                                    <div>
                                        <p class="text-[19px] font-semibold text-dark">
                                            Two Wheel Alignment
                                        </p>
                                        <p class="text-dark text-opacity-60 font-medium text-[15px] mt-1 mb-4">
                                            We will perform wheel alignment on 2 wheels
                                        </p>
                                        <p class="text-primary font-semibold text-[19px]">
                                            £54,95
                                        </p>
                                    </div>
                                @endcomponent
                                @component('components.input-radio')
                                    @slot('name', 'alignment_option')
                                    @slot('value', 'four_wheel')
                                    <div>
                                        <p class="text-[19px] font-semibold text-dark">
                                            Four Wheel Alignment
                                        </p>
                                        <p class="text-dark text-opacity-60 font-medium text-[15px] mt-1 mb-4">
                                            We will perform wheel alignment on 4 wheels
                                        </p>
                                        <p class="text-primary font-semibold text-[19px]">
                                            £72,95
                                        </p>
                                    </div>
                                @endcomponent
                            </div>
                            <p class="mt-5 text-sm text-[#FF5353] font-medium">
                                Choose the best option for your vehicle
                            </p>
                        </div>
                    </div>
                    <div class="col-span-12 px-4 md:col-span-4 sm:px-0">
                        <form action="" method="" class="py-4 sm:py-8 sm:px-[14px] rounded-[20px] bg-[#2C2F36]"
                            data-aos="fade-up">
                            @csrf
                            @method('POST')
                            <p class="text-lg font-semibold text-primary px-4 sm:px-[10px] mb-6">
                                Booking Summary
                            </p>

                            <div class="bg-white sm:rounded-[14px] p-5 py-4 border border-[#E1E1E1]">
                                <div class="flex items-center justify-between gap-4 mb-4">
                                    <p class="text-sm font-medium text-dark text-opacity-60">
                                        Your vehicle
                                    </p>
                                    <button type="button"
                                        class="py-1 px-[9px] font-medium text-sm bg-[#0099D6] bg-opacity-20 text-[#146b90] rounded-[5px] text-center">
                                        Edit
                                    </button>
                                </div>

                                <p class="font-semibold text-base text-dark mb-[10px]">
                                    FORD FIEST ST-LINE X TURBO
                                </p>
                                <p
                                    class="py-[6px] px-[10px] w-max text-xs font-semibold text-white tracking-[2px] rounded-md bg-primary">
                                    MX23USKS
                                </p>
                            </div>

                            <div class="flex flex-col items-center justify-center">
                                <p class="mt-[30px] mb-[15px] text-white text-xs text-opacity-40 font-medium text-center">
                                    Thanks, next we will ask you for your ownder details
                                </p>
                                <a href="{{ route('book.checkout') }}" class="btn btn-primary">
                                    Continue
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
