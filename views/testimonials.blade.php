@extends('layouts.app')

@section('head-info')
    <title>Testimonials - {{ config('app.name') }} Glasgow</title>
    <meta name="description" content="Our customers have great things to say about us." />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('/images/homepage-header.jpeg') }}" />
    <meta property="og:title" content="Testimonials - {{ config('app.name') }} Glasgow" />
    <meta property="og:description" content="Our customers have great things to say about us." />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection

@section('main')
    <section class="py-5">
        <div class="container-fluid px-3 px-lg-5">
            <div class="oy-banner bg-dark" style="background-image: url('../assets/img/banners/gradient-banner-desktop-13.jpg');">
                <div class="row oy-banner__row g-4 g-xl-5 align-items-center justify-content-between">
                    <div class="col-lg-6 col-xl-6">
                        <div class="space-y-3">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b4-regular text-uppercase">Testimonial</span>
                            <h2 class="text-light text-h1 mb-5">Trusted by Drivers Across the UK</h2>
                            <p class="text-light text-opacity-50 text-b2-regular mb-3">At Autofusion, we take pride in delivering an exceptional hire experience to every customer. From first enquiry to final handover, our clients consistently praise our professionalism, attention to detail, and the quality of our vehicles. Here’s what some of them have to say about their journey with us.</p>
                            <a class="btn d-none d-lg-inline-flex btn--gradient-primary" href="#" data-pulse-direction="left">
                                <span class="btn__text">View Models</span>
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="space-y-4 d-md-none">
                            <img class="rounded-4 img-fluid w-100" src="{{ asset('assets/img/banners/gradient-banner-mobile-13.png') }}" />
                            <a class="btn btn--gradient-primary" href="#" data-pulse-direction="left">
                                <span class="btn__text">View Models</span>
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

    <section class="section-padding-y d-none d-md-block">   
        <div class="container">
            <div class="row g-4 g-lg-5">
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{ asset('assets/img/home/r_client1.png') }}" alt="">
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
                            <img class="review_ratting__logo" src="{{ asset('assets/img/home/google.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{ asset('assets/img/home/r_client1.png') }}" alt="">
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
                            <img class="review_ratting__logo" src="{{ asset('assets/img/home/google.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{ asset('assets/img/home/r_client1.png') }}" alt="">
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
                            <img class="review_ratting__logo" src="{{ asset('assets/img/home/google.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{ asset('assets/img/home/r_client1.png') }}" alt="">
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
                            <img class="review_ratting__logo" src="{{ asset('assets/img/home/google.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{ asset('assets/img/home/r_client1.png') }}" alt="">
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
                            <img class="review_ratting__logo" src="{{ asset('assets/img/home/google.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{ asset('assets/img/home/r_client1.png') }}" alt="">
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
                            <img class="review_ratting__logo" src="{{ asset('assets/img/home/google.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{ asset('assets/img/home/r_client1.png') }}" alt="">
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
                            <img class="review_ratting__logo" src="{{ asset('assets/img/home/google.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{ asset('assets/img/home/r_client1.png') }}" alt="">
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
                            <img class="review_ratting__logo" src="{{ asset('assets/img/home/google.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{ asset('assets/img/home/r_client1.png') }}" alt="">
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
                            <img class="review_ratting__logo" src="{{ asset('assets/img/home/google.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{ asset('assets/img/home/r_client1.png') }}" alt="">
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
                            <img class="review_ratting__logo" src="{{ asset('assets/img/home/google.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{ asset('assets/img/home/r_client1.png') }}" alt="">
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
                            <img class="review_ratting__logo" src="{{ asset('assets/img/home/google.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{ asset('assets/img/home/r_client1.png') }}" alt="">
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
                            <img class="review_ratting__logo" src="{{ asset('assets/img/home/google.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pagination-default mt-5 d-flex flex-wrap justify-content-center align-items-center gap-4">
            <a href="#" class="btn--circle outlined" data-pulse-direction="right">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.77344 5.43582L3.20927 11L8.77344 16.5642" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18.791 11H3.36352" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <!-- Active -->
            <span class="btn--circle text-b1-medium is-active">01</span>

            <a href="#" class="btn--circle text-b1-medium">02</a>
            <a href="#" class="btn--circle text-b1-medium">03</a>
            <a href="#" class="btn--circle text-b1-medium outlined" data-pulse-direction="left">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.2266 5.43582L18.7907 11L13.2266 16.5642" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M3.20898 11H18.6365" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            </a>
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
    <section class="oy-faq section-padding-y">
        <div class="container">
            <div class="oy-section-title text-center">
                <h3 class="text-h2">Frequently Asked Questions?</h3>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="accordion accordion--style-1 space-y-4" id="accordion-faq--2">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="accordion-faq-2-heading--1">
                                <button class="accordion-button text-h6 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Which branches do you have and where are they located?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="accordion-faq-2-heading--1" data-bs-parent="#accordion-faq--2">
                                <div class="accordion-body text-b2-regular text-secondary">
                                    We have branches in Edinburgh Airport (EH12 9DN), Glasgow (404 Glasgow Rd, Clydebank G81 1PW), London Heathrow Airport (Terminal 2 Landside, TW6 1EF) and Newcastle International Airport (NE13 8BZ).
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed text-h6 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How many cars are available at each location?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion-faq--2">
                                <div class="accordion-body text-b2-regular text-secondary">
                                    At Autofusion, Our mission is to redefine luxury travel by delivering exceptional car hire experiences that combine elegance, performance, and comfort.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed text-h6 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What are the phone numbers for each branch?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion-faq--2">
                                <div class="accordion-body text-b2-regular text-secondary">
                                    At Autofusion, Our mission is to redefine luxury travel by delivering exceptional car hire experiences that combine elegance, performance, and comfort.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed text-h6 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Can I pick up a car at one branch and drop off at another?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordion-faq--2">
                                <div class="accordion-body text-b2-regular text-secondary">
                                    At Autofusion, Our mission is to redefine luxury travel by delivering exceptional car hire experiences that combine elegance, performance, and comfort.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed text-h6 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Do all branches have the same vehicle selection?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordion-faq--2">
                                <div class="accordion-body text-b2-regular text-secondary">
                                    At Autofusion, Our mission is to redefine luxury travel by delivering exceptional car hire experiences that combine elegance, performance, and comfort.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed text-h6 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Are the branches open all day / same hours?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordion-faq--2">
                                <div class="accordion-body text-b2-regular text-secondary">
                                    At Autofusion, Our mission is to redefine luxury travel by delivering exceptional car hire experiences that combine elegance, performance, and comfort.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed text-h6 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    How do I find the nearest branch for me?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordion-faq--2">
                                <div class="accordion-body text-b2-regular text-secondary">
                                    At Autofusion, Our mission is to redefine luxury travel by delivering exceptional car hire experiences that combine elegance, performance, and comfort.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed text-h6 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Is there parking available at the branch locations when I arrive?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordion-faq--2">
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


    <!-- <section class="my-10">
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-793bd8a6-5fca-4b27-bbe1-7033adfb8dd0"></div>
    </section> -->

    
    <script src="{{ asset('assets-v2/js/components/oy-swiper.js') }}" defer></script>
    <script src="{{ asset('assets-v2/js/app.js') }}" defer></script>
    <script src="{{ asset('assets-v2/js/main.js') }}" defer></script>
@endsection
