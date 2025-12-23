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


    <!-- <header class="page-header h-[60dvh]">
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
    </header> -->
    <section class="oy-header-top d-block d-md-none bg-primary bg-opacity-10 py-3 overflow-hidden">
        <div class="container">
            <oy-swiper data-items="1" data-loop="true" data-speed="600" data-lazy="true" data-space="30" data-autoplay="true" data-autoplay-delay="3000">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center justify-content-center gap-3 fw-medium">
                            <img src="../assets/img/header/rent.svg" alt="icon">
                            <span>1000+ Satisfied Customers</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center justify-content-center gap-3 fw-medium">
                            <img src="../assets/img/header/rent.svg" alt="icon">
                            <span>Over 200 Vehicles</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center justify-content-center gap-3 fw-medium">
                            <img src="../assets/img/header/rent.svg" alt="icon">
                            <span>Rent with Confidence</span>
                        </div>
                    </div>
                </div>
            </oy-swiper>
        </div>
    </section>
    <section class="py-5">
        <div class="container-fluid px-3 px-lg-5">
            <div class="oy-banner bg-dark" style="background-image: url('../assets/img/banners/gradient-banner-desktop-10.png');">
                <div class="row oy-banner__row h-100 g-4 g-xl-5 align-items-center justify-content-between">
                    <div class="col-lg-6 col-xl-6">
                        <div class="space-y-3">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b4-regular text-uppercase">Contact us</span>
                            <h2 class="text-light text-h1 mb-3 mb-lg-4">Get In Touch</h2>
                            <p class="text-light text-opacity-50 text-b2-regular mb-3">Looking to hire a supercar? We're a leading car hire company based in Glasgow, offering premium vehicles for every occasion.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="space-y-4 d-md-none">
                            <img class="rounded-4 img-fluid w-100" src="../assets/img/banners/gradient-banner-mobile-10.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding-t">
        <div class="container">
            <div class="row g-4 g-lg-5">
                <div class="col-lg-6">
                    <div class="card p-4 p-lg-5 rounded-4 bg-light border">
                        <h3 class="text-h5 mb-4">Contact Information</h3>
                        <p class="mb-4">We specialize in providing premium car hire services with a fleet of luxury and supercars. Whether you need a vehicle for a special occasion, business trip, or just want to experience driving a high-performance car, we have the perfect vehicle for you</p>
                        <p class="mb-4">If you would like to browse our available vehicles, you can do so <a href="#" class="link-primary">here</a>.</p>
                        <p>If you cannot find the answer you are looking for, please feel free to contact us.</p>

                        <hr class="border my-4">

                        <h3 class="text-h5 mb-4">General Enquiries</h3>
                        <ul class="list-unstyled d-flex flex-column gap-3 text-b1-medium">
                            <!-- Item -->
                            <li class="d-flex align-items-center gap-3">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20" cy="20" r="20" fill="#0072FF" fill-opacity="0.1"/>
                                    <path d="M24.215 19.0625C23.8925 19.0625 23.6375 18.8 23.6375 18.485C23.6375 18.2075 23.36 17.63 22.895 17.1275C22.4375 16.64 21.935 16.355 21.515 16.355C21.1925 16.355 20.9375 16.0925 20.9375 15.7775C20.9375 15.4625 21.2 15.2 21.515 15.2C22.265 15.2 23.0525 15.605 23.7425 16.3325C24.3875 17.015 24.8 17.8625 24.8 18.4775C24.8 18.8 24.5375 19.0625 24.215 19.0625Z" fill="#0072FF"/>
                                    <path d="M26.9223 19.0625C26.5998 19.0625 26.3448 18.8 26.3448 18.485C26.3448 15.8225 24.1773 13.6625 21.5223 13.6625C21.1998 13.6625 20.9448 13.4 20.9448 13.085C20.9448 12.77 21.1998 12.5 21.5148 12.5C24.8148 12.5 27.4998 15.185 27.4998 18.485C27.4998 18.8 27.2373 19.0625 26.9223 19.0625Z" fill="#0072FF"/>
                                    <path d="M19.2875 22.2125L17.9 23.6C17.6075 23.8925 17.1425 23.8925 16.8425 23.6075C16.76 23.525 16.6775 23.45 16.595 23.3675C15.8225 22.5875 15.125 21.77 14.5025 20.915C13.8875 20.06 13.3925 19.205 13.0325 18.3575C12.68 17.5025 12.5 16.685 12.5 15.905C12.5 15.395 12.59 14.9075 12.77 14.4575C12.95 14 13.235 13.58 13.6325 13.205C14.1125 12.7325 14.6375 12.5 15.1925 12.5C15.4025 12.5 15.6125 12.545 15.8 12.635C15.995 12.725 16.1675 12.86 16.3025 13.055L18.0425 15.5075C18.1775 15.695 18.275 15.8675 18.3425 16.0325C18.41 16.19 18.4475 16.3475 18.4475 16.49C18.4475 16.67 18.395 16.85 18.29 17.0225C18.1925 17.195 18.05 17.375 17.87 17.555L17.3 18.1475C17.2175 18.23 17.18 18.3275 17.18 18.4475C17.18 18.5075 17.1875 18.56 17.2025 18.62C17.225 18.68 17.2475 18.725 17.2625 18.77C17.3975 19.0175 17.63 19.34 17.96 19.73C18.2975 20.12 18.6575 20.5175 19.0475 20.915C19.1225 20.99 19.205 21.065 19.28 21.14C19.58 21.4325 19.5875 21.9125 19.2875 22.2125Z" fill="#0072FF"/>
                                    <path d="M27.4777 24.7475C27.4777 24.9575 27.4402 25.175 27.3652 25.385C27.3427 25.445 27.3202 25.505 27.2902 25.565C27.1627 25.835 26.9977 26.09 26.7802 26.33C26.4127 26.735 26.0077 27.0275 25.5502 27.215C25.5427 27.215 25.5352 27.2225 25.5277 27.2225C25.0852 27.4025 24.6052 27.5 24.0877 27.5C23.3227 27.5 22.5052 27.32 21.6427 26.9525C20.7802 26.585 19.9177 26.09 19.0627 25.4675C18.7702 25.25 18.4777 25.0325 18.2002 24.8L20.6527 22.3475C20.8627 22.505 21.0502 22.625 21.2077 22.7075C21.2452 22.7225 21.2902 22.745 21.3427 22.7675C21.4027 22.79 21.4627 22.7975 21.5302 22.7975C21.6577 22.7975 21.7552 22.7525 21.8377 22.67L22.4077 22.1075C22.5952 21.92 22.7752 21.7775 22.9477 21.6875C23.1202 21.5825 23.2927 21.53 23.4802 21.53C23.6227 21.53 23.7727 21.56 23.9377 21.6275C24.1027 21.695 24.2752 21.7925 24.4627 21.92L26.9452 23.6825C27.1402 23.8175 27.2752 23.975 27.3577 24.1625C27.4327 24.35 27.4777 24.5375 27.4777 24.7475Z" fill="#0072FF"/>
                                </svg>
                                <a class="link-dark text-decoration-none fw-semibold" href="telto:01412375050">0141 237 5050</a>
                            </li>
                            <!-- Item -->
                            <li class="d-flex align-items-center gap-3">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="20" cy="20" r="20" fill="#0072FF" fill-opacity="0.1"/>
                                    <path d="M24.1665 12.9167H15.8332C13.3332 12.9167 11.6665 14.1667 11.6665 17.0834V22.9167C11.6665 25.8334 13.3332 27.0834 15.8332 27.0834H24.1665C26.6665 27.0834 28.3332 25.8334 28.3332 22.9167V17.0834C28.3332 14.1667 26.6665 12.9167 24.1665 12.9167ZM24.5582 17.9917L21.9498 20.0751C21.3998 20.5167 20.6998 20.7334 19.9998 20.7334C19.2998 20.7334 18.5915 20.5167 18.0498 20.0751L15.4415 17.9917C15.1748 17.7751 15.1332 17.3751 15.3415 17.1084C15.5582 16.8417 15.9498 16.7917 16.2165 17.0084L18.8248 19.0917C19.4582 19.6001 20.5332 19.6001 21.1665 19.0917L23.7748 17.0084C24.0415 16.7917 24.4415 16.8334 24.6498 17.1084C24.8665 17.3751 24.8248 17.7751 24.5582 17.9917Z" fill="#0072FF"/>
                                </svg>
                                <a class="link-dark text-decoration-none fw-semibold" href="mailto:enquiries@autofusionhire.co.uk">enquiries@autofusionhire.co.uk</a>
                            </li>
                        </ul>

                        <!-- Social Media -->
                        <ul class="list-unstyled mt-4 mb-0 d-flex flex-wrap gap-3">
                            <li><a href="#">
                                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="25" cy="25" r="25" fill="#5C5C5C" fill-opacity="0.07"/>
                                        <path d="M26.7109 36.0256V25.9815H30.0994L30.6031 22.0489H26.7109V19.544C26.7109 18.4091 27.0271 17.6322 28.6558 17.6322H30.7195V14.1261C29.7154 14.0185 28.7061 13.9665 27.6962 13.9704C24.7011 13.9704 22.6447 15.7989 22.6447 19.1555V22.0415H19.2783V25.9741H22.6521V36.0256H26.7109Z" fill="#030B1C"/>
                                    </svg>
                            </a></li>
                            <li><a href="#">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="25" cy="25" r="25" fill="#5C5C5C" fill-opacity="0.07"/>
                                    <g clip-path="url(#clip0_10061_15823)">
                                    <path d="M30.1469 14.7065H19.853C17.0224 14.7065 14.7061 17.0229 14.7061 19.8535V30.1478C14.7061 32.9777 17.0224 35.2948 19.853 35.2948H30.1469C32.9774 35.2948 35.2938 32.9777 35.2938 30.1478V19.8535C35.2938 17.0229 32.9774 14.7065 30.1469 14.7065ZM33.5781 30.1478C33.5781 32.0393 32.0394 33.5791 30.1469 33.5791H19.853C17.9612 33.5791 16.4218 32.0393 16.4218 30.1478V19.8535C16.4218 17.9615 17.9612 16.4223 19.853 16.4223H30.1469C32.0394 16.4223 33.5781 17.9615 33.5781 19.8535V30.1478Z" fill="#030B1C"/>
                                    <path d="M30.5738 20.7119C31.2845 20.7119 31.8606 20.1358 31.8606 19.4252C31.8606 18.7145 31.2845 18.1384 30.5738 18.1384C29.8632 18.1384 29.2871 18.7145 29.2871 19.4252C29.2871 20.1358 29.8632 20.7119 30.5738 20.7119Z" fill="#030B1C"/>
                                    <path d="M24.9995 19.8525C22.1563 19.8525 19.8525 22.1565 19.8525 24.9995C19.8525 27.8413 22.1563 30.1469 24.9995 30.1469C27.8418 30.1469 30.1464 27.8413 30.1464 24.9995C30.1464 22.1565 27.8418 19.8525 24.9995 19.8525ZM24.9995 28.4312C23.1046 28.4312 21.5683 26.8948 21.5683 24.9995C21.5683 23.1041 23.1046 21.5683 24.9995 21.5683C26.8943 21.5683 28.4307 23.1041 28.4307 24.9995C28.4307 26.8948 26.8943 28.4312 24.9995 28.4312Z" fill="#030B1C"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_10061_15823">
                                    <rect width="20.5882" height="20.5882" fill="white" transform="translate(14.7061 14.7065)"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </a></li>
                            <li><a href="#">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="25" cy="25" r="25" fill="#5C5C5C" fill-opacity="0.07"/>
                                    <g clip-path="url(#clip0_10061_15830)">
                                    <path d="M16.6355 14.4285C15.018 14.4285 13.9604 15.4906 13.9604 16.8867C13.9604 18.2519 14.9865 19.3443 16.5735 19.3443H16.6042C18.2533 19.3443 19.2797 18.2519 19.2797 16.8867C19.2488 15.4906 18.2533 14.4285 16.6355 14.4285Z" fill="#030B1C"/>
                                    <path d="M14.2368 21.2861H18.9655V35.5126H14.2368V21.2861Z" fill="#030B1C"/>
                                    <path d="M30.5729 20.9541C28.0219 20.9541 26.3114 23.3512 26.3114 23.3512V21.288H21.5825V35.5145H26.3111V27.5699C26.3111 27.1445 26.3419 26.7199 26.4669 26.4158C26.8087 25.5665 27.5866 24.6866 28.893 24.6866C30.6041 24.6866 31.2885 25.9913 31.2885 27.9038V35.5145H36.0167V27.3573C36.0167 22.9875 33.6838 20.9541 30.5729 20.9541Z" fill="#030B1C"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_10061_15830">
                                    <rect width="23.5294" height="23.5294" fill="white" transform="translate(13.2349 13.2339)"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </a></li>
                            <li><a href="#">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="25" cy="25" r="25" fill="#5C5C5C" fill-opacity="0.07"/>
                                    <g clip-path="url(#clip0_10061_15836)">
                                    <path d="M30.3936 18.5626C29.471 17.4898 28.9875 16.1036 29.0258 14.6923L25.5774 14.6091V14.9545V29.3673C24.649 33.5045 18.6614 32.425 19.2608 28.2156C19.5953 26.2928 21.6609 25.1098 23.4969 25.7785V22.2601C19.5001 21.5643 15.7125 24.7453 15.7523 28.7981C16.1016 37.5873 28.708 37.5886 29.0577 28.7981C28.9696 28.4836 29.0188 22.6263 29.0063 22.1324C30.5743 23.108 32.3987 23.5956 34.2463 23.5335V19.8996C32.5383 19.8996 31.2347 19.4455 30.3936 18.5626Z" fill="#030B1C"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_10061_15836">
                                    <rect width="21.875" height="21.875" fill="white" transform="translate(14.0625 14.0625)"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </a></li>
                            <li><a href="#">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="25" cy="25" r="25" fill="#5C5C5C" fill-opacity="0.07"/>
                                    <g clip-path="url(#clip0_10061_15841)">
                                    <path d="M34.3645 19.0799C33.6313 18.2083 32.2776 17.8528 29.6923 17.8528H20.3076C17.6631 17.8528 16.2864 18.2313 15.5559 19.1592C14.8438 20.064 14.8438 21.3971 14.8438 23.2421V26.7587C14.8438 30.3331 15.6888 32.1479 20.3076 32.1479H29.6923C31.9343 32.1479 33.1766 31.8342 33.9804 31.065C34.8046 30.2762 35.1562 28.9884 35.1562 26.7587V23.2421C35.1562 21.2963 35.1011 19.9554 34.3645 19.0799ZM27.8844 25.4859L23.6229 27.7131C23.5276 27.7629 23.4234 27.7876 23.3194 27.7876C23.2016 27.7876 23.084 27.7559 22.9799 27.6929C22.7838 27.5741 22.6641 27.3616 22.6641 27.1324V22.6922C22.6641 22.4634 22.7835 22.2511 22.9792 22.1322C23.1749 22.0134 23.4183 22.0052 23.6214 22.1107L27.8829 24.3236C28.0998 24.4362 28.2359 24.66 28.2362 24.9042C28.2365 25.1486 28.1009 25.3728 27.8844 25.4859Z" fill="#030B1C"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_10061_15841">
                                    <rect width="20.3125" height="20.3125" fill="white" transform="translate(14.8438 14.8438)"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card p-4 p-lg-5 rounded-4 bg-lighter">
                        <h3 class="text-h5 mb-4">Get In Touch About Car Hire</h3>
                        <p class="mb-4">Have questions about our luxury car hire services? We're here to help.</p>

                        <form action="{{ route('contact.post') }}" method="POST">
                            @csrf
                            @method('POST')
                            
                            <div class="row g-4">
                                <!-- Name Field -->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Your full name" required>
                                    </div>
                                </div>
                                
                                <!-- Email Field -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" name="email_address" class="form-control" placeholder="Email address" required>
                                    </div>
                                </div>
                                
                                <!-- Phone Field -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="tel" name="contact_phone" class="form-control" placeholder="Phone number" required>
                                    </div>
                                </div>
                                
                                <!-- Subject Field -->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <select name="subject" class="e-select ps-3 form-select" required>
                                            <option value="">Subject</option>
                                            <option value="Car Hire Enquiry">Car Hire Enquiry</option>
                                            <option value="Booking Question">Booking Question</option>
                                            <option value="Vehicle Availability">Vehicle Availability</option>
                                            <option value="Pricing Information">Pricing Information</option>
                                            <option value="Special Requirements">Special Requirements</option>
                                            <option value="General Question">General Question</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <!-- Message Field -->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" rows="5" cols="30" placeholder="Your message" required></textarea>
                                    </div>
                                </div>
                                
                                <!-- Submit Button -->
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn--gradient-primary">
                                        <span class="btn__text">Send Message</span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="d-flex rounded-4 overflow-hidden">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.364973311433!2d-0.452250123221129!3d51.46981471344817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487673cb743ccf01%3A0xea74a219c60588e1!2sTerminal%202%2C%20Inner%20Ring%20E%2C%20Hounslow%20TW6%201EW%2C%20UK!5e0!3m2!1sen!2sbd!4v1765670857124!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding-y">
        <div class="container-fluid px-3 px-lg-5">
            <div class="bg-dark rounded-6 section-padding-y overflow-hidden">
                <div class="container oy-section-title">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="text-center text-lg-start">
                                <h3 class="text-h2 text-light">Our Locations</h3>
                                <p class="text-b2-regular text-light">Find your nearest branch for convenient car hire services</p>
                            </div>
                        </div>
                        <div class="d-none d-lg-block col-lg-6">
                            <div class="d-flex align-items-center justify-content-lg-end gap-4">
                                <span class="btn--circle outlined" id="oy-slider-journey-arrow--prev" data-pulse-direction="right">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.77344 5.43582L3.20927 11L8.77344 16.5642" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M18.791 11H3.36352" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="btn--circle outlined" id="oy-slider-journey-arrow--next" data-pulse-direction="left">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.2266 5.43582L18.7907 11L13.2266 16.5642" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M3.20898 11H18.6365" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <oy-swiper data-items="1" data-sm-items="1" data-md-items="2" data-lg-items="3" data-xl-items="3" data-loop="true" data-speed="600" data-lazy="true" data-space="30" data-autoplay="false" data-autoplay-delay="3000" data-pagination="#oy-slider-journey--pagination" data-prev="#oy-slider-journey-arrow--prev" data-next="#oy-slider-journey-arrow--next">
                        <div class="swiper-wrapper">
                            <!-- Slider Item -->
                            <div class="swiper-slide mb-5">
                                <div class="card card--branch bg-dark-light border-dark h-100">
                                    <div class="card--branch__thumb position-relative">
                                        <img src="../assets/img/products/product-1.png" alt="">
                                        <span class="badge badge--top-right rounded-pill text-bg-dark text-b5-regular">Available: <strong>10 Cars</strong></span>
                                    </div>
                                    <div class="card--branch__content px-3 pt-4 pb-4 space-y-3 flex-fill d-flex flex-column align-items-start">
                                        <div class="mb-5">
                                            <h5 class="card--branch__title text-white text-h5 fw-semibold mb-3">Edinburgh</h5>
                                            <p class="text-white text-opacity-75 text-b4-regular mb-0">Edinburgh Airport, Turnhouse Road, <br>Edinburgh, EH12 9DN</p>
                                        </div>

                                        <!-- Action -->
                                        <div class="card--branch__action d-flex justify-content-between align-items-center w-100 mt-auto">
                                            <div class="d-flex align-items-center gap-3">
                                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="24" cy="24" r="24" fill="#0072FF" fill-opacity="0.14"/>
                                                <path d="M30.875 17.125V20.875M30.875 17.125H27.125M30.875 17.125L25.875 22.125M28.375 32.125C21.4717 32.125 15.875 26.5283 15.875 19.625V17.75C15.875 17.2527 16.0725 16.7758 16.4242 16.4242C16.7758 16.0725 17.2527 15.875 17.75 15.875H18.8933C19.3233 15.875 19.6983 16.1675 19.8025 16.585L20.7242 20.2708C20.8158 20.6375 20.6792 21.0225 20.3767 21.2483L19.2992 22.0567C19.1449 22.1683 19.0308 22.3267 18.9738 22.5084C18.9167 22.69 18.9198 22.8852 18.9825 23.065C19.4841 24.4293 20.2762 25.6682 21.304 26.696C22.3318 27.7238 23.5707 28.5159 24.935 29.0175C25.3025 29.1525 25.7083 29.0142 25.9433 28.7008L26.7517 27.6233C26.8623 27.4756 27.0141 27.3639 27.188 27.3021C27.3619 27.2402 27.5501 27.2311 27.7292 27.2758L31.415 28.1975C31.8317 28.3017 32.125 28.6767 32.125 29.1067V30.25C32.125 30.7473 31.9275 31.2242 31.5758 31.5758C31.2242 31.9275 30.7473 32.125 30.25 32.125H28.375Z" stroke="#0072FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <div class="text-b3-semibold text-light">+441312033817</div>
                                            </div>
                                            <div>
                                                <a class="link-primary fw-semibold" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider Item -->
                            <div class="swiper-slide mb-5">
                                <div class="card card--branch bg-dark-light border-dark h-100">
                                    <div class="card--branch__thumb position-relative">
                                        <img src="../assets/img/products/product-1.png" alt="">
                                        <span class="badge badge--top-right rounded-pill text-bg-dark text-b5-regular">Available: <strong>10 Cars</strong></span>
                                    </div>
                                    <div class="card--branch__content px-3 pt-4 pb-4 space-y-3 flex-fill d-flex flex-column align-items-start">
                                        <div class="mb-5">
                                            <h5 class="card--branch__title text-white text-h5 fw-semibold mb-3">Edinburgh</h5>
                                            <p class="text-white text-opacity-75 text-b4-regular mb-0">Edinburgh Airport, Turnhouse Road, <br>Edinburgh, EH12 9DN</p>
                                        </div>

                                        <!-- Action -->
                                        <div class="card--branch__action d-flex justify-content-between align-items-center w-100 mt-auto">
                                            <div class="d-flex align-items-center gap-3">
                                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="24" cy="24" r="24" fill="#0072FF" fill-opacity="0.14"/>
                                                <path d="M30.875 17.125V20.875M30.875 17.125H27.125M30.875 17.125L25.875 22.125M28.375 32.125C21.4717 32.125 15.875 26.5283 15.875 19.625V17.75C15.875 17.2527 16.0725 16.7758 16.4242 16.4242C16.7758 16.0725 17.2527 15.875 17.75 15.875H18.8933C19.3233 15.875 19.6983 16.1675 19.8025 16.585L20.7242 20.2708C20.8158 20.6375 20.6792 21.0225 20.3767 21.2483L19.2992 22.0567C19.1449 22.1683 19.0308 22.3267 18.9738 22.5084C18.9167 22.69 18.9198 22.8852 18.9825 23.065C19.4841 24.4293 20.2762 25.6682 21.304 26.696C22.3318 27.7238 23.5707 28.5159 24.935 29.0175C25.3025 29.1525 25.7083 29.0142 25.9433 28.7008L26.7517 27.6233C26.8623 27.4756 27.0141 27.3639 27.188 27.3021C27.3619 27.2402 27.5501 27.2311 27.7292 27.2758L31.415 28.1975C31.8317 28.3017 32.125 28.6767 32.125 29.1067V30.25C32.125 30.7473 31.9275 31.2242 31.5758 31.5758C31.2242 31.9275 30.7473 32.125 30.25 32.125H28.375Z" stroke="#0072FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <div class="text-b3-semibold text-light">+441312033817</div>
                                            </div>
                                            <div>
                                                <a class="link-primary fw-semibold" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider Item -->
                            <div class="swiper-slide mb-5">
                                <div class="card card--branch bg-dark-light border-dark h-100">
                                    <div class="card--branch__thumb position-relative">
                                        <img src="{{ asset('assets/img/products/product-1.png') }}" alt="">
                                        <span class="badge badge--top-right rounded-pill text-bg-dark text-b5-regular">Available: <strong>10 Cars</strong></span>
                                    </div>
                                    <div class="card--branch__content px-3 pt-4 pb-4 space-y-3 flex-fill d-flex flex-column align-items-start">
                                        <div class="mb-5">
                                            <h5 class="card--branch__title text-white text-h5 fw-semibold mb-3">Edinburgh</h5>
                                            <p class="text-white text-opacity-75 text-b4-regular mb-0">Edinburgh Airport, Turnhouse Road, <br>Edinburgh, EH12 9DN</p>
                                        </div>

                                        <!-- Action -->
                                        <div class="card--branch__action d-flex justify-content-between align-items-center w-100 mt-auto">
                                            <div class="d-flex align-items-center gap-3">
                                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="24" cy="24" r="24" fill="#0072FF" fill-opacity="0.14"/>
                                                <path d="M30.875 17.125V20.875M30.875 17.125H27.125M30.875 17.125L25.875 22.125M28.375 32.125C21.4717 32.125 15.875 26.5283 15.875 19.625V17.75C15.875 17.2527 16.0725 16.7758 16.4242 16.4242C16.7758 16.0725 17.2527 15.875 17.75 15.875H18.8933C19.3233 15.875 19.6983 16.1675 19.8025 16.585L20.7242 20.2708C20.8158 20.6375 20.6792 21.0225 20.3767 21.2483L19.2992 22.0567C19.1449 22.1683 19.0308 22.3267 18.9738 22.5084C18.9167 22.69 18.9198 22.8852 18.9825 23.065C19.4841 24.4293 20.2762 25.6682 21.304 26.696C22.3318 27.7238 23.5707 28.5159 24.935 29.0175C25.3025 29.1525 25.7083 29.0142 25.9433 28.7008L26.7517 27.6233C26.8623 27.4756 27.0141 27.3639 27.188 27.3021C27.3619 27.2402 27.5501 27.2311 27.7292 27.2758L31.415 28.1975C31.8317 28.3017 32.125 28.6767 32.125 29.1067V30.25C32.125 30.7473 31.9275 31.2242 31.5758 31.5758C31.2242 31.9275 30.7473 32.125 30.25 32.125H28.375Z" stroke="#0072FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <div class="text-b3-semibold text-light">+441312033817</div>
                                            </div>
                                            <div>
                                                <a class="link-primary fw-semibold" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider Item -->
                            <div class="swiper-slide mb-5">
                                <div class="card card--branch bg-dark-light border-dark h-100">
                                    <div class="card--branch__thumb position-relative">
                                        <img src="{{ asset('assets/img/products/product-1.png') }}" alt="">
                                        <span class="badge badge--top-right rounded-pill text-bg-dark text-b5-regular">Available: <strong>10 Cars</strong></span>
                                    </div>
                                    <div class="card--branch__content px-3 pt-4 pb-4 space-y-3 flex-fill d-flex flex-column align-items-start">
                                        <div class="mb-5">
                                            <h5 class="card--branch__title text-white text-h5 fw-semibold mb-3">Edinburgh</h5>
                                            <p class="text-white text-opacity-75 text-b4-regular mb-0">Edinburgh Airport, Turnhouse Road, <br>Edinburgh, EH12 9DN</p>
                                        </div>

                                        <!-- Action -->
                                        <div class="card--branch__action d-flex justify-content-between align-items-center w-100 mt-auto">
                                            <div class="d-flex align-items-center gap-3">
                                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="24" cy="24" r="24" fill="#0072FF" fill-opacity="0.14"/>
                                                <path d="M30.875 17.125V20.875M30.875 17.125H27.125M30.875 17.125L25.875 22.125M28.375 32.125C21.4717 32.125 15.875 26.5283 15.875 19.625V17.75C15.875 17.2527 16.0725 16.7758 16.4242 16.4242C16.7758 16.0725 17.2527 15.875 17.75 15.875H18.8933C19.3233 15.875 19.6983 16.1675 19.8025 16.585L20.7242 20.2708C20.8158 20.6375 20.6792 21.0225 20.3767 21.2483L19.2992 22.0567C19.1449 22.1683 19.0308 22.3267 18.9738 22.5084C18.9167 22.69 18.9198 22.8852 18.9825 23.065C19.4841 24.4293 20.2762 25.6682 21.304 26.696C22.3318 27.7238 23.5707 28.5159 24.935 29.0175C25.3025 29.1525 25.7083 29.0142 25.9433 28.7008L26.7517 27.6233C26.8623 27.4756 27.0141 27.3639 27.188 27.3021C27.3619 27.2402 27.5501 27.2311 27.7292 27.2758L31.415 28.1975C31.8317 28.3017 32.125 28.6767 32.125 29.1067V30.25C32.125 30.7473 31.9275 31.2242 31.5758 31.5758C31.2242 31.9275 30.7473 32.125 30.25 32.125H28.375Z" stroke="#0072FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <div class="text-b3-semibold text-light">+441312033817</div>
                                            </div>
                                            <div>
                                                <a class="link-primary fw-semibold" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider Item -->
                            <div class="swiper-slide mb-5">
                                <div class="card card--branch bg-dark-light border-dark h-100">
                                    <div class="card--branch__thumb position-relative">
                                        <img src="{{ asset('assets/img/products/product-1.png') }}" alt="">
                                        <span class="badge badge--top-right rounded-pill text-bg-dark text-b5-regular">Available: <strong>10 Cars</strong></span>
                                    </div>
                                    <div class="card--branch__content px-3 pt-4 pb-4 space-y-3 flex-fill d-flex flex-column align-items-start">
                                        <div class="mb-5">
                                            <h5 class="card--branch__title text-white text-h5 fw-semibold mb-3">Edinburgh</h5>
                                            <p class="text-white text-opacity-75 text-b4-regular mb-0">Edinburgh Airport, Turnhouse Road, <br>Edinburgh, EH12 9DN</p>
                                        </div>

                                        <!-- Action -->
                                        <div class="card--branch__action d-flex justify-content-between align-items-center w-100 mt-auto">
                                            <div class="d-flex align-items-center gap-3">
                                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="24" cy="24" r="24" fill="#0072FF" fill-opacity="0.14"/>
                                                <path d="M30.875 17.125V20.875M30.875 17.125H27.125M30.875 17.125L25.875 22.125M28.375 32.125C21.4717 32.125 15.875 26.5283 15.875 19.625V17.75C15.875 17.2527 16.0725 16.7758 16.4242 16.4242C16.7758 16.0725 17.2527 15.875 17.75 15.875H18.8933C19.3233 15.875 19.6983 16.1675 19.8025 16.585L20.7242 20.2708C20.8158 20.6375 20.6792 21.0225 20.3767 21.2483L19.2992 22.0567C19.1449 22.1683 19.0308 22.3267 18.9738 22.5084C18.9167 22.69 18.9198 22.8852 18.9825 23.065C19.4841 24.4293 20.2762 25.6682 21.304 26.696C22.3318 27.7238 23.5707 28.5159 24.935 29.0175C25.3025 29.1525 25.7083 29.0142 25.9433 28.7008L26.7517 27.6233C26.8623 27.4756 27.0141 27.3639 27.188 27.3021C27.3619 27.2402 27.5501 27.2311 27.7292 27.2758L31.415 28.1975C31.8317 28.3017 32.125 28.6767 32.125 29.1067V30.25C32.125 30.7473 31.9275 31.2242 31.5758 31.5758C31.2242 31.9275 30.7473 32.125 30.25 32.125H28.375Z" stroke="#0072FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <div class="text-b3-semibold text-light">+441312033817</div>
                                            </div>
                                            <div>
                                                <a class="link-primary fw-semibold" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider Item -->
                            <div class="swiper-slide mb-5">
                                <div class="card card--branch bg-dark-light border-dark h-100">
                                    <div class="card--branch__thumb position-relative">
                                        <img src="{{ asset('assets/img/products/product-1.png') }}" alt="">
                                        <span class="badge badge--top-right rounded-pill text-bg-dark text-b5-regular">Available: <strong>10 Cars</strong></span>
                                    </div>
                                    <div class="card--branch__content px-3 pt-4 pb-4 space-y-3 flex-fill d-flex flex-column align-items-start">
                                        <div class="mb-5">
                                            <h5 class="card--branch__title text-white text-h5 fw-semibold mb-3">Edinburgh</h5>
                                            <p class="text-white text-opacity-75 text-b4-regular mb-0">Edinburgh Airport, Turnhouse Road, <br>Edinburgh, EH12 9DN</p>
                                        </div>

                                        <!-- Action -->
                                        <div class="card--branch__action d-flex justify-content-between align-items-center w-100 mt-auto">
                                            <div class="d-flex align-items-center gap-3">
                                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="24" cy="24" r="24" fill="#0072FF" fill-opacity="0.14"/>
                                                <path d="M30.875 17.125V20.875M30.875 17.125H27.125M30.875 17.125L25.875 22.125M28.375 32.125C21.4717 32.125 15.875 26.5283 15.875 19.625V17.75C15.875 17.2527 16.0725 16.7758 16.4242 16.4242C16.7758 16.0725 17.2527 15.875 17.75 15.875H18.8933C19.3233 15.875 19.6983 16.1675 19.8025 16.585L20.7242 20.2708C20.8158 20.6375 20.6792 21.0225 20.3767 21.2483L19.2992 22.0567C19.1449 22.1683 19.0308 22.3267 18.9738 22.5084C18.9167 22.69 18.9198 22.8852 18.9825 23.065C19.4841 24.4293 20.2762 25.6682 21.304 26.696C22.3318 27.7238 23.5707 28.5159 24.935 29.0175C25.3025 29.1525 25.7083 29.0142 25.9433 28.7008L26.7517 27.6233C26.8623 27.4756 27.0141 27.3639 27.188 27.3021C27.3619 27.2402 27.5501 27.2311 27.7292 27.2758L31.415 28.1975C31.8317 28.3017 32.125 28.6767 32.125 29.1067V30.25C32.125 30.7473 31.9275 31.2242 31.5758 31.5758C31.2242 31.9275 30.7473 32.125 30.25 32.125H28.375Z" stroke="#0072FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <div class="text-b3-semibold text-light">+441312033817</div>
                                            </div>
                                            <div>
                                                <a class="link-primary fw-semibold" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider Item -->
                            <div class="swiper-slide mb-5">
                                <div class="card card--branch bg-dark-light border-dark h-100">
                                    <div class="card--branch__thumb position-relative">
                                        <img src="{{ asset('assets/img/products/product-1.png') }}" alt="">
                                        <span class="badge badge--top-right rounded-pill text-bg-dark text-b5-regular">Available: <strong>10 Cars</strong></span>
                                    </div>
                                    <div class="card--branch__content px-3 pt-4 pb-4 space-y-3 flex-fill d-flex flex-column align-items-start">
                                        <div class="mb-5">
                                            <h5 class="card--branch__title text-white text-h5 fw-semibold mb-3">Edinburgh</h5>
                                            <p class="text-white text-opacity-75 text-b4-regular mb-0">Edinburgh Airport, Turnhouse Road, <br>Edinburgh, EH12 9DN</p>
                                        </div>

                                        <!-- Action -->
                                        <div class="card--branch__action d-flex justify-content-between align-items-center w-100 mt-auto">
                                            <div class="d-flex align-items-center gap-3">
                                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="24" cy="24" r="24" fill="#0072FF" fill-opacity="0.14"/>
                                                <path d="M30.875 17.125V20.875M30.875 17.125H27.125M30.875 17.125L25.875 22.125M28.375 32.125C21.4717 32.125 15.875 26.5283 15.875 19.625V17.75C15.875 17.2527 16.0725 16.7758 16.4242 16.4242C16.7758 16.0725 17.2527 15.875 17.75 15.875H18.8933C19.3233 15.875 19.6983 16.1675 19.8025 16.585L20.7242 20.2708C20.8158 20.6375 20.6792 21.0225 20.3767 21.2483L19.2992 22.0567C19.1449 22.1683 19.0308 22.3267 18.9738 22.5084C18.9167 22.69 18.9198 22.8852 18.9825 23.065C19.4841 24.4293 20.2762 25.6682 21.304 26.696C22.3318 27.7238 23.5707 28.5159 24.935 29.0175C25.3025 29.1525 25.7083 29.0142 25.9433 28.7008L26.7517 27.6233C26.8623 27.4756 27.0141 27.3639 27.188 27.3021C27.3619 27.2402 27.5501 27.2311 27.7292 27.2758L31.415 28.1975C31.8317 28.3017 32.125 28.6767 32.125 29.1067V30.25C32.125 30.7473 31.9275 31.2242 31.5758 31.5758C31.2242 31.9275 30.7473 32.125 30.25 32.125H28.375Z" stroke="#0072FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <div class="text-b3-semibold text-light">+441312033817</div>
                                            </div>
                                            <div>
                                                <a class="link-primary fw-semibold" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider Item -->
                            <div class="swiper-slide mb-5">
                                <div class="card card--branch bg-dark-light border-dark h-100">
                                    <div class="card--branch__thumb position-relative">
                                        <img src="{{ asset('assets/img/products/product-1.png') }}" alt="">
                                        <span class="badge badge--top-right rounded-pill text-bg-dark text-b5-regular">Available: <strong>10 Cars</strong></span>
                                    </div>
                                    <div class="card--branch__content px-3 pt-4 pb-4 space-y-3 flex-fill d-flex flex-column align-items-start">
                                        <div class="mb-5">
                                            <h5 class="card--branch__title text-white text-h5 fw-semibold mb-3">Edinburgh</h5>
                                            <p class="text-white text-opacity-75 text-b4-regular mb-0">Edinburgh Airport, Turnhouse Road, <br>Edinburgh, EH12 9DN</p>
                                        </div>

                                        <!-- Action -->
                                        <div class="card--branch__action d-flex justify-content-between align-items-center w-100 mt-auto">
                                            <div class="d-flex align-items-center gap-3">
                                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="24" cy="24" r="24" fill="#0072FF" fill-opacity="0.14"/>
                                                <path d="M30.875 17.125V20.875M30.875 17.125H27.125M30.875 17.125L25.875 22.125M28.375 32.125C21.4717 32.125 15.875 26.5283 15.875 19.625V17.75C15.875 17.2527 16.0725 16.7758 16.4242 16.4242C16.7758 16.0725 17.2527 15.875 17.75 15.875H18.8933C19.3233 15.875 19.6983 16.1675 19.8025 16.585L20.7242 20.2708C20.8158 20.6375 20.6792 21.0225 20.3767 21.2483L19.2992 22.0567C19.1449 22.1683 19.0308 22.3267 18.9738 22.5084C18.9167 22.69 18.9198 22.8852 18.9825 23.065C19.4841 24.4293 20.2762 25.6682 21.304 26.696C22.3318 27.7238 23.5707 28.5159 24.935 29.0175C25.3025 29.1525 25.7083 29.0142 25.9433 28.7008L26.7517 27.6233C26.8623 27.4756 27.0141 27.3639 27.188 27.3021C27.3619 27.2402 27.5501 27.2311 27.7292 27.2758L31.415 28.1975C31.8317 28.3017 32.125 28.6767 32.125 29.1067V30.25C32.125 30.7473 31.9275 31.2242 31.5758 31.5758C31.2242 31.9275 30.7473 32.125 30.25 32.125H28.375Z" stroke="#0072FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <div class="text-b3-semibold text-light">+441312033817</div>
                                            </div>
                                            <div>
                                                <a class="link-primary fw-semibold" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </oy-swiper>
                    <div class="mt-5 d-lg-none">
                        <div class="pagination-default" id="oy-slider-journey--pagination"></div>
                    </div>
                </div>

                <div class="container mt-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <a class="btn d-inline-flex btn--gradient-primary" style="--btn-before-size: 350px;" href="#">
                                    <span class="btn__text">View All Locations</span>
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- /Section: Header TOP BAR (Mobile Only) -->
     </section>
        
    <section class="overflow-hidden section-padding-y">
        <div class="container">
            <div class="oy-section-title text-center space-y-3">
                <h3 class="text-h2">Your Favorite Car Brands, All in One Place</h3>
            </div>
        </div>

        <marquee-slider class="oy-partner" data-direction="left" data-marquee-speed="100" data-marquee-gap="20">
            <div class="marquee-track">
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="../assets/img/brands/partner-jaguar.png" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="../assets/img/brands/partner-lamborghini.png" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="../assets/img/brands/partner-mercedes.png" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="../assets/img/brands/partner-bmw.png" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="../assets/img/brands/partner-b.png" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="../assets/img/brands/partner-porsche.png" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="../assets/img/brands/partner-land-rover.png" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="../assets/img/brands/partner-audi.png" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="../assets/img/brands/partner-jaguar.png" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="../assets/img/brands/partner-lamborghini.png" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="../assets/img/brands/partner-mercedes.png" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="../assets/img/brands/partner-bmw.png" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="../assets/img/brands/partner-b.png" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="../assets/img/brands/partner-porsche.png" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="../assets/img/brands/partner-land-rover.png" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="../assets/img/brands/partner-audi.png" alt="">
                    </div>
                </div>
            </div>
        </marquee-slider>
    </section>

    <section class="oy-testimonial overflow-hidden section-padding-y">
        <div class="container">
            <div class="oy-section-title text-center space-y-3">
                <div class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-uppercase">
                    <span>Testimonial</span>
                </div>
                <h3 class="text-h2">Trusted by Thousands of Clients</h3>
            </div>
        </div>

        <!-- Desktop: Start Testimonial Slider -->
        <marquee-slider class="marquee-slider oy-testimonial-slider" data-direction="left" data-marquee-speed="100" data-marquee-gap="20">
            <div class="marquee-track">
                <!-- Testimonial Item -->
                <div class="oy-testimonial-item marquee-item">
                    <div class="item-author">
                        <img class="item-author__thumb" src="../assets/img/home/r_client1.png" alt="">
                        <div class="item-author__text">
                            <h6 class="text-b3-semibold">Char and ems</h6>
                            <p class="text-b5-regular">18 days ago</p>
                        </div>
                    </div>
                    <div class="item-content text-b5-medium" data-testimonial-content>
                        <div class="testimonial-text">
                            <p>Been to Autofusion for a couple of jobs so far. Both times they were quick and efficient. The staff are friendly and informative, which helps if your hopeless with cars like I am. They took the time to explain what needed to be done and gave me a fair price. The service was excellent and I would definitely recommend them to anyone looking for a reliable mechanic. I was particularly impressed with how they handled my car with care and attention to detail. The whole experience was stress-free and professional. I'll certainly be coming back for any future work on my vehicle.<button class="read-more-btn text-b5-medium" data-read-more><span class="read-more-text">Read more</span><span class="read-less-text">Read less</span></button></p>
                        </div>
                    </div>
                    <div class="item-review">
                        <div class="review_ratting" data-rating="5"></div>
                        <img class="review_ratting__logo" src="../assets/img/home/google.png" alt="">
                    </div>
                </div>

                <div class="oy-testimonial-item marquee-item">
                    <div class="item-author">
                        <img class="item-author__thumb" src="../assets/img/home/r_client2.png" alt="">
                        <div class="item-author__text">
                            <h6 class="text-b3-semibold">Andrewemslie</h6>
                            <p class="text-b5-regular">1 month ago</p>
                        </div>
                    </div>
                    <div class="item-content text-b5-medium">
                        <p>"Wouldn't go anywhere else to get my car fixed. Great staff and service.great work kamil"</p>
                    </div>
                    <div class="item-review">
                        <div class="review_ratting" data-rating="4.5"></div>
                        <img class="review_ratting__logo" src="../assets/img/home/google.png" alt="">
                    </div>
                </div>
                <div class="oy-testimonial-item marquee-item">
                    <div class="item-author">
                        <img class="item-author__thumb" src="../assets/img/home/r_client3.png" alt="">
                        <div class="item-author__text">
                            <h6 class="text-b3-semibold">Michael Moran</h6>
                            <p class="text-b5-regular">3 Months ago</p>
                        </div>
                    </div>
                    <div class="item-content text-b5-medium">
                        <p>"Booked my car in for it's service, all went well and the staff were very helpful. Would have no problem recommending this garage."</p>
                    </div>
                    <div class="item-review">
                        <div class="review_ratting" data-rating="4.5"></div>
                        <img class="review_ratting__logo" src="../assets/img/home/google.png" alt="">
                    </div>
                </div>
                <div class="oy-testimonial-item marquee-item">
                    <div class="item-author">
                        <img class="item-author__thumb" src="../assets/img/home/r_client4.png" alt="">
                        <div class="item-author__text">
                            <h6 class="text-b3-semibold">Eileen Pillar</h6>
                            <p class="text-b5-regular">6 months ago</p>
                        </div>
                    </div>
                    <div class="item-content text-b5-medium">
                        <p>"Great customer service, polite, helpful and respectful. Great price to replace my tyre, would highly recommend them"</p>
                    </div>
                    <div class="item-review">
                        <div class="review_ratting" data-rating="4.5"></div>
                        <img class="review_ratting__logo" src="../assets/img/home/google.png" alt="">
                    </div>
                </div>
                <div class="oy-testimonial-item marquee-item">
                    <div class="item-author">
                        <img class="item-author__thumb" src="../assets/img/home/r_client7.png" alt="">
                        <div class="item-author__text">
                            <h6 class="text-b3-semibold">Char and ems</h6>
                            <p class="text-b5-regular">18 days ago</p>
                        </div>
                    </div>
                    <div class="item-content text-b5-medium">
                        <p>Been to Autofusion for a couple of jobs so far. Both times they were quick and efficient. The staff are friendly and informative, which helps if your hopeless with cars like I am.</p>
                    </div>
                    <div class="item-review">
                        <div class="review_ratting" data-rating="4.5"></div>
                        <img class="review_ratting__logo" src="../assets/img/home/google.png" alt="">
                    </div>
                </div>
                <div class="oy-testimonial-item marquee-item">
                    <div class="item-author">
                        <img class="item-author__thumb" src="../assets/img/home/r_client6.png" alt="">
                        <div class="item-author__text">
                            <h6 class="text-b3-semibold">Char and ems</h6>
                            <p class="text-b5-regular">18 days ago</p>
                        </div>
                    </div>
                    <div class="item-content text-b5-medium">
                        <p>Been to Autofusion for a couple of jobs so far. Both times they were quick and efficient. The staff are friendly and informative, which helps if your hopeless with cars like I am.</p>
                    </div>
                    <div class="item-review">
                        <div class="review_ratting" data-rating="4.5"></div>
                        <img class="review_ratting__logo" src="../assets/img/home/google.png" alt="">
                    </div>
                </div>
            </div>
        </marquee-slider>
        </div>
        <div class="d-none d-md-block">
            <marquee-slider class="marquee-slider oy-testimonial-slider" data-direction="right" data-marquee-speed="100" data-marquee-gap="20">
                <div class="marquee-track">
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="../assets/img/home/r_client1.png" alt="">
                            <div class="item-author__text">
                                <h6 class="text-b3-semibold">Char and ems</h6>
                                <p class="text-b5-regular">18 days ago</p>
                            </div>
                        </div>
                        <div class="item-content text-b5-medium">
                        <p>Been to Autofusion for a couple of jobs so far. Both times they were quick and efficient. The staff are friendly and informative, which helps if your hopeless with cars like I am.</p>
                    </div>
                        <div class="item-review">
                            <div class="review_ratting" data-rating="4.5"></div>
                        <img class="review_ratting__logo" src="../assets/img/home/google.png" alt="">
                        </div>
                    </div>
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="../assets/img/home/r_client2.png" alt="">
                            <div class="item-author__text">
                                <h6 class="text-b3-semibold">Andrewemslie</h6>
                                <p class="text-b5-regular">1 month ago</p>
                            </div>
                        </div>
                    <div class="item-content text-b5-medium">
                        <p>"Wouldn't go anywhere else to get my car fixed. Great staff and service.great work kamil"</p>
                    </div>
                        <div class="item-review">
                            <div class="review_ratting" data-rating="4.5"></div>
                        <img class="review_ratting__logo" src="../assets/img/home/google.png" alt="">
                        </div>
                    </div>
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="../assets/img/home/r_client3.png" alt="">
                            <div class="item-author__text">
                                <h6 class="text-b3-semibold">Michael Moran</h6>
                                <p class="text-b5-regular">3 Months ago</p>
                            </div>
                        </div>
                    <div class="item-content text-b5-medium">
                        <p>"Booked my car in for it's service, all went well and the staff were very helpful. Would have no problem recommending this garage."</p>
                    </div>
                        <div class="item-review">
                            <div class="review_ratting" data-rating="4.5"></div>
                        <img class="review_ratting__logo" src="../assets/img/home/google.png" alt="">
                        </div>
                    </div>
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="../assets/img/home/r_client4.png" alt="">
                            <div class="item-author__text">
                                <h6 class="text-b3-semibold">Eileen Pillar</h6>
                                <p class="text-b5-regular">6 months ago</p>
                            </div>
                        </div>
                    <div class="item-content text-b5-medium">
                        <p>"Great customer service, polite, helpful and respectful. Great price to replace my tyre, would highly recommend them</p>
                    </div>
                        <div class="item-review">
                            <div class="review_ratting" data-rating="4.5"></div>
                        <img class="review_ratting__logo" src="../assets/img/home/google.png" alt="">
                        </div>
                    </div>
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="../assets/img/home/r_client7.png" alt="">
                            <div class="item-author__text">
                                <h6 class="text-b3-semibold">Char and ems</h6>
                                <p class="text-b5-regular">18 days ago</p>
                            </div>
                        </div>
                        <div class="item-content text-b5-medium">
                        <p>Been to Autofusion for a couple of jobs so far. Both times they were quick and efficient. The staff are friendly and informative, which helps if your hopeless with cars like I am.</p>
                    </div>
                        <div class="item-review">
                            <div class="review_ratting" data-rating="4.5"></div>
                        <img class="review_ratting__logo" src="../assets/img/home/google.png" alt="">
                        </div>
                    </div>
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="../assets/img/home/r_client6.png" alt="">
                            <div class="item-author__text">
                                <h6 class="text-b3-semibold">Char and ems</h6>
                                <p class="text-b5-regular">18 days ago</p>
                            </div>
                        </div>
                        <div class="item-content text-b5-medium">
                        <p>Been to Autofusion for a couple of jobs so far. Both times they were quick and efficient. The staff are friendly and informative, which helps if your hopeless with cars like I am.</p>
                    </div>
                        <div class="item-review">
                            <div class="review_ratting" data-rating="4.5"></div>
                        <img class="review_ratting__logo" src="../assets/img/home/google.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding-y overflow-hidden">
        <div class="container oy-section-title">
            <div class="row align-items-center">
                <div class="col-lg">
                    <div class="text-center text-lg-start">
                        <h3 class="text-h2">Start Your Journey with Our Fleet</h3>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-auto">
                    <div class="d-flex align-items-center gap-4">
                        <span class="btn--circle outlined" id="oy-slider-journey-arrow--prev" data-pulse-direction="right">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.77344 5.43582L3.20927 11L8.77344 16.5642" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M18.791 11H3.36352" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <span class="btn--circle outlined" id="oy-slider-journey-arrow--next" data-pulse-direction="left">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.2266 5.43582L18.7907 11L13.2266 16.5642" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3.20898 11H18.6365" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <oy-swiper class="overflow-visible" data-items="1" data-sm-items="1" data-md-items="2" data-lg-items="3" data-xl-items="3" data-loop="true" data-speed="600" data-lazy="true" data-space="30" data-autoplay="false" data-autoplay-delay="3000" data-pagination="#oy-slider-journey--pagination" data-prev="#oy-slider-journey-arrow--prev" data-next="#oy-slider-journey-arrow--next">
                <div class="swiper-wrapper">
                    <!-- Slider Item -->
                    <div class="swiper-slide">
                        <div class="card--media card--standard">
                            <div class="card--media__thumb">
                                <img src="../assets/img/brands/banner-aston-martin.png" alt="">
                            </div>
                            <div class="card-content">
                                <div class="text-end">
                                    <a href="#" class="card-link btn--circle secondary">
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="card-information">
                                    <div class="avatar avatar-md">
                                        <img src="../assets/img/brands/logo-aston-martin.png" alt="">
                                    </div>
                                    <div>
                                        <h3 class="text-h4 fw-medium mb-0">Aston Martin</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Item -->
                    <div class="swiper-slide">
                        <div class="card--media card--standard">
                            <div class="card--media__thumb">
                                <img src="../assets/img/brands/banner-audi.png" alt="">
                            </div>
                            <div class="card-content">
                                <div class="text-end">
                                    <a href="#" class="card-link btn--circle secondary">
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="card-information">
                                    <div class="avatar avatar-md">
                                        <img src="../assets/img/brands/logo-audi.png" alt="">
                                    </div>
                                    <div>
                                        <h3 class="text-h4 fw-medium mb-0">Audi</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Item -->
                    <div class="swiper-slide">
                        <div class="card--media card--standard">
                            <div class="card--media__thumb">
                                <img src="../assets/img/brands/banner-bmw.png" alt="">
                            </div>
                            <div class="card-content">
                                <div class="text-end">
                                    <a href="#" class="card-link btn--circle secondary">
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="card-information">
                                    <div class="avatar avatar-md">
                                        <img src="../assets/img/brands/logo-bmw.png" alt="">
                                    </div>
                                    <div>
                                        <h3 class="text-h4 fw-medium mb-0">BMW</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Item -->
                    <div class="swiper-slide">
                        <div class="card--media card--standard">
                            <div class="card--media__thumb">
                                <img src="../assets/img/brands/banner-bentley.png" alt="">
                            </div>
                            <div class="card-content">
                                <div class="text-end">
                                    <a href="#" class="card-link btn--circle secondary">
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="card-information">
                                    <div class="avatar avatar-md">
                                        <img src="../assets/img/brands/logo-bentley.png" alt="">
                                    </div>
                                    <div>
                                        <h3 class="text-h4 fw-medium mb-0">Bentley</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slider Item -->
                    <div class="swiper-slide">
                        <div class="card--media card--standard">
                            <div class="card--media__thumb">
                                <img src="../assets/img/brands/banner-aston-martin.png" alt="">
                            </div>
                            <div class="card-content">
                                <div class="text-end">
                                    <a href="#" class="card-link btn--circle secondary">
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="card-information">
                                    <div class="avatar avatar-md">
                                        <img src="../assets/img/brands/logo-aston-martin.png" alt="">
                                    </div>
                                    <div>
                                        <h3 class="text-h4 fw-medium mb-0">Aston Martin</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Item -->
                    <div class="swiper-slide">
                        <div class="card--media card--standard">
                            <div class="card--media__thumb">
                                <img src="../assets/img/brands/banner-audi.png" alt="">
                            </div>
                            <div class="card-content">
                                <div class="text-end">
                                    <a href="#" class="card-link btn--circle secondary">
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="card-information">
                                    <div class="avatar avatar-md">
                                        <img src="../assets/img/brands/logo-audi.png" alt="">
                                    </div>
                                    <div>
                                        <h3 class="text-h4 fw-medium mb-0">Audi</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Item -->
                    <div class="swiper-slide">
                        <div class="card--media card--standard">
                            <div class="card--media__thumb">
                                <img src="../assets/img/brands/banner-bmw.png" alt="">
                            </div>
                            <div class="card-content">
                                <div class="text-end">
                                    <a href="#" class="card-link btn--circle secondary">
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="card-information">
                                    <div class="avatar avatar-md">
                                        <img src="../assets/img/brands/logo-bmw.png" alt="">
                                    </div>
                                    <div>
                                        <h3 class="text-h4 fw-medium mb-0">BMW</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Item -->
                    <div class="swiper-slide">
                        <div class="card--media card--standard">
                            <div class="card--media__thumb">
                                <img src="../assets/img/brands/banner-bentley.png" alt="">
                            </div>
                            <div class="card-content">
                                <div class="text-end">
                                    <a href="#" class="card-link btn--circle secondary">
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="card-information">
                                    <div class="avatar avatar-md">
                                        <img src="../assets/img/brands/logo-bentley.png" alt="">
                                    </div>
                                    <div>
                                        <h3 class="text-h4 fw-medium mb-0">Bentley</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </oy-swiper>
            <div class="mt-5 d-lg-none">
                <div class="pagination-default" id="oy-slider-journey--pagination"></div>
            </div>
        </div>
     </section>

    <script src="{{ asset('assets-v2/js/components/oy-swiper.js') }}" defer></script>
    <script src="{{ asset('assets-v2/js/components/marquee-slider.js') }}" defer></script> 
    <script src="{{ asset('assets-v2/js/components/oy-swiper.js') }}" defer></script>
@endsection
