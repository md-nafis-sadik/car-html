@extends('layouts.account')
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
    @php
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
    ])

    @foreach (['danger' => 'red', 'warning' => 'orange', 'success' => 'primary', 'info' => 'blue'] as $type => $color)
        @if(Session::has('alert-' . $type))
            <div class="sl:px-1 mt-4">
                <div class="bg-white border-{{ $color }}-500 text-{{ $color }}-900 border-l-4 p-4 rounded">
                    <p class="font-bold mb-0">{!! Session::get('alert-' . $type) !!}</p>
                </div>
            </div>
        @endif
    @endforeach


        @component('components.empty-state')
            <h5 class="text-white  text-md font-bold">

            </h5>
{{--            @slot('title', 'Manage Subscriptions')--}}


            <div class="flex flex-wrap gap-x-6 gap-y-4">


                <!-- The Vehicle -->
                <div>
                    <h1 class="text-white text-lg font-bold pb-4">
                      The Vehicle
                    </h1>

                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="flex-shrink-0">
                            <img src="{{ $reservation->car->main_image?->getUrl('thumb') }}" class="rounded" />
                        </div>


                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
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
                            @foreach ($features as $feature)
                                <div class="bg-[#F3F4F6] p-5 flex items-center gap-3 rounded-[13px]" data-aos="fade-up"
                                     data-aos-delay="{{ ($loop->index + 1) * 150 }}">
                                    <img src="{{ $feature->icon }}" alt="">
                                    <div class="flex flex-col gap-1">
                                        <p class="text-xs font-medium text-dark text-opacity-60">
                                            {{ $feature->name }}
                                        </p>
                                        <p class="text-base font-medium tetx-dark">
                                            {{ $feature->caption }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach

                            @php
                                $exampleFeatureList = ['USB Input', 'Radio', 'Parking Sensors'];
//                                $exampleFeatureList = ['USB Input', 'Radio', 'Parking Sensors', 'Bluetooth', 'GPS', 'Air Conditioning'];
                            @endphp
                            <div class="grid gap-4 mt-4">
                                @foreach ($exampleFeatureList as $list)
                                    <li class="flex items-start gap-3">
                                        <img src="{{ asset('assets/svgs/blue-check-square.svg') }}"  alt="">
                                        <p class="font-medium text-white text-[13px] max-w-[105px]">{{ $list }}</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                </div>

            </div>
                <!-- End The Vehicle -->

{{--            <div class="container mx-auto mt-10 p-6 border border-gray-100 text-white">--}}
{{--                <h2 class="text-2xl font-bold mb-4">The Booking</h2>--}}
{{--                <table class="table-auto w-full">--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th class="text-left text-lg font-medium pb-4">Item</th>--}}
{{--                        <th class="text-right text-lg font-medium pb-4">Price</th>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    <tr class="border-t border-gray-100">--}}
{{--                        <td class="pt-4 pb-2">Vehicle:</td>--}}
{{--                        <td class="pt-4 pb-2 text-right">{{ $reservation->car->name }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr class="border-t border-gray-100">--}}
{{--                        <td class="pt-2 pb-2">Pick Up & Drop Off Location:</td>--}}
{{--                        <td class="pt-2 pb-2 text-right">{{ $reservation->car->location->name }} ({{ $reservation->car->location->address }})</td>--}}
{{--                    </tr>--}}
{{--                    <tr class="border-t border-gray-300">--}}
{{--                        <td class="pt-2 pb-2">Pickup Date & Time:</td>--}}
{{--                        <td class="pt-2 pb-2 text-right">{{ \Carbon\Carbon::parse($reservation->pickup_date)->format('d M Y (h A)') }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr class="border-t border-gray-300">--}}
{{--                        <td class="pt-2 pb-2">Return Date & Time:</td>--}}
{{--                        <td class="pt-2 pb-2 text-right">{{ \Carbon\Carbon::parse($reservation->dropoff_date)->format('d M Y (h A)') }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr class="border-t border-gray-300">--}}
{{--                        <td class="pt-4 font-bold text-xl">Total</td>--}}
{{--                        <td class="pt-4 text-right font-bold text-xl">£4,000.00</td>--}}
{{--                    </tr>--}}
{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </div>--}}


            <!-- The Booking -->
            <div class="container mx-auto mt-10 p-6 border border-gray-100 text-white">
                <h2 class="text-2xl font-bold mb-4">The Booking</h2>
                <table class="table-auto w-full">
                    <thead>
                    <tr>
                        <th class="text-left text-lg font-medium pb-4">Item</th>
                        <th class="text-right text-lg font-medium pb-4">Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="border-t border-gray-300">
                        <td class="pt-4 pb-2 font-bold">
                            Vehicle:
                        </td>
                        <td class="pt-4 pb-2 text-right">
                            {{ $reservation->car->name }}
                        </td>
                    </tr>
                    <tr class="border-t border-gray-300">
                        <td class="pt-2 pb-2 font-bold">
                            Pick Up & Drop Off Location:
                        </td>
                        <td class="pt-2 pb-2 text-right">
                            {{ $reservation->car->location->name }} ({{ $reservation->car->location->address }})
                        </td>
                    </tr>
                    <tr class="border-t border-gray-300">
                        <td class="pt-2 pb-2 font-bold">
                            Pickup Date & Time:
                        </td>
                        <td class="pt-2 pb-2 text-right">
                            {{ \Carbon\Carbon::parse($reservation->pickup_date)->format('d M Y (h A)') }}
                        </td>
                    </tr>
                    <tr class="border-t border-gray-300">
                        <td class="pt-2 pb-2 font-bold">
                            Return Date & Time:
                        </td>
                        <td class="pt-2 pb-2 text-right">
                            {{ \Carbon\Carbon::parse($reservation->dropoff_date)->format('d M Y (h A)') }}
                        </td>
                    </tr>

                    <!-- The following sections will appear conditionally based on your reservation data -->
                    @if($reservation->billing_savings > 0)
                        <tr class="border-t border-gray-300">
                            <td class="pt-2 pb-2 font-bold">
                                Auto Savings (Multi Day Hire)
                            </td>
                            <td class="pt-2 pb-2 text-right">
                                £-{{ number_format($reservation->billing_savings, 2, '.', ',') }}
                            </td>
                        </tr>
                    @endif

                    @if($reservation->chauffeur_included)
                        <tr class="border-t border-gray-300">
                            <td class="pt-2 pb-2 font-bold">
                                Chauffeur
                            </td>
                            <td class="pt-2 pb-2 text-right">
                                £{{ number_format($reservation->chauffeur_price, 2, '.', ',') }}
                            </td>
                        </tr>
                    @endif

                    @if($reservation->billing_deposit > 1)
                        <tr class="border-t border-gray-300">
                            <td class="pt-2 pb-2 font-bold">
                                Refundable Deposit
                            </td>
                            <td class="pt-2 pb-2 text-right">
                                £{{ number_format($reservation->billing_deposit, 2) }}
                            </td>
                        </tr>
                    @endif

                    @if($reservation->billing_discount_code)
                        <tr class="border-t border-gray-300">
                            <td class="pt-2 pb-2 font-bold">
                                Discount ({{ $reservation->billing_discount_code }} - £{{ $reservation->billing_discount }} OFF)
                            </td>
                            <td class="pt-2 pb-2 text-right">
                                £-{{ number_format($reservation->billing_discount, 2, '.', ',') }}
                            </td>
                        </tr>
                    @endif
                    </tbody>
                    <tfoot>
                    <tr class="border-t border-gray-300">
                        <th class="text-left font-bold pt-4 pb-2">Total</th>
                        <td class="font-bold text-right pt-4 pb-2">
      <span class="Price-amount amount">
        £{{ number_format($reservation->billing_total, 2) }}
      </span>
                        </td>
                    </tr>
                    </tfoot>

                </table>
            </div>
            <!-- End Booking -->

            <!-- Location -->
            <div class="container mx-auto my-10 text-white">
                <div class="mt-[-1.25rem]">
                    <h1 class="text-white text-lg font-bold pb-4">
                        The Vehicle
                    </h1>
                    <p class="font-bold pl-[0.5rem]">Full Address:</p>
                    <p class="pl-[0.4rem] py-2">
                        <a href="https://www.google.com/maps/place/Autofusion+Repairs/@55.8939481,-4.3958794,17z/data=!3m1!4b1!4m5!3m4!1s0x48884f358029aa23:0x50a1fedd2c0cddf!8m2!3d55.8939481!4d-4.3936907" class="text-lg font-medium text-white capitalize text-opacity-80 hover:text-opacity-100 w-max" target="_blank">{{ $reservation->location->address }} ({{ $reservation->location->name }})</a>
                    </p>
                    <div class="col-span-12">
                        <div id="map">
                            <div class="map-marker" data-title="{{ $reservation->car->location->name }}" data-lat="{{ $reservation->car->location->lat }}" data-lng="{{ $reservation->car->location->lng }}"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Location -->
{{--                @foreach($subscriptions as $subscription)--}}
{{--                    @php--}}
{{--                        $status = '';--}}
{{--                        switch ($subscription->status) {--}}
{{--                            case 'active':--}}
{{--                                $status = 'Active';--}}
{{--                                break;--}}
{{--                            case 'pending':--}}
{{--                                $status = 'Pending';--}}
{{--                                break;--}}
{{--                            case 'expired':--}}
{{--                                $status = 'Expired';--}}
{{--                                break;--}}
{{--                            case 'cancelled':--}}
{{--                                $status = 'Cancelled';--}}
{{--                                break;--}}
{{--                        }--}}

{{--                        if($subscription->product->frequency == "lifetime") {--}}
{{--                            $routeLink = "";--}}
{{--                        } else {--}}
{{--                            $routeLink = "/account/subscriptions/$subscription->uuid";--}}
{{--                        }--}}
{{--                    @endphp--}}

{{--                    <div class="w-full md:w-1/4 lg:w-1/4 xl:w-1/4">--}}
{{--                        @include('components.reservation-card', [--}}
{{--                            'name' => $subscription->product->name,--}}
{{--                            'type' =>  $status,--}}
{{--                            'price' => number_format($subscription->price, 2, '.', ',') ,--}}
{{--                            'index' => $loop->index,--}}
{{--                            'details' => [--}}
{{--                                (object)[--}}
{{--                                    'name' => 'State Date:',--}}
{{--                                    'value' => \Carbon\Carbon::parse($subscription->start_date)->format('d M Y'),--}}
{{--                                ],--}}
{{--                                (object)[--}}
{{--                                    'name' => 'Renewal:',--}}
{{--                                    'value' => ($subscription->product->frequency == "lifetime") ? 'Lifetime' : \Carbon\Carbon::parse($subscription->renewal_date)->format('d M Y'),--}}
{{--                                ]--}}
{{--                            ],--}}
{{--                            'routeName' => "View",--}}
{{--                            'route' =>  $routeLink--}}
{{--                        ])--}}
{{--                    </div>--}}
{{--                @endforeach--}}
        @endcomponent
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
