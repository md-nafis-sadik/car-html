@extends('layouts.account')
@section('head-info')
    <title>Subscriptions - {{ config('app.name') }}</title>
    <meta name="description" content="Manage subscriptions on your {{ config('app.name') }} account." />
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
           ['title' => 'Subscriptions']
       ]
   ])

    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))
            <div class="sl:px-1 mt-4">
                <div class="bg-{{ $msg }}-200 border-{{ $msg }}-500 text-{{ $msg }}-900 border-l-4 p-4 rounded">
                    <p class="font-bold mb-0">{!! Session::get('alert-' . $msg) !!}</p>
                </div>
            </div>
        @endif
    @endforeach

        @if($subscriptions && count($subscriptions) > 0)

            @component('components.empty-state')
                @slot('title', 'Manage <br> Subscriptions')
                {{--                    @slot('caption', 'Bookings here.')--}}


                <div class="flex flex-wrap gap-x-6 gap-y-4">
                    @foreach($subscriptions as $subscription)
                        @php
                            $status = '';
                            switch ($subscription->status) {
                                case 'active':
                                    $status = 'Active';
                                    break;
                                case 'pending':
                                    $status = 'Pending';
                                    break;
                                case 'expired':
                                    $status = 'Expired';
                                    break;
                                case 'cancelled':
                                    $status = 'Cancelled';
                                    break;
                            }

                            if($subscription->product->frequency == "lifetime") {
                                $routeLink = "";
                            } else {
                                $routeLink = "/account/subscriptions/$subscription->uuid";
                            }
                        @endphp

                        <div class="w-full md:w-1/4 lg:w-1/4 xl:w-1/4">
                            @include('components.reservation-card', [
                                'name' => $subscription->product->name,
                                'type' =>  $status,
                                'price' => number_format($subscription->price, 2, '.', ',') ,
                                'index' => $loop->index,
                                'details' => [
                                    (object)[
                                        'name' => 'State Date:',
                                        'value' => \Carbon\Carbon::parse($subscription->start_date)->format('d M Y'),
                                    ],
                                    (object)[
                                        'name' => 'Renewal:',
                                        'value' => ($subscription->product->frequency == "lifetime") ? 'Lifetime' : \Carbon\Carbon::parse($subscription->renewal_date)->format('d M Y'),
                                    ]
                                ],
                                'routeName' => "View",
                                'route' =>  $routeLink
                            ])
                        </div>
                    @endforeach
                </div>
            @endcomponent



        @else
        @component('components.empty-state')
            @slot('title', 'Manage <br> Subscriptions')
            @slot('caption', 'You currently do not have any subscriptions.')
        @endcomponent
    @endif
@endsection
