@extends('layouts.account-v2')
@section('head-info')
    <title>Bookings - {{ config('app.name') }}</title>
    <meta name="description" content="Manage bookings on your {{ config('app.name') }} account." />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('/images/homepage-header.jpeg') }}" />
    <meta property="og:title" content="Bookings - {{ config('app.name') }}" />
    <meta property="og:description" content="Manage bookings on your {{ config('app.name') }} account." />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection
@section('main')
   
<div class="row mb-5 align-items-center justify-content-center justify-content-md-between gap-3">
    <div class="col-sm">
        <h3 class="text-b1-semibold d-flex align-items-center gap-3 text-light">
            <span class="oy-dashboard__toggler">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.75 1.25V18.25M0.75 7.15C0.75 4.91 0.75 3.79 1.186 2.934C1.56949 2.18139 2.18139 1.56949 2.934 1.186C3.79 0.75 4.91 0.75 7.15 0.75H12.35C14.59 0.75 15.71 0.75 16.566 1.186C17.3186 1.56949 17.9305 2.18139 18.314 2.934C18.75 3.79 18.75 4.91 18.75 7.15V12.35C18.75 14.59 18.75 15.71 18.314 16.566C17.9305 17.3186 17.3186 17.9305 16.566 18.314C15.71 18.75 14.59 18.75 12.35 18.75H7.15C4.91 18.75 3.79 18.75 2.934 18.314C2.18139 17.9305 1.56949 17.3186 1.186 16.566C0.75 15.71 0.75 14.59 0.75 12.35V7.15Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
            Profile
        </h3>
    </div>
    <div class="col-sm-auto">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="dashboard-tab-bookings" data-bs-toggle="tab" data-bs-target="#dashboard-tab-bookings-pane" type="button" role="tab" aria-controls="dashboard-tab-bookings-pane" aria-selected="true">Bookings</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="dashboard-tab-upcoming-bookings" data-bs-toggle="tab" data-bs-target="#dashboard-tab-upcoming-bookings-pane" type="button" role="tab" aria-controls="dashboard-tab-upcoming-bookings-pane" aria-selected="false">Upcoming Bookings</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="dashboard-past-booking" data-bs-toggle="tab" data-bs-target="#dashboard-past-booking-pane" type="button" role="tab" aria-controls="dashboard-past-booking-pane" aria-selected="false">Past Bookings</button>
            </li>
        </ul>
    </div>
