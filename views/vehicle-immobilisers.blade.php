@extends('layouts.app')
@section('head-info')
    <title>Vehicle Immobilisers | Book Now with {{ config('app.name') }}</title>
    <meta name="description" content="The Gecko Protect Immobiliser is the most advanced security product on the market." />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Vehicle Immobilisers | Book Now with {{ config('app.name') }}" />
    <meta property="og:description" content="The Gecko Protect Immobiliser is the most advanced security product on the market." />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection
@section('main')
    @component('components.hero-section', [
        'name' => 'Vehicle Immobilisers',
        'image' => 'https://autofusioncars.co.uk/images/manufacturer-heros/volvo.jpeg',
    ])
        @slot('caption')
            We offer vehicle immobilisers as well as a wide range of security
            <br class="desktop">
            options for motorists in Glasgow and the greater Glasgow area.
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
            As drivers, we all take our car safety and security extremely seriously. Our cars are not just our property; for many of us, they are how we earn our living. They are how we care for our family and our loved ones. They are an essential part of getting through the day, and for business owners, they are one of the most crucial elements in keeping their company afloat.
            <br><br>
            These days it seems like car thieves are always one step ahead. We have all seen the statistics about car and vehicle theft over the last few years, and this is why it is so important that we all take all the necessary steps to keep our cars safe and secure. This is where vehicle immobilisers come in.
        </p>
    </section>
    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            @include('components.section-summary', [
                'containerWidth' => 'max-w-[535px]',
                'header' => 'What is a vehicle immobiliser?',
                'caption' =>
                    "Simply put, a vehicle immobiliser is there to stop your car from functioning if it notices that someone is trying to start your car when they are not authorised to do so. Modern cars are set up so that your key or fob communicates with your ECU.<br><br> That is short for Electrical Control Unit, which approves the car’s engine starting. If someone has broken into your car and they are trying to drive it without the unique code that is in your key or fob, then the ECU will not allow your car to start. Different immobilisers will do this in different ways, but the end result is the same.",
                'textMedium' =>
                    "A good immobiliser will also notify the car owner or the associated security provider that someone is attempting to move your car without permission. They may also trigger your car’s alarm.",
            ])
            <img src="{{ asset('assets/images/vehicle_immobilisers_1.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
        </div>
    </section>
@endsection
