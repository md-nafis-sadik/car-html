@extends('layouts.app')

@section('head-info')
    <title>{{ config('app.name') }} | Car Hire In Glasgow | Luxury Supercars</title>
    <meta name="description" content="View our fleet of performance, luxury and supercars available to hire."/>
    <link rel="canonical" href="{{ request()->url() }}"/>
    <meta property="og:locale" content="en_GB"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="{{ asset('/images/homepage-header.jpeg') }}"/>
    <meta property="og:title" content="{{ config('app.name') }} | Car Hire In Glasgow | Luxury Supercars"/>
    <meta property="og:description" content="View our fleet of performance, luxury and supercars available to hire."/>
    <meta property="og:url" content="{{ request()->url() }}"/>
    <meta property="og:site_name" content="{{ config('app.name') }}"/>
    <meta name="robots" content="index, follow"/>
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <meta name="keywords" content="autofusion hire, autofusion, car hire glasgow, local car hire firm, glasgow supercars, hire lamborghini"/>
    <link rel='stylesheet' href='/css/themify-icons.css' type='text/css' media='all'/>
    <link rel="stylesheet" href="{{ asset('css/plugins/photoswipe/photoswipe.css') }}">
    <script src="{{ mix('js/app.js') }}" defer="defer"></script>
@endsection

@section('main')
    <header class="page-header h-[100dvh] sm:h-[85dvh] lg:h-[75dvh] px-4 sm:px-6 lg:px-24 xl:px-40" style="background: linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.7)), url('https://autofusioncars.co.uk/images/20_.jpg') no-repeat center center/cover">
        <div class="bg-black bg-opacity-70 w-full h-full absolute top-0 left-0 z-10"></div>
        <div class="absolute z-10 top-[5%] sm:top-[15%] lg:top-1/2 lg:-translate-y-1/2 lg:left-[10%] px-4">
            <h1 class="font-epilogue font-black text-3xl sm:text-4xl md:text-5xl lg:text-[72px] text-white aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                Book Your Favourite Car <span class="mt-5 block text-sm text-white md:text-xl mb-9 md:leading-[30px] font-light">View our fleet of performance, luxury and supercars available to hire.</span>
            </h1>
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

                                <!-- Second Row: Vehicle Type, Brand Filter, Price Filter, Search Button -->
                                <div class="flex flex-col sm:flex-row gap-[7px] items-start sm:items-center">
                                    <!-- Vehicle Type Field -->
                                    <select name="type" id="type" class="inputStyle w-full sm:w-[150px]">
                                        <option value="">Any Type</option>
                                    @foreach($types as $type)
                                            <option @if(request()->get('type') == $type->slug)selected
                                                    @endif  value="{{ $type->slug }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                    
                                    <!-- Brand Filter -->
                                    <select name="brand" id="brand" class="inputStyle w-full sm:w-[150px]">
                                        <option value="">Any Brand</option>
                                    @foreach($brands as $brand)
                                            <option @if(request()->get('brand') == $brand->slug)selected
                                                    @endif  value="{{ $brand->slug }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                    
                                    <!-- Price Filter -->
                                    <select name="sort_by" id="sort_by" class="inputStyle w-full sm:w-[200px]">
                                        <option @if(request()->get('sort_by') == "price_low") selected
                                                @endif value="price_low">Price Low to High
                                        </option>
                                        <option @if(request()->get('sort_by') == "price_high") selected
                                                @endif value="price_high">Price High to Low
                                        </option>
                                    </select>
                                    
                                    <!-- Search Button -->
                                    <button type="submit" class="btn btn-primary w-full sm:w-auto px-8">
                                        Search
                                    </button>
                                </div>
                            </form>
            </div>
        </div>
    </header>
{{--        @component('components.hero-section', ['name' => 'Book Your Favourite Car', 'dark' => false, 'image' => asset('images/20_.jpg')])--}}
{{--            @slot('caption')--}}
{{--                View our fleet of performance, luxury and supercars available to hire--}}
{{--            @endslot--}}
{{--    Form here --}}
{{--        @endcomponent--}}

    <section id="carList" class="pt-[60px] pb-[100px] max-w-screen-xl mx-auto px-4 lg:px-20">
        @if(count($cars) > 0)
            <!-- Results Count -->
            <div class="mb-8 flex flex-col sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <h2 class="text-2xl font-bold text-dark">
                        {{ $cars->total() }} {{ Str::plural('Car', $cars->total()) }} Available
                    </h2>
                    @if(request()->hasAny(['pickup_dropoff', 'type', 'location', 'sort_by']))
                        <p class="text-dark text-opacity-60 mt-1">
                            Showing results for your search criteria
                            @if(request()->get('location'))
                                @php
                                    $selectedLocation = \App\Location::find(request()->get('location'));
                                @endphp
                                @if($selectedLocation)
                                    at <span class="font-medium text-primary">{{ $selectedLocation->name }}</span>
                                @endif
                            @endif
                        </p>
                    @endif
                </div>
                @if(request()->hasAny(['pickup_dropoff', 'type', 'brand', 'location', 'sort_by']))
                    <div class="mt-4 sm:mt-0">
                        <a href="{{ route('hire.cars') }}" 
                           class="inline-flex items-center text-sm text-primary hover:text-primary hover:opacity-80 font-medium">
                            <svg class="mr-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Clear Filters
                        </a>
                    </div>
                @endif
            </div>
            
            <div class="grid grid-cols-2 gap-4 lg:grid-cols-3 sm:gap-x-6 sm:gap-y-8">
                @foreach ($cars as $car)
                    @php
                    if($dates_available) {
                        $vehiclePrice = number_format($car->special_price, 0, '', ',');
                    } else {
                        $vehiclePrice = number_format($car->pricing['daily'], 0, '', ',');
                    }
                    @endphp

                    @include('components.product-card', [
                        'car_id' => $car->id,
                        'name' => $car->name,
                        'thumbnail' => $car->main_image?->getUrl('thumb'),
                        'type' =>  $car->type->name,
                        'price' => $vehiclePrice,
                        'index' => $loop->index,
                        'route' =>  '/hire/cars/'.$car->slug.'/?'.http_build_query(array_merge(request()->all(),['ref' => 'af']))
                    ])
                @endforeach
            </div>
        @else
            <!-- No Results Found -->
            <div class="text-center py-16">
                <div class="max-w-md mx-auto">
                    <!-- Icon -->
                    <div class="mb-6">
                        <svg class="mx-auto h-24 w-24 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1-1H8a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </div>
                    
                    <!-- Message -->
                    <h3 class="text-2xl font-bold text-dark mb-4">No Cars Found</h3>
                    <p class="text-dark text-opacity-60 mb-8">
                        @if(request()->hasAny(['pickup_dropoff', 'type', 'location', 'sort_by']))
                            We couldn't find any cars matching your search criteria. Try adjusting your filters or clearing them to see all available vehicles.
                        @else
                            We couldn't find any cars at the moment. Please try again later or contact us for assistance.
                        @endif
                    </p>
                    
                    <!-- Action Buttons -->
                    <div class="space-y-4 sm:space-y-0 sm:space-x-4 sm:flex sm:justify-center">
                        @if(request()->hasAny(['pickup_dropoff', 'type', 'location', 'sort_by']))
                            <a href="{{ route('hire.cars') }}" 
                               class="btn btn-primary inline-flex items-center justify-center">
                                <svg class="mr-2 -ml-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                </svg>
                                Clear All Filters
                            </a>
                        @endif
                        
                        <a href="{{ route('hire') }}" 
                           class="inline-flex items-center justify-center px-6 py-3 border border-gray-300 text-base font-medium rounded-[10px] text-dark bg-white hover:bg-gray-50 transition-colors duration-200">
                            <svg class="mr-2 -ml-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Back to Home
                        </a>
                    </div>
                    
                    <!-- Contact Info -->
                    <div class="mt-8 pt-6 border-t border-gray-200">
                        <p class="text-sm text-dark text-opacity-50 mb-2">Need help finding the perfect car?</p>
                        <div class="flex flex-col sm:flex-row items-center justify-center space-y-2 sm:space-y-0 sm:space-x-6">
                            <a href="tel:{{ nova_get_setting('phone_number', '0141 280 9444') }}" 
                               class="inline-flex items-center text-primary hover:text-primary hover:opacity-80 font-medium">
                                <svg class="mr-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                {{ nova_get_setting('phone_number', '0141 280 9444') }}
                            </a>
                            <a href="mailto:{{ nova_get_setting('email', 'info@autofusion.co.uk') }}" 
                               class="inline-flex items-center text-primary hover:text-primary hover:opacity-80 font-medium">
                                <svg class="mr-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                Email Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if(count($cars) > 0)
            {{ $cars->appends(request()->all())->links() }}
{{-- Pagination --}}
{{--        @include('components.pagination.squircle', ['paginator' => $paginatedData])--}}
        @endif
    </section>

    @include('components.why-choose-autofusion-hire')
