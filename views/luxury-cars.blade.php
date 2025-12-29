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
            <div class="oy-banner bg-dark" style="background-image: url('{{asset('assets-v2/img/banners/gradient-banner-desktop-4.png')}}');">
                <div class="row oy-banner__row g-4 g-xl-5 align-items-center justify-content-between">
                    <div class="col-lg-6 col-xl-6">
                        <div class="space-y-3">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b4-regular text-uppercase">Luxury Cars</span>
                            <h2 class="text-light text-h1 mb-5">Luxury Cars Services Across the UK</h2>
                            <p class="text-light text-opacity-50 text-b2-regular">Whether you’re looking to turn heads with a supercar, arrive in style at a wedding, or travel comfortably for business, our diverse fleet and professional team ensure an exceptional experience from start to finish.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="space-y-4">
                            <img class="rounded-4 d-md-none img-fluid w-100" src="../assets/img/banners/gradient-banner-mobile-4.png" />
                            <form action="#">
                                <div class="card space-y-4 p-4 p-lg-5 rounded-5">
                                    <div class="e-control-group">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.9989 13.4299C13.722 13.4299 15.1189 12.0331 15.1189 10.3099C15.1189 8.58681 13.722 7.18994 11.9989 7.18994C10.2758 7.18994 8.87891 8.58681 8.87891 10.3099C8.87891 12.0331 10.2758 13.4299 11.9989 13.4299Z" stroke="#969FB7" stroke-width="1.5"/>
                                            <path d="M3.62166 8.49C5.59166 -0.169998 18.4217 -0.159997 20.3817 8.5C21.5317 13.58 18.3717 17.88 15.6017 20.54C13.5917 22.48 10.4117 22.48 8.39166 20.54C5.63166 17.88 2.47166 13.57 3.62166 8.49Z" stroke="#969FB7" stroke-width="1.5"/>
                                        </svg>
                                        <input type="text" class="form-control" placeholder="Your Locations">
                                    </div>
                                    <div class="e-control-group">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 2V5" stroke="#969FB7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M16 2V5" stroke="#969FB7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M3.5 9.09009H20.5" stroke="#969FB7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z" stroke="#969FB7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15.6937 13.7H15.7027" stroke="#969FB7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15.6937 16.7H15.7027" stroke="#969FB7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.9945 13.7H12.0035" stroke="#969FB7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.9945 16.7H12.0035" stroke="#969FB7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M8.29529 13.7H8.30427" stroke="#969FB7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M8.29529 16.7H8.30427" stroke="#969FB7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <input type="text" class="form-control" placeholder="Choose Date">
                                    </div>
                                    <!-- Select Time -->
                                    <div class="e-select-group">
                                        <span class="e-select-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2C17.52 2 22 6.48 22 12Z" stroke="#969FB7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M15.7089 15.18L12.6089 13.33C12.0689 13.01 11.6289 12.24 11.6289 11.61V7.51001" stroke="#969FB7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        <select name="" id="" class="form-select e-select rounded-3" e-search="true">
                                            <option value="">Select Time</option>   
                                            <option value="2">Time 2</option>   
                                            <option value="3">Time 3</option>   
                                            <option value="4">Time 4</option>   
                                            <option value="5">Time 5</option>   
                                            <option value="6">Time 6</option>   
                                            <option value="7">Time 7</option>   
                                            <option value="8">Time 8</option>   
                                            <option value="9">Time 9</option>   
                                        </select>
                                    </div>
                                    <!-- Vehicle Type -->
                                    <div class="e-select-group">
                                        <span class="e-select-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21.5616 10.9599L20.7016 9.96989H21.0716C21.7116 9.96989 22.2316 9.44989 22.2316 8.80989V8.42989C22.2316 7.78989 21.7116 7.26989 21.0716 7.26989H20.7416C20.4616 7.26989 20.2416 7.48989 20.2416 7.76989C20.2416 8.04989 20.4616 8.26989 20.7416 8.26989H21.0716C21.1616 8.26989 21.2316 8.33989 21.2316 8.42989V8.80989C21.2316 8.89989 21.1616 8.96989 21.0716 8.96989H20.3716L19.6216 6.51989C19.1316 4.93989 17.7016 3.88989 16.0516 3.88989H7.95156C6.30156 3.88989 4.87156 4.94989 4.38156 6.51989L3.63156 8.96989H2.93156C2.84156 8.96989 2.77156 8.89989 2.77156 8.80989V8.42989C2.77156 8.33989 2.84156 8.26989 2.93156 8.26989H3.26156C3.54156 8.26989 3.76156 8.04989 3.76156 7.76989C3.76156 7.48989 3.54156 7.26989 3.26156 7.26989H2.93156C2.29156 7.26989 1.77156 7.78989 1.77156 8.42989V8.80989C1.77156 9.44989 2.29156 9.96989 2.93156 9.96989H3.30156L2.44156 10.9599C1.90156 11.5799 1.60156 12.3799 1.60156 13.2099V16.0799C1.60156 16.6899 1.94156 17.2199 2.45156 17.4999V18.6299C2.45156 19.4599 3.12156 20.1299 3.95156 20.1299H5.67156C6.50156 20.1299 7.17156 19.4599 7.17156 18.6299V17.7099H16.8316V18.6299C16.8316 19.4599 17.5016 20.1299 18.3316 20.1299H20.0516C20.8816 20.1299 21.5516 19.4599 21.5516 18.6299V17.4999C22.0516 17.2199 22.4016 16.6999 22.4016 16.0799V13.2099C22.4016 12.3799 22.1016 11.5799 21.5616 10.9599ZM3.20156 11.6199L4.16156 10.5199C4.21156 10.4699 4.24156 10.4099 4.26156 10.3399L4.46156 9.68989C4.46156 9.68989 4.48156 9.62989 4.49156 9.59989L5.35156 6.81989C5.71156 5.66989 6.76156 4.88989 7.96156 4.88989H16.0516C17.2616 4.88989 18.3116 5.65989 18.6616 6.81989L19.5216 9.59989C19.5216 9.59989 19.5316 9.65989 19.5516 9.68989L19.7516 10.3399C19.7716 10.4099 19.8016 10.4699 19.8516 10.5199L20.8116 11.6199C21.1916 12.0599 21.4116 12.6299 21.4116 13.2199V14.6699H19.1316C18.8016 14.6699 18.5216 14.3999 18.5216 14.0599V13.4199C18.5216 13.0899 18.7916 12.8099 19.1316 12.8099H20.3516C20.6316 12.8099 20.8516 12.5899 20.8516 12.3099C20.8516 12.0299 20.6316 11.8099 20.3516 11.8099H19.1316C18.2416 11.8099 17.5216 12.5299 17.5216 13.4199V14.0599C17.5216 14.9499 18.2416 15.6699 19.1316 15.6699H21.4116V16.0899C21.4116 16.4299 21.1316 16.7099 20.7916 16.7099H15.6516V14.9999C15.6516 14.7199 15.4316 14.4999 15.1516 14.4999H8.87156C8.59156 14.4999 8.37156 14.7199 8.37156 14.9999V16.7099H3.23156C2.89156 16.7099 2.61156 16.4299 2.61156 16.0899V15.6699H4.89156C5.78156 15.6699 6.50156 14.9499 6.50156 14.0599V13.4199C6.50156 12.5299 5.78156 11.8099 4.89156 11.8099H3.67156C3.39156 11.8099 3.17156 12.0299 3.17156 12.3099C3.17156 12.5899 3.39156 12.8099 3.67156 12.8099H4.89156C5.22156 12.8099 5.50156 13.0799 5.50156 13.4199V14.0599C5.50156 14.3899 5.23156 14.6699 4.89156 14.6699H2.61156V13.2199C2.61156 12.6299 2.82156 12.0699 3.21156 11.6199H3.20156ZM6.17156 18.6199C6.17156 18.8999 5.95156 19.1199 5.67156 19.1199H3.95156C3.67156 19.1199 3.45156 18.8999 3.45156 18.6199V17.6999H6.17156V18.6199ZM9.36156 16.6999V15.4899H14.6416V16.6999H9.36156ZM20.5516 18.6199C20.5516 18.8999 20.3316 19.1199 20.0516 19.1199H18.3316C18.0516 19.1199 17.8316 18.8999 17.8316 18.6199V17.6999H20.5516V18.6199Z" fill="#969FB7"/>
                                                <path d="M5.98828 9.95996H18.0083C18.2883 9.95996 18.5083 9.73996 18.5083 9.45996C18.5083 9.17996 18.2883 8.95996 18.0083 8.95996H5.98828C5.70828 8.95996 5.48828 9.17996 5.48828 9.45996C5.48828 9.73996 5.70828 9.95996 5.98828 9.95996Z" fill="#969FB7"/>
                                                <path d="M16.0902 11.8H7.91016C7.63016 11.8 7.41016 12.02 7.41016 12.3C7.41016 12.58 7.63016 12.8 7.91016 12.8H16.0902C16.3702 12.8 16.5902 12.58 16.5902 12.3C16.5902 12.02 16.3702 11.8 16.0902 11.8Z" fill="#969FB7"/>
                                            </svg>
                                        </span>
                                        <select name="" id="" class="form-select e-select rounded-3" e-search="true">
                                            <option value="">Vehicle Type</option>   
                                            <option value="2">Vehicle 2</option>   
                                            <option value="3">Vehicle 3</option>   
                                            <option value="4">Vehicle 4</option>   
                                            <option value="5">Vehicle 5</option>   
                                            <option value="6">Vehicle 6</option>   
                                            <option value="7">Vehicle 7</option>   
                                            <option value="8">Vehicle 8</option>   
                                            <option value="9">Vehicle 9</option>   
                                        </select>
                                    </div>
                                    <!-- Drivers AGE -->
                                    <div class="e-select-group">
                                        <span class="e-select-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_10061_17562)">
                                                <path d="M21.5219 4.23449C22.9144 2.59551 21.7019 -0.0187419 19.531 0.000101792C17.3604 -0.0187888 16.1476 2.59593 17.5403 4.23449C16.0727 4.96789 15.0624 6.48528 15.0624 8.23446V9.50289C14.7451 9.20378 14.3846 8.95005 13.9907 8.75322C15.3832 7.11424 14.1707 4.49999 11.9999 4.51883C9.82923 4.49994 8.61639 7.11467 10.0091 8.75322C8.54153 9.48663 7.53119 11.004 7.53119 12.7532V14.0216C7.21389 13.7225 6.85338 13.4688 6.45949 13.272C7.852 11.633 6.63954 9.01872 4.46867 9.03757C2.29804 9.01867 1.0852 11.6334 2.47794 13.272C1.01034 14.0054 0 15.5227 0 17.2719V18.025C0 18.9976 0.631591 19.8254 1.50623 20.1197V23.2969C1.50623 23.6852 1.82104 24 2.20935 24H6.72808C7.11639 24 7.43121 23.6852 7.43121 23.2969V20.1197C8.3792 19.8103 9.01145 18.8558 8.93743 17.8237C8.97043 17.8366 9.00367 17.849 9.03742 17.8604V23.2969C9.03742 23.6852 9.35223 24 9.74054 24H14.2593C14.6476 24 14.9624 23.6852 14.9624 23.2969V17.8603C15.9101 17.551 16.5424 16.597 16.4686 15.5652C16.5016 15.5781 16.5349 15.5906 16.5686 15.6019V23.2969C16.5686 23.6852 16.8834 24 17.2717 24H21.7905C22.1788 24 22.4936 23.6852 22.4936 23.2969V15.6019C23.3682 15.3076 23.9998 14.4798 23.9998 13.5072V8.23446C23.9999 6.48528 22.9895 4.96789 21.5219 4.23449ZM4.46867 10.4438C5.11915 10.4438 5.64837 10.973 5.64837 11.6235C5.58907 13.1864 3.34808 13.1859 3.28902 11.6235C3.28902 10.973 3.81819 10.4438 4.46867 10.4438ZM7.53119 18.025C7.53119 18.4678 7.17091 18.8281 6.72808 18.8281C6.33977 18.8281 6.02496 19.1429 6.02496 19.5312V22.5937H2.91247V19.5312C2.91247 19.1429 2.59766 18.8281 2.20935 18.8281C1.76652 18.8281 1.40624 18.4678 1.40624 18.025V17.2719C1.40624 15.5833 2.7801 14.2095 4.46872 14.2095C6.15733 14.2095 7.53119 15.5833 7.53119 17.2719V18.025ZM11.9999 5.92508C12.6504 5.92508 13.1796 6.45429 13.1796 7.10478C13.1203 8.66763 10.8793 8.66721 10.8203 7.10478C10.8202 6.45429 11.3494 5.92508 11.9999 5.92508ZM15.0624 15.7656C15.0624 16.2085 14.7021 16.5688 14.2593 16.5688C13.871 16.5688 13.5561 16.8836 13.5561 17.2719V22.5937H10.4437V17.2719C10.4437 16.8836 10.1288 16.5688 9.74054 16.5688C9.29771 16.5688 8.93743 16.2085 8.93743 15.7656V12.7531C9.09067 8.69716 14.9088 8.6959 15.0624 12.7532C15.0624 12.7532 15.0624 15.7656 15.0624 15.7656ZM19.5311 1.40635C20.1816 1.40635 20.7108 1.93556 20.7108 2.58604C20.6515 4.1489 18.4105 4.14848 18.3514 2.58604C18.3514 1.93556 18.8806 1.40635 19.5311 1.40635ZM22.5936 13.5072C22.5936 13.95 22.2333 14.3103 21.7905 14.3103C21.4022 14.3103 21.0874 14.6251 21.0874 15.0134V22.5938H17.9749V15.0134C17.9749 14.6251 17.6601 14.3103 17.2718 14.3103C16.8289 14.3103 16.4687 13.95 16.4687 13.5072V8.23446C16.6215 4.17927 22.4397 4.17651 22.5937 8.23451C22.5936 8.23446 22.5936 13.5072 22.5936 13.5072Z" fill="#969FB7"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_10061_17562">
                                                <rect width="24" height="24" fill="white"/>
                                                </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                        <select name="" id="" class="form-select e-select rounded-3">
                                            <option value="">Drivers Age</option>   
                                            <option value="2">20</option>   
                                            <option value="3">30</option>   
                                            <option value="4">40</option>   
                                            <option value="5">50</option>   
                                            <option value="6">60</option>   
                                        </select>
                                    </div>
                                    <!-- Submit Button -->
                                    <button type="submit" class="btn w-100 gap-3 btn--gradient-primary" style="--btn-before-size: 550px;">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.58464 17.5001C13.9569 17.5001 17.5013 13.9557 17.5013 9.58341C17.5013 5.21116 13.9569 1.66675 9.58464 1.66675C5.21238 1.66675 1.66797 5.21116 1.66797 9.58341C1.66797 13.9557 5.21238 17.5001 9.58464 17.5001Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M18.3346 18.3334L16.668 16.6667" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span class="btn__text">Search Now</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section: Hero Banner -->


    <!-- ==================== Section: : OUR Fleet Slider ==================== -->
    <script src="{{asset('assets-v2/js/components/oy-swiper.js')}}" defer></script>
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
                                <img src="{{asset('assets-v2/img/brands/banner-aston-martin.png')}}" alt="">
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
                                        <img src="{{asset('assets-v2/img/brands/logo-aston-martin.png')}}" alt="">
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
                                <img src="{{asset('assets-v2/img/brands/banner-audi.png')}}" alt="">
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
                                        <img src="{{asset('assets-v2/img/brands/logo-audi.png')}}" alt="">
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
                                <img src="{{asset('assets-v2/img/brands/banner-bmw.png')}}" alt="">
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
                                        <img src="{{asset('assets-v2/img/brands/logo-bmw.png')}}" alt="">
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
                                <img src="{{asset('assets-v2/img/brands/banner-bentley.png')}}" alt="">
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
                                        <img src="{{asset('assets-v2/img/brands/logo-bentley.png')}}" alt="">
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
                                <img src="{{asset('assets-v2/img/brands/banner-aston-martin.png')}}" alt="">
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
                                        <img src="{{asset('assets-v2/img/brands/logo-aston-martin.png')}}" alt="">
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
                                <img src="{{asset('assets-v2/img/brands/banner-audi.png')}}" alt="">
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
                                        <img src="{{asset('assets-v2/img/brands/logo-audi.png')}}" alt="">
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
                                <img src="{{asset('assets-v2/img/brands/banner-bmw.png')}}" alt="">
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
                                        <img src="{{asset('assets-v2/img/brands/logo-bmw.png')}}" alt="">
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
                                <img src="{{asset('assets-v2/img/brands/banner-bentley.png')}}" alt="">
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
                                        <img src="{{asset('assets-v2/img/brands/logo-bentley.png')}}" alt="">
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
    <!-- /Section: Header TOP BAR (Mobile Only) -->
     </section>
    <!-- /Section: : OUR Fleet Slider -->

    

    <!-- ==================== Section: OUR Luxury Cars ==================== -->
     <section class="overflow-hidden">
        <div class="container oy-section-title">
            <div class="row g-4 align-items-center">
                <div class="col-12 col-md">
                    <h3 class="text-h2 mb-0">Our Cars for Luxury Cars</h3>
                </div>
                <div class="col-12 col-md-auto">
                    <div class="d-flex align-items-center gap-4 " id="filter-container">
                        <!-- Vehicle Brand -->
                        <div class="e-select-group">
                            <span class="e-select-icon">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.8468 16.3215L17.7017 13.1928L18.3224 12.7442C18.9299 12.3053 19.1822 11.533 18.9502 10.8226L18.5263 9.52516C18.4815 9.38803 18.4815 9.24304 18.5263 9.10596L18.9502 7.80848C19.1822 7.0981 18.9299 6.32581 18.3224 5.88688L17.2128 5.08493C17.0955 5.00019 17.0098 4.88293 16.9651 4.74579L16.5412 3.44832C16.3091 2.73798 15.6487 2.26067 14.8978 2.26067H13.5261C13.3812 2.26067 13.2426 2.21587 13.1253 2.13113L12.0157 1.32923C11.4082 0.890256 10.5918 0.890256 9.98429 1.32923L8.87461 2.13118C8.75735 2.21593 8.61874 2.26072 8.47381 2.26072H7.10219C6.35126 2.26072 5.69082 2.73798 5.45875 3.44837L5.03488 4.74589C4.99011 4.88293 4.90444 5.00019 4.78717 5.08499L3.67754 5.88688C3.07004 6.32591 2.81777 7.09815 3.04979 7.80848L3.47366 9.10596C3.51844 9.24304 3.51844 9.38803 3.47366 9.52511L3.04979 10.8226C2.81777 11.533 3.07004 12.3053 3.67754 12.7442L4.29823 13.1928L1.15315 16.3214C1.02835 16.4456 0.974953 16.624 1.01109 16.7958C1.04724 16.9677 1.16811 17.1098 1.3325 17.1738L3.85852 18.1568L4.84685 20.6693C4.91113 20.8328 5.05402 20.953 5.22684 20.989C5.26246 20.9964 5.29834 21 5.33395 21C5.4712 21 5.60468 20.9462 5.7038 20.8476L9.5701 17.0025L9.98429 17.3018C10.2881 17.5213 10.644 17.631 11 17.631C11.3559 17.631 11.7119 17.5213 12.0157 17.3018L12.4299 17.0024L16.2963 20.8476C16.3954 20.9462 16.5288 21 16.6661 21C16.7017 21 16.7375 20.9964 16.7732 20.989C16.946 20.953 17.0888 20.8328 17.1532 20.6693L18.1415 18.1568L20.6675 17.1738C20.8319 17.1098 20.9527 16.9677 20.9889 16.7958C21.0251 16.624 20.9716 16.4456 20.8468 16.3215ZM5.52962 19.5495L4.7493 17.5658C4.69616 17.4306 4.58868 17.3237 4.45279 17.2708L2.45839 16.4947L5.04634 13.9202L5.4588 15.1828C5.69088 15.8931 6.35126 16.3704 7.10224 16.3704H8.47386C8.54855 16.3704 8.62151 16.3825 8.69076 16.4056L5.52962 19.5495ZM10.5991 16.4601L9.48949 15.6581C9.1923 15.4434 8.84114 15.3299 8.47386 15.3299H7.10224C6.80589 15.3299 6.54526 15.1416 6.45373 14.8612L6.02986 13.5638C5.92143 13.2318 5.71755 12.9466 5.44045 12.7345C5.43093 12.7263 5.42109 12.7188 5.41116 12.7115C5.40807 12.7092 5.40524 12.7067 5.40211 12.7044L4.29248 11.9025C4.05277 11.7293 3.95319 11.4245 4.04477 11.1442L4.46864 9.84672C4.58214 9.49926 4.58214 9.13197 4.46864 8.7845L4.04477 7.48708C3.95319 7.20672 4.05277 6.90197 4.29248 6.72868L5.40211 5.92678C5.69935 5.71198 5.91641 5.41482 6.02986 5.06745L6.45373 3.76998C6.54526 3.48962 6.80594 3.3013 7.10224 3.3013H8.47386C8.84119 3.3013 9.19241 3.18778 9.48955 2.97303L10.5991 2.17119C10.8389 1.99795 11.1612 1.99789 11.4008 2.17119L12.5105 2.97313C12.8076 3.18789 13.1588 3.3014 13.5261 3.3014H14.8978C15.1941 3.3014 15.4547 3.48978 15.5463 3.77008L15.9701 5.06751C16.0836 5.41497 16.3007 5.71213 16.5979 5.92689L17.7076 6.72883C17.9473 6.90207 18.0468 7.20683 17.9552 7.48718L17.5314 8.78471C17.4179 9.13212 17.4179 9.49941 17.5314 9.84688L17.9552 11.1444C18.0468 11.4247 17.9473 11.7294 17.7075 11.9027L16.598 12.7045C16.5941 12.7074 16.5906 12.7105 16.5867 12.7133C16.5779 12.7199 16.5691 12.7266 16.5606 12.7338C16.283 12.946 16.0787 13.2315 15.9701 13.5639L15.5463 14.8614C15.4547 15.1418 15.1941 15.3301 14.8978 15.3301H13.5261C13.1589 15.3301 12.8077 15.4436 12.5105 15.6584L11.4009 16.4602C11.161 16.6334 10.8388 16.6332 10.5991 16.4601ZM17.5472 17.2708C17.4113 17.3237 17.3039 17.4306 17.2507 17.5658L16.4704 19.5495L13.3092 16.4057C13.3784 16.3825 13.4514 16.3705 13.5261 16.3705H14.8978C15.6486 16.3705 16.3091 15.8932 16.5411 15.1829L16.9536 13.9202L19.5417 16.4947L17.5472 17.2708Z" fill="#545A64"/>
                                    <path d="M12.773 12.8019C12.862 12.8019 12.9507 12.7742 13.0256 12.7199C13.1579 12.6237 13.2242 12.4608 13.1966 12.2996L12.8552 10.3094L14.3012 8.89997C14.4183 8.7858 14.4604 8.61505 14.4099 8.4595C14.3593 8.30395 14.2248 8.1906 14.063 8.16705L12.0647 7.87667L11.1711 6.06592C11.0987 5.91927 10.9493 5.82642 10.7857 5.82642C10.6222 5.82642 10.4728 5.91927 10.4004 6.06592L9.50683 7.87667L7.50857 8.16705C7.3467 8.19056 7.21225 8.30395 7.16168 8.4595C7.11111 8.61505 7.1533 8.7858 7.27043 8.89997L8.71637 10.3094L8.37503 12.2996C8.34736 12.4608 8.41362 12.6237 8.54596 12.7199C8.67826 12.816 8.8537 12.8286 8.99846 12.7526L10.7857 11.813L12.5731 12.7525C12.6359 12.7856 12.7046 12.8019 12.773 12.8019ZM10.9857 10.9472C10.9231 10.9143 10.8544 10.8978 10.7857 10.8978C10.7171 10.8978 10.6484 10.9143 10.5858 10.9472L9.3692 11.5868L9.60157 10.232C9.62551 10.0927 9.57927 9.95043 9.478 9.85169L8.49375 8.89228L9.85397 8.69458C9.99392 8.67426 10.1149 8.58634 10.1775 8.45954L10.7857 7.22703L11.394 8.45958C11.4566 8.58639 11.5776 8.6743 11.7175 8.69462L13.0778 8.89232L12.0935 9.85173C11.9923 9.95043 11.946 10.0927 11.9699 10.2321L12.2023 11.5868L10.9857 10.9472Z" fill="#545A64"/>
                                </svg>
                            </span>
                            <select name="" id="" class="form-select e-select" e-search="true">
                                <option value="">Vehicle Brand</option>   
                                <option value="2">Vehicle 2</option>   
                                <option value="3">Vehicle 3</option>   
                                <option value="4">Vehicle 4</option>   
                                <option value="5">Vehicle 5</option>   
                                <option value="6">Vehicle 6</option>   
                                <option value="7">Vehicle 7</option>   
                                <option value="8">Vehicle 8</option>   
                                <option value="9">Vehicle 9</option>   
                            </select>
                        </div>
                        <!-- MIN AGE -->
                        <div class="e-select-group">
                            <span class="e-select-icon">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5625 1.375C7.94221 1.375 8.25 1.68281 8.25 2.0625V2.75H11.6875C12.0672 2.75 12.375 3.05781 12.375 3.4375C12.375 3.81719 12.0672 4.125 11.6875 4.125H8.25V4.8125C8.25 5.19219 7.94221 5.5 7.5625 5.5C7.18279 5.5 6.875 5.19219 6.875 4.8125V4.125H5.5C3.98122 4.125 2.75 5.35622 2.75 6.875V16.5C2.75 18.0188 3.98122 19.25 5.5 19.25H9.625C10.0047 19.25 10.3125 19.5578 10.3125 19.9375C10.3125 20.3172 10.0047 20.625 9.625 20.625H5.5C3.22182 20.625 1.375 18.7782 1.375 16.5V6.875C1.375 4.59682 3.22182 2.75 5.5 2.75H6.875V2.0625C6.875 1.68281 7.18279 1.375 7.5625 1.375ZM14.4375 1.375C14.8172 1.375 15.125 1.68281 15.125 2.0625V2.75H16.5C18.7782 2.75 20.625 4.59682 20.625 6.875V9.625C20.625 10.0047 20.3172 10.3125 19.9375 10.3125C19.5578 10.3125 19.25 10.0047 19.25 9.625V6.875C19.25 5.35622 18.0188 4.125 16.5 4.125H15.125V4.8125C15.125 5.19219 14.8172 5.5 14.4375 5.5C14.0578 5.5 13.75 5.19219 13.75 4.8125V2.0625C13.75 1.68281 14.0578 1.375 14.4375 1.375ZM5.5 7.5625C5.12031 7.5625 4.8125 7.87029 4.8125 8.25C4.8125 8.62971 5.12031 8.9375 5.5 8.9375H16.5C16.8797 8.9375 17.1875 8.62971 17.1875 8.25C17.1875 7.87029 16.8797 7.5625 16.5 7.5625H5.5ZM17.6736 15.6111L15.9549 17.3299C15.6864 17.5984 15.2511 17.5984 14.9826 17.3299L13.9514 16.2986C13.6829 16.0302 13.6829 15.5948 13.9514 15.3264C14.2198 15.0579 14.6552 15.0579 14.9236 15.3264L15.4688 15.8715L16.7014 14.6389C16.9698 14.3704 17.4052 14.3704 17.6736 14.6389C17.9421 14.9073 17.9421 15.3427 17.6736 15.6111ZM6.875 12.0312C6.875 12.6008 6.4133 13.0625 5.84375 13.0625C5.2742 13.0625 4.8125 12.6008 4.8125 12.0312C4.8125 11.4617 5.2742 11 5.84375 11C6.4133 11 6.875 11.4617 6.875 12.0312ZM5.84375 17.1875C6.4133 17.1875 6.875 16.7258 6.875 16.1562C6.875 15.5867 6.4133 15.125 5.84375 15.125C5.2742 15.125 4.8125 15.5867 4.8125 16.1562C4.8125 16.7258 5.2742 17.1875 5.84375 17.1875ZM12.375 15.8125C12.375 13.914 13.914 12.375 15.8125 12.375C17.711 12.375 19.25 13.914 19.25 15.8125C19.25 17.711 17.711 19.25 15.8125 19.25C13.914 19.25 12.375 17.711 12.375 15.8125ZM15.8125 11C13.1546 11 11 13.1546 11 15.8125C11 18.4704 13.1546 20.625 15.8125 20.625C18.4704 20.625 20.625 18.4704 20.625 15.8125C20.625 13.1546 18.4704 11 15.8125 11Z" fill="#545A64"/>
                                </svg>
                            </span>
                            <select name="" id="" class="form-select e-select">
                                <option value="">Min Age</option>   
                                <option value="2">20</option>   
                                <option value="3">30</option>   
                                <option value="4">40</option>   
                                <option value="5">50</option>   
                                <option value="6">60</option>   
                            </select>
                        </div>
                        <!-- MIN AGE -->
                        <div class="e-select-group">
                            <span class="e-select-icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 19C7.59602 19 5.33589 18.0639 3.63602 16.364C1.93614 14.6641 1 12.404 1 10C1 7.59602 1.93618 5.33593 3.63602 3.63602C5.33586 1.93611 7.59602 1 10 1C12.404 1 14.6641 1.93614 16.364 3.63602C18.0639 5.33589 19 7.59602 19 10C19 12.404 18.0638 14.6641 16.364 16.364C14.6641 18.0639 12.404 19 10 19ZM10 2.125C5.65771 2.125 2.125 5.65771 2.125 10C2.125 14.3423 5.65771 17.875 10 17.875C14.3423 17.875 17.875 14.3423 17.875 10C17.875 5.65771 14.3423 2.125 10 2.125Z" fill="#545A64"/>
                                    <path d="M10 9.5C9.081 9.5 8.33333 8.93925 8.33333 8.25C8.33333 7.56075 9.081 7 10 7C10.919 7 11.6667 7.56075 11.6667 8.25C11.6667 8.52612 11.9651 8.75 12.3333 8.75C12.7015 8.75 13 8.52612 13 8.25C13 7.18122 12.0009 6.28475 10.6667 6.05669V5.5C10.6667 5.22387 10.3682 5 10 5C9.63179 5 9.33333 5.22387 9.33333 5.5V6.05669C7.99908 6.28475 7 7.18122 7 8.25C7 9.49066 8.34579 10.5 10 10.5C10.919 10.5 11.6667 11.0608 11.6667 11.75C11.6667 12.4392 10.919 13 10 13C9.081 13 8.33333 12.4392 8.33333 11.75C8.33333 11.4739 8.03488 11.25 7.66667 11.25C7.29846 11.25 7 11.4739 7 11.75C7 12.8188 7.99908 13.7153 9.33333 13.9433V14.5C9.33333 14.7761 9.63179 15 10 15C10.3682 15 10.6667 14.7761 10.6667 14.5V13.9433C12.0009 13.7153 13 12.8188 13 11.75C13 10.5093 11.6542 9.5 10 9.5Z" fill="#545A64"/>
                                </svg>
                            </span>
                            <select name="" id="" class="form-select e-select">
                                <option value="">Price</option>   
                                <option value="2">10k-20k</option>   
                                <option value="3">20k-30k</option>   
                                <option value="4">30k-50</option>   
                                <option value="5">50k-100k</option>   
                                <option value="6">100k-300k</option>   
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container" data-equalize="min-height" data-equalize-target=".card--product__title" data-equalize-var="--equal-heading-min-height">
            <div class="row g-4 g-lg-5">
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card--product h-100">
                        <div class="card--product__thumb">
                            <img src="{{asset('assets-v2/img/products/product-1.png')}}" alt="">
                        </div>
                        <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">AUDI</span>
                            <h5 class="card--product__title text-b1-semibold mb-4">Audi R8 V10 Plus Spyder</h5>

                            <!-- Action -->
                             <div class="card--product__action d-flex justify-content-between align-items-end w-100 mt-auto">
                                <div>
                                    <p class="text-secondary text-b4-regular text-opacity-50 mb-0">From</p>
                                    <div class="text-b1-semibold text-primary">£1,000/day</div>
                                </div>
                                <div>
                                    <a class="btn btn--outline-primary" href="#">
                                        <span class="btn__text">View Car</span>
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
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card--product h-100">
                        <div class="card--product__thumb">
                            <img src="{{asset('assets-v2/img/products/product-2.png')}}" alt="">
                        </div>
                        <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">Lamborghini </span>
                            <h5 class="card--product__title text-b1-semibold mb-4">Lamborghini Huracan Evo Spyder</h5>

                            <!-- Action -->
                             <div class="card--product__action d-flex justify-content-between align-items-end w-100 mt-auto">
                                <div>
                                    <p class="text-secondary text-b4-regular text-opacity-50 mb-0">From</p>
                                    <div class="text-b1-semibold text-primary">£1,800/day</div>
                                </div>
                                <div>
                                    <a class="btn btn--outline-primary" href="#">
                                        <span class="btn__text">View Car</span>
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
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card--product h-100">
                        <div class="card--product__thumb">
                            <img src="{{asset('assets-v2/img/products/product-3.png')}}" alt="">
                        </div>
                        <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">Lamborghini </span>
                            <h5 class="card--product__title text-b1-semibold mb-4">Lamborghini Urus</h5>

                            <!-- Action -->
                             <div class="card--product__action d-flex justify-content-between align-items-end w-100 mt-auto">
                                <div>
                                    <p class="text-secondary text-b4-regular text-opacity-50 mb-0">From</p>
                                    <div class="text-b1-semibold text-primary">£1,000/day</div>
                                </div>
                                <div>
                                    <a class="btn btn--outline-primary" href="#">
                                        <span class="btn__text">View Car</span>
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
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card--product h-100">
                        <div class="card--product__thumb">
                            <img src="{{asset('assets-v2/img/products/product-1.png')}}" alt="">
                        </div>
                        <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">Ferrari</span>
                            <h5 class="card--product__title text-b1-semibold mb-4">Ferrari F8 Tributo</h5>

                            <!-- Action -->
                             <div class="card--product__action d-flex justify-content-between align-items-end w-100 mt-auto">
                                <div>
                                    <p class="text-secondary text-b4-regular text-opacity-50 mb-0">From</p>
                                    <div class="text-b1-semibold text-primary">£1,000/day</div>
                                </div>
                                <div>
                                    <a class="btn btn--outline-primary" href="#">
                                        <span class="btn__text">View Car</span>
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
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card--product h-100">
                        <div class="card--product__thumb">
                            <img src="{{asset('assets-v2/img/products/product-2.png')}}" alt="">
                        </div>
                        <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">Lamborghini</span>
                            <h5 class="card--product__title text-b1-semibold mb-4">Lamborghini Huracan Performante Spyder</h5>

                            <!-- Action -->
                             <div class="card--product__action d-flex justify-content-between align-items-end w-100 mt-auto">
                                <div>
                                    <p class="text-secondary text-b4-regular text-opacity-50 mb-0">From</p>
                                    <div class="text-b1-semibold text-primary">£1,000/day</div>
                                </div>
                                <div>
                                    <a class="btn btn--outline-primary" href="#">
                                        <span class="btn__text">View Car</span>
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
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card--product h-100">
                        <div class="card--product__thumb">
                            <img src="{{asset('assets-v2/img/products/product-3.png')}}" alt="">
                        </div>
                        <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">Lamborghini</span>
                            <h5 class="card--product__title text-b1-semibold mb-4">Lamborghini Huracan EVO</h5>

                            <!-- Action -->
                             <div class="card--product__action d-flex justify-content-between align-items-end w-100 mt-auto">
                                <div>
                                    <p class="text-secondary text-b4-regular text-opacity-50 mb-0">From</p>
                                    <div class="text-b1-semibold text-primary">£1,000/day</div>
                                </div>
                                <div>
                                    <a class="btn btn--outline-primary" href="#">
                                        <span class="btn__text">View Car</span>
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
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card--product h-100">
                        <div class="card--product__thumb">
                            <img src="{{asset('assets-v2/img/products/product-1.png')}}" alt="">
                        </div>
                        <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">Lamborghini </span>
                            <h5 class="card--product__title text-b1-semibold mb-4">Lamborghini Huracan Performante Spyder</h5>

                            <!-- Action -->
                             <div class="card--product__action d-flex justify-content-between align-items-end w-100 mt-auto">
                                <div>
                                    <p class="text-secondary text-b4-regular text-opacity-50 mb-0">From</p>
                                    <div class="text-b1-semibold text-primary">£1,000/day</div>
                                </div>
                                <div>
                                    <a class="btn btn--outline-primary" href="#">
                                        <span class="btn__text">View Car</span>
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
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card--product h-100">
                        <div class="card--product__thumb">
                            <img src="../assets/img/products/product-1.png" alt="">
                        </div>
                        <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">Lamborghini</span>
                            <h5 class="card--product__title text-b1-semibold mb-4">Lamborghini Huracan Performante Spyder</h5>

                            <!-- Action -->
                             <div class="card--product__action d-flex justify-content-between align-items-end w-100 mt-auto">
                                <div>
                                    <p class="text-secondary text-b4-regular text-opacity-50 mb-0">From</p>
                                    <div class="text-b1-semibold text-primary">£1,000/day</div>
                                </div>
                                <div>
                                    <a class="btn btn--outline-primary" href="#">
                                        <span class="btn__text">View Car</span>
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
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card--product h-100">
                        <div class="card--product__thumb">
                            <img src="{{asset('assets-v2/img/products/product-1.png')}}" alt="">
                        </div>
                        <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">AUDI</span>
                            <h5 class="card--product__title text-b1-semibold mb-4">Audi R8 V10 Plus Spyder</h5>

                            <!-- Action -->
                             <div class="card--product__action d-flex justify-content-between align-items-end w-100 mt-auto">
                                <div>
                                    <p class="text-secondary text-b4-regular text-opacity-50 mb-0">From</p>
                                    <div class="text-b1-semibold text-primary">£1,000/day</div>
                                </div>
                                <div>
                                    <a class="btn btn--outline-primary" href="#">
                                        <span class="btn__text">View Car</span>
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
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card--product h-100">
                        <div class="card--product__thumb">
                            <img src="{{asset('assets-v2/img/products/product-1.png')}}" alt="">
                        </div>
                        <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">AUDI</span>
                            <h5 class="card--product__title text-b1-semibold mb-4">Audi R8 V10 Plus Spyder</h5>

                            <!-- Action -->
                             <div class="card--product__action d-flex justify-content-between align-items-end w-100 mt-auto">
                                <div>
                                    <p class="text-secondary text-b4-regular text-opacity-50 mb-0">From</p>
                                    <div class="text-b1-semibold text-primary">£1,000/day</div>
                                </div>
                                <div>
                                    <a class="btn btn--outline-primary" href="#">
                                        <span class="btn__text">View Car</span>
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
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card--product h-100">
                        <div class="card--product__thumb">
                            <img src="{{asset('assets-v2/img/products/product-1.png')}}" alt="">
                        </div>
                        <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">AUDI</span>
                            <h5 class="card--product__title text-b1-semibold mb-4">Audi R8 V10 Plus Spyder</h5>

                            <!-- Action -->
                             <div class="card--product__action d-flex justify-content-between align-items-end w-100 mt-auto">
                                <div>
                                    <p class="text-secondary text-b4-regular text-opacity-50 mb-0">From</p>
                                    <div class="text-b1-semibold text-primary">£1,000/day</div>
                                </div>
                                <div>
                                    <a class="btn btn--outline-primary" href="#">
                                        <span class="btn__text">View Car</span>
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
                <!-- Column -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card--product h-100">
                        <div class="card--product__thumb">
                            <img src="{{asset('assets-v2/img/products/product-1.png')}}" alt="">
                        </div>
                        <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">AUDI</span>
                            <h5 class="card--product__title text-b1-semibold mb-4">Audi R8 V10 Plus Spyder</h5>

                            <!-- Action -->
                             <div class="card--product__action d-flex justify-content-between align-items-end w-100 mt-auto">
                                <div>
                                    <p class="text-secondary text-b4-regular text-opacity-50 mb-0">From</p>
                                    <div class="text-b1-semibold text-primary">£1,000/day</div>
                                </div>
                                <div>
                                    <a class="btn btn--outline-primary" href="#">
                                        <span class="btn__text">View Car</span>
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
    <!-- /Section: OUR Luxury Cars -->
    
    <!-- ==================== Section: : Marquee Slider ==================== -->
    <script src="{{asset('assets-v2/js/components/marquee-slider.js')}}"></script>    
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
                        <img class="item-author__thumb" src="{{asset('assets-v2/img/home/r_client1.png')}}" alt="">
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
                        <img class="review_ratting__logo" src="{{asset('assets-v2/img/home/google.png')}}" alt="">
                    </div>
                </div>

                <div class="oy-testimonial-item marquee-item">
                    <div class="item-author">
                        <img class="item-author__thumb" src="{{asset('assets-v2/img/home/r_client2.png')}}" alt="">
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
                        <img class="review_ratting__logo" src="{{asset('assets-v2/img/home/google.png')}}" alt="">
                    </div>
                </div>
                <div class="oy-testimonial-item marquee-item">
                    <div class="item-author">
                        <img class="item-author__thumb" src="{{asset('assets-v2/img/home/r_client3.png')}}" alt="">
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
                        <img class="review_ratting__logo" src="{{asset('assets-v2/img/home/google.png')}}" alt="">
                    </div>
                </div>
                <div class="oy-testimonial-item marquee-item">
                    <div class="item-author">
                        <img class="item-author__thumb" src="{{asset('assets-v2/img/home/r_client4.png')}}" alt="">
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
                        <img class="review_ratting__logo" src="{{asset('assets-v2/img/home/google.png')}}" alt="">
                    </div>
                </div>
                <div class="oy-testimonial-item marquee-item">
                    <div class="item-author">
                        <img class="item-author__thumb" src="{{asset('assets-v2/img/home/r_client7.png')}}" alt="">
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
                        <img class="review_ratting__logo" src="{{asset('assets-v2/img/home/google.png')}}" alt="">
                    </div>
                </div>
                <div class="oy-testimonial-item marquee-item">
                    <div class="item-author">
                        <img class="item-author__thumb" src="{{asset('assets-v2/img/home/r_client6.png')}}" alt="">
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
                        <img class="review_ratting__logo" src="{{asset('assets-v2/img/home/google.png')}}" alt="">
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
                            <img class="item-author__thumb" src="{{asset('assets-v2/img/home/r_client1.png')}}" alt="">
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
                        <img class="review_ratting__logo" src="{{asset('assets-v2/img/home/google.png')}}" alt="">
                        </div>
                    </div>
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{asset('assets-v2/img/home/r_client2.png')}}" alt="">
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
                        <img class="review_ratting__logo" src="{{asset('assets-v2/img/home/google.png')}}" alt="">
                        </div>
                    </div>
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{asset('assets-v2/img/home/r_client3.png')}}" alt="">
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
                        <img class="review_ratting__logo" src="{{asset('assets-v2/img/home/google.png')}}" alt="">
                        </div>
                    </div>
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{asset('assets-v2/img/home/r_client4.png')}}" alt="">
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
                        <img class="review_ratting__logo" src="{{asset('assets-v2/img/home/google.png')}}" alt="">
                        </div>
                    </div>
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{asset('assets-v2/img/home/r_client7.png')}}" alt="">
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
                        <img class="review_ratting__logo" src="{{asset('assets-v2/img/home/google.png')}}" alt="">
                        </div>
                    </div>
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{asset('assets-v2/img/home/r_client6.png')}}" alt="">
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
                        <img class="review_ratting__logo" src="{{asset('assets-v2/img/home/google.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section: : Marquee Slider -->
     
    
    <!-- ==================== Section: : Frequently Asked Questions ==================== -->
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
    <!-- /Section: : Frequently Asked Questions -->
@endsection