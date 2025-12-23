@extends('layouts.frontend')
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

    <link href="{{ asset('css/chassis/chassis.css') }}" rel="stylesheet" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" />
    <link rel='stylesheet' href='/css/themify-icons.css' type='text/css' media='all'/>

    <script src="{{ asset('js/chassis/chassis.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/plugins/photoswipe/photoswipe.css') }}">

@endsection
@section('body')
    <body class="ch-bc--grey-3 ch-bg--grey-2">
    @include('partials.header')

    <a class="ch-skip" href="#main">Skip to main content</a>
    <main id="main">
        <div id="main-section" class="ch-bg--white">
            <section class="hero ch-bg--ac-black ch-color--white" style="background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{  $car->main_image?->getUrl('car-detail') }}) !important">
                <div class="ch-container">
                    <div class="ch-row md:ch-mt--5 ch-mb--5 sm:ch-mt--0">
                        <div class="sl:ch-col--8 sm:ch-col--6 md:ch-col--12">
                            <div class="ch-text--center sl:ch-text--center">
                                <h2 class="ch-fs--4 ch-text--center">{{ $car->type->name }}</h2>
                                <h1 class="ch-fs--7 md:ch-fs--8 ch-mb--4">{{ $car->name }}</h1>
{{--                                <button onclick="app.openGallery({{ $car->id }})" class="ac-result__gallery-btn ch-width--12 sl:ch-width--auto ch-text--center pos-relative">--}}
                                <button onclick="app.openGallery({{ $car->id }})" class="ac-result__gallery-btn ch-text--center pos-revert">
                                    <span class="ac-result__image-count">{{ $car->total_images }}</span>Car Gallery
                                </button>
{{--                                <button class="ac-result__gallery-btn  js-off--hide" type="button" >--}}
{{--                                    <span class="ac-result__image-count">{{ $car->total_images }}</span>Sneak Peak--}}
{{--                                </button>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>



        <!-- Car Description-->
            <section class="ch-container">
                <div class="ch-row ch-mt--5">

                    <div class="sm:ch-col--6 sm:ch-col--offset-3 md:ch-col--8 md:ch-col--offset-0">
{{--                        <ul class="ch-row vehicle-card__description">--}}
{{--                            <li class="xs:ch-col--6 vehicle-card__description-item vehicle-card__description-item--seats">5 seats</li>--}}

{{--                            <li class="xs:ch-col--6 vehicle-card__description-item vehicle-card__description-item--bags">3 bag(s)</li>--}}

{{--                            <li class="xs:ch-col--6 vehicle-card__description-item vehicle-card__description-item--doors">5 doors</li>--}}

{{--                            <li class="xs:ch-col--6 vehicle-card__description-item vehicle-card__description-item--transmission transform--capitalize">automatic</li>--}}
{{--                        </ul>--}}
                        <div class="ch-row single_car_attribute_wrapper">
                            <div class="ch-col--12 md:ch-col--3 xs:ch-col--6">
                                <div class="car_attribute_icon ti-user"></div>
                                <div class="car_attribute_content">
                                    {{ $car->passengers }} People
                                </div>
                            </div>
                            <div class="ch-col--12 md:ch-col--3 xs:ch-col--6">
                                <div class="car_attribute_icon ti-calendar"></div>
                                <div class="car_attribute_content">
                                    {{ $car->age }}+ Hire
                                </div>
                            </div>
                            <div class="ch-col--12 md:ch-col--3 xs:ch-col--6">
                                <div class="car_attribute_icon ti-panel"></div>
                                <div class="car_attribute_content">
                                    {{ ucfirst($car->transmission) }}
                                </div>
                            </div>
                            <div class="ch-col--12 md:ch-col--3 xs:ch-col--6">
                                <div class="car_attribute_icon ti-car"></div>
                                <div class="car_attribute_content">
                                    {{ $car->doors }} Doors
                                </div>
                            </div>
                        </div>

{{--                        <h2 class="ch-mb--1 ch-fs--4 md:ch-fs--6">Which tracker would you like?</h2>--}}
{{--                        <p class="ch-fs--3 ch-color--grey-6 ch-mb--4">--}}
{{--                            Choose the best option for your vehicle--}}
{{--                        </p>--}}
{{----}}

                        <p><span><em><strong>Book this car online now</strong> to pick up and drop off at our {{ $car->location->name }}.&nbsp;</em></span><span><em>For custom pick up and drop off locations, please complete our contact form to receive a quote.</em></span></p>

                        <p>
                            {!! \App\HireCar::getDescription(\Illuminate\Support\Str::markdown($car->description)) !!}
                        </p>

                        <p class="ch-fs--3 ch-mb--4"><strong class="text-bold">Follow us on all major social media platforms for weekly deals, exclusive offers and new car updates.</strong>&nbsp;</p>

                        <div class="ch-row ch-mt--4 ch-mb--3">
{{--                            <div class="ch-col--4 md:ch-col--4 xs:ch-col--6">--}}
{{--                                <ul class="ch-list ch-measure">--}}
{{--                                    <li class="ch-text--bold">Included:</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
                            <div class="ch-col--4 md:ch-col--4 xs:ch-col--6">
                                <ul class="ch-list ch-list--tick ch-measure">
                                    <li>USB Input</li>
                                    <li>Parking Sensors</li>
                                    <li>GPS</li>
                                </ul>
                            </div>
                            <div class="ch-col--4 md:ch-col--4 xs:ch-col--6">
                                <ul class="ch-list ch-list--tick ch-measure">
                                    <li>Radio</li>
                                    <li>Bluetooth</li>
                                    <li>Air Conditioning</li>
                                </ul>
                            </div>
                        </div>

                        <div class="ch-form__group">
                            <span class="ch-form__control-validation field-validation-valid" data-cy="selectServiceValidationError" data-valmsg-for="SelectedProduct" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class="sm:ch-mt--0 sm:ch-display--block sm:ch-col--6 sm:ch-col--offset-3 md:ch-col--4 md:ch-col--offset-0 ch-fs--2">

                        <div class="ch-card ch-color--ac-black md:ch-display--block">

                            <div class="ch-card__content ch-bg--grey-2 ch-card__content--compact">
                                <h3 class="ch-mt--2 ch-fs--4">@if($carAvailable == true)
                                        <span class="single_car_price">£{{ number_format(json_decode($pricingDetails)->daily_price, 0, '', ',') }}</span> per day ({{ json_decode($pricingDetails)->hire_days }} days)
                                    @else
                                        from <span class="single_car_price">£{{ number_format($car->pricing['daily'], 0, '', ',') }}</span> per day
                                    @endif </h3>
{{--                                <h3 class="ch-mt--2 ch-fs--4">from @if($carAvailable == true)--}}
{{--                                        <span class="single_car_price">£{{ number_format(json_decode($pricingDetails)->daily_price, 0, '', ',') }}</span>--}}
{{--                                    @else--}}
{{--                                        <span class="single_car_price">£{{ number_format($car->pricing['daily'], 0, '', ',') }}</span>--}}
{{--                                    @endif per day</h3>--}}
                            </div>

                            <div class="ch-card__content">
                                @guest
                                    <p><span class="ch-text--bold">Not logged in</span>. You must be <a href="{{ route('register') }}">registered</a> and <a href="{{ route('login') }}">logged in</a>, in order to secure this booking.</p>
                                @else
                                    <p><span class="ch-text--bold">Hi {{ auth()->user()->title_last_name }}</span>. As you're logged in we'll use the details on your account for the booking.</p>
                                @endguest

{{--                                <div style="display: flex; justify-content: space-between">--}}
{{--                                    <p class="ch-mb--0 sm:ch-fs--3 fs-18 ch-color--grey-6">Your vehicle</p>--}}
{{--                                    <a data-cy="vehicleEditLink" href="https://autofusion.test/book">Not you? Sign out</a>--}}
{{--                                </div>--}}

{{--                                <p class="ch-display--block ch-fs--4 ch-text--bold ch-mb--0">Autofusion Clydebank</p>--}}

                                <hr class="ch-mv--3 ch-bg--grey-3">
                                <div style="display: flex; justify-content: space-between">
                                    <p class="ch-mb--0 fs-18 ch-color--grey-6">Date & Time</p>
{{--                                    <a data-cy="serviceEditLink" href="https://autofusion.test/book/trackers/choose-trackers">Edit</a>--}}
                                </div>
                                <div class="ch-mb--2">
                                    <div class="ch-mb--2">
                                        <div class="ch-form__group ch-fs--3">
                                            <label class="ch-form__control-label ch-mt--2 ch-text--bold" for="email">Pickup & Dropoff</label>
                                            <input type="text" id="pickup_dropoff" name="pickup_dropoff"
                                                   placeholder="Choose Date Range"
                                                   value="@if(request()->has('pickup_dropoff')){{ request()->get('pickup_dropoff') }}@elseif(request()->session()->has('pickupDropoff')){{ request()->session()->get('pickupDropoff') }}@endif"
                                                   autocomplete="off" required class="ch-form__control ch-fs--3"/>
                                        </div>

                                        <div class="ch-form__group">
                                            <label class="ch-form__control-label ch-text--bold" for="pickup_time">Pickup Time</label>
                                            <select class="ch-form__control" id="pickup_time" name="pickup_time" required="">
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
                                        @if($datesAvailable == true)
                                            @if(json_decode($pricingDetails)->status == "available")
                                                @if(json_decode($pricingDetails)->hire_days >= $car->minimum_hire_days)
                                                    <div id="availabilityMessage" name="availabilityMessage"><p><span class="ch-text--bold">Congrats!</span> This car is available on the date/time above.</p></div>
                                                @else
                                                    <div id="availabilityMessage" name="availabilityMessage"><p><span class="ch-text--bold color-red">Sorry!</span> This car must be booked for at least {{ $car->minimum_hire_days }} days.</p></div>
                                                @endif
                                            @else
                                                <div id="availabilityMessage" name="availabilityMessage"><p><span class="ch-text--bold">Sorry!</span> This car is not available on the date & time selected above.</p></div>

                                            @endif
                                        @else
                                            <div id="availabilityMessage" name="availabilityMessage"><p>Choose dates above to check availability.</p></div>
                                        @endif
                                    </div>
                                </div>

                                <hr class="ch-mv--3 ch-bg--grey-3">
                                <div style="display: flex; justify-content: space-between">
                                    <p class="ch-mb--0 fs-18 ch-color--grey-6">Pickup Location</p>
{{--                                    <a data-cy="branchEditLink" href="https://autofusion.test/book/trackers/select-branch">Edit</a>--}}
                                </div>

                                    <div class="ch-form__group ch-mt--2">
                                        <label class="ch-reader" for="sort_by">Choose Branch</label>
                                        <select id="pickup-location" class="ch-form__control" name="sort_by">
                                            @foreach($car->locations as $location)
                                                <option value="{{ $location->id }}" {{ $location->pivot->is_primary ? 'selected' : '' }}>
                                                    {{ $location->name }}{{ $location->pivot->is_primary ? ' (Primary)' : '' }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="ch-form__group ch-mt--2">
                                        <input type="checkbox" id="chauffeur_choice" name="chauffeur_choice" value="chauffeurIncluded" @if(request()->get('include_chauffeur') == 'true') checked @endif class="ch-checkbox"/>
                                        <label for="chauffeur_choice" class="ch-checkbox__label ch-fs--2">
                                             INCLUDE A CHAUFFEUR FOR £{{ number_format(nova_get_setting('chauffeur_price'), 2) + 0 }}/day
                                        </label>
                                    </div>
                                    <p>No deposit will be required for chauffeur bookings.</p>

{{--                                <p class="ch-display--block ch-fs--4 ch-text--bold ch-mb--0">Autofusion Clydebank</p>--}}



                                @if($carAvailable)
                                <hr class="ch-mv--3 ch-bg--grey-3">
                                <p class="ch-mb--n2 ch-fs--5 ch-text--bold">Price</p>
                                <div class="ch-align-items--center ch-display--flex">
                                    <p class="ch-mt--2 ch-mb--0 ch-fs--1 ch-color--grey-6">Incl. VAT</p>
                                    <span class="ch-color--ac-pricing ch-text--bold ch-fs--6 ch-ml--auto ch-mt--n1" id="TotalCost">£{{ number_format(json_decode($pricingDetails)->price_without_deposit, 2, '.', ',') }}</span>
                                </div>

                                    @if(!json_decode($pricingDetails)->chauffeur_included)
                                        @if(json_decode($pricingDetails)->require_deposit_upfront)
                                                @if(json_decode($pricingDetails)->refundable_deposit)
                                                    <p><strong>Refundable Deposit:</strong> <span id="deposit_price" name="deposit_price" class="ch-text--bold">£{{ number_format(json_decode($pricingDetails)->refundable_deposit, 2, '.', ',') }}</span></p>
                                                @endif
                                        @else
                                                @if(json_decode($pricingDetails)->refundable_deposit)
                                                    <p>Deposit of <span id="deposit_price" name="deposit_price" class="ch-text--bold">£{{ number_format(json_decode($pricingDetails)->refundable_deposit, 2, '.', ',') }}</span> will be payable in branch.</p>
                                                @endif
                                        @endif
                                    @endif
                                @endif
                            </div>
                        </div>
                        @if($carAvailable)
                            @if(json_decode($pricingDetails)->hire_days >= $car->minimum_hire_days)
                                <p class="ch-text--center ch-mt--3 md:ch-mt--4 ch-mb--1">Next we will ask you for your payment details</p>
                                @if (Auth::check())
                                    <div>
                                        @if(Auth::user()->dob)
                                            @if((Auth::user()->age < $car->age) && (request()->get('include_chauffeur') !== 'true'))
                                                <div class="ch-alert ch-alert--danger">
                                                    <p class="alert alert-danger ch-text--bold ch-mb--0 ch-text--center">We are unable to offer you this car. You must be at least {{ $car->age }} years old.</p>
                                                </div>
                                            @else
                                                <a href="/hire/checkout{{ '?'.http_build_query(request()->all()) }}" class="ch-btn ch-btn--success sl:ch-mb--0 ch-width--12 sl:ch-width--12" id="booking_button">Book Instantly
                                                </a>
                                            @endif
                                        @else
                                            <div class="ch-alert ch-alert--danger ch-text--center">
                                                <p class="alert alert-danger ch-text--bold ch-mb--0 ch-text--center">You must enter a date of birth for your profile before you can continue.</p>
                                                <a class="ch-text--center" href="/account/edit">Update Account</a>
                                            </div>
                                        @endif
                                    </div>
                                @else
                                    <div>
                                        <a href="/login?previous={{ request()->fullUrl() }}" class="btn btn-primary" id="booking_button">
                                            Login to Book
                                        </a>
                                    </div>
                                @endif

                            @else
                                <div class="ch-mt--3 md:ch-mt--4 ch-mb--1">
                                    <button type="button" class="ch-btn ch-btn--secondary ch-width--12 ch-mb--3 ch-centered" id="booking_button" disabled>Car Unavailable
                                    </button>
                                </div>
                            @endif

                        @else
                            <div class="ch-mt--3 md:ch-mt--4 ch-mb--1">
                                <button type="button" class="ch-btn ch-btn--secondary ch-width--12 ch-mb--3 ch-centered" id="booking_button" disabled>Car Unavailable
                                </button>
                            </div>

                        @endif

                    </div>
                </div>
            </section>
        <!-- End Car Description-->



            <div class="ch-text--center ch-mb--4 ch-mt--4 ch-bc--grey-3 ch-bg--grey-2 ch-pt--4">
            <div class="ch-container">
                <div class="ch-row">
                    <div class="cta-1">
                        <h2>Not the perfect car for you?</h2>
                        <p>We have a fleet of over 30 performance, luxury and supercars available to hire.</p>
                        <a href="{{ route('hire').'/?'.http_build_query(array_merge(request()->all(),['ref' => 'af'])) }}" type="submit" class="ch-btn ch-btn--sm ch-btn--primary">View all available vehicles</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </main>
    @include('partials.footer')
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
    </body>
@endsection
