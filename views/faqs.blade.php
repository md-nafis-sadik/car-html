@extends('layouts.app-v2')
@section('head-info')
    <title>Faqs | {{ config('app.name') }} Glasgow</title>
    <meta name="description" content="Autofusion is proud to offer an expert car repairs service and unparalleled customer support." />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Faqs | {{ config('app.name') }} Glasgow" />
    <meta property="og:description" content="Autofusion is proud to offer an expert car repairs service and unparalleled customer support." />
    <meta property="og:url" content="https://autofusionrepairs.co.uk/faqs" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection

@section('main')
    <!-- ==================== Section: List Frequently Asked Questions ==================== -->
     <section class="oy-faq section-padding-y">
        <div class="container">
            <div class="row g-4 g-lg-5">
                <div class="col-lg-5 col-xl-5">
                    <div class="oy-section-title text-center text-lg-start">
                        <h3 class="text-h2 mb-5">Frequently Asked Questions?</h3>

                        <div class="card p-4 p-md-5 rounded-4" style="--bs-card-bg: #E1EFFF; max-width: 400px;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-transparent px-0">
                                    <a href="#" class="link-dark text-decoration-none py-3 d-flex flex-row justify-content-between flex-fill">
                                        <span>Booking & Requirements</span>
                                        <span class="ml-auto">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.2275 5.43579L18.7917 11L13.2275 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.2085 11H18.636" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-group-item bg-transparent px-0">
                                    <a href="#" class="link-dark text-decoration-none py-3 d-flex flex-row justify-content-between flex-fill">
                                        <span>Drivers & Age</span>
                                        <span class="ml-auto">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.2275 5.43579L18.7917 11L13.2275 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.2085 11H18.636" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-group-item bg-transparent px-0">
                                    <a href="#" class="link-dark text-decoration-none py-3 d-flex flex-row justify-content-between flex-fill">
                                        <span>Delivery & Collection</span>
                                        <span class="ml-auto">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.2275 5.43579L18.7917 11L13.2275 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.2085 11H18.636" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-group-item bg-transparent px-0">
                                    <a href="#" class="link-dark text-decoration-none py-3 d-flex flex-row justify-content-between flex-fill">
                                        <span>Payments & Deposits</span>
                                        <span class="ml-auto">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.2275 5.43579L18.7917 11L13.2275 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.2085 11H18.636" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-group-item bg-transparent px-0">
                                    <a href="#" class="link-dark text-decoration-none py-3 d-flex flex-row justify-content-between flex-fill">
                                        <span>During Your Hire</span>
                                        <span class="ml-auto">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.2275 5.43579L18.7917 11L13.2275 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.2085 11H18.636" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-group-item bg-transparent px-0">
                                    <a href="#" class="link-dark text-decoration-none py-3 d-flex flex-row justify-content-between flex-fill">
                                        <span>Insurance & Responsibility</span>
                                        <span class="ml-auto">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.2275 5.43579L18.7917 11L13.2275 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.2085 11H18.636" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-7">
                    <div class="accordion accordion--style-1 space-y-4" id="accordion-faq-col--2">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="accordion-faq-col-2-heading--1">
                                <button class="accordion-button text-h6 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCol-list-One" aria-expanded="true" aria-controls="collapseCol-list-One">
                                    What types of supercars are available to hire?
                                </button>
                            </h2>
                            <div id="collapseCol-list-One" class="accordion-collapse collapse show" aria-labelledby="accordion-faq-col-2-heading--1" data-bs-parent="#accordion-faq-col--2">
                                <div class="accordion-body text-b2-regular text-secondary">
                                    We offer an exclusive fleet of high-performance vehicles, including brands like Ferrari, Lamborghini, McLaren, and more.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingCol-list-Two">
                                <button class="accordion-button collapsed text-h6 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCol-list-Two" aria-expanded="false" aria-controls="collapseCol-list-Two">
                                    Can I choose between self-drive and chauffeur options?
                                </button>
                            </h2>
                            <div id="collapseCol-list-Two" class="accordion-collapse collapse" aria-labelledby="headingCol-list-Two" data-bs-parent="#accordion-faq-col--2">
                                <div class="accordion-body text-b2-regular text-secondary">
                                    At Autofusion, Our mission is to redefine luxury travel by delivering exceptional car hire experiences that combine elegance, performance, and comfort.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingCol-list-Three">
                                <button class="accordion-button collapsed text-h6 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCol-list-Three" aria-expanded="false" aria-controls="collapseCol-list-Three">
                                    What is the minimum rental period?
                                </button>
                            </h2>
                            <div id="collapseCol-list-Three" class="accordion-collapse collapse" aria-labelledby="headingCol-list-Three" data-bs-parent="#accordion-faq-col--2">
                                <div class="accordion-body text-b2-regular text-secondary">
                                    At Autofusion, Our mission is to redefine luxury travel by delivering exceptional car hire experiences that combine elegance, performance, and comfort.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingCol-list-Four">
                                <button class="accordion-button collapsed text-h6 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCol-list-Four" aria-expanded="false" aria-controls="collapseCol-list-Four">
                                    What are the age and driving licence requirements?
                                </button>
                            </h2>
                            <div id="collapseCol-list-Four" class="accordion-collapse collapse" aria-labelledby="headingCol-list-Four" data-bs-parent="#accordion-faq-col--2">
                                <div class="accordion-body text-b2-regular text-secondary">
                                    At Autofusion, Our mission is to redefine luxury travel by delivering exceptional car hire experiences that combine elegance, performance, and comfort.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingCol-list-Five">
                                <button class="accordion-button collapsed text-h6 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCol-list-Five" aria-expanded="false" aria-controls="collapseCol-list-Five">
                                    Are there mileage limits or additional charges?
                                </button>
                            </h2>
                            <div id="collapseCol-list-Five" class="accordion-collapse collapse" aria-labelledby="headingCol-list-Five" data-bs-parent="#accordion-faq-col--2">
                                <div class="accordion-body text-b2-regular text-secondary">
                                    At Autofusion, Our mission is to redefine luxury travel by delivering exceptional car hire experiences that combine elegance, performance, and comfort.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingCol-list-Six">
                                <button class="accordion-button collapsed text-h6 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCol-list-Six" aria-expanded="false" aria-controls="collapseCol-list-Six">
                                    What’s included in the rental price?
                                </button>
                            </h2>
                            <div id="collapseCol-list-Six" class="accordion-collapse collapse" aria-labelledby="headingCol-list-Six" data-bs-parent="#accordion-faq-col--2">
                                <div class="accordion-body text-b2-regular text-secondary">
                                    At Autofusion, Our mission is to redefine luxury travel by delivering exceptional car hire experiences that combine elegance, performance, and comfort.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingCol-list-Seven">
                                <button class="accordion-button collapsed text-h6 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCol-list-Seven" aria-expanded="false" aria-controls="collapseCol-list-Seven">
                                    What happens if the car breaks down or has a fault?
                                </button>
                            </h2>
                            <div id="collapseCol-list-Seven" class="accordion-collapse collapse" aria-labelledby="headingCol-list-Seven" data-bs-parent="#accordion-faq-col--2">
                                <div class="accordion-body text-b2-regular text-secondary">
                                    At Autofusion, Our mission is to redefine luxury travel by delivering exceptional car hire experiences that combine elegance, performance, and comfort.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingCol-list-Eight">
                                <button class="accordion-button collapsed text-h6 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCol-list-Eight" aria-expanded="false" aria-controls="collapseCol-list-Eight">
                                    How do I make a booking and what is the cancellation policy?
                                </button>
                            </h2>
                            <div id="collapseCol-list-Eight" class="accordion-collapse collapse" aria-labelledby="headingCol-list-Eight" data-bs-parent="#accordion-faq-col--2">
                                <div class="accordion-body text-b2-regular text-secondary">
                                    At Autofusion, Our mission is to redefine luxury travel by delivering exceptional car hire experiences that combine elegance, performance, and comfort.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!-- /Section: List Frequently Asked Questions -->
@endsection