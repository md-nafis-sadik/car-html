@extends('layouts.garage-bookings', [
    'stepper_layout' => true,
])


@section('head-info')
    <meta name="description" content="Book MOT & service for your vehicle."/>
    <title>Booking Confirmation - {{ config('app.name') }}</title>
    <link href="{{ asset('css/book/main.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/chassis/chassis.js') }}"></script>
@endsection

@section('main')
    <div class="flex flex-col items-center justify-center mt-16 sm:mt-7">
        @include('components.horizontal-stepper', [
            'name' => 'Booking Confirmation',
            'total' => 6,
            'currentStep' => 6,
        ])

        <section class="bg-white w-full lg:min-h-[calc(100vh-150px)] h-full mt-10">
            <div class="max-w-screen-md px-4 py-10 mx-auto sm:px-10" data-aos="fade-up">
                <div class="flex flex-col gap-4 mb-7">
                    <h1 class="text-xl font-bold sm:text-3xl font-epilogue text-dark">We've got your booking</h1>

                    @if(!$cart->attributes['newUser'])
                        <p class="text-sm font-normal sm:text-base text-dark">
                            We've sent a confirmation email to <span class="font-bold">{{ auth()->user()->email }}</span> with all the details about your booking.  You can now view the booking details <a href="{{ route('account.reservations') }}" class="underline transition-all underline-offset-4 hover:text-primary">here</a>.
                        </p>
                    @else

                        <p class="text-sm font-normal sm:text-base text-dark">
                            We've sent a confirmation email to <span class="font-bold">{{ $cart->attributes['newUser']['email'] }}</span> with all the details about your booking.
                        </p>
                        <a href="/set-password" class="btn btn-primary w-fit">
                            Set Password
                        </a>
                    @endif
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
                                {{ json_decode($cart->attributes['vehicleDetails'])->DataItems->ClassificationDetails->Dvla->Make }}  {{ json_decode($cart->attributes['vehicleDetails'])->DataItems->ClassificationDetails->Dvla->Model }}
                            </p>
                            <div class="px-2 py-1 text-sm font-bold text-center bg-yellow-300 rounded text-dark w-max">
                                {{ json_decode($cart->attributes['vehicleDetails'])->DataItems->VehicleRegistration->Vrm }}
                            </div>
                        </li>
                        @if($cart->attributes['serviceRequired'] || $cart->attributes['motRequired'] ||$cart->attributes['trackerSelected'] || $cart->attributes['wheelAlignmentSelected'] || $cart->attributes['diagnosticSelected'])

                        <li class="flex flex-col gap-1 p-4 border-b border-b-dark border-opacity-10 last:border-b-0">
                            <p class="text-xs sm:text-base text-dark text-opacity-60">Description of work</p>
                            <div class="flex flex-wrap items-center gap-3">
                                @php
                                    $cardAttributes = $cart->attributes;
                                    $selectedItems = [];

                                    if ($cardAttributes['diagnosticSelected']) {
                                        $selectedItems[] = 'diagnosticSelected';
                                    }
                                    if ($cardAttributes['wheelAlignmentSelected']) {
                                        $selectedItems[] = 'wheelAlignmentSelected';
                                    }
                                    if ($cardAttributes['trackerSelected']) {
                                        $selectedItems[] = 'trackerSelected';
                                    }
                                    if ($cardAttributes['trackerSubscriptionSelected']) {
                                        $selectedItems[] = 'trackerSubscriptionSelected';
                                    }
                                    if ($cardAttributes['immobilisationSelected']) {
                                        $selectedItems[] = 'immobilisationSelected';
                                    }
                                    if ($cardAttributes['serviceSelected']) {
                                        $selectedItems[] = 'serviceSelected';
                                    }
                                    if ($cardAttributes['motSelected']) {
                                        $selectedItems[] = 'motSelected';
                                    }
                                @endphp

                                @foreach ($selectedItems as $index => $item)
                                    <p class="text-base font-semibold sm:text-lg text-dark">
                                        @if($item == 'immobilisationSelected')
                                            + Immobiliser
                                        @else
                                            {{ App\Product::getName($cardAttributes[$item]) }}
                                        @endif
                                    </p>

                                    @if ($index < count($selectedItems) - 1)
                                        <span class="text-opacity-30 text-dark">|</span>
                                    @endif
                                @endforeach
                            </div>
                        </li>
                        @endif
                        @if($cart->attributes['vehicleMileage'])
                            <li
                                    class="flex flex-col gap-1 p-4 border-b border-b-dark border-opacity-10 last:border-b-0">
                                <p class="text-xs sm:text-base text-dark text-opacity-60">Mileage</p>
                                <p class="text-lg font-semibold text-dark">
                                    {{ $cart->attributes['vehicleMileage'] }}
                                </p>
                            </li>
                        @endif
                        <li class="flex flex-wrap gap-4 p-4 border-b md:gap-10 border-b-dark border-opacity-10 last:border-b-0">
                            <div class="flex flex-col gap-1">
                                <p class="text-xs sm:text-base text-dark text-opacity-60">When and where</p>
                                @if($cart->attributes['branchSelected'])
                                    <p class="text-lg font-semibold text-dark">
                                        @if($cart->attributes['branchSelected'] == 1)
                                            Autofusion Clydebank
                                        @endif
                                    </p
                                @endif
                                @if($cart->attributes['dropoffDate'])
                                    <p class="text-base font-normal text-dark">
                                        {{ Carbon\Carbon::parse($cart->attributes['dropoffDate'])->format('jS M Y')  }}
                                    </p>
                                @endif
                            </div>
                            <div class="flex flex-col gap-1">
                                <p class="text-xs sm:text-base text-dark text-opacity-60">Remember to bring</p>
                                <p class="inline-flex items-center gap-2 text-base font-normal text-dark">
                                    <img src="{{ asset('assets/svgs/blue-check-square.svg') }}" class="w-4 h-4" alt="">
                                    Service book
                                </p>
                                <p class="inline-flex items-center gap-2 text-base font-normal text-dark">
                                    <img src="{{ asset('assets/svgs/blue-check-square.svg') }}" class="w-4 h-4" alt="">
                                    Locking wheel nut
                                </p>
                            </div>
                        </li>
                        @if($cart->attributes['dropoffTime'])
                        <li class="flex flex-col gap-1 p-4 border-b border-b-dark border-opacity-10 last:border-b-0">
                            <p class="text-xs sm:text-base text-dark text-opacity-60">Drop-off Time</p>
                            <p class="text-lg font-semibold text-dark">
                                {{ $cart->attributes['dropoffTime'] }}
                            </p>
                        </li>
                        @endif
                        @if($cart->coupon)
                        <li class="flex flex-col gap-1 p-4 border-b border-b-dark border-opacity-10 last:border-b-0">
                            <p class="text-xs sm:text-base text-dark text-opacity-60">Discount</p>
                            <p class="text-lg font-semibold text-primary">
                                {{ $cart->coupon->code }} (-£{{ number_format(floatval($cart->coupon->value), 2) }})
                            </p>
                        </li>
                        @endif
                    </ul>
                </div>

                <div class="flex flex-col gap-2 my-7">
                    <p class="text-sm font-semibold sm:text-base text-dark">
                        Need to hire a car for your booking?
                        <a href="{{ $hireLink }}" class="underline transition-all underline-offset-4 hover:text-primary">
                            See hire cars
                        </a>
                    </p>
                </div>
            </div>
        </section>
    </div>
@endsection
