@extends('layouts.account-v2')
@section('head-info')
    <title>Manage Account - {{ config('app.name') }}</title>
    <meta name="description" content="From your account dashboard you can update your details, manage bookings, upload ID documents & more." />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('/images/homepage-header.jpeg') }}" />
    <meta property="og:title" content="Manage Account - {{ config('app.name') }}" />
    <meta property="og:description" content="From your account dashboard you can update your details, manage bookings, upload ID documents & more." />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection
@section('main')

    <div class="d-flex mb-5 align-items-center justify-content-between gap-10">
        <h3 class="text-b1-semibold d-flex align-items-center gap-3 text-light">
            <span class="oy-dashboard__toggler">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.75 1.25V18.25M0.75 7.15C0.75 4.91 0.75 3.79 1.186 2.934C1.56949 2.18139 2.18139 1.56949 2.934 1.186C3.79 0.75 4.91 0.75 7.15 0.75H12.35C14.59 0.75 15.71 0.75 16.566 1.186C17.3186 1.56949 17.9305 2.18139 18.314 2.934C18.75 3.79 18.75 4.91 18.75 7.15V12.35C18.75 14.59 18.75 15.71 18.314 16.566C17.9305 17.3186 17.3186 17.9305 16.566 18.314C15.71 18.75 14.59 18.75 12.35 18.75H7.15C4.91 18.75 3.79 18.75 2.934 18.314C2.18139 17.9305 1.56949 17.3186 1.186 16.566C0.75 15.71 0.75 14.59 0.75 12.35V7.15Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
            Profile
        </h3>
        <a href="#" class="btn text-b5-medium py-3 btn--gradient-primary">
            <div class="btn__text">Bookings</div>
        </a>
    </div>
        
        @if($reservations && count($reservations) > 0)
            <div class="card p-4 p-lg-5 rounded-5">
                <div class="d-flex justify-content-center justify-content-lg-between align-items-center gap-3 mb-4 mb-lg-5">
                    <h2 class="text-h5 text-dark mb-3">Bookings</h2>

                    <div class="d-none d-md-block">
                        <a href="{{ route('account.reservations') }}" class="btn btn--gradient-primary">
                            <div class="btn__text">View All Bookings</div>
                        </a>
                    </div>
                </div>
                <div class="row g-4">
                    @foreach($reservations as $reservation)
                        @php
                            // Determine route and button text based on reservation status
                            if($reservation->type == "hire") {
                                if($reservation->payment_gateway == "stripe" && $reservation->payment_status == "unpaid" && ($reservation->status !== 'cancelled' && $reservation->status !== 'completed')) {
                                    $routeLink = "/account/reservations/$reservation->reference/pay";
                                    $routeName = "Pay Now";
                                } elseif(!isset($reservation->dvla_licence_information?->valid_to) && !$reservation->chauffeur_included && $reservation->licence_check_required && ($reservation->status !== 'cancelled' && $reservation->status !== 'completed')) {
                                    $routeLink = "/account/reservations/$reservation->reference/verify";
                                    $routeName = "Verify Licence";
                                } else {
                                    $routeLink = "/account/bookings/$reservation->reference";
                                    $routeName = "View";
                                }
                                
                                $bookingType = "Hire | " . ucwords($reservation->status);
                                $bookingDetails = [
                                    (object)[
                                        'name' => 'Pick Up:',
                                        'value' => \Carbon\Carbon::parse($reservation->pickup_date)->format('d M Y (h A)'),
                                    ],
                                    (object)[
                                        'name' => 'Car:',
                                        'value' => $reservation->car->name,
                                    ]
                                ];
                            } else {
                                $routeLink = "/account/bookings/$reservation->reference";
                                $routeName = "View";
                                $bookingType = "Repairs | " . ucwords($reservation->status);
                                $bookingDetails = [
                                    (object)[
                                        'name' => 'Appointment:',
                                        'value' => \Carbon\Carbon::parse($reservation->booking_date_time)->format('d M Y (h A)'),
                                    ],
                                    (object)[
                                        'name' => 'Vehicle:',
                                        'value' => strtoupper($reservation->car->reg),
                                    ]
                                ];
                            }
                        @endphp

                        @include('components.reservation-card', [
                            'name' => $reservation->reference,
                            'type' => $bookingType,
                            'price' => number_format($reservation->billing_total, 2, '.', ','),
                            'index' => $loop->index,
                            'details' => $bookingDetails,
                            'routeName' => $routeName,
                            'route' => $routeLink
                        ])
                    @endforeach
                </div>
            </div>
        @else
            @component('components.empty-state')
                @slot('title', 'Bookings')
                @slot('caption', 'You currently do not have any upcoming bookings.')
                <a href="{{ route('account.reservations') }}" class="btn btn--gradient-primary">
                     <div class="btn__text">View All Bookings</div>
                </a>
            @endcomponent
        @endif
        <div class="d-block d-md-none mt-5">
            <a href="{{ route('account.reservations') }}" class="btn w-100 text-b5-medium py-3 btn--gradient-primary">
                <div class="btn__text">Bookings</div>
            </a>
        </div>
@endsection
