@extends('layouts.garage-bookings', [
    'stepper_layout' => true,
])
@section('head-info')
    <meta name="description" content="Book MOT & service for your vehicle."/>
    <title>Describe Issue - {{ config('app.name') }}</title>
@endsection

@section('main')
    <div class="flex flex-col items-center justify-center mt-16 sm:mt-7">
        @include('components.horizontal-stepper', [
            'name' => 'Describe Issue',
            'total' => 3,
            'currentStep' => 1,
        ])

        <section class="bg-white w-full lg:min-h-[calc(100vh-150px)] h-full mt-10">
            <form method="post" action="/book/diagnostic-repair/describe" id="service-form">
                @csrf
                <div class="py-10 mx-auto max-w-screen-2xl sm:px-10" data-aos="fade-up">
                    <div class="grid gap-6 sm:grid-cols-12">
                        <div class="col-span-12 md:col-span-8">
                            <div class="pt-9 pb-[50px] px-4 md:px-11 bg-[#F3F4F6] sm:rounded-[14px]">
                                <h5 class="font-epilogue text-3xl sm:text-[35px] text-dark font-black">
                                    Describe your issue below
                                </h5>
                                <p class="mt-2 mb-10 text-base sm:text-[19px] text-dark text-opacity-70">
                                    Kindly include as many details as possible to help us with your diagnostic or repair.
                                </p>

                                <div class="flex flex-col mb-5">
                                    <textarea type="text" name="diagnosticDescription" id="diagnosticDescription" class="inputStyle valid:text-dark lg:max-w-[380px] w-full" required></textarea>
                                    @error('vehicleMileage')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                                </div>


                                <div class="flex flex-col gap-4">
                                    <label for="vehicleMileage" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-gray-800 font-semibold capitalize">Vehicle Mileage</label>
                                    <x-input-field type="number" name="vehicleMileage" class-name="valid:text-dark lg:max-w-[380px] w-full" placeholder="10000" data-val-range-max="1000000" data-val-range-min="1" data-val-regex="Vehicle mileage must be a number" data-val-regex-pattern="^[0-9]&#x2B;$" data-val-required="Vehicle mileage is required" id="vehicleMileage" name="vehicleMileage" required />
                                    @error('vehicleMileage')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
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
                            'continueOnClick' => "submitServiceForm();",
                        ])
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection
