@extends('layouts.app')

@section('head-info')
    @if($car->seo_title)
        <title>{{ $car->seo_title }}</title>
    @else
        <title>{{ $car->name }} | Luxury Car Rental with {{ config('app.name') }}</title>
    @endif

    @if($car->seo_description)
        <meta name="description" content="{{ $car->seo_description }}" />
    @else
        <meta name="description" content="{{ $car->name }} - {{ $car->type->name }}" />
    @endif

    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{  $car->main_image?->getUrl('thumb') }}" />

    @if($car->seo_title)
        <meta property="og:title" content="{{ $car->seo_title }}" />
    @else
        <meta property="og:title" content="{{ $car->name }} | Luxury Car Rental with {{ config('app.name') }}" />
    @endif

    @if($car->seo_description)
        <meta property="og:description" content="{{ $car->seo_description }}" />
    @else
        <meta property="og:description" content="{{ $car->name }} - {{ $car->type->name }} Vehicle - Book Today" />
    @endif
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />


    @if($car->seo_keywords)
        <meta name="keywords" content="{{ $car->seo_keywords }}"/>
    @else
        <meta name="keywords" content="autofusion, car hire, glasgow"/>
    @endif

    <link rel='stylesheet' href='/css/themify-icons.css' type='text/css' media='all'/>
    <link rel="stylesheet" href="{{ asset('css/plugins/photoswipe/photoswipe.css') }}">
    <script src="{{ mix('js/app.js') }}" defer="defer"></script>
@endsection

@section('main')
{{--    <header class="page-header">--}}
{{--        <img src="{{ $car->main_image?->getUrl('car-detail') }}" class="w-full h-full" alt="">--}}
{{--        <div class="absolute top-0 left-0 z-10 w-full h-full bg-black bg-opacity-70"></div>--}}

{{--        @component('components.header-content')--}}
{{--            <p class="text-sm text-white md:text-xl md:leading-[30px] font-light" data-aos="fade-up" data-aos-delay="700">--}}
{{--                {{ $car->type->name }}--}}
{{--            </p>--}}
{{--            <h1 class="font-epilogue font-black text-5xl lg:text-[72px] text-white mt-4" data-aos="fade-up" data-aos-delay="500">--}}
{{--                {{ $car->name }}--}}
{{--            </h1>--}}
{{--            <div class="mt-7">--}}
{{--                <button type="button"--}}
{{--                        class="flex gap-1 sm:gap-3 items-center p-2 sm:py-2 sm:px-[10px] bg-white bg-opacity-60 rounded-[10px]">--}}
{{--                    <img src="{{ asset('assets/svgs/sneak-peek.svg') }}" class="w-3 h-3 sm:w-4 sm:h-4" alt="">--}}
{{--                    <p class="text-[10px] font-semibold sm:text-sm text-dark">--}}
{{--                        Car Gallery--}}
{{--                    </p>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        @endcomponent--}}
{{--    </header>--}}

@component('components.hero-section',[ 'image' => $car->main_image?->getUrl('car-detail')] )
    <p class="text-sm text-white md:text-xl md:leading-[30px] font-light" data-aos="fade-up" data-aos-delay="700">
        {{ $car->type->name }}
    </p>
    <h1 class="font-epilogue font-black text-5xl lg:text-[72px] text-white mt-4" data-aos="fade-up" data-aos-delay="500">
        {{ $car->name }}
    </h1>
    @if($car->total_images > 0)
        <div class="mt-7">
            <button type="button"
                    class="flex gap-1 sm:gap-3 items-center p-2 sm:py-2 sm:px-[10px] bg-white bg-opacity-60 rounded-[10px]"   onclick="app.openGallery({{ $car->id }})">
                <img src="{{ asset('assets/svgs/sneak-peek.svg') }}" class="w-3 h-3 sm:w-4 sm:h-4" alt="">
                <p class="text-[10px] font-semibold sm:text-sm text-dark">
                    Car Gallery
                </p>
            </button>
        </div>
    @endif
@endcomponent

    @php
        $features = [
            (object) [
                'icon' => asset('assets/svgs/feature-capacity.svg'),
                'name' => 'Capacity',
                'caption' => $car->passengers . ' people',
            ],
            (object) [
                'icon' => asset('assets/svgs/feature-age_limit.svg'),
                'name' => 'Age Limit',
                'caption' => $car->age . ' + Hire',
            ],
            (object) [
                'icon' => asset('assets/svgs/feature-transmission.svg'),
                'name' => 'Transmission',
                'caption' => ucfirst($car->transmission),
            ],
            (object) [
                'icon' => asset('assets/svgs/features-doors_count.svg'),
                'name' => 'Doors count',
                'caption' => $car->doors,
            ],
        ];

        // Add color features if they exist
        if (!empty($car->exterior)) {
            $features[] = (object) [
                'icon' => asset('assets/svgs/features-doors_count.svg'),
                'name' => 'Exterior Colour',
                'caption' => $car->exterior,
            ];
        }

        if (!empty($car->interior)) {
            $features[] = (object) [
                'icon' => asset('assets/svgs/features-doors_count.svg'),
                'name' => 'Interior Colour',
                'caption' => $car->interior,
            ];
        }
    @endphp
    <section class="pt-12 pb-[100px] max-w-screen-xl mx-auto px-4 lg:px-10">
        <div class="grid md:grid-cols-12 gap-[30px]">
            <div class="md:col-span-6 lg:col-span-8">

                <div class="mt-0 mb-5 aos-init aos-animate" data-aos="fade-up">

                    <img src="{{ $car->main_image?->getUrl('car-detail') }}" class="w-full rounded-md" alt=""></div>

                <div class="grid grid-cols-2 gap-4 lg:grid-cols-4">
                    @foreach ($features as $feature)
                        <div class="bg-[#F3F4F6] p-5 flex items-center gap-3 rounded-[13px]" data-aos="fade-up"
                             data-aos-delay="{{ ($loop->index + 1) * 150 }}">
                            <img src="{{ $feature->icon }}" alt="">
                            <div class="flex flex-col gap-1">
                                <p class="text-xs font-medium text-dark text-opacity-60">
                                    {{ $feature->name }}
                                </p>
                                <p class="text-base font-medium tetx-dark">
                                    {{ $feature->caption }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-[54px] mb-5" data-aos="fade-up">
                    @component('components.banner-info')
                        @slot('type', 'light')
                        @slot('body')
                            Book this car online now to pick up and drop off at our {{ $car->location?->name }} branch. For custom pick up and drop off locations, please complete our contact form to receive a quote.
                        @endslot
                    @endcomponent
                </div>

                {{-- Car Details --}}
                <div class="mb-8" data-aos="fade-up">

                    <p>
                        {!! \App\HireCar::getDescription(\Illuminate\Support\Str::markdown($car->description)) !!}
                    </p>
{{--                    <p class="text-base font-medium sm:text-xl text-dark">--}}
{{--                        The supercar that combines the breathtaking performance of the R8 with the open-top thrill of a convertible. This 2-door high-performance Audi Sport convertible with a 5.2 litre V10 engine is sure to be memorable.--}}
{{--                    </p>--}}

{{--                    <p class="text-sm font-medium text-dark">--}}
{{--                        <span class="font-semibold">Engine Size: </span> &nbsp;--}}
{{--                        5.2--}}
{{--                        <span class="font-semibold">Fuel: </span> &nbsp;--}}
{{--                        Petrol--}}
{{--                    </p>--}}
{{--                    <br>--}}
{{--                    <p class="text-sm font-medium text-dark">--}}
{{--                        Available for self drive or chauffeur service.--}}
{{--                    </p>--}}
{{--                    <br>--}}
{{--                    <p class="text-sm font-medium text-dark">--}}
{{--                        Hire for pleasure, business, event, wedding or special occasion. <br>--}}
{{--                        Drivers must be over the age of 25.--}}
{{--                    </p>--}}
                    <br>
                    <p class="text-sm font-semibold text-dark">
                        Follow us on all major social media platforms for weekly deals, exclusive offers and new car updates.
                    </p>
                </div>

                @php
                    $exampleFeatureList = ['USB Input', 'Radio', 'Parking Sensors', 'Bluetooth', 'GPS', 'Air Conditioning'];
                @endphp
                <ul class="grid sm:grid-cols-2 gap-y-2 sm:gap-x-10 max-w-[310px]" data-aos="fade-up">
                    @foreach ($exampleFeatureList as $list)
                        <li class="flex items-start gap-3">
                            <img src="{{ asset('assets/svgs/blue-check-square.svg') }}"  alt="">
                            <p class="font-medium text-dark text-[13px] max-w-[105px]">{{ $list }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="md:col-span-6 lg:col-span-4">
                <form action="" method="" class="py-4 sm:py-8 sm:px-[14px] rounded-[20px] bg-[#2C2F36]" data-aos="fade-up">
                    @csrf
                    @method('POST')
                    <p class="text-lg font-semibold text-primary px-4 sm:px-[10px]">
                        @if($carAvailable == true)
                            £{{ number_format(json_decode($pricingDetails)->daily_price, 0, '', ',') }} per day ({{ json_decode($pricingDetails)->hire_days }} days)
                        @else
                            from £{{ number_format($car->pricing['daily'], 0, '', ',') }} per day
                        @endif
                    </p>
                    {{-- If not logged in or not registered user --}}
                    @guest
                        <p class="my-5 text-xs font-medium text-white px-4 sm:px-[10px]">
                            Not logged in. You must be
                            <a href="{{ route('register') }}" class="underline">registered</a> and <br>
                            <a href="{{ route('login') }}" class="underline">logged in</a>,
                            in order to secure this booking.
                        </p>
                    @endguest

                    <div class="bg-white sm:rounded-[14px] p-5 border border-[#E1E1E1]">
                        <p class="text-sm font-semibold text-dark text-opacity-60 text-opacity-40 mb-[26px]">
                            Date & Time
                        </p>
                        <div class="flex flex-col gap-2 mb-5">
                            <label for="date_range" class="text-sm font-semibold text-dark">
                                Pickup & Dropoff
                            </label>
                            @if(request()->has('pickup_dropoff'))
                                <x-input-field type="text" class-name="!text-sm !border !border-solid !border-[#cbcbcb] !bg-[#F3F4F6]" id="pickup_dropoff" name="pickup_dropoff"
                                               placeholder="Choose Date Range"
                                               value="{{ request()->get('pickup_dropoff') }}"
                                               autocomplete="off" required/>
                            @elseif(request()->session()->has('pickupDropoff'))
                                <x-input-field type="text" class-name="!text-sm !border !border-solid !border-[#cbcbcb] !bg-[#F3F4F6]" id="pickup_dropoff" name="pickup_dropoff"
                                               placeholder="Choose Date Range"
                                               value="{{ request()->get('pickupDropoff') }}"
                                               autocomplete="off" required/>
                            @else

                                <x-input-field type="text" class-name="!text-sm !border !border-solid !border-[#cbcbcb] !bg-[#F3F4F6]" id="pickup_dropoff" name="pickup_dropoff"
                                               placeholder="Choose Date Range"
                                               autocomplete="off" required/>
                            @endif

                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="date_range" class="text-sm font-semibold text-dark">
                                Pickup Time
                            </label>
                            <select  id="pickup_time" name="pickup_time" required="" class="inputStyle !text-sm !border !border-solid !border-[#cbcbcb] !bg-[#F3F4F6]">
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

                        <p class="mt-[11px] mb-7 pb-[22px] text-xs text-dark font-medium border-b border-b-[#E1E1E1]">
                        @if($datesAvailable == true)
                            @if(json_decode($pricingDetails)->status == "available")
                                @if(json_decode($pricingDetails)->hire_days >= $car->minimum_hire_days)
                                        <span class="font-bold">Congrats!</span> This car is available on the date/time above.
                                @else
                                        <span class="font-bold">Sorry!</span> This car must be booked for at least {{ $car->minimum_hire_days }} days.
                                @endif
                            @else
                                    <span class="font-bold">Sorry!</span> This car is not available on the date & time selected above.
                            @endif
                        @else
                                Choose dates above to check availability.
                        @endif
                        </p>

                        <div class="flex flex-col gap-2">
                            <label for="pickup_location" class="text-sm font-semibold text-dark text-opacity-60">
                                Pickup Location
                            </label>
                            <select name="pickup-location" id="pickup-location" class="inputStyle !text-sm !border !border-solid !border-[#cbcbcb] !bg-[#F3F4F6]">
                                @foreach($car->locations as $location)
                                    <option value="{{ $location->id }}" 
                                        {{ (request()->get('location') == $location->id) ? 'selected' : ($location->pivot->is_primary ? 'selected' : '') }}>
                                        {{ $location->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="inline-flex items-center gap-3 mt-3">
                            <x-input-checkbox name="chauffeur_choice" id="chauffeur_choice" checked="{{ request()->get('include_chauffeur') === 'true' }}"  />
                            <label for="include_driver" class="text-xs font-medium uppercase text-dark">INCLUDE A CHAUFFEUR FOR £{{ number_format(nova_get_setting('chauffeur_price'), 2) + 0 }}/day</label>
                        </div>

                        <p class="my-6 pb-[26px] text-xs text-dark text-opacity-65 font-medium border-b border-b-[#E1E1E1]">
                            No deposit will be required for chauffeur <br class="desktop"> bookings.
                        </p>

                        @if($carAvailable)
                        <div class="flex items-center justify-between gap-5">
                            <div>
                                <p class="mb-1 text-base font-semibold text-dark">Total</p>
                                <p class="text-sm font-medium text-dark text-opacity-60">Incl. VAT</p>
                            </div>
                            <p class="font-semibold text-[26px] text-primary">
                                £{{ number_format(json_decode($pricingDetails)->price_without_deposit, 2, '.', ',') }}
                            </p>

                        </div>


                            <div>

                                @if(!json_decode($pricingDetails)->chauffeur_included)
                                    @if(json_decode($pricingDetails)->require_deposit_upfront)
                                        @if(json_decode($pricingDetails)->refundable_deposit)
                                            <p class="text-sm pt-2 text-dark"><span class="font-bold text-dark">Refundable Deposit:</span> <span id="deposit_price" name="deposit_price" class="ch-text--bold">£{{ number_format(json_decode($pricingDetails)->refundable_deposit, 2, '.', ',') }}</span></p>
                                        @endif
                                    @else
                                        @if(json_decode($pricingDetails)->refundable_deposit)
                                            <p class="text-sm pt-2 text-dark">Deposit of <span id="deposit_price" name="deposit_price" class="text-dark">£{{ number_format(json_decode($pricingDetails)->refundable_deposit, 2, '.', ',') }}</span> will be payable in branch.</p>
                                        @endif
                                    @endif
                                @endif

                            </div>
                        @endif
                    </div>

                    <div class="flex flex-col items-center justify-center">
                        @if($datesAvailable)
                        @if($carAvailable)
                            @if(json_decode($pricingDetails)->hire_days >= $car->minimum_hire_days)
                                <p class="mt-[30px] mb-[15px] text-white text-xs text-opacity-40 font-medium text-center">
                                    Next we will ask you for your payment details
                                </p>

                                @if (Auth::check())
                                    <div>
                                        @if(Auth::user()->dob)
                                            @if((Auth::user()->age < $car->age) && (request()->get('include_chauffeur') !== 'true'))
                                                <p class="mt-[30px] mb-[15px] text-danger text-xs text-opacity-90 font-medium text-center">
                                                    We are unable to offer you this car. You must be at least {{ $car->age }} years old.
                                                </p>
                                            @else
                                                <a href="/hire/checkout{{ '?'.http_build_query(request()->all()) }}" class="btn btn-primary" id="booking_button">
                                                    Book Instantly
                                                </a>
                                            @endif
                                        @else
                                            <div class="bg-red-600 text-center text-white">
                                                <p class="font-bold mb-0 text-center">You must enter a date of birth for your profile before you can continue.</p>
                                                <a class="text-center" href="/account/edit">Update Account</a>
                                            </div>
                                        @endif
                                    </div>
                                @else
                                    <a href="/login?previous={{ request()->fullUrl() }}" class="btn btn-primary" id="booking_button">
                                        Login to Book
                                    </a>
                                @endif



                            @else
                                <button  class="btn btn-primary disabled mt-5" disabled>
                                    Car Unavailable
                                </button>
                            @endif
                            @guest
                            @endguest
                            @else
                                <button  class="btn btn-primary disabled mt-5" disabled>
                                    Car Unavailable
                                </button>
                            @endif
                        @else
                            <button  class="btn btn-primary disabled mt-5" disabled>
                                Choose Dates
                            </button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="dark-container !bg-[#F3F4F6] mt-11 flex flex-col items-center">
        <h4 class="text-3xl font-black text-center sm:text-5xl text-dark font-epilogue" data-aos="fade-up">
            Not the perfect car for you?
        </h4>
        <p class="text-dark text-base sm:text-[23px] leading-7 font-medium text-center mx-auto mt-5 mb-10"
           data-aos="fade-up">
            We have a fleet of over 30 performance, luxury and supercars available to hire.
        </p>

        <a href="{{ route('hire').'/?'.http_build_query(array_merge(request()->all(),['ref' => 'af'])) }}" class="btn btn-primary" data-aos="fade-up">
            View all available vehicles
        </a>
    </section>

@endsection
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.9.1/dayjs.min.js"
        integrity="sha512-u7elBfdMr+7LhU4rvUk3IM28QZDKTyUxba4Nx2IJ1W9cj4shfRSPq7EZXD2ULD9cBoizw2FQyeR6YBog6LcnHg=="
        crossorigin="anonymous"></script>
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
    });
</script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/js/main.js"></script>

<script type='text/javascript' src='/js/plugins/ui/datepicker.min.js'></script>
<script type='text/javascript'>jQuery(document).ready(function (jQuery) {
        var lastScrollTop = localStorage.getItem("autofusion_scroll");
        if (lastScrollTop) {
            jQuery(window).scrollTop(lastScrollTop);
            localStorage.removeItem('autofusion_scroll');
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
                checkAvailability(date_start, date_end);
            }
        });

        var car = {{ $car->id }};
        var date_start = 0;
        var date_end = 0;
        var customerDetails = document.getElementById('customer-fields');

        jQuery.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });


        jQuery('#pickup_time').change(function() {
            var date_start = picker.getStartDate();
            var date_end = picker.getEndDate();
            checkAvailability(date_start, date_end);
        });

        jQuery('#chauffeur_choice').change(function() {
            var date_start = picker.getStartDate();
            var date_end = picker.getEndDate();
            checkAvailability(date_start, date_end);
        });

        var checkAvailability = function (date_start, date_end) {
            var pickup_time_value = document.getElementById('pickup_time').value;
            var pickup_date_value = document.getElementById('pickup_dropoff').value;
            var chauffeur_value = document.getElementById('chauffeur_choice').checked;
            var current_url = window.location.toString();
            var pricing_details = document.getElementById('pricing_details');
            var booking_button = document.getElementById('booking_button');

            localStorage.setItem("autofusion_scroll", $(window).scrollTop());

            // Update URL with changes
            var url = new URL(current_url);
            var search_params = url.searchParams;
            search_params.set('pickup_time', pickup_time_value);
            search_params.set('pickup_dropoff', pickup_date_value);
            search_params.set('include_chauffeur', chauffeur_value);
            url.search = search_params.toString();
            window.location.href = url;
            var availabilityMessage = document.getElementById('availabilityMessage');
            availabilityMessage.innerHTML = "<p><strong>Checking Availability...</strong></p>";
        };
    });</script>
@endpush
