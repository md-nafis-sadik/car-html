@extends('layouts.frontend')
@section('head-info')
    <title>{{ $reservation->reference }} - {{ config('app.name') }}</title>
    <meta name="description" content="Manage your booking {{ $reservation->reference }}." />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('/images/homepage-header.jpeg') }}" />
    <meta property="og:title" content="{{ $reservation->reference }} - {{ config('app.name') }}" />
    <meta property="og:description" content="Manage your reservation {{ $reservation->reference }}." />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ $reservation->reference }} - {{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />

    <link href="{{ asset('css/chassis/chassis.css') }}" rel="stylesheet" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" />
    <link rel='stylesheet' href='/css/themify-icons.css' type='text/css' media='all'/>

    <script src="{{ asset('js/chassis/chassis.js') }}"></script>
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
                            <h1>Manage Booking</h1>
                        </div>
                        <div class="subnav__toggle ch-display--flex md:ch-display--none">
                            <a href="#" class="subnav__button ch-btn ch-btn--sm">Actions</a>
                        </div>
                    </div>
                    <div class="subnav__links ch-display--none md:ch-display--block">
                        <ul class="md:ch-display--flex ch-bt--1 ch-bb--1 ch-bc--grey-3 md:ch-ba--0">
                                @if($reservation->invoice && isset($reservation->invoice->full_url))
                                <li class="md:ch-mh--2 ch-ph--2 ch-bb--1 ch-bc--grey-2 md:ch-bb--0">
                                    <a target="_blank" href="{{ $reservation->invoice->full_url }}" title="View Invoice" class="navlink ch-fs--3 ch-text-decoration--none ch-color--ac-black">Download Invoice</a>
                                </li>
                                @endif
                                @if($reservation->type == "garage" && $reservation->health_check)
                                @if($reservation->health_check->status !== "awaiting_arrival" && $reservation->health_check->status !==  "arrived")
                                <li class="md:ch-mh--2 ch-ph--2 ch-bb--1 ch-bc--grey-2 md:ch-bb--0  ch-bg--ac-blue">
                                    <a href="/vhc/{{ $reservation->health_check->uuid }}" title="View VHC" class="navlink ch-fs--3 ch-text-decoration--none ch-color--white ch-pv--5 ch-ph--5">View VHC</a>
                                </li>
{{--                                    <li class="ch-breadcrumb__item">{{ $reservation->reference }} (<a href="/vhc/{{ $reservation->health_check->uuid }}">{{ \App\VHC::mapStatusText($reservation->health_check->status) }}</a>)</li>--}}
                                @endif
                                @endif
                                    @if($reservation->payment_status == "unpaid" &&  $reservation->payment_method == 'stripe' && ($reservation->status !== 'cancelled' && $reservation->status !== 'completed' ))

                                        <li class="md:ch-mh--2 ch-ph--2 ch-bb--1 ch-bc--grey-2 md:ch-bb--0">
                                            <a href="/account/reservations/{{ $reservation->reference }}/pay" title="Complete Booking" class="navlink ch-fs--3 ch-text-decoration--none ch-color--ac-black">Complete Booking</a>
                                        </li>
                                    @endif
                            <li class="md:ch-mh--2 ch-ph--2 ch-bb--1 ch-bc--grey-2 md:ch-bb--0">
                                <a href="{{ route('account.reservations') }}" title="Manage Bookings" class="navlink ch-fs--3 ch-text-decoration--none ch-color--ac-black">Manage Bookings</a>
                            </li>
                            <li class="md:ch-mh--2 ch-ph--2 ch-bb--1 ch-bc--grey-2 md:ch-bb--0">
                                <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="navlink ch-fs--3 ch-text-decoration--none ch-color--ac-black">{{ __('Sign out') }}</a>
                            </li>

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
                        <!-- The Vehicle -->
                        <div class="ch-row ch-mt--5">
                            <h4 class="ch-text--bold ch-pl--2">The Vehicle</h4>
                                <div class="sm:ch-col--6 sm:ch-col--offset-3 md:ch-col--4 md:ch-col--offset-0 ch-mb--3">
                                    <img src="{{ $reservation->car->main_image?->getUrl('thumb') }}" width="100%" class="ch-mt--1"/>
                                </div>
                                <div class="sm:ch-col--6 sm:ch-col--offset-3 md:ch-col--8 md:ch-col--offset-0 md:ch-mt--0 sm:ch-mt--3 ">
                                    <div class="ch-text--left sl:ch-text--left">
                                        <h2 class="ch-fs--3 ch-text--left">{{ $reservation->car->type->name }}</h2>
                                        <h1 class="ch-fs--5 md:ch-fs--5 ch-mb--3"><a class="ch-text-decoration--none" href="{{ route('hire.cars.car', $reservation->car->slug )}}">{{ $reservation->car->name }}</a></h1>

{{--                                        <button onclick="app.openGallery(8)" class="ac-result__gallery-btn ch-text--center pos-revert">--}}
{{--                                            <span class="ac-result__image-count">1</span>Car Gallery--}}
{{--                                        </button>--}}

                                    </div>

                                    <div class="ch-row single_car_attribute_wrapper p-0-important"> <!--  -->
                                        <div class="ch-col--12 md:ch-col--3 xs:ch-col--6 ch-display--block ch-text--center">
                                            <div class="car_attribute_icon ti-user"></div>
                                            <div class="car_attribute_content">
                                                {{ $reservation->car->passengers }} People
                                            </div>
                                        </div>
                                        <div class="ch-col--12 md:ch-col--3 xs:ch-col--6">
                                            <div class="car_attribute_icon ti-calendar"></div>
                                            <div class="car_attribute_content">
                                                {{ $reservation->car->age }}+ Hire
                                            </div>
                                        </div>
                                        <div class="ch-col--12 md:ch-col--3 xs:ch-col--6">
                                            <div class="car_attribute_icon ti-panel"></div>
                                            <div class="car_attribute_content">
                                                {{ ucfirst($reservation->car->transmission) }}
                                            </div>
                                        </div>
                                        <div class="ch-col--12 md:ch-col--3 xs:ch-col--6">
                                            <div class="car_attribute_icon ti-car"></div>
                                            <div class="car_attribute_content">
                                                {{ $reservation->car->doors }} Doors
                                            </div>
                                        </div>
                                    </div>


                                    <div class="ch-row ch-mt--4 ch-mb--3">

                                        <div class="ch-col--4 md:ch-col--4 xs:ch-col--6">
                                            <ul class="ch-list ch-list--tick ch-measure">
                                                <li>USB Input</li>
                                                <li>Parking Sensors</li>
                                                <li>GPS</li>
                                            </ul>
                                        </div>
                                        <div class="ch-col--4 md:ch-col--4 xs:ch-col--6">
                                            <ul class="ch-list ch-list--tick ch-measure">
                                                <li>Radio</li>
                                                <li>Bluetooth</li>
                                                <li>Air Conditioning</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="ch-form__group">
                                        <span class="ch-form__control-validation field-validation-valid" data-cy="selectServiceValidationError" data-valmsg-for="SelectedProduct" data-valmsg-replace="true"></span>
                                    </div>
                                </div>
                        </div>
                        <!-- End The Vehicle -->

                        <!-- The Booking -->
                        <div class="ch-row ch-mt--5">
                                <h4 class="ch-text--bold ch-pl--2">The Booking</h4>
{{--                            <div class="sm:ch-col--6 md:ch-col--6 md:ch-col--offset-0">--}}
                            <div class="ch-col--12">
                                <div id="order_review">
                                    @if($reservation->type == "hire")

                                    @else
                                    <table class="ch-table ch-table--striped ch-width--12">
                                            <thead>
                                            <tr>
                                                <th class="product-name">Item</th>
                                                <th class="product-name">Price</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <tr class="cart_item">
                                                <td class="product-name">

                                                    <dl class="variation">
                                                        <!-- CustomerCar -->
                                                        <dt class="variation-PickUpDropOffLocation ch-text--bold">Vehicle:</dt>
                                                        <dd class="variation-PickUpDropOffLocation ch-text--left ch-ml--0"><p>
                                                                {{ strtoupper($reservation->car->reg) }} ({{ $reservation->car->make }} {{ $reservation->car->model }})</p>
                                                        </dd>

                                                        @if($reservation->order_items)
                                                            <dt class="variation-PickUpDropOffLocation ch-text--bold">Service(s) Ordered:</dt>
                                                            @foreach($reservation->order_items as $orderItem)
                                                                <dd class="variation-PickUpDropOffLocation ch-text--left ch-ml--0">
                                                                    @if($orderItem->product_type == "database")
                                                                        <p>{{ \App\Product::getName($orderItem->product_id) }}</p>
                                                                    @elseif($orderItem->product_type == "line_item")
                                                                        <p>{{ $orderItem->product_name  }}</p>
                                                                    @endif
                                                                </dd>
                                                            @endforeach
                                                        @endif

                                                        <dt class="variation-PickUpDropOffLocation ch-text--bold">Repair Centre Location:</dt>
                                                        <dd class="variation-PickUpDropOffLocation ch-text--left ch-ml--0"><p>
                                                                {{ $reservation->location->address }} ({{ $reservation->location->name }})</p></dd>

                                                        <dt class="variation-PickupDateampTime ch-text--bold">Appointment Date &amp; Time:</dt>
                                                        <dd class="variation-PickupDateampTime ch-text--left ch-ml--0"><p>
                                                                {{ \Carbon\Carbon::parse($reservation->booking_date_time)->format('d M Y (g:i A)') }}</p>
                                                        </dd>
{{--                                                        <dt class="variation-ReturnDateampTime ch-text--bold">Return Date &amp; Time:</dt>--}}
{{--                                                        <dd class="variation-PickupDateampTime ch-text--left ch-ml--0"><p>--}}
{{--                                                                {{ \Carbon\Carbon::parse($reservation->dropoff_date)->format('d M Y (h A)') }}</p>--}}
{{--                                                        </dd>--}}

                                                    </dl>
                                                </td>
                                                <td class="product-name">
                                                    <span class="Price-amount amount"><span class="Price-currencySymbol">£</span>{{ number_format($reservation->billing_total, 2) }}</span>
                                                </td>
                                            </tr>

                                            <!-- Savings -->
                                            @if($reservation->billing_savings > 0)
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        <dl class="variation">
                                                            <dt class="variation-PickUpDropOffLocation ch-text--bold">Auto Savings (Multi Day Hire)</dt>
                                                        </dl>
                                                    </td>
                                                    <td class="product-name">
                                                        <span class="Price-amount amount"><span class="Price-currencySymbol">£-</span>{{ number_format($reservation->billing_savings, 2, '.', ',') }}</span>
                                                    </td>
                                                </tr>
                                            @endif

                                            <!-- Chauffeur -->
                                            @if($reservation->chauffeur_included)
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        <dl class="variation">
                                                            <!-- CustomerCar -->
                                                            <dt class="variation-PickUpDropOffLocation ch-text--bold">Chauffeur</dt>
                                                        </dl>
                                                    </td>
                                                    <td class="product-name">
                                                        <span class="Price-amount amount"><span class="Price-currencySymbol">£</span>{{ number_format($reservation->chauffeur_price, 2, '.', ',') }}</span>
                                                    </td>
                                                </tr>
                                            @endif


                                            <!-- Refundable Deposit -->
                                            @if($reservation->billing_deposit > 1 )
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        <dl class="variation">
                                                            <!-- CustomerCar -->
                                                            <dt class="variation-PickUpDropOffLocation ch-text--bold">Refundable Deposit</dt>
                                                        </dl>
                                                    </td>
                                                    <td class="product-name">
                                                        <span class="Price-amount amount"><span class="Price-currencySymbol">£</span>{{ number_format($reservation->billing_deposit, 2) }}</span>
                                                    </td>
                                                </tr>
                                            @endif


                                            <!-- Coupon -->
                                            @if($reservation->billing_discount_code)
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        <dl class="variation">
                                                            <!-- CustomerCar -->
                                                            <dt class="variation-PickUpDropOffLocation ch-text--bold">Discount ({{ $reservation->billing_discount_code }} - £{{ $reservation->billing_discount }} OFF)</dt>
                                                        </dl>
                                                    </td>
                                                    <td class="product-name">
                                                        <span class="Price-amount amount"><span class="Price-currencySymbol">£</span>-{{ number_format($reservation->billing_discount, 2, '.', ',') }}</span>
                                                    </td>
                                                </tr>
                                            @endif


                                            </tbody>
                                            <tfoot>
                                            <tr class="order-total">
                                                <th class="ch-text--left">Total</th>
                                                <td class="ch-text--bold"><span class="Price-amount amount"><span class="Price-currencySymbol">£</span>{{ number_format($reservation->billing_subtotal, 2) }}</span></td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End The Booking -->

                        <!-- The Location -->
                        <div class="ch-row ch-mt--5">
                            <h4 class="ch-text--bold ch-pl--2">Our Branch</h4>
                                <p><span class="ch-text--bold ch-pl--2">Full Address:</span><p/>
                                <p class="ch-pl--2"><a target="_blank" href="https://www.google.com/maps/place/Autofusion+Repairs/@55.8939481,-4.3958794,17z/data=!3m1!4b1!4m5!3m4!1s0x48884f358029aa23:0x50a1fedd2c0cddf!8m2!3d55.8939481!4d-4.3936907">{{ $reservation->location->address }} ({{ $reservation->location->name }})</a></p>
                                <div class="ch-col--12">
                                    <div id="map">
                                        <div class="map-marker" data-title="{{ $reservation->car->location->name }}" data-latlng="{{ $reservation->car->location->lat }},{{ $reservation->car->location->lng }}"></div>
                                    </div>
                                </div>
                        </div>
                        <!-- End The Location -->

                    </div>
                </section>
            </div>


        </div>
    </main>

    @include('partials.footer')
    <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC0bg-_sqh37a5N5U2Z99oIz8xyP53PtGA'></script>
    <script type='text/javascript' src='{{ config('app.url') }}/js/plugins/simplegmaps/jquery.simplegmaps.min.js'></script>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery("#map").simplegmaps({
                // MapOptions: { zoom: 8,scrollwheel: false, }
                MapOptions: {
                    draggable: false,
                    zoom: 14,
                    center: '{{ $reservation->car->location->lat }},{{ $reservation->car->location->lng }}',
                    scrollwheel: false,
                    streetViewControl: false,
                    panControl: false,
                    zoomControl: true,
                    zoomControlOptions: {
                        style: 'DEFAULT'
                    }
                },

            });

            var marker = new google.maps.Marker({position: '{{ $reservation->car->location->lat }},{{ $reservation->car->location->lng }}', map: map});

        });
        jQuery(document).ready(function(){
            // var mapHeight = jQuery("#map").parent().parent().height();
            var mapHeight = 300;
            if(mapHeight>0)
            {
                jQuery("#map").css('height', mapHeight+'px')

            }
        });
    </script>
    </body>
@endsection
