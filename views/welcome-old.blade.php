@extends('layouts.app')
@section('head-info')
    <title>{{ config('app.name') }} | Car Hire & Vehicle Repair In Glasgow</title>
    <meta name="description" content="As a leading garage in Glasgow, at Autofusion, we can provide a range of services to keep your vehicle safe, secure and at peak performance." />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('/images/heroes/about.jpeg') }}" />
    <meta property="og:title" content="Autofusion | Car Hire & Vehicle Repair In Glasgow" />
    <meta property="og:description" content="As a leading garage in Glasgow, at Autofusion, we can provide a range of services to keep your vehicle safe, secure and at peak performance." />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="keywords" content="autofusion, garage in glasgow, independent garage, glasgow garages, budget tyres, car problems, new tyres, glasgow, car, cars, tyres, vans, vehicle, mots, autofusion hire, autofusion, car hire glasgow, local car hire firm, glasgow supercars, hire lamborghini"/>

    <link href="{{ asset('css/chassis/chassis.css') }}" rel="stylesheet" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" />

{{--    <link rel="stylesheet" media="screen" href="https://www.arnoldclark.com/assets/application-0e742996589c1286cbc1b341fa183d782ccb8aecbd87a25273dbc6fbffb98b45.css">--}}
{{--    <link rel="stylesheet" media="screen" href="https://www.arnoldclark.com/assets/homepage/index-c91b74ec9544cdab9fee29d48709564e731fc4b4cd334d41be28d0fae7f1f3ec.css">--}}


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
                        <h1 class="ch-fs--7 md:ch-fs--8">Autofusion Glasgow</h1>
                        <p class="ch-fs--3 ch-mb--4 ch-measure">Looking to hire a car or luxury vehicle? Or perhaps looking to service or fix your own car? We are a leading car hire and repair garage based in Glasgow!</p>
                        <a href="{{ route('hire') }}" class="ch-btn ch-btn--cta ch-mb--2 sl:ch-mb--0 ch-width--12 sl:ch-width--auto ch-text--center">Hire a car</a>
                        <a href="{{ route('book') }}" class="ch-btn sl:ch-ml--2 ch-width--12 sl:ch-width--auto ch-text--center">Book a service</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
        @if(nova_get_setting('promotion_header_enabled'))
            <div class="ac-search__banner js-off--hide">
                <div class="ch-container">
                    <div class="ac-promo__wrapper">
                        <div class="ac-promo--additional-banner">
                            <div class="ac-promo ac-promo--servicing-promo ch-bg--ac-yellow ch-color--black ch-bc--ac-yellow">
                                <p class="ch-flex--auto ch-mb--0">{{ nova_get_setting('promotion_header_text') }}</p></div>
                            <div class="ac-promo__additional-banner-message ch-bg--ac-black ch-display--flex ch-justify-content--center ch-align-items--center">
                                <p class="ch-color--white ch-text--bold ch-mb--0 ch-pt--1">Terms & conditions apply.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <section id="car-repair-services" class="ch-container">
            <div class="ch-row ch-mt--6 ch-mb--6 ch-text--center">

                <div class="md:ch-col--12 ch-mb--3">
                    <h2 class="ch-text--bold ch-mb--2">Looking to service your vehicle?</h2>
                    <p class="ch-pt--0 ch-mt--0 ch-fs--3">We know how important it is to know that your car is being taken care of. As a leading garage in Glasgow, at Autofusion, we can provide a range of services to keep your vehicle safe, secure and at peak performance.</p>
                    <p class="ch-pt--0 ch-mt--0 ch-fs--3">If you are in the greater Glasgow area and exploring Glasgow garages, we are here to provide you with expertise, excellent customer service and years of experience. Whether you are a business owner looking for better security for your fleet of vehicles, or you are simply looking for advice on new tyres for your car, we will help you get on the road quickly and comfortably.</p>
                </div>

                    <div class="xs:ch-col--12 sm:ch-col--4 ch-col--3" id="servicing_manufacturer">
                        <a class="manufacturer car-type" title="More about servicing" href="{{ route('servicing') }}">
                            <div class="manufacturer__content car-type__content">
                                <img class="manufacturer__content__img" src="/images/services/servicing.jpg" alt="Servicing">
                                <h4 class="manufacturer__content__title car-type__title car-type__title--bold ch-fs--3">Servicing</h4>
                            </div>
                        </a>
                    </div>
                    <div class="xs:ch-col--12 sm:ch-col--4 ch-col--3" id="servicing_manufacturer">
                        <a class="manufacturer car-type" title="More about MOT" href="{{ route('mot') }}">
                            <div class="manufacturer__content car-type__content">
                                <img class="manufacturer__content__img" src="/images/services/mot.jpg" alt="MOTs">
                                <h4 class="manufacturer__content__title car-type__title car-type__title--bold ch-fs--3">MOTs</h4>
                            </div>
                        </a>
                    </div>

                    <div class="xs:ch-col--12 sm:ch-col--4 ch-col--3" id="servicing_manufacturer">
                        <a class="manufacturer car-type" title="More about tyres" href="{{ route('tyres') }}">
                            <div class="manufacturer__content car-type__content">
                                <img class="manufacturer__content__img" src="/images/services/tyres.jpg" alt="Tyres">
                                <h4 class="manufacturer__content__title car-type__title car-type__title--bold ch-fs--3">Tyres</h4>
                            </div>
                        </a>
                    </div>

                <div class="xs:ch-col--12 sm:ch-col--4 ch-col--3" id="servicing_manufacturer">
                    <a class="manufacturer car-type" title="More about trackers" href="{{ route('trackers') }}">
                        <div class="manufacturer__content car-type__content">
                            <img class="manufacturer__content__img" src="/images/services/trackers.jpg" alt="Trackers">
                            <h4 class="manufacturer__content__title car-type__title car-type__title--bold ch-fs--3">Trackers</h4>
                        </div>
                    </a>
                </div>
                    <div class="xs:ch-col--12 sm:ch-col--4 ch-col--3" id="servicing_manufacturer">
                        <a class="manufacturer car-type" title="More about wheel alignment" href="{{ route('wheel-alignment') }}">
                            <div class="manufacturer__content car-type__content">
                                <img class="manufacturer__content__img" src="/images/services/wheel-alignment.jpg" alt="Wheel Alignment">
                                <h4 class="manufacturer__content__title car-type__title car-type__title--bold ch-fs--3">Wheel Alignment</h4>
                            </div>
                        </a>
                    </div>
                    <div class="xs:ch-col--12 sm:ch-col--4 ch-col--3" id="servicing_manufacturer">
                        <span class="manufacturer car-type" title="More about tuning (coming soon)" href="#">
                            <div class="manufacturer__content car-type__content">
                                <img class="manufacturer__content__img" src="/images/services/tuning.jpg" alt="Tuning">
                                <h4 class="manufacturer__content__title car-type__title car-type__title--bold ch-fs--3">Tuning (Coming Soon)</h4>
                            </div>
                        </span>
                    </div>

            </div>
        </section>
        <section class="bg-black ch-mt--6 ch-mb--6 ch-full-bleed">
            <div class="ch-container">
                <div class="ch-row ch-mt--10 ch-mb--6 ch-text--center text-white">
                    <h2 class="ch-text--bold">Why Choose Autofusion For Servicing</h2>
{{--                    <p class="ch-fs--3">We're a leading car hire company based in Glasgow.</p>--}}

                    <div class="ch-col--4 md:ch-col--4 ch-mt--2">
                        <img src="{{ asset('images/icons/car-2.svg') }}" alt="Wide Range Of Manufacturer Support" width="60">
                        <h5 class="ch-text--bold ch-mt--4">Wide Range Of Manufacturer Support</h5>
                        <p>When you bring your car into Autofusion, you never need to worry about whether our mechanics are going to be able to work on your car.</p>
                    </div>
                    <div class="ch-col--4 md:ch-col--4 ch-mt--2">
                        <img src="{{ asset('images/icons/smiley.svg') }}" alt="Personal Support" width="60">
                        <h5 class="ch-text--bold ch-mt--4">Personal Support</h5>
                        <p>At Autofusion, our expert staff provide personal support beyond taking your car in or finding you the right security option.</p>
                    </div>
                    <div class="ch-col--4 md:ch-col--4 ch-mt--2">
                        <img src="{{ asset('images/icons/heart.svg') }}" alt="Excellent Customer Service" width="60">
                        <h5 class="ch-text--bold ch-mt--4">Excellent Customer Service</h5>
                        <p>At Autofusion, we pride ourselves on helping drivers in and around Glasgow find what they are looking for and answering any questions ASAP.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="car-hire-brands" class="ch-container">
            <div class="ch-row ch-mt--6 ch-mb--6 ch-text--center">

                <div class="md:ch-col--12 ch-mb--3">
                    <h2 class="ch-text--bold ch-mb--2">Looking to hire a car?</h2>
                    <p class="ch-pt--0 ch-mt--0 ch-fs--3">Autofusion are Glasgow’s leading luxury and performance car hire company. We give you the opportunity to experience your high-end rental from the driver's seat or via our personal chauffeur service.</p>
                </div>

                @foreach($carBrands as $carBrand)
                    <div class="xs:ch-col--12 sm:ch-col--4 ch-col--3" id="servicing_manufacturer">
                        <a class="manufacturer car-type" title="More about servicing" href="/hire/cars?brand={{ $carBrand->slug }}">
                            <div class="manufacturer__content car-type__content">
                                <img class="manufacturer__content__img" src="{{ \Storage::url($carBrand->image) }}" alt="{{ $carBrand->name }}">
                                <h5 class="manufacturer__content__title car-type__title car-type__title--bold">{{ $carBrand->name }}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach

                <div class="md:ch-col--12 ch-mb--3">
                    <a href="{{ route('hire.cars') }}" class="ch-btn ch-btn--primary ch-mb--0">View All Cars</a>
                </div>
            </div>
        </section>
        <section id="car-hire-types" class="ch-container">
            <div class="ch-row ch-mt--6 ch-mb--6 ch-text--center">

                <div class="md:ch-col--12 ch-mb--3">
                    <h3 class="ch-text--bold ch-mb--0">Hire Cars by Type</h3>
                    <p class="ch-pt--0 ch-mt--0 ch-fs--3">We offer professional car hire services with our range of high-end vehicles.</p>
                </div>

                @foreach($carTypes as $carType)
                    <div class="xs:ch-col--12 sm:ch-col--4 ch-col--3" id="servicing_manufacturer">
                        <a class="manufacturer car-type" title="More about servicing" href="/hire/cars?type={{ $carType->slug }}">
                            <div class="manufacturer__content car-type__content">
                                <img class="manufacturer__content__img" src="{{ \Storage::url($carType->image) }}" alt="{{ $carType->name }}">
                                <h4 class="manufacturer__content__title car-type__title car-type__title--bold">{{ $carType->name }}</h4>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="bg-black ch-mt--6 ch-full-bleed">
            <div class="ch-container">
                <div class="ch-row ch-mt--10 ch-mb--6 ch-text--center text-white">
                    <h2 class="ch-text--bold">Why Choose Autofusion For Car Hire</h2>
                    <p class="ch-fs--3">We're a leading car hire company based in Glasgow.</p>

                    <div class="ch-col--4 md:ch-col--4 ch-mt--2">
                        <img src="{{ asset('images/icons/car-2.svg') }}" alt="Variety of Car Brands" width="60">
                        <h5 class="ch-text--bold ch-mt--4">Variety of Car Brands</h5>
                        <p>At Autofusion, we have a range of prestigious cars available to our customers. We cater for all occasions.</p>
                    </div>
                    <div class="ch-col--4 md:ch-col--4 ch-mt--2">
                        <img src="{{ asset('images/icons/smiley.svg') }}" alt="Prestige & Affordable" width="60">
                        <h5 class="ch-text--bold ch-mt--4">Prestige & Affordable</h5>
                        <p>We provide the best rates possible for our customers, allowing them the unique experiences in some of the world’ most prestigious cars.</p>
                    </div>
                    <div class="ch-col--4 md:ch-col--4 ch-mt--2">
                        <img src="{{ asset('images/icons/heart.svg') }}" alt="100% Customer Satisfaction" width="60">
                        <h5 class="ch-text--bold ch-mt--4">100% Customer Satisfaction</h5>
                        <p>We take pride in our customer service. A member of our team will be with you throughout your entire rental experience.</p>
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
