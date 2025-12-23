@extends('layouts.frontend')
@section('head-info')
    <title>{{ config('app.name') }} | Prestigious &amp; Luxury Car Hire in Glasgow</title>
    <meta name="description" content="Glasgow's leading supercar and luxury car hire service. Self drive or chauffer driven for business, pleasure, weddings and events."/>
    <link rel="canonical" href="{{ request()->url() }}"/>
    <meta property="og:locale" content="en_GB"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="{{ asset('/images/homepage-header.jpeg') }}"/>
    <meta property="og:title" content="{{ config('app.name') }} Hire | Prestigious &amp; Luxury Car Hire in Glasgow"/>
    <meta property="og:description" content="View our fleet of performance, luxury and supercars available to hire."/>
    <meta property="og:url" content="{{ request()->url() }}"/>
    <meta property="og:site_name" content="{{ config('app.name') }}"/>
    <meta name="robots" content="index, follow"/>
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <meta name="keywords" content="autofusion hire, autofusion, car hire glasgow, local car hire firm, glasgow supercars, hire lamborghini"/>

    <link href="{{ asset('css/chassis/chassis.css') }}" rel="stylesheet"/>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet"/>
    <link rel='stylesheet' href='/css/themify-icons.css' type='text/css' media='all'/>
    <script src="{{ asset('js/chassis/chassis.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/plugins/photoswipe/photoswipe.css') }}">

