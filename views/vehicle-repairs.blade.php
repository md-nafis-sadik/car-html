@extends('layouts.app')
@section('head-info')
    <title>Vehicle Repairs Glasgow | Book Now With {{ config('app.name') }}</title>
    <meta name="description" content="At Autofusion, we work with several of the big insurance companies to help you regardless of whether you were the driver at fault or not. " />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Vehicle Repairs - {{ config('app.name') }}" />
    <meta property="og:description" content="At Autofusion, we work with several of the big insurance companies to help you regardless of whether you were the driver at fault or not. " />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection

@section('main')
    @component('components.hero-section', ['name' => 'Affordable Vehicle Repairs', 'image' => 'https://autofusioncars.co.uk/images/manufacturer-heros/mazda.jpeg'])
        @slot('caption')
            Autofusion is proud to offer an expert car repairs <br class="desktop"> service, car hire and unparalleled
            customer support.
        @endslot
        <div class="mt-5">
            <a href="{{ route('book') }}" class="btn btn-primary">
                Book a Repair
            </a>
        </div>
    @endcomponent

    <section class="dark-container mt-[76px]">
        <h4 class="text-3xl font-black text-center text-white sm:text-5xl font-epilogue" data-aos="fade-up">
            The right service for every situation
        </h4>
        <p class="max-w-[903px] text-white text-opacity-55 text-base sm:text-[23px] leading-7 font-medium text-center mx-auto mt-[30px] mb-[110px]"
           data-aos="fade-up">
            There is never a good time to need to bring your car in for repairs. In the best-case scenario, you may have noticed a minor issue slowly getting worse over time. In this instance, you will have taken your car to the garage to get it fixed before it becomes a major problem.
        </p>

        <div class="grid md:grid-cols-2 justify-center items-center gap-[50px] xl:px-24">
            @component('components.section-summary')
                @slot('caption')
                    <span class="text-white">
                        But things do not always work out that simply. If you have suffered an accident, you may be facing some serious damage that needs a lot of work. Or maybe something in your car will have broken without warning.
                    </span>
                @endslot
                @slot('textMedium')
                    <span class="text-white text-opacity-40">
                        Needing repair work for your car is a hugely stressful and difficult experience to go through, and at Autofusion, we know that all you want is to get your car fixed up and back on the road as soon as possible.
                    </span>
                @endslot
            @endcomponent
            <img src="{{ asset('assets/images/vehicle_repairs_1.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
        </div>
    </section>

    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            <img src="{{ asset('assets/images/vehicle_repairs_2.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
            <div class="mt-10">
                @include('components.section-summary', [
                    'header' => 'How Much Do Repairs Cost?',
                    'caption' =>
                        'The answer to this question is tricky as it depends entirely on the issue that is being repaired and the condition of the vehicle. However, our team will take care to explain any costs that you could be looking at before we start work so that you can make an informed decision.',
                    'textMedium' =>
                        'There will be no hidden costs, and we won’t add anything to the bill at the end that was not previously discussed. Of course, some car repair issues are bigger than others, and we will take each one on a case-by-case basis to make sure that we get to the root of the problem as quickly and efficiently as possible.',
                ])
            </div>
        </div>
    </section>

    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            @include('components.section-summary', [
                'containerWidth' => 'max-w-[535px]',
                'header' => 'Do You Use Authentic Manufacturer Parts?',
                'caption' =>
                    "Yes, we do. At Autofusion, we take great pride in using authentic manufacturer parts on any car that we service or repair. This means that you can keep your manufacturer's guarantee, and it will also help to keep the resale price of your car as high as possible.",
                'captionWidth' => 'max-w-[455px]',
                'textMedium' =>
                    'Get in touch if you want to double-check that we have the parts available for your make and model. So, whether you own an Audi or a Volvo, a Mercedes, or a Fiat, we can help you get back on the road as quickly as possible.',
            ])
            <img src="{{ asset('assets/images/vehicle_repairs_3.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
        </div>
    </section>

    @include('components.why-choose-autofusion')

    <section class="dark-container !bg-[#F3F4F6] mt-11">
        <h4 class="text-3xl font-black text-center sm:text-5xl text-dark font-epilogue" data-aos="fade-up">
            What Are The Most Common Car Repairs?
        </h4>
        <p class="max-w-[903px] text-dark text-opacity-60 text-base sm:text-[23px] leading-7 font-medium text-center mx-auto mt-[30px] mb-[110px]"
           data-aos="fade-up">
            The part of your car that is most commonly in need of repair is the clutch. This is because it is subjected to a
            lot of stress, wear, and tear during its lifespan, and over time it will begin to wear down. You can try to
            reduce the amount of pressure that you put it under, but this is an issue that will happen to most motorists at
            one point or another.
        </p>

        <div class="grid md:grid-cols-2 justify-center items-center gap-[50px] xl:gap-24">
            <img src="{{ asset('assets/images/vehicle_repairs_4.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
            @component('components.section-summary')
                @slot('caption')
                    <span class="text-dark">
                        You may notice that you find it tough to change gear if your car has a gearbox or that you hear a strange
                        noise while you are using the clutch. If this happens, bring your car into Autofusion as soon as possible.
                    </span>
                @endslot
                @slot('textMedium')
                    <span class="text-[#393938]">
                        Other common car repair issues include needing to have your cambelt replaced (if your car does not start,
                        this is one of the most likely reasons why). This is because the cambelt is, like your clutch, put under a
                        lot of strain, and there is only so much that rubber can take. Problems with brakes are also extremely
                        common. If something goes wrong with your brake pads or brake discs, then you need to bring your car in for
                        servicing and repair right away. You may also be surprised at how often motorists need a battery
                        replacement.
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
                    'header' => 'What Should I Do If My Car Has Been In An Accident?',
                    'caption' =>
                        'You should notify your insurance company as soon as possible if you have been involved in an accident. Remember that you should exchange information with the other driver if another driver was involved, as having their insurance info will help to get your claim processed more quickly.',
                    'textMedium' =>
                        'When you are making a claim, you will need to give your provider your information as well as the other party’s if possible. We will get in touch with your insurance provider to detail the specific repair work that is needed and the exact costs that are involved. If you are not sure about what you can charge to your insurance, contact our reliable mechanical experts.',
                ])
            </div>
            <img src="{{ asset('assets/images/vehicle_repairs_5.png') }}" class="order-1 w-full h-auto sm:order-2 lg:-mt-32"
                 alt="" data-aos="zoom-in">
        </div>
    </section>

    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            <img src="{{ asset('assets/images/vehicle_repairs_6.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
            <div class="relative top-20">
                @include('components.section-summary', [
                    'containerWidth' => 'max-w-[570px]',
                    'header' => 'How Can I Reduce The Chances Of My Car Needing Repairs?',
                    'caption' =>
                        'With a lot of the wear and tear issues, you can reduce the amount of damage to your car by driving less aggressively and putting less strain on areas like your tires, brakes, and belts. However, one of the best ways that you can put off expensive repairs to your car is by bringing your car in for regular servicing.',
                    'textMedium' =>
                        'At Autofusion, we can give your car the annual MOT check that is required by law, but we also offer comprehensive servicing to go over every nook and cranny of your vehicle. With regular servicing, you can identify potential issues before they become serious, and you can stay in control of your spending.',
                ])
            </div>
        </div>
    </section>

    @include('components.another-services')
@endsection
