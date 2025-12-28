@extends('layouts.app-v2')
@section('head-info')
    <title>Our Fleet | {{ config('app.name') }} Glasgow</title>
    <meta name="description" content="Autofusion is proud to offer an expert car repairs service and unparalleled customer support." />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="About us | {{ config('app.name') }} Glasgow" />
    <meta property="og:description" content="Autofusion is proud to offer an expert car repairs service and unparalleled customer support." />
    <meta property="og:url" content="https://autofusionrepairs.co.uk/about" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection

@section('main')
    <!-- /Section: Header TOP BAR (Mobile Only) -->
    <!-- ==================== Section: Hero Banner ==================== -->
    <section class="py-5">
        <div class="container-fluid px-3 px-lg-5">
            <div class="oy-banner bg-dark" style="background-image: url('{{ asset('assets-v2/img/banners/gradient-banner-desktop-14.jpg') }}');">
                <div class="row oy-banner__row g-4 g-xl-5 align-items-center justify-content-between">
                    <div class="col-lg-6 col-xl-6">
                        <div class="space-y-3">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b4-regular text-uppercase">Franchise</span>
                            <h2 class="text-light text-h1 mb-5">Join the Autofusion Franchise Network</h2>
                            <p class="text-light text-opacity-50 text-b2-regular mb-3">Becoming an Autofusion franchise partner gives you the opportunity to operate your own premium car hire business with the full backing, systems, and reputation of our established brand. We provide you with everything you need to grow — from operational guidance and marketing resources to exclusive regional rights.</p>
                            <a class="btn d-none d-lg-inline-flex btn--gradient-primary" href="#" data-pulse-direction="left">
                                <span class="btn__text">View Cars</span>
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="space-y-4 d-md-none">
                            <img class="rounded-4 img-fluid w-100" src="{{ asset('assets-v2/img/banners/gradient-banner-mobile-14.png') }}" />
                            <a class="btn btn--gradient-primary" href="#" data-pulse-direction="left">
                                <span class="btn__text">View Cars</span>
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
    </section>
    <!-- /Section: Hero Banner -->  


    
    <!-- ==================== Section: Partner Slider ==================== -->
    <script src="{{ asset('assets-v2/js/components/marquee-slider.js') }}" defer></script>    
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
                        <img class="img-fluid" src="{{ asset('assets-v2/img/brands/partner-jaguar.png') }}" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="{{ asset('assets-v2/img/brands/partner-lamborghini.png') }}" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="{{ asset('assets-v2/img/brands/partner-mercedes.png') }}" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="{{ asset('assets-v2/img/brands/partner-bmw.png') }}" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="{{ asset('assets-v2/img/brands/partner-b.png') }}" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="{{ asset('assets-v2/img/brands/partner-porsche.png') }}" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="{{ asset('assets-v2/img/brands/partner-land-rover.png') }}" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="{{ asset('assets-v2/img/brands/partner-audi.png') }}" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="{{ asset('assets-v2/img/brands/partner-jaguar.png') }}" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="{{ asset('assets-v2/img/brands/partner-lamborghini.png') }}" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="{{ asset('assets-v2/img/brands/partner-mercedes.png') }}" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="{{ asset('assets-v2/img/brands/partner-bmw.png') }}" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="{{ asset('assets-v2/img/brands/partner-b.png') }}" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="{{ asset('assets-v2/img/brands/partner-porsche.png') }}" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="{{ asset('assets-v2/img/brands/partner-land-rover.png') }}" alt="">
                    </div>
                </div>
                <!-- Partner Item -->
                <div class="oy-partner-item marquee-item">
                    <div class="oy-partner-item__thumb">
                        <img class="img-fluid" src="{{ asset('assets-v2/img/brands/partner-audi.png') }}" alt="">
                    </div>
                </div>
            </div>
        </marquee-slider>
    </section>
    <!-- /Section: Partner Slider -->

    <!-- ==================== Section: : A Bespoke Luxury ==================== -->
     <section class="section-padding-y">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img class="img-fluid w-100 rounded-4" src="{{ asset('assets-v2/img/banners/opportunity-banner.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="space-y-3 ps-lg-5">
                        <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b4-regular text-uppercase">The Opportunity</span>
                        <h2 class="text-dark text-h2 mb-3">Why Drivers Choose Autofusion Cars</h2>
                        <p class="text-secondary text-opacity-50 text-b3-regular">Franchisees benefit from Autofusion’s proven business model, advanced booking technology, and nationwide recognition. With access to our trusted fleet suppliers, marketing expertise, and dedicated franchise team, you’ll be positioned to scale quickly and deliver a five-star experience to your clients.</p>
                        <ul class="list-unstyled space-y-2">
                            <li class="d-flex gap-3">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="20" height="20" rx="10" fill="#0072FF"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2483 6.15838L8.28164 11.9167L6.69831 10.2251C6.40664 9.95005 5.94831 9.93338 5.61497 10.1667C5.28997 10.4084 5.19831 10.8334 5.39831 11.1751L7.27331 14.2251C7.45664 14.5084 7.77331 14.6834 8.13164 14.6834C8.47331 14.6834 8.79831 14.5084 8.98164 14.2251C9.28164 13.8334 15.0066 7.00838 15.0066 7.00838C15.7566 6.24172 14.8483 5.56672 14.2483 6.15005V6.15838Z" fill="white"/>
                                </svg>
                                <span>Operate under a trusted UK luxury brand</span>
                            </li>
                            <li class="d-flex gap-3">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="20" height="20" rx="10" fill="#0072FF"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2483 6.15838L8.28164 11.9167L6.69831 10.2251C6.40664 9.95005 5.94831 9.93338 5.61497 10.1667C5.28997 10.4084 5.19831 10.8334 5.39831 11.1751L7.27331 14.2251C7.45664 14.5084 7.77331 14.6834 8.13164 14.6834C8.47331 14.6834 8.79831 14.5084 8.98164 14.2251C9.28164 13.8334 15.0066 7.00838 15.0066 7.00838C15.7566 6.24172 14.8483 5.56672 14.2483 6.15005V6.15838Z" fill="white"/>
                                </svg>
                                <span>Receive complete onboarding & operational training</span>
                            </li>
                            <li class="d-flex gap-3">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="20" height="20" rx="10" fill="#0072FF"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2483 6.15838L8.28164 11.9167L6.69831 10.2251C6.40664 9.95005 5.94831 9.93338 5.61497 10.1667C5.28997 10.4084 5.19831 10.8334 5.39831 11.1751L7.27331 14.2251C7.45664 14.5084 7.77331 14.6834 8.13164 14.6834C8.47331 14.6834 8.79831 14.5084 8.98164 14.2251C9.28164 13.8334 15.0066 7.00838 15.0066 7.00838C15.7566 6.24172 14.8483 5.56672 14.2483 6.15005V6.15838Z" fill="white"/>
                                </svg>
                                <span>Access our fleet, systems, and lead network</span>
                            </li>
                            <li class="d-flex gap-3">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="20" height="20" rx="10" fill="#0072FF"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2483 6.15838L8.28164 11.9167L6.69831 10.2251C6.40664 9.95005 5.94831 9.93338 5.61497 10.1667C5.28997 10.4084 5.19831 10.8334 5.39831 11.1751L7.27331 14.2251C7.45664 14.5084 7.77331 14.6834 8.13164 14.6834C8.47331 14.6834 8.79831 14.5084 8.98164 14.2251C9.28164 13.8334 15.0066 7.00838 15.0066 7.00838C15.7566 6.24172 14.8483 5.56672 14.2483 6.15005V6.15838Z" fill="white"/>
                                </svg>
                                <span>Enjoy ongoing marketing and admin support</span>
                            </li>
                        </ul>
                        
                        <div class="mt-5">
                            <a href="#" class="btn btn--gradient-primary">
                                <span class="btn__text">Contact Us</span>
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
     </section>
    <!-- /Section: : A Bespoke Luxury -->


    <!-- ==================== Section: Simple, Transparent Investment ==================== -->
    <section class="py-5">
        <div class="container-fluid px-3 px-lg-5">
            <div class="oy-banner bg-dark space-y-5">
                <div class="row g-4 g-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h3 class="text-h3 text-light">Simple, Transparent Investment</h3>
                        <p class="text-b4-regular text-light text-opacity-75 mb-5">Our franchise programme offers two flexible membership options — designed to help you get started confidently while maintaining predictable operating costs.</p>
                    </div>
                </div>
                <div class="row justfiy-content-center">
                    <div class="col-lg-12">
                        <div class="table-cover mb-3">
                            <table class="table__pricing">
                                <thead>
                                    <tr>
                                        <th>Plan</th>
                                        <th>Fee</th>
                                        <th>Term</th>
                                        <th>Notes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Standard</td>
                                        <td>£15,000</td>
                                        <td>1 Year</td>
                                        <td>Annual renewal available</td>
                                    </tr>
                                    <tr>
                                        <td>Advantage</td>
                                        <td>£36,000</td>
                                        <td>3 Year</td>
                                        <td>Includes discounted multi-year rate</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center text-light text-b4-regular"> All franchise fees are non-negotiable. Terms can be adjusted to meet your business goals.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section: Simple, Transparent Investment -->  


    
    <!-- ==================== Section: : Territories ==================== -->
     <section class="section-padding-y">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 order-lg-1">
                    <iframe class="rounded-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.364973311433!2d-0.452250123221129!3d51.46981471344817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487673cb743ccf01%3A0xea74a219c60588e1!2sTerminal%202%2C%20Inner%20Ring%20E%2C%20Hounslow%20TW6%201EW%2C%20UK!5e0!3m2!1sen!2sbd!4v1765670857124!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-6 order-lg-0">
                    <div class="space-y-3 ps-lg-5">
                        <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b4-regular text-uppercase">Territories</span>
                        <h2 class="text-dark text-h2 mb-3">Exclusive Territories Available Across the UK</h2>
                        <p class="text-secondary text-opacity-50 text-b3-regular">Each Autofusion franchise partner receives an exclusive operating territory to protect your investment and maximise market potential.</p>
                        <p class="text-secondary text-opacity-50 text-b3-regular">Available territories are allocated on a first-come, first-served basis and are determined by population density and local demand.</p>
                        <div class="mt-5">
                            <a href="#" class="btn btn--gradient-primary">
                                <span class="btn__text">Contact Us</span>
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
     </section>
    <!-- /Section: : Territories -->

    
    <!-- ==================== Section: Apply TO Become A Franchise Partner ==================== -->
    <section class="section-padding-y">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12">
                    <div class="card p-4 p-lg-5 rounded-5 bg-lighter">
                        <div class="row g-4 g-lg-5">
                            <div class="col-lg-6">
                                <img src="{{ asset('assets-v2/img/banners/apply-banner.png') }}" alt="" class="img-fluid w-100 rounded-4">
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4 mb-lg-5">
                                    <h3 class="text-h4 mb-3">Apply to Become a Franchise Partner</h3>
                                    <p class="text-secondary text-opacity-50">Interested in becoming part of our growing network? Fill out the form below and a member of our franchise development team will contact you with next steps.</p>
                                </div>

                                <form class="g-4 row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your full name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="City/Region of Interest">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select class="e-select form-select">
                                                <option value="">Choose year</option>
                                                <option value="1">1 Year</option>
                                                <option value="2">2 Years</option>
                                                <option value="3">3 Years</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="" id="" rows="6" cols="30" class="form-control" placeholder="Write us"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn--gradient-primary">
                                            <span class="btn__text">Submit Application</span>
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section: Apply TO Become A Franchise Partner -->
@endsection