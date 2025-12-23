@extends('layouts.account')
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
    @include('components.breadcrumb', [
       'items' => [
           ['title' => 'Account', 'url' => route('account')],
           ['title' => 'Profile']
       ]
   ])
    {{-- Nav Tabs --}}

    <div class="flex flex-row justify-between">

        <ul class="pill-tabs-container" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
            <li role="presentation">
                <button class="nav-item" id="__bookings-tab" data-tabs-target="#__bookings" type="button" role="tab" aria-controls="__bookings" aria-selected="false">
                    Upcoming
                </button>
            </li>
            <li role="presentation">
                <button class="nav-item" id="__past_bookings-tab" data-tabs-target="#__past_bookings" type="button" role="tab" aria-controls="__past_bookings" aria-selected="false">
                    Past
                </button>
            </li>
        </ul>

        <div class="mt-4 px-1">
            <nav class="flex items-center mb-10">
                <select id="serviceType" name="serviceType" class="service-type-select border border-gray-300 rounded py-1 px-2" onchange="changeServiceType(this.value)">
                    <option value="">All Bookings</option>
                    {{-- <option @if($serviceType == "repairs") selected @endif value="repairs">Repairs Bookings</option> --}}
                    {{-- <option @if($serviceType == "hire") selected @endif value="hire">Hire Bookings</option> --}}
                </select>
            </nav>
        </div>
    </div>


    <div id="default-tab-content">
        <div class="hidden" id="__bookings" role="tabpanel" aria-labelledby="__bookings-tab">
            @if($upcomingReservations && count($upcomingReservations) > 0)
                @component('components.empty-state')
                    @slot('title', 'Upcoming<br> Bookings')
                    {{--                    @slot('caption', 'Bookings here.')--}}


                    <div class="flex flex-wrap gap-x-6 gap-y-4">
                        @foreach($upcomingReservations as $reservation)
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
                                        'route' =>  "/account/bookings/$reservation->reference"
                                    ])
                                @endif

                            </div>
                        @endforeach
                    </div>

{{--                    <a href="{{ route('account.reservations') }}" class="btn btn-white mt-5">--}}
{{--                        View All Bookings--}}
{{--                    </a>--}}
                @endcomponent
            @else
                @component('components.empty-state')
                    @slot('title', 'Upcoming Bookings')
                    @slot('caption', 'You currently do not have any upcoming bookings.')
                @endcomponent
            @endif
        </div>
        <div class="hidden" id="__past_bookings" role="tabpanel" aria-labelledby="__past_bookings-tab">
            @if($pastReservations && count($pastReservations) > 0)
                @component('components.empty-state')
                    @slot('title', 'Past <br>Bookings')
                    {{--                    @slot('caption', 'Bookings here.')--}}


                    <div class="flex flex-wrap gap-x-6 gap-y-4">
                        @foreach($pastReservations as $reservation)
                            <div class="w-full md:w-1/5 lg:w-1/5 xl:w-1/5">
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
                @endcomponent
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
