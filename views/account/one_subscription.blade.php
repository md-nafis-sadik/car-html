@extends('layouts.account')
@section('head-info')
    <title>Manage Subscription - {{ config('app.name') }}</title>
    <meta name="description" content="Manage a subscription on your {{ config('app.name') }} account." />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('/images/homepage-header.jpeg') }}" />
    <meta property="og:title" content="Subscriptions - {{ config('app.name') }}" />
    <meta property="og:description" content="Manage subscriptions on your {{ config('app.name') }} account." />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection
@section('main')
    @include('components.breadcrumb', [
       'items' => [
           ['title' => 'Account', 'url' => route('account')],
           ['title' => 'Subscriptions', 'url' => route('account.subscriptions')],
           ['title' => $subscription->product->name]
       ]
   ])

    <div id="default-tab-content">
        <div id="__personal" role="tabpanel" aria-labelledby="__personal-tab">
            <div class="w-full flex flex-col gap-5">
            <div class="  lg:items-center  lg:flex-row lg:justify-between text-[#8C94A7]">


                <div class="mt-12">
                    <div id="subscriptions-panel" class="flex flex-col lg:flex-row justify-between gap-10 bg-[#2C2F36] rounded">

                        <div class="lg:flex-grow p-4 lg:w-1/2">
                            <h4 class="font-bold mt-2 text-white text-md">Your Subscription</h4>
                            <div class="text-left">
                                <h1 class="text-base mb-3">{{ $subscription->product->name }} ({{ ucfirst($subscription->status) }})</h1>
                                <h2 class="text-base font-bold"><span class="font-bold text-white">Price:</span> £{{ $subscription->price }}</h2>
                                <p>
                                    <span class="font-bold text-white">Start Date:</span> {{ \Carbon\Carbon::parse($subscription->start_date)->format('d M Y') }}
                                </p>
                                <p>
                                    @if($subscription->product->frequency == "lifetime")
                                        <span class="font-bold text-white">Renewal Date:</span> Lifetime
                                    @else
                                        <span class="font-bold text-white">Renewal Date:</span> {{ \Carbon\Carbon::parse($subscription->renewal_date)->format('d M Y') }}
                                    @endif
                                </p>
                            </div>
                        </div>

                        @if($subscription->product->frequency !== "lifetime")
                            @if($subscription->status == "active" || $subscription->status == "expired")
                                <div class="renewal-form w-full lg:w-1/2 bg-[#F3F4F6] p-5 rounded">
                                <div class="sm:block sm:col-span-6 md:col-span-4 mt-0 bg-[#F3F4F6] flex flex-col gap-3 sm:gap-5 overflow-hidden w-full">
                                    <form id="booking-form" name="booking-form" method="post" action="{{ route('account.subscription.post', ['subscription' => $subscription]) }}" class="md:col-start-2 md:ml-auto ph-0">
                                        <div class="card mb-3 w-full">
                                            <div >
                                                <div style="display: flex; justify-content: space-between">
                                                    <p class="mb-0 text-md text-dark font-bold">Extend Subscription</p>
                                                </div>
                                                <hr class="my-2 bg-gray-300">

                                                @if($renewalProducts && count($renewalProducts) > 0)
                                                    <div class="mb-3">
                                                        @foreach($renewalProducts as $product)
                                                            <div class="w-full">

                                                                <div class="py-1">
                                                                    @component('components.input-radio')
                                                                        @slot('id', $product->id)
                                                                        @slot('name', 'productSelect[]')
                                                                        @slot('value', $product->id)
                                                                        @slot('onClick', "handleProductSelect(this)")
                                                                        @slot('className', 'gap-6 max-w-[435px] pt-4 px-5 pb-5 rounded-[20px] bg-white border-2 border-[#D4D4D4] w-full')
                                                                        @if ($loop->first)@slot('checked', 'checked') @endif
                                                                        <div>
                                                                            <p class="text-[19px] font-semibold text-dark">
                                                                                {{ $product->name }}
                                                                            </p>

                                                                            <p class="text-primary font-semibold text-[19px]">
                                                                                £ {{ $product->price }}
                                                                            </p>
                                                                        </div>
                                                                    @endcomponent
                                                                </div>

                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endif

                                                <div class="form border-[#cbcbcb] border-2 py-2 px-2 rounded">
                                                    <input type="hidden" id="cardPaymentChargeAmount" name="cardPaymentChargeAmount" value="{{ $renewalProducts[0]->price }}">
                                                    <div class="mt-0 mb-1">
                                                        <div id="card-element">
                                                            <!-- A Stripe Element will be inserted here. -->
                                                        </div>
                                                        <!-- Used to display form errors. -->
                                                        <div id="card-errors" role="alert" class="ch-alert ch-alert--danger text-xs mt-4"><p></p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @csrf
                                        <div class="ph-0">
                                            <input type="submit" class="btn btn-primary w-full mb-2" data-cy="continueButton" name="payment-button" id="payment-button" value="Confirm Renewal" disabled="">
                                        </div>
                                    </form>
                                </div>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>

            </div>
            </div>
        </div>
    </div>
    @push('js')
        <script src="https://js.stripe.com/v3/"></script>

        @if($subscription->product->frequency !== "lifetime")
            @if($subscription->status == "active" || $subscription->status == "expired")
                <script type='text/javascript'>

                    var stripe = Stripe('{{ config('services.stripe.garage_key') }}');
                    var payment_button = document.getElementById('payment-button');
                    var payment_method = "stripe";
                    var form = document.getElementById('booking-form');
                    var payment_amount = document.getElementById('cardPaymentChargeAmount');

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

                                $.ajax({
                                    type: "POST",
                                    url: "{{ config('app.url') }}/api/book/payments/stripe/intent",
                                    data: { amount: document.getElementById('cardPaymentChargeAmount').value},
                                    // data: { email: enteredEmail.value},
                                    success: function (response) {
                                        // console.log(response);
                                        if(response.error == true) {
                                            alert("An error occured with Stripe");
                                            return false;
                                        } else {
                                            stripe.confirmCardPayment(response.client_secret, {
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

                                            // form.submit();
                                        }
                                    },
                                    error: function (er) {
                                        alert("Unable to proceed with checkout. Error #{{ config('app.name') }}-ERR-V-1");
                                        return false;
                                    }
                                });



                            } else {
                                payment_button.value = "Completing Booking";
                                form.submit();
                            }

                        });
                    }

                    function setupPayInStore() {
                        var elements = stripe.elements();

                        var cardElement = document.getElementById('card-element');
                        cardElement.removeChild(cardElement.childNodes[0]);
                        cardElement.removeAttribute('class');

                        var displayError = document.getElementById('card-errors');
                        displayError.style.display = "none";
                    }

                    // Setup Stripe as Default
                    setupStripe();

                    function handleProductSelect(e) {
                        payment_amount.value = e.dataset.price;
                        setupStripe();
                    }
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
            @endif
        @endif
    @endpush
@endsection
