@extends('layouts.account')
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
    @include('components.breadcrumb', [
       'items' => [
           ['title' => 'Account', 'url' => route('account')],
           ['title' => 'Profile']
       ]
   ])
    {{-- Nav Tabs --}}
    <ul class="pill-tabs-container" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
        <li role="presentation">
            <button class="nav-item" id="__bookings-tab" data-tabs-target="#__bookings" type="button" role="tab" aria-controls="__bookings" aria-selected="false">
                Bookings
            </button>
        </li>
        <li role="presentation">
            <a href="{{ route('account.documents') }}" class="nav-item" id="__id_docs-tab" data-tabs-target="#__id_docs" type="button" role="tab" aria-controls="__id_docs" aria-selected="false">
                ID Docs
            </a>
        </li>
    </ul>

    <div id="default-tab-content">
        <div class="hidden" id="__bookings" role="tabpanel" aria-labelledby="__bookings-tab">
            @if($reservations && count($reservations) > 0)
                @component('components.empty-state')
                    @slot('title', 'Bookings')
{{--                    @slot('caption', 'Bookings here.')--}}


                    <div class="flex flex-wrap gap-x-6 gap-y-4">
                        @foreach($reservations as $reservation)
                            <div class="w-full md:w-1/4 lg:w-1/4 xl:w-1/4">
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

                            </div>
                        @endforeach
                    </div>

                    <a href="{{ route('account.reservations') }}" class="btn btn-white mt-5">
                        View All Bookings
                    </a>
                @endcomponent
            @else
                @component('components.empty-state')
                    @slot('title', 'Bookings')
                    @slot('caption', 'You currently do not have any upcoming bookings.')
                    <a href="{{ route('account.reservations') }}" class="btn btn-white mt-5">
                        View All Bookings
                    </a>
                @endcomponent
            @endif
        </div>
        <div class="hidden" id="__id_docs" role="tabpanel" aria-labelledby="__id_docs-tab">
            <p class="text-sm text-white">
{{--                Loading ID Docs...--}}
            </p>
        </div>
    </div>
@endsection
