@extends('layouts.garage-bookings', [
    'stepper_layout' => true,
])
@section('head-info')
    <meta name="description" content="Book MOT & service for your vehicle."/>
    <title>Summary - {{ config('app.name') }}</title>
@endsection
@section('main')
    <div class="flex flex-col items-center justify-center mt-16 sm:mt-7">
        @include('components.horizontal-stepper', [
            'name' => 'Booking Summary',
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
                                            {{ json_decode(App\GarageReservation::getCurrentCart()->attributes['vehicleDetails'])->DataItems->ClassificationDetails->Dvla->Make }}  {{ json_decode(App\GarageReservation::getCurrentCart()->attributes['vehicleDetails'])->DataItems->ClassificationDetails->Dvla->Model }}
                                        </p>
                                        <div
                                                class="px-2 py-1 text-sm font-bold text-center bg-yellow-300 rounded text-dark w-max">
                                            {{ json_decode(App\GarageReservation::getCurrentCart()->attributes['vehicleDetails'])->DataItems->VehicleRegistration->Vrm }}
                                        </div>
                                    </div>
                                    <button type="button" title="Edit booking data">
                                        <img src="{{ asset('assets/svgs/pencil-edit.svg') }}"
                                             class="w-6 h-6 transition-all hover:invert" alt="">
                                    </button>
                                </li>
                                @if(App\GarageReservation::getCurrentCart()->attributes['serviceRequired'] || App\GarageReservation::getCurrentCart()->attributes['motRequired'] || App\GarageReservation::getCurrentCart()->attributes['trackerSelected'] || App\GarageReservation::getCurrentCart()->attributes['wheelAlignmentSelected'] || App\GarageReservation::getCurrentCart()->attributes['diagnosticSelected'])
                                <li
                                        class="flex flex-col gap-1 p-4 border-b border-b-dark border-opacity-10 last:border-b-0">
                                    <p class="text-xs sm:text-base text-dark text-opacity-60">Description of work</p>
                                    <div class="flex flex-wrap items-center gap-3">
                                        @php
                                            $cart = App\GarageReservation::getCurrentCart()->attributes;
                                            $selectedItems = [];

                                            if ($cart['diagnosticSelected']) {
                                                $selectedItems[] = 'diagnosticSelected';
                                            }
                                            if ($cart['wheelAlignmentSelected']) {
                                                $selectedItems[] = 'wheelAlignmentSelected';
                                            }
                                            if ($cart['trackerSelected']) {
                                                $selectedItems[] = 'trackerSelected';
                                            }
                                            if ($cart['trackerSubscriptionSelected']) {
                                                $selectedItems[] = 'trackerSubscriptionSelected';
                                            }
                                            if ($cart['immobilisationSelected']) {
                                                $selectedItems[] = 'immobilisationSelected';
                                            }
                                            if ($cart['serviceSelected']) {
                                                $selectedItems[] = 'serviceSelected';
                                            }
                                            if ($cart['motSelected']) {
                                                $selectedItems[] = 'motSelected';
                                            }
                                        @endphp

                                        @foreach ($selectedItems as $index => $item)
                                            <p class="text-base font-semibold sm:text-lg text-dark">
                                                @if($item == 'immobilisationSelected')
                                                    + Immobiliser
                                                @else
                                                    {{ App\Product::getName($cart[$item]) }}
                                                @endif
                                            </p>

                                            @if ($index < count($selectedItems) - 1)
                                                <span class="text-opacity-30 text-dark">|</span>
                                            @endif
                                        @endforeach

                                    </div>
                                </li>
                                @endif
                                @if(App\GarageReservation::getCurrentCart()->attributes['vehicleMileage'])
                                <li
                                        class="flex flex-col gap-1 p-4 border-b border-b-dark border-opacity-10 last:border-b-0">
                                    <p class="text-xs sm:text-base text-dark text-opacity-60">Mileage</p>
                                    <p class="text-lg font-semibold text-dark">
                                        {{ App\GarageReservation::getCurrentCart()->attributes['vehicleMileage'] }}
                                    </p>
                                </li>
                                @endif
                                <li
                                        class="flex flex-wrap gap-4 p-4 border-b md:gap-10 border-b-dark border-opacity-10 last:border-b-0">
                                    <div class="flex flex-col gap-1">
                                        <p class="text-xs sm:text-base text-dark text-opacity-60">When and where</p>
                                        @if(App\GarageReservation::getCurrentCart()->attributes['branchSelected'])
                                        <p class="text-lg font-semibold text-dark">
                                            @if(App\GarageReservation::getCurrentCart()->attributes['branchSelected'] == 1)
                                                Autofusion Clydebank
                                            @endif
                                        </p
                                        @endif
                                        @if(App\GarageReservation::getCurrentCart()->attributes['dropoffDate'])
                                        <p class="text-base font-normal text-dark">
                                            {{ Carbon\Carbon::parse(App\GarageReservation::getCurrentCart()->attributes['dropoffDate'])->format('jS M Y')  }}
                                        </p>
                                        @endif
                                    </div>
{{--                                    <div class="flex flex-col gap-1">--}}
{{--                                        <p class="text-xs sm:text-base text-dark text-opacity-60">Remember to bring</p>--}}
{{--                                        <p class="inline-flex items-center gap-2 text-base font-normal text-dark">--}}
{{--                                            <img src="{{ asset('assets/svgs/blue-check-square.svg') }}" class="w-4 h-4"--}}
{{--                                                 alt="">--}}
{{--                                            Service book--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
                                </li>
                                @if(App\GarageReservation::getCurrentCart()->attributes['dropoffTime'])
                                <li
                                        class="flex flex-col gap-1 p-4 border-b border-b-dark border-opacity-10 last:border-b-0">
                                    <p class="text-xs sm:text-base text-dark text-opacity-60">Drop-off Time</p>
                                    <p class="text-lg font-semibold text-dark">
                                        {{ App\GarageReservation::getCurrentCart()->attributes['dropoffTime'] }}
                                    </p>
                                </li>
                                @endif
                                @if(\Auth::check())
                                    @if(request()->user()->discount_amount > 0 && \Cart::session(App\GarageReservation::getCurrentCartID())->getSubtotal() > 0)
                                        <hr class="ch-mv--3 ch-bg--grey-3">
                                        <div style="display: flex; justify-content: space-between">
                                            <p class="ch-mb--0 fs-18 ch-color--grey-6">Corporate Discount</p>
                                            {{--                                            <a data-cy="couponEditLink" href="{{ route('book.service.select-branch', ['serviceType' => App\GarageReservation::getCurrentCart()->attributes['bookingType']]) }}">Edit</a>--}}
                                        </div>
                                        <p class="ch-fs--3 ch-text--bold ch-mb--0 ch-mt--2 ch-finance-example__figure__price">
                                            {{ request()->user()->discount_amount }}% OFF
                                            (-£{{ number_format(\Cart::session(App\GarageReservation::getCurrentCartID())->getSubtotal() - \Cart::session(App\GarageReservation::getCurrentCartID())->getTotal(), 2) }})</p>
                                    @endif
{{--                                <li class="flex flex-col gap-1 p-4 border-b border-b-dark border-opacity-10 last:border-b-0">--}}
{{--                                    <form action="" method="">--}}
{{--                                        @csrf--}}
{{--                                        @method('POST')--}}
{{--                                        <p class="text-xs sm:text-base text-dark text-opacity-60">Coupon</p>--}}
{{--                                        <div class="flex flex-col gap-2 mt-2 lg:flex-row">--}}
{{--                                            <x-input-field type="text" name="coupon_code" placeholder="Enter code here"--}}
{{--                                                           class-name="flex-grow !bg-[#F3F4F6]" />--}}
{{--                                            <button class="btn btn-primary">Redeem Code</button>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                </li>--}}
{{--                                    FINISH COUPONS section--}}
                                @else

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
                                            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                                @if(Session::has('alert-' . $msg))
                                                    <div class="alert text-{{ $msg }} ch-mt--2">
                                                        <p class="text-base font-bold ch-mb--0">{{ Session::get('alert-' . $msg) }}</p>
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

                                @endif
                                @if(App\GarageReservation::getCurrentCart()->price)
                                <li
                                        class="flex flex-col gap-1 p-4 border-b border-b-dark border-opacity-10 last:border-b-0">
                                    <div class="flex items-center justify-between gap-5">
                                        <div>
                                            <p class="mb-1 text-base font-semibold sm:text-2xl text-dark">Total Due</p>
                                            <p class="text-sm font-medium text-dark text-opacity-60">Incl. VAT</p>
                                        </div>
                                        <p class="font-semibold text-[26px] text-primary">
                                            £{{ number_format(\Cart::session(App\GarageReservation::getCurrentCartID())->getTotal(), 2) }}
                                        </p>
                                    </div>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="md:col-span-5 lg:col-span-4">
                        <form id="booking-form" name="booking-form" method="post" action="{{ route('book.service.summary.post', ['serviceType' => App\GarageReservation::getCurrentCart()->attributes['bookingType']]) }}"
                              class="bg-white rounded-[15px] border border-dark border-opacity-10 overflow-hidden">
                            @csrf
                            @method('POST')
                            <div class="flex flex-col gap-4 p-4">

                                @if($serviceType->payment_enabled)
                                    <p
                                            class="pb-4 text-xs border-b border-opacity-10 sm:text-base lg:text-lg text-dark text-opacity-60">
                                        Make a payment</p>
                                    @component('components.input-radio')
                                        @slot('id', 'stripe')
                                        @slot('name', 'paymentMethodSelect[]')
                                        @slot('value', 'stripe')
                                        @slot('onClick', 'handlePaymentMethod(this)')
                                        @slot('className', 'gap-5 rounded-lg py-3 px-4 border-2 border-opacity-10')
                                        @slot('checked', 'checked')
                                        <div>
                                            <p class="text-sm font-semibold sm:text-base text-dark">
                                                Credit / Debit Card
                                            </p>
                                        </div>
                                    @endcomponent
                                    @if(!$serviceType->payment_required)
                                        @component('components.input-radio')
                                            @slot('id', 'in_store')
                                            @slot('name', 'paymentMethodSelect[]')
                                            @slot('value', 'in_store')
                                            @slot('onClick', 'handlePaymentMethod(this)')
                                            @slot('className', 'gap-5 rounded-lg py-3 px-4 border-2 border-opacity-10')
                                            <div>
                                                <p class="text-sm font-semibold sm:text-base text-dark">
                                                    Pay In Store
                                                </p>
                                            </div>
                                        @endcomponent
                                    @endif
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
                                @endif
                                <div class="py-4 border-t border-t-dark border-opacity-10">
                                    <p class="text-xs text-dark text-opacity-70">
                                        I accept the terms and conditions and agree to waive any cancellation rights once work
                                        has been started on my vehicle.
                                    </p>
                                    <div class="p-2 bg-[#f3f4f6] rounded-lg inline-flex gap-2 items-center w-full my-3">
                                        <x-input-checkbox name="termsAndConditionsCheckbox" required onClick="handleTOSAgree(this)" />
                                        <label for="termsAndConditionsCheckbox" class="text-sm font-medium text-dark">I accept and
                                            agree</label>
                                    </div>
                                    <p class="text-xs text-dark text-opacity-70">
                                        The personal information you
                                        provide to us at this stage will only be used for the purposes of your booking. If you
                                        would like to find out more on how we use your info, please see our privacy policy. This
                                        can be found on <a href="/downloads/Autofusion-Repairs-Terms-And-Conditions.pdf"
                                                                                                     class="font-medium text-blue-500 underline transition-all hover:text-blue-400 underline-offset-2">here</a>.
                                    </p>
                                </div>

                                <input type="submit" name="payment-button" id="payment-button"  class="btn btn-primary" value="Confirm Booking"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @push('js')
        <script src="https://js.stripe.com/v3/"></script>


        @if($serviceType->payment_enabled)
            <script type='text/javascript'>

                var stripe = Stripe('{{ config('services.stripe.garage_key') }}');
                var payment_button = document.getElementById('payment-button');
                var payment_method = "stripe";
                var form = document.getElementById('booking-form');

                function setupStripe() {

                    // Create an instance of Elements.
                    var elements = stripe.elements();

                    // Custom styling can be passed to options when creating an Element.
                    // (Note that this demo uses a wider set of styles than the guide below.)
                    var style = {
                        base: {
                            iconColor: '#000000',
                            fontWeight: '500',
                            fontFamily: 'Roboto, Open Sans, Segoe UI, sans-serif',
                            fontSmoothing: 'antialiased',
                            fontSize: '16px',
                            ':-webkit-autofill': {
                                color: '#000000',
                            },
                            '::placeholder': {
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

                    var displayError = document.getElementById('card-errors');
                    displayError.style.display = "none";
                    payment_button.disabled = true;

                    // Handle real-time validation errors from the card Element.
                    card.on('change', function(event) {
                        if (event.error) {
                            displayError.style.display = "block";
                            displayError.textContent = event.error.message;
                            payment_button.disabled = true;
                        } else {
                            displayError.style.display = "none";
                            displayError.textContent = '';
                            payment_button.disabled = false;
                        }
                    });

                    // Handle form submission.

                    form.addEventListener('submit', function(ev) {
                        payment_button.disabled = true;
                        ev.preventDefault();
                        if(payment_method === "stripe") {
                            payment_button.value = "Processing Payment";

                            stripe.confirmCardPayment("{{ $intent->client_secret }}", {
                                payment_method: {
                                    card: card,
                                    billing_details: {
                                        name: "{{ $user->name }}",
                                        email: "{{ $user->email }}",
                                        phone: "{{ $user->phone }}",
                                        address: {
                                            line1: "{{ $user->address_line_1 }}",
                                            city: "{{ $user->address_town }}",
                                            state: "{{ $user->address_county }}",
                                            postal_code: "{{ $user->address_postcode }}",
                                            country: "{{ $user->address_country }}",
                                        },
                                    }
                                },
                                receipt_email: "{{ $user->email }}",
                            }).then(function(result) {
                                if (result.error) {
                                    console.log(result.error.message);
                                    var errorElement = document.getElementById('card-errors');
                                    errorElement.textContent = result.error.message;

                                    payment_button.disabled = false;
                                    payment_button.value = "Confirm Booking";
                                } else {
                                    // The payment has been processed!
                                    if (result.paymentIntent.status === 'succeeded') {
                                        payment_button.disabled = true;
                                        payment_button.value = "Completing Booking";
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
                        } else {
                            payment_button.value = "Completing Booking";
                            form.submit();
                        }

                    });
                }

                function setupPayInStore() {
                    var cardElement = document.getElementById('card-element');
                    cardElement.removeChild(cardElement.childNodes[0]);
                    cardElement.removeAttribute('class');

                    var displayError = document.getElementById('card-errors');
                    displayError.style.display = "none";
                }

                // Setup Stripe as Default
                setupStripe();

                function handlePaymentMethod(e) {
                    var paymentMethod = e.value;
                    console.log(paymentMethod);

                    if(paymentMethod === "in_store") {
                        payment_method = "in_store";
                        setupPayInStore();
                    } else if(paymentMethod === "stripe") {
                        payment_method = "stripe";
                        setupStripe();
                    }
                }

            </script>

        @else
            <script>
                var payment_button = document.getElementById('payment-button');
                var form = document.getElementById('booking-form');

                form.addEventListener('submit', function(ev) {
                    payment_button.disabled = true;
                    ev.preventDefault();
                    form.submit();
                });
            </script>
        @endif

        <script type="text/javascript">
            const tosCheckbox = document.getElementById("termsAndConditionsCheckbox");
            const paymentBtn = document.getElementById("payment-button");
            paymentBtn.disabled = true;

            function handleTOSAgree(checkbox) {
                if (checkbox.checked) {
                    paymentBtn.disabled = false;
                } else {
                    paymentBtn.disabled = true;
                }
            }

        </script>

        <script type="text/javascript">

            document.addEventListener("DOMContentLoaded", function (event) {
                var cancelButton = document.querySelectorAll("[id^='cancelButton']");
                var cancelModal = document.getElementById("cancelModal");
                var goBackButton = document.getElementById("goBackButton");
                if (cancelButton && cancelModal && goBackButton) {
                    cancelButton.forEach(function (btn) {
                        btn.addEventListener("click",
                            function () {
                                cancelModal.style.display = "block";
                            });
                    });
                    goBackButton.addEventListener("click",
                        function () {
                            cancelModal.style.display = "none";
                        });
                }
            });
        </script>

        <script type="text/javascript">

            const isVisible = function (elem) {
                return !!(elem.offsetWidth || elem.offsetHeight || elem.getClientRects().length);
            };

            (function () {
                if ("False" === "True") {
                    const validationErrors = document.getElementsByClassName("ch-form__control-validation");

                    for (let i = 0; i < validationErrors.length; i++) {
                        const currentItem = validationErrors[i];
                        const display = window.getComputedStyle(currentItem, null).display;
                        if (display === 'block') {
                            // console.log("Found it");
                            console.log(`${currentItem.id}`);
                            console.log(currentItem.id !== "dateValidationMessage");

                            if (currentItem.id !== "dateValidationMessage") {
                                window.scrollTo(0, document.body.scrollHeight);
                            }

                            currentItem.focus();
                            return;
                        }
                    };
                }
            })();


        </script>
    @endpush
@endsection