@endsection
@section('body')
    <body>
    @include('partials.header')

    <a class="ch-skip" href="#main">Skip to main content</a>
    <main id="main">
        <div id="main-section" class="ch-bc--grey-3 ch-bg--grey-2">
            <div class="banner">
                <div class="banner__image">
                    <picture>
                        <source media="(min-width: 768px)" srcset="/images/20_.jpg"
                                type="image/webp">
                        <source media="(min-width: 576px)" srcset="/images/20_.jpg"
                                type="image/webp">
                        <source srcset="/images/20_.jpg" type="image/webp">
                        <source media="(min-width: 768px)" srcset="/images/20_.jpg">
                        <source media="(min-width: 576px)" srcset="/images/20_.jpg">
                        <source srcset="/images/20_.jpg">
                        <img alt="" src="/images/20_.jpg" width="1670" height="402">
                    </picture>
                </div>

                <div class="banner__content">
                    <div class="ch-container">
                        <h1 class="banner__heading">
                            <span class="ch-text--uppercase">Luxury & Performance </span>
                            <span class="ch-text--uppercase ch-color--ac-yellow">Car Rental</span>
                            <span class="banner__subheading ch-width--12">Glasgow's leading supercar and luxury car hire service. Self drive or chauffeur driven for business, pleasure, weddings and events.</span>
                        </h1>

                        <div>
                            <div class="ac-searchmask" data-reactroot="">
                                <form id="car_search_form" name="car_search_form" method="get" action="/hire/cars">
                                    {{--                                    <p class="ac-searchmask__heading">Let's--}}
                                    {{--                                        find your <span class="ch-color--ac-yellow">next car...</span></p>--}}
                                    <div class="ch-row ac-row--compact">
                                        <div class="ch-form__group xs:ch-col--12 sm:ch-col--3 ac-col--compact js-off--hide">
                                            <label class="ch-reader" for="make">Pickup Date</label>
                                            <input type="text" id="pickup_dropoff" name="pickup_dropoff"
                                                   placeholder="Choose Date Range"
                                                   value="@if(request()->has('pickup_dropoff')){{ request()->get('pickup_dropoff') }}@elseif(request()->session()->has('pickupDropoff')){{ request()->session()->get('pickupDropoff') }}@endif"
                                                   autocomplete="off" required class="ch-form__control sm:ch-fs--3 md:ch-fs--1"/>
                                            {{--                                            <span class="ti-calendar"></span>--}}

                                        </div>
                                        <div class="ch-form__group xs:ch-col--12 sm:ch-col--1 ac-col--compact js-off--hide">
                                            <label class="ch-reader" for="model">Pickup Time</label>
                                            <select class="ch-form__control sm:ch-fs--3 md:ch-fs--2 ch-bg--white ch-pr--0" id="pickup_time" name="pickup_time" style="padding-right: 0;background: white;"
                                                    required>
                                                <option @if(request()->get('pickup_time') == "09:00")selected
                                                        @endif value="09:00">09:00
                                                </option>
                                                <option @if(request()->get('pickup_time') == "10:00")selected
                                                        @endif value="10:00">10:00
                                                </option>
                                                <option @if(request()->get('pickup_time') == "11:00")selected
                                                        @endif value="11:00">11:00
                                                </option>
                                                <option @if(request()->get('pickup_time') == "12:00")selected
                                                        @endif value="12:00">12:00
                                                </option>
                                                <option @if(request()->get('pickup_time') == "13:00")selected
                                                        @endif value="13:00">13:00
                                                </option>
                                                <option @if(request()->get('pickup_time') == "14:00")selected
                                                        @endif value="14:00">14:00
                                                </option>
                                                <option @if(request()->get('pickup_time') == "15:00")selected
                                                        @endif value="15:00">15:00
                                                </option>
                                                <option @if(request()->get('pickup_time') == "16:00")selected
                                                        @endif value="16:00">16:00
                                                </option>
                                                <option @if(request()->get('pickup_time') == "17:00")selected
                                                        @endif value="17:00">17:00
                                                </option>
                                                <option @if(request()->get('pickup_time') == "18:00")selected
                                                        @endif value="18:00">18:00
                                                </option>
                                                <option @if(request()->get('pickup_time') == "19:00")selected
                                                        @endif value="19:00">19:00
                                                </option>
                                                <option @if(request()->get('pickup_time') == "20:00")selected
                                                        @endif value="20:00">20:00
                                                </option>
                                                <option @if(request()->get('pickup_time') == "21:00")selected
                                                        @endif value="21:00">21:00
                                                </option>
                                            </select>
                                        </div>
                                        <div class="ch-form__group xs:ch-col--12 sm:ch-col--3 ac-col--compact js-off--hide">
                                            <label class="ch-reader" for="type">Type</label>
                                            <select id="type" class="ch-form__control" name="type">
                                                <option value="">Any Type</option>
                                                @foreach($types as $type)
                                                    <option @if(request()->get('type') == $type->slug)selected
                                                            @endif  value="{{ $type->slug }}">{{ $type->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="xs:ch-col--12 sm:ch-col--3 ac-col--compact js-off--hide">
                                            <label class="ch-reader" for="sort_by">Price</label>
                                            <select id="sort_by" class="ch-form__control" name="sort_by">
                                                <option @if(request()->get('sort_by') == "price_low") selected
                                                        @endif value="price_low">Price Low to High
                                                </option>
                                                <option @if(request()->get('sort_by') == "price_high") selected
                                                        @endif value="price_high">Price High to Low
                                                </option>
                                            </select>
                                        </div>
                                        <div class="xs:ch-col--12 sm:ch-col--2 ac-col--compact">
                                            <button class="ch-btn ch-btn--cta ch-btn--block ch-mt--2 sm:ch-mt--0"
                                                    id="search-button" tabindex="0" type="submit">Search
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{--                    <div class="ac-trustpilot">--}}
                    {{--                        <p class="ch-fs--3 ch-mb--0 sl:ch-mr--4 ch-text--center ac-trustpilot__text">--}}
                    {{--                            Rated <span class="ch-text--bold">4.7</span> from <span class="ch-text--bold">106,667</span> reviews--}}
                    {{--                        </p>--}}

                    {{--                        <a href="https://www.trustpilot.com/review/www.arnoldclark.com" target="_blank" rel="noopener" class="ch-mr--2">--}}
                    {{--                            <img src="/assets/application/trustpilot/trustpilot-four-point-five-star-rating-66650df51acc2cccd3bd34d9c32dc1cd4b21d81dd4364adae92f37f07e88d2dd.svg" alt="">--}}
                    {{--                        </a>--}}

                    {{--                        <a href="https://www.trustpilot.com/review/www.arnoldclark.com" class="ac-trustpilot__logo" target="_blank" rel="noopener">--}}
                    {{--                            <span class="ch-reader">on Trustpilot</span>--}}
                    {{--                        </a>--}}
                    {{--                    </div>--}}

                </div>
            </div>
            <!-- Search Results -->
            <div id="search-results">
                <div class="ac-search" data-reactroot="">
                    {{--                    <div class="ac-search__banner js-off--hide">--}}
                    {{--                        <div class="ch-container">--}}
                    {{--                            <div class="ac-promo__wrapper">--}}
                    {{--                                <div class="ac-promo--additional-banner">--}}
                    {{--                                    <div class="ac-promo ac-promo--servicing-promo ch-bg--ac-yellow ch-color--black ch-bc--ac-yellow">--}}
                    {{--                                        <p class="ch-flex--auto ch-mb--0"><span class="ch-color--ac-black ch-text--bold">2 years’ free servicing</span> when you buy a used car!</p></div>--}}
                    {{--                                    <div class="ac-promo__additional-banner-message ch-bg--ac-black ch-display--flex ch-justify-content--center ch-align-items--center">--}}
                    {{--                                        <p class="ch-color--white ch-text--bold ch-mb--0">Plus get an <span class="ch-color--ac-yellow ch-text--bold">extra £500</span> --}}
                    {{--                                            when you part-exchange.</p><a class="gtm-track ac-promo__link ch-color--ac-black additional-banner-icon ch-ml--1" data-action="Clicked campaign banner CTA" data-category="UX - Campaign banner" data-label="add-promo" href="/voucher" target="_blank"><span class="ch-reader">Find out more</span></a></div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="search-header__main-wrapper">--}}
                    {{--                        <div class="search-header__main-header sticky">--}}
                    {{--                            <div class="search-header__actions"><label class="ch-btn ch-mr--auto search-header__sort-btn" for="sort-order">Sort<select class="ch-form__control" id="sort-order" name="sort_order">--}}
                    {{--                                        <option value="monthly_payment_up">Monthly payment (low to high)</option>--}}
                    {{--                                        <option value="monthly_payment_down">Monthly payment (high to low)</option>--}}
                    {{--                                        <option value="mileage">Mileage (low to high)</option>--}}
                    {{--                                        <option selected="" value="age">Age (new to old)</option>--}}
                    {{--                                        <option value="recently_added">Recently added</option>--}}
                    {{--                                    </select></label>--}}
                    {{--                                <div class="ch-display--none sm:ch-display--block"><h1 class="ch-h5 ch-mb--0">6 used--}}
                    {{--                                        Hyundai cars for sale</h1></div>--}}
                    {{--                                <button class="ch-btn ch-ml--auto search-header__filters-btn" type="button">Filter--}}
                    {{--                                    results<span class="ch-ml--1 ch-color--ac-blue"> (2)</span></button>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="search-header__sub-header ch-pv--2">--}}
                    {{--                        <div class="ch-container">--}}
                    {{--                            <div class="sm:ch-display--none"><h1 class="ch-h5 ch-mb--0">6 used Hyundai cars for--}}
                    {{--                                    sale</h1></div>--}}
                    {{--                            <div class="searchtags">--}}
                    {{--                                <p class="searchtags__count ac-hidden--sl ch-mb--0 ch-mr--4">Applied filters ( 2--}}
                    {{--                                     )--}}
                    {{--                                    <button class="ch-btn--link ch-pa--0 ch-ml--2 gtm-track js-off--hide" data-action="Reset filters" data-category="Search" data-label="Reset (searchtags)" type="button">Remove all--}}
                    {{--                                    </button>--}}
                    {{--                                </p>--}}
                    {{--                                <div class="searchtags__scroll-container">--}}
                    {{--                                    <ul class="searchtags__tag-list ch-mt--2 sm:ch-mt--0 js-off--hide">--}}
                    {{--                                        <li class="searchtag false">Electric</li>--}}
                    {{--                                        <li class="searchtag false">Hyundai</li>--}}
                    {{--                                    </ul>--}}
                    {{--                                    <noscript>--}}
                    {{--                                        <ul class="searchtags__tag-list ch-mt--2 sm:ch-mt--0">--}}
                    {{--                                            <li class="searchtag searchtag--noscript">Electric</li>--}}
                    {{--                                            <li class="searchtag searchtag--noscript">Hyundai</li>--}}
                    {{--                                        </ul>--}}
                    {{--                                    </noscript>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <div class="ch-container">
                        {{--                        <form action="/used-cars" class="js-on--hide ch-card ch-mt--4 ch-mb--4" id="search" method="get" name="search"><input type="hidden" name="utf8" value="✓">--}}
                        {{--                            <div class="ch-card__content filters__fallback">--}}
                        {{--                                <div class="ch-form__group "><label class="ch-form__control-label">Make<select class="ch-form__control" id="make" name="make">--}}
                        {{--                                            <option value="_all">All makes</option>--}}
                        {{--                                            <option value="abarth">Abarth</option>--}}
                        {{--                                            <option value="alfa romeo">Alfa Romeo</option>--}}
                        {{--                                            <option value="alpine">Alpine</option>--}}
                        {{--                                            <option value="audi">Audi</option>--}}
                        {{--                                            <option value="bmw">BMW</option>--}}
                        {{--                                            <option value="chevrolet">Chevrolet</option>--}}
                        {{--                                            <option value="citroen">Citroën</option>--}}
                        {{--                                            <option value="cupra">CUPRA</option>--}}
                        {{--                                            <option value="dacia">Dacia</option>--}}
                        {{--                                            <option value="ds">DS</option>--}}
                        {{--                                            <option value="fiat">Fiat</option>--}}
                        {{--                                            <option value="ford">Ford</option>--}}
                        {{--                                            <option value="honda">Honda</option>--}}
                        {{--                                            <option selected="" value="hyundai">Hyundai</option>--}}
                        {{--                                            <option value="infiniti">Infiniti</option>--}}
                        {{--                                            <option value="isuzu">Isuzu</option>--}}
                        {{--                                            <option value="jaguar">Jaguar</option>--}}
                        {{--                                            <option value="jeep">Jeep</option>--}}
                        {{--                                            <option value="kia">Kia</option>--}}
                        {{--                                            <option value="land rover">Land Rover</option>--}}
                        {{--                                            <option value="lexus">Lexus</option>--}}
                        {{--                                            <option value="mg">MG</option>--}}
                        {{--                                            <option value="mini">MINI</option>--}}
                        {{--                                            <option value="mazda">Mazda</option>--}}
                        {{--                                            <option value="mercedes-benz">Mercedes-Benz</option>--}}
                        {{--                                            <option value="mitsubishi">Mitsubishi</option>--}}
                        {{--                                            <option value="nissan">Nissan</option>--}}
                        {{--                                            <option value="peugeot">Peugeot</option>--}}
                        {{--                                            <option value="polestar">Polestar</option>--}}
                        {{--                                            <option value="porsche">Porsche</option>--}}
                        {{--                                            <option value="renault">Renault</option>--}}
                        {{--                                            <option value="seat">SEAT</option>--}}
                        {{--                                            <option value="skoda">ŠKODA</option>--}}
                        {{--                                            <option value="smart">smart</option>--}}
                        {{--                                            <option value="ssangyong">Ssangyong</option>--}}
                        {{--                                            <option value="subaru">Subaru</option>--}}
                        {{--                                            <option value="suzuki">Suzuki</option>--}}
                        {{--                                            <option value="tesla">Tesla</option>--}}
                        {{--                                            <option value="toyota">Toyota</option>--}}
                        {{--                                            <option value="vauxhall">Vauxhall</option>--}}
                        {{--                                            <option value="volkswagen">Volkswagen</option>--}}
                        {{--                                            <option value="volvo">Volvo</option>--}}
                        {{--                                        </select></label></div>--}}
                        {{--                                <div class="ch-form__group "><label class="ch-form__control-label">Model<select class="ch-form__control" id="model" name="model">--}}
                        {{--                                            <option selected="" value="_all">All models</option>--}}
                        {{--                                            <option value="bayon">Bayon</option>--}}
                        {{--                                            <option value="i10">i10</option>--}}
                        {{--                                            <option value="i20">i20</option>--}}
                        {{--                                            <option value="i30">i30</option>--}}
                        {{--                                            <option value="i30-fastback">I30 Fastback</option>--}}
                        {{--                                            <option value="i40">i40</option>--}}
                        {{--                                            <option value="ioniq">IONIQ</option>--}}
                        {{--                                            <option value="ioniq-5">IONIQ 5</option>--}}
                        {{--                                            <option value="ix20">ix20</option>--}}
                        {{--                                            <option value="ix35">ix35</option>--}}
                        {{--                                            <option value="kona">KONA</option>--}}
                        {{--                                            <option value="santa-fe">Santa Fe</option>--}}
                        {{--                                            <option value="tucson">Tucson</option>--}}
                        {{--                                        </select></label></div>--}}
                        {{--                                <button class="ch-btn ch-btn--cta" type="submit">Search</button>--}}
                        {{--                            </div>--}}
                        {{--                        </form>--}}
                        <div class="ac-results">


                        </div>
                    </div>

                </div>
            </div>

            <section id="car-hire-services" class="ch-container">
                <div class="ch-row ch-mt--6 ch-mb--6 ch-text--center">

                    <div class="md:ch-col--12 ch-mb--3">
                        <h2 class="ch-text--bold ch-mb--2">Welcome to Autofusion</h2>
                        <p class="ch-pt--0 ch-mt--0 ch-fs--3">Autofusion are Glasgow’s leading luxury and performance car hire company.
                            We give you the opportunity to experience your high-end rental from the drivers seat or via our personal chauffeur service.</p>
                    </div>


                    @foreach($brands as $carBrand)
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

            <section class="bg-black ch-full-bleed">
                <div class="ch-container">
                    <div class="ch-row ch-mt--10 ch-mb--6 ch-text--center text-white">
                        <h2 class="ch-text--bold">Car Hire In Glasgow</h2>
                        <p class="ch-fs--3">Hiring a car can be an ideal way to get around Glasgow if you’re taking a short break in the city. For residents, you can use services like Autofusion hire to rent supercars or test out the latest model before you buy it.</p>
                        <p class="ch-fs--3"> Whatever you need, we offer the very best of car hire in Glasgow. Our extensive range of models and superior customer service, as well as our close proximity to Glasgow airport and other local amenities, mean that we can meet the needs of every customer looking to hire a vehicle in our city. </p>
                        <p class="ch-fs--3">When you hire a car from Autofusion, you can choose to experience a new driving experience or choose our chauffeur service to get you where you need to be without the effort of driving yourself.</p>
                    </div>
                </div>
            </section>

            <section id="car-hire-types" class="ch-container">
                <div class="ch-row ch-mt--6 ch-mb--6 ch-text--center">

                    <div class="md:ch-col--12 ch-mb--3">
                        <h3 class="ch-text--bold ch-mb--0">Find Car by Type</h3>
                        <p class="ch-pt--0 ch-mt--0 ch-fs--3">We offer professional car hire services in our range of high-end vehicles</p>
                    </div>

                    @foreach($types as $carType)
                        <div class="xs:ch-col--12 sm:ch-col--4 ch-col--3" id="servicing_manufacturer">
                            <a class="manufacturer car-type" title="More about servicing" href="/hire/cars?type={{ $carType->slug }}">
                                <div class="manufacturer__content car-type__content">
                                    <img class="manufacturer__content__img" src="{{ \Storage::url($carType->image) }}" alt="{{ $carType->name }}">
                                    <h4 class="manufacturer__content__title car-type__title car-type__title--bold">{{ $carType->name }}</h4>
                                </div>
                            </a>
                        </div>
                    @endforeach

                    <p class="ch-pt--0 ch-mt--0 ch-fs--3">If you want to hire a car in Glasgow, then you can find the perfect vehicle for you from Autofusion and benefit from our wealth of expertise. Our experts have curated an extensive selection of premium vehicles ranging from supercars to family saloons, smart hatchbacks for the city or luxury 4x4s for offroading in the countryside.
                    </p>
                </div>
            </section>




            <section class="bg-black ch-mt--6 ch-full-bleed">
                <div class="ch-container">
                    <div class="ch-row ch-mt--10 ch-mb--6 ch-text--center text-white">
                        <h2 class="ch-text--bold">The Benefits Of Autofusion’s Car Hire Service</h2>
                        <p class="ch-fs--3">Explore our first class limousine & luxury car hire services</p>

                        <div class="ch-col--12 md:ch-col--12 ch-mt--6">
                            <div class="ch-col--12  md:ch-col--4 sm:ch-col--12">
                                <img src="{{ asset('images/icons/car-2.svg') }}" alt="Variety of Car Brands" width="60">
                            </div>
                            <div class=" ch-col--8  md:ch-col--8">
                                <h5 class="ch-text--bold ch-mt--4 md:ch-text--left sm:ch-text--center">A Specialist In Luxury Brands</h5>
                                <div class="ch-text--left">
                                    <p>Autofusion is a specialist in luxury car hire so that you can get the best selection of Glasgow supercars and premium vehicles. So, you can get the luxury car hire Glasgow service that you expect when you work with our team.
                                    </p>
                                    <p>Autofusion hire is one of the top Glasgow garages for luxury vehicles, and we have a range of options to suit every driver. All our vehicles are checked for safety, and we have a track record of delivering high-quality luxury cars to clients throughout Glasgow.</p>
                                </div>
                            </div>
                        </div>
                        <div class="ch-col--12 md:ch-col--12 ch-mt--4">
                            <div class="ch-col--12  md:ch-col--4 sm:ch-col--12" >
                                <img src="{{ asset('images/icons/smiley.svg') }}" alt="Prestige & Affordable" width="60">
                            </div>
                            <div class="ch-col--8  md:ch-col--8">
                                <h5 class="ch-text--bold ch-mt--4 md:ch-text--left sm:ch-text--center">A Wide Range Of Makes And Models To Hire</h5>
                                <div class="ch-text--left">
                                    <p>While premium brands are our speciality as a business, we cater to all drivers with our extensive range of cars for hire in Glasgow. That’s why we offer a variety of types of cars for hire so that you can hire a Lamborghini or a family sedan, depending on what you want from your rented wheels.</p>
                                    <p>We work with businesses as well as individuals and can hire out vans as well as cars of all sizes and types. Our premium car hire service covers a range of vehicles, and you can specify the functions and features you want from your rental car. We work tirelessly to accommodate every customer’s request and give them the best possible car rental experience at the right price.</p>
                                </div>
                            </div>
                        </div>

                        <div class="ch-col--12 md:ch-col--12 ch-mt--4">
                            <div class="ch-col--12  md:ch-col--4 sm:ch-col--12">
                                <img src="{{ asset('images/icons/heart.svg') }}" alt="100% Customer Satisfaction" width="60">
                            </div>
                            <div class="ch-col--8  md:ch-col--8">
                                <h5 class="ch-text--bold ch-mt--4 md:ch-text--left sm:ch-text--center">Full Customer Satisfaction Guaranteed</h5>
                                <div class="ch-text--left">
                                    <p>By working with a local car hire firm like us, you can get the best possible standard of service every time you rent a vehicle. Our team will help you to choose the right car to hire from our extensive collection, then walk you through how to make the most of it.</p>
                                    <p>Then we’ll send you off with a clean vehicle that’s ready to drive. If you have any issues while you’re out on the road, our team are available and will work with you to resolve your problem. Our staff will support you through the whole rental process from start to finish, so you get the best possible experience when you use our premium car rental service.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>

    {{--<!-- Begin mobile menu -->--}}
    {{--@include('partials.mobile-menu')--}}
    {{--<!-- End mobile menu -->--}}
    @include('partials.footer')

    {{--    <script type="module">--}}
    {{--        import PhotoSwipeLightbox from '{{ asset('js/plugins/photoswipe/photoswipe-lightbox.esm.min.js') }}';--}}
    {{--        import PhotoSwipe from '{{ asset('js/plugins/photoswipe/photoswipe.esm.min.js') }}';--}}
    {{--        const lightbox = new PhotoSwipeLightbox({--}}
    {{--            gallery: '#my-gallery',--}}
    {{--            children: 'a',--}}
    {{--            pswpModule: () => import('{{ asset('js/plugins/photoswipe/photoswipe.esm.min.js') }}')--}}
    {{--        });--}}
    {{--        lightbox.init();--}}
    {{--    </script>--}}

    <script>
        // $(function() {
        {{--    function openGallery(carID) {--}}
        {{--        $.getJSON('{{ config('app.url') }}/api/v1/hire/cars/' + carID + '/images', function (json) {--}}
        {{--            openPhotoSwipe(json);--}}
        {{--        });--}}
        {{--    }--}}

        // function openPhotoSwipe(jsonData) {
        //     var pswpElement = document.querySelectorAll('.pswp')[0];
        //
        //     // define options (if needed)
        //     var options = {
        //         // history & focus options are disabled on CodePen
        //         history: false,
        //         focus: false,
        //
        //         showAnimationDuration: 0,
        //         hideAnimationDuration: 0
        //
        //     };
        //
        //     var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, jsonData, options);
        //     gallery.init();
        // }
        // $('.element').off(); //in case it's a dynamically changing element
        // $('.element').on("click tap", function () {
        //     var dataForPhpScript = $(this).parents('.gallery').attr("data-attr"); //data for php script
        //
        //     $.getJSON('urlToPHPFunction?dataID=' + dataForPhpScript, function (json) {
        //         openPhotoSwipe(json);
        //     });
        // });
        // });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.9.1/dayjs.min.js"
            integrity="sha512-u7elBfdMr+7LhU4rvUk3IM28QZDKTyUxba4Nx2IJ1W9cj4shfRSPq7EZXD2ULD9cBoizw2FQyeR6YBog6LcnHg=="
            crossorigin="anonymous"></script>
    <script type='text/javascript'>
        jQuery(document).ready(function (jQuery) {
            // jQuery('input[name="pickup_dropoff_old"]').daterangepicker({
            //     // timePicker: true,
            //     // showWeekNumbers: true,
            //     // timePicker24Hour: true,
            //     // maxSpan: {
            //     //     "days": 7
            //     // },
            //     drops: "auto",
            //     linkedCalendars: false,
            //     changeMonth: false,
            //     // stepMonths: 0,
            //     // showDropdowns: true,
            //     minDate: moment().startOf('hour').add(1, 'hour').min(12, 'hour'),
            //     startDate: moment().startOf('hour'),
            //     endDate: moment().startOf('hour').add(7, 'day').add(1, 'hour'),
            //     // endDate: moment().startOf('hour').add(32, 'hour'),
            //     locale: {
            //         "fromLabel": "From",
            //         "toLabel": "To",
            //         "separator": " - ",
            //         // format: 'DD/MM'
            //         format: 'DD/MM/YY'
            //         // format: 'DD/MM/YY hh:mm A'
            //     },
            //     autoApply: true,
            // });

            jQuery.datepicker.setDefaults({
                "closeText": "Close",
                "currentText": "Today",
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                "nextText": "Next",
                "prevText": "Previous",
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "dateFormat": "MM d, yy",
                "firstDay": 1,
                "isRTL": false
            });
        });
    </script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/js/main.js"></script>

    <script type='text/javascript' src='/js/plugins/ui/datepicker.min.js'></script>
    <script type='text/javascript'>jQuery(document).ready(function (jQuery) {
            // var lastScrollTop = jQuery.cookie('last-scroll-top');
            var lastScrollTop = false;
            if (lastScrollTop) {
                jQuery(window).scrollTop(lastScrollTop);
                // jQuery.removeCookie('last-scroll-top');
            }
            var picker = new Litepicker({
                element: document.getElementById('pickup_dropoff'),
                firstDay: 1,
                showTooltip: false,
                singleMode: false,
                format: 'DD/MM/YYYY',
                minDate: moment().startOf('hour').add(3, 'hour').min(12, 'hour'),
                maxDays: 29,
                minDays: 2,
                selectForward: true,
                autoApply: true,
                moveByOneMonth: true,
                mobileFriendly: true,
                onSelect: function (date_start, date_end) {
                    checkAvailability();
                }
            });
            var checkAvailability = function () {
                // jQuery.cookie('last-scroll-top', jQuery(window).scrollTop());
                var form = document.getElementById('car_search_form');
                form.submit();
            };
        });</script>

    </body>
@endsection
