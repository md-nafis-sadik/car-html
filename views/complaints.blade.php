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
    <section class="py-5">
        <div class="container-fluid px-3 px-lg-5">
            <div class="oy-banner bg-dark" style="background-image: url('../assets/img/banners/gradient-banner-desktop-19.png');">
                <div class="row oy-banner__row g-4 g-xl-5 align-items-center justify-content-between">
                    <div class="col-lg-6 col-xl-6">
                        <div class="space-y-3">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b4-regular text-uppercase">Complaints</span>
                            <h2 class="text-light text-h1 mb-5">Complaints & Feedback</h2>
                            <p class="text-light text-b2-regular mb-5">We’re committed to delivering a premium experience for every client. If something didn’t meet your expectations, please let us know — we’ll make it right.</p>
                            <a class="btn d-none d-lg-inline-flex btn--gradient-primary" href="#" data-pulse-direction="left">
                                <span class="btn__text">Submit a Complaint</span>
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="space-y-4 d-md-none">
                            <img class="rounded-4 img-fluid w-100" src="{{ asset('assets-v2/img/banners/gradient-banner-mobile-17.png') }}" />
                            <a class="btn btn--gradient-primary" href="#" data-pulse-direction="left">
                                <span class="btn__text">Submit a Complaint</span>
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


    <!-- ==================== Section: : Content ==================== -->
     <section class="section-padding-y oy-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card p-4 p-lg-5">
                        <h4>1. Introduction</h4>
                        <p>At Autofusion, we pride ourselves on delivering a premium service and exceptional driving experiences. If you feel we haven’t lived up to that promise, we want to hear from you. Your feedback helps us improve—and ensures every future journey is exceptional.</p>
                        <h4>2. How to Contact Us</h4>
                        <p>You can raise a complaint or share your feedback via:</p>
                        <ul>
                            <li>Email: <a href="mailto:enquiries@autofusionhire.co.uk">enquiries@autofusionhire.co.uk</a></li>
                            <li>Phone: <a href="tel:01412375050">0141 237 5050</a></li>
                            <li>Post: <strong>Autofusion HQ, 123 Luxury Drive, London, UK</strong></li>
                        </ul>
                        <h4>3. What Happens Next</h4>
                        <ul>
                            <li>We’ll acknowledge receipt of your complaint within 48 hours.</li>
                            <li>A dedicated member of our team will investigate your case, liaise with relevant departments, and keep you updated.</li>
                            <li>We aim to provide a full response within 10 working days. If your case requires more time, we’ll let you know and keep you informed.</li>
                        </ul>
                        <h4>4. Our Commitment</h4>
                        <ul>
                            <li>Your complaint will be handled objectively, fairly and with respect.</li>
                            <li>We’ll treat your information confidentially and keep you updated throughout the process.</li>
                            <li>If we identify a shortfall in our service, we’ll work with you to put things right—and learn from the experience to improve our standards.</li>
                        </ul>
                        <h4>5. If You’re Not Satisfied</h4>
                        <p>If you believe your complaint hasn’t been resolved to your satisfaction, you may escalate it further by contacting:</p>
                        <ul>
                            <li><strong>Senior Management, Autofusion:</strong> we’ll review the case again for you</li>
                            <li><strong>Independent Ombudsman / mediator:</strong> we can provide you with details if applicable</li>
                        </ul>
                        <h4>6. Your Feedback Matters</h4>
                        <p>We’re continuously looking to raise our standard of service. Whether your experience was excellent or less than perfect, please tell us so we can keep improving.</p>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!-- /Section: : Content -->
@endsection