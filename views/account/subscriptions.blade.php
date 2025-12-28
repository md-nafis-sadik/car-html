@extends('layouts.account-v2')
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
            <div class="btn__text">Subscriptions</div>
        </a>
    </div>

    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))
            <div class="px-3 mt-4">
                <div class="card border-{{ $msg }} border-start border-4">
                    <div class="card-body bg-{{ $msg }}-subtle text-{{ $msg }}-emphasis">
                        <p class="card-text mb-0 fw-bold">{!! Session::get('alert-' . $msg) !!}</p>
                    </div>
                </div>
            </div>
        @endif
    @endforeach

        @if($subscriptions && count($subscriptions) > 0)
                <div class="card p-4 p-lg-5 rounded-5">
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

                        <div class="row g-4">
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
            @slot('title', 'Manage Subscriptions')
            @slot('caption', 'You currently do not have any subscriptions.')
        @endcomponent
    @endif
@endsection
