@extends('layouts.app')
@section('head-info')
    <title>Winter Tyres | Fast & Free Fitting | Book Now With {{ config('app.name') }}</title>
    <meta name="description" content="Winter months can have a tremendous impact on road safety and regular tyres would start to struggle. Here are a few of the reasons why you should invest in winter tyres." />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Winter Tyres | Fast & Free Fitting | Book Now With {{ config('app.name') }}" />
    <meta property="og:description" content="Winter months can have a tremendous impact on road safety and regular tyres would start to struggle. Here are a few of the reasons why you should invest in winter tyres." />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection
@section('main')
    @component('components.hero-section', ['name' => 'Winter Tyres', 'image' => 'https://autofusioncars.co.uk/images/manufacturer-heros/skoda.jpeg'])
        @slot('caption')
            Winter months can have a tremendous impact on road safety and <br class="desktop"> regular tyres would start to
            struggle.
        @endslot
        <div class="mt-5 mb-16">
            <a href="{{ route('contact') }}" class="btn btn-outline">
                Get in touch
            </a>
        </div>
        @include('components.service-payment-info')
    @endcomponent
    <section class="dark-container mt-[76px]">
        <p class="max-w-[903px] text-white text-opacity-55 text-base sm:text-xl leading-7 font-medium text-center mx-auto"
           data-aos="fade-up">
            It is very rare that you will be looking at optimal driving conditions during the winter months. The weather can
            have a tremendous impact on road safety, as ice, snow, and sleet can turn the most trustworthy road surface into
            a dangerous challenge.
            <br><br>
            Even if your car is up to the required safety standard, regular tyres will start to struggle as soon as the
            weather gets very cold.
        </p>
    </section>
    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            @include('components.section-summary', [
                'containerWidth' => 'max-w-[535px]',
                'header' => 'Winter Tyres',
                'caption' =>
                    "Standard tyres can harden in cold weather, even in comparatively mild temperatures for the season, such as 7 degrees Celsius. When this occurs, your car’s ability to brake and keep its grip on the road is compromised. The best way to ensure your safety while driving in winter is by using winter tyres. These are designed specifically for cold temperatures and bad weather conditions, and they provide a significantly better grip on winter road surfaces.",
                'textMedium' =>
                    'As a result, drivers who use winter tyres are better protected and can enjoy a superior performance in less than perfect conditions. Here are a few of the reasons why you should invest in winter tyres.',
            ])
            <img src="{{ asset('assets/images/winter_tyres_1.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
        </div>
    </section>
    @include('components.why-choose-autofusion-short-version')
    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            <img src="{{ asset('assets/images/winter_tyres_2.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
            <div class="mt-10">
                @include('components.section-summary', [
                    'header' => 'Better Tread',
                    'caption' =>
                        'Winter tyres give you a better grip because they have a different tread pattern. The pattern that is used on these tyres features significantly more grooves (which are also known as sipes). That means that they can shake off water and slush more easily than their standard counterparts.',
                    'textMedium' =>
                        'The grooves on winter tyres also allow them to grind deeper into any snow and ice and give you much better traction on the road surface. This drastically reduces the risk of aquaplaning, as well as skidding on ice.',
                ])
            </div>
        </div>
    </section>
    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            @include('components.section-summary', [
                'containerWidth' => 'max-w-[535px]',
                'header' => 'Better Movement',
                'caption' =>
                    'Your winter tyres will have different rubber blocks to your summer tyres and will be a different tyre size. That means that they are specifically made to create more vibration. How does that help? It means that all the snow, ice and other debris that is picked up by your tyres when they are in motion is shaken loose instead of clinging on and clogging things up.',
                'textMedium' =>
                    'Summer tyres will not be able to do this, and they can be clogged up or worn completely smooth.',
            ])
            <img src="{{ asset('assets/images/winter_tyres_3.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
        </div>
    </section>
    <section class="dark-container !bg-[#F3F4F6] mt-11">
        <h4 class="text-3xl font-black text-center sm:text-5xl text-dark font-epilogue" data-aos="fade-up">
            Better Flexibility
        </h4>
        <p class="max-w-[903px] text-dark text-opacity-60 text-base sm:text-[23px] leading-7 font-medium text-center mx-auto mt-[30px] mb-[110px]"
           data-aos="fade-up">
            One of the best reasons to buy winter tyres is because they are quite simply made of superior materials. The compound that is used to make winter tyres contains a higher quantity of silica. Summer tyres will become hard and rigid in cold temperatures, and this is why you are much more likely to skid or slip on icy road surfaces.
        </p>
        <div class="grid md:grid-cols-2 justify-center items-center gap-[50px] xl:gap-24">
            <img src="{{ asset('assets/images/winter_tyres_4.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
            @component('components.section-summary')
                @slot('caption')
                    <span class="text-dark">
                        This flexibility is another reason why winter tyres stay more flexible and softer when the thermometer dips below zero, meaning that they can continue to hold their grip on the road. We all worry about our braking distance when the conditions are bad, and winter tyres will help to cut down on that loss.
                    </span>
                @endslot
            @endcomponent
        </div>
    </section>
    <section class="dark-container mt-[76px]">
        <p class="max-w-[903px] text-white text-opacity-55 text-base sm:text-xl leading-7 font-medium text-center mx-auto"
           data-aos="fade-up">
            You can find out more about how winter tyres can help you stay safe and talk about the best options for you at Autofusion. We can also show you our all-weather range of tyres and a variety of tyre sizes, which will give you year-round protection without needing to change your tyres. If you are looking for tyre service in Glasgow, do not hesitate to get in touch with us.
        </p>
    </section>
    @include('components.another-services')
@endsection
