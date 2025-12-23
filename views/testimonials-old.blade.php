@extends('layouts.frontend')
@section('head-info')
    <title>Testimonials - {{ config('app.name') }} Glasgow</title>
    <meta name="description" content="Our customers have great things to say about us." />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('/images/homepage-header.jpeg') }}" />
    <meta property="og:title" content="Testimonials - {{ config('app.name') }} Glasgow" />
    <meta property="og:description" content="Our customers have great things to say about us." />
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
            <section class="hero ch-bg--ac-black ch-color--white">
                <div class="ch-container">
                    <div class="ch-row">
                        <div class="sl:ch-col--8 sm:ch-col--6 md:ch-col--12">
                            <div class="ch-text--center sl:ch-text--left">
                                <h1 class="ch-fs--7 md:ch-fs--8 ch-text--center md:ch-pt--2">Testimonials</h1>
{{--                                <p class="ch-fs--3 ch-mb--4 ch-measure">Looking to hire a supercar? Or bumped, scratched or chipped your car? We're a leading car hire and repair garage based in Glasgow.</p>--}}
{{--                                <a href="{{ route('hire') }}" class="ch-btn ch-btn--cta ch-mb--2 sl:ch-mb--0 ch-width--12 sl:ch-width--auto ch-text--center">Hire a car</a>--}}
{{--                                <a href="{{ route('book') }}" class="ch-btn sl:ch-ml--2 ch-width--12 sl:ch-width--auto ch-text--center">Book a service</a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="ch-container">

                <div class="ch-row ch-mt--6 ch-mb--6">
                    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                    <div class="elfsight-app-793bd8a6-5fca-4b27-bbe1-7033adfb8dd0"></div>
                </div>

            </section>
        </div>
    </main>


    @include('partials.footer')



    <script type='text/javascript' src='/js/jquery.js'></script>
    <script type='text/javascript' src='/js/jquery-migrate.min.js'></script>
    </body>
@endsection
