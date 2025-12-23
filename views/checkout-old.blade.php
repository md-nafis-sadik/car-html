@extends('layouts.frontend')
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

    <link href="{{ asset('css/chassis/chassis.css') }}" rel="stylesheet" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" />

    <script src="{{ asset('js/chassis/chassis.js') }}"></script>

    <!-- Stripe -->
    <script src="https://js.stripe.com/v3/"></script>
@endsection
@section('body')
    <body>
    @include('partials.header')
    <header class="subnav ch-bg--white" role="sub-header">
        <div class="ch-container">
            <div class="ch-row">
                <div class="subnav__content ch-display--flex">
                    <div class="subnav__header">
                        <div class="subnav__brand">
                            <h1>Complete Your Booking</h1>
                        </div>
                        <div class="subnav__toggle ch-display--flex md:ch-display--none">
                            <a href="#" class="subnav__button ch-btn ch-btn--sm">Actions</a>
                        </div>
                    </div>
                    <div class="subnav__links ch-display--none md:ch-display--block">
                        <ul class="md:ch-display--flex ch-bt--1 ch-bb--1 ch-bc--grey-3 md:ch-ba--0">
                                <li class="md:ch-mh--2 ch-ph--2 ch-bb--1 ch-bc--grey-2 md:ch-bb--0">
                                    <a href="{{ route('account') }}" title="Log in" class="navlink ch-fs--3 ch-text-decoration--none ch-color--ac-black">Account</a>
                                </li>


                            {{--                            <li class="md:ch-mh--2 ch-ph--2 ch-bb--1 ch-bc--grey-2 md:ch-bb--0">--}}
                            {{--                                <a href="{{ route('login') }}" title="Log in" class="navlink ch-fs--3 ch-text-decoration--none ch-color--ac-black">Log in</a>--}}
                            {{--                            </li>--}}
{{--                            <li class="md:ch-mh--2 ch-ph--2 ch-bb--1 ch-bc--grey-2 md:ch-bb--0">--}}
{{--                                <a href="{{ route('logout') }}"  onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();" class="navlink ch-fs--3 ch-text-decoration--none ch-color--ac-black">{{ __('Sign out') }}</a>--}}
{{--                            </li>--}}

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <a class="ch-skip" href="#main">Skip to main content</a>
    <main id="main">
        <div id="main-section" class="ch-bg--white">
            <div id="careers-register" class="ch-pb--10">
                <section>
                    <div class="ch-container">
                        <div class="ch-row sl:ch-ph--1 ch-mt--4">
                            <ul class="ch-breadcrumb">
                                @foreach($cartItems as $cartItem)
                                <li class="ch-breadcrumb__item"><a href="{{ route('hire.cars.car', ['slug' => $cartItem->associatedModel->slug ]) }}">{{ $cartItem->name }}</a></li>
                                @endforeach
                                <li class="ch-breadcrumb__item">Checkout</li>
                            </ul>
                        </div>

                        <div class="ch-row ch-mt--3">
                            <div class="sm:ch-col--6 md:ch-col--6 md:ch-col--offset-0">

                                <div id="order_review">
                                    <table class="ch-table ch-table--striped ch-width--12">
                                        <thead>
                                        <tr>
                                            <th class="product-name">Item</th>
                                            <th class="product-name">Price</th>
                                            <th class="product-total">Subtotal</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($cartItems as $cartItem)
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    {{--                                        {{ $cartItem }}--}}
                                                    {{--                                        <strong class="product-quantity">× {{ $cartItem->quantity }}</strong>--}}
                                                    <dl class="variation">
                                                        <!-- CustomerCar -->
                                                        <dt class="variation-PickUpDropOffLocation ch-text--bold">Vehicle:</dt>
                                                        <dd class="variation-PickUpDropOffLocation ch-text--left ch-ml--0"><p>{{ $cartItem->name }}</p>
                                                        </dd>

                                                        <dt class="variation-PickUpDropOffLocation ch-text--bold">Pick Up & Drop Off Location:</dt>
                                                        <dd class="variation-PickUpDropOffLocation ch-text--left ch-ml--0"><p>{{ $cartItem->associatedModel->location->name }}</p></dd>
{{--                                                        <dd class="variation-PickUpDropOffLocation ch-text--left ch-ml--0"><p>{{ $cartItem->associatedModel->location->address }} ({{ $cartItem->associatedModel->location->name }})</p></dd>--}}
                                                        <dt class="variation-PickupDateampTime ch-text--bold">Pickup Date &amp; Time:</dt>
                                                        <dd class="variation-PickupDateampTime ch-text--left ch-ml--0"><p>{{ $cartItem->attributes['date_start'] }} at {{ $cartItem->attributes['pickup_time'] }}</p>
                                                        </dd>
                                                        <dt class="variation-ReturnDateampTime ch-text--bold">Return Date &amp; Time:</dt>
                                                        <dd class="variation-PickupDateampTime ch-text--left ch-ml--0"><p>{{ $cartItem->attributes['date_end'] }} at {{ $cartItem->attributes['pickup_time'] }}</p>
                                                        </dd>
                                                        {{--                                                <dt class="variation-Inventory">Inventory:</dt>--}}
                                                        {{--                                                <dd class="variation-Inventory"><p>Rolls Royce Wraitth</p>--}}
                                                        {{--                                                </dd>--}}
                                                        <dt class="variation-TotalDays ch-text--bold">Hire Duration:</dt>
                                                        <dd class="variation-TotalDays ch-text--left ch-ml--0"><p>{{ $cartItem->attributes['hire_days'] }} Days</p>
                                                        </dd>



                                                    </dl>
                                                </td>
                                                <td class="product-name">
                                                    <span class="Price-amount amount"><span class="Price-currencySymbol">£</span>{{ number_format($cartItem->attributes['original_price'], 2, '.', ',') }}</span>
                                                </td>
                                                <td class="product-total">
                                                    <span class="Price-amount amount"><span class="Price-currencySymbol">£</span>{{ number_format($cartItem->attributes['original_price'], 2, '.', ',') }}</span>
                                                </td>
                                            </tr>

                                            <!-- Savings -->
                                            @if($cartItem->attributes['discount_value']  > 1)
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        <dl class="variation">
                                                            <dt class="variation-PickUpDropOffLocation ch-text--bold">Auto Savings (Multi Day Hire)</dt>
                                                        </dl>
                                                    </td>
                                                    <td class="product-name">
                                                        <span class="Price-amount amount"><span class="Price-currencySymbol">£</span>-{{  number_format($cartItem->attributes['discount_value'], 2, '.', ',') }}</span>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="Price-amount amount"><span class="Price-currencySymbol">£</span>{{ number_format($cartItem->attributes['original_price'] - $cartItem->attributes['discount_value'], 2, '.', ',') }}</span>
                                                    </td>
                                                </tr>
                                            @endif

                                            <!-- Chauffeur -->
                                            @if($cartItem->attributes['chauffeur_included'] == 'true')
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        <dl class="variation">
                                                            <!-- CustomerCar -->
                                                            <dt class="variation-PickUpDropOffLocation ch-text--bold">Chauffeur</dt>
                                                        </dl>
                                                    </td>
                                                    <td class="product-name">
                                                        <span class="Price-amount amount"><span class="Price-currencySymbol">£</span>{{ number_format($cartItem->attributes['chauffeur_price'], 2, '.', ',')}}</span>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="Price-amount amount"><span class="Price-currencySymbol">£</span>{{  number_format($cartItem->attributes['original_price'] - $cartItem->attributes['discount_value'] + $cartItem->attributes['chauffeur_price'], 2, '.', ',')}}</span>
                                                    </td>
                                                </tr>
                                            @endif



                                            <!-- Refundable Deposit -->
                                            @if($cartItem->attributes['refundable_deposit'] > 1 && !$cartItem->attributes['chauffeur_included'])
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        <dl class="variation">
                                                            <!-- CustomerCar -->
                                                            <dt class="variation-PickUpDropOffLocation ch-text--bold">Refundable Deposit</dt>
                                                            @if($cartItem->attributes['require_deposit_upfront'])
                                                                    <p><span>Payable upfront</span></p>
                                                            @else
                                                                    <p><span>Will be payable in branch</span></p>
                                                            @endif
                                                        </dl>
                                                    </td>
                                                    <td class="product-name">
                                                        <span class="Price-amount amount"><span class="Price-currencySymbol">£</span>{{ $cartItem->attributes['refundable_deposit'] }}</span>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="Price-amount amount"><span class="Price-currencySymbol">£</span>{{  number_format($cartItem->attributes['original_price'] - $cartItem->attributes['discount_value'] + $cartItem->attributes['chauffeur_price'] +  $cartItem->attributes['refundable_deposit'], 2, '.', ',') }}</span>
                                                    </td>
                                                </tr>
                                            @endif




                                            <!-- Coupon -->
                                            @if($coupon)
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        <dl class="variation">
                                                            <!-- CustomerCar -->
                                                            <dt class="variation-PickUpDropOffLocation ch-text--bold">Discount ({{ $coupon->code }} - £{{ $coupon->value }} OFF)</dt>
                                                        </dl>
                                                    </td>
                                                    <td class="product-name">
                                                        <span class="Price-amount amount"><span class="Price-currencySymbol">£</span>-{{ number_format($coupon->value, 2, '.', ',') }}</span>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="Price-amount amount"><span class="Price-currencySymbol">£</span>{{  number_format($cartItem->attributes['original_price'] - $cartItem->attributes['discount_value'] + $cartItem->attributes['chauffeur_price'] +  $cartItem->attributes['refundable_deposit'] - $coupon->value, 2, '.', ',') }}</span>
                                                    </td>
                                                </tr>
                                            @endif


                                            {{--                                    @if($cartItem->attributes['chauffeur_included'] == 'true')--}}
                                            {{--                                        <dt class="variation-TotalDays">Chauffeur:</dt>--}}
                                            {{--                                        <dd class="variation-TotalDays"><p>Included</p>--}}
                                            {{--                                        </dd>--}}
                                            {{--                                    @endif--}}

                                        @endforeach

                                        </tbody>
                                        <tfoot>

                                        {{--                                <tr class="cart-subtotal">--}}
                                        {{--                                    <th>Subtotal</th>--}}
                                        {{--                                    <td></td>--}}
                                        {{--                                    <td><span class="Price-amount amount"><span class="Price-currencySymbol">£</span>{{ $cartItem->attributes['total_price'] }}</span></td>--}}
                                        {{--                                </tr>--}}



                                        <tr class="order-total">
                                            <th class="ch-text--left">Total due today</th>
                                            <td></td>
                                            <td class="ch-text--bold"><span class="Price-amount amount"><span class="Price-currencySymbol">£</span>{{ number_format($chargeTotal, 2, '.', ',') }}</span></td>
                                        </tr>



                                        {{--                                <tr class="order-total">--}}
                                        {{--                                    <th>Total</th>--}}
                                        {{--                                    <td></td>--}}
                                        {{--                                    <td><strong><span class="Price-amount amount"><span class="Price-currencySymbol">£</span>{{ number_format($cartItem[0]->attributes['original_price'] - $cartItem->attributes['discount_value'] + $cartItem->attributes['chauffeur_price'] +  $cartItem->attributes['refundable_deposit'], 2, '.', ',')  }}</span></strong> </td>--}}
                                        {{--                                </tr>--}}



                                        </tfoot>
                                    </table>

                                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                        @if(Session::has('alert-' . $msg))
                                            <div class="ch-alert ch-alert--{{ $msg }} ch-mt--4">
                                                <p class="alert alert-{{ $msg }} ch-text--bold ch-mb--0">{!! Session::get('alert-' . $msg) !!}</p>
                                            </div>
                                        @endif
                                    @endforeach

                                    @if(!$coupon)
                                        <form method="GET" url="?{{ http_build_query(request()->all())  }}" class="ch-mt--4">
                                            <div class="ch-form__group ch-display--flex">
                                                <input type="text" id="couponCode" name="couponCode" class="ch-form__control" placeholder="Promo Code">
                                                <button type="submit" class="ch-btn ch-btn--primary ch-ml--10">Redeem</button>
                                            </div>
                                        </form>
                                    @else
                                        <div class="ch-mt--4">
                                            <form class="init" method="GET" url="?{{ http_build_query(request()->all())  }}">
                                                <input type="text" id="action" name="action" class="btn form-control hidden" value="removePromoCode" hidden>
                                                <button type="submit" class="ch-btn ch-btn--danger">Remove Promo Code</button>
                                            </form>
                                        </div>
                                    @endif

                                </div>
                            </div>

                            <div class="sm:ch-mt--0 sm:ch-display--block sm:ch-col--6 sm:ch-col--offset-3 md:ch-col--6 md:ch-col--offset-0 ch-fs--2">
                                <h3>Hi {{ auth()->user()->title_last_name }}, let's confirm your details</h3>
                                <p>Not you? Click here to <a href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">switch accounts</a>.</p>


                                <div role="form" lang="en-GB" dir="ltr">
                                    <div class="screen-reader-response" role="alert" aria-live="polite"></div>

                                        @if($cartItem->attributes['chauffeur_included'] !== 'true')
                                            <!-- Start License Fields -->
                                            <h5 class="ch-text--bold">Driving Licence</h5>

                                        @if($licenceValidated)
                                            <div class="ch-alert ch-alert--success ch-mb--4">
                                                <p class="alert alert-success ch-mb--0">Your licence has been successfully validated.</p>
                                            </div>

                                            <form id="booking-form" name="booking-form" method="POST" action="{{ route('hire.checkout.post') }}" class="init">
                                                @csrf

                                                <h5 class="ch-text--bold">Payment</h5>

                                                <div class="ch-mb--4 ch-mt--4">
                                                    <div id="card-element">
                                                        <!-- A Stripe Element will be inserted here. -->
                                                    </div>

                                                    <!-- Used to display form errors. -->
                                                    <div id="card-errors" role="alert"></div>
                                                </div>


                                                <p>By submitting your reservation via our website, you agree with our <a href="{{ config('app.url') }}/downloads/Autofusion-Limited-Hire-Car-Terms-And-Conditions.pdf" target="_blank">terms & conditions</a>. Please do not close this page once payment is processing, until your booking is complete.</p>

                                                <p>
                                                    <button type="submit" id="payment-button" name="payment-button" class="ch-btn ch-btn--success">
                                                        {{ __('Confirm & Pay Reservation') }}
                                                    </button>
                                                    <span class="ajax-loader"></span>
                                                </p>
                                                <div class="contact-response-output" role="alert" aria-hidden="true"></div>
                                            </form>
                                        @else
                                            <form method="GET" url="?{{ http_build_query(request()->all())  }}" class="ch-mt--4">


                                            <div class="ch-form__group @error('license_number') ch-form__group--error @enderror">
                                                <label class="ch-form__control-label ch-mt--2 ch-text--bold" for="license_number">{{ __('Licence Number') }} (required)</label>
                                                @error('license_number')<span class="ch-form__control-validation">{{ $message }}</span>@enderror
                                                <input type="text" oninput="this.value = this.value.toUpperCase()"  class="ch-form__control  @error('license_number') is-invalid @enderror" value="{{ auth()->user()->license_number }}" id="license_number" name="license_number" maxlength="16" required/>

                                            </div>

                                            <div class="ch-form__group @error('dvla_check_code') ch-form__group--error @enderror">
                                                <label class="ch-form__control-label ch-mt--2 ch-text--bold" for="license_expiry">{{ __('DVLA Check Code') }} (required)</label>
                                                @error('dvla_check_code')<span class="ch-form__control-validation">{{ $message }}</span>@enderror
                                                <input type="text" class="ch-form__control  @error('dvla_check_code') is-invalid @enderror" value="{{ old('dvla_check_code') }}" id="dvla_check_code" name="dvla_check_code" required placeholder="Enter your DVLA check code"/>
                                            </div>
                                            <p>Please copy & paste your DVLA check code here. You can generate a DVLA check code <a target="_blank" href="https://www.viewdrivingrecord.service.gov.uk/driving-record/licence-number">here</a>.</p>
                                                <p class="ch-mv--0 ch-pv--0"><b>Note:</b> If you hold a non-GB licence, please call us to make a booking.</p>

                                            <div class="ch-mb--4">
                                                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                                    @if(Session::has('alert-driving-licence-' . $msg))
                                                        <div class="ch-alert ch-alert--{{ $msg }} ch-mt--4">
                                                            <p class="alert alert-{{ $msg }} ch-text--bold ch-mb--0">{!! Session::get('alert-driving-licence-' . $msg) !!}</p>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                                <!-- End License Fields -->
                                                <div class="ch-form__group ch-display--flex">
                                                    <input type="hidden" id="action" name="action" value="validateLicence">
                                                    <button type="submit" class="ch-btn ch-btn--success">Validate Licence</button>
                                                </div>
                                            </form>
                                        @endif


                                    @else
                                        <form id="booking-form" name="booking-form" method="POST" action="{{ route('hire.checkout.post') }}" class="init">
                                            @csrf

                                            <h5 class="ch-text--bold">Payment</h5>

                                            <div class="ch-mb--4 ch-mt--4">
                                                <div id="card-element">
                                                    <!-- A Stripe Element will be inserted here. -->
                                                </div>

                                                <!-- Used to display form errors. -->
                                                <div id="card-errors" role="alert"></div>
                                            </div>


                                            <p>By submitting your reservation via our website, you agree with our <a href="{{ config('app.url') }}/downloads/Autofusion-Limited-Hire-Car-Terms-And-Conditions.pdf" target="_blank">terms & conditions</a>. Please do not close this page once payment is processing, until your booking is complete.</p>

                                            <p>
                                                <button type="submit" id="payment-button" name="payment-button" class="ch-btn ch-btn--success">
                                                    {{ __('Confirm & Pay Reservation') }}
                                                </button>
                                                <span class="ajax-loader"></span>
                                            </p>
                                            <div class="contact-response-output" role="alert" aria-hidden="true"></div>
                                        </form>



                                    @endif

                                </div>



                            </div>
                        </div>

                    </div>
                </section>
            </div>


        </div>
    </main>

    @include('partials.footer')

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
    </body>
@endsection
