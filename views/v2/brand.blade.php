<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Auto Fusion HTML Template</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

  <!-- Preload Critical Resources -->
  <link rel="preload" href="{{ asset('/assets-v2/css/style.css') }}" as="style">
  <link rel="preload" href="{{ asset('/assets-v2/js/app.js') }}" as="script">

  <!-- Stylesheet -->
  <link href="{{ asset('/assets-v2/css/style.css') }}" rel="stylesheet">

  <!-- Preconnect TO CDN -->
  <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
</head>

<body>


  <!-- ==================== Section: Header TOP BAR (Desktop) ==================== -->
  <section class="oy-header-top d-none d-md-block bg-dark text-light py-3">
    <div class="container" style="max-width: 920px;">
      <div class="row align-items-center justify-content-between">
        <div class="col-auto">
          <div class="d-flex align-items-center gap-3 fw-medium">
            <img src="{{ asset('/assets-v2/img/header/satisfied-icon.svg') }}" alt="icon">
            <span>1000+ Satisfied Customers</span>
          </div>
        </div>
        <div class="col-auto">
          <div class="d-flex align-items-center gap-3 fw-medium">
            <img src="{{ asset('/assets-v2/img/header/vehicles.svg') }}" alt="icon">
            <span>Over 200 Vehicles</span>
          </div>
        </div>
        <div class="col-auto">
          <div class="d-flex align-items-center gap-3 fw-medium">
            <img src="{{ asset('/assets-v2/img/header/rent.svg') }}" alt="icon">
            <span>Rent with Confidence</span>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- /Section: Header TOP BAR (Desktop) -->

  <!-- ==================== Section: Header ==================== -->
  <script src="{{ asset('/assets-v2/js/components/header-sticky.js') }}"></script>
  <header class="oy-header">
    <header-sticky data-sticky-start="350" data-sticky-offset="0">
      <nav class="navbar bg-white navbar-expand-lg py-3 py-lg-4">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="{{ asset('/assets-v2/img/header/logo.svg') }}" alt="icon"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler__bar"></span>
            <span class="navbar-toggler__bar"></span>
            <span class="navbar-toggler__bar"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Our Fleet
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Fleet Set</a></li>
                  <li><a class="dropdown-item" href="#">Fleet Set 01</a></li>
                  <li><a class="dropdown-item" href="#">Fleet Set 03</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Service</a></li>
                  <li><a class="dropdown-item" href="#">Service 01</a></li>
                  <li><a class="dropdown-item" href="#">Service 03</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Locations
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Locations</a></li>
                  <li><a class="dropdown-item" href="#">Locations 01</a></li>
                  <li><a class="dropdown-item" href="#">Locations 03</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Hiring Process</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">FAQs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Learn</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>

            <!-- Action Buttons -->
            <div class="d-flex align-items-center gap-5">
              <a class="link link_btn" href="#">Login</a>
              <a class="btn btn--gradient-primary" href="#">
                <span class="btn__text">Car Hire</span>
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </nav>
    </header-sticky>
  </header>
  <!-- /Section: Header -->

  <!-- ==================== Section: Header TOP BAR (Mobile) ==================== -->
  <script src="{{ asset('/assets-v2/js/components/oy-swiper.js') }}" defer></script>
  <section class="oy-header-top d-block d-md-none bg-primary bg-opacity-10 py-3 overflow-hidden">
    <div class="container">
      <oy-swiper data-items="1" data-loop="true" data-speed="600" data-lazy="true" data-space="30" data-autoplay="true" data-autoplay-delay="3000">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="d-flex align-items-center justify-content-center gap-3 fw-medium">
              <img src="{{ asset('/assets-v2/img/header/rent.svg') }}" alt="icon">
              <span>1000+ Satisfied Customers</span>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="d-flex align-items-center justify-content-center gap-3 fw-medium">
              <img src="{{ asset('/assets-v2/img/header/rent.svg') }}" alt="icon">
              <span>Over 200 Vehicles</span>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="d-flex align-items-center justify-content-center gap-3 fw-medium">
              <img src="{{ asset('/assets-v2/img/header/rent.svg') }}" alt="icon">
              <span>Rent with Confidence</span>
            </div>
          </div>
        </div>
      </oy-swiper>
    </div>
  </section>
  <!-- /Section: Header TOP BAR (Mobile) -->

  <!-- ==================== Section: Hero Banner ==================== -->
  <section class="py-5">
    <div class="container-fluid px-3 px-lg-5">
      <div class="oy-banner bg-dark" style="background-image: url('{{ asset('/assets-v2/img/banners/gradient-banner-desktop-6.png') }}');">
        <div class="row oy-banner__row g-4 g-xl-5 align-items-center justify-content-between">
          <div class="col-lg-6 col-xl-7">
            <div class="space-y-3">
              <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b4-regular text-uppercase">Brand</span>
              <h2 class="text-light text-h1 mb-5">Select Your Vehicle from Our Premium Collection</h2>
              <p class="text-light text-opacity-50 text-b2-regular">Our fleet at Autofusion Cars represents the perfect blend of performance, luxury, and style handpicked to deliver an unforgettable driving experience.</p>
            </div>
          </div>
          <div class="col-lg-6 col-xl-4">
            <div class="space-y-4">
              <img class="rounded-4 d-md-none img-fluid w-100" src="{{ asset('/assets-v2/img/banners/gradient-banner-mobile-6.png') }}" />
              <form action="#">
                <div class="card space-y-4 p-4 p-lg-5 rounded-5">
                  <div class="e-control-group">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.9989 13.4299C13.722 13.4299 15.1189 12.0331 15.1189 10.3099C15.1189 8.58681 13.722 7.18994 11.9989 7.18994C10.2758 7.18994 8.87891 8.58681 8.87891 10.3099C8.87891 12.0331 10.2758 13.4299 11.9989 13.4299Z" stroke="#969FB7" stroke-width="1.5" />
                      <path d="M3.62166 8.49C5.59166 -0.169998 18.4217 -0.159997 20.3817 8.5C21.5317 13.58 18.3717 17.88 15.6017 20.54C13.5917 22.48 10.4117 22.48 8.39166 20.54C5.63166 17.88 2.47166 13.57 3.62166 8.49Z" stroke="#969FB7" stroke-width="1.5" />
                    </svg>
                    <input type="text" class="form-control" placeholder="Your Locations">
                  </div>
                  <div class="e-control-group">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8 2V5" stroke="#969FB7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M16 2V5" stroke="#969FB7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M3.5 9.09009H20.5" stroke="#969FB7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z" stroke="#969FB7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M15.6937 13.7H15.7027" stroke="#969FB7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M15.6937 16.7H15.7027" stroke="#969FB7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M11.9945 13.7H12.0035" stroke="#969FB7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M11.9945 16.7H12.0035" stroke="#969FB7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M8.29529 13.7H8.30427" stroke="#969FB7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M8.29529 16.7H8.30427" stroke="#969FB7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <input type="text" class="form-control" placeholder="Choose Date">
                  </div>
                  <!-- Select Time -->
                  <div class="e-select-group">
                    <span class="e-select-icon">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2C17.52 2 22 6.48 22 12Z" stroke="#969FB7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15.7089 15.18L12.6089 13.33C12.0689 13.01 11.6289 12.24 11.6289 11.61V7.51001" stroke="#969FB7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
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
                        <path d="M21.5616 10.9599L20.7016 9.96989H21.0716C21.7116 9.96989 22.2316 9.44989 22.2316 8.80989V8.42989C22.2316 7.78989 21.7116 7.26989 21.0716 7.26989H20.7416C20.4616 7.26989 20.2416 7.48989 20.2416 7.76989C20.2416 8.04989 20.4616 8.26989 20.7416 8.26989H21.0716C21.1616 8.26989 21.2316 8.33989 21.2316 8.42989V8.80989C21.2316 8.89989 21.1616 8.96989 21.0716 8.96989H20.3716L19.6216 6.51989C19.1316 4.93989 17.7016 3.88989 16.0516 3.88989H7.95156C6.30156 3.88989 4.87156 4.94989 4.38156 6.51989L3.63156 8.96989H2.93156C2.84156 8.96989 2.77156 8.89989 2.77156 8.80989V8.42989C2.77156 8.33989 2.84156 8.26989 2.93156 8.26989H3.26156C3.54156 8.26989 3.76156 8.04989 3.76156 7.76989C3.76156 7.48989 3.54156 7.26989 3.26156 7.26989H2.93156C2.29156 7.26989 1.77156 7.78989 1.77156 8.42989V8.80989C1.77156 9.44989 2.29156 9.96989 2.93156 9.96989H3.30156L2.44156 10.9599C1.90156 11.5799 1.60156 12.3799 1.60156 13.2099V16.0799C1.60156 16.6899 1.94156 17.2199 2.45156 17.4999V18.6299C2.45156 19.4599 3.12156 20.1299 3.95156 20.1299H5.67156C6.50156 20.1299 7.17156 19.4599 7.17156 18.6299V17.7099H16.8316V18.6299C16.8316 19.4599 17.5016 20.1299 18.3316 20.1299H20.0516C20.8816 20.1299 21.5516 19.4599 21.5516 18.6299V17.4999C22.0516 17.2199 22.4016 16.6999 22.4016 16.0799V13.2099C22.4016 12.3799 22.1016 11.5799 21.5616 10.9599ZM3.20156 11.6199L4.16156 10.5199C4.21156 10.4699 4.24156 10.4099 4.26156 10.3399L4.46156 9.68989C4.46156 9.68989 4.48156 9.62989 4.49156 9.59989L5.35156 6.81989C5.71156 5.66989 6.76156 4.88989 7.96156 4.88989H16.0516C17.2616 4.88989 18.3116 5.65989 18.6616 6.81989L19.5216 9.59989C19.5216 9.59989 19.5316 9.65989 19.5516 9.68989L19.7516 10.3399C19.7716 10.4099 19.8016 10.4699 19.8516 10.5199L20.8116 11.6199C21.1916 12.0599 21.4116 12.6299 21.4116 13.2199V14.6699H19.1316C18.8016 14.6699 18.5216 14.3999 18.5216 14.0599V13.4199C18.5216 13.0899 18.7916 12.8099 19.1316 12.8099H20.3516C20.6316 12.8099 20.8516 12.5899 20.8516 12.3099C20.8516 12.0299 20.6316 11.8099 20.3516 11.8099H19.1316C18.2416 11.8099 17.5216 12.5299 17.5216 13.4199V14.0599C17.5216 14.9499 18.2416 15.6699 19.1316 15.6699H21.4116V16.0899C21.4116 16.4299 21.1316 16.7099 20.7916 16.7099H15.6516V14.9999C15.6516 14.7199 15.4316 14.4999 15.1516 14.4999H8.87156C8.59156 14.4999 8.37156 14.7199 8.37156 14.9999V16.7099H3.23156C2.89156 16.7099 2.61156 16.4299 2.61156 16.0899V15.6699H4.89156C5.78156 15.6699 6.50156 14.9499 6.50156 14.0599V13.4199C6.50156 12.5299 5.78156 11.8099 4.89156 11.8099H3.67156C3.39156 11.8099 3.17156 12.0299 3.17156 12.3099C3.17156 12.5899 3.39156 12.8099 3.67156 12.8099H4.89156C5.22156 12.8099 5.50156 13.0799 5.50156 13.4199V14.0599C5.50156 14.3899 5.23156 14.6699 4.89156 14.6699H2.61156V13.2199C2.61156 12.6299 2.82156 12.0699 3.21156 11.6199H3.20156ZM6.17156 18.6199C6.17156 18.8999 5.95156 19.1199 5.67156 19.1199H3.95156C3.67156 19.1199 3.45156 18.8999 3.45156 18.6199V17.6999H6.17156V18.6199ZM9.36156 16.6999V15.4899H14.6416V16.6999H9.36156ZM20.5516 18.6199C20.5516 18.8999 20.3316 19.1199 20.0516 19.1199H18.3316C18.0516 19.1199 17.8316 18.8999 17.8316 18.6199V17.6999H20.5516V18.6199Z" fill="#969FB7" />
                        <path d="M5.98828 9.95996H18.0083C18.2883 9.95996 18.5083 9.73996 18.5083 9.45996C18.5083 9.17996 18.2883 8.95996 18.0083 8.95996H5.98828C5.70828 8.95996 5.48828 9.17996 5.48828 9.45996C5.48828 9.73996 5.70828 9.95996 5.98828 9.95996Z" fill="#969FB7" />
                        <path d="M16.0902 11.8H7.91016C7.63016 11.8 7.41016 12.02 7.41016 12.3C7.41016 12.58 7.63016 12.8 7.91016 12.8H16.0902C16.3702 12.8 16.5902 12.58 16.5902 12.3C16.5902 12.02 16.3702 11.8 16.0902 11.8Z" fill="#969FB7" />
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
                          <path d="M21.5219 4.23449C22.9144 2.59551 21.7019 -0.0187419 19.531 0.000101792C17.3604 -0.0187888 16.1476 2.59593 17.5403 4.23449C16.0727 4.96789 15.0624 6.48528 15.0624 8.23446V9.50289C14.7451 9.20378 14.3846 8.95005 13.9907 8.75322C15.3832 7.11424 14.1707 4.49999 11.9999 4.51883C9.82923 4.49994 8.61639 7.11467 10.0091 8.75322C8.54153 9.48663 7.53119 11.004 7.53119 12.7532V14.0216C7.21389 13.7225 6.85338 13.4688 6.45949 13.272C7.852 11.633 6.63954 9.01872 4.46867 9.03757C2.29804 9.01867 1.0852 11.6334 2.47794 13.272C1.01034 14.0054 0 15.5227 0 17.2719V18.025C0 18.9976 0.631591 19.8254 1.50623 20.1197V23.2969C1.50623 23.6852 1.82104 24 2.20935 24H6.72808C7.11639 24 7.43121 23.6852 7.43121 23.2969V20.1197C8.3792 19.8103 9.01145 18.8558 8.93743 17.8237C8.97043 17.8366 9.00367 17.849 9.03742 17.8604V23.2969C9.03742 23.6852 9.35223 24 9.74054 24H14.2593C14.6476 24 14.9624 23.6852 14.9624 23.2969V17.8603C15.9101 17.551 16.5424 16.597 16.4686 15.5652C16.5016 15.5781 16.5349 15.5906 16.5686 15.6019V23.2969C16.5686 23.6852 16.8834 24 17.2717 24H21.7905C22.1788 24 22.4936 23.6852 22.4936 23.2969V15.6019C23.3682 15.3076 23.9998 14.4798 23.9998 13.5072V8.23446C23.9999 6.48528 22.9895 4.96789 21.5219 4.23449ZM4.46867 10.4438C5.11915 10.4438 5.64837 10.973 5.64837 11.6235C5.58907 13.1864 3.34808 13.1859 3.28902 11.6235C3.28902 10.973 3.81819 10.4438 4.46867 10.4438ZM7.53119 18.025C7.53119 18.4678 7.17091 18.8281 6.72808 18.8281C6.33977 18.8281 6.02496 19.1429 6.02496 19.5312V22.5937H2.91247V19.5312C2.91247 19.1429 2.59766 18.8281 2.20935 18.8281C1.76652 18.8281 1.40624 18.4678 1.40624 18.025V17.2719C1.40624 15.5833 2.7801 14.2095 4.46872 14.2095C6.15733 14.2095 7.53119 15.5833 7.53119 17.2719V18.025ZM11.9999 5.92508C12.6504 5.92508 13.1796 6.45429 13.1796 7.10478C13.1203 8.66763 10.8793 8.66721 10.8203 7.10478C10.8202 6.45429 11.3494 5.92508 11.9999 5.92508ZM15.0624 15.7656C15.0624 16.2085 14.7021 16.5688 14.2593 16.5688C13.871 16.5688 13.5561 16.8836 13.5561 17.2719V22.5937H10.4437V17.2719C10.4437 16.8836 10.1288 16.5688 9.74054 16.5688C9.29771 16.5688 8.93743 16.2085 8.93743 15.7656V12.7531C9.09067 8.69716 14.9088 8.6959 15.0624 12.7532C15.0624 12.7532 15.0624 15.7656 15.0624 15.7656ZM19.5311 1.40635C20.1816 1.40635 20.7108 1.93556 20.7108 2.58604C20.6515 4.1489 18.4105 4.14848 18.3514 2.58604C18.3514 1.93556 18.8806 1.40635 19.5311 1.40635ZM22.5936 13.5072C22.5936 13.95 22.2333 14.3103 21.7905 14.3103C21.4022 14.3103 21.0874 14.6251 21.0874 15.0134V22.5938H17.9749V15.0134C17.9749 14.6251 17.6601 14.3103 17.2718 14.3103C16.8289 14.3103 16.4687 13.95 16.4687 13.5072V8.23446C16.6215 4.17927 22.4397 4.17651 22.5937 8.23451C22.5936 8.23446 22.5936 13.5072 22.5936 13.5072Z" fill="#969FB7" />
                        </g>
                        <defs>
                          <clipPath id="clip0_10061_17562">
                            <rect width="24" height="24" fill="white" />
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
                      <path d="M9.58464 17.5001C13.9569 17.5001 17.5013 13.9557 17.5013 9.58341C17.5013 5.21116 13.9569 1.66675 9.58464 1.66675C5.21238 1.66675 1.66797 5.21116 1.66797 9.58341C1.66797 13.9557 5.21238 17.5001 9.58464 17.5001Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M18.3346 18.3334L16.668 16.6667" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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


  <!-- ==================== Section: CAR Brands Grid ==================== -->
  <section class="section-padding-t">
    <div class="container oy-section-title">
      <div class="row">
        <div class="col-12">
          <div class="text-center">
            <h3 class="text-h2">Your Favorite Car Brands, All in One Place</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row g-4 g-lg-5">
        <!-- Column -->
        <div class="col-md-6 col-lg-4">
          <div class="card--media card--standard">
            <div class="card--media__thumb">
              <img src="{{ asset('/assets-v2/img/brands/banner-aston-martin.png') }}" alt="">
            </div>
            <div class="card-content">
              <div class="text-end">
                <a href="#" class="card-link btn--circle secondary">
                  <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
              <div class="card-information">
                <div class="avatar avatar-md">
                  <img src="{{ asset('/assets-v2/img/brands/logo-aston-martin.png') }}" alt="">
                </div>
                <div>
                  <h3 class="text-h4 fw-medium mb-0">Aston Martin</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-4">
          <div class="card--media card--standard">
            <div class="card--media__thumb">
              <img src="{{ asset('/assets-v2/img/brands/banner-audi.png') }}" alt="">
            </div>
            <div class="card-content">
              <div class="text-end">
                <a href="#" class="card-link btn--circle secondary">
                  <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
              <div class="card-information">
                <div class="avatar avatar-md">
                  <img src="{{ asset('/assets-v2/img/brands/logo-aston-martin.png') }}" alt="">
                </div>
                <div>
                  <h3 class="text-h4 fw-medium mb-0">Aston Martin</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-4">
          <div class="card--media card--standard">
            <div class="card--media__thumb">
              <img src="{{ asset('/assets-v2/img/brands/banner-bmw.png') }}" alt="">
            </div>
            <div class="card-content">
              <div class="text-end">
                <a href="#" class="card-link btn--circle secondary">
                  <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
              <div class="card-information">
                <div class="avatar avatar-md">
                  <img src="{{ asset('/assets-v2/img/brands/logo-bmw.png') }}" alt="">
                </div>
                <div>
                  <h3 class="text-h4 fw-medium mb-0">BMW</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-4">
          <div class="card--media card--standard">
            <div class="card--media__thumb">
              <img src="{{ asset('/assets-v2/img/brands/banner-bentley.png') }}" alt="">
            </div>
            <div class="card-content">
              <div class="text-end">
                <a href="#" class="card-link btn--circle secondary">
                  <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
              <div class="card-information">
                <div class="avatar avatar-md">
                  <img src="{{ asset('/assets-v2/img/brands/logo-bentley.png') }}" alt="">
                </div>
                <div>
                  <h3 class="text-h4 fw-medium mb-0">Bentley</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-4">
          <div class="card--media card--standard">
            <div class="card--media__thumb">
              <img src="{{ asset('/assets-v2/img/brands/banner-aston-martin.png') }}" alt="">
            </div>
            <div class="card-content">
              <div class="text-end">
                <a href="#" class="card-link btn--circle secondary">
                  <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
              <div class="card-information">
                <div class="avatar avatar-md">
                  <img src="{{ asset('/assets-v2/img/brands/logo-aston-martin.png') }}" alt="">
                </div>
                <div>
                  <h3 class="text-h4 fw-medium mb-0">Aston Martin</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-4">
          <div class="card--media card--standard">
            <div class="card--media__thumb">
              <img src="{{ asset('/assets-v2/img/brands/banner-audi.png') }}" alt="">
            </div>
            <div class="card-content">
              <div class="text-end">
                <a href="#" class="card-link btn--circle secondary">
                  <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
              <div class="card-information">
                <div class="avatar avatar-md">
                  <img src="{{ asset('/assets-v2/img/brands/logo-audi.png') }}" alt="">
                </div>
                <div>
                  <h3 class="text-h4 fw-medium mb-0">Aston Martin</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-4">
          <div class="card--media card--standard">
            <div class="card--media__thumb">
              <img src="{{ asset('/assets-v2/img/brands/banner-bmw.png') }}" alt="">
            </div>
            <div class="card-content">
              <div class="text-end">
                <a href="#" class="card-link btn--circle secondary">
                  <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
              <div class="card-information">
                <div class="avatar avatar-md">
                  <img src="{{ asset('/assets-v2/img/brands/logo-bmw.png') }}" alt="">
                </div>
                <div>
                  <h3 class="text-h4 fw-medium mb-0">BMW</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-4">
          <div class="card--media card--standard">
            <div class="card--media__thumb">
              <img src="{{ asset('/assets-v2/img/brands/banner-bentley.png') }}" alt="">
            </div>
            <div class="card-content">
              <div class="text-end">
                <a href="#" class="card-link btn--circle secondary">
                  <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
              <div class="card-information">
                <div class="avatar avatar-md">
                  <img src="{{ asset('/assets-v2/img/brands/logo-bentley.png') }}" alt="">
                </div>
                <div>
                  <h3 class="text-h4 fw-medium mb-0">Bentley</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-4">
          <div class="card--media card--standard">
            <div class="card--media__thumb">
              <img src="{{ asset('/assets-v2/img/brands/banner-aston-martin.png') }}" alt="">
            </div>
            <div class="card-content">
              <div class="text-end">
                <a href="#" class="card-link btn--circle secondary">
                  <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
              <div class="card-information">
                <div class="avatar avatar-md">
                  <img src="{{ asset('/assets-v2/img/brands/logo-aston-martin.png') }}" alt="">
                </div>
                <div>
                  <h3 class="text-h4 fw-medium mb-0">Aston Martin</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-4">
          <div class="card--media card--standard">
            <div class="card--media__thumb">
              <img src="{{ asset('/assets-v2/img/brands/banner-audi.png') }}" alt="">
            </div>
            <div class="card-content">
              <div class="text-end">
                <a href="#" class="card-link btn--circle secondary">
                  <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
              <div class="card-information">
                <div class="avatar avatar-md">
                  <img src="{{ asset('/assets-v2/img/brands/logo-audi.png') }}" alt="">
                </div>
                <div>
                  <h3 class="text-h4 fw-medium mb-0">Aston Martin</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-4">
          <div class="card--media card--standard">
            <div class="card--media__thumb">
              <img src="{{ asset('/assets-v2/img/brands/banner-bmw.png') }}" alt="">
            </div>
            <div class="card-content">
              <div class="text-end">
                <a href="#" class="card-link btn--circle secondary">
                  <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
              <div class="card-information">
                <div class="avatar avatar-md">
                  <img src="{{ asset('/assets-v2/img/brands/logo-bmw.png') }}" alt="">
                </div>
                <div>
                  <h3 class="text-h4 fw-medium mb-0">BMW</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-4">
          <div class="card--media card--standard">
            <div class="card--media__thumb">
              <img src="{{ asset('/assets-v2/img/brands/banner-bentley.png') }}" alt="">
            </div>
            <div class="card-content">
              <div class="text-end">
                <a href="#" class="card-link btn--circle secondary">
                  <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
              <div class="card-information">
                <div class="avatar avatar-md">
                  <img src="{{ asset('/assets-v2/img/brands/logo-bentley.png') }}" alt="">
                </div>
                <div>
                  <h3 class="text-h4 fw-medium mb-0">Bentley</h3>
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
          <path d="M8.77344 5.43582L3.20927 11L8.77344 16.5642" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M18.791 11H3.36352" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </a>
      <!-- Active -->
      <span class="btn--circle text-b1-medium is-active">01</span>

      <a href="#" class="btn--circle text-b1-medium">02</a>
      <a href="#" class="btn--circle text-b1-medium">03</a>
      <a href="#" class="btn--circle text-b1-medium outlined" data-pulse-direction="left">
        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M13.2266 5.43582L18.7907 11L13.2266 16.5642" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M3.20898 11H18.6365" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </a>
    </div>
  </section>
  <!-- /Section: CAR Brands Grid -->


  <!-- ==================== Section: Brand Cars ==================== -->
  <script src="{{ asset('/assets-v2/js/components/oy-swiper.js') }}" defer></script>
  <section class="section-padding-y">
    <div class="container oy-section-title">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="text-center text-lg-start">
            <h3 class="text-h2">Choose From The World’s Most Iconic Brand Cars </h3>
          </div>
        </div>
        <div class="d-none d-lg-block col-lg-6">
          <div class="d-flex align-items-center justify-content-lg-end gap-4">
            <span class="btn--circle outlined" id="oy-slider-journey-arrow--prev" data-pulse-direction="right">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.77344 5.43582L3.20927 11L8.77344 16.5642" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M18.791 11H3.36352" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </span>
            <span class="btn--circle outlined" id="oy-slider-journey-arrow--next" data-pulse-direction="left">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.2266 5.43582L18.7907 11L13.2266 16.5642" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M3.20898 11H18.6365" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
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
            <div class="card card--product h-100">
              <div class="card--product__thumb">
                <img src="{{ asset('/assets-v2/img/products/product-1.png') }}" alt="">
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
                        <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Slider Item -->
          <div class="swiper-slide mb-5">
            <div class="card card--product h-100">
              <div class="card--product__thumb">
                <img src="{{ asset('/assets-v2/img/products/product-2.png') }}" alt="">
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
                        <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Slider Item -->
          <div class="swiper-slide mb-5">
            <div class="card card--product h-100">
              <div class="card--product__thumb">
                <img src="{{ asset('/assets-v2/img/products/product-1.png') }}" alt="">
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
                        <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Slider Item -->
          <div class="swiper-slide mb-5">
            <div class="card card--product h-100">
              <div class="card--product__thumb">
                <img src="{{ asset('/assets-v2/img/products/product-1.png') }}" alt="">
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
                        <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Slider Item -->
          <div class="swiper-slide mb-5">
            <div class="card card--product h-100">
              <div class="card--product__thumb">
                <img src="{{ asset('/assets-v2/img/products/product-2.png') }}" alt="">
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
                        <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Slider Item -->
          <div class="swiper-slide mb-5">
            <div class="card card--product h-100">
              <div class="card--product__thumb">
                <img src="../assets/img/products/product-1.png" alt="">
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
                        <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Slider Item -->
          <div class="swiper-slide mb-5">
            <div class="card card--product h-100">
              <div class="card--product__thumb">
                <img src="{{ asset('/assets-v2/img/products/product-1.png') }}" alt="">
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
                        <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Slider Item -->
          <div class="swiper-slide mb-5">
            <div class="card card--product h-100">
              <div class="card--product__thumb">
                <img src="{{ asset('/assets-v2/img/products/product-2.png') }}" alt="">
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
                        <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Slider Item -->
          <div class="swiper-slide mb-5">
            <div class="card card--product h-100">
              <div class="card--product__thumb">
                <img src="{{ asset('/assets-v2/img/products/product-1.png') }}" alt="">
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
                        <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </a>
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
  <!-- /Section: Brand Cars -->

  <!-- ==================== Section: Marquee Slider ==================== -->
  <script src="{{ asset('/assets-v2/js/components/marquee-slider.js') }}" defer></script>
  <section class="oy-testimonial overflow-hidden">
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
            <img class="item-author__thumb" src="{{ asset('/assets-v2/img/home/r_client1.png') }}" alt="">
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
            <img class="review_ratting__logo" src="{{ asset('/assets-v2/img/home/google.png') }}" alt="">
          </div>
        </div>

        <div class="oy-testimonial-item marquee-item">
          <div class="item-author">
            <img class="item-author__thumb" src="{{ asset('/assets-v2/img/home/r_client2.png') }}" alt="">
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
            <img class="review_ratting__logo" src="{{ asset('/assets-v2/img/home/google.png') }}" alt="">
          </div>
        </div>
        <div class="oy-testimonial-item marquee-item">
          <div class="item-author">
            <img class="item-author__thumb" src="{{ asset('/assets-v2/img/home/r_client3.png') }}" alt="">
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
            <img class="review_ratting__logo" src="{{ asset('/assets-v2/img/home/google.png') }}" alt="">
          </div>
        </div>
        <div class="oy-testimonial-item marquee-item">
          <div class="item-author">
            <img class="item-author__thumb" src="{{ asset('/assets-v2/img/home/r_client4.png') }}" alt="">
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
            <img class="review_ratting__logo" src="{{ asset('/assets-v2/img/home/google.png') }}" alt="">
          </div>
        </div>
        <div class="oy-testimonial-item marquee-item">
          <div class="item-author">
            <img class="item-author__thumb" src="{{ asset('/assets-v2/img/home/r_client7.png') }}" alt="">
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
            <img class="review_ratting__logo" src="{{ asset('/assets-v2/img/home/google.png') }}" alt="">
          </div>
        </div>
        <div class="oy-testimonial-item marquee-item">
          <div class="item-author">
            <img class="item-author__thumb" src="{{ asset('/assets-v2/img/home/r_client6.png') }}" alt="">
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
            <img class="review_ratting__logo" src="{{ asset('/assets-v2/img/home/google.png') }}" alt="">
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
              <img class="item-author__thumb" src="{{ asset('/assets-v2/img/home/r_client1.png') }}" alt="">
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
              <img class="review_ratting__logo" src="{{ asset('/assets-v2/img/home/google.png') }}" alt="">
            </div>
          </div>
          <div class="oy-testimonial-item marquee-item">
            <div class="item-author">
              <img class="item-author__thumb" src="{{ asset('/assets-v2/img/home/r_client2.png') }}" alt="">
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
              <img class="review_ratting__logo" src="{{ asset('/assets-v2/img/home/google.png') }}" alt="">
            </div>
          </div>
          <div class="oy-testimonial-item marquee-item">
            <div class="item-author">
              <img class="item-author__thumb" src="{{ asset('/assets-v2/img/home/r_client3.png') }}" alt="">
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
              <img class="review_ratting__logo" src="{{ asset('/assets-v2/img/home/google.png') }}" alt="">
            </div>
          </div>
          <div class="oy-testimonial-item marquee-item">
            <div class="item-author">
              <img class="item-author__thumb" src="{{ asset('/assets-v2/img/home/r_client4.png') }}" alt="">
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
              <img class="review_ratting__logo" src="{{ asset('/assets-v2/img/home/google.png') }}" alt="">
            </div>
          </div>
          <div class="oy-testimonial-item marquee-item">
            <div class="item-author">
              <img class="item-author__thumb" src="{{ asset('/assets-v2/img/home/r_client7.png') }}" alt="">
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
              <img class="review_ratting__logo" src="{{ asset('/assets-v2/img/home/google.png') }}" alt="">
            </div>
          </div>
          <div class="oy-testimonial-item marquee-item">
            <div class="item-author">
              <img class="item-author__thumb" src="{{ asset('/assets-v2/img/home/r_client6.png') }}" alt="">
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
              <img class="review_ratting__logo" src="{{ asset('/assets-v2/img/home/google.png') }}" alt="">
            </div>
          </div>
        </div>
    </div>
    </div>
  </section>
  <!-- /Section: Marquee Slider -->

  <!-- ==================== Section: OUR Fleet Slider ==================== -->
  <script src="{{ asset('/assets-v2/js/components/oy-swiper.js') }}" defer></script>
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
                <path d="M8.77344 5.43582L3.20927 11L8.77344 16.5642" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M18.791 11H3.36352" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </span>
            <span class="btn--circle outlined" id="oy-slider-journey-arrow--next" data-pulse-direction="left">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.2266 5.43582L18.7907 11L13.2266 16.5642" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M3.20898 11H18.6365" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
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
                <img src="{{ asset('/assets-v2/img/brands/banner-aston-martin.png') }}" alt="">
              </div>
              <div class="card-content">
                <div class="text-end">
                  <a href="#" class="card-link btn--circle secondary">
                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </a>
                </div>
                <div class="card-information">
                  <div class="avatar avatar-md">
                    <img src="{{ asset('/assets-v2/img/brands/logo-aston-martin.png') }}" alt="">
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
                <img src="{{ asset('/assets-v2/img/brands/banner-audi.png') }}" alt="">
              </div>
              <div class="card-content">
                <div class="text-end">
                  <a href="#" class="card-link btn--circle secondary">
                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </a>
                </div>
                <div class="card-information">
                  <div class="avatar avatar-md">
                    <img src="{{ asset('/assets-v2/img/brands/logo-audi.png') }}" alt="">
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
                <img src="{{ asset('/assets-v2/img/brands/banner-bmw.png') }}" alt="">
              </div>
              <div class="card-content">
                <div class="text-end">
                  <a href="#" class="card-link btn--circle secondary">
                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
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
                <img src="{{ asset('/assets-v2/img/brands/banner-bentley.png') }}" alt="">
              </div>
              <div class="card-content">
                <div class="text-end">
                  <a href="#" class="card-link btn--circle secondary">
                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </a>
                </div>
                <div class="card-information">
                  <div class="avatar avatar-md">
                    <img src="{{ asset('/assets-v2/img/brands/logo-bentley.png') }}" alt="">
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
                <img src="{{ asset('/assets-v2/img/brands/banner-aston-martin.png') }}" alt="">
              </div>
              <div class="card-content">
                <div class="text-end">
                  <a href="#" class="card-link btn--circle secondary">
                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </a>
                </div>
                <div class="card-information">
                  <div class="avatar avatar-md">
                    <img src="{{ asset('/assets-v2/img/brands/logo-aston-martin.png') }}" alt="">
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
                <img src="{{ asset('/assets-v2/img/brands/banner-audi.png') }}" alt="">
              </div>
              <div class="card-content">
                <div class="text-end">
                  <a href="#" class="card-link btn--circle secondary">
                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
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
                <img src="{{ asset('/assets-v2/img/brands/banner-bmw.png') }}" alt="">
              </div>
              <div class="card-content">
                <div class="text-end">
                  <a href="#" class="card-link btn--circle secondary">
                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </a>
                </div>
                <div class="card-information">
                  <div class="avatar-md">
                    <img src="{{ asset('/assets-v2/img/brands/logo-bmw.png') }}" alt="">
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
                <img src="{{ asset('/assets-v2/img/brands/banner-bentley.png') }}" alt="">
              </div>
              <div class="card-content">
                <div class="text-end">
                  <a href="#" class="card-link btn--circle secondary">
                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.4219 10.9791L23.0209 10.9791L23.0209 19.5781" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M10.9766 23.0206L22.8977 11.0995" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </a>
                </div>
                <div class="card-information">
                  <div class="avatar avatar-md">
                    <img src="{{ asset('/assets-v2/img/brands/logo-bentley.png') }}" alt="">
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
  <!-- /Section: OUR Fleet Slider -->

  <!-- ==================== Section: Footer ==================== -->
  <footer class="oy-footer">
    <div class="container-fluid px-3 px-lg-5">
      <div class="bg-dark rounded-6 overflow-hidden">
        <!-- ==================== Subsection: Footer TOP ==================== -->
        <div class="oy-footer-top bg-dark-light">
          <div class="container px-4">
            <div class="row text-center text-lg-start gy-5 justify-content-between">
              <div class="col-12 col-lg-auto">
                <a href="#" class="img-fluid"><img src="{{ asset('/assets-v2/img/header/logo-light.svg') }}" alt=""></a>
              </div>
              <div class="col-12 col-lg-auto">
                <div class="d-flex flex-wrap gap-4">
                  <a class="btn btn--gradient-primary" href="#">
                    <span class="btn__text">View Fleet</span>
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </a>
                  <a class="btn btn--outline-light" href="#">
                    <span class="btn__text">Get a Quote</span>
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Subsection: Footer TOP -->


        <!-- ==================== Subsection: Footer Middle ==================== -->
        <div class="oy-footer-middle">
          <div class="container">
            <div class="row gy-4 accordion" id="accordionFooter">
              <div class="col-sm-6 col-lg-3 col-xl-2">
                <div class="footer-widget footer-widget-list d-none d-md-block">
                  <h5 class="text-b3-semibold text-white mb-4">The Company</h5>
                  <ul class="oy-footer__menu list-unstyled">
                    <li><a href="#" class="oy-footer__menu-link">About Autofusion</a></li>
                    <li><a href="#" class="oy-footer__menu-link">Francise Opportunity</a></li>
                    <li><a href="#" class="oy-footer__menu-link">Careers</a></li>
                  </ul>
                  <h5 class="text-b3-semibold text-white mb-4 mt-4">Reservations</h5>
                  <ul class="oy-footer__menu list-unstyled">
                    <li><a href="#" class="oy-footer__menu-link">My Account</a></li>
                    <li><a href="#" class="oy-footer__menu-link">Hiring Process</a></li>
                    <li><a href="#" class="oy-footer__menu-link">Book Now</a></li>
                    <li><a href="#" class="oy-footer__menu-link">Car Hire Locations</a></li>
                  </ul>
                </div>


                <!-- Mobile: Start Widget -->
                <div class="d-flex d-md-none flex-column gap-4 flex-fill">
                  <div class="footer-widget footer-widget-list accordion-item accordion--style-3 flex-fill">
                    <h2 class="accordion-header">
                      <button class="accordion-button text-b5-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-fw-1" aria-expanded="false" aria-controls="collapse-fw-1">
                        The Company
                      </button>
                    </h2>
                    <div id="collapse-fw-1" class="accordion-collapse collapse" data-bs-parent="#accordionFooter">
                      <div class="accordion-body">
                        <ul class="oy-footer__menu list-unstyled">
                          <li><a href="#" class="oy-footer__menu-link">About Autofusion</a></li>
                          <li><a href="#" class="oy-footer__menu-link">Francise Opportunity</a></li>
                          <li><a href="#" class="oy-footer__menu-link">Careers</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="footer-widget footer-widget-list accordion-item accordion--style-3">
                    <h2 class="accordion-header">
                      <button class="accordion-button text-b5-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-fw-2" aria-expanded="false" aria-controls="collapse-fw-2">
                        Reservations
                      </button>
                    </h2>
                    <div id="collapse-fw-2" class="accordion-collapse collapse" data-bs-parent="#accordionFooter">
                      <div class="accordion-body">
                        <ul class="oy-footer__menu list-unstyled">
                          <li><a href="#" class="oy-footer__menu-link">My Account</a></li>
                          <li><a href="#" class="oy-footer__menu-link">Hiring Process</a></li>
                          <li><a href="#" class="oy-footer__menu-link">Book Now</a></li>
                          <li><a href="#" class="oy-footer__menu-link">Car Hire Locations</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Mobile: END Widget -->
              </div>
              <div class="col-sm-6 col-lg-3 col-xl-2">
                <div class="footer-widget footer-widget-list d-none d-md-block">
                  <h5 class="text-b3-semibold text-white mb-4">Services</h5>
                  <ul class="oy-footer__menu list-unstyled">
                    <li><a href="#" class="oy-footer__menu-link">Supercar Hire</a></li>
                    <li><a href="#" class="oy-footer__menu-link">Luxury Car Hire</a></li>
                    <li><a href="#" class="oy-footer__menu-link">Wedding Car Hire</a></li>
                    <li><a href="#" class="oy-footer__menu-link">Long Term Car Rental</a></li>
                    <li><a href="#" class="oy-footer__menu-link">Business Car Hire</a></li>
                    <li><a href="#" class="oy-footer__menu-link">Events Car Hire</a></li>
                    <li><a href="#" class="oy-footer__menu-link">Photo Shoots Car Hire</a></li>
                    <li><a href="#" class="oy-footer__menu-link">Music Video Car Hire</a></li>
                  </ul>
                </div>

                <!-- Mobile: Start Widget -->
                <div class="d-flex d-md-none flex-column gap-4 flex-fill">
                  <div class="footer-widget footer-widget-list accordion-item accordion--style-3 flex-fill">
                    <h2 class="accordion-header">
                      <button class="accordion-button text-b5-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-fw-3" aria-expanded="false" aria-controls="collapse-fw-3">
                        Services
                      </button>
                    </h2>
                    <div id="collapse-fw-3" class="accordion-collapse collapse" data-bs-parent="#accordionFooter">
                      <div class="accordion-body">
                        <ul class="oy-footer__menu list-unstyled">
                          <li><a href="#" class="oy-footer__menu-link">Supercar Hire</a></li>
                          <li><a href="#" class="oy-footer__menu-link">Luxury Car Hire</a></li>
                          <li><a href="#" class="oy-footer__menu-link">Wedding Car Hire</a></li>
                          <li><a href="#" class="oy-footer__menu-link">Long Term Car Rental</a></li>
                          <li><a href="#" class="oy-footer__menu-link">Business Car Hire</a></li>
                          <li><a href="#" class="oy-footer__menu-link">Events Car Hire</a></li>
                          <li><a href="#" class="oy-footer__menu-link">Photo Shoots Car Hire</a></li>
                          <li><a href="#" class="oy-footer__menu-link">Music Video Car Hire</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Mobile: END Widget -->
              </div>
              <div class="col-sm-6 col-lg-3 col-xl-2">
                <div class="footer-widget footer-widget-list d-none d-md-block">
                  <h5 class="text-b3-semibold text-white mb-4">Vehicle Brands</h5>
                  <ul class="oy-footer__menu list-unstyled">
                    <li><a href="#" class="oy-footer__menu-link">Lamborghini</a></li>
                    <li><a href="#" class="oy-footer__menu-link">Mercedes</a></li>
                    <li><a href="#" class="oy-footer__menu-link">Ferrari</a></li>
                    <li><a href="#" class="oy-footer__menu-link">BMW</a></li>
                    <li><a href="#" class="oy-footer__menu-link">Rolls Royce</a></li>
                    <li><a href="#" class="oy-footer__menu-link">Porsche</a></li>
                    <li><a href="#" class="oy-footer__menu-link">Land Rover</a></li>
                  </ul>
                  <a href="#" class="oy-footer__menu-more">Learn More</a>
                </div>
                <!-- Mobile: Start Widget -->
                <div class="d-flex d-md-none flex-column gap-4 flex-fill">
                  <div class="footer-widget footer-widget-list accordion-item accordion--style-3 flex-fill">
                    <h2 class="accordion-header">
                      <button class="accordion-button text-b5-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-fw-4" aria-expanded="false" aria-controls="collapse-fw-4">
                        Vehicle Brands
                      </button>
                    </h2>
                    <div id="collapse-fw-4" class="accordion-collapse collapse" data-bs-parent="#accordionFooter">
                      <div class="accordion-body">
                        <ul class="oy-footer__menu list-unstyled">
                          <li><a href="#" class="oy-footer__menu-link">Lamborghini</a></li>
                          <li><a href="#" class="oy-footer__menu-link">Mercedes</a></li>
                          <li><a href="#" class="oy-footer__menu-link">Ferrari</a></li>
                          <li><a href="#" class="oy-footer__menu-link">BMW</a></li>
                          <li><a href="#" class="oy-footer__menu-link">Rolls Royce</a></li>
                          <li><a href="#" class="oy-footer__menu-link">Porsche</a></li>
                          <li><a href="#" class="oy-footer__menu-link">Land Rover</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Mobile: END Widget -->
              </div>
              <div class="col-sm-6 col-lg-3 col-xl-2">
                <div class="footer-widget footer-widget-list d-none d-md-block">
                  <h5 class="text-b3-semibold text-white mb-4">Vehicle Types</h5>
                  <ul class="oy-footer__menu list-unstyled">
                    <li><a href="#">Every-Day Cars</a></li>
                    <li><a href="#">Luxury Cars</a></li>
                    <li><a href="#">Performance Cars</a></li>
                    <li><a href="#">Supercars</a></li>
                  </ul>
                  <h5 class="text-b3-semibold text-white mb-4 mt-4">Contact Info.</h5>
                  <ul class="list-unstyled contact-list">
                    <li><a href="tel:01412375050">
                        <span class="contact-list__svg">
                          <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.7">
                              <path d="M13.215 8.0627C12.8925 8.0627 12.6375 7.80019 12.6375 7.4852C12.6375 7.2077 12.36 6.6302 11.895 6.1277C11.4375 5.6402 10.935 5.3552 10.515 5.3552C10.1925 5.3552 9.9375 5.0927 9.9375 4.7777C9.9375 4.4627 10.2 4.2002 10.515 4.2002C11.265 4.2002 12.0525 4.6052 12.7425 5.3327C13.3875 6.0152 13.8 6.8627 13.8 7.4777C13.8 7.8002 13.5375 8.0627 13.215 8.0627Z" fill="currentColor" />
                              <path d="M15.9228 8.0625C15.6003 8.0625 15.3453 7.8 15.3453 7.485C15.3453 4.8225 13.1778 2.6625 10.5228 2.6625C10.2003 2.6625 9.94531 2.4 9.94531 2.085C9.94531 1.77 10.2003 1.5 10.5153 1.5C13.8153 1.5 16.5003 4.185 16.5003 7.485C16.5003 7.8 16.2378 8.0625 15.9228 8.0625Z" fill="currentColor" />
                              <path d="M8.2875 11.2125L6.9 12.6C6.6075 12.8925 6.1425 12.8925 5.8425 12.6075C5.76 12.525 5.6775 12.45 5.595 12.3675C4.8225 11.5875 4.125 10.77 3.5025 9.915C2.8875 9.06 2.3925 8.205 2.0325 7.3575C1.68 6.5025 1.5 5.685 1.5 4.905C1.5 4.395 1.59 3.9075 1.77 3.4575C1.95 3 2.235 2.58 2.6325 2.205C3.1125 1.7325 3.6375 1.5 4.1925 1.5C4.4025 1.5 4.6125 1.545 4.8 1.635C4.995 1.725 5.1675 1.86 5.3025 2.055L7.0425 4.5075C7.1775 4.695 7.275 4.8675 7.3425 5.0325C7.41 5.19 7.4475 5.3475 7.4475 5.49C7.4475 5.67 7.395 5.85 7.29 6.0225C7.1925 6.195 7.05 6.375 6.87 6.555L6.3 7.1475C6.2175 7.23 6.18 7.3275 6.18 7.4475C6.18 7.5075 6.1875 7.56 6.2025 7.62C6.225 7.68 6.2475 7.725 6.2625 7.77C6.3975 8.0175 6.63 8.34 6.96 8.73C7.2975 9.12 7.6575 9.5175 8.0475 9.915C8.1225 9.99 8.205 10.065 8.28 10.14C8.58 10.4325 8.5875 10.9125 8.2875 11.2125Z" fill="currentColor" />
                              <path d="M16.4767 13.7473C16.4767 13.9573 16.4392 14.1748 16.3642 14.3848C16.3417 14.4448 16.3192 14.5048 16.2892 14.5648C16.1617 14.8348 15.9967 15.0898 15.7792 15.3298C15.4117 15.7348 15.0067 16.0273 14.5492 16.2148C14.5417 16.2148 14.5342 16.2223 14.5267 16.2223C14.0842 16.4023 13.6042 16.4998 13.0867 16.4998C12.3217 16.4998 11.5042 16.3198 10.6417 15.9523C9.77922 15.5848 8.91672 15.0898 8.06172 14.4673C7.76922 14.2498 7.47672 14.0323 7.19922 13.7998L9.65172 11.3473C9.86172 11.5048 10.0492 11.6248 10.2067 11.7073C10.2442 11.7223 10.2892 11.7448 10.3417 11.7673C10.4017 11.7898 10.4617 11.7973 10.5292 11.7973C10.6567 11.7973 10.7542 11.7523 10.8367 11.6698L11.4067 11.1073C11.5942 10.9198 11.7742 10.7773 11.9467 10.6873C12.1192 10.5823 12.2917 10.5298 12.4792 10.5298C12.6217 10.5298 12.7717 10.5598 12.9367 10.6273C13.1017 10.6948 13.2742 10.7923 13.4617 10.9198L15.9442 12.6823C16.1392 12.8173 16.2742 12.9748 16.3567 13.1623C16.4317 13.3498 16.4767 13.5373 16.4767 13.7473Z" fill="currentColor" />
                            </g>
                          </svg>
                        </span>
                        <span>0141 237 5050</span></a></li>
                    <li><a href="mailto:enquiries@autofusionhire.co.uk">
                        <span class="contact-list__svg">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.7">
                              <path d="M14.168 2.9165H5.83464C3.33464 2.9165 1.66797 4.1665 1.66797 7.08317V12.9165C1.66797 15.8332 3.33464 17.0832 5.83464 17.0832H14.168C16.668 17.0832 18.3346 15.8332 18.3346 12.9165V7.08317C18.3346 4.1665 16.668 2.9165 14.168 2.9165ZM14.5596 7.9915L11.9513 10.0748C11.4013 10.5165 10.7013 10.7332 10.0013 10.7332C9.3013 10.7332 8.59297 10.5165 8.0513 10.0748L5.44297 7.9915C5.1763 7.77484 5.13464 7.37484 5.34297 7.10817C5.55964 6.8415 5.9513 6.7915 6.21797 7.00817L8.8263 9.0915C9.45964 9.59984 10.5346 9.59984 11.168 9.0915L13.7763 7.00817C14.043 6.7915 14.443 6.83317 14.6513 7.10817C14.868 7.37484 14.8263 7.77484 14.5596 7.9915Z" fill="currentColor" />
                            </g>
                          </svg>
                        </span>
                        <span>enquiries@autofusionhire.co.uk</span>
                      </a></li>
                  </ul>
                </div>
                <!-- Mobile: Start Widget -->
                <div class="d-flex d-md-none flex-column gap-4 flex-fill">
                  <div class="footer-widget footer-widget-list accordion-item accordion--style-3 flex-fill">
                    <h2 class="accordion-header">
                      <button class="accordion-button text-b5-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-fw-5" aria-expanded="false" aria-controls="collapse-fw-5">
                        Vehicle Types
                      </button>
                    </h2>
                    <div id="collapse-fw-5" class="accordion-collapse collapse" data-bs-parent="#accordionFooter">
                      <div class="accordion-body">
                        <ul class="oy-footer__menu list-unstyled">
                          <li><a href="#">Every-Day Cars</a></li>
                          <li><a href="#">Luxury Cars</a></li>
                          <li><a href="#">Performance Cars</a></li>
                          <li><a href="#">Supercars</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="footer-widget footer-widget-list accordion-item accordion--style-3 flex-fill">
                    <h2 class="accordion-header">
                      <button class="accordion-button text-b5-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-fw-6" aria-expanded="false" aria-controls="collapse-fw-6">
                        Contact Info.
                      </button>
                    </h2>
                    <div id="collapse-fw-6" class="accordion-collapse collapse" data-bs-parent="#accordionFooter">
                      <div class="accordion-body">
                        <ul class="list-unstyled contact-list">
                          <li><a href="tel:01412375050">
                              <span class="contact-list__svg">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <g opacity="0.7">
                                    <path d="M13.215 8.0627C12.8925 8.0627 12.6375 7.80019 12.6375 7.4852C12.6375 7.2077 12.36 6.6302 11.895 6.1277C11.4375 5.6402 10.935 5.3552 10.515 5.3552C10.1925 5.3552 9.9375 5.0927 9.9375 4.7777C9.9375 4.4627 10.2 4.2002 10.515 4.2002C11.265 4.2002 12.0525 4.6052 12.7425 5.3327C13.3875 6.0152 13.8 6.8627 13.8 7.4777C13.8 7.8002 13.5375 8.0627 13.215 8.0627Z" fill="currentColor" />
                                    <path d="M15.9228 8.0625C15.6003 8.0625 15.3453 7.8 15.3453 7.485C15.3453 4.8225 13.1778 2.6625 10.5228 2.6625C10.2003 2.6625 9.94531 2.4 9.94531 2.085C9.94531 1.77 10.2003 1.5 10.5153 1.5C13.8153 1.5 16.5003 4.185 16.5003 7.485C16.5003 7.8 16.2378 8.0625 15.9228 8.0625Z" fill="currentColor" />
                                    <path d="M8.2875 11.2125L6.9 12.6C6.6075 12.8925 6.1425 12.8925 5.8425 12.6075C5.76 12.525 5.6775 12.45 5.595 12.3675C4.8225 11.5875 4.125 10.77 3.5025 9.915C2.8875 9.06 2.3925 8.205 2.0325 7.3575C1.68 6.5025 1.5 5.685 1.5 4.905C1.5 4.395 1.59 3.9075 1.77 3.4575C1.95 3 2.235 2.58 2.6325 2.205C3.1125 1.7325 3.6375 1.5 4.1925 1.5C4.4025 1.5 4.6125 1.545 4.8 1.635C4.995 1.725 5.1675 1.86 5.3025 2.055L7.0425 4.5075C7.1775 4.695 7.275 4.8675 7.3425 5.0325C7.41 5.19 7.4475 5.3475 7.4475 5.49C7.4475 5.67 7.395 5.85 7.29 6.0225C7.1925 6.195 7.05 6.375 6.87 6.555L6.3 7.1475C6.2175 7.23 6.18 7.3275 6.18 7.4475C6.18 7.5075 6.1875 7.56 6.2025 7.62C6.225 7.68 6.2475 7.725 6.2625 7.77C6.3975 8.0175 6.63 8.34 6.96 8.73C7.2975 9.12 7.6575 9.5175 8.0475 9.915C8.1225 9.99 8.205 10.065 8.28 10.14C8.58 10.4325 8.5875 10.9125 8.2875 11.2125Z" fill="currentColor" />
                                    <path d="M16.4767 13.7473C16.4767 13.9573 16.4392 14.1748 16.3642 14.3848C16.3417 14.4448 16.3192 14.5048 16.2892 14.5648C16.1617 14.8348 15.9967 15.0898 15.7792 15.3298C15.4117 15.7348 15.0067 16.0273 14.5492 16.2148C14.5417 16.2148 14.5342 16.2223 14.5267 16.2223C14.0842 16.4023 13.6042 16.4998 13.0867 16.4998C12.3217 16.4998 11.5042 16.3198 10.6417 15.9523C9.77922 15.5848 8.91672 15.0898 8.06172 14.4673C7.76922 14.2498 7.47672 14.0323 7.19922 13.7998L9.65172 11.3473C9.86172 11.5048 10.0492 11.6248 10.2067 11.7073C10.2442 11.7223 10.2892 11.7448 10.3417 11.7673C10.4017 11.7898 10.4617 11.7973 10.5292 11.7973C10.6567 11.7973 10.7542 11.7523 10.8367 11.6698L11.4067 11.1073C11.5942 10.9198 11.7742 10.7773 11.9467 10.6873C12.1192 10.5823 12.2917 10.5298 12.4792 10.5298C12.6217 10.5298 12.7717 10.5598 12.9367 10.6273C13.1017 10.6948 13.2742 10.7923 13.4617 10.9198L15.9442 12.6823C16.1392 12.8173 16.2742 12.9748 16.3567 13.1623C16.4317 13.3498 16.4767 13.5373 16.4767 13.7473Z" fill="currentColor" />
                                  </g>
                                </svg>
                              </span>
                              <span>0141 237 5050</span></a></li>
                          <li><a href="mailto:enquiries@autofusionhire.co.uk">
                              <span class="contact-list__svg">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <g opacity="0.7">
                                    <path d="M14.168 2.9165H5.83464C3.33464 2.9165 1.66797 4.1665 1.66797 7.08317V12.9165C1.66797 15.8332 3.33464 17.0832 5.83464 17.0832H14.168C16.668 17.0832 18.3346 15.8332 18.3346 12.9165V7.08317C18.3346 4.1665 16.668 2.9165 14.168 2.9165ZM14.5596 7.9915L11.9513 10.0748C11.4013 10.5165 10.7013 10.7332 10.0013 10.7332C9.3013 10.7332 8.59297 10.5165 8.0513 10.0748L5.44297 7.9915C5.1763 7.77484 5.13464 7.37484 5.34297 7.10817C5.55964 6.8415 5.9513 6.7915 6.21797 7.00817L8.8263 9.0915C9.45964 9.59984 10.5346 9.59984 11.168 9.0915L13.7763 7.00817C14.043 6.7915 14.443 6.83317 14.6513 7.10817C14.868 7.37484 14.8263 7.77484 14.5596 7.9915Z" fill="currentColor" />
                                  </g>
                                </svg>
                              </span>
                              <span>enquiries@autofusionhire.co.uk</span>
                            </a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Mobile: END Widget -->
              </div>
              <div class="col-sm-6 col-lg-6 col-xl-3">
                <div class="footer-widget footer-widget-subscribe">
                  <h4 class="text-h5 text-white mb-5">Don't miss out on our offers! Sign up for deals!</h4>
                  <form action="#" class="oy-footer-newsletter rounded-5 p-5 bg-white bg-opacity-10">
                    <div>
                      <input type="email" id="email" class="form-control" placeholder="Email Address" required>
                    </div>
                    <button type="submit" class="btn btn--gradient-primary w-100">
                      <span class="btn__text">Subscribe</span>
                      <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- /Subsection: Footer Middle -->

        <!-- ==================== Subsection: Footer Utility ==================== -->
        <div class="oy-footer-utility bg-dark-light">
          <div class="container">
            <div class="row align-items-center gy-5">
              <div class="col-12 col-lg-4 order-0 order-lg-1">
                <div class="social-list">
                  <!-- Social: Facebook -->
                  <a class="social-list__item" href="#"><svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="28" cy="28" r="28" fill="currentColor" fill-opacity="0.1" />
                      <path d="M29.9144 40.349V29.0996H33.7095L34.2736 24.695H29.9144V21.8896C29.9144 20.6186 30.2685 19.7484 32.0926 19.7484H34.404V15.8215C33.2793 15.701 32.1489 15.6428 31.0179 15.6472C27.6634 15.6472 25.3602 17.695 25.3602 21.4545V24.6868H21.5898V29.0913H25.3685V40.349H29.9144Z" fill="currentColor" />
                    </svg>
                  </a>
                  <!-- Social: Instagram -->
                  <a class="social-list__item" href="#">
                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="28" cy="28" r="28" fill="currentColor" fill-opacity="0.1" />
                      <g clip-path="url(#clip0_10061_18863)">
                        <path d="M33.7624 16.4712H22.2333C19.0631 16.4712 16.4688 19.0655 16.4688 22.2358V33.7655C16.4688 36.9348 19.0631 39.53 22.2333 39.53H33.7624C36.9327 39.53 39.527 36.9348 39.527 33.7655V22.2358C39.527 19.0655 36.9327 16.4712 33.7624 16.4712ZM37.6054 33.7655C37.6054 35.8839 35.8821 37.6084 33.7624 37.6084H22.2333C20.1146 37.6084 18.3904 35.8839 18.3904 33.7655V22.2358C18.3904 20.1167 20.1146 18.3928 22.2333 18.3928H33.7624C35.8821 18.3928 37.6054 20.1167 37.6054 22.2358V33.7655Z" fill="currentColor" />
                        <path d="M34.238 23.1972C35.0339 23.1972 35.6792 22.552 35.6792 21.7561C35.6792 20.9602 35.0339 20.3149 34.238 20.3149C33.4421 20.3149 32.7969 20.9602 32.7969 21.7561C32.7969 22.552 33.4421 23.1972 34.238 23.1972Z" fill="currentColor" />
                        <path d="M27.9989 22.2349C24.8146 22.2349 22.2344 24.8154 22.2344 27.9994C22.2344 31.1823 24.8146 33.7646 27.9989 33.7646C31.1824 33.7646 33.7635 31.1823 33.7635 27.9994C33.7635 24.8154 31.1824 22.2349 27.9989 22.2349ZM27.9989 31.8429C25.8767 31.8429 24.156 30.1222 24.156 27.9994C24.156 25.8766 25.8767 24.1565 27.9989 24.1565C30.1212 24.1565 31.8419 25.8766 31.8419 27.9994C31.8419 30.1222 30.1212 31.8429 27.9989 31.8429Z" fill="currentColor" />
                      </g>
                      <defs>
                        <clipPath id="clip0_10061_18863">
                          <rect width="23.0588" height="23.0588" fill="currentColor" transform="translate(16.4688 16.4712)" />
                        </clipPath>
                      </defs>
                    </svg>
                  </a>
                  <!-- Social: Linkedin -->
                  <a class="social-list__item" href="#">
                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="28" cy="28" r="28" fill="currentColor" fill-opacity="0.1" />
                      <path d="M18.6289 16.1602C16.8173 16.1602 15.6328 17.3498 15.6328 18.9133C15.6328 20.4424 16.782 21.6659 18.5594 21.6659H18.5938C20.4408 21.6659 21.5903 20.4424 21.5903 18.9133C21.5558 17.3498 20.4408 16.1602 18.6289 16.1602Z" fill="currentColor" />
                      <path d="M15.9453 23.8408H21.2415V39.7745H15.9453V23.8408Z" fill="currentColor" />
                      <path d="M34.2411 23.4688C31.384 23.4688 29.4682 26.1535 29.4682 26.1535V23.8427H24.1719V39.7764H29.4679V30.8784C29.4679 30.4021 29.5024 29.9264 29.6423 29.5858C30.0252 28.6346 30.8965 27.6492 32.3596 27.6492C34.276 27.6492 35.0425 29.1104 35.0425 31.2524V39.7764H40.3382V30.6403C40.3382 25.7462 37.7253 23.4688 34.2411 23.4688Z" fill="currentColor" />
                    </svg>
                  </a>
                  <!-- Social: Tiktok -->
                  <a class="social-list__item" href="#">
                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="28" cy="28" r="28" fill="currentColor" fill-opacity="0.1" />
                      <path d="M34.0393 20.7902C33.0059 19.5887 32.4645 18.0361 32.5073 16.4554L28.6451 16.3623V16.7492V32.8915C27.6054 37.5252 20.8992 36.3161 21.5705 31.6015C21.9451 29.448 24.2587 28.123 26.315 28.872V24.9314C21.8386 24.1521 17.5964 27.7149 17.641 32.254C18.0322 42.0978 32.1513 42.0993 32.5431 32.254C32.4444 31.9017 32.4995 25.3416 32.4855 24.7883C34.2417 25.881 36.285 26.4271 38.3543 26.3576V22.2876C36.4413 22.2876 34.9813 21.779 34.0393 20.7902Z" fill="currentColor" />
                    </svg>
                  </a>
                  <!-- Social: Youtube -->
                  <a class="social-list__item" href="#">
                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="28" cy="28" r="28" fill="currentColor" fill-opacity="0.1" />
                      <g clip-path="url(#clip0_10061_18881)">
                        <path d="M38.4883 21.3695C37.6671 20.3933 36.1509 19.9951 33.2553 19.9951H22.7445C19.7826 19.9951 18.2408 20.419 17.4226 21.4583C16.625 22.4716 16.625 23.9647 16.625 26.0311V29.9697C16.625 33.9731 17.5714 36.0057 22.7445 36.0057H33.2554C35.7664 36.0057 37.1578 35.6543 38.058 34.7928C38.9811 33.9094 39.375 32.467 39.375 29.9697V26.0311C39.375 23.8519 39.3133 22.35 38.4883 21.3695ZM31.2306 28.5442L26.4576 31.0387C26.3509 31.0945 26.2342 31.1221 26.1177 31.1221C25.9857 31.1221 25.8541 31.0866 25.7375 31.016C25.5179 30.883 25.3838 30.645 25.3838 30.3883V25.4153C25.3838 25.159 25.5175 24.9212 25.7367 24.7881C25.9559 24.655 26.2285 24.6459 26.4559 24.764L31.2289 27.2425C31.4717 27.3685 31.6242 27.6192 31.6246 27.8927C31.6249 28.1665 31.473 28.4175 31.2306 28.5442Z" fill="currentColor" />
                      </g>
                      <defs>
                        <clipPath id="clip0_10061_18881">
                          <rect width="22.75" height="22.75" fill="currentColor" transform="translate(16.625 16.625)" />
                        </clipPath>
                      </defs>
                    </svg>
                  </a>
                </div>
              </div>
              <div class="col-12 col-lg-8 order-1 order-lg-0">
                <div class="oy-footer-utility__content">
                  <ul class="oy-footer-utility__menu list-unstyled justify-content-center justify-content-lg-start mb-4">
                    <li><a href="#">Cookie Policy</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Complaints</a></li>
                    <li><a href="#">Modern Slavery Act Statement</a></li>
                  </ul>
                  <p class="text-white text-opacity-75 text-center text-lg-start mb-0">Copyright © 2025 AUTOFUSION.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Subsection: Footer Utility -->
      </div>
    </div>
  </footer>
  <!-- /Section: Footer -->

  <!-- Bundled JavaScript Libraries (deferred for faster page load) -->
  <!-- Bootstrap JS is now bundled in app.js -->
  <script src="{{ asset('/assets-v2/js/app.js') }}" defer></script>
  <!-- Main Application Script (deferred) -->
  <script src="{{ asset('/assets-v2/js/main.js') }}" defer></script>

</body>

</html>