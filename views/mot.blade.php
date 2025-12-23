@extends('layouts.app')
@section('head-info')
    <title>MOT Testing - Book Your MOT with Autofusion</title>
    <meta name="description" content="As the owner of a vehicle, it is your responsibility to make sure that your MOT is up to date. "/>
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="About us | {{ config('app.name') }} Glasgow" />
    <meta property="og:description" content="As the owner of a vehicle, it is your responsibility to make sure that your MOT is up to date. "/>
    <meta property="og:url" content="https://autofusionrepairs.co.uk/about" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection
@section('main')
    <header class="page-header">
        @component('components.hero-section', ['name' => 'Book Your Next MOT', 'image' => 'https://autofusioncars.co.uk/images/manufacturer-heros/bmw.jpeg'])
            @slot('caption')
                As the owner of a vehicle, it is your responsibility to make sure that <br class="desktop"> your MOT is up to date.
            @endslot
            <div class="mt-5 flex flex-col sm:flex-row gap-[9px] sm:items-center">
                @include('components.form-booking-service', [
                    'action' => "/book/mot/vrm",
                    'method' => "POST",
                ])
                <a href="https://www.gov.uk/check-mot-history" target="_blank" class="btn btn-outline sm:mt-[30px] mb-16">Check Due Date</a>
            </div>
            @include('components.service-payment-info')
        @endcomponent
    </header>

    <section class="dark-container mt-[76px]">
        <h4 class="text-3xl font-black text-center text-white sm:text-5xl font-epilogue" data-aos="fade-up">
            Get Your MOT in Glasgow: Ensuring Road Safety and the Best Deals
        </h4>
        <p class="max-w-[903px] text-white text-opacity-55 text-base sm:text-[23px] leading-7 font-medium text-center mx-auto mt-[30px] mb-[110px]"
           data-aos="fade-up">
            Your MOT is the annual check to make sure that your vehicle meets the UK standards for road safety and that it meets the environmental standards too. If you need an MOT in Glasgow, then we can help and ensure your car is always in a roadworthy condition and give you the best deal on our services.
        </p>

        <div class="grid md:grid-cols-2 justify-center items-center gap-[50px] xl:px-24">
            @component('components.section-summary')
                @slot('caption')
                    <span class="text-white">
                        Why Do I Need An MOT?
                    </span>
                @endslot
                @slot('textMedium')
                    <span class="text-white text-opacity-40">
                        If your MOT is out of date, then it is illegal for you to drive that car. It is your responsibility to make sure that you get your MOT check before the expiry date.
                        <br><br>
                        It’s worth remembering that you can bring your car in for an MOT test up to 28 days before the expiry date, and it will not change the date for the following year, so you can come back to our Glasgow garage at the same time next year and get a great deal on your MOT.
                    </span>
                @endslot
            @endcomponent
            <img src="{{ asset('assets/images/mot_1.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
        </div>
    </section>

    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            <img src="{{ asset('assets/images/mot_2.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
            <div class="mt-10">
                @include('components.section-summary', [
                    'header' => 'When Do I Need An MOT Test?',
                    'caption' =>
                        'If your car is three years old or more, then you need to get an MOT once a year. If you are not sure when your next MOT is due, then you can use your registration number and vehicle make on the government tool.',
                ])
                <a href="https://www.gov.uk/check-mot-history" target="_blank" class="mt-7 btn btn-primary">Check Due Date</a>
            </div>
        </div>
    </section>

    @include('components.why-choose-autofusion')

    <section class="dark-container !bg-[#F3F4F6] mt-11">
        <h4 class="text-3xl font-black text-center sm:text-5xl text-dark font-epilogue" data-aos="fade-up">
            What is checked during an MOT?
        </h4>
        <p class="max-w-[903px] text-dark text-opacity-60 text-base sm:text-[23px] leading-7 font-medium text-center mx-auto mt-[30px] mb-[110px]"
           data-aos="fade-up">
            When you bring your car in for an MOT test with our leading Glasgow-based garage, we will give the vehicle a thorough check. The short answer to the question “what is checked in an MOT?” is “everything” because it is crucial to make sure that every element of the vehicle is working safely and securely. We will test your brakes, your steering, your suspension, your exhaust, and much more besides. If any of these elements are not working up to the legal standard, we can advise you on the best course of action and how much you could be looking at paying for repairs.
        </p>

        <div class="grid md:grid-cols-2 justify-center items-center gap-[50px] xl:gap-24">
            <img src="{{ asset('assets/images/mot_3.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
            @component('components.section-summary')
                @slot('caption')
                    <span class="text-dark">
                        When it comes to exhaust, the emissions that your car creates will be measured against the legal limit. More recent models of cars are subject to more rigid standards than older ones, but it’s not all about black or grey smoke. If your exhaust is creating too much noise, then this could also lead to a failed test. When checking your vehicle, our Glasgow MOT experts will also look at any damage to your car’s body, specifically if there are any dents or weather damage that have created sharp edges. Remember that this could hurt a pedestrian or cyclist and will lead to a failed MOT. Excess rust damage may also be an issue, particularly when your vehicle is subject to the Glasgow weather.
                    </span>
                @endslot
                @slot('textMedium')
                    <span class="text-[#393938]">
                        Passenger safety is also a crucial element of the MOT test. Our Glasgow MOT experts will be checking that your doors, bonnet and tailgate all close and lock securely. Seatbelts will also be inspected to make sure that they are in good working condition.
                    </span>
                @endslot
            @endcomponent
        </div>

        <div class="flex justify-center mt-10">
            <a href="{{ route('book') }}" class="btn btn-primary">Check Availability</a>
        </div>
    </section>

    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px]">
            <div class="order-2 sm:order-1">
                @include('components.section-summary', [
                    'containerWidth' => 'max-w-[485px]',
                    'header' => 'What Should I Check Before An MOT?',
                    'caption' =>
                        'If you want to avoid failing an MOT and ensure your car meets the requirements, then remember that the most common causes of MOT failure are your light bulbs, headlamps, and poor tyre condition. Check your lightbulbs and headlamps regularly, and make sure that you are looking at the pressure of your tyres. The team at our leading Glasgow garage will be checking that the tyres are securely attached to your vehicle, and we’ll look at any damage, cracks, or cuts to them.',
                    'textMedium' =>
                        "Getting your MOT can be stressful, but you can rest assured that our Glasgow-based experts will give your car a thorough check to ensure that you are safe and that your car can get back out on the road as quickly as possible. If you are looking for an MOT in Glasgow, then get in touch with Autofusion today. We're one of the leading MOT test centres in Glasgow and the whole of Scotland, so we're the perfect place to take your any car due for an MOT.",
                ])
            </div>
            <img src="{{ asset('assets/images/mot_4.png') }}" class="order-1 w-full h-auto sm:order-2 lg:-mt-32"
                 alt="" data-aos="zoom-in">
        </div>
    </section>

    @include('components.another-services')
@endsection
