@extends('layouts.app')
@section('head-info')
    <title>Cheap Tyres Glasgow | Low Prices & Free Fitting</title>
    <meta name="description" content="If you are looking for cheap tyres in Glasgow, we have a range of the most popular and best-reviewed tyres on the market." />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Cheap Tyres Glasgow | Low Prices & Free Fitting" />
    <meta property="og:description" content="If you are looking for cheap tyres in Glasgow, we have a range of the most popular and best-reviewed tyres on the market." />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection
@section('main')
    @component('components.hero-section', ['name' => 'Tyre Prices', 'image' => 'https://autofusioncars.co.uk/images/manufacturer-heros/peugeot.jpeg'])
        @slot('caption')
            If you are looking for cheap tyres in Glasgow, we have a range of <br class="desktop"> the most popular and best-reviewed tyres on the market.
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
            Our Glasgow-based experts can help you to fit your new tyres and talk you through the safety options that you need to consider. You should be getting your tyre pressure checked at least once every six months, but we are always available to offer detailed safety checks and repairs. It should be fairly easy to check if your tyres have lost their pressure and where the damage has been done.
        </p>
    </section>
    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            @include('components.section-summary', [
                'containerWidth' => 'max-w-[535px]',
                'header' => 'Affordable Tyres',
                'caption' =>
                    "Looking for new car tyres can be intimidating if you do now know what you are looking for. You do not want to be driving around with damaged or worn-out tyres, but you also want to make sure that you find the right fit for your car and for your budget.",
                'textMedium' =>
                    'If you are looking for cheap tyres in Glasgow, we have a range of the most popular and best-reviewed tyres on the market.',
            ])
            <img src="{{ asset('assets/images/tyre_prices_1.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
        </div>
    </section>
    @include('components.why-choose-autofusion-short-version')
    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            <img src="{{ asset('assets/images/tyre_prices_2.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
            <div class="mt-10">
                @include('components.section-summary', [
                    'header' => 'How Much Do Tyres Cost?',
                    'caption' =>
                        'The price of tyres will vary depending on a number of different factors, so there is no easy answer to “how much does a new tyre cost?” For example, a smaller tyre will generally cost less than a larger tyre for a bigger vehicle simply because there are fewer materials involved in making it.',
                    'textMedium' =>
                        'A smaller tyre will also be designed to carry less weight, and it will have a lower speed rating too. If you want to buy a tyre for a large 4x4 vehicle, then you will be looking at a higher price than you would for a smaller model.',
                ])
            </div>
        </div>
    </section>
    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            @include('components.section-summary', [
                'containerWidth' => 'max-w-[535px]',
                'header' => 'The Right Tyre For Your Car',
                'caption' =>
                    "You do not want to make the mistake of buying a cheap tyre that is not suitable for your car. Installing incompatible tyres on your vehicle will put you and other drivers at risk. You want to make sure that you find the right tyre for your car while staying within your price range.",
                'textMedium' =>
                    'We offer a wide range of tyres for cars of all shapes and sizes including all of the biggest brands. Our Glasgow garage can help you with Hankook, Pirelli, Michelin, Continental, Goodyear, Bridgestone and more.',
            ])
            <img src="{{ asset('assets/images/tyre_prices_3.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
        </div>
    </section>
    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            <img src="{{ asset('assets/images/tyre_prices_4.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
            <div class="mt-10">
                @include('components.section-summary', [
                    'header' => 'What About Cheaper Tyres?',
                    'caption' =>
                        'It is a misconception that cheaper tyres are not safe. Every tyre that we sell has passed the strict safety tests as set by the EU. However, it is true that the more expensive tyre manufacturers offer superior performance, and they will almost certainly be more durable.',
                    'textMedium' =>
                        'Whether you choose a budget tyre or something more expensive, you will be able to see a detailed breakdown of your new tyre’s anticipated performance on the label. This will detail the efficiency of the tyre, the noise levels that it creates, and the quality of its wet grip. <br> <a href="'.route('tyres.budget-tyres').'" class="text-link">Learn more about Budget Tyres</a>',
                ])
            </div>
        </div>
    </section>
    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            <div class="mt-10">
                @include('components.section-summary', [
                    'header' => 'What About Winter Tyres?',
                    'caption' =>
                        'Speaking of wet grip, we also offer all-weather tyres as well as winter tyres to keep you safe during the colder, wetter months. Winter tyres offer superior performance on icy roads, and they will stay flexible at temperatures that would harden non-seasonal tyres.',
                    'textMedium' =>
                        'These will be more expensive than their budget counterparts but will offer improved performance and safety. <br> <a href="'.route('tyres.winter-tyres').'" class="text-link">Learn more about Winter Tyres</a>',
                ])
            </div>
            <img src="{{ asset('assets/images/tyre_prices_5.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
        </div>
    </section>
    @include('components.another-services')
@endsection
