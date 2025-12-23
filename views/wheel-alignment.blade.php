@extends('layouts.app')

@section('head-info')
    <title>Car Wheel Alignment Service | Book with {{ config('app.name') }}</title>
    <meta name="description" content="Ensuring that your wheels are properly aligned is a crucial part of good car maintenance. " />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Car Wheel Alignment Service | Book with {{ config('app.name') }}" />
    <meta property="og:description" content="Ensuring that your wheels are properly aligned is a crucial part of good car maintenance. " />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection

@section('main')

    @component('components.hero-section', [
            'name' => 'Wheel Alignment',
            'image' => 'https://autofusioncars.co.uk/images/manufacturer-heros/jeep.jpeg',
        ])
        @slot('caption')
            Ensuring that your wheels are properly aligned is a <br class="desktop"> crucial part of good car maintenance.
        @endslot
        @include('components.form-booking-service', [
                    'action' => "/book/wheel-alignment/vrm",
                    'method' => "POST",
                ])
        @include('components.service-payment-info')
    @endcomponent

    <section class="dark-container !bg-[#F3F4F6] mt-[76px] mb-9">
        <h4 class="text-3xl font-black text-center sm:text-5xl text-dark font-epilogue" data-aos="fade-up">
            We Use Manufacturer Specified Guides
        </h4>
        <p class="max-w-[903px] text-dark text-opacity-60 text-base sm:text-[23px] leading-7 font-medium text-center mx-auto mt-[30px] mb-[110px]"
           data-aos="fade-up">
            If your wheel alignment is off, then you run the risk of wearing down your tyres more quickly and losing crucial performance quality.
        </p>

        <div class="grid md:grid-cols-2 justify-center items-center gap-[50px] xl:gap-24">
            @component('components.section-summary')
                @slot('caption')
                    <span class="text-dark">
                        With Autofusion’s Bluetooth Pro Wheel Aligner, we can make sure that your wheels are perfectly aligned quickly and easily.
                    </span>
                @endslot
                @slot('textMedium')
                    <span class="text-[#393938]">
                        Our top Glasgow garage offers alignment, new tyres, and other tyre services using the latest technology for the following brands.
                    </span>
                @endslot
            @endcomponent
            <img src="{{ asset('assets/images/wheel_alignment_1.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
        </div>
    </section>

    <section class="dark-container mt-11 !bg-[#2C2F36]">
        <h4 class="text-3xl font-black text-center text-white sm:text-5xl font-epilogue" data-aos="fade-up">
            Pick Your Car Brand
        </h4>

{{--        @php--}}
{{--            $brands = [--}}
{{--                (object) [--}}
{{--                    'name' => 'Abarth',--}}
{{--                    'photo' => asset('assets/images/brand-logo/abarth.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'Alfa Romeo',--}}
{{--                    'photo' => asset('assets/images/brand-logo/alfa-romeo.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'Audi',--}}
{{--                    'photo' => asset('assets/images/brand-logo/audi.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'BMW',--}}
{{--                    'photo' => asset('assets/images/brand-logo/bmw.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'Chevrolet',--}}
{{--                    'photo' => asset('assets/images/brand-logo/chevrolet.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'Chrysler',--}}
{{--                    'photo' => asset('assets/images/brand-logo/chrysler.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'Citroen',--}}
{{--                    'photo' => asset('assets/images/brand-logo/citroen.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'Dacia',--}}
{{--                    'photo' => asset('assets/images/brand-logo/dacia.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'DS Automobiles',--}}
{{--                    'photo' => asset('assets/images/brand-logo/ds-automobiles.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'Fiat',--}}
{{--                    'photo' => asset('assets/images/brand-logo/fiat.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'Ford',--}}
{{--                    'photo' => asset('assets/images/brand-logo/ford.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'Honda',--}}
{{--                    'photo' => asset('assets/images/brand-logo/honda.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'Hyundai',--}}
{{--                    'photo' => asset('assets/images/brand-logo/hyundai.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'Jeep',--}}
{{--                    'photo' => asset('assets/images/brand-logo/jeep.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'Mazda',--}}
{{--                    'photo' => asset('assets/images/brand-logo/mazda.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'Mercedes Benz',--}}
{{--                    'photo' => asset('assets/images/brand-logo/mercedes-benz.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'Morris Garage',--}}
{{--                    'photo' => asset('assets/images/brand-logo/mg.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'Mini Cooper',--}}
{{--                    'photo' => asset('assets/images/brand-logo/mini-cooper.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'Mitshubishi',--}}
{{--                    'photo' => asset('assets/images/brand-logo/mitshubishi.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'Nissan',--}}
{{--                    'photo' => asset('assets/images/brand-logo/nissan.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'Peugeot',--}}
{{--                    'photo' => asset('assets/images/brand-logo/peugeot.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'Renault',--}}
{{--                    'photo' => asset('assets/images/brand-logo/renault.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'Seat',--}}
{{--                    'photo' => asset('assets/images/brand-logo/seat.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'Skoda',--}}
{{--                    'photo' => asset('assets/images/brand-logo/skoda.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'SMA',--}}
{{--                    'photo' => asset('assets/images/brand-logo/sma.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'Toyota',--}}
{{--                    'photo' => asset('assets/images/brand-logo/toyota.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'Vauxhall',--}}
{{--                    'photo' => asset('assets/images/brand-logo/vauxhall.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'Volkswagen',--}}
{{--                    'photo' => asset('assets/images/brand-logo/volkswagen.png'),--}}
{{--                ],--}}
{{--                (object) [--}}
{{--                    'name' => 'Volvo',--}}
{{--                    'photo' => asset('assets/images/brand-logo/volvo.png'),--}}
{{--                ],--}}
{{--            ];--}}
{{--        @endphp--}}

        <div class="grid items-center sm:w-max justify-center mx-auto grid-cols-2 md:grid-cols-3 gap-3 sm:gap-x-6 sm:gap-y-10 lg:grid-cols-4 mt-[60px]" data-aos="fade-up">
{{--            @foreach ($brands as $brand)--}}
{{--                @include('components.brand-card', [--}}
{{--                    'name' => $brand->name,--}}
{{--                    'photo' => $brand->photo,--}}
{{--                    'route' => '',--}}
{{--                    'index' => $loop->index,--}}
{{--                ])--}}
{{--            @endforeach--}}

            @foreach ($images as $image)
                @php
                    $imagePath =  pathinfo($image, PATHINFO_FILENAME);
                     if($image->getFilename() == "bmw.jpeg") {
                          $name = "BMW";
                     } else {
                          $name = ucwords(str_replace("-", " ", str_replace(".jpeg", "", $image->getFilename())));
                     }
                @endphp
                @include('components.brand-card', [
                    'title' => "More about $imagePath servicing",
                    'name' => $name,
                    'photo' => "/images/manufacturers/". $image->getFilename(),
                    'route' => "/wheel-alignment/".  str_replace(".jpeg", "", $image->getFilename()),
                    'index' => $loop->index,
                ])
            @endforeach
        </div>
    </section>

    @include('components.another-services')
@endsection
