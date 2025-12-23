@extends('layouts.garage-bookings', [
    'stepper_layout' => true,
])
@section('head-info')
    <meta name="description" content="Book MOT & service for your vehicle."/>
    <title>Service Required - {{ config('app.name') }}</title>
@endsection

@section('main')
    <div class="flex flex-col items-center justify-center mt-16 sm:mt-7">
        @include('components.horizontal-stepper', [
            'name' => 'Service',
            'total' => 6,
            'currentStep' => 1,
        ])

        <section class="bg-white w-full lg:min-h-[calc(100vh-150px)] h-full mt-10">
            <form method="post" action="/book/mot/service" id="service-form">
                @csrf
                <div class="py-10 mx-auto max-w-screen-2xl sm:px-10" data-aos="fade-up">
                    <div class="grid gap-6 sm:grid-cols-12">
                        <div class="col-span-12 md:col-span-8">
                            <div class="pt-9 pb-[50px] px-4 md:px-11 bg-[#F3F4F6] sm:rounded-[14px]">
                                <h5 class="font-epilogue text-3xl sm:text-[35px] text-dark font-black">
                                    Do you need a service?
                                </h5>
                                <p class="mt-2 mb-10 text-base sm:text-[19px] text-dark text-opacity-70">
                                    A service keeps your vehicle in safe and reliable condition
                                </p>

                                <div class="flex flex-col gap-4">
                                    @component('components.input-radio')
                                        @slot('name', 'IsServiceRequired[]')
                                        @slot('value', 'true')
                                        @slot('checked', 'true')
                                        <div>
                                            <p class="text-[19px] font-semibold text-dark">
                                                Yes
                                            </p>
                                        </div>
                                    @endcomponent
                                    @component('components.input-radio')
                                        @slot('name', 'IsServiceRequired[]')
                                        @slot('value', 'false')
                                        <div>
                                            <p class="text-[19px] font-semibold text-dark">
                                                No
                                            </p>
                                        </div>
                                    @endcomponent
                                </div>
    {{--                            <p class="mt-5 text-sm text-[#FF5353] font-medium">--}}
    {{--                                Choose the best option for your vehicle--}}
    {{--                            </p>--}}
                            </div>
                        </div>


                        @include('book.partials.booking-summary-bar', [
                            'continueText' => '',
                            'continueURL' => route('book'),
                            'continueButton' => 'Continue',
                            'continueOnClick' => "document.getElementById('service-form').submit();",
                        ])
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection
