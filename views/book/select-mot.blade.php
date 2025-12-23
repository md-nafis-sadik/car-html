@extends('layouts.garage-bookings', [
    'stepper_layout' => true,
])
@section('head-info')
    <meta name="description" content="Book MOT & service for your vehicle."/>
    <title>MOT - {{ config('app.name') }}</title>
@endsection

@section('main')
    <div class="flex flex-col items-center justify-center mt-16 sm:mt-7">
        @include('components.horizontal-stepper', [
            'name' => 'MOT',
            'total' => 6,
            'currentStep' => 3,
        ])

        <section class="bg-white w-full lg:min-h-[calc(100vh-150px)] h-full mt-10">
            <form method="POST" action="/book/mot/select-mot" id="service-form">
                @csrf
                <div class="py-10 mx-auto max-w-screen-2xl sm:px-10" data-aos="fade-up">
                    <div class="grid gap-6 sm:grid-cols-12">
                        <div class="col-span-12 md:col-span-8">
                            <div class="pt-9 pb-[50px] px-4 md:px-11 bg-[#F3F4F6] sm:rounded-[14px]">
                                <h5 class="font-epilogue text-3xl sm:text-[35px] text-dark font-black">
                                    What MOT would you like?
                                </h5>
                                <p class="mt-2 mb-10 text-base sm:text-[19px] text-dark text-opacity-70">
                                    Choose the best option for your vehicle
                                </p>

                                <div class="flex flex-col gap-4">
                                    @foreach($serviceOptions as $opt)
                                        @component('components.input-radio')
                                            @slot('id', $opt->id)
                                            @slot('name', 'productSelect[]')
                                            @slot('value', $opt->id)
                                            @if ($loop->first)@slot('checked', 'checked') @endif
                                            <div>
                                                <p class="text-[19px] font-semibold text-dark">
                                                    {{ $opt->name }}
                                                </p>
                                                <p class="text-dark text-opacity-60 font-medium text-[15px] mt-1 mb-4">
                                                    {{ $opt->description }}
                                                </p>
                                                <p class="text-primary font-semibold text-[19px]">
                                                    £{{ \App\Product::getPrice($opt->id, App\GarageReservation::getCurrentCart()->attributes['engineSize'])['price'] }}
                                                </p>
                                                @if(\App\Product::getPrice($opt->id, App\GarageReservation::getCurrentCart()->attributes['engineSize'])['rrp'] > 0.00)
                                                    <span class="ch-finance-example__figure__price fs-18"
                                                          data-cy="selectServicePrice0"
                                                          style="text-decoration: line-through;text-decoration-thickness: 2px;text-decoration-color: #dc2c34;font-size: 13px;">£{{ \App\Product::getPrice($opt->id, App\GarageReservation::getCurrentCart()->attributes['engineSize'])['rrp'] }}</span>
                                                @endif
                                            </div>
                                        @endcomponent
                                    @endforeach
                                </div>
{{--                                <p class="mt-5 text-sm text-[#FF5353] font-medium">--}}
{{--                                    Choose the best option for your vehicle--}}
{{--                                </p>--}}
                            </div>
                        </div>

                        @include('book.partials.booking-summary-bar', [
                            'continueText' => 'Great, next you can choose your service branch',
                            'continueURL' => '#',
                            'continueButton' => 'Continue',
                            'continueOnClick' => "submitServiceForm();",
                        ])
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection
