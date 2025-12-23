@extends('layouts.app')

@section('head-info')
    <title>{{ config('app.name') }} | Luxury & Supercar Hire</title>
    <meta name="description" content="Experience luxury and supercar hire across the UK with Autofusion Hire. Choose from 100+ prestige vehicles including Rolls-Royce, Ferrari, and Lamborghini." />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('/images/heroes/about.jpeg') }}" />
    <meta property="og:title" content="Autofusion | Luxury & Supercar Hire" />
    <meta property="og:description" content="Experience luxury and supercar hire across the UK with Autofusion Hire. Choose from 100+ prestige vehicles including Rolls-Royce, Ferrari, and Lamborghini." />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="keywords" content="autofusion, garage in glasgow, independent garage, glasgow garages, budget tyres, car problems, new tyres, glasgow, car, cars, tyres, vans, vehicle, mots, autofusion hire, autofusion, car hire glasgow, local car hire firm, glasgow supercars, hire lamborghini"/>

    {{--    <link rel="stylesheet" media="screen" href="https://www.arnoldclark.com/assets/application-0e742996589c1286cbc1b341fa183d782ccb8aecbd87a25273dbc6fbffb98b45.css">--}}
    {{--    <link rel="stylesheet" media="screen" href="https://www.arnoldclark.com/assets/homepage/index-c91b74ec9544cdab9fee29d48709564e731fc4b4cd334d41be28d0fae7f1f3ec.css">--}}
@endsection

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

    <!-- Date picker dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.9.1/dayjs.min.js"
            integrity="sha512-u7elBfdMr+7LhU4rvUk3IM28QZDKTyUxba4Nx2IJ1W9cj4shfRSPq7EZXD2ULD9cBoizw2FQyeR6YBog6LcnHg=="
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/js/main.js"></script>
    <script type='text/javascript' src='/js/plugins/ui/datepicker.min.js'></script>

    <script type='text/javascript'>
        jQuery(document).ready(function (jQuery) {
            jQuery.datepicker.setDefaults({
                "closeText": "Close",
                "currentText": "Today",
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                "nextText": "Next",
                "prevText": "Previous",
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "dateFormat": "MM d, yy",
                "firstDay": 1,
                "isRTL": false
            });

            var lastScrollTop = false;
            if (lastScrollTop) {
                jQuery(window).scrollTop(lastScrollTop);
            }
            
            var picker = new Litepicker({
                element: document.getElementById('pickup_dropoff'),
                firstDay: 1,
                showTooltip: false,
                singleMode: false,
                format: 'DD/MM/YYYY',
                minDate: moment().startOf('hour').add(3, 'hour').min(12, 'hour'),
                maxDays: 29,
                minDays: 2,
                selectForward: true,
                autoApply: true,
                moveByOneMonth: true,
                mobileFriendly: true,
                onSelect: function (date_start, date_end) {
                    checkAvailability();
                }
            });
            
            jQuery('#pickup_time').change(function () {
                checkAvailability();
            });
            jQuery('#type').change(function () {
                checkAvailability();
            });
            jQuery('#sort_by').change(function () {
                checkAvailability();
            });
            jQuery('#location').change(function () {
                checkAvailability();
            });
            
            // Location search functionality
            jQuery('#location_search').on('input focus', function () {
                var searchTerm = jQuery(this).val().toLowerCase();
                var dropdown = jQuery('#location_dropdown');
                var options = jQuery('.location-option');
                
                // Show dropdown
                dropdown.removeClass('hidden');
                
                // Filter options
                options.each(function() {
                    var optionText = jQuery(this).data('name').toLowerCase();
                    if (optionText.includes(searchTerm) || searchTerm === '') {
                        jQuery(this).show();
                    } else {
                        jQuery(this).hide();
                    }
                });
            });
            
            // Handle location option selection
            jQuery(document).on('click', '.location-option', function() {
                var value = jQuery(this).data('value');
                var name = jQuery(this).data('name');
                
                jQuery('#location').val(value);
                jQuery('#location_search').val(name);
                jQuery('#location_dropdown').addClass('hidden');
                
                checkAvailability();
            });
            
            // Hide dropdown when clicking outside
            jQuery(document).on('click', function(e) {
                if (!jQuery(e.target).closest('.relative').length) {
                    jQuery('#location_dropdown').addClass('hidden');
                }
            });
            
            // Handle keyboard navigation
            jQuery('#location_search').on('keydown', function(e) {
                var dropdown = jQuery('#location_dropdown');
                var visibleOptions = jQuery('.location-option:visible');
                var activeOption = jQuery('.location-option.active');
                
                if (e.key === 'ArrowDown') {
                    e.preventDefault();
                    if (!dropdown.hasClass('hidden')) {
                        if (activeOption.length === 0) {
                            visibleOptions.first().addClass('active bg-blue-100');
                        } else {
                            var nextOption = activeOption.nextAll('.location-option:visible').first();
                            if (nextOption.length > 0) {
                                activeOption.removeClass('active bg-blue-100');
                                nextOption.addClass('active bg-blue-100');
                            }
                        }
                    }
                } else if (e.key === 'ArrowUp') {
                    e.preventDefault();
                    if (!dropdown.hasClass('hidden')) {
                        if (activeOption.length > 0) {
                            var prevOption = activeOption.prevAll('.location-option:visible').first();
                            if (prevOption.length > 0) {
                                activeOption.removeClass('active bg-blue-100');
                                prevOption.addClass('active bg-blue-100');
                            }
                        }
                    }
                } else if (e.key === 'Enter') {
                    e.preventDefault();
                    if (activeOption.length > 0) {
                        activeOption.click();
                    }
                } else if (e.key === 'Escape') {
                    dropdown.addClass('hidden');
                    jQuery('.location-option').removeClass('active bg-blue-100');
                }
            });
            
            var checkAvailability = function () {
                var form = document.getElementById('car_search_form');
                form.submit();
            };
        });
    </script>
