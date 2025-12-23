@extends('layouts.app')

@section('title', 'Landing Page')

@push('css')
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    {{-- <style>
        #hero-carousel .flickity-page-dots {
            left: 10%;
            bottom: 64px;
            text-align: left;
            padding: 0 16px;
        }

        @media screen and (max-width: 991px) {
            #hero-carousel .flickity-page-dots {
                left: 16px;
                bottom: 25px;
            }

            #hero-carousel .flickity-page-dots .dot {
                width: 40px;
            }
        }

        #hero-carousel .flickity-page-dots .dot {
            background-color: #fff;
            height: 3px;
            width: 67px;
            border-radius: 0;
            opacity: 1;
        }

        #hero-carousel .flickity-page-dots .dot.is-selected {
            background-color: #11B346;
        }
    </style> --}}
@endpush

@push('js')
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script>
        $('#hero-carousel').flickity({
            // options
            cellAlign: 'left',
            contain: true,
            prevNextButtons: false,
            autoPlay: true,
            wrapAround: true,
            adaptiveHeight: true
        });
    </script>
@endpush

@section('main')
    <header class="page-header">
        <div id="hero-carousel" class="h-full" data-aos="fade-down">
            <img src="{{ asset('assets/images/default-header.png') }}" class="w-full h-dvh" alt="">
            <img src="{{ asset('assets/images/garage-booking-background-2.png') }}" class="w-full h-dvh" alt="">
{{--            <img src="{{ asset('assets/images/hero-3.png') }}" class="w-full h-dvh" alt="">--}}
        </div>

        @component('components.header-content', ['name' => 'Autofusion Glasgow'])
            @slot('caption')
                <span class="font-medium">Looking to hire a supercar?</span>
                Or bumped, scratched or chipped your car? <br class="hidden lg:block"> We're a leading car hire and repair
                garage based in Glasgow.
            @endslot
            <div class="flex items-center gap-4">
                <a href="{{ route('hire.index') }}" class="btn btn-primary">
                    Hire a car
                </a>
                <a href="{{ route('book.index') }}" class="btn btn-white">
                    Book a service
                </a>
            </div>
        @endcomponent
    </header>

    <section class="base-container" id="serviceSection">
        @php
            $services = [
                (object) [
                    'name' => 'Servicing',
                    'photo' => asset('assets/images/service-1.png'),
                    'isComing' => 0,
                    'route' => route('home')
                ],
                (object) [
                    'name' => 'MOTs',
                    'photo' => asset('assets/images/service-2.png'),
                    'isComing' => 0,
                    'route' => route('home')
                ],
                (object) [
                    'name' => 'Tyres',
                    'photo' => asset('assets/images/service-3.png'),
                    'isComing' => 0,
                    'route' => route('home')
                ],
                (object) [
                    'name' => 'Trackers',
                    'photo' => asset('assets/images/service-4.png'),
                    'isComing' => 0,
                    'route' => route('home')
                ],
                (object) [
                    'name' => 'Wheel Alignment',
                    'photo' => asset('assets/images/service-5.png'),
                    'isComing' => 0,
                    'route' => route('wheel-alignment.index')
                ],
                (object) [
                    'name' => 'Tuning',
                    'photo' => asset('assets/images/service-6.png'),
                    'isComing' => 1,
                    'route' => route('home')
                ],
            ];
        @endphp

        <div class="flex flex-row flex-wrap md:justify-between items-center gap-[50px] xl:gap-[100px]">
            @include('components.section-summary', [
                'header' => 'Looking to service your vehicle?',
                'caption' =>
                    'We know how important it is to know that your car is being taken care of. As a leading garage in Glasgow, at Autofusion, we can provide a range of services to keep your vehicle safe, secure and at peak performance.',
                'textMedium' =>
                    'If you are in the greater Glasgow area and exploring Glasgow garages, we are here to provide you with expertise, excellent customer service and years of experience.',
                'text' =>
                    'Whether you are a business owner looking for better security for your fleet of vehicles, or you are simply looking for advice on new tyres for your car, we will help you get on the road quickly and comfortably.',
            ])
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-x-5 md:gap-y-[30px] mx-auto w-full sm:w-auto">
                @foreach ($services as $service)
                    @include('components.feature-card', [
                        'name' => $service->name,
                        'photo' => $service->photo,
                        'isComing' => $service->isComing,
                        'route' => $service->route,
                        'index' => $loop->index,
                    ])
                @endforeach
            </div>
        </div>
    </section>

    <section class="dark-container">
        <h4 class="mb-12 text-4xl font-black text-white sm:text-5xl font-epilogue md:mb-24" data-aos="fade-up">
            Why Choose Autofusion for Servicing
        </h4>
        @php
            $keypoints = [
                (object) [
                    'name' => 'Wide Range of Manufacturer Support',
                    'description' => 'When you bring your car into Autofusion, you never need to worry about whether our mechanics are going to be able to work on your car.',
                ],
                (object) [
                    'name' => 'Personal Support',
                    'description' => 'At Autofusion, our expert staff provide personal support beyond taking your car in or finding you the right security option.',
                ],
                (object) [
                    'name' => 'Excellent Customer Service',
                    'description' => 'At Autofusion, we pride ourselves on helping drivers in and around Glasgow find what they are looking for and answering any questions ASAP.',
                ],
            ];
        @endphp
        <div class="flex flex-wrap gap-6 align-items-center">
            @foreach ($keypoints as $key)
                <div class="max-w-[350px]" data-aos="fade-up" data-aos-delay="{{ ($loop->index + 1) * 100 }}">
                    <div class="flex items-baseline gap-4">
                        <img src="{{ asset('assets/svgs/green_lantern.svg') }}" alt="">
                        <div class="flex flex-col gap-4">
                            <p class="font-semibold text-[22px] leading-7 text-white">
                                {{ $key->name }}
                            </p>
                            <p class="text-base text-white text-opacity-60">
                                {{ $key->description }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="base-container">
        <div class="flex flex-row flex-wrap md:justify-between items-center gap-[50px] xl:gap-[100px]">
            <div class="flex flex-col gap-10">
                @include('components.section-summary', [
                    'header' => "Looking to <br class='hidden lg:block'> hire a car?",
                    'caption' => 'Autofusion are Glasgow’s leading luxury and performance car hire company.',
                    'textMedium' =>
                        "We give you the opportunity to experience your high-end rental from the driver's seat or via our personal chauffeur service.",
                ])
                <a href="#" class="btn btn-primary w-max" data-aos="fade-right" data-aos-delay="300">
                    View All Cars
                </a>
            </div>
            @php
                $cars = [
                    (object) [
                        'name' => 'Aston Martin',
                        'photo' => asset('assets/images/car-1.png'),
                        'route' => route('home')
                    ],
                    (object) [
                        'name' => 'Audi',
                        'photo' => asset('assets/images/car-2.png'),
                        'route' => route('home')
                    ],
                    (object) [
                        'name' => 'BMW',
                        'photo' => asset('assets/images/car-3.png'),
                        'route' => route('home')
                    ],
                    (object) [
                        'name' => 'Bently',
                        'photo' => asset('assets/images/car-4.png'),
                        'route' => route('home')
                    ],
                    (object) [
                        'name' => 'Ferrari',
                        'photo' => asset('assets/images/car-5.png'),
                        'route' => route('home')
                    ],
                    (object) [
                        'name' => 'Rolls Royce',
                        'photo' => asset('assets/images/car-6.png'),
                        'route' => route('home')
                    ],
                ];
            @endphp
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-x-5 md:gap-y-[30px] mx-auto w-full sm:w-auto">
                @foreach ($cars as $car)
                    @include('components.feature-card', [
                        'name' => $car->name,
                        'photo' => $car->photo,
                        'route' => $car->route,
                        'index' => $loop->index,
                    ])
                @endforeach
            </div>
        </div>
    </section>

    <section class="dark-container">
        <div class="flex flex-wrap items-center justify-center gap-10 2xl:gap-24">
            <div class="flex flex-col gap-5">
                <h4 class="text-4xl font-black text-white sm:text-5xl font-epilogue" data-aos="fade-up"
                    data-aos-delay="200">
                    Hire Cars By Type
                </h4>
                <p class="text-white text-[22px] leading-7" data-aos="fade-right" data-aos-delay="500">
                    We offer professional car hire services with <br class="desktop"> our range of high-end
                    vehicles.
                </p>
            </div>
            @php
                $carTypes = [
                    (object) [
                        'name' => 'Luxury',
                        'photo' => asset('assets/images/car-type-1.png'),
                        'route' => route('home')
                    ],
                    (object) [
                        'name' => 'Performance',
                        'photo' => asset('assets/images/car-type-2.png'),
                        'route' => route('home')
                    ],
                    (object) [
                        'name' => 'Supercar',
                        'photo' => asset('assets/images/car-type-3.png'),
                        'route' => route('home')
                    ],
                ];
            @endphp
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-x-5 md:gap-y-[30px] w-full sm:w-auto">
                @foreach ($carTypes as $type)
                    @include('components.feature-card', [
                        'name' => $type->name,
                        'photo' => $type->photo,
                        'route' => $type->route,
                        'index' => $loop->index,
                    ])
                @endforeach
            </div>
        </div>
    </section>
@endsection
