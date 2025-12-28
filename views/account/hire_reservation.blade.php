@extends('layouts.account-v2')
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
@endsection
@section('main')
    <!-- @php
        $breadcrumbItems = [
            ['title' => 'Account', 'url' => route('account')],
            ['title' => "$reservation->reference ($pageTagline)" ],
        ];

        $breadcrumbActions = [];

        if ($reservation->invoice) {
            $breadcrumbActions[] = ['title' => 'Download invoice', 'url' => $reservation->invoice->full_url];
        }

        if ($reservation->payment_status == "unpaid" && $reservation->payment_method == 'stripe' && ($reservation->status !== 'cancelled' && $reservation->status !== 'completed')) {
            $breadcrumbActions[] = ['title' => 'Complete Booking', 'url' => "/account/reservations/$reservation->reference/pay"];
        }

    @endphp

    @include('components.breadcrumb', [
       'items' => $breadcrumbItems,
       'actions' => $breadcrumbActions
    ]) -->


    <div class="d-flex mb-5 align-items-center justify-content-between gap-10">
        <h3 class="text-b1-semibold d-flex align-items-center gap-3 text-light">
            <span class="oy-dashboard__toggler">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.75 1.25V18.25M0.75 7.15C0.75 4.91 0.75 3.79 1.186 2.934C1.56949 2.18139 2.18139 1.56949 2.934 1.186C3.79 0.75 4.91 0.75 7.15 0.75H12.35C14.59 0.75 15.71 0.75 16.566 1.186C17.3186 1.56949 17.9305 2.18139 18.314 2.934C18.75 3.79 18.75 4.91 18.75 7.15V12.35C18.75 14.59 18.75 15.71 18.314 16.566C17.9305 17.3186 17.3186 17.9305 16.566 18.314C15.71 18.75 14.59 18.75 12.35 18.75H7.15C4.91 18.75 3.79 18.75 2.934 18.314C2.18139 17.9305 1.56949 17.3186 1.186 16.566C0.75 15.71 0.75 14.59 0.75 12.35V7.15Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
            {{ $reservation->reference }} ({{ $pageTagline }})
        </h3>
    </div>

    @foreach (['danger' => 'red', 'warning' => 'orange', 'success' => 'primary', 'info' => 'blue'] as $type => $color)
        @if(Session::has('alert-' . $type))
            <div class="px-3 mt-4">
                <div class="card border-{{ $color }} border-start border-4">
                    <div class="card-body bg-{{ $color }}-subtle text-{{ $color }}-emphasis">
                        <p class="card-text mb-0 fw-bold">{!! Session::get('alert-' . $type) !!}</p>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
    
    <div class="card p-4 p-lg-5 rounded-5" style="--bs-card-bg: #F3F5F9;">
        <div class="d-flex justify-content-center justify-content-lg-between align-items-center gap-3 mb-4 mb-lg-5">
            <h2 class="text-h5 text-dark mb-3">The Vehicle</h2>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-12 col-md-4">
                <div class="card shadow-none">
                    <img src="{{ $reservation->car->main_image?->getUrl('thumb') }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="row g-3 g-4">
                    @php
                        $features = [
                            (object) [
                                'icon' => asset('assets/svgs/feature-capacity.svg'),
                                'name' => 'Capacity',
                                'caption' => $reservation->hire_car->passengers . ' people',
                            ],
                            (object) [
                                'icon' => asset('assets/svgs/feature-age_limit.svg'),
                                'name' => 'Age Limit',
                                'caption' => $reservation->hire_car->age . ' + Hire',
                            ],
                            (object) [
                                'icon' => asset('assets/svgs/feature-transmission.svg'),
                                'name' => 'Transmission',
                                'caption' => ucfirst($reservation->hire_car->transmission),
                            ],
                            (object) [
                                'icon' => asset('assets/svgs/features-doors_count.svg'),
                                'name' => 'Doors count',
                                'caption' => $reservation->hire_car->doors,
                            ],
                        ];
                    @endphp
                    <!-- Item -->
                    @foreach ($features as $feature)
                        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="{{ ($loop->index + 1) * 150 }}">
                            <div class="card gap-4 rounded-4 shadow-none p-4 flex-row align-items-center">
                                <img src="{{ $feature->icon }}" alt="">
                                <div>
                                    <p class="text-b6-regular text-secondary text-opacity-75 mb-0">{{ $feature->name }}</p>
                                    <h5 class="text-b3-semibold text-dark">{{ $feature->caption }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                @php
                    $exampleFeatureList = ['USB Input', 'Radio', 'Parking Sensors'];
//                                $exampleFeatureList = ['USB Input', 'Radio', 'Parking Sensors', 'Bluetooth', 'GPS', 'Air Conditioning'];
                @endphp
                <ul class="list-unstyled mt-4 ml-0 p-0">
                    @foreach ($exampleFeatureList as $list)
                    <li>
                        <input type="checkbox" name="" id="list-form--1" checked>
                        <label for="list-form--1">{{ $list }}</label>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- The Booking -->
        <div class="card p-4 p-lg-5 shadow-none rounded-4 mb-5">
            <h2 class="text-h5 text-dark mb-3">The Booking</h2>

            <table class="w-100 table__flash">
                <tbody>
                    <tr>
                        <td class="text-start">Item</td>
                        <td class="text-end">Price</td>
                    </tr>
                    <tr>
                        <th class="text-start">Vehicle:</td>
                        <td class="text-end">{{ $reservation->car->name }}</td>
                    </tr>
                    <tr>
                        <th class="text-start">Pick Up & Drop Off Location:</td>
                        <td class="text-end">{{ $reservation->car->location->name }} ({{ $reservation->car->location->address }})</td>
                    </tr>
                    <tr>
                        <th class="text-start">Pickup Date & Time:</td>
                        <td class="text-end">{{ \Carbon\Carbon::parse($reservation->pickup_date)->format('d M Y (h A)') }}</td>
                    </tr>
                    <tr>
                        <th class="text-start">Return Date & Time:</td>
                        <td class="text-end">{{ \Carbon\Carbon::parse($reservation->dropoff_date)->format('d M Y (h A)') }}</td>
                    </tr>
                    <tr>
                        <th class="text-start">Auto Savings (Multi Day Hire)</td>
                        <td class="text-end">£-{{ number_format($reservation->billing_savings, 2, '.', ',') }}</td>
                    </tr>
                    <tr>
                        <th class="text-start">Total</td>
                        <td class="text-end fw-bold">£{{ number_format($reservation->billing_total, 2) }}</td>
                    </tr>
                </tbody>
            </table>

        </div>
<!-- End Booking -->
 <!-- Location -->
        <div>
            <h2 class="text-h5 text-dark mb-3">The Location</h2>
            <h6 class="text-b3-semibold text-dark mb-2">Full Address:</h6>
            <p class="text-secondary text-opacity-75 mb-3">{{ $reservation->location->address }} ({{ $reservation->location->name }})</p>

            <div class="col-span-12">
                <div id="map">
                    <div class="map-marker" data-title="{{ $reservation->car->location->name }}" data-lat="{{ $reservation->car->location->lat }}" data-lng="{{ $reservation->car->location->lng }}"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
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
@endpush