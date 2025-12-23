@extends('layouts.app')

@section('head-info')
    <title>{{ $manufacturer_name }} Wheel Alignment | Book Now with {{ config('app.name') }}</title>
    <meta name="description" content="Ensuring that your wheels are properly aligned is a crucial part of good car maintenance for your {{ $manufacturer_name }}. " />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $manufacturer_name }} Wheel Alignment | Book Now with {{ config('app.name') }}" />
    <meta property="og:description" content="Ensuring that your wheels are properly aligned is a crucial part of good car maintenance for your {{ $manufacturer_name }}. " />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection

@section('main')
    <header class="page-header min-h-[900px]">
        <img src="{{ asset('assets/images/default-header.png') }}" class="w-full h-full" alt="">

        @component('components.header-content', ['name' => 'Book Your Wheel Alignment'])
            @slot('caption')
                Ensuring that your wheels are properly aligned is a crucial<br class="desktop"> part of good car maintenance for your {{ $manufacturer_name }}.
            @endslot
            @include('components.form-booking-service', [
                'action' => "/book/wheel-alignment/vrm",
                'method' => "POST",
            ])
            @include('components.service-payment-info')
        @endcomponent
    </header>

    <section class="dark-container mt-[76px]">
        <h4 class="text-3xl font-black text-center text-white sm:text-5xl font-epilogue" data-aos="fade-up">
            {{ $manufacturer_name }} Wheel Alignment
        </h4>
        <p class="max-w-[903px] text-white text-opacity-55 text-base sm:text-[23px] leading-7 font-medium text-center mx-auto mt-[30px] mb-[110px]"
           data-aos="fade-up">
            @if($manufacturer == "abarth")
                Each Abarth model has its own specific needs. Our wheel alignment services will ensure that your Abarth gives you the best performance possible.
            @elseif($manufacturer == "alfa-romeo")
                The Spider, Giulia, and GTV Alfa Romeo models are beloved by drivers the world over, but you must ensure that your wheels are properly aligned. Visit Autofusion to find out how to get yours tested.
            @elseif($manufacturer == "audi")
                We know how important it is that your Audi is running safely and smoothly and checking your wheel alignment regularly is a crucial part of its maintenance. Autofusion can help you get yours checked quickly.
            @elseif($manufacturer == "bmw")
                Checking your BMW’s wheel alignment is one of the best ways to ensure that it runs well and that you are keeping wheel wear and tear low. Pop into Autofusion for wheel alignment testing.
            @elseif($manufacturer == "chevrolet")
                Given that you can no longer buy a new Chevrolet in the UK, you will want to protect it from any kind of potential damage. Visit Autofusion to check your wheel alignment today.
            @elseif($manufacturer == "chrysler")
                At Autofusion, we are dedicated to keeping your Chrysler in top condition. Test your wheel alignment to be safer, reduce tyre damage and keep your handling efficient.
            @elseif($manufacturer == "citroen")
                It doesn’t matter whether you have a Citroen SUV or a Picasso; you need to keep your wheels properly aligned. Autofusion offers a quick and easy wheel alignment service to give you peace of mind.
            @elseif($manufacturer == "dacia")
                As the owner of a Dacia, you know that the manufacturers recommend regular servicing. Checking your wheel alignment is a core element of proper car maintenance, and Autofusion offers peerless testing.
            @elseif($manufacturer == "ds")
                Visit Autofusion to have your DS car’s alignment comprehensively tested. With our Bluetooth Pro Wheel Aligner, we will keep your car running at its very best.
            @elseif($manufacturer == "fiat")
                There are a lot of popular Fiat models out there, from the 500 to the Punto, and proper wheel alignment is crucial to their efficiency and safety. Pop into Autofusion for a quick and easy wheel alignment test.
            @elseif($manufacturer == "ford")
                An alignment test is a great way to ensure that your Ford is running at the kind of level that you demand. Autofusion can check your wheel adjustment quickly and effectively to protect your vehicle.
            @elseif($manufacturer == "honda")
                Your Honda is in safe hands with our team of experts. Our wheel adjustment testing protects your tires, it protects your car, and it protects you, the driver. Visit Autofusion to find out more.
            @elseif($manufacturer == "hyundai")
                When your Hyundai’s wheels are not properly aligned, you run the risk of damaging your tires and impacting its safety features. Get your car's alignment tested today at Autofusion.
            @elseif($manufacturer == "jeep")
                We all know that Jeep vehicles can handle almost anything, but the wheels need to be properly aligned to do so. Autofusion’s expert wheel alignment testing will protect you and your car.
            @elseif($manufacturer == "kia")
                The reasons for checking your Kia’s wheel alignment range from safety and efficiency to comfort and handling, so visit Autofusion to get yours tested. Our Bluetooth testing is just part of our expert servicing range.
            @elseif($manufacturer == "mazda")
                We know that you want your Mazda kept in the best condition possible. That’s why we urge you to check your wheel alignment to massively reduce the risk of wear and tear, not to mention safety issues.
            @elseif($manufacturer == "mercedes-benz")
                Even a Mercedes-Benz needs the occasional check-up. Visit Autofusion to make sure that your wheels are properly aligned to keep your car running as beautifully as it can.
            @elseif($manufacturer == "mg")
                There is never a good time in your journey to realise that your wheels are not properly aligned. With a quick wheel alignment test at Autofusion, you can get that peace of mind behind the steering wheel.
            @elseif($manufacturer == "mini")
                Getting your MINI’s wheel alignment tested is incredibly easy with Autofusion’s Bluetooth Pro Wheel Aligner. It’s quick, it’s simple, and it is an essential part of maintaining your MINI.
            @elseif($manufacturer == "mitsubishi")
                We know that performance is everything when it comes to Mitsubishi. Protect your car by getting your alignment checked at Autofusion.
            @elseif($manufacturer == "nissan")
                Come into Autofusion to check the wheel alignment on your Nissan. Our experts can pinpoint any discrepancies with the angle of the wheels and get you back on the road in no time.
            @elseif($manufacturer == "peugeot")
                Wheel alignment issues can be the driving force behind a number of different problems with your Peugeot. If you have any concerns, visit Autofusion for a tyre alignment check today.
            @elseif($manufacturer == "renault")
                When was the last time you had the wheel alignment of your Renault checked? Find out how much difference perfect wheel alignment can make by visiting Autofusion for a check-up.
            @elseif($manufacturer == "seat")
                At Autofusion, we use top of the line software to give us maximum accuracy when testing the wheel alignment on your SEAT. Book in a check to improve your SEAT’s performance and safety.
            @elseif($manufacturer == "skoda")
                If you suspect that the wheel alignment may be off on your SKODA, contact Autofusion today. We use Bluetooth Pro Wheel Alignment to pinpoint even the slightest discrepancy.
            @elseif($manufacturer == "smart")
                When your smart car’s alignment is off, you could be impacting your car’s fuel efficiency. This is just one of the many reasons why you should book in for a tyre alignment test at Autofusion.
            @elseif($manufacturer == "toyota")
                At Autofusion, we know that you rely on your Toyota to offer efficiency, reliability, and safety. Our alignment checks can reduce tyre wear and ensure that all your wheels point in the right direction. That is why we recommend you bring your Toyota in for regular wheel alignment checks.
            @elseif($manufacturer == "vauxhall")
                Our experts will be able to locate even the slightest tyre alignment issue with your Vauxhall and address the problem quickly and efficiently. Keep your Vauxhall at its very best and reduce tyre wear with our services.
            @elseif($manufacturer == "volkswagen")
                A wheel alignment test could help you to avoid issues with your Volkswagen’s handling and safety, as well as lowering fuel consumption. Talk to the experts at Autofusion about booking in now to get your vehicle's wheels aligned and check the alignment angles to improve vehicle handling, reduce tyre wear and more.
            @elseif($manufacturer == "volvo")
                At Autofusion, we know that keeping your Volvo in the best condition is a point of pride. We offer top of the line checks for wheel alignments and alignment angles to ensure that your handling and efficiency is where it needs to be.
            @endif
        </p>

        <div class="grid md:grid-cols-2 justify-center items-center gap-[50px] xl:px-24">
            @component('components.section-summary')
                @slot('caption')
                    <span class="text-white">
                        If you are looking for wheel alignment in Glasgow that meets your car manufacturer's specifications, visit Autofusion. We can get to the bottom of any alignment issue, put your wheels in the optimum position and get you back on the road in no time. We also offer car servicing, car repairs, wheel tracking and a range of other services, so you can get everything you need from our leading Glasgow garage.
                    </span>
                @endslot
                @slot('textMedium')
                    <span class="text-white text-opacity-40">
                        We offer unparalleled customer service and years of expertise to keep your car in top condition.
                    </span>
                @endslot
            @endcomponent
            <img src="{{ asset('assets/images/repair_1.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
        </div>
    </section>

    @include('components.did-you-know')

    @include('components.why-choose-autofusion')
@endsection
