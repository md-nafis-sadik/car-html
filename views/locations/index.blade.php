@extends('layouts.app-v2')

@section('head-info')
    <meta name="description" content="Find your nearest {{ config('app.name') }} location for car hire services."/>
    <title>Our Locations - {{ config('app.name') }}</title>
@endsection

@section('main')
    <section class="py-5">
        <div class="container-fluid px-3 px-lg-5">
            <div class="oy-banner bg-dark" style="background-image: url('{{ asset('assets-v2/img/banners/gradient-banner-desktop-2.png') }}');">
                <div class="row oy-banner__row g-4 g-xl-5 align-items-center justify-content-between">
                    <div class="col-lg-6 col-xl-6">
                        <div class="space-y-3">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b4-regular text-uppercase">Our Locations</span>
                            <h2 class="text-light text-h1 mb-5">Find Your Nearest Branch for Car Hire.</h2>
                            <p class="text-light text-opacity-50 text-b2-regular">Your next drive starts here locate your nearest Autofusion branch today.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="space-y-4">
                            <img class="rounded-4 d-md-none img-fluid w-100" src="{{ asset('assets-v2/img/banners/gradient-banner-mobile-2.png') }}" />
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
