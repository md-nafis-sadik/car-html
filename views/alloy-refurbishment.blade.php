@extends('layouts.app')
@section('head-info')
    <title>Alloy Wheel Repairs & Refurbishment In Glasgow | {{ config('app.name') }}</title>
    <meta name="description" content="At Autofusion, we offer alloy wheel refurbishment for drivers in the Glasgow area from Clydebank to Paisley. " />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Alloy Wheel Repairs & Refurbishment In Glasgow | {{ config('app.name') }}" />
    <meta property="og:description" content="At Autofusion, we offer alloy wheel refurbishment for drivers in the Glasgow area from Clydebank to Paisley. " />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection
@section('main')
        @component('components.hero-section', [
            'name' => 'Alloy Refurbishment',
            'image' => 'https://autofusioncars.co.uk/images/manufacturer-heros/citroen.jpeg',
        ])
            @slot('caption')
                At Autofusion, we offer alloy wheel refurbishment for drivers in the <br class="desktop"> Glasgow area from Clydebank
                to Paisley.
            @endslot
            <div class="mt-5 mb-16">
                <a href="{{ route('contact') }}" class="btn btn-outline">
                    Request Quote
                </a>
            </div>
            @include('components.service-payment-info')
        @endcomponent

    <section class="dark-container mt-[76px]">
        <p class="max-w-[903px] text-white text-opacity-55 text-base sm:text-xl leading-7 font-medium text-center mx-auto"
           data-aos="fade-up">
            For many of us, keeping our cars in the best condition possible is a point of pride. We take every step that we can think of to make sure that our vehicles look as good as new every time we take them out on the road. However, it is a fact of life that we cannot stop them from getting the occasional scrape and ding. Maybe it’s a dent from a close-call collision. Maybe it’s a scratch from taking your car up a gravel road. Or maybe it’s a mysterious crack that you just can’t account for, but you know that you want it gone as quickly as possible.
            <br><br>
            We all know that it can be tricky to keep our alloy wheels in pristine condition. But that does not mean that we should not treat ourselves and our cars to a bit of refurbishment and proper care when we can. If you’ve recently noticed some damage to your wheels, you may have found yourself looking at whether bringing your car in for refurbishment is the best option.
        </p>
    </section>

    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            <img src="{{ asset('assets/images/alloy_refurbishment_1.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
            <div class="mt-10">
                @include('components.section-summary', [
                    'header' => 'What Is Alloy Wheel Refurbishment?',
                    'caption' =>
                        'Let’s start with the basics, shall we? Alloy wheel refurbishment simply means repairing your wheel alloys instead of replacing them. At Autofusion, we can take care of scratches, dings, dents, and other damage to your wheel alloys. The process begins by removing the tyre or tyres in question from your car. Then, we will give the wheel a deep clean. That means removing all the dirt, mud, debris, and grime from the wheel. If you have any dents or scratches on your wheel, these will be taken care of with filler.',
                    'textMedium' =>
                        'Then, your alloy wheel will be cured and sanded. The next step is applying the coat of paint, which we will consult you about. You can choose to match the colour of the wheels you already have in place, or you can go with something completely different. Finally, there’s lacquering, curing, and polishing to make sure that your alloy wheel is as shiny as it was the day that your car rolled off the production line.',
                ])
            </div>
        </div>
    </section>

    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            @include('components.section-summary', [
                'containerWidth' => 'max-w-[535px]',
                'header' => 'Which Is Better: Alloy Replacement Or Alloy Refurbishment?',
                'caption' =>
                    "If you have damage to your alloy wheels, then getting an alloy wheel refurbishment will be significantly cheaper than paying for an entirely new set. With a refurbishment, you can also make changes to the colour and choose from other customisation options. It is also worth noting that refurbishing your alloy wheels is not just about improving the way they look. You will be greatly improving their durability, so you do not need to worry about lasting damage.",
                'textMedium' =>
                    'However, it is important to note that severe damage to your alloy wheels may make refurbishment impossible. In this case, paying for alloy replacements is the only way to go.',
            ])
            <img src="{{ asset('assets/images/alloy_refurbishment_2.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
        </div>
    </section>

    <section class="dark-container !bg-[#F3F4F6] mt-11">
        <h4 class="text-3xl font-black text-center sm:text-5xl text-dark font-epilogue" data-aos="fade-up">
            Why Is Alloy Wheel Refurbishment Necessary?
        </h4>
        <p class="max-w-[903px] text-dark text-opacity-60 text-base sm:text-[23px] leading-7 font-medium text-center mx-auto mt-[30px] mb-[110px]"
           data-aos="fade-up">
            Even if you are not someone who places a great deal of value on how good your car looks on the outside, there are practical considerations that you need to be aware of. To start with, damage to your wheel alloys is the kind of thing that can impact the price of your car if you want to sell it. Even if you don’t mind driving around with a scuffed or scratched wheel alloy, it is the kind of the thing that buyers will definitely notice. So yes, it may be an investment now, but it could help you to make sure that you close that sale in the future.
        </p>

        <div class="grid md:grid-cols-2 justify-center items-center gap-[50px] xl:gap-24">
            <img src="{{ asset('assets/images/alloy_refurbishment_3.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
            @component('components.section-summary')
                @slot('caption')
                    <span class="text-dark">
                        The other thing to consider is that you may be experiencing greater tyre damage if you leave damage to your wheel alloys unattended. There are all sorts of dirt and debris that can work their way into any holes or scratches, not to mention brake dust. Additionally, if the alloy cracks while you are on the road, then it could do major damage to your tyre. Getting your alloy wheels refurbished is a lot cheaper and a lot less hassle than paying for an entirely new tyre. It is a good idea to bring your car in for regular checks of your tyres anyway, and wheel alloy maintenance is a big part of that.
                    </span>
                @endslot
            @endcomponent
        </div>
    </section>

    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px]">
            <div class="order-2 sm:order-1">
                @include('components.section-summary', [
                    'containerWidth' => 'max-w-[485px]',
                    'header' => 'How Does Damage To Wheel Alloys Come About?',
                    'caption' =>
                        'The way that most people damage their alloy wheels is by scraping them while parking up against the curb. Everyone knows the sound of that screech all too well, but a lot of the damage to your wheel alloys comes about from simple wear and tear.',
                    'textMedium' =>
                        'The reason why this happens so frequently is that your alloy wheels are made of a different kind of metal to the body of your car. The metal on alloy wheels is softer, designed specifically to improve the performance of your tires and to turn and bend more easily, as well as preventing your brakes from overheating. As a result, they can incur damage more easily.',
                ])
            </div>
            <img src="{{ asset('assets/images/alloy_refurbishment_4.png') }}" class="order-1 w-full h-auto sm:order-2 lg:-mt-32"
                 alt="" data-aos="zoom-in">
        </div>
    </section>

    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            <img src="{{ asset('assets/images/alloy_refurbishment_5.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
            <div class="relative top-20">
                @include('components.section-summary', [
                    'containerWidth' => 'max-w-[570px]',
                    'header' => 'Why Should I Pay For Expert Servicing?',
                    'caption' =>
                        'At Autofusion, we know how much your car means to you, and we know how important it is that you can rest assured that your car is operating at the highest level possible when it comes to safety and performance. When you bring your car in for alloy wheel replacement in Glasgow, we will give you the very best customer care and vehicle service.',
                    'textMedium' =>
                        'We will be able to advise you on how long the process is going to take (it can vary from case to case depending on the type and extent of the damage). We will also be able to take care of any other vehicle maintenance issue, including tyre realignment and vehicle servicing.',
                ])
            </div>
        </div>
    </section>

    <section class="dark-container mt-[76px]">
        <p class="max-w-[903px] text-white text-opacity-55 text-base sm:text-xl leading-7 font-medium text-center mx-auto"
           data-aos="fade-up">
            At Autofusion, we also take great pride in our expertise and customer service. We will give you honest answers about whether you should look at another tyre brand or whether servicing your existing tyres is the best way to go. Whether you are in Glasgow or the surrounding area, bring your car into Autofusion today for a service you can count on.
        </p>
    </section>

    @include('components.another-services')
@endsection
