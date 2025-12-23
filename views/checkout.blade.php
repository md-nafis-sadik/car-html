@extends('layouts.app')

@section('head-info')
    <title>Checkout - {{ config('app.name') }}</title>
    <meta name="description" content="Login at {{ config('app.name') }} website." />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('/images/homepage-header.jpeg') }}" />
    <meta property="og:title" content="Checkout - {{ config('app.name') }}" />
    <meta property="og:description" content="Finalise your booking and checkout at {{ config('app.name') }}" />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />

    <!-- Stripe -->
    <script src="https://js.stripe.com/v3/"></script>
@endsection

@section('main')
    <header class="page-header !h-[50dvh]">
        <img src="{{ $car->main_image?->getUrl('car-detail') }}" class="w-full h-full" alt="">

        @component('components.header-content')
            <p class="text-sm text-white md:text-xl md:leading-[30px] font-light" data-aos="fade-up" data-aos-delay="700">
                {{ $car->type->name }}
            </p>
            <h1 class="font-epilogue font-black text-5xl lg:text-[72px] text-white mt-4" data-aos="fade-up" data-aos-delay="500">
                {{ $car->name }}
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
    <section class="bg-white w-full lg:min-h-[calc(100vh-150px)] h-full mt-10">
        <div class="max-w-screen-2xl px-4 py-10 mx-auto md:px-10" data-aos="fade-up">
            <div class="flex flex-col gap-4 mb-7">
                <h1 class="text-xl font-bold sm:text-3xl font-epilogue text-dark">
                    Please review and confirm your booking
                </h1>
            </div>

            @php
                $cartItem = $cartItems->first();
            @endphp
            <div class="flex flex-col gap-5 md:grid md:grid-cols-12">
                <div class="md:col-span-7 lg:col-span-8">
                    <div class="bg-white rounded-[15px] border border-dark border-opacity-10 overflow-hidden">
                        <ul>
                            <li
                                    class="flex items-start justify-between gap-3 p-4 border-b border-b-dark border-opacity-10 last:border-b-0">
                                <div class="flex flex-col gap-1">
                                    <p class="text-xs sm:text-base text-dark text-opacity-60">Your vehicle</p>
                                    <div class="flex justify-between items-center">
                                        <p class="text-lg font-semibold uppercase text-dark">
                                            {{ $cartItem->name }}
                                        </p>
{{--                                        <p class="text-lg font-semibold uppercase text-dark">--}}
{{--                                             £{{ number_format($cartItem->attributes['original_price'], 2, '.', ',') }}--}}
{{--                                        </p>--}}
                                    </div>

                                </div>
{{--                                <button type="button" title="Edit booking data">--}}
{{--                                    <img src="{{ asset('assets/svgs/pencil-edit.svg') }}"--}}
{{--                                         class="w-6 h-6 transition-all hover:invert" alt="">--}}
{{--                                </button>--}}
                            </li>
                            <li
                                    class="flex flex-wrap gap-4 p-4 border-b md:gap-10 border-b-dark border-opacity-10 last:border-b-0">
                                <div class="flex flex-col gap-1">
                                    <p class="text-xs sm:text-base text-dark text-opacity-60">Pick Up</p>
                                    <p class="text-lg font-semibold text-dark">
                                        {{ $cartItem->associatedModel->location->name }}
                                    </p>
                                    <p class="text-base font-normal text-dark">
                                        {{ $cartItem->attributes['date_start'] }} at {{ $cartItem->attributes['pickup_time'] }}
                                    </p>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <p class="text-xs sm:text-base text-dark text-opacity-60">Dropoff</p>
                                    <p class="text-lg font-semibold text-dark">
                                        {{ $cartItem->associatedModel->location->name }}
                                    </p>
                                    <p class="text-base font-normal text-dark">
                                        {{ $cartItem->attributes['date_end'] }} at {{ $cartItem->attributes['pickup_time'] }}
                                    </p>
                                </div>
                            </li>
                            <li
                                    class="flex flex-col gap-1 p-4 border-b border-b-dark border-opacity-10 last:border-b-0">
                                <p class="text-xs sm:text-base text-dark text-opacity-60">Hire Duration</p>
                                <p class="text-lg font-semibold text-dark">
                                    {{ $cartItem->attributes['hire_days'] }} Days
                                </p>
                            </li>
{{--                            <li--}}
{{--                                    class="flex flex-wrap gap-4 p-4 border-b md:gap-10 border-b-dark border-opacity-10 last:border-b-0">--}}
{{--                                <div class="flex flex-col gap-1">--}}
{{--                                    <p class="text-xs sm:text-base text-dark text-opacity-60">When and where</p>--}}
{{--                                    <p class="text-lg font-semibold text-dark">--}}
{{--                                        {{ $data->service_location }}--}}
{{--                                    </p>--}}
{{--                                    <p class="text-base font-normal text-dark">--}}
{{--                                        {{ $data->service_date }}--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                                <div class="flex flex-col gap-1">--}}
{{--                                    <p class="text-xs sm:text-base text-dark text-opacity-60">Remember to bring</p>--}}
{{--                                    <p class="inline-flex items-center gap-2 text-base font-normal text-dark">--}}
{{--                                        <img src="{{ asset('assets/svgs/blue-check-square.svg') }}" class="w-4 h-4"--}}
{{--                                             alt="">--}}
{{--                                        Service book--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </li>--}}
                            @if($cartItem->attributes['discount_value']  > 1)
                            <li
                                    class="flex flex-col gap-1 p-4 border-b border-b-dark border-opacity-10 last:border-b-0">
                                <p class="text-xs sm:text-base text-dark text-opacity-60">Auto Savings (Multi Day Hire)</p>
                                <p class="text-lg font-semibold text-primary">
                                    -£{{  number_format($cartItem->attributes['discount_value'], 2, '.', ',') }}
                                </p>
                            </li>
                            @endif
                            @if($cartItem->attributes['chauffeur_included'] == 'true')
                                <li
                                    class="flex flex-col gap-1 p-4 border-b border-b-dark border-opacity-10 last:border-b-0">
                                <p class="text-xs sm:text-base text-dark text-opacity-60">Chauffeur</p>
                                <p class="text-lg font-semibold text-primary">
                                    +£{{ number_format($cartItem->attributes['chauffeur_price'], 2, '.', ',')}}
                                </p>
                            </li>
                            @endif
                            @if($cartItem->attributes['refundable_deposit'] > 1 && !$cartItem->attributes['chauffeur_included'])
                                <li
                                    class="flex flex-col gap-1 p-4 border-b border-b-dark border-opacity-10 last:border-b-0">
                                <p class="text-xs sm:text-base text-dark text-opacity-60">Refundable Deposit</p>
                                <p class="text-lg font-semibold text-primary">
                                    @if($cartItem->attributes['require_deposit_upfront'])
                                        <p><span>{{ $cartItem->attributes['refundable_deposit'] }} Payable upfront</span></p>
                                    @else
                                        <p><span>{{ $cartItem->attributes['refundable_deposit'] }} Will be payable in branch</span></p>
                                    @endif
                                </p>
                            </li>
                            @endif

                            @if(!$coupon)
                                <li class="flex flex-col gap-1 p-4 border-b border-b-dark border-opacity-10 last:border-b-0">
                                    <form method="GET"
                                          url="{{ request()->url() }}?{{ http_build_query(request()->all())  }}">
                                        @csrf
                                        @method('POST')
                                        <p class="text-xs sm:text-base text-dark text-opacity-60">Coupon</p>
                                        <div class="flex flex-col gap-2 mt-2 lg:flex-row">
                                            <x-input-field type="text" name="couponCode" id="couponCode" placeholder="Enter code here" value="{{ old('couponCode') ?? request()->get('couponCode') }}"
                                                           class-name="flex-grow !bg-[#F3F4F6]" required />
                                            <button type="submit" class="btn btn-primary">Redeem Code</button>
                                        </div>
                                    </form>


                                    <div>
                                        @foreach (['danger' => 'red', 'warning' => 'orange', 'success' => 'primary', 'info' => 'blue'] as $type => $color)
                                            @if(Session::has('alert-' . $type))
                                                <div class="sl:px-1 mt-4">
                                                    <div class="bg-white border-{{ $color }}-500 text-{{ $color }}-900 border-l-4 p-4 rounded">
                                                        <p class="font-bold mb-0">{!! Session::get('alert-' . $type) !!}</p>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </li>
                            @else
                                <form method="GET"
                                      url="{{ request()->url() }}?{{ http_build_query(request()->all())  }}">
                                    @csrf
                                    @method('POST')
                                    <p class="text-xs sm:text-base text-dark text-opacity-60">Coupon</p>
                                    <div class="flex flex-col gap-2 mt-2 lg:flex-row">
                                        <input type="text" id="action" name="action"
                                               class="btn form-control hidden" value="removePromoCode"
                                               hidden>
                                        <x-input-field type="text" name="couponCode" id="couponCode" placeholder="Enter code here" value="{{  $coupon->code }}"
                                                       class-name="flex-grow !bg-[#F3F4F6]" disabled />    (-£{{ number_format(floatval($coupon->value), 2) }})
                                        <button type="submit" class="btn btn-primary">Remove Code</button>
                                    </div>
                                </form>
                            @endif
                            <li
                                    class="flex flex-col gap-1 p-4 border-b border-b-dark border-opacity-10 last:border-b-0">
                                <div class="flex items-center justify-between gap-5">
                                    <div>
                                        <p class="mb-1 text-base font-semibold sm:text-2xl text-dark">Total Due</p>
                                        <p class="text-sm font-medium text-dark text-opacity-60">Incl. VAT</p>
                                    </div>
                                    <p class="font-semibold text-[26px] text-primary">
                                        £{{ number_format($chargeTotal, 2, '.', ',') }}
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    @foreach (['danger' => 'red', 'warning' => 'orange', 'success' => 'primary', 'info' => 'blue'] as $type => $color)
                        @if(Session::has('alert-' . $type))
                            <div class="sl:px-1 mt-4">
                                <div class="bg-white border-{{ $color }}-500 text-{{ $color }}-900 border-l-4 p-4 rounded">
                                    <p class="font-bold mb-0">{!! Session::get('alert-' . $type) !!}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>


                @if($cartItem->attributes['chauffeur_included'] !== true)
{{--                    Validate licence --}}

                    @if($licenceValidated)

