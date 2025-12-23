@extends('layouts.frontend')
@section('head-info')
    <title>Car Wheel Alignment Service | Book with {{ config('app.name') }}</title>
    <meta name="description" content="Ensuring that your wheels are properly aligned is a crucial part of good car maintenance. " />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Car Wheel Alignment Service | Book with {{ config('app.name') }}" />
    <meta property="og:description" content="Ensuring that your wheels are properly aligned is a crucial part of good car maintenance. " />
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
            <section class="hero ch-bg--ac-black ch-color--white" style="background:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url({{ asset("images/manufacturer-heros/jeep.jpeg") }}) center">
                <div class="ch-container">
                    <div class="ch-row">
                        <div class="sl:ch-col--8 sm:ch-col--6 md:ch-col--12">
                            <div class="md:ch-text--left xs:ch-text-center sl:ch-text--center">
                                <h1 class="ch-fs--7 md:ch-fs--8 sl:ch-text--center md:ch-text--left xs:ch-text--center">Wheel Alignment</h1>
                                <p class="ch-fs--3 ch-mb--4 ch-measure ch-text--left">Ensuring that your wheels are properly aligned is a crucial part of good car maintenance.</p>

                                <div class="ch-mt-4 ch-mb-4">
                                    <form action="/book/wheel-alignment/vrm" method="POST">
                                        @csrf
                                        <div class="ch-form__group md:ch-col--3 ch-pl--0">
                                            <input type="text" required="true" data-id="registrationInput" name="vehicleReg" placeholder="Enter vehicle reg" class="reg-input ch-form__control">
                                        </div>
                                        <div class="md:ch-col--3 ch-pl--0">
                                            <input type="submit" value="Start Booking" class="ch-btn ch-btn--cta ch-mb--2 sl:ch-mb--0 ch-width--12 sl:ch-width--auto ch-text--center"  data-label="Start Booking">
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ch-container" id="servicing_manufacturer">

                <div class="ch-row ch-mt--6 ch-mb--6 ch-text--center">
                    <p class="ch-fs--3">If your wheel alignment is off, then you run the risk of wearing down your tyres more quickly and losing crucial performance quality.</p>
                    <p class="ch-fs--3">With Autofusion’s Bluetooth Pro Wheel Aligner, we can make sure that your wheels are perfectly aligned quickly and easily. Our top Glasgow garage offers alignment, new tyres, and other tyre services using the latest technology for the following brands.</p>
                </div>
{{--                <div class="ch-row ch-mt--6 ch-mb--6 ch-text--center">--}}
{{--                    <h4 class="ch-fs-2 ch-text--bold">For each of the manufacturers listed below, learn more about our completely authorized servicing solutions</h4>--}}
{{--                </div>--}}
                <div class="ch-row ch-mt--6 ch-mb--6 ch-text--center">

                    @foreach($images as $image)

                        <div class="xs:ch-col--6 sm:ch-col--4 ch-col--3">
                            <a class="manufacturer" title="More about {{ pathinfo($image, PATHINFO_FILENAME) }} servicing" href="/wheel-alignment/{{ str_replace(".jpeg", "", $image->getFilename()) }}">
                                <div class="manufacturer__content">
                                    <img class="manufacturer__content__img" src="/images/manufacturers/{{ $image->getFilename() }}" alt="{{ $image }}">
                                    <h5 class="manufacturer__content__title">
                                        @if($image->getFilename() == "bmw.jpeg")
                                            <h3>BMW</h3>
                                        @else
                                            <h3>{{ ucwords(str_replace("-", " ", str_replace(".jpeg", "", $image->getFilename()))) }}</h3>
                                        @endif
                                    </h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

            </section>


            <section id="another-service-cta" class="ch-full-bleed">
                <div class="ch-text--center text-white">
                    <div class="md:ch-col--12 bg-black">
                        <div class="ch-pt--6 ch-pb--6">
                            <h3 class="text-white">Looking for another service?</h3>
                            <div class="mt-4 mb-4 grid">
                                <a href="{{ route('tyres') }}" class="ch-btn ch-btn--white ch-btn--ghost ch-ml--2">Tyres</a>
                                <a href="{{ route('mot') }}" class="ch-btn ch-btn--white ch-btn--ghost ch-ml--2">MOT</a>
                                <a href="{{ route('servicing') }}" class="ch-btn ch-btn--white ch-btn--ghost ch-ml--2">Servicing</a>
                                <a href="{{ route('trackers.vehicle-tracking-platform') }}" class="ch-btn ch-btn--white ch-btn--ghost ch-ml--2 md:ch-ml--2 sm:ch-ml--0 ch-mt--2 xs:ch-mt--2 sm:ch-mt--15">Vehicle Trackers</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>

    @include('partials.footer')

    <script type='text/javascript' src='/js/jquery.js'></script>
    <script type='text/javascript' src='/js/jquery-migrate.min.js'></script>
    </body>
@endsection
