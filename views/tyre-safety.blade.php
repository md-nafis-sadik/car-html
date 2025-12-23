@extends('layouts.app')
@section('head-info')
    <title>Tyre Safety - {{ config('app.name') }}</title>
    <meta name="description" content="At Autofusion, we can provide a complete tyre safety check, and we can also offer you a tyre safety kit. " />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Tyre Safety - {{ config('app.name') }}" />
    <meta property="og:description" content="At Autofusion, we can provide a complete tyre safety check, and we can also offer you a tyre safety kit. " />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection
@section('main')
    @component('components.hero-section', ['name' => 'Tyre Safety', 'image' => 'https://autofusioncars.co.uk/images/manufacturer-heros/ds.jpeg'])
        @slot('caption')
            At Autofusion, we can provide a complete tyre safety check, and <br class="desktop"> we can also offer you a tyre safety kit.
        @endslot
        <div class="mt-5 mb-16">
            <a href="{{ route('contact') }}" class="btn btn-outline">
                Get in touch
            </a>
        </div>
        @include('components.service-payment-info')
    @endcomponent
    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            @include('components.section-summary', [
                'containerWidth' => 'max-w-[535px]',
                'header' => 'Tyre Safety',
                'caption' =>
                    "Tyre safety is one of the most important issues that any driver has to reckon with. You should be getting your tyres checked regularly to protect your vehicle, yourself, and any passengers. We are dedicated to helping you keep your tyres up to the legal standard for safety in the UK.",
                'textMedium' =>
                    'At Autofusion, we can provide a complete tyre safety check, and we can also offer you a tyre safety kit. We offer a range of tyre brands, ranging from cheap tyres to more expensive options, and we aim to provide an efficient service to clients throughout the Glasgow area.',
            ])
            <img src="{{ asset('assets/images/tyre_safety_1.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
        </div>
    </section>
    @include('components.why-choose-autofusion-short-version')
    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            <img src="{{ asset('assets/images/tyre_safety_2.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
            <div class="mt-10">
                @include('components.section-summary', [
                    'header' => 'Tyre Pressure',
                    'caption' =>
                        'Every car owner should be checking their tyre pressure on a monthly basis. Having the right tyre pressure is a performance issue (your car will be able to operate at its highest level when the tyres are correctly pressurised), but it is also a safety one.',
                    'textMedium' =>
                        'The right pressure level for your tyres should be located in your owner’s manual, but you may also be able to find it inside the doorjamb on the driver’s side or inside the petrol flap. If you have noticed that it keeps dropping, then you should make an appointment with our team. We will be able to identify the problem and whether it is an issue that can be repaired or if you need to replace your tyres.',
                ])
            </div>
        </div>
    </section>
    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            @include('components.section-summary', [
                'containerWidth' => 'max-w-[535px]',
                'header' => 'Tread Depth',
                'caption' =>
                    "Tread depth is absolutely crucial for road safety. Consider the fact that the only element of your car or truck that maintains consistent contact with the road surface is your tyres, and you will see why it is so important. The legal requirement for tread depth on any passenger car is set at 1.6mm.",
                'textMedium' =>
                    'If this number goes up, you run the risk of not being able to stop at the legal distance. In this scenario, you put other drivers at risk as well as yourself. If you want to do a quick check of your tread depth, then you can use a 20 pence piece to get an idea. However, the safest option is to bring your car in for a tyre safety check. We offer tyre service in Glasgow as well as other areas in the greater Glasgow region, including Clydebank.',
            ])
            <img src="{{ asset('assets/images/tyre_safety_3.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
        </div>
    </section>
    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            <img src="{{ asset('assets/images/tyre_safety_4.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
            <div class="mt-10">
                @include('components.section-summary', [
                    'header' => 'Tyre Compatibility',
                    'caption' =>
                        'You should always make sure that any new tyres on your car are not only compatible with your vehicle but with the other tyres already in place.',
                    'textMedium' =>
                        'Make sure that your new tyres match up with the rest, and check that they are in good condition. If you have any doubts about whether your tyres are compatible, then bring your car in for a tyre check.',
                ])
            </div>
        </div>
    </section>
    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            <div class="mt-10">
                @include('components.section-summary', [
                    'header' => 'Spare Tyres',
                    'caption' =>
                        'Keeping a spare tyre in your car boot is one of the most responsible steps that you can take when it comes to car safety, as long as you choose the right tyre.',
                    'textMedium' =>
                        'The UK does not require drivers to have a spare with them when they are on the road, but it will help you to avoid time-consuming and expensive issues if you break down in the middle of nowhere.',
                ])
            </div>
            <img src="{{ asset('assets/images/tyre_safety_5.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
        </div>
    </section>
    <section class="dark-container mt-[76px]">
        <p class="max-w-[903px] text-white text-opacity-55 text-base sm:text-xl leading-7 font-medium text-center mx-auto"
           data-aos="fade-up">
            If you are not sure what the best repair kit or spare for your car is, then visit us for a conversation. At Autofusion, we have a wide range of options, and we are ready to help with any queries.
        </p>
    </section>
    @include('components.another-services')
@endsection
