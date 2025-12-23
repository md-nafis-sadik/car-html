@extends('layouts.frontend')
@section('head-info')
    <title>How A Car Works? | Learn with {{ config('app.name') }}</title>
    <meta name="description" content="Autofusion offers a comprehensive range of car repair services, car hire options, and exceptional customer support. Our expert technicians are equipped to handle any car-related issue, from routine maintenance to major repairs. We take pride in providing top-notch service that exceeds our customers' expectations." />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="How A Car Works? | Learn with {{ config('app.name') }}" />
    <meta property="og:description" content="Autofusion offers a comprehensive range of car repair services, car hire options, and exceptional customer support. Our expert technicians are equipped to handle any car-related issue, from routine maintenance to major repairs. We take pride in providing top-notch service that exceeds our customers' expectations." />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />

    <link href="{{ asset('css/chassis/chassis.css') }}" rel="stylesheet" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" />

    <script src="{{ asset('js/chassis/chassis.js') }}"></script>
@endsection
@section('body')
    <body>
    @include('partials.header')

    <a class="ch-skip" href="#main">Skip to main content</a>
    <main id="main">
        <div id="main-section" class="ch-bg--white">
            <section class="hero ch-bg--ac-black ch-color--white" style="background:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url({{ asset("images/manufacturer-heros/bmw.jpeg") }}) center">
                <div class="ch-container">
                    <div class="ch-row">
                        <div class="sl:ch-col--8 sm:ch-col--6 md:ch-col--12">
                            <div class="md:ch-text--left xs:ch-text-center sl:ch-text--center">
                                <h1 class="ch-fs--7 md:ch-fs--8 sl:ch-text--center md:ch-text--left xs:ch-text--center">Learn</h1>
                                <p class="ch-fs--3 ch-mb--4 ch-measure ch-text--left">Our team is dedicated to keeping you informed on all aspects of cars, whether it's the latest news in the automotive industry, tips for maintaining your vehicle or just general advice on how to save money on future bills. At Autofusion, we’ve got you covered.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="ch-full-bleed">
                <div class="ch-container">
                    <div class="ch-row ch-mt--10 ch-mb--10 ch-text--center">

                        @foreach($posts as $post)
                            <div class="ch-col--4 md:ch-col--4 ch-mb--2">
                                <div class="ch-card">
                                    <a href="{{ $post->link() }}">
                                        <img class="ch-width--12 ch-auto" src="{{ $post->image->getUrl('thumb') }}" alt="{{ $post->title }} Image">
                                    </a>
                                    <div class="ch-card__content  ch-text--left">
                                        <a href="{{ $post->link() }}" class="ch-text-decoration--none"><h3 class="ch-fs--3 ch-text--bold">{{ $post->title }}</h3></a>
                                        <p class="ch-mb--1" style="min-height: 96px;">{{ substr(wordwrap(strip_tags($post->excerpt), 145, "...\n", true), 0, strpos(wordwrap(strip_tags($post->excerpt), 145, "...\n", true), "\n")) }}</p>
                                        <span class="text-base font-normal"><time datetime="{{ Carbon\Carbon::parse($post->created_at)->toIso8601String() }}">{{ Carbon\Carbon::parse($post->created_at)->format('D, d M Y') }}</time></span>
                                    </div>
                                </div>
                        </div>
                        @endforeach


{{--                        <h2 class="ch-text--bold">Road Safety</h2>--}}
{{--                        <p class="ch-fs--3">There is nothing more sobering than looking at the road accident statistics for the past year, and we know that around here, the driving conditions are often less than ideal. We believe that every driver needs to get proactive when it comes to road safety, and we have a range of different options to help you look after yours.</p>--}}
{{--                        <p class="ch-fs--3">We offer tyre checks to ensure that your car won’t lose its grip on the road surface. We can talk you through our range of winter tyres, which will keep you driving when the temperature drops below zero. We can also help you to make sure that your spare tyres are installed safely should you need to make a replacement in a hurry. When it comes to your annual MOT, we will help you to ensure that everything is working as it should be, from your brakes to your doors.</p>--}}
                    </div>
                </div>

                {{ $posts->links() }}
            </section>


        </div>
    </main>

    @include('partials.footer')

    <script type='text/javascript' src='/js/jquery.js'></script>
    <script type='text/javascript' src='/js/jquery-migrate.min.js'></script>
    </body>
@endsection
