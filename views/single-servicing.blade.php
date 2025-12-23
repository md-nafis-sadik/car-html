@extends('layouts.app')

@section('head-info')
    <title>{{ $manufacturer_name }} Servicing Glasgow | Book With {{ config('app.name') }}</title>
    <meta name="description" content="At Autofusion, you never need to worry about whether our team of mechanics will know how to take care of your {{ $manufacturer_name }}. " />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $manufacturer_name }} Servicing Glasgow | Book With {{ config('app.name') }}" />
    <meta property="og:description" content="At Autofusion, you never need to worry about whether our team of mechanics will know how to take care of your {{ $manufacturer_name }}. " />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection

@section('main')
    <header class="page-header min-h-[900px]">
        <img src="{{ asset('assets/images/default-header.png') }}" class="w-full h-full" alt="">

        @component('components.header-content', ['name' => 'Book Your '.$manufacturer_name. ' Servicing'])
            @slot('caption')
                At Autofusion, you never need to worry about whether our team<br class="desktop">of mechanics will know how to take care of your vehicle.
            @endslot
            @include('components.form-booking-service', [
                'action' => "/book/mot/vrm",
                'method' => "POST",
            ])
            @include('components.service-payment-info')
        @endcomponent
    </header>

    <section class="dark-container mt-[76px]">
        <h4 class="text-3xl font-black text-center text-white sm:text-5xl font-epilogue" data-aos="fade-up">
            {{ $manufacturer_name }} Servicing
        </h4>
        <p class="max-w-[903px] text-white text-opacity-55 text-base sm:text-[23px] leading-7 font-medium text-center mx-auto mt-[30px] mb-[110px]"
           data-aos="fade-up">
            @if($manufacturer == "abarth")
                Each Abarth model has a scheduled service plan because each Abarth model is unique. We will keep your car at the high standards of performance and efficiency that you expect.
            @elseif($manufacturer == "alfa-romeo")
                Whether you have a GTV, a Spider or a Giulia, we use genuine Alfa Romeo parts, and we will make sure that your car gets the correct treatment for its age and mileage. Talk to our experts today.
            @elseif($manufacturer == "audi")
                We will ensure that your Audi gets the specialised care it needs. Whether you need to replace parts or you simply want us to give it a once-over, we will ensure that your vehicle is running smoothly.
            @elseif($manufacturer == "bmw")
                At Autofusion, we can provide a range of services for your car that range from addressing safety concerns to giving the car an oil service to keep it in optimum condition. By using genuine BMW parts, we will keep your car’s resale value high.
            @elseif($manufacturer == "chevrolet")
                If you are lucky enough to be the owner of a Chevrolet, you will demand the highest standards when it comes to servicing. You may no longer be able to buy a new model in the UK, but we continue to offer premium servicing and care for your vehicle.
            @elseif($manufacturer == "chrysler")
                Chrysler owners know that their cars need to be serviced regularly. We can work to the specific servicing schedule of your Chrysler make, and model and you will be thrilled with the results of our services.
            @elseif($manufacturer == "citroen")
                Citroens are one of the most popular car manufacturers in the UK, and our experts are ready to get your car in optimum condition regardless of the make. From Picasso to the Citroen SUV, we have got you covered.
            @elseif($manufacturer == "dacia")
                Dacia recommends that you have your vehicle serviced every 12,000 miles or once a year. We will use genuine Dacia parts, and our excellent service is guaranteed for a full 12 months.
            @elseif($manufacturer == "ds")
                Make sure that your DS car is running safely and smoothly by bringing it into Autofusion for a regular full service. We will follow the instructions laid out by the manufacturer to ensure the warranty is kept.
            @elseif($manufacturer == "fiat")
                Our expert technicians can provide the best possible service for your Fiat Punto, Fiat 500, and a range of other Fiat models. Keep your Fiat running smoothly with a regular check-up.
            @elseif($manufacturer == "ford")
                Your Ford does not need to be a Focus to get great manufacturer servicing care from us. If you bring your car in regularly, we will get you peak performance and maximum resale value.
            @elseif($manufacturer == "honda")
                Our expert technicians know Honda makes and models inside and out. Honda prides itself on safe, reliable, high-performing cars, and you can keep them that way with regular service checks.
            @elseif($manufacturer == "hyundai")
                The best way to keep your Hyundai in great condition is by finding a service that uses genuine parts and follows the Hyundai service schedule. Our team will give you the best service regardless of mileage and model.
            @elseif($manufacturer == "jeep")
                Jeep’s vehicles are built to, but you still need to follow their recommended servicing schedule. If you are looking for Jeep servicing in the Glasgow area, visit Autofusion.
            @elseif($manufacturer == "kia")
                With manufacturer servicing, your Kia will keep running in great shape for as long as possible. We know that there are many models out there, and our team can help with all of them.
            @elseif($manufacturer == "mazda")
                Our Mazda manufacturer servicing is specifically tailored to each individual car. We take the model, the mileage, and the age of your car into account to provide the best possible service.
            @elseif($manufacturer == "mercedes-benz")
                Choose from a quick inspection or a comprehensive look at how your Mercedes-Benz is performing. We will use genuine parts, and we can help you fit a Mercedes Me adapter.
            @elseif($manufacturer == "mg")
                You can maintain your warranty and keep your car resale value up by bringing your MG in for regular servicing. We will only ever use genuine MG parts in our servicing.
            @elseif($manufacturer == "mini")
                Autofusion can offer you fast, dependable MINI servicing. Our experts will tailor their work based on the make, model, and mileage of your MINI and use genuine MINI parts.
            @elseif($manufacturer == "mitsubishi")
                Bring your Mitsubishi into Autofusion for a comprehensive servicing, where our highly trained experts will use genuine Mitsubishi parts to ensure the highest level of performance.
            @elseif($manufacturer == "nissan")
                Our Nissan services are specifically calibrated for the make, model, and mileage of your individual car. You can give your car’s resale value a boost by showing a full manufacturer’s service history.
            @elseif($manufacturer == "peugeot")
                Our expert team is ready to offer you the best service out there for any Peugeot make. They use genuine Peugeot parts and offer a range of safety checks to give you peace of mind.
            @elseif($manufacturer == "renault")
                Keep your Renault running smoothly and keep that resale value high by bringing your car in for a specialised servicing. We will check everything from brakes to wiper blades.
            @elseif($manufacturer == "seat")
                By using genuine SEAT parts, we can offer the manufacturer standard 12–14-month guarantee. A SEAT specific servicing will keep your car in warranty.
            @elseif($manufacturer == "skoda")
                No two SKODAs are exactly alike, and our expert team will provide specific servicing care for your car. SKODA-approved parts will keep your warranty intact and resale value high.
            @elseif($manufacturer == "smart")
                Bring your smart car in for a comprehensive full servicing from our expert technicians. Autofusion offers a range of free safety services and can offer a range of payment solutions.
            @elseif($manufacturer == "toyota")
                Toyota is one of the most popular car manufacturers on the roads, and our expert team can handle each and every one. That includes electric and hybrid models like the Prius.
            @elseif($manufacturer == "vauxhall")
                Bring your Vauxhall in for regular servicing to keep driving safely. Our experts can handle any make and model, and we use genuine manufacturer parts.
            @elseif($manufacturer == "volkswagen")
                Get peace of mind by bringing your Volkswagen into Autofusion, where our expert team will use approved parts and solutions. Mileage and age will also be considered.
            @elseif($manufacturer == "volvo")
                Keep your Volvo at its famous best by using our manufacturer servicing. We offer a range of options and upgrades, including the Polestar Optimisation software.
            @endif
        </p>

        <div class="grid md:grid-cols-2 justify-center items-center gap-[50px] xl:px-24">
            @component('components.section-summary')
                @slot('caption')
                    <span class="text-white">
                        If you are looking for vehicle servicing in Glasgow, get in touch with Autofusion today. We offer unparalleled customer service and years of expertise to keep your car in top condition.
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