</div>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="dashboard-tab-bookings-pane" role="tabpanel" aria-labelledby="dashboard-tab-bookings" tabindex="0">
        @if($upcomingReservations && count($upcomingReservations) > 0)
        <div class="card p-4 p-lg-5 rounded-5">
            <div class="d-flex justify-content-center justify-content-lg-between align-items-center gap-3 mb-4 mb-lg-5">
                <h2 class="text-h5 text-dark mb-3">All Bookings</h2>
            </div>
            <div class="row g-4">
                <!-- Booking Cards -->
                 @foreach($upcomingReservations as $reservation)
                    @if($reservation->type == "hire")
                        @php
                            if($reservation->payment_status == "unpaid" && ($reservation->status !== 'cancelled' && $reservation->status !== 'completed' )) {
                                $routeLink = "/account/reservations/$reservation->reference/pay";
                            } else {
                                $routeLink = "/account/bookings/$reservation->reference";
                            }
                            if($reservation->payment_gateway == "stripe" && $reservation->payment_status == "unpaid"  && ($reservation->status !== 'cancelled' && $reservation->status !== 'completed' )) {
                                $routeLink = "/account/reservations/$reservation->reference/pay";
                                $routeName = "Pay Now";
                            } elseif(!isset($reservation->dvla_licence_information?->valid_to) && !$reservation->chauffeur_included && $reservation->licence_check_required   && ($reservation->status !== 'cancelled' && $reservation->status !== 'completed' )) {
                                $routeLink = "/account/reservations/$reservation->reference/verify";
                                $routeName = "Verify Licence";
                            } else{
                                $routeLink = "/account/bookings/$reservation->reference";
                                $routeName = "View";
                            }
                        @endphp


                        @include('components.reservation-card', [
                            'name' => $reservation->reference,
//                                'thumbnail' => $reservation->car?->main_image?->getUrl('thumb'),
                            'type' =>  "Hire  | " . ucwords($reservation->status),
//                                        'type' =>  strtoupper("Hire  | " . ucwords($reservation->status)),
                            'price' => number_format($reservation->billing_total, 2, '.', ','),
                            'index' => $loop->index,
                            'details' => [
                                (object)[
                                    'name' => 'Pickup:',
                                    'value' => \Carbon\Carbon::parse($reservation->pickup_date)->format('d M Y (h A)'),
                                ],
                                (object)[
                                    'name' => 'Car:',
                                    'value' => $reservation->car->name,
                                ]
                            ],
                            'routeName' => $routeName,
                            'route' =>  $routeLink
                        ])
                    @else
                        @include('components.reservation-card', [
                            'name' => $reservation->reference,
//                                'thumbnail' => $reservation->car?->main_image?->getUrl('thumb'),
                            'type' =>  "Repairs  | " . ucwords($reservation->status),
                            'price' => number_format($reservation->billing_total, 2, '.', ','),
                            'index' => $loop->index,
                            'details' => [
                                (object)[
                                    'name' => 'Appointment:',
                                    'value' => \Carbon\Carbon::parse($reservation->booking_date_time)->format('d M Y (h A)'),
                                ],
                                (object)[
                                    'name' => 'Vehicle:',
                                    'value' => strtoupper($reservation->car->reg),
                                ]
                            ],
                            'route' =>  "/account/bookings/$reservation->reference"
                        ])
                    @endif
                @endforeach
            </div>
        </div>
        @else
            @component('components.empty-state')
                @slot('title', 'Bookings')
                @slot('caption', 'You currently do not have any upcoming bookings.')
            @endcomponent
        @endif
    </div>
    <div class="tab-pane fade" id="dashboard-tab-upcoming-bookings-pane" role="tabpanel" aria-labelledby="dashboard-tab-upcoming-bookings" tabindex="0">
        @if($upcomingReservations && count($upcomingReservations) > 0)
        <div class="card p-4 p-lg-5 rounded-5">
            <div class="d-flex justify-content-center justify-content-lg-between align-items-center gap-3 mb-4 mb-lg-5">
                <h2 class="text-h5 text-dark mb-3">All Bookings</h2>
            </div>
            <div class="row g-4">
                <!-- Booking Cards -->
                 @foreach($upcomingReservations as $reservation)
                    @if($reservation->type == "hire")
                        @php
                            if($reservation->payment_status == "unpaid" && ($reservation->status !== 'cancelled' && $reservation->status !== 'completed' )) {
                                $routeLink = "/account/reservations/$reservation->reference/pay";
                            } else {
                                $routeLink = "/account/bookings/$reservation->reference";
                            }
                            if($reservation->payment_gateway == "stripe" && $reservation->payment_status == "unpaid"  && ($reservation->status !== 'cancelled' && $reservation->status !== 'completed' )) {
                                $routeLink = "/account/reservations/$reservation->reference/pay";
                                $routeName = "Pay Now";
                            } elseif(!isset($reservation->dvla_licence_information?->valid_to) && !$reservation->chauffeur_included && $reservation->licence_check_required   && ($reservation->status !== 'cancelled' && $reservation->status !== 'completed' )) {
                                $routeLink = "/account/reservations/$reservation->reference/verify";
                                $routeName = "Verify Licence";
                            } else{
                                $routeLink = "/account/bookings/$reservation->reference";
                                $routeName = "View";
                            }
                        @endphp


                        @include('components.reservation-card', [
                            'name' => $reservation->reference,
//                                'thumbnail' => $reservation->car?->main_image?->getUrl('thumb'),
                            'type' =>  "Hire  | " . ucwords($reservation->status),
//                                        'type' =>  strtoupper("Hire  | " . ucwords($reservation->status)),
                            'price' => number_format($reservation->billing_total, 2, '.', ','),
                            'index' => $loop->index,
                            'details' => [
                                (object)[
                                    'name' => 'Pickup:',
                                    'value' => \Carbon\Carbon::parse($reservation->pickup_date)->format('d M Y (h A)'),
                                ],
                                (object)[
                                    'name' => 'Car:',
                                    'value' => $reservation->car->name,
                                ]
                            ],
                            'routeName' => $routeName,
                            'route' =>  $routeLink
                        ])
                    @else
                        @include('components.reservation-card', [
                            'name' => $reservation->reference,
//                                'thumbnail' => $reservation->car?->main_image?->getUrl('thumb'),
                            'type' =>  "Repairs  | " . ucwords($reservation->status),
                            'price' => number_format($reservation->billing_total, 2, '.', ','),
                            'index' => $loop->index,
                            'details' => [
                                (object)[
                                    'name' => 'Appointment:',
                                    'value' => \Carbon\Carbon::parse($reservation->booking_date_time)->format('d M Y (h A)'),
                                ],
                                (object)[
                                    'name' => 'Vehicle:',
                                    'value' => strtoupper($reservation->car->reg),
                                ]
                            ],
                            'route' =>  "/account/bookings/$reservation->reference"
                        ])
                    @endif
                @endforeach
            </div>
        </div>
        @else
            @component('components.empty-state')
                @slot('title', 'Bookings')
                @slot('caption', 'You currently do not have any upcoming bookings.')
            @endcomponent
        @endif
    </div>
    <div class="tab-pane fade" id="dashboard-past-booking-pane" role="tabpanel" aria-labelledby="dashboard-past-booking" tabindex="0">
         @if($pastReservations && count($pastReservations) > 0)
        <div class="card p-4 p-lg-5 rounded-5">
            <div class="d-flex justify-content-center justify-content-lg-between align-items-center gap-3 mb-4 mb-lg-5">
                <h2 class="text-h5 text-dark mb-3">Past Bookings</h2>
            </div>

            <div class="row g-4">
                @foreach($pastReservations as $reservation)
                                @if($reservation->type == "hire")
                                    @php
                                        if($reservation->payment_status == "unpaid" && ($reservation->status !== 'cancelled' && $reservation->status !== 'completed' )) {
                                            $routeLink = "/account/reservations/$reservation->reference/pay";
                                        } else {
                                            $routeLink = "/account/bookings/$reservation->reference";
                                        }

                                        if($reservation->payment_gateway == "stripe" && $reservation->payment_status == "unpaid"  && ($reservation->status !== 'cancelled' && $reservation->status !== 'completed' )) {
                                            $routeLink = "/account/reservations/$reservation->reference/pay";
                                            $routeName = "Pay Now";
                                        } elseif(!isset($reservation->dvla_licence_information?->valid_to) && !$reservation->chauffeur_included && $reservation->licence_check_required   && ($reservation->status !== 'cancelled' && $reservation->status !== 'completed' )) {
                                            $routeLink = "/account/reservations/$reservation->reference/verify";
                                            $routeName = "Verify Licence";
                                        } else{
                                            $routeLink = "/account/bookings/$reservation->reference";
                                            $routeName = "View";
                                        }
                                    @endphp


                                    @include('components.reservation-card', [
                                        'name' => $reservation->reference,
        //                                'thumbnail' => $reservation->car?->main_image?->getUrl('thumb'),
                                        'type' =>  "Hire  | " . ucwords($reservation->status),
//                                        'type' =>  strtoupper("Hire  | " . ucwords($reservation->status)),
                                        'price' => number_format($reservation->billing_total, 2, '.', ','),
                                        'index' => $loop->index,
                                        'details' => [
                                            (object)[
                                                'name' => 'Pickup:',
                                                'value' => \Carbon\Carbon::parse($reservation->pickup_date)->format('d M Y (h A)'),
                                            ],
                                            (object)[
                                                'name' => 'Car:',
                                                'value' => $reservation->car->name,
                                            ]
                                        ],
                                        'routeName' => $routeName,
                                        'route' =>  $routeLink
                                    ])
                                @else
                                    @include('components.reservation-card', [
                                        'name' => $reservation->reference,
//                                'thumbnail' => $reservation->car?->main_image?->getUrl('thumb'),
                                        'type' =>  "Repairs  | " . ucwords($reservation->status),
                                        'price' => number_format($reservation->billing_total, 2, '.', ','),
                                        'index' => $loop->index,
                                        'details' => [
                                            (object)[
                                                'name' => 'Appointment:',
                                                'value' => \Carbon\Carbon::parse($reservation->booking_date_time)->format('d M Y (h A)'),
                                            ],
                                            (object)[
                                                'name' => 'Vehicle:',
                                                'value' => strtoupper($reservation->car->reg),
                                            ]
                                        ],
                                        'routeName' => 'View',
                                        'route' =>  "/account/bookings/$reservation->reference"
                                    ])
                                @endif
                @endforeach
            </div>
        </div>
        @else
            @component('components.empty-state')
                @slot('title', 'Past Bookings')
                @slot('caption', 'You currently do not have any past bookings.')
            @endcomponent
        @endif
    </div>
</div>



    <script type="text/javascript">
        function changeServiceType(type) {
            // Update URL with changes
            var current_url = window.location.toString();
            var url = new URL(current_url);
            var search_params = url.searchParams;
            search_params.set('serviceType', type);
            url.search = search_params.toString();
            // window.history.pushState({}, null, url.toString());
            window.location.href = url;
        }
    </script>




@endsection
