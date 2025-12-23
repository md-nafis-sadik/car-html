@extends('layouts.app')

@section('head-info')
    <meta name="description" content="Find your nearest {{ config('app.name') }} location for car hire services."/>
    <title>Our Locations - {{ config('app.name') }}</title>
@endsection

@section('main')
    <header class="page-header h-[60dvh]">
        <img src="{{ asset('assets/images/default-header.png') }}" class="w-full h-full" alt="">
        <div class="absolute top-0 left-0 z-10 w-full h-full bg-black bg-opacity-70"></div>
        @component('components.header-content', ['name' => 'Our Locations'])
            @slot('caption')
                Find your nearest branch for convenient car hire services
            @endslot
            <div class="flex items-center gap-4">
                <a href="{{ route('hire.cars') }}" class="btn btn-primary">
                    Browse Cars
                </a>
                <a href="{{ route('contact') }}" class="btn btn-white">
                    Contact Us
                </a>
            </div>
        @endcomponent
    </header>

    <div class="base-container">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-x-5 md:gap-y-[30px]">
            @foreach($locations as $location)
                <div class="rounded-xl sm:rounded-[20px] bg-[#F3F4F6] flex flex-col gap-3 sm:gap-5 overflow-hidden group transition-all ring-transparent ring-4 lg:ring-8 hover:ring-[#505258]" data-aos="fade-up" data-aos-delay="{{ 50 * ($loop->index + 1) }}">
                    <!-- Location Image/Map Preview -->
                    <div class="sm:pt-5 sm:px-5">
                        <div class="relative sm:rounded-[15px] overflow-hidden h-[130px] sm:h-[172px]">
                            @if($location->lat && $location->lng)
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2237.196686010308!2d{{ $location->lng }}!3d{{ $location->lat }}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2s{{ urlencode($location->name) }}!5e0!3m2!1sen!2suk!4v{{ time() }}!5m2!1sen!2suk" 
                                        class="w-full h-full sm:rounded-[15px]" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-primary/20 to-primary/40 flex items-center justify-center sm:rounded-[15px]">
                                    <svg class="w-12 h-12 text-primary/60" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            @endif
                            
                            <!-- Location Badge -->
                            <div class="absolute top-2 left-2 sm:top-3 sm:left-3">
                                <div class="inline-flex gap-1 sm:gap-3 items-center p-2 sm:py-2 sm:px-[10px] bg-white bg-opacity-90 rounded-[10px]">
                                    <svg class="w-3 h-3 sm:w-4 sm:h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <p class="text-[10px] font-semibold sm:text-sm text-dark">
                                        Location
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Location Content -->
                    <div class="px-3 pb-3 sm:px-5 sm:pb-5">
                        <p class="text-base font-bold text-dark -tracking-[0.4px] line-clamp-1">
                            {{ $location->name }}
                        </p>
                        <p class="text-sm font-medium text-opacity-50 text-dark -tracking-[0.4px] line-clamp-2">
                            {{ $location->address }}
                        </p>
                        
                        @if($location->description)
                            <p class="text-xs text-gray-600 mt-2 line-clamp-2">
                                {{ $location->description }}
                            </p>
                        @endif

                        <div class="flex flex-col gap-3 mt-3 sm:mt-8 sm:items-center sm:justify-between sm:flex-row sm:flex-wrap">
                            <div class="flex flex-col gap-1">
                                @if($location->phone)
                                    <p class="text-xs font-medium text-opacity-50 text-dark -tracking-[0.4px]">
                                        Phone
                                    </p>
                                    <a href="tel:{{ $location->phone }}" class="text-xs font-semibold text-primary -tracking-[0.4px] hover:underline">
                                        {{ $location->phone }}
                                    </a>
                                @endif
                                
                                @if($location->hireCars()->count() > 0)
                                    <p class="text-xs font-medium text-opacity-50 text-dark -tracking-[0.4px] mt-2">
                                        Available Cars
                                    </p>
                                    <p class="text-xs font-semibold text-primary -tracking-[0.4px]">
                                        {{ $location->hireCars()->count() }} cars
                                    </p>
                                @endif
                            </div>
                            
                            @if($location->slug)
                                <a href="{{ route('locations.show', $location->slug) }}"
                                    class="w-full py-3 btn btn-primary sm:w-auto sm:py-4 rounded-lg sm:rounded-[15px] group-hover:scale-105 transition-transform">
                                    View Details
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        @if($locations->isEmpty())
            <div class="text-center py-12" data-aos="fade-up">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <h3 class="mt-2 text-sm font-medium text-gray-900">No locations found</h3>
                <p class="mt-1 text-sm text-gray-500">We're expanding our network. Check back soon!</p>
            </div>
        @endif
    </div>
</div>
@endsection