@endpush

@section('main')
    <header class="page-header h-[100dvh] sm:h-[85dvh] lg:h-[75dvh]">
        <div id="hero-carousel" class="h-full" data-aos="fade-down">
            <img src="{{ asset('assets/images/default-header.png') }}" class="w-full h-full object-cover" alt="">
{{--            <img src="{{ asset('assets/images/garage-booking-background-2.png') }}" class="w-full h-dvh" alt="">--}}
{{--            <img src="{{ asset('assets/images/hero-3.png') }}" class="w-full h-dvh" alt="">--}}
        </div>

        @component('components.header-content', ['name' => 'Luxury & Performance Car Rental', 'dark' => false])
            @slot('caption')
            <span class="font-medium">Leading supercar and luxury car hire service.</span> 
            <br class="hidden lg:block">
            Self drive or chauffeur driven for business, pleasure, weddings and events.
            @endslot
            <div data-aos="fade-up" data-aos-delay="900" data-aos-offset="0" class="aos-init aos-animate">
                <form id="car_search_form" name="car_search_form" method="get" action="/hire/cars" class="mt-[30px] mb-16 space-y-4">
                    @csrf
                    
                    <!-- First Row: Location, Date, Time -->
                    <div class="flex flex-col sm:flex-row gap-[7px]">
                        <!-- Location Field (now first and searchable) -->
                        <div class="relative w-full sm:w-[250px]">
                            <input 
                                type="text" 
                                name="location_search" 
                                id="location_search"
                                class="inputStyle w-full pr-10" 
                                placeholder="Search Location..." 
                                value="{{ request()->get('location') ? $locations->firstWhere('id', request()->get('location'))->name ?? '' : '' }}"
                                autocomplete="off"
                                style="padding-right: 2.5rem !important;"
                            />
                            <input type="hidden" name="location" id="location" value="{{ request()->get('location', '') }}" />
                            <div class="absolute top-1/2 right-3 transform -translate-y-1/2 pointer-events-none">
                                <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <div id="location_dropdown" class="absolute z-50 w-full bg-white border border-gray-200 rounded-md shadow-lg hidden max-h-60 overflow-y-auto">
                                <div class="p-2">
                                    <div class="location-option px-3 py-2 cursor-pointer hover:bg-gray-100 rounded" data-value="" data-name="Any Location">
                                        Any Location
                                    </div>
                                    @foreach($locations as $location)
                                        <div class="location-option px-3 py-2 cursor-pointer hover:bg-gray-100 rounded" data-value="{{ $location->id }}" data-name="{{ $location->name }}">
                                            {{ $location->name }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- Date Field (second) -->
                        <x-input-field
                                type="text"
                                name="pickup_dropoff"
                                id="pickup_dropoff"
                                class-name="w-full sm:w-[260px] appearance-none"
                                placeholder="Choose Date Range"
                                value="{{ request()->has('pickup_dropoff') ? request()->get('pickup_dropoff') : (request()->session()->has('pickupDropoff') ? request()->session()->get('pickupDropoff') : '') }}"
                                autocomplete="off"
                                required
                        />

                        <!-- Time Field (third) -->
                        <select id="pickup_time" name="pickup_time" class="inputStyle w-full sm:w-[110px]">
                            <option @if(request()->get('pickup_time') == "09:00")selected
                                    @endif value="09:00">09:00
                            </option>
                            <option @if(request()->get('pickup_time') == "10:00")selected
                                    @endif value="10:00">10:00
                            </option>
                            <option @if(request()->get('pickup_time') == "11:00")selected
                                    @endif value="11:00">11:00
                            </option>
                            <option @if(request()->get('pickup_time') == "12:00")selected
                                    @endif value="12:00">12:00
                            </option>
                            <option @if(request()->get('pickup_time') == "13:00")selected
                                    @endif value="13:00">13:00
                            </option>
                            <option @if(request()->get('pickup_time') == "14:00")selected
                                    @endif value="14:00">14:00
                            </option>
                            <option @if(request()->get('pickup_time') == "15:00")selected
                                    @endif value="15:00">15:00
                            </option>
                            <option @if(request()->get('pickup_time') == "16:00")selected
                                    @endif value="16:00">16:00
                            </option>
                            <option @if(request()->get('pickup_time') == "17:00")selected
                                    @endif value="17:00">17:00
                            </option>
                            <option @if(request()->get('pickup_time') == "18:00")selected
                                    @endif value="18:00">18:00
                            </option>
                            <option @if(request()->get('pickup_time') == "19:00")selected
                                    @endif value="19:00">19:00
                            </option>
                            <option @if(request()->get('pickup_time') == "20:00")selected
                                    @endif value="20:00">20:00
                            </option>
                            <option @if(request()->get('pickup_time') == "21:00")selected
                                    @endif value="21:00">21:00
                            </option>
                        </select>
                    </div>

                    <!-- Second Row: Vehicle Type, Brand Filter, Search Button -->
                    <div class="flex flex-col sm:flex-row gap-[7px] items-start sm:items-center">
                        <!-- Vehicle Type Field -->
                        <select name="type" id="type" class="inputStyle w-full sm:w-[150px]">
                            <option value="">Any Type</option>
                        @foreach($carTypes as $type)
                                <option @if(request()->get('type') == $type->slug)selected
                                        @endif  value="{{ $type->slug }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                        
                        <!-- Brand Filter -->
                        <select name="brand" id="brand" class="inputStyle w-full sm:w-[150px]">
                            <option value="">Any Brand</option>
                        @foreach($carBrands as $brand)
                                <option @if(request()->get('brand') == $brand->slug)selected
                                        @endif  value="{{ $brand->slug }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                        
                        <!-- Search Button -->
                        <button type="submit" class="btn btn-primary w-full sm:w-auto px-8">
                            Search
                        </button>
                    </div>
                </form>
            </div>
        @endcomponent
    </header>

    {{-- <section class="base-container" id="serviceSection">


        {{-- <div class="flex flex-row flex-wrap md:justify-between items-center gap-[50px] xl:gap-[100px]">
            @include('components.section-summary', [
                'header' => 'Looking to service your vehicle?',
                'caption' =>
                    'We know how important it is to know that your car is being taken care of. Experience luxury and supercar hire across the UK with Autofusion Hire. Choose from 100+ prestige vehicles including Rolls-Royce, Ferrari, and Lamborghini.',
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
        </div> --}}
    {{-- </section> --}}

    {{-- <section class="dark-container">
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
    </section> --}}

    <section class="base-container">
        <div class="flex flex-row flex-wrap md:justify-between items-center gap-[50px] xl:gap-[100px]">
            <div class="flex flex-col gap-10">
                @include('components.section-summary', [
                    'header' => "Looking to <br class='hidden lg:block'> hire a car?",
                    'caption' => 'Autofusion are Glasgow’s leading luxury and performance car hire company.',
                    'textMedium' =>
                        "We give you the opportunity to experience your high-end rental from the driver's seat or via our personal chauffeur service.",
                ])
                <a href="{{ route('hire.cars') }}" class="btn btn-primary w-max" data-aos="fade-right" data-aos-delay="300">
                    View All Cars
                </a>
            </div>
            @php
                $cars = [
                    (object) [
                        'name' => 'Aston Martin',
                        'photo' => asset('assets/images/car-1.png'),
                        'route' => "/hire/cars?brand=aston-martin"
                    ],
                    (object) [
                        'name' => 'Audi',
                        'photo' => asset('assets/images/car-2.png'),
                        'route' => "/hire/cars?brand=audi"
                    ],
                    (object) [
                        'name' => 'BMW',
                        'photo' => asset('assets/images/car-3.png'),
                        'route' => "/hire/cars?brand=bmw"
                    ],
                    (object) [
                        'name' => 'Bentley',
                        'photo' => asset('assets/images/car-4.png'),
                        'route' => "/hire/cars?brand=bentley"
                    ],
                    (object) [
                        'name' => 'Ferrari',
                        'photo' => asset('assets/images/car-5.png'),
                        'route' => "/hire/cars?brand=ferrari"
                    ],
                    (object) [
                        'name' => 'Rolls Royce',
                        'photo' => asset('assets/images/car-6.png'),
                        'route' => "/hire/cars?brand=rolls-royce"
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

    <section class="dark-container pt-12">
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
                        'route' => "/hire/cars?type=luxury"
                    ],
                    (object) [
                        'name' => 'Performance',
                        'photo' => asset('assets/images/car-type-2.png'),
                        'route' => "/hire/cars?type=performance"
                    ],
                    (object) [
                        'name' => 'Supercar',
                        'photo' => asset('assets/images/car-type-3.png'),
                        'route' => "/hire/cars?type=supercar"
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