{{--    Licence validated--}}
                        <div class="md:col-span-5 lg:col-span-4">
                            <form id="booking-form" name="booking-form" method="POST" action="{{ route('hire.checkout.post') }}"
                                  class="bg-white rounded-[15px] border border-dark border-opacity-10 overflow-hidden">
                                @csrf

                                <div class="flex flex-col gap-4 p-4">
                                    <div class="border-b border-opacity-10">
                                        <p class="text-xs sm:text-base lg:text-lg text-dark text-opacity-60">
                                            Please make a payment
                                        </p>
                                        <p class="pb-4 block text-xs font-medium text-dark capitalize text-opacity-80 hover:text-opacity-100 w-max">Not you? Click here to <a href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-primary">switch accounts</a>.</p>
                                    </div>
                                    <div class="items-center justify-between w-full"
                                         id="inputCreditCard">
                                        {{--                                    <div class="relative col-span-8">--}}
                                        {{--                                        <x-input-field type="number" name="card_number" placeholder="Card number"--}}
                                        {{--                                                       class-name="!bg-[#f3f4f6] !pl-10 !p-3 !rounded-lg !text-xs sm:!text-sm w-full" />--}}
                                        {{--                                        <img src="{{ asset('assets/svgs/credit-card.svg') }}"--}}
                                        {{--                                             class="absolute w-5 h-5 -translate-y-1/2 top-1/2 left-3 brightness-50"--}}
                                        {{--                                             alt="">--}}
                                        {{--                                    </div>--}}
                                        {{--                                    <div class="col-span-4">--}}
                                        {{--                                        <x-input-field type="number" name="card_expiry_date" placeholder="MM/YY"--}}
                                        {{--                                                       class-name="!bg-[#f3f4f6] !p-3 !rounded-lg !text-xs sm:!text-sm w-full" />--}}
                                        {{--                                    </div>--}}

                                        <div id="card-element">
                                            <!-- A Stripe Element will be inserted here. -->
                                        </div>

                                        <!-- Used to display form errors. -->
                                        <div id="card-errors" role="alert" class="ch-alert ch-alert--danger ch-fs--2 ch-mt--4"><p></p></div>
                                    </div>

                                    <div class="py-4 border-t border-t-dark border-opacity-10">
                                        <p class="text-xs text-dark text-opacity-70">By submitting your reservation via our website, you agree with our <a href="{{ config('app.url') }}/downloads/Autofusion-Limited-Hire-Car-Terms-And-Conditions.pdf" target="_blank" class="text-primary">terms & conditions</a>. Please do not close this page once payment is processing, until your booking is complete.</p>
                                    </div>

                                    @foreach (['danger' => 'red', 'warning' => 'orange', 'success' => 'primary', 'info' => 'blue'] as $type => $color)
                                        @if(Session::has('alert-driving-licence-' . $type))
                                            <div class="sl:px-1 mt-4">
                                                <div class="bg-white border-{{ $color }}-500 text-{{ $color }}-900 border-l-4 p-4 rounded">
                                                    <p class="font-bold mb-0">{!! Session::get('alert-driving-licence-' . $type) !!}</p>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                    <button type="submit" class="btn btn-primary"  id="payment-button" name="payment-button">
                                        Confirm & Pay Reservation
                                    </button>
                                </div>
                            </form>
                        </div>


                    @else
{{--    Licence not validated --}}
                        <div class="md:col-span-5 lg:col-span-4">
                            <form id="license-validation-form" method="GET" action="{{ route('hire.checkout') }}"
                                    class="bg-white rounded-[15px] border border-dark border-opacity-10 overflow-hidden">
                                @csrf

                                <div class="flex flex-col gap-4 p-4">
                                    <div class="border-b border-opacity-10">
                                        <p class="text-xs sm:text-base lg:text-lg text-dark text-opacity-60">
                                            {{ auth()->user()->title_last_name }}, let's confirm your details
                                        </p>
                                        <p class="pb-4 block text-xs font-medium text-dark capitalize text-opacity-80 hover:text-opacity-100 w-max">Not you? Click here to <a href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-primary">switch accounts</a>.</p>
                                    </div>
                                    <div class="grid items-center justify-between w-full grid-cols-12 gap-2"
                                         id="inputCreditCard">
                                        <div class="relative col-span-8">

                                            <x-input-field type="text" placeholder="Licence Number"
                                                           class-name="!bg-[#f3f4f6]  !p-3 !rounded-lg !text-xs sm:!text-sm w-full" oninput="this.value = this.value.toUpperCase()"   value="{{ auth()->user()->license_number }}" id="license_number" name="license_number" maxlength="16" required/>
                                            @error('license_number')<small class="text-xs font-medium sm:text-sm text-danger" >{{ $message }}</small>@enderror

                                        </div>
                                        <div class="col-span-4">
                                            <x-input-field type="text" id="dvla_check_code" name="dvla_check_code" placeholder="DVLA Code"
                                                           class-name="!bg-[#f3f4f6] !p-3 !rounded-lg !text-xs sm:!text-sm w-full" required value="{{ old('dvla_check_code') }}"/>
                                            @error('dvla_check_code')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                                        </div>
                                    </div>

                                    <div class="py-4 border-t border-t-dark border-opacity-10">
                                        <p class="text-xs text-dark text-opacity-70">
                                        Please copy & paste your DVLA check code here. You can generate a DVLA check code <a target="_blank" href="https://www.viewdrivingrecord.service.gov.uk/driving-record/licence-number">here</a>.
                                        <span class="font-bold"><br></br>Note:</span> If you hold a non-GB licence, please call us to make a booking.</p>
                                    </div>

                                    @foreach (['danger' => 'red', 'warning' => 'orange', 'success' => 'primary', 'info' => 'primary'] as $type => $color)
                                        @if(Session::has('alert-driving-licence-' . $type))
                                            <div class="sl:px-1 mt-4">
                                                <div class="bg-white border-{{ $color }}-500 text-{{ $color }}-900 border-l-4 p-4 rounded">
                                                    <p class="font-bold mb-0">{!! Session::get('alert-driving-licence-' . $type) !!}</p>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                    <input type="hidden" id="action" name="action" value="validateLicence">

                                    <button type="submit" class="btn btn-primary">
                                        Validate Licence
                                    </button>
                                </div>
                            </form>
                        </div>
                    @endif


                @else
                    {{--    Chauffeur, show payment form--}}
                    <div class="md:col-span-5 lg:col-span-4">
                        <form id="booking-form" name="booking-form" method="POST" action="{{ route('hire.checkout.post') }}"
                              class="bg-white rounded-[15px] border border-dark border-opacity-10 overflow-hidden">
                            @csrf

                            <div class="flex flex-col gap-4 p-4">
                                <div class="border-b border-opacity-10">
                                    <p class="text-xs sm:text-base lg:text-lg text-dark text-opacity-60">
                                        Please make a payment
                                    </p>
                                    <p class="pb-4 block text-xs font-medium text-dark capitalize text-opacity-80 hover:text-opacity-100 w-max">Not you? Click here to <a href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-primary">switch accounts</a>.</p>
                                </div>
                                <div class="items-center justify-between w-full"
                                     id="inputCreditCard">
                                    {{--                                    <div class="relative col-span-8">--}}
                                    {{--                                        <x-input-field type="number" name="card_number" placeholder="Card number"--}}
                                    {{--                                                       class-name="!bg-[#f3f4f6] !pl-10 !p-3 !rounded-lg !text-xs sm:!text-sm w-full" />--}}
                                    {{--                                        <img src="{{ asset('assets/svgs/credit-card.svg') }}"--}}
                                    {{--                                             class="absolute w-5 h-5 -translate-y-1/2 top-1/2 left-3 brightness-50"--}}
                                    {{--                                             alt="">--}}
                                    {{--                                    </div>--}}
                                    {{--                                    <div class="col-span-4">--}}
                                    {{--                                        <x-input-field type="number" name="card_expiry_date" placeholder="MM/YY"--}}
                                    {{--                                                       class-name="!bg-[#f3f4f6] !p-3 !rounded-lg !text-xs sm:!text-sm w-full" />--}}
                                    {{--                                    </div>--}}

                                    <div id="card-element">
                                        <!-- A Stripe Element will be inserted here. -->
                                    </div>

                                    <!-- Used to display form errors. -->
                                    <div id="card-errors" role="alert" class="ch-alert ch-alert--danger ch-fs--2 ch-mt--4"><p></p></div>
                                </div>

                                <div class="py-4 border-t border-t-dark border-opacity-10">
                                    <p class="text-xs text-dark text-opacity-70">By submitting your reservation via our website, you agree with our <a href="{{ config('app.url') }}/downloads/Autofusion-Limited-Hire-Car-Terms-And-Conditions.pdf" target="_blank" class="text-primary">terms & conditions</a>. Please do not close this page once payment is processing, until your booking is complete.</p>
                                </div>

                                @foreach (['danger' => 'red', 'warning' => 'orange', 'success' => 'primary', 'info' => 'blue'] as $type => $color)
                                    @if(Session::has('alert-driving-licence-' . $type))
                                        <div class="sl:px-1 mt-4">
                                            <div class="bg-white border-{{ $color }}-500 text-{{ $color }}-900 border-l-4 p-4 rounded">
                                                <p class="font-bold mb-0">{!! Session::get('alert-driving-licence-' . $type) !!}</p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                <button type="submit" class="btn btn-primary"  id="payment-button" name="payment-button">
                                    Confirm & Pay Reservation
                                </button>
                            </div>
                        </form>
                    </div>



                @endif

