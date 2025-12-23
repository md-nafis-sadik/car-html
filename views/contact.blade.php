@extends('layouts.app', [
    'footerMarginTop' => false
])

@section('head-info')
    <title>Contact Us - {{ config('app.name') }} Car Hire</title>
    <meta name="description" content="Contact Autofusion Hire for premium car rental services. Get in touch with our team for luxury and supercar hire enquiries across Glasgow and Newcastle." />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('/images/homepage-header.jpeg') }}" />
    <meta property="og:title" content="Contact Us - {{ config('app.name') }} Car Hire" />
    <meta property="og:description" content="Contact Autofusion Hire for premium car rental services. Get in touch with our team for luxury and supercar hire enquiries across Glasgow and Newcastle." />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection
@section('main')
    <header class="page-header h-[60dvh]">
        <img src="	https://autofusioncars.co.uk/images/heroes/about.jpeg" class="w-full h-full" alt="">
        <div class="absolute top-0 left-0 z-10 w-full h-full bg-black bg-opacity-70"></div>
        @component('components.header-content', ['name' => 'Get In Touch'])
            @slot('caption')
                <span class="font-medium">Looking to hire a supercar?</span>
                We're a leading car hire company <br class="hidden lg:block"> based in Glasgow, offering premium vehicles for every occasion.
            @endslot
            <div class="flex items-center gap-4">
                <a href="{{ route('hire.cars') }}" class="btn btn-primary">
                    Hire a car
                </a>
                <a href="{{ route('about') }}" class="btn btn-white">
                    Learn more
                </a>
            </div>
        @endcomponent
    </header>
    <div class="base-container">
        <div class="grid gap-10 md:grid-cols-2">
            <div>
                <h4 class="text-3xl font-black sm:text-5xl font-epilogue mb-9">
                    Contact Us
                </h4>
                <p class="mb-4 text-base">
                    We specialize in providing premium car hire services with a fleet of luxury and supercars. Whether you need a vehicle for a special occasion, business trip, or just want to experience driving a high-performance car, we have the perfect vehicle for you.
                    <br><br>
                    If you would like to browse our available vehicles, you can do so <a href="{{ route('hire.cars') }}" class="text-link">here</a>.
                    <br><br>
                    If you cannot find the answer you are looking for, please feel free to contact us.
                </p>

                <!-- General Contact Information -->
                <div class="mb-6">
                    <h5 class="text-xl font-bold text-gray-900 mb-4">General Enquiries</h5>
                    <p class="mb-4 text-base">
                        <span class="font-bold">Email:</span>
                        <a href="mailto:enquiries@autofusionhire.co.uk" target="_blank" class="text-link">
                            enquiries@autofusionhire.co.uk
                        </a>
                    </p>
                    <p class="mb-4 text-base">
                        <span class="font-bold">Phone:</span>
                        <a href="tel:01412375050" class="text-link">
                            0141 237 5050
                        </a>
                    </p>
                </div>

                <!-- Location-Specific Contact Information -->
                <div class="mb-6">
                    <h5 class="text-xl font-bold text-gray-900 mb-4">Our Locations</h5>
                    
                    @php
                        $locations = \App\Location::where('is_active', true)->get();
                    @endphp
                    
                    @foreach($locations as $location)
                        <div class="mb-4 p-4 bg-gray-50 rounded-lg">
                            <h6 class="font-semibold text-lg text-gray-900 mb-2">{{ $location->name }}</h6>
                            <p class="mb-2 text-base">
                                <span class="font-bold">Address:</span>
                                <a href="https://www.google.com/maps/search/{{ urlencode($location->address) }}" target="_blank" class="text-link">
                                    {{ $location->address }}
                                </a>
                            </p>
                            @if($location->phone)
                                <p class="mb-2 text-base">
                                    <span class="font-bold">Phone:</span>
                                    <a href="tel:{{ $location->phone }}" class="text-link">
                                        {{ $location->phone }}
                                    </a>
                                </p>
                            @endif
                            @if($location->email)
                                <p class="mb-2 text-base">
                                    <span class="font-bold">Email:</span>
                                    <a href="mailto:{{ $location->email }}" class="text-link">
                                        {{ $location->email }}
                                    </a>
                                </p>
                            @endif
                            {{-- @if($location->description)
                                <p class="text-sm text-gray-600">{{ $location->description }}</p>
                            @endif --}}
                        </div>
                    @endforeach
                </div>
            </div>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2237.196686010308!2d-4.3936907000000005!3d55.893948099999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48884f358029aa23%3A0x50a1fedd2c0cddf!2sAutofusion%20Hire!5e0!3m2!1sen!2suk!4v1727701819956!5m2!1sen!2suk" class="w-full rounded-xl" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <section class="relative min-h-dvh bg-no-repeat bg-cover bg-[url('/public/assets/images/garage-booking-background-1.png')] px-4 py-20" id="formRequestQuote">
        <div class="flex flex-col items-center justify-center gap-6">
            <a href="{{ route('home') }}" data-aos="fade-up">
                <img src="{{ asset('assets/svgs/header_logo.svg') }}" class="w-auto h-7" alt="">
            </a>
            <p class="text-2xl font-semibold text-center text-white" data-aos="fade-up">
                Get In Touch About Car Hire
            </p>
            <p class="text-lg text-center text-white text-opacity-80" data-aos="fade-up">
                Have questions about our luxury car hire services? We're here to help.
            </p>
        </div>
        <form action="{{ route('contact.post') }}" method="POST" class="bg-[#d9d9d9] backdrop-blur bg-opacity-15 rounded-[14px] p-6 sm:px-8 sm:py-[34px] flex flex-col gap-6 max-w-3xl mx-auto w-full mt-12">
            @csrf
            @method('POST')
            <div class="flex flex-col gap-[10px]">
                <label for="name" class="text-sm font-medium text-white sm:text-base">
                    Name <span class="text-danger">*</span>
                </label>
                <x-input-field type="text" name="name" placeholder="Your full name" />
            </div>
            <div class="flex flex-col gap-[10px]">
                <label for="email_address" class="text-sm font-medium text-white sm:text-base">
                    Email <span class="text-danger">*</span>
                </label>
                <x-input-field type="email" name="email_address" placeholder="your.email@example.com" />
            </div>
            <div class="flex flex-col gap-[10px]">
                <label for="contact_phone" class="text-sm font-medium text-white sm:text-base">
                    Contact Phone <span class="text-danger">*</span>
                </label>
                <x-input-field type="tel" name="contact_phone" placeholder="Your phone number" />
            </div>
            <div class="flex flex-col gap-[10px]">
                <label for="subject" class="text-sm font-medium text-white sm:text-base">
                    Subject <span class="text-danger">*</span>
                </label>
                <select name="subject" class="inputStyle" required>
                    <option value="">Select a subject</option>
                    <option value="Car Hire Enquiry">Car Hire Enquiry</option>
                    <option value="Booking Question">Booking Question</option>
                    <option value="Vehicle Availability">Vehicle Availability</option>
                    <option value="Pricing Information">Pricing Information</option>
                    <option value="Special Requirements">Special Requirements</option>
                    <option value="General Question">General Question</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="flex flex-col gap-[10px]">
                <label for="message" class="text-sm font-medium text-white sm:text-base">
                    Message <span class="text-danger">*</span>
                </label>
                <x-textarea className="min-h-28" name="message" placeholder="Tell us about your car hire requirements, preferred dates, or any questions you have..."></x-textarea>
            </div>
            <div class="grid">
                <button type="submit" class="btn btn-primary">
                    Send Enquiry
                </button>
            </div>
        </form>
    </section>
@endsection
