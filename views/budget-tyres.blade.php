@extends('layouts.app')
@section('head-info')
    <title>Budget Tyres - {{ config('app.name') }}</title>
    <meta name="description" content="If you are looking for cheap tyres in Glasgow that will not let you down, we have a range of options for you." />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Budget Tyres - {{ config('app.name') }}" />
    <meta property="og:description" content="If you are looking for cheap tyres in Glasgow that will not let you down, we have a range of options for you." />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection
@section('main')
    @component('components.hero-section', ['name' => 'Budget Tyres', 'image' => 'https://autofusioncars.co.uk/images/manufacturer-heros/ford.jpeg'])
        @slot('caption')
            If you are looking for cheap tyres in Glasgow that will not let you <br class="desktop"> down, we have a range of options for you.
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
            We all know that tyre safety and maintenance is one of the most crucial parts of keeping your car running and keeping you and your passengers safe. It is also true that your tyres do not always pick the most convenient time to get a puncture or come loose.
            <br><br>
            There are a wide range of car tyre brands available, including several premium, high-cost names. But there are also many excellent budget tyres that we can offer you. It can make just as much sense to opt for a budget tyre make and it is no surprise that they are so popular.
        </p>
    </section>
    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            @include('components.section-summary', [
                'containerWidth' => 'max-w-[535px]',
                'header' => 'Budget Tyres',
                'caption' =>
                    "The first thing to know is that <span class='font-bold underline'>cheap tyres are not the same as unsafe tyres</span>. Every manufacturer that we work with must have their tyres pass the EU standard safety test. You can rest assured that they have gone through the exact same checks as any premium or high-cost tyre when you use our cheap tyres service.",
                'textMedium' =>
                    'These tests conducted on the tyres cover a range of difference performance issues. They include checks on wet braking, fuel efficiency and noise emission. There should be a breakdown of the performance of the tyre attached with it, but if you have any questions just let us know and we can help. Our friendly staff always enjoy helping our customers and giving them a first class tyre service in Glasgow.',
            ])
            <img src="{{ asset('assets/images/budget_tyres_1.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
        </div>
    </section>
    @include('components.why-choose-autofusion-short-version')
    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            <img src="{{ asset('assets/images/budget_tyres_2.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
            <div class="mt-10">
                @include('components.section-summary', [
                    'header' => 'Are Budget Tyres A Good Fit?',
                    'caption' =>
                        'Budget tyres are not suited to every kind of car, or every kind of terrain. If you are planning on doing a lot of high-speed driving on motorways, or you are expecting to drive through a lot of bad weather on bad roads, then it may be worth looking at a more expensive option. Those tyres will use a higher quality rubber compound in their production, and the tread pattern may vary from brand to brand.',
                    'textMedium' =>
                        'However, if most of your driving is done at low to moderate speeds and you mostly travel in urban areas where the roads are more predictable, then budget tyres are a perfectly good choice. It is also worth noting that low-mileage cars will be just fine with budget tyres, and you can get many years of good service out of them.',
                ])
            </div>
        </div>
    </section>
    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            @include('components.section-summary', [
                'containerWidth' => 'max-w-[535px]',
                'header' => 'How Do I Maintain Budget Tyres?',
                'caption' =>
                    "While the safety of the car tyre is guaranteed, there are steps that you can take to make sure that you are maintaining them properly. You should be checking your tyre pressure every six months, and you should also be looking at the depth of your tyre treads. Remember that the depth of the tyre treads will determine how well your car grips onto the road surface, so do not skip this step. If you think that your tyres may need servicing, then pay us a visit at our Glasgow-based garage and we will give them a once-over.",
                'textMedium' =>
                    'If you have any questions about the best options for budget tyres in the Glasgow area, do not hesitate to get in touch. It is worth remembering that premium tyres tend to last longer than budget tyres, so what you save upfront you may end up spending again and sooner than you might need to.',
            ])
            <img src="{{ asset('assets/images/budget_tyres_3.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
        </div>
    </section>
    <section class="dark-container mt-[76px]">
        <p class="max-w-[903px] text-white text-opacity-55 text-base sm:text-xl leading-7 font-medium text-center mx-auto"
           data-aos="fade-up">
            At Autofusion, we can break down the short and long-term costs of buying budget tyres and recommend the right brand for you. We can also show you the best way to keep your cheap tyres in good condition, so you can travel throughout Glasgow, the surrounding area and the UK in general. Our team go the extra mile, so you can get the best possible service from Autofusion.
        </p>
    </section>
    @include('components.another-services')
@endsection
