@extends('layouts.app')
@section('head-info')
<title>UK #1 Fleet Tracking Provider | Book Now with {{ config('app.name') }}</title>
<meta name="description" content="With a good fleet tracker, you can rest assured that you can have instant alerts and round the clock monitoring. " />
<link rel="canonical" href="{{ request()->url() }}" />
<meta property="og:locale" content="en_GB" />
<meta property="og:type" content="website" />
<meta property="og:title" content="UK #1 Fleet Tracking Provider | Book Now with {{ config('app.name') }}" />
<meta property="og:description" content="With a good fleet tracker, you can rest assured that you can have instant alerts and round the clock monitoring." />
<meta property="og:url" content="{{ request()->url() }}" />
<meta property="og:site_name" content="{{ config('app.name') }}" />
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
<meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection
@section('main')
    @component('components.hero-section', [
        'name' => 'Fleet Trackers',
        'image' => 'https://autofusioncars.co.uk/images/manufacturer-heros/ford.jpeg',
    ])
        @slot('caption')
            With a good fleet tracker, you can rest assured that you can have
            <br class="desktop">
            instant alerts and round the clock monitoring.
        @endslot
        <div class="mt-5 mb-16">
            <a href="#formRequestQuote" class="btn btn-outline">
                Request Quote
            </a>
        </div>
        @include('components.service-payment-info')
    @endcomponent
    <section class="dark-container mt-[76px]">
        <p class="max-w-[903px] text-white text-opacity-55 text-base sm:text-xl leading-7 font-medium text-center mx-auto"
           data-aos="fade-up">
            The safety of your fleet is paramount, and every business owner wants reassurances that their vehicles are performing well on the road. You also want to know as soon as there is any kind of issue with theft or loss of a vehicle. As fleet tracking in Glasgow is our key focus, Autofusion understands the importance of choosing the right vehicle tracking solution. Here are just a few of the key benefits of car trackers.
        </p>
    </section>
    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            @include('components.section-summary', [
                'containerWidth' => 'max-w-[535px]',
                'header' => 'Approved By Thatcham',
                'caption' =>
                    "Any fleet owner knows that no security measure is truly up to scratch unless it has been Thatcham approved. The GeckoTrack technology has been pored over by the experts, and they have found it to be up to their high standards.",
                'textMedium' =>
                    "We offer insurance approved trackers in Glasgow, so you know your insurance company will accept your tracker. Most UK insurance companies will accept the car trackers we offer, so you'll have peace of mind that your business access are protected.",
            ])
            <img src="{{ asset('assets/images/fleet_trackers_1.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
        </div>
    </section>
    @include('components.did-you-know-2')
    {{-- Main features --}}
    @include('components.main-features')
    {{-- Request Quote --}}
    <section class="py-20">
        <div class="relative min-h-dvh bg-no-repeat bg-cover bg-[url('/public/assets/images/garage-booking-background-1.png')] px-4 py-20" id="formRequestQuote">
            <div class="flex flex-col items-center justify-center gap-6">
                <a href="{{ route('home') }}" data-aos="fade-up">
                    <img src="{{ asset('assets/svgs/header_logo.svg') }}" class="w-auto h-7" alt="">
                </a>
                <p class="text-2xl font-semibold text-center text-white uppercase" data-aos="fade-up">
                    Request A Quote
                </p>
            </div>
            <form action="" method="POST" class="bg-[#d9d9d9] backdrop-blur bg-opacity-15 rounded-[14px] p-6 sm:px-8 sm:py-[34px] flex flex-col gap-6 max-w-3xl mx-auto w-full mt-12">
                @csrf
                @method('POST')
                <div class="flex flex-col gap-[10px]">
                    <label for="company_name" class="text-sm font-medium text-white sm:text-base">
                        Company Name <span class="text-danger">*</span>
                    </label>
                    <x-input-field type="text" name="company_name" placeholder="Your company name" />
                </div>
                <div class="flex flex-col gap-[10px]">
                    <label for="contact_name" class="text-sm font-medium text-white sm:text-base">
                        Contact Name <span class="text-danger">*</span>
                    </label>
                    <x-input-field type="text" name="contact_name" placeholder="Your contact name" />
                </div>
                <div class="flex flex-col gap-[10px]">
                    <label for="contact_position" class="text-sm font-medium text-white sm:text-base">
                        Contact Position <span class="text-danger">*</span>
                    </label>
                    <x-input-field type="text" name="contact_position" placeholder="Your contact position" />
                </div>
                <div class="flex flex-col gap-[10px]">
                    <label for="email_address" class="text-sm font-medium text-white sm:text-base">
                        Contact Email <span class="text-danger">*</span>
                    </label>
                    <x-input-field type="email" name="email_address" placeholder="example@example.com" />
                </div>
                <div class="flex flex-col gap-[10px]">
                    <label for="contact_phone" class="text-sm font-medium text-white sm:text-base">
                        Contact Phone <span class="text-danger">*</span>
                    </label>
                    <x-input-field type="number" name="contact_phone" />
                </div>
                <div class="flex flex-col gap-[10px]">
                    <label for="address" class="text-sm font-medium text-white sm:text-base">
                        Address <span class="text-danger">*</span>
                    </label>
                    <x-textarea className="min-h-28"></x-textarea>
                </div>
                <div class="flex flex-col gap-[10px]">
                    <label for="vehicle_quantity" class="text-sm font-medium text-white sm:text-base">
                        Vehicle Quantity <span class="text-danger">*</span>
                    </label>
                    <x-input-field type="number" name="vehicle_quantity" />
                </div>
                <div class="grid">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </section>
    <section class="dark-container !bg-[#F3F4F6] mt-11">
        <h4 class="text-3xl font-black text-center sm:text-5xl text-dark font-epilogue" data-aos="fade-up">
            Great Customer Service
        </h4>
        <p class="max-w-[903px] text-dark text-opacity-60 text-base sm:text-[23px] leading-7 font-medium text-center mx-auto mt-[30px] mb-[110px]"
           data-aos="fade-up">
            At Autofusion, we know that as a business leader, you can’t be watching your phone or tablet around the clock, but our team is on hand 24/7, every day of the week. GeckoTrack has operators on hand who will notify you the minute that something is out of the ordinary.
        </p>
        <div class="grid md:grid-cols-2 justify-center items-center gap-[50px] xl:gap-24">
            <img src="{{ asset('assets/images/fleet_trackers_2.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
            @component('components.section-summary')
                @slot('caption')
                    <span class="text-dark">
                        If someone does try to steal your vehicle, their team of operators will notify the police immediately, and they can use the trackers to make sure that the authorities know exactly where the vehicle is.
                    </span>
                @endslot
            @endcomponent
        </div>
    </section>
    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            <img src="{{ asset('assets/images/fleet_trackers_3.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
            <div class="relative top-20">
                @include('components.section-summary', [
                    'containerWidth' => 'max-w-[570px]',
                    'header' => 'Easy Fleet Management',
                    'caption' =>
                        'When you have a number of cars on the move at one time, it can be a hassle to log into individual trackers to get a proper update. With GeckoTrack TT, you can use one log-in to get the up-to-the-minute information that you need.',
                    'textMedium' =>
                        'You can also create easily digestible reports for the vehicle tracking data you want, which you can use to report to your senior management team or the police, should a theft occur.',
                ])
            </div>
        </div>
    </section>
@endsection
