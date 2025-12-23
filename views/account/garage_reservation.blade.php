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
    @include('components.breadcrumb', [
       'items' => [
           ['title' => 'Account', 'url' => route('account')],
           ['title' => 'Manage Booking']
       ]
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
            </div>
        @endcomponent
@endsection