{{--                <div class="md:col-span-5 lg:col-span-4">--}}
{{--                    <div--}}
{{--                          class="bg-white rounded-[15px] border border-dark border-opacity-10 overflow-hidden">--}}
{{--                        <div class="flex flex-col gap-4 p-4">--}}
{{--                            <div class="border-b border-opacity-10">--}}
{{--                                <p class="text-xs sm:text-base lg:text-lg text-dark text-opacity-60">--}}
{{--                                    {{ auth()->user()->title_last_name }}, let's confirm your details--}}
{{--                                </p>--}}
{{--                                <p class="pb-4 block text-xs font-medium text-dark capitalize text-opacity-80 hover:text-opacity-100 w-max">Not you? Click here to <a href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-primary">switch accounts</a>.</p>--}}
{{--                            </div>--}}
{{--                            <div class="grid items-center justify-between w-full grid-cols-12 gap-2"--}}
{{--                                 id="inputCreditCard">--}}
{{--                                <div class="relative col-span-8">--}}
{{--                                    <x-input-field type="number" name="card_number" placeholder="Card number"--}}
{{--                                                   class-name="!bg-[#f3f4f6] !pl-10 !p-3 !rounded-lg !text-xs sm:!text-sm w-full" />--}}
{{--                                    <img src="{{ asset('assets/svgs/credit-card.svg') }}"--}}
{{--                                         class="absolute w-5 h-5 -translate-y-1/2 top-1/2 left-3 brightness-50"--}}
{{--                                         alt="">--}}
{{--                                </div>--}}
{{--                                <div class="col-span-4">--}}
{{--                                    <x-input-field type="number" name="card_expiry_date" placeholder="MM/YY"--}}
{{--                                                   class-name="!bg-[#f3f4f6] !p-3 !rounded-lg !text-xs sm:!text-sm w-full" />--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="py-4 border-t border-t-dark border-opacity-10">--}}
{{--                                <p class="text-xs text-dark text-opacity-70">--}}
{{--                                    I accept the terms and conditions and agree to waive any cancellation right once--}}
{{--                                    work has been started on my vehicle.--}}
{{--                                </p>--}}
{{--                                <div class="p-2 bg-[#f3f4f6] rounded-lg inline-flex gap-2 items-center w-full my-3">--}}
{{--                                    <x-input-checkbox name="accept_terms" />--}}
{{--                                    <label for="accept_terms" class="text-sm font-medium text-dark">I accept and--}}
{{--                                        aggree</label>--}}
{{--                                </div>--}}
{{--                                <p class="text-xs text-dark text-opacity-70">--}}
{{--                                    The personal information you provide to us at this stage will only be used for the--}}
{{--                                    purposes of your booking. If you would like to find out more on how we use your--}}
{{--                                    info, please see our privacy policy. This can be found on <a href="#"--}}
{{--                                                                                                 class="font-medium text-blue-500 underline transition-all hover:text-blue-400 underline-offset-2">here</a>.--}}
{{--                                </p>--}}
{{--                            </div>--}}

{{--                            <button type="button" class="btn btn-primary">--}}
{{--                                Confirm Booking--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}





            </div>
        </div>
    </section>


@endsection
@push('js')

    <script type='text/javascript'>
        var stripe = Stripe('{{ $stripeKey ?? config('services.stripe.hire_key') }}');

        // Create an instance of Elements.
        var elements = stripe.elements();

        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    // color: '#aab7c4'
                    color: '#8c8c8c'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {style: style,  hidePostalCode : true});

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');


        // Handle real-time validation errors from the card Element.
        card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission.

        var form = document.getElementById('booking-form');
        form.addEventListener('submit', function(ev) {
            var payment_button = document.getElementById('payment-button');
            payment_button.disabled = true;
            payment_button.innerHTML = "<i id=\"search-button\" class=\"fa fa-spinner fa-spin\" aria-hidden=\"true\"></i> Processing Payment";

            ev.preventDefault();
            stripe.confirmCardPayment("{{ $intent->client_secret }}", {
                payment_method: {
                    card: card,
                    billing_details: {
                        name: "{{ request()->user()->name }}",
                        email: "{{ request()->user()->email }}",
                        phone: "{{ request()->user()->phone }}",
                        address: {
                            line1: "{{ request()->user()->address_line_1 }}",
                            city: "{{ request()->user()->address_town }}",
                            state: "{{ request()->user()->address_county }}",
                            postal_code: "{{ request()->user()->address_postcode }}",
                            country: "{{ request()->user()->address_country }}",
                        },
                    }
                },
                receipt_email: "{{ request()->user()->email }}",
            }).then(function(result) {
                if (result.error) {
                    console.log(result.error.message);
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;

                    payment_button.disabled = false;
                    payment_button.innerHTML = "Confirm & Pay Reservation";
                } else {
                    // The payment has been processed!
                    if (result.paymentIntent.status === 'succeeded') {
                        payment_button.disabled = true;
                        payment_button.innerHTML = "<i id=\"search-button\" class=\"fa fa-spinner fa-spin\" aria-hidden=\"true\"></i> Completing Booking";
                        console.log(result.paymentIntent);

                        var hiddenInput = document.createElement('input');
                        hiddenInput.setAttribute('type', 'hidden');
                        hiddenInput.setAttribute('name', 'chargeToken');
                        hiddenInput.setAttribute('value', result.paymentIntent.id);
                        form.appendChild(hiddenInput);

                        form.submit();
                    }
                }
            });
        });
    </script>
@endpush
