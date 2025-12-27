@extends('layouts.app-v2')

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
<section class="py-5">
    <div class="container-fluid px-3 px-lg-5">
        <div class="oy-banner bg-dark" style="background-image: url('../assets/img/banners/gradient-banner-desktop-1.jpg');">
            <div class="row oy-banner__row g-4 g-xl-5 align-items-center justify-content-between">
                <div class="col-lg-6 col-xl-6">
                    <div class="space-y-3">
                        <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b4-regular text-uppercase">OUR FLEET</span>
                        <h2 class="text-light text-h1 mb-5">Choose Your Ride from Our Elite Fleet</h2>
                        <p class="text-light text-opacity-50 text-b2-regular">Our fleet at Autofusion Cars represents the perfect blend of performance, luxury, and style handpicked to deliver an unforgettable driving experience.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="space-y-4">
                        <img class="rounded-4 d-md-none img-fluid w-100" src="../assets/img/banners/gradient-banner-mobile-1.png" />
                        <form id="car_search_form" name="car_search_form" method="get" action="/hire/cars">
                            @csrf
                            <div class="card space-y-4 p-4 p-lg-5 rounded-5">
                                <!-- Location Field -->
                                <div class="e-control-group position-relative">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.9989 13.4299C13.722 13.4299 15.1189 12.0331 15.1189 10.3099C15.1189 8.58681 13.722 7.18994 11.9989 7.18994C10.2758 7.18994 8.87891 8.58681 8.87891 10.3099C8.87891 12.0331 10.2758 13.4299 11.9989 13.4299Z" stroke="#969FB7" stroke-width="1.5"/>
                                            <path d="M3.62166 8.49C5.59166 -0.169998 18.4217 -0.159997 20.3817 8.5C21.5317 13.58 18.3717 17.88 15.6017 20.54C13.5917 22.48 10.4117 22.48 8.39166 20.54C5.63166 17.88 2.47166 13.57 3.62166 8.49Z" stroke="#969FB7" stroke-width="1.5"/>
                                        </svg>
                                    <input 
                                        type="text" 
                                        name="location_search" 
                                        id="location_search"
                                        class="form-control" 
                                        placeholder="Your Location" 
                                        value="{{ request()->get('location') ? $locations->firstWhere('id', request()->get('location'))->name ?? '' : '' }}"
                                        autocomplete="off"
                                    />
                                    <input type="hidden" name="location" id="location" value="{{ request()->get('location', '') }}" />
                                    <div id="location_dropdown" class="position-absolute w-100 bg-white border rounded-3 shadow-lg" style="top: calc(100% + 8px); z-index: 1050; max-height: 300px; overflow-y: auto; display: none;">
                                        <div class="p-2">
                                            <div class="location-option p-3 rounded-3" style="cursor: pointer; transition: background 0.2s;" data-value="" data-name="Any Location">
                                                Any Location
                                            </div>
                                            @foreach($locations as $location)
                                                <div class="location-option p-3 rounded-3" style="cursor: pointer; transition: background 0.2s;" data-value="{{ $location->id }}" data-name="{{ $location->name }}">
                                                    {{ $location->name }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <!-- Date Field -->
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
                                    <input 
                                        type="text"
                                        name="pickup_dropoff"
                                        id="pickup_dropoff"
                                        class="form-control"
                                        placeholder="Choose Date"
                                        value="{{ request()->has('pickup_dropoff') ? request()->get('pickup_dropoff') : (request()->session()->has('pickupDropoff') ? request()->session()->get('pickupDropoff') : '') }}"
                                        autocomplete="off"
                                        required
                                    />
                                </div>

                                <!-- Select Time -->
                                <div class="e-select-group">
                                    <span class="e-select-icon">
                                         <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2C17.52 2 22 6.48 22 12Z" stroke="#969FB7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M15.7089 15.18L12.6089 13.33C12.0689 13.01 11.6289 12.24 11.6289 11.61V7.51001" stroke="#969FB7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                    </span>
                                    <select id="pickup_time" name="pickup_time" class="form-select e-select rounded-3" e-search="true">
                                        <option value="">Select Time</option>   
                                        <option value="09:00" @if(request()->get('pickup_time') == "09:00")selected @endif>09:00</option>   
                                        <option value="10:00" @if(request()->get('pickup_time') == "10:00")selected @endif>10:00</option>   
                                        <option value="11:00" @if(request()->get('pickup_time') == "11:00")selected @endif>11:00</option>   
                                        <option value="12:00" @if(request()->get('pickup_time') == "12:00")selected @endif>12:00</option>   
                                        <option value="13:00" @if(request()->get('pickup_time') == "13:00")selected @endif>13:00</option>   
                                        <option value="14:00" @if(request()->get('pickup_time') == "14:00")selected @endif>14:00</option>   
                                        <option value="15:00" @if(request()->get('pickup_time') == "15:00")selected @endif>15:00</option>   
                                        <option value="16:00" @if(request()->get('pickup_time') == "16:00")selected @endif>16:00</option>   
                                        <option value="17:00" @if(request()->get('pickup_time') == "17:00")selected @endif>17:00</option>   
                                        <option value="18:00" @if(request()->get('pickup_time') == "18:00")selected @endif>18:00</option>   
                                        <option value="19:00" @if(request()->get('pickup_time') == "19:00")selected @endif>19:00</option>   
                                        <option value="20:00" @if(request()->get('pickup_time') == "20:00")selected @endif>20:00</option>   
                                        <option value="21:00" @if(request()->get('pickup_time') == "21:00")selected @endif>21:00</option>   
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
                                    <select name="type" id="type" class="form-select e-select rounded-3" e-search="true">
                                        <option value="">Vehicle Type</option>   
                                        @foreach($types as $type)
                                            <option @if(request()->get('type') == $type->slug)selected @endif value="{{ $type->slug }}">{{ $type->name }}</option>
                                        @endforeach  
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
                                    <select name="brand" id="brand" class="form-select e-select rounded-3">
                                        <option value="">Vehicle Brand</option>   
                                        @foreach($brands as $brand)
                                            <option @if(request()->get('brand') == $brand->slug)selected @endif value="{{ $brand->slug }}">{{ $brand->name }}</option>
                                        @endforeach
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
<!-- /Section: OUR Fleet Banner -->

<!-- ==================== Section: OUR Available Cars ==================== -->
<section class="section-padding-y overflow-hidden">
    <div class="container oy-section-title">
        <div class="row g-4 align-items-center">
            <div class="col-12 col-md">
                <h3 class="text-h2 mb-0">
                    @if(count($cars) > 0)
                        {{ $cars->total() }} {{ Str::plural('Car', $cars->total()) }} Available
                    @else
                        Our Available Cars
                    @endif
                </h3>
                @if(count($cars) > 0 && request()->hasAny(['pickup_dropoff', 'type', 'location', 'sort_by', 'brand']))
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
            <div class="col-12 col-md-auto">
                <div class="d-flex align-items-center gap-4" id="filter-container">
                    <!-- Vehicle Brand -->
                    <div class="e-select-group">
                        <span class="e-select-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.8468 16.3215L17.7017 13.1928L18.3224 12.7442C18.9299 12.3053 19.1822 11.533 18.9502 10.8226L18.5263 9.52516C18.4815 9.38803 18.4815 9.24304 18.5263 9.10596L18.9502 7.80848C19.1822 7.0981 18.9299 6.32581 18.3224 5.88688L17.2128 5.08493C17.0955 5.00019 17.0098 4.88293 16.9651 4.74579L16.5412 3.44832C16.3091 2.73798 15.6487 2.26067 14.8978 2.26067H13.5261C13.3812 2.26067 13.2426 2.21587 13.1253 2.13113L12.0157 1.32923C11.4082 0.890256 10.5918 0.890256 9.98429 1.32923L8.87461 2.13118C8.75735 2.21593 8.61874 2.26072 8.47381 2.26072H7.10219C6.35126 2.26072 5.69082 2.73798 5.45875 3.44837L5.03488 4.74589C4.99011 4.88293 4.90444 5.00019 4.78717 5.08499L3.67754 5.88688C3.07004 6.32591 2.81777 7.09815 3.04979 7.80848L3.47366 9.10596C3.51844 9.24304 3.51844 9.38803 3.47366 9.52511L3.04979 10.8226C2.81777 11.533 3.07004 12.3053 3.67754 12.7442L4.29823 13.1928L1.15315 16.3214C1.02835 16.4456 0.974953 16.624 1.01109 16.7958C1.04724 16.9677 1.16811 17.1098 1.3325 17.1738L3.85852 18.1568L4.84685 20.6693C4.91113 20.8328 5.05402 20.953 5.22684 20.989C5.26246 20.9964 5.29834 21 5.33395 21C5.4712 21 5.60468 20.9462 5.7038 20.8476L9.5701 17.0025L9.98429 17.3018C10.2881 17.5213 10.644 17.631 11 17.631C11.3559 17.631 11.7119 17.5213 12.0157 17.3018L12.4299 17.0024L16.2963 20.8476C16.3954 20.9462 16.5288 21 16.6661 21C16.7017 21 16.7375 20.9964 16.7732 20.989C16.946 20.953 17.0888 20.8328 17.1532 20.6693L18.1415 18.1568L20.6675 17.1738C20.8319 17.1098 20.9527 16.9677 20.9889 16.7958C21.0251 16.624 20.9716 16.4456 20.8468 16.3215ZM5.52962 19.5495L4.7493 17.5658C4.69616 17.4306 4.58868 17.3237 4.45279 17.2708L2.45839 16.4947L5.04634 13.9202L5.4588 15.1828C5.69088 15.8931 6.35126 16.3704 7.10224 16.3704H8.47386C8.54855 16.3704 8.62151 16.3825 8.69076 16.4056L5.52962 19.5495ZM10.5991 16.4601L9.48949 15.6581C9.1923 15.4434 8.84114 15.3299 8.47386 15.3299H7.10224C6.80589 15.3299 6.54526 15.1416 6.45373 14.8612L6.02986 13.5638C5.92143 13.2318 5.71755 12.9466 5.44045 12.7345C5.43093 12.7263 5.42109 12.7188 5.41116 12.7115C5.40807 12.7092 5.40524 12.7067 5.40211 12.7044L4.29248 11.9025C4.05277 11.7293 3.95319 11.4245 4.04477 11.1442L4.46864 9.84672C4.58214 9.49926 4.58214 9.13197 4.46864 8.7845L4.04477 7.48708C3.95319 7.20672 4.05277 6.90197 4.29248 6.72868L5.40211 5.92678C5.69935 5.71198 5.91641 5.41482 6.02986 5.06745L6.45373 3.76998C6.54526 3.48962 6.80594 3.3013 7.10224 3.3013H8.47386C8.84119 3.3013 9.19241 3.18778 9.48955 2.97303L10.5991 2.17119C10.8389 1.99795 11.1612 1.99789 11.4008 2.17119L12.5105 2.97313C12.8076 3.18789 13.1588 3.3014 13.5261 3.3014H14.8978C15.1941 3.3014 15.4547 3.48978 15.5463 3.77008L15.9701 5.06751C16.0836 5.41497 16.3007 5.71213 16.5979 5.92689L17.7076 6.72883C17.9473 6.90207 18.0468 7.20683 17.9552 7.48718L17.5314 8.78471C17.4179 9.13212 17.4179 9.49941 17.5314 9.84688L17.9552 11.1444C18.0468 11.4247 17.9473 11.7294 17.7075 11.9027L16.598 12.7045C16.5941 12.7074 16.5906 12.7105 16.5867 12.7133C16.5779 12.7199 16.5691 12.7266 16.5606 12.7338C16.283 12.946 16.0787 13.2315 15.9701 13.5639L15.5463 14.8614C15.4547 15.1418 15.1941 15.3301 14.8978 15.3301H13.5261C13.1589 15.3301 12.8077 15.4436 12.5105 15.6584L11.4009 16.4602C11.161 16.6334 10.8388 16.6332 10.5991 16.4601ZM17.5472 17.2708C17.4113 17.3237 17.3039 17.4306 17.2507 17.5658L16.4704 19.5495L13.3092 16.4057C13.3784 16.3825 13.4514 16.3705 13.5261 16.3705H14.8978C15.6486 16.3705 16.3091 15.8932 16.5411 15.1829L16.9536 13.9202L19.5417 16.4947L17.5472 17.2708Z" fill="#545A64"/>
                                    <path d="M12.773 12.8019C12.862 12.8019 12.9507 12.7742 13.0256 12.7199C13.1579 12.6237 13.2242 12.4608 13.1966 12.2996L12.8552 10.3094L14.3012 8.89997C14.4183 8.7858 14.4604 8.61505 14.4099 8.4595C14.3593 8.30395 14.2248 8.1906 14.063 8.16705L12.0647 7.87667L11.1711 6.06592C11.0987 5.91927 10.9493 5.82642 10.7857 5.82642C10.6222 5.82642 10.4728 5.91927 10.4004 6.06592L9.50683 7.87667L7.50857 8.16705C7.3467 8.19056 7.21225 8.30395 7.16168 8.4595C7.11111 8.61505 7.1533 8.7858 7.27043 8.89997L8.71637 10.3094L8.37503 12.2996C8.34736 12.4608 8.41362 12.6237 8.54596 12.7199C8.67826 12.816 8.8537 12.8286 8.99846 12.7526L10.7857 11.813L12.5731 12.7525C12.6359 12.7856 12.7046 12.8019 12.773 12.8019ZM10.9857 10.9472C10.9231 10.9143 10.8544 10.8978 10.7857 10.8978C10.7171 10.8978 10.6484 10.9143 10.5858 10.9472L9.3692 11.5868L9.60157 10.232C9.62551 10.0927 9.57927 9.95043 9.478 9.85169L8.49375 8.89228L9.85397 8.69458C9.99392 8.67426 10.1149 8.58634 10.1775 8.45954L10.7857 7.22703L11.394 8.45958C11.4566 8.58639 11.5776 8.6743 11.7175 8.69462L13.0778 8.89232L12.0935 9.85173C11.9923 9.95043 11.946 10.0927 11.9699 10.2321L12.2023 11.5868L10.9857 10.9472Z" fill="#545A64"/>
                                </svg>
                        </span>
                        <select name="brand_filter" id="brand_filter" class="form-select e-select" e-search="true">
                            <option value="">Vehicle Brand</option>   
                            @foreach($brands as $brand)
                                <option value="{{ $brand->slug }}">{{ $brand->name }}</option>
                            @endforeach  
                        </select>
                    </div>

                    <!-- Vehicle Type -->
                    <div class="e-select-group">
                        <span class="e-select-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.7615 10.0468L18.9732 9.13925H19.3123C19.899 9.13925 20.3757 8.66258 20.3757 8.07592V7.72758C20.3757 7.14092 19.899 6.66425 19.3123 6.66425H19.0098C18.7532 6.66425 18.5515 6.86592 18.5515 7.12258C18.5515 7.37925 18.7532 7.58092 19.0098 7.58092H19.3123C19.3948 7.58092 19.459 7.64508 19.459 7.72758V8.07592C19.459 8.15842 19.3948 8.22258 19.3123 8.22258H18.6707L17.9832 5.97675C17.534 4.52842 16.2232 3.56592 14.7107 3.56592H7.28568C5.77318 3.56592 4.46234 4.53758 4.01318 5.97675L3.32568 8.22258H2.68401C2.60151 8.22258 2.53734 8.15842 2.53734 8.07592V7.72758C2.53734 7.64508 2.60151 7.58092 2.68401 7.58092H2.98651C3.24318 7.58092 3.44484 7.37925 3.44484 7.12258C3.44484 6.86592 3.24318 6.66425 2.98651 6.66425H2.68401C2.09734 6.66425 1.62068 7.14092 1.62068 7.72758V8.07592C1.62068 8.66258 2.09734 9.13925 2.68401 9.13925H3.02318L2.23484 10.0468C1.73984 10.6151 1.46484 11.3484 1.46484 12.1093V14.7401C1.46484 15.2993 1.77651 15.7851 2.24401 16.0418V17.0776C2.24401 17.8384 2.85818 18.4526 3.61901 18.4526H5.19568C5.95651 18.4526 6.57068 17.8384 6.57068 17.0776V16.2343H15.4257V17.0776C15.4257 17.8384 16.0398 18.4526 16.8007 18.4526H18.3773C19.1382 18.4526 19.7523 17.8384 19.7523 17.0776V16.0418C20.2107 15.7851 20.5315 15.3084 20.5315 14.7401V12.1093C20.5315 11.3484 20.2565 10.6151 19.7615 10.0468ZM2.93151 10.6518L3.81151 9.64342C3.85734 9.59758 3.88484 9.54258 3.90318 9.47842L4.08651 8.88258C4.08651 8.88258 4.10484 8.82758 4.11401 8.80008L4.90234 6.25175C5.23234 5.19758 6.19484 4.48258 7.29484 4.48258H14.7107C15.8198 4.48258 16.7823 5.18842 17.1032 6.25175L17.8915 8.80008C17.8915 8.80008 17.9007 8.85508 17.919 8.88258L18.1023 9.47842C18.1207 9.54258 18.1482 9.59758 18.194 9.64342L19.074 10.6518C19.4223 11.0551 19.624 11.5776 19.624 12.1184V13.4476H17.534C17.2315 13.4476 16.9748 13.2001 16.9748 12.8884V12.3018C16.9748 11.9993 17.2223 11.7426 17.534 11.7426H18.6523C18.909 11.7426 19.1107 11.5409 19.1107 11.2843C19.1107 11.0276 18.909 10.8259 18.6523 10.8259H17.534C16.7182 10.8259 16.0582 11.4859 16.0582 12.3018V12.8884C16.0582 13.7043 16.7182 14.3643 17.534 14.3643H19.624V14.7493C19.624 15.0609 19.3673 15.3176 19.0557 15.3176H14.344V13.7501C14.344 13.4934 14.1423 13.2918 13.8857 13.2918H8.12901C7.87234 13.2918 7.67068 13.4934 7.67068 13.7501V15.3176H2.95901C2.64734 15.3176 2.39068 15.0609 2.39068 14.7493V14.3643H4.48068C5.29651 14.3643 5.95651 13.7043 5.95651 12.8884V12.3018C5.95651 11.4859 5.29651 10.8259 4.48068 10.8259H3.36234C3.10568 10.8259 2.90401 11.0276 2.90401 11.2843C2.90401 11.5409 3.10568 11.7426 3.36234 11.7426H4.48068C4.78318 11.7426 5.03984 11.9901 5.03984 12.3018V12.8884C5.03984 13.1909 4.79234 13.4476 4.48068 13.4476H2.39068V12.1184C2.39068 11.5776 2.58318 11.0643 2.94068 10.6518H2.93151ZM5.65401 17.0684C5.65401 17.3251 5.45234 17.5268 5.19568 17.5268H3.61901C3.36234 17.5268 3.16068 17.3251 3.16068 17.0684V16.2251H5.65401V17.0684ZM8.57818 15.3084V14.1993H13.4182V15.3084H8.57818ZM18.8357 17.0684C18.8357 17.3251 18.634 17.5268 18.3773 17.5268H16.8007C16.544 17.5268 16.3423 17.3251 16.3423 17.0684V16.2251H18.8357V17.0684Z" fill="#545A64"/>
                                    <path d="M5.48958 9.13005H16.5079C16.7646 9.13005 16.9663 8.92838 16.9663 8.67171C16.9663 8.41505 16.7646 8.21338 16.5079 8.21338H5.48958C5.23292 8.21338 5.03125 8.41505 5.03125 8.67171C5.03125 8.92838 5.23292 9.13005 5.48958 9.13005Z" fill="#545A64"/>
                                    <path d="M14.7496 10.8167H7.2513C6.99464 10.8167 6.79297 11.0183 6.79297 11.275C6.79297 11.5317 6.99464 11.7333 7.2513 11.7333H14.7496C15.0063 11.7333 15.208 11.5317 15.208 11.275C15.208 11.0183 15.0063 10.8167 14.7496 10.8167Z" fill="#545A64"/>
                                </svg>
                        </span>
                        <select name="type_filter" id="type_filter" class="form-select e-select" e-search="true">
                            <option value="">Vehicle Type</option>   
                            @foreach($types as $type)
                                <option value="{{ $type->slug }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- MIN AGE -->
                    <div class="e-select-group">
                        <span class="e-select-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5625 1.375C7.94221 1.375 8.25 1.68281 8.25 2.0625V2.75H11.6875C12.0672 2.75 12.375 3.05781 12.375 3.4375C12.375 3.81719 12.0672 4.125 11.6875 4.125H8.25V4.8125C8.25 5.19219 7.94221 5.5 7.5625 5.5C7.18279 5.5 6.875 5.19219 6.875 4.8125V4.125H5.5C3.98122 4.125 2.75 5.35622 2.75 6.875V16.5C2.75 18.0188 3.98122 19.25 5.5 19.25H9.625C10.0047 19.25 10.3125 19.5578 10.3125 19.9375C10.3125 20.3172 10.0047 20.625 9.625 20.625H5.5C3.22182 20.625 1.375 18.7782 1.375 16.5V6.875C1.375 4.59682 3.22182 2.75 5.5 2.75H6.875V2.0625C6.875 1.68281 7.18279 1.375 7.5625 1.375ZM14.4375 1.375C14.8172 1.375 15.125 1.68281 15.125 2.0625V2.75H16.5C18.7782 2.75 20.625 4.59682 20.625 6.875V9.625C20.625 10.0047 20.3172 10.3125 19.9375 10.3125C19.5578 10.3125 19.25 10.0047 19.25 9.625V6.875C19.25 5.35622 18.0188 4.125 16.5 4.125H15.125V4.8125C15.125 5.19219 14.8172 5.5 14.4375 5.5C14.0578 5.5 13.75 5.19219 13.75 4.8125V2.0625C13.75 1.68281 14.0578 1.375 14.4375 1.375ZM5.5 7.5625C5.12031 7.5625 4.8125 7.87029 4.8125 8.25C4.8125 8.62971 5.12031 8.9375 5.5 8.9375H16.5C16.8797 8.9375 17.1875 8.62971 17.1875 8.25C17.1875 7.87029 16.8797 7.5625 16.5 7.5625H5.5ZM17.6736 15.6111L15.9549 17.3299C15.6864 17.5984 15.2511 17.5984 14.9826 17.3299L13.9514 16.2986C13.6829 16.0302 13.6829 15.5948 13.9514 15.3264C14.2198 15.0579 14.6552 15.0579 14.9236 15.3264L15.4688 15.8715L16.7014 14.6389C16.9698 14.3704 17.4052 14.3704 17.6736 14.6389C17.9421 14.9073 17.9421 15.3427 17.6736 15.6111ZM6.875 12.0312C6.875 12.6008 6.4133 13.0625 5.84375 13.0625C5.2742 13.0625 4.8125 12.6008 4.8125 12.0312C4.8125 11.4617 5.2742 11 5.84375 11C6.4133 11 6.875 11.4617 6.875 12.0312ZM5.84375 17.1875C6.4133 17.1875 6.875 16.7258 6.875 16.1562C6.875 15.5867 6.4133 15.125 5.84375 15.125C5.2742 15.125 4.8125 15.5867 4.8125 16.1562C4.8125 16.7258 5.2742 17.1875 5.84375 17.1875ZM12.375 15.8125C12.375 13.914 13.914 12.375 15.8125 12.375C17.711 12.375 19.25 13.914 19.25 15.8125C19.25 17.711 17.711 19.25 15.8125 19.25C13.914 19.25 12.375 17.711 12.375 15.8125ZM15.8125 11C13.1546 11 11 13.1546 11 15.8125C11 18.4704 13.1546 20.625 15.8125 20.625C18.4704 20.625 20.625 18.4704 20.625 15.8125C20.625 13.1546 18.4704 11 15.8125 11Z" fill="#545A64"/>
                                </svg>
                        </span>
                        <select name="sort_by_filter" id="sort_by_filter" class="form-select e-select">
                            <option value="">Sort By</option>   
                            <option value="price_low">Price Low to High</option>   
                            <option value="price_high">Price High to Low</option>   
                        </select>
                    </div>

                    <!-- Price -->
                    <div class="e-select-group">
                        <span class="e-select-icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 19C7.59602 19 5.33589 18.0639 3.63602 16.364C1.93614 14.6641 1 12.404 1 10C1 7.59602 1.93618 5.33593 3.63602 3.63602C5.33586 1.93611 7.59602 1 10 1C12.404 1 14.6641 1.93614 16.364 3.63602C18.0639 5.33589 19 7.59602 19 10C19 12.404 18.0638 14.6641 16.364 16.364C14.6641 18.0639 12.404 19 10 19ZM10 2.125C5.65771 2.125 2.125 5.65771 2.125 10C2.125 14.3423 5.65771 17.875 10 17.875C14.3423 17.875 17.875 14.3423 17.875 10C17.875 5.65771 14.3423 2.125 10 2.125Z" fill="#545A64"/>
                                    <path d="M10 9.5C9.081 9.5 8.33333 8.93925 8.33333 8.25C8.33333 7.56075 9.081 7 10 7C10.919 7 11.6667 7.56075 11.6667 8.25C11.6667 8.52612 11.9651 8.75 12.3333 8.75C12.7015 8.75 13 8.52612 13 8.25C13 7.18122 12.0009 6.28475 10.6667 6.05669V5.5C10.6667 5.22387 10.3682 5 10 5C9.63179 5 9.33333 5.22387 9.33333 5.5V6.05669C7.99908 6.28475 7 7.18122 7 8.25C7 9.49066 8.34579 10.5 10 10.5C10.919 10.5 11.6667 11.0608 11.6667 11.75C11.6667 12.4392 10.919 13 10 13C9.081 13 8.33333 12.4392 8.33333 11.75C8.33333 11.4739 8.03488 11.25 7.66667 11.25C7.29846 11.25 7 11.4739 7 11.75C7 12.8188 7.99908 13.7153 9.33333 13.9433V14.5C9.33333 14.7761 9.63179 15 10 15C10.3682 15 10.6667 14.7761 10.6667 14.5V13.9433C12.0009 13.7153 13 12.8188 13 11.75C13 10.5093 11.6542 9.5 10 9.5Z" fill="#545A64"/>
                                </svg>
                        </span>
                        <select name="price_filter" id="price_filter" class="form-select e-select">
                            <option value="">Price</option>   
                            <option value="2">10k-20k</option>   
                            <option value="3">20k-30k</option>   
                            <option value="4">30k-50k</option>   
                            <option value="5">50k-100k</option>   
                            <option value="6">100k-300k</option>   
                        </select>
                    </div>

                    @if(request()->hasAny(['pickup_dropoff', 'type', 'brand', 'location', 'sort_by']))
                        <a href="{{ route('hire.cars') }}" class="inline-flex items-center text-sm text-primary hover:text-primary hover:opacity-80 font-medium">
                            Clear Filters
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    
    @if(count($cars) > 0)
        <div class="container" data-equalize="min-height" data-equalize-target=".card--product__title" data-equalize-var="--equal-heading-min-height">
            <div class="row g-4 g-lg-5">
                @foreach ($cars as $car)
                    @php
                    if($dates_available) {
                        $vehiclePrice = number_format($car->special_price, 0, '', ',');
                    } else {
                        $vehiclePrice = number_format($car->pricing['daily'], 0, '', ',');
                    }
                    @endphp

                    <!-- Column -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card card--product h-100">
                            <div class="card--product__thumb">
                                <img src="{{ $car->main_image?->getUrl('thumb') }}" alt="{{ $car->name }}">
                            </div>
                            <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                                <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">{{ $car->type->name }}</span>
                                <h5 class="card--product__title text-b1-semibold mb-4">{{ $car->name }}</h5>

                                <!-- Action -->
                                <div class="card--product__action d-flex justify-content-between align-items-end w-100 mt-auto">
                                    <div>
                                        <p class="text-secondary text-b4-regular text-opacity-50 mb-0">From</p>
                                        <div class="text-b1-semibold text-primary">£{{ $vehiclePrice }}/day</div>
                                    </div>
                                    <div>
                                        <a class="btn btn--outline-primary" href="{{ '/hire/cars/'.$car->slug.'/?'.http_build_query(array_merge(request()->all(),['ref' => 'af'])) }}">
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
                @endforeach
            </div>
        </div>

        <div class="pagination-default mt-5 d-flex flex-wrap justify-content-center align-items-center gap-4">
            @if($cars->onFirstPage())
                <span class="btn--circle outlined" data-pulse-direction="right" style="opacity: 0.5; cursor: not-allowed;">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.77344 5.43582L3.20927 11L8.77344 16.5642" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18.791 11H3.36352" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </span>
            @else
                <a href="{{ $cars->previousPageUrl() }}" class="btn--circle outlined" data-pulse-direction="right">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.77344 5.43582L3.20927 11L8.77344 16.5642" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18.791 11H3.36352" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </a>
            @endif

            @foreach(range(1, min($cars->lastPage(), 3)) as $page)
                @if($page == $cars->currentPage())
                    <span class="btn--circle text-b1-medium is-active">{{ str_pad($page, 2, '0', STR_PAD_LEFT) }}</span>
                @else
                    <a href="{{ $cars->url($page) }}" class="btn--circle text-b1-medium">{{ str_pad($page, 2, '0', STR_PAD_LEFT) }}</a>
                @endif
            @endforeach

            @if($cars->hasMorePages())
                <a href="{{ $cars->nextPageUrl() }}" class="btn--circle outlined" data-pulse-direction="left">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.2266 5.43582L18.7907 11L13.2266 16.5642" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3.20898 11H18.6365" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                </a>
            @else
                <span class="btn--circle outlined" data-pulse-direction="left" style="opacity: 0.5; cursor: not-allowed;">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.2266 5.43582L18.7907 11L13.2266 16.5642" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3.20898 11H18.6365" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                </span>
            @endif
        </div>
    @else
        <!-- No Results Found -->
        <div class="container">
            <div class="text-center py-16">
                <div class="max-w-md mx-auto">
                    <!-- Message -->
                    <h3 class="text-2xl font-bold text-dark mb-4">No Cars Found</h3>
                    <p class="text-dark text-opacity-60 mb-8">
                        @if(request()->hasAny(['pickup_dropoff', 'type', 'location', 'sort_by', 'brand']))
                            We couldn't find any cars matching your search criteria. Try adjusting your filters or clearing them to see all available vehicles.
                        @else
                            We couldn't find any cars at the moment. Please try again later or contact us for assistance.
                        @endif
                    </p>
                    
                    <!-- Action Buttons -->
                    <div class="space-y-4 sm:space-y-0 sm:space-x-4 sm:flex sm:justify-center">
                        @if(request()->hasAny(['pickup_dropoff', 'type', 'location', 'sort_by', 'brand']))
                            <a href="{{ route('hire.cars') }}" class="btn btn-primary inline-flex items-center justify-center">
                                Clear All Filters
                            </a>
                        @endif
                        
                        <a href="{{ route('hire') }}" class="inline-flex items-center justify-center px-6 py-3 border border-gray-300 text-base font-medium rounded-[10px] text-dark bg-white hover:bg-gray-50 transition-colors duration-200">
                            Back to Home
                        </a>
                    </div>
                    
                    <!-- Contact Info -->
                    <div class="mt-8 pt-6 border-t border-gray-200">
                        <p class="text-sm text-dark text-opacity-50 mb-2">Need help finding the perfect car?</p>
                        <div class="flex flex-col sm:flex-row items-center justify-center space-y-2 sm:space-y-0 sm:space-x-6">
                            <a href="tel:{{ nova_get_setting('phone_number', '0141 280 9444') }}" class="inline-flex items-center text-primary hover:text-primary hover:opacity-80 font-medium">
                                {{ nova_get_setting('phone_number', '0141 280 9444') }}
                            </a>
                            <a href="mailto:{{ nova_get_setting('email', 'info@autofusion.co.uk') }}" class="inline-flex items-center text-primary hover:text-primary hover:opacity-80 font-medium">
                                Email Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
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
     </section>z

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

                <div class="oy-testimonial-item marquee-item">
                    <div class="item-author">
                        <img class="item-author__thumb" src="{{ asset('assets/img/home/r_client2.png') }}" alt="">
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
                        <img class="review_ratting__logo" src="{{ asset('assets/img/home/google.png') }}" alt="">
                    </div>
                </div>
                <div class="oy-testimonial-item marquee-item">
                    <div class="item-author">
                        <img class="item-author__thumb" src="{{ asset('assets/img/home/r_client3.png') }}" alt="">
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
                        <img class="review_ratting__logo" src="{{ asset('assets/img/home/google.png') }}" alt="">
                    </div>
                </div>
                <div class="oy-testimonial-item marquee-item">
                    <div class="item-author">
                        <img class="item-author__thumb" src="{{ asset('assets/img/home/r_client4.png') }}" alt="">
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
                        <img class="review_ratting__logo" src="{{ asset('assets/img/home/google.png') }}" alt="">
                    </div>
                </div>
                <div class="oy-testimonial-item marquee-item">
                    <div class="item-author">
                        <img class="item-author__thumb" src="{{ asset('assets/img/home/r_client7.png') }}" alt="">
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
                        <img class="review_ratting__logo" src="{{ asset('assets/img/home/google.png') }}" alt="">
                    </div>
                </div>
                <div class="oy-testimonial-item marquee-item">
                    <div class="item-author">
                        <img class="item-author__thumb" src="{{ asset('assets/img/home/r_client6.png') }}" alt="">
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
                        <img class="review_ratting__logo" src="{{ asset('assets/img/home/google.png') }}" alt="">
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
                            <img class="item-author__thumb" src="{{ asset('assets/img/home/r_client1.png') }}" alt="">
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
                        <img class="review_ratting__logo" src="{{ asset('assets/img/home/google.png') }}" alt="">
                        </div>
                    </div>
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{ asset('assets/img/home/r_client2.png') }}" alt="">
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
                        <img class="review_ratting__logo" src="{{ asset('assets/img/home/google.png') }}" alt="">
                        </div>
                    </div>
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{ asset('assets/img/home/r_client3.png') }}" alt="">
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
                        <img class="review_ratting__logo" src="{{ asset('assets/img/home/google.png') }}" alt="">
                        </div>
                    </div>
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{ asset('assets/img/home/r_client4.png') }}" alt="">
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
                        <img class="review_ratting__logo" src="{{ asset('assets/img/home/google.png') }}" alt="">
                        </div>
                    </div>
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{ asset('assets/img/home/r_client7.png') }}" alt="">
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
                        <img class="review_ratting__logo" src="{{ asset('assets/img/home/google.png') }}" alt="">
                        </div>
                    </div>
                    <div class="oy-testimonial-item marquee-item">
                        <div class="item-author">
                            <img class="item-author__thumb" src="{{ asset('assets/img/home/r_client6.png') }}" alt="">
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



    <script src="{{ asset('assets-v2/js/components/marquee-slider.js') }}" defer></script> 
    <script src="{{ asset('assets-v2/js/components/oy-swiper.js') }}" defer></script>




    {{--<header class="page-header h-[100dvh] sm:h-[85dvh] lg:h-[75dvh] px-4 sm:px-6 lg:px-24 xl:px-40" style="background: linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.7)), url('https://autofusioncars.co.uk/images/20_.jpg') no-repeat center center/cover">
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
    </header> --}}
{{--        @component('components.hero-section', ['name' => 'Book Your Favourite Car', 'dark' => false, 'image' => asset('images/20_.jpg')])--}}
{{--            @slot('caption')--}}
{{--                View our fleet of performance, luxury and supercars available to hire--}}
{{--            @endslot--}}
{{--    Form here --}}
{{--        @endcomponent--}}

   {{-- <section id="carList" class="pt-[60px] pb-[100px] max-w-screen-xl mx-auto px-4 lg:px-20">
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
        @include('components.pagination.squircle', ['paginator' => $paginatedData])
        @endif
    </section>

    @include('components.why-choose-autofusion-hire') --}}




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

    <script>
    // Location dropdown functionality
    const locationInput = document.getElementById('location_search');
    const locationDropdown = document.getElementById('location_dropdown');
    const locationHidden = document.getElementById('location');
    const locationOptions = document.querySelectorAll('.location-option');
    
    if (locationInput) {
        locationInput.addEventListener('focus', () => {
            locationDropdown.style.display = 'block';
        });
        
        locationInput.addEventListener('input', (e) => {
            const searchTerm = e.target.value.toLowerCase();
            locationOptions.forEach(option => {
                const text = option.textContent.toLowerCase();
                option.style.display = text.includes(searchTerm) ? 'block' : 'none';
            });
        });
        
        locationOptions.forEach(option => {
            option.addEventListener('click', () => {
                locationInput.value = option.dataset.name;
                locationHidden.value = option.dataset.value;
                locationDropdown.style.display = 'none';
            });
            
            option.addEventListener('mouseenter', () => {
                option.style.background = '#f3f4f6';
            });
            
            option.addEventListener('mouseleave', () => {
                option.style.background = 'transparent';
            });
        });
        
        document.addEventListener('click', (e) => {
            if (!locationInput.contains(e.target) && !locationDropdown.contains(e.target)) {
                locationDropdown.style.display = 'none';
            }
        });
    }
</script>
@endpush
