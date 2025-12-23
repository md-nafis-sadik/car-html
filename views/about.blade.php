@extends('layouts.app')
@section('head-info')
    <title>About us | {{ config('app.name') }} Glasgow</title>
    <meta name="description" content="Autofusion is proud to offer an expert car repairs service and unparalleled customer support." />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="About us | {{ config('app.name') }} Glasgow" />
    <meta property="og:description" content="Autofusion is proud to offer an expert car repairs service and unparalleled customer support." />
    <meta property="og:url" content="https://autofusionrepairs.co.uk/about" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection
@section('main')
    @component('components.hero-section', ['name' => 'About Us'])
        @slot('caption')
            Autofusion is proud to offer an expert car repairs <br class="desktop"> service, car hire and unparalleled
            customer support.
        @endslot
    @endcomponent
    <section class="mt-24 dark-container">
        <h4 class="font-semibold text-2xl sm:text-[35px] sm:leading-[40px] text-white max-w-[525px] text-center mx-auto mb-24" data-aos="fade-up">
            Our team specialise in vehicle
            repair and car hire Glasgow.
        </h4>

        @php
            $items = [
                (object) [
                    'value' => '15+',
                    'caption' => 'Vehicles Services & Maintained Daily',
                ],
                (object) [
                    'value' => '20+',
                    'caption' => 'Vehicles Available For Hire',
                ],
                (object) [
                    'value' => '1000+',
                    'caption' => 'Satisfied Customers',
                ],
            ];
        @endphp
        <div class="flex flex-wrap items-center justify-between max-w-[920px] mb-[74px] mx-auto gap-10 sm:gap-y-20 sm:gap-x-10">
            @foreach ($items as $item)
                <div class="flex flex-col items-center gap-5 sm:gap-10 max-w-[150px] sm:max-w-[235px] mx-auto" data-aos="fade-up">
                    <p class="text-white font-extrabold text-3xl sm:leading-[72px] sm:text-[65px] text-center">
                        {{ $item->value }}
                    </p>
                    <p class="text-sm font-medium text-center text-white sm:text-lg opacity-55">
                        {{ $item->caption }}
                    </p>
                </div>
            @endforeach
        </div>

        <p class="max-w-[735px] text-white text-opacity-55 text-base sm:text-base sm:text-[23px] leading-7 font-medium text-center mx-auto" data-aos="fade-up">
            We offer manufacturer servicing, car repairs, safety advice and MOT testing in Clydebank, and we are available
            to help drivers across the Glasgow area from the city to the surrounding towns.
        </p>
    </section>

    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            <div class="order-2 sm:order-1">
                @include('components.section-summary', [
                    'header' => 'Hassle free servicing/repairs',
                    'caption' =>
                        "We know that time is of the essence and that having your car out of action is more than just an inconvenience. If you need repairs made to your car, whether it's the brakes or the tyres, these can keep you from doing your work.",
                    'textMedium' =>
                        'It can put a strain on your driving team, and it comes with a host of additional stresses. When you are pushed for time and working to a tight budget, it’s the kind of thing that can make life incredibly difficult.',
                    'text' => 'There is never a good time to have a breakdown or to deal with a safety concern.',
                ])
            </div>
            <img src="{{ asset('assets/images/about_1.png') }}" class="order-1 w-full h-auto sm:order-2" alt="" data-aos="zoom-in">
        </div>
    </section>

    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            <img src="{{ asset('assets/images/about_2.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
            @include('components.section-summary', [
                'header' => 'A garage you can trust',
                'caption' =>
                    'We also know that there are a lot of garages out there and that it can be hard to tell the good from the bad. That is why we guarantee that we will use genuine manufacturer parts in any repairs or upgrades that we make, so you get the highest industry standard of repairs at an affordable price.',
                'textMedium' =>
                    'That is why we offer a range of different safety solutions, from the standard MOT checks to trackers to protect your car from theft.',
                'text' =>
                    'And that is why we have put together a range of different resources to help you learn more about the best ways to keep your vehicle in the best condition possible.',
            ])
        </div>
    </section>

    <section class="dark-container">
        <h4 class="text-3xl font-black text-center text-white sm:text-5xl font-epilogue" data-aos="fade-up">
            Road Safety
        </h4>
        <p
                class="max-w-[903px] text-white text-opacity-55 text-base sm:text-[23px] leading-7 font-medium text-center mx-auto mt-[30px] mb-[110px]" data-aos="fade-up">
            There is nothing more sobering than looking at the road accident statistics for the past year, and we know that around here, the driving conditions are often less than ideal. We believe that every driver needs to get proactive when it comes to road safety, and we have a range of different options to help you look after yours.
        </p>

        <div class="grid md:grid-cols-2 justify-center items-center gap-[50px] xl:px-24">
            @component('components.section-summary')
                @slot('caption')
                    <span class="text-white">
                        We offer tyre checks to ensure that your car won’t lose its grip on the road surface. We can talk you
                        through our range of winter tyres, which will keep you driving when the temperature drops below zero.
                    </span>
                @endslot
                @slot('textMedium')
                    <span class="text-white text-opacity-40">
                        It can put a strain on your driving team, and it comes with a host of additional stresses. When you are
                        pushed for time and working to a tight budget, it’s the kind of thing that can make life incredibly
                        difficult.
                    </span>
                @endslot
                @slot('text')
                    <span class="text-white text-opacity-40">
                        There is never a good time to have a breakdown or to deal with a safety concern.
                    </span>
                @endslot
            @endcomponent
            <img src="{{ asset('assets/images/about_3.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
        </div>
    </section>

    <section class="dark-container !bg-[#F3F4F6] mt-11">
        <h4 class="text-3xl font-black text-center sm:text-5xl text-dark font-epilogue" data-aos="fade-up">
            Vehicle Safety
        </h4>
        <p
                class="max-w-[903px] text-dark text-opacity-60 text-base sm:text-[23px] leading-7 font-medium text-center mx-auto mt-[30px] mb-[110px]" data-aos="fade-up">
            Of course, safety is about more than how your car performs on the road. As much as we all wish it were otherwise, car thieves are only getting more sophisticated. Keyless cars have made our lives easier in many ways, but many of the UK’s most popular keyless vehicles are at risk from theft. You may have heard about how relay theft crimes are on the rise, as car thieves can capture your car keys’ signal and can transmit it to gain access to your car in a matter of seconds.
        </p>

        <div class="grid md:grid-cols-2 justify-center items-center gap-[50px] xl:gap-24">
            <img src="{{ asset('assets/images/about_4.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
            @component('components.section-summary')
                @slot('caption')
                    <span class="text-dark">
                        Having your car stolen is such a difficult experience to go through, both in terms of emotional stress and financial difficulty. You may face losing your no-claims bonus and paying higher insurance premiums, not to mention the costs of renting a replacement car. There is the matter of losing any personal items that were inside the car, as well as dealing with the violation of a stranger coming into your life and stealing your property.
                    </span>
                @endslot
                @slot('textMedium')
                    <span class="text-[#393938]">
                        This is why we are so proud of the GeckoTrack vehicle trackers that we have on offer. The combination of GPS and LBS tracking means that even if the thief can block the GPS, the vehicle can still be traced. You will have 24/7 real-time information about exactly where your vehicle is, and you will receive an alert if someone tries to move your vehicle without your unique driver ID. You can also set up geofenced location markers to ping you if it moves in or out of your pre-set area, and operators are on hand 24/7 to notify the authorities in case of theft. Our vehicle trackers are Thatcham-approved, and we have options available for businesses to track each vehicle in their fleet.
                    </span>
                @endslot
            @endcomponent
        </div>
    </section>

    <section class="dark-container mt-11">
        <h4 class="text-3xl font-black text-center text-white sm:text-5xl font-epilogue" data-aos="fade-up">
            The Standards You Expect
        </h4>
        <p
                class="max-w-[903px] text-white text-opacity-55 text-base sm:text-[23px] leading-7 font-medium text-center mx-auto mt-[30px] mb-[110px]" data-aos="fade-up">
            When you bring your car to be serviced, you want to know that the technicians that you are entrusting it to and who are doing repairs understand exactly what they are doing and that they will give your vehicle the very best care. That is why we are committed to following manufacturer guidelines and only using genuine manufacturer parts for any servicing or repairs.
        </p>

        <div class="grid md:grid-cols-2 justify-center items-center gap-[50px] xl:px-24">
            @component('components.section-summary')
                @slot('caption')
                    <span class="text-white">
                        By doing so, we can give you the peace of mind that your vehicle will continue running exactly as well as you would expect it to. What’s more, you will avoid any issues with your warranty, and you will be able to keep that resale value up.
                    </span>
                @endslot
                @slot('textMedium')
                    <span class="text-white text-opacity-40">
                        It does not matter whether you have a Chevrolet that you are looking to keep in near-mint condition or a Ford Focus that you need to get up and running again as quickly as possible. All the cars we work on are given the same specialised treatment, no matter what repairs you need.
                    </span>
                @endslot
            @endcomponent
            <img src="{{ asset('assets/images/about_5.png') }}" class="w-full h-auto mt-32" alt="" data-aos="zoom-in">

            <div class="mt-3 md:col-span-2" data-aos="fade-right">
                <a href="#" class="btn btn-primary">
                    Explore Vehicle Servicing
                </a>
            </div>
        </div>
    </section>

    <section class="dark-container !bg-[#F3F4F6] mt-11">
        <h4 class="text-3xl font-black text-center sm:text-5xl text-dark font-epilogue" data-aos="fade-up">
            Our Commitment To You
        </h4>
        <p
                class="max-w-[903px] text-dark text-opacity-60 text-base sm:text-[23px] leading-7 font-medium text-center mx-auto mt-[30px] mb-[110px]" data-aos="fade-up">
            If you are looking for vehicle repair in Clydebank, Renfrew, Paisley, Scotstoun, Kelvindale, Finnieston, Partick, Broomhill, Anniesland, Anderson, Gorbals, Govan or anywhere in Glasgow from the eastend to the south side, visit Autofusion.
        </p>

        <div class="grid md:grid-cols-2 justify-center items-center gap-[50px] xl:px-24">
            <img src="{{ asset('assets/images/about_6.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
            @component('components.section-summary')
                @slot('caption')
                    <span class="text-dark">
                        Our team of expert technicians is ready and waiting to listen to any questions that you may have about the best way to keep your car maintained or how much you could be looking at paying for extensive repairs.
                    </span>
                @endslot
                @slot('textMedium')
                    <span class="text-[#393938]">
                        Whether you are dropping in for a quick check for your tyres or you want us to give your car a comprehensive safety and performance inspection, we are committed to giving you and your vehicle the very best service. We can help you to decide what kind of software upgrades and additional repairs you could make, but we will never try to sell you something that we don’t think will make your ride better.
                    </span>
                @endslot
                @slot('text')
                    <span class="text-[#393938]">
                        Our team provide a friendly service at a competitive price. We offer competitive prices and individual, customer-focused service. Bring your car into Autofusion today to find out how we can help you.
                    </span>
                @endslot
            @endcomponent
        </div>
    </section>

    <section class="dark-container mt-11 !bg-[#2C2F36]">
        <h4 class="text-3xl font-black text-center text-white sm:text-5xl font-epilogue" data-aos="fade-up">
            Quality trained technicians
        </h4>
        <p
                class="max-w-[903px] text-white text-opacity-55 text-base sm:text-[23px] leading-7 font-medium text-center mx-auto mt-5 mb-12" data-aos="fade-up">
            When you bring your car to be serviced, you want to know that the technicians that you are entrusting it to and who are doing repairs understand exactly.
        </p>

        <div class="flex items-center gap-[9px] flex-col sm:flex-row justify-center" data-aos="fade-up">
            <a href="{{ route('hire') }}" class="w-full btn btn-primary sm:w-auto">
                Hire a Car
            </a>
{{--            <a href="{{ route('book') }}" class="btn bg-white text-white bg-opacity-[0.11] w-full sm:w-auto">--}}
{{--                Book a service--}}
{{--            </a>--}}
        </div>
    </section>
@endsection