@endsection

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.9.1/dayjs.min.js"
        integrity="sha512-u7elBfdMr+7LhU4rvUk3IM28QZDKTyUxba4Nx2IJ1W9cj4shfRSPq7EZXD2ULD9cBoizw2FQyeR6YBog6LcnHg=="
        crossorigin="anonymous"></script>
<script type='text/javascript'>
    jQuery(document).ready(function (jQuery) {
        // jQuery('input[name="pickup_dropoff_old"]').daterangepicker({
        //     // timePicker: true,
        //     // showWeekNumbers: true,
        //     // timePicker24Hour: true,
        //     // maxSpan: {
        //     //     "days": 7
        //     // },
        //     drops: "auto",
        //     linkedCalendars: false,
        //     changeMonth: false,
        //     // stepMonths: 0,
        //     // showDropdowns: true,
        //     minDate: moment().startOf('hour').add(1, 'hour').min(12, 'hour'),
        //     startDate: moment().startOf('hour'),
        //     endDate: moment().startOf('hour').add(7, 'day').add(1, 'hour'),
        //     // endDate: moment().startOf('hour').add(32, 'hour'),
        //     locale: {
        //         "fromLabel": "From",
        //         "toLabel": "To",
        //         "separator": " - ",
        //         // format: 'DD/MM'
        //         format: 'DD/MM/YY'
        //         // format: 'DD/MM/YY hh:mm A'
        //     },
        //     autoApply: true,
        // });

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
        // var lastScrollTop = jQuery.cookie('last-scroll-top');
        var lastScrollTop = false;
        if (lastScrollTop) {
            jQuery(window).scrollTop(lastScrollTop);
            // jQuery.removeCookie('last-scroll-top');
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
            // jQuery.cookie('last-scroll-top', jQuery(window).scrollTop());
            var form = document.getElementById('car_search_form');
            form.submit();
        };
    });</script>
@endpush
