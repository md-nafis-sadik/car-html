@extends('layouts.app')

@section('head-info')
    @if($location->seo_title)
        <title>{{ $location->seo_title }}</title>
    @else
        <title>{{ $location->name }} - Car Hire | {{ config('app.name') }}</title>
    @endif

    @if($location->seo_description)
        <meta name="description" content="{{ $location->seo_description }}" />
    @else
        <meta name="description" content="Car hire services at {{ $location->name }} - {{ $location->address }}. Premium car rental with {{ config('app.name') }}." />
    @endif

    @if($location->seo_keywords)
        <meta name="keywords" content="{{ $location->seo_keywords }}"/>
    @else
        <meta name="keywords" content="car hire {{ $location->name }}, car rental {{ $location->name }}, {{ config('app.name') }}"/>
    @endif

    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    
    @if($location->seo_title)
        <meta property="og:title" content="{{ $location->seo_title }}" />
    @else
        <meta property="og:title" content="{{ $location->name }} - Car Hire | {{ config('app.name') }}" />
    @endif

    @if($location->seo_description)
        <meta property="og:description" content="{{ $location->seo_description }}" />
    @else
        <meta property="og:description" content="Car hire services at {{ $location->name }} - {{ $location->address }}" />
    @endif
    
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection

@section('main')
    <header class="page-header h-[60dvh]">
        <img src="{{ asset('assets/images/default-header.png') }}" class="w-full h-full" alt="">
        <div class="absolute top-0 left-0 z-10 w-full h-full bg-black bg-opacity-70"></div>
        @component('components.header-content', ['name' => $location->name])
            @slot('caption')
                @if($location->description)
                    {{ $location->description }}
                @else
                    Premium car hire services at {{ $location->name }}
                @endif
            @endslot
            <div class="flex items-center gap-4">
                <a href="{{ route('hire.cars') }}?location={{ $location->id }}" class="btn btn-primary">
                    Book a Car
                </a>
                <a href="{{ route('contact') }}" class="btn btn-white">
                    Contact Us
                </a>
            </div>
        @endcomponent
    </header>

    <div class="base-container">
        <div class="grid gap-10 md:grid-cols-2">
            <div>
                <h4 class="text-3xl font-black sm:text-5xl font-epilogue mb-9" data-aos="fade-up">
                    {{ $location->name }}
                </h4>
                
                @if($location->description)
                    <p class="mb-4 text-base" data-aos="fade-up">
                        {{ $location->description }}
                    </p>
                @endif
                
                <!-- Address -->
                <p class="mb-4 text-base" data-aos="fade-up">
                    <span class="font-bold">Address:</span>
                    <a href="https://www.google.com/maps/search/{{ urlencode($location->address) }}" target="_blank" class="text-link">
                        {{ $location->address }}
                    </a>
                </p>

                <!-- Contact Information -->
                @if($location->phone)
                    <p class="mb-4 text-base" data-aos="fade-up">
                        <span class="font-bold">Phone:</span>
                        <a href="tel:{{ $location->phone }}" class="text-link">
                            {{ $location->phone }}
                        </a>
                    </p>
                @endif

                @if($location->email)
                    <p class="mb-4 text-base" data-aos="fade-up">
                        <span class="font-bold">Email:</span>
                        <a href="mailto:{{ $location->email }}" class="text-link">
                            {{ $location->email }}
                        </a>
                    </p>
                @endif

                <!-- Opening Hours -->
                @if($location->opening_hours)
                    <div class="mb-4" data-aos="fade-up">
                        <p class="font-bold mb-2">Opening Hours:</p>
                        <div class="space-y-1">
                            @foreach($location->opening_hours as $day => $hours)
                                <div class="flex justify-between">
                                    <span class="capitalize">{{ $day }}</span>
                                    <span>{{ $hours }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Services -->
                @if($location->services)
                    <div class="mb-4" data-aos="fade-up">
                        <p class="font-bold mb-2">Services:</p>
                        <div class="flex flex-wrap gap-2">
                            @foreach($location->services as $key => $service)
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-primary bg-opacity-10 text-primary">
                                    {{ $key }}@if($service): {{ $service }}@endif
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Franchise Information -->
{{--                @if($franchise)--}}
{{--                    <p class="text-base" data-aos="fade-up">--}}
{{--                        <span class="font-bold">Operated By:</span>--}}
{{--                        <span>{{ $franchise->name }}</span>--}}
{{--                        @if($franchise->contact_email)--}}
{{--                            <br><span class="text-sm text-gray-600">{{ $franchise->contact_email }}</span>--}}
{{--                        @endif--}}
{{--                    </p>--}}
{{--                @endif--}}
            </div>

            <div>
                @if($location->address)
                    <iframe src="https://maps.google.com/maps?q={{ urlencode($location->address) }}&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                            class="w-full rounded-xl" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" data-aos="fade-up">
                    </iframe>
                @elseif($location->lat && $location->lng)
                    <iframe src="https://maps.google.com/maps?q={{ $location->lat }},{{ $location->lng }}&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                            class="w-full rounded-xl" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" data-aos="fade-up">
                    </iframe>
                @else
                    <div class="bg-gray-200 rounded-xl h-64 flex items-center justify-center" data-aos="fade-up">
                        <p class="text-gray-600">Map not available for this location</p>
                    </div>
                @endif
            </div>
        </div>

        <!-- Available Cars Section -->
        @php
            $carCount = is_object($cars) && method_exists($cars, 'count') ? $cars->count() : count($cars);
            $isPaginated = is_object($cars) && method_exists($cars, 'total');
        @endphp
        
        @if($carCount > 0)
            <section class="mt-24">
                <div class="mb-8 flex flex-col sm:flex-row sm:items-center sm:justify-between">
                    <h4 class="text-3xl font-black sm:text-5xl font-epilogue mb-4 sm:mb-0 text-center sm:text-left" data-aos="fade-up">
                        Available Cars at {{ $location->name }}
                    </h4>
                    @if($isPaginated)
                        <div class="text-center sm:text-right" data-aos="fade-up" data-aos-delay="100">
                            <p class="text-lg text-gray-600">
                                {{ $cars->total() }} {{ Str::plural('car', $cars->total()) }} available
                            </p>
                            <p class="text-sm text-gray-500">
                                Showing {{ $cars->firstItem() }}-{{ $cars->lastItem() }} of {{ $cars->total() }}
                            </p>
                        </div>
                    @else
                        <div class="text-center sm:text-right" data-aos="fade-up" data-aos-delay="100">
                            <p class="text-lg text-gray-600">
                                {{ $carCount }} {{ Str::plural('car', $carCount) }} available
                            </p>
                        </div>
                    @endif
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($cars as $car)
                        <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 overflow-hidden" data-aos="fade-up">
                            @if($car->main_image)
                                <img src="{{ $car->main_image->getUrl('thumb') }}" 
                                     alt="{{ $car->name }}" 
                                     class="w-full h-48 object-cover">
                            @else
                                <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            @endif
                            
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $car->name }}</h3>
                                
                                <div class="flex items-center justify-between mb-3">
                                    @if($car->brand)
                                        <span class="text-sm text-gray-600">{{ $car->brand->name }}</span>
                                    @endif
                                    @if($car->type)
                                        <span class="text-sm text-gray-600">{{ $car->type->name }}</span>
                                    @endif
                                </div>

                                @if($car->pricing && isset($car->pricing['daily']))
                                    <div class="mb-4">
                                        <span class="text-2xl font-bold text-primary">£{{ number_format($car->pricing['daily'], 0) }}</span>
                                        <span class="text-sm text-gray-600">/day</span>
                                    </div>
                                @elseif($car->daily_rate)
                                    <div class="mb-4">
                                        <span class="text-2xl font-bold text-primary">£{{ number_format($car->daily_rate, 2) }}</span>
                                        <span class="text-sm text-gray-600">/day</span>
                                    </div>
                                @endif

                                <a href="{{ route('hire.cars.car', $car->slug) }}?location={{ $location->id }}" 
                                   class="w-full btn btn-primary text-center">
                                    View Details
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination Links -->
                @if($isPaginated && $cars->hasPages())
                    <div class="mt-12 flex justify-center">
                        {{ $cars->links() }}
                    </div>
                @endif
            </section>
        @else
            <!-- No Cars Available -->
            <section class="mt-24 text-center py-16">
                <div class="max-w-md mx-auto">
                    <svg class="mx-auto h-24 w-24 text-gray-300 mb-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1-1H8a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                    
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">No Cars Available</h3>
                    <p class="text-gray-600 mb-8">
                        We currently don't have any cars available at {{ $location->name }}. Please check other locations or contact us for assistance.
                    </p>
                    
                    <div class="space-y-4 sm:space-y-0 sm:space-x-4 sm:flex sm:justify-center">
                        <a href="{{ route('hire.cars') }}" 
                           class="btn btn-primary inline-flex items-center justify-center">
                            View All Locations
                        </a>
                        <a href="{{ route('contact') }}" 
                           class="inline-flex items-center justify-center px-6 py-3 border border-gray-300 text-base font-medium rounded-[10px] text-dark bg-white hover:bg-gray-50 transition-colors duration-200">
                            Contact Us
                        </a>
                    </div>
                </div>
            </section>
        @endif
    </div>
@endsection
