@extends('layouts.app')
@section('head-info')
    <title>Vehicle Trackers Glasgow | Book Now with {{ config('app.name') }}</title>
    <meta name="description" content="Whether you are managing a fleet of vehicles or a single car, you want to know that you have taken every possible measure to ensure its safety. " />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Vehicle Trackers Glasgow | Book Now with {{ config('app.name') }}" />
    <meta property="og:description" content="Whether you are managing a fleet of vehicles or a single car, you want to know that you have taken every possible measure to ensure its safety. " />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection
@section('main')
    @component('components.hero-section', [
        'name' => 'Vehicle Tracking Platform',
        'image' => 'https://autofusioncars.co.uk/images/manufacturer-heros/mg.jpeg',
    ])
        @slot('caption')
            Whether you are managing a fleet of vehicles or a single car, <br class="desktop">
            you want to know that you have taken every possible measure to <br class="desktop"> ensure its safety.
        @endslot
        @include('components.form-booking-service', [
                    'action' => "/book/trackers/vrm",
                    'method' => "POST",
                ])
        @include('components.service-payment-info')
    @endcomponent

    <section class="dark-container mt-[76px]">
        <p class="max-w-[903px] text-white text-opacity-55 text-base sm:text-xl leading-7 font-medium text-center mx-auto"
           data-aos="fade-up">
            Vehicle tracking is one of the best ways to protect your business and your property, and with GeckoTrack Pro, you can monitor tracking and activity in real-time. This platform takes so many of the headaches out of tracking a number of different vehicles by presenting the information you need in an easily digestible format.
        </p>
    </section>
    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            @include('components.section-summary', [
                'containerWidth' => 'max-w-[535px]',
                'header' => 'How Does It Work?',
                'caption' =>
                    "The GeckoTrack Pro car tracker allows you to make flexible report templates based on your specific needs. You can choose to set up scheduled reports, or you can simply use the monitoring panel to create them with a single click. It is so easy to study charts with message point tracing, zoom and auto-scaling, and you can use a scalable map with geofences, event markers and tracks.",
                'textMedium' =>
                    'You can set specific time limitations, interval filtration, and multi-level grouping and sorting to stay on top of your data management. This platform will help you to improve efficiency in your business and make sure that you are keeping your operational costs down. Most importantly of all, it will allow you to keep your vehicles safe and secure.',
            ])
            <img src="{{ asset('assets/images/repair_3.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
        </div>
    </section>
    @include('components.did-you-know-2')
    {{-- Main features --}}
    @include('components.main-features')
    <section class="dark-container !bg-[#F3F4F6] mt-11">
        <h4 class="text-3xl font-black text-center sm:text-5xl text-dark font-epilogue" data-aos="fade-up">
            What Does Vehicle Tracking Offer?
        </h4>
        <p class="max-w-[903px] text-dark text-opacity-60 text-base sm:text-[23px] leading-7 font-medium text-center mx-auto mt-[30px] mb-[110px]"
           data-aos="fade-up">
            Vehicle tracking options go far beyond offering you something as simple as a GPS signal. You will be able to monitor the performance of your entire fleet across a range of different metrics. You can track driving time, the amount of time spent idling, the fuel consumption of each vehicle, the mileage incurred on each journey, the maximum speed reached by each vehicle, as well as the average, and you can set up geofence markers to your preference.
        </p>
        <div class="grid md:grid-cols-2 justify-center items-center gap-[50px] xl:gap-24">
            <img src="{{ asset('assets/images/repair_4.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
            @component('components.section-summary')
                @slot('caption')
                    <span class="text-dark">
                        You can monitor the behaviour of your drivers when it comes to both legal speed infractions and over-speeding. If you want to know if your drivers are prone to harsh cornering, harsh acceleration, or harsh braking, you can programme your tracker to alert you whenever this happens. You will be able to monitor the rest breaks and driving time of each of your drivers to make sure everyone is taking their required breaks.
                    </span>
                @endslot
                @slot('textMedium')
                    <span class="text-[#393938]">
                        When you set up geofences, you can be alerted whenever your vehicle or vehicles are moved out of the desired location, and you can set up checkpoints to monitor the efficiency of journeys.
                    </span>
                @endslot
            @endcomponent
        </div>
        <div class="flex justify-center mt-10">
            <a href="{{ route('book') }}" class="btn btn-primary">Book Tracker Installation</a>
        </div>
    </section>
    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px]">
            <div class="order-2 sm:order-1">
                @include('components.section-summary', [
                    'containerWidth' => 'max-w-[485px]',
                    'header' => 'Why Does My Business Need Vehicle Tracking?',
                    'caption' =>
                        'By gathering data on everything from fuel consumption to drive times, you will be able to reduce your fuel costs and improve your drive routes. You will be able to see which of your drivers are meeting or exceeding their performance needs and which ones are lagging behind. Using a car tracking device is about so much more than safety and reducing vehicle theft; it is about making sure that your business is optimising efficiency and providing the best possible service to your clients.',
                    'textMedium' =>
                        "To learn more about how our GeckoTrack Pro platform could help your business and vehicle tracking in Glasgow and the surrounding area, contact us today. Autofusion has a wide range of services for businesses and consumers to keep them safe and on the road.",
                ])
            </div>
            <img src="{{ asset('assets/images/vehicle_tracking_platform_1.png') }}" class="order-1 w-full h-auto sm:order-2 lg:-mt-32"
                 alt="" data-aos="zoom-in">
        </div>
    </section>
@endsection
