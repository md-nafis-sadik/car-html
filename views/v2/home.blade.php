<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Auto Fusion HTML Template</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <!-- Preload Critical Resources -->
  <link rel="preload" href="{{ asset('/assets-v2/css/app.css') }}" as="style">
  <link rel="preload" href="{{ asset('/assets-v2/js/app.css') }}" as="script">

  <!-- Stylesheet -->
  <link href="{{ asset('/assets-v2/css/style.css') }}" rel="stylesheet">

  <!-- Preconnect TO CDN -->
  <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
</head>

<body>


  <!-- ==================== Section: Header TOP BAR (Desktop Only) ==================== -->
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
  <!-- /Section: Header TOP BAR (Desktop Only) -->

  <!-- ==================== Section: Header ==================== -->
  <script src="{{ asset('/assets-v2/js/components/header-sticky.js') }}"></script>
  <header class="oy-header">
    <header-sticky data-sticky-start="350" data-sticky-offset="0">
      <nav class="navbar bg-white navbar-expand-lg py-3 py-lg-4">
        <div class="container-fluid">
          <a class="navbar-brand" href="/v2/home"><img src="{{ asset('/assets-v2/img/header/logo.svg') }}" alt="icon"></a>
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

  <!-- ==================== Section: Header TOP BAR (Mobile Only) ==================== -->
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
  <!-- /Section: Header TOP BAR (Mobile Only) -->
  <!-- ==================== Section: Hero Banner ==================== -->
  <section class="py-5">
    <div class="container-fluid px-3 px-lg-5">
      <div class="oy-banner bg-dark">
        <div class="row mb-md-5">
          <div class="col-lg-12">
            <h2 class="text-light text-h1 mb-5">Luxury & Supercar Hire Across the UK</h2>
          </div>
        </div>
        <div class="p-md-5 rounded-6 oy-banner__home-hero" style="background-image: url('{{ asset('/assets-v2/img/banners/gradient-banner-desktop-18.png') }}');">
          <div class="row oy-banner__row g-4 g-xl-5 align-items-end justify-content-between">
            <div class="col-lg-6 col-xl-6">
              <div class="space-y-3 d-none d-md-block">
                <p class="text-light text-opacity-50 text-b2-regular">Whether you’re looking to turn heads with a supercar, arrive in style at a wedding, or travel comfortably for business, our diverse fleet and professional team ensure an exceptional experience from start to finish.</p>
              </div>
              <!-- Body -->
              <div class="space-y-3 d-md-none rounded-6 p-4 oy-banner__mobile" style="background-image: url('{{ asset('/assets-v2/img/banners/gradient-banner-mobile-18.png') }}');">
                <p class="text-light text-opacity-50 text-b2-regular">Whether you’re looking to turn heads with a supercar, arrive in style at a wedding, or travel comfortably for business, our diverse fleet and professional team ensure an exceptional experience from start to finish.</p>
              </div>
            </div>
            <div class="col-lg-6 col-xl-4">
              <div class="space-y-4">
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
    </div>
  </section>
  <!-- /Section: Hero Banner -->



  <!-- ==================== Section: About US ==================== -->
  <section class="section-padding-y">
    <div class="container oy-section-title">
      <div class="row">
        <div class="col-md-6 text-center text-lg-start">
          <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b4-regular text-uppercase">About Us</span>
        </div>
        <div class="col-md-6">
          <div class="text-center text-lg-start">
            <h3 class="text-h3">Autofusion are Glasgow’s leading luxury & performance car hire company.</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row g-4 g-xl-5">
        <div class="col-lg-6">
          <div class="pe-lg-4 space-y-4">
            <div>
              <p class="text-secondary text-b2-regular">We give you the opportunity to experience your high-end rental from the driver's seat or via our personal chauffeur service.</p>
            </div>
            <div>
              <div class="accordion accordion--style-2" id="accordion-About-Us">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button text-h5 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Who We Are
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordion-About-Us">
                    <div class="accordion-body text-b3-regular text-secondary">
                      <p>
                        At Autofusion, Our mission is to redefine luxury travel by delivering exceptional car hire experiences that combine elegance, performance, and comfort.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button text-h5 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Our Mission
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordion-About-Us">
                    <div class="accordion-body text-b3-regular text-secondary">
                      <p>
                        At Autofusion, Our mission is to redefine luxury travel by delivering exceptional car hire experiences that combine elegance, performance, and comfort.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button text-h5 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Our Vision
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordion-About-Us">
                    <div class="accordion-body text-b3-regular text-secondary">
                      <p>
                        At Autofusion, Our mission is to redefine luxury travel by delivering exceptional car hire experiences that combine elegance, performance, and comfort.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row gy-4">
            <div class="col-sm-6">
              <img class="img-fluid rounded-4" src="{{ asset('/assets-v2/img/banners/about-banner-1.png') }}" alt="">
            </div>
            <div class="col-sm-6">
              <div class="d-flex h-100 flex-column justify-content-between gap-4">
                <div class="card flex-row align-items-center gap-4 card-body p-2">
                  <img class="avatar avatar-lg" src="{{ asset('/assets-v2/img/icons/about-vehicles.svg') }}" alt="">
                  <div>
                    <h3 class="fw-bold lh-1 text-dark mb-2 text-h3 font-body">20+</h3>
                    <p class="mb-0 lh-sm text-secondary text-b4-regular">Vehicles Available For Hire</p>
                  </div>
                </div>

                <img class="img-fluid rounded-4" src="{{ asset('/assets-v2/img/banners/about-banner-2.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Section: About US -->

  <!-- ==================== Section: Partner Slider ==================== -->
  <script src="{{ asset('/assets-v2/js/components/marquee-slider.js') }}" defer></script>
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
            <img class="img-fluid" src="{{ asset('/assets-v2/img/brands/partner-jaguar.png') }}" alt="">
          </div>
        </div>
        <!-- Partner Item -->
        <div class="oy-partner-item marquee-item">
          <div class="oy-partner-item__thumb">
            <img class="img-fluid" src="{{ asset('/assets-v2/img/brands/partner-lamborghini.png') }}" alt="">
          </div>
        </div>
        <!-- Partner Item -->
        <div class="oy-partner-item marquee-item">
          <div class="oy-partner-item__thumb">
            <img class="img-fluid" src="{{ asset('/assets-v2/img/brands/partner-mercedes.png') }}" alt="">
          </div>
        </div>
        <!-- Partner Item -->
        <div class="oy-partner-item marquee-item">
          <div class="oy-partner-item__thumb">
            <img class="img-fluid" src="{{ asset('/assets-v2/img/brands/partner-bmw.png') }}" alt="">
          </div>
        </div>
        <!-- Partner Item -->
        <div class="oy-partner-item marquee-item">
          <div class="oy-partner-item__thumb">
            <img class="img-fluid" src="{{ asset('/assets-v2/img/brands/partner-b.png') }}" alt="">
          </div>
        </div>
        <!-- Partner Item -->
        <div class="oy-partner-item marquee-item">
          <div class="oy-partner-item__thumb">
            <img class="img-fluid" src="{{ asset('/assets-v2/img/brands/partner-porsche.png') }}" alt="">
          </div>
        </div>
        <!-- Partner Item -->
        <div class="oy-partner-item marquee-item">
          <div class="oy-partner-item__thumb">
            <img class="img-fluid" src="{{ asset('/assets-v2/img/brands/partner-land-rover.png') }}" alt="">
          </div>
        </div>
        <!-- Partner Item -->
        <div class="oy-partner-item marquee-item">
          <div class="oy-partner-item__thumb">
            <img class="img-fluid" src="{{ asset('/assets-v2/img/brands/partner-audi.png') }}" alt="">
          </div>
        </div>
        <!-- Partner Item -->
        <div class="oy-partner-item marquee-item">
          <div class="oy-partner-item__thumb">
            <img class="img-fluid" src="{{ asset('/assets-v2/img/brands/partner-jaguar.png') }}" alt="">
          </div>
        </div>
        <!-- Partner Item -->
        <div class="oy-partner-item marquee-item">
          <div class="oy-partner-item__thumb">
            <img class="img-fluid" src="{{ asset('/assets-v2/img/brands/partner-lamborghini.png') }}" alt="">
          </div>
        </div>
        <!-- Partner Item -->
        <div class="oy-partner-item marquee-item">
          <div class="oy-partner-item__thumb">
            <img class="img-fluid" src="{{ asset('/assets-v2/img/brands/partner-mercedes.png') }}" alt="">
          </div>
        </div>
        <!-- Partner Item -->
        <div class="oy-partner-item marquee-item">
          <div class="oy-partner-item__thumb">
            <img class="img-fluid" src="{{ asset('/assets-v2/img/brands/partner-bmw.png') }}" alt="">
          </div>
        </div>
        <!-- Partner Item -->
        <div class="oy-partner-item marquee-item">
          <div class="oy-partner-item__thumb">
            <img class="img-fluid" src="{{ asset('/assets-v2/img/brands/partner-b.png') }}" alt="">
          </div>
        </div>
        <!-- Partner Item -->
        <div class="oy-partner-item marquee-item">
          <div class="oy-partner-item__thumb">
            <img class="img-fluid" src="{{ asset('/assets-v2/img/brands/partner-porsche.png') }}" alt="">
          </div>
        </div>
        <!-- Partner Item -->
        <div class="oy-partner-item marquee-item">
          <div class="oy-partner-item__thumb">
            <img class="img-fluid" src="{{ asset('/assets-v2/img/brands/partner-land-rover.png') }}" alt="">
          </div>
        </div>
        <!-- Partner Item -->
        <div class="oy-partner-item marquee-item">
          <div class="oy-partner-item__thumb">
            <img class="img-fluid" src="{{ asset('/assets-v2/img/brands/partner-audi.png') }}" alt="">
          </div>
        </div>
      </div>
    </marquee-slider>
  </section>
  <!-- /Section: Partner Slider -->


  <!-- ==================== Section: : WHY Hire From US ==================== -->
  <section class="">
    <div class="container-fluid px-3 px-lg-5">
      <div class="bg-dark rounded-6 section-padding-y overflow-hidden">
        <div class="container">
          <div class="row g-4 g-lg-5 justify-content-between">
            <div class="col-lg-6 col-xl-5">
              <div class="text-center text-lg-start">
                <h3 class="text-h2 text-light mb-3">Why hire from us?</h3>
                <p class="text-b2-regular text-light mb-5">Choosing our car hire service means choosing comfort, convenience, and reliability. We go beyond just providing vehicles - we deliver a complete travel experience tailored to your needs. From our modern fleet and flexible rental options.</p>

                <div class="d-none d-md-block">
                  <a class="btn btn--gradient-primary" href="#">
                    <span class="btn__text">Know More About Us</span>
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row g-4 g-lg-5">
                <div class="col-sm-6">
                  <div class="icon--primary mb-4">
                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M42.4774 23.7377C42.168 20.2649 41.6584 19.5886 41.4659 19.3342C41.0233 18.7464 40.3152 18.3623 39.5658 17.9592C39.5235 17.9368 39.4869 17.9049 39.459 17.8659C39.431 17.8269 39.4126 17.782 39.405 17.7347C39.3974 17.6873 39.4009 17.6389 39.4153 17.5931C39.4296 17.5474 39.4544 17.5056 39.4876 17.4711C39.6264 17.3304 39.7331 17.1612 39.8003 16.9754C39.8675 16.7895 39.8936 16.5912 39.8769 16.3943C39.8446 16.0451 39.6822 15.7207 39.422 15.4856C39.1617 15.2505 38.8226 15.1218 38.4719 15.125H37.1312C37.0738 15.1253 37.0164 15.1291 36.9594 15.1362C36.9202 15.1192 36.8797 15.1057 36.8382 15.0958C36.0441 13.4174 34.957 11.1195 32.7037 9.99797C29.3616 8.33594 23.2051 8.25 22.0019 8.25C20.7988 8.25 14.6422 8.33594 11.3044 9.99539C9.05115 11.1169 7.96404 13.4148 7.16998 15.0932L7.1631 15.107C7.1235 15.1125 7.0846 15.1223 7.04709 15.1362C6.99006 15.1291 6.93267 15.1253 6.87521 15.125H5.53201C5.18129 15.1218 4.84217 15.2505 4.58191 15.4856C4.32165 15.7207 4.15925 16.0451 4.12693 16.3943C4.11167 16.5908 4.13901 16.7883 4.20708 16.9732C4.27516 17.1582 4.38237 17.3262 4.52138 17.4659C4.55464 17.5005 4.57942 17.5422 4.59376 17.588C4.60811 17.6337 4.61163 17.6822 4.60405 17.7295C4.59646 17.7768 4.57798 17.8218 4.55007 17.8607C4.52215 17.8997 4.48556 17.9317 4.44318 17.9541C3.6938 18.3597 2.98224 18.7438 2.5431 19.3291C2.3506 19.5869 1.84185 20.2598 1.53162 23.7325C1.35974 25.6867 1.33396 27.7097 1.46888 29.0125C1.75162 31.7195 2.28185 33.3558 2.3042 33.4237C2.38556 33.6707 2.53533 33.8896 2.73613 34.055C2.93692 34.2203 3.18049 34.3253 3.43857 34.3578V34.375C3.43857 34.7397 3.58344 35.0894 3.8413 35.3473C4.09916 35.6051 4.4489 35.75 4.81357 35.75H9.62607C9.99074 35.75 10.3405 35.6051 10.5983 35.3473C10.8562 35.0894 11.0011 34.7397 11.0011 34.375C11.741 34.375 12.2558 34.2427 12.8015 34.1017C13.5893 33.8894 14.3946 33.7482 15.2077 33.6798C17.8297 33.4297 20.437 33.3438 22.0019 33.3438C23.5351 33.3438 26.2576 33.4297 28.8838 33.6798C29.7001 33.7484 30.5086 33.8902 31.2995 34.1034C31.822 34.2375 32.3179 34.3612 33.0045 34.3741C33.0045 34.7388 33.1494 35.0886 33.4072 35.3464C33.6651 35.6043 34.0148 35.7491 34.3795 35.7491H39.192C39.5567 35.7491 39.9064 35.6043 40.1643 35.3464C40.4221 35.0886 40.567 34.7388 40.567 34.3741V34.3638C40.8257 34.332 41.07 34.2272 41.2715 34.0619C41.4729 33.8965 41.6232 33.6772 41.7048 33.4297C41.7272 33.3618 42.2574 31.7255 42.5401 29.0185C42.6751 27.7148 42.651 25.6953 42.4774 23.7377ZM9.65529 16.2688C10.3428 14.8079 11.1291 13.1545 12.529 12.4575C14.552 11.4503 18.7449 10.9966 22.0019 10.9966C25.259 10.9966 29.4519 11.4469 31.4748 12.4575C32.8747 13.1545 33.6576 14.8087 34.3486 16.2688L34.4345 16.4553C34.4848 16.5615 34.507 16.6787 34.499 16.7959C34.4911 16.9131 34.4533 17.0263 34.3891 17.1247C34.325 17.2232 34.2368 17.3035 34.1328 17.3581C34.0288 17.4127 33.9126 17.4398 33.7951 17.4367C30.9394 17.3594 24.9238 17.1119 22.0019 17.1119C19.0801 17.1119 13.0644 17.3654 10.2044 17.4427C10.087 17.4458 9.97077 17.4187 9.86678 17.3641C9.76279 17.3095 9.67453 17.2292 9.61042 17.1308C9.5463 17.0323 9.50847 16.9191 9.50053 16.8019C9.49259 16.6848 9.5148 16.5675 9.56505 16.4613C9.59513 16.3977 9.62693 16.3333 9.65529 16.2688ZM10.6805 23.112C9.20223 23.29 7.71448 23.3778 6.22552 23.375C5.31459 23.375 4.37529 23.1172 4.20084 22.3059C4.08138 21.7602 4.09427 21.4534 4.15873 21.1449C4.21287 20.8828 4.2988 20.692 4.72849 20.625C5.84568 20.4531 6.47045 20.6688 8.2992 21.2077C9.51177 21.5643 10.3866 22.0395 10.8851 22.4159C11.1351 22.6016 11.0019 23.0863 10.6805 23.112ZM29.7054 30.1589C28.5744 30.2878 26.3126 30.2405 22.0277 30.2405C17.7429 30.2405 15.4819 30.2878 14.3509 30.1589C13.1839 30.0291 11.6963 28.9257 12.7121 27.9426C13.3884 27.2946 14.9662 26.8099 17.0674 26.5375C19.1686 26.2651 20.058 26.125 22.0191 26.125C23.9802 26.125 24.7794 26.2109 26.9708 26.5384C29.1622 26.8658 30.8183 27.3565 31.3261 27.9434C32.2526 28.9953 30.8715 30.0223 29.7054 30.1641V30.1589ZM39.803 22.3051C39.6311 23.1198 38.6858 23.3741 37.7783 23.3741C36.2609 23.3745 34.7447 23.2867 33.2374 23.1112C32.9744 23.0862 32.8524 22.6248 33.1188 22.4151C33.6095 22.0292 34.4938 21.5634 35.7047 21.2068C37.5334 20.668 38.5879 20.4523 39.4936 20.6319C39.7145 20.6757 39.8314 20.9129 39.8451 21.0616C39.9057 21.4755 39.8915 21.897 39.803 22.3059V22.3051Z" fill="#0181FF" />
                    </svg>
                  </div>
                  <h5 class="text-h5 mb-2 text-light">Modern Fleet</h5>
                  <p class="text-light text-opacity-75">Experience comfort and reliability with our range of modern vehicles.</p>
                </div>
                <div class="col-sm-6">
                  <span class="icon--primary mb-4">
                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_10061_18946)">
                        <path d="M25.282 7.35758C25.2422 7.59433 25.2122 7.83384 25.1913 8.0761C24.9936 10.4113 25.7165 12.683 27.228 14.4739C28.9591 16.5279 31.4412 17.5857 33.9378 17.5857C35.9365 17.5857 37.9451 16.9089 39.589 15.5227C43.2869 12.4018 43.7568 6.85587 40.6368 3.15893C39.1272 1.36808 37.0088 0.27306 34.6745 0.0752323C32.3393 -0.123455 30.0667 0.600482 28.2758 2.11015C27.7822 2.5266 27.3413 2.99015 26.9576 3.49099C26.954 3.49555 26.9503 3.5001 26.9467 3.50465C26.0966 4.6178 25.5287 5.91881 25.2892 7.31684C25.2866 7.33042 25.2839 7.344 25.282 7.35758ZM29.3601 8.34199C29.6313 8.11967 30.0306 8.15869 30.2528 8.42999L32.6207 11.3159L37.9443 4.91626C38.1685 4.64685 38.5676 4.61058 38.8371 4.83462C39.1065 5.0578 39.1428 5.45793 38.9187 5.72734L33.1042 12.7166C32.9836 12.8618 32.8048 12.9452 32.6171 12.9452C32.6161 12.9452 32.6153 12.9452 32.6153 12.9452C32.4257 12.9444 32.2469 12.86 32.1271 12.713L29.2721 9.23376C29.0507 8.9634 29.0898 8.56422 29.3601 8.34199ZM38.9159 24.6367C38.9269 24.6031 38.9377 24.5704 38.9468 24.5369C39.3587 23.2259 39.5066 21.9613 39.3986 20.6857C39.3995 20.6512 39.3995 20.6158 39.3995 20.5814C39.3995 20.5515 39.3995 20.5215 39.3986 20.4916C39.394 19.4591 39.2979 18.4294 39.111 17.4188C37.5161 18.3814 35.7234 18.8531 33.9389 18.8531C31.0802 18.8531 28.2406 17.6419 26.2583 15.2913C26.1812 15.2006 26.1068 15.1081 26.0343 15.0156C22.0787 14.4631 18.0896 14.7243 14.1713 15.7948L9.03728 17.7808C8.96286 17.8098 8.88577 17.8234 8.80869 17.8234C8.65632 17.8234 8.50567 17.769 8.38776 17.6637C8.20996 17.5059 8.13554 17.2618 8.19449 17.0322C9.81209 10.7315 15.4896 6.33054 22.0016 6.33054C22.7229 6.33054 23.4469 6.38502 24.1618 6.49382C24.4112 5.43507 24.8295 4.43166 25.3983 3.5172C24.2824 3.29677 23.143 3.18608 22.0016 3.18608C12.4086 3.18608 4.60548 10.9892 4.60548 20.5813C4.60548 21.953 4.76421 23.3139 5.07994 24.6357C6.0806 24.7492 6.94341 25.4295 7.27273 26.4112L9.08721 31.8265C9.314 32.1059 9.47547 32.4343 9.59888 32.7827C12.8958 36.1349 17.2949 37.9802 22.0016 37.9802C26.7029 37.9802 31.0985 36.1386 34.3944 32.7917C34.5178 32.4397 34.6802 32.1068 34.9107 31.8255L36.7251 26.4112C37.0534 25.4296 37.9171 24.7501 38.9159 24.6367ZM18.7682 34.1944C18.6529 34.2906 18.5087 34.3414 18.3626 34.3414C18.3055 34.3414 18.2492 34.3341 18.193 34.3187C15.3089 33.5203 12.7868 31.8601 10.8989 29.5167C8.98279 27.1398 7.89861 24.2711 7.76343 21.222C7.75621 21.0514 7.81791 20.8853 7.93401 20.7611C8.05106 20.6359 8.21254 20.5642 8.38312 20.5606L13.9589 20.4417C14.1522 20.4372 14.3364 20.5216 14.4597 20.6703C17.0598 23.7921 18.633 29.5875 18.994 33.6519C19.0122 33.8587 18.9278 34.062 18.7682 34.1944ZM33.1415 29.4722C31.2499 31.8382 28.716 33.5148 25.8119 34.3187C25.7557 34.3341 25.6994 34.3414 25.6423 34.3414C25.4962 34.3414 25.352 34.2906 25.2368 34.1953C25.0771 34.0619 24.9927 33.8586 25.0108 33.6518C25.3692 29.5919 26.9396 23.7984 29.5424 20.6702C29.6631 20.5251 29.8418 20.4416 30.0296 20.4416H35.6109C35.7823 20.4416 35.9475 20.5115 36.0663 20.6358C36.1861 20.7592 36.2505 20.9261 36.2441 21.0985C36.1344 24.174 35.0611 27.069 33.1415 29.4722ZM41.2058 37.7643L41.8735 43.9571H36.3421L35.179 34.9773C35.2235 34.7895 35.2625 34.5935 35.3024 34.3885C35.3741 34.0302 35.4503 33.6455 35.5583 33.3089C35.6535 33.0131 35.7723 32.7537 35.9348 32.5795C35.9965 32.5132 36.0437 32.4343 36.0727 32.3481L37.9271 26.814C38.0541 26.4348 38.3362 26.1436 38.6873 25.9948C38.7717 26.031 38.8516 26.0755 38.9251 26.1254C38.9405 26.1363 38.955 26.1471 38.9695 26.158C39.424 26.5009 39.6327 27.1079 39.4431 27.6759L37.2186 34.3168C37.107 34.6479 37.2867 35.0072 37.6186 35.1187C37.6849 35.1414 37.7529 35.1514 37.8201 35.1514C38.085 35.1514 38.3317 34.9845 38.4207 34.7186L40.6452 28.0786C40.9673 27.116 40.6969 26.0944 40.0346 25.4113C40.0237 25.4004 40.0137 25.3904 40.0029 25.3795C40.0628 25.2117 40.1181 25.0439 40.1689 24.8769C40.5155 23.7637 40.6906 22.6769 40.7005 21.5873C42.3 22.5109 43.0793 24.0903 43.4585 25.3432C44.559 28.9875 43.6236 34.2476 41.3292 37.3168C41.233 37.445 41.1894 37.6047 41.2058 37.7643ZM8.6943 34.3913C8.73512 34.5954 8.77414 34.7905 8.81771 34.9774L7.65463 43.9571H2.12137L2.79091 37.7643C2.80819 37.6056 2.76462 37.445 2.66845 37.3171C0.373147 34.2478 -0.562197 28.9878 0.539178 25.3434C0.922975 24.0733 1.71858 22.4684 3.36248 21.5512C3.4296 22.8603 3.63284 24.1531 3.96851 25.4124C3.30533 26.0955 3.03583 27.117 3.35707 28.0787L5.58156 34.7187C5.67051 34.9845 5.91723 35.1515 6.18304 35.1515C6.2493 35.1515 6.31727 35.1415 6.38447 35.1188C6.71654 35.0073 6.89529 34.648 6.78366 34.3169L4.55916 27.6768C4.36958 27.1089 4.57824 26.501 5.03276 26.1581C5.04093 26.1527 5.04729 26.1482 5.05451 26.1427C5.1334 26.0856 5.21959 26.0357 5.31215 25.9966C5.66234 26.1445 5.94362 26.4358 6.07063 26.8141L7.92413 32.3482C7.95318 32.4335 8.00036 32.5124 8.06112 32.5786C8.21984 32.75 8.33783 33.0032 8.43219 33.2926C8.4358 33.3025 8.43941 33.3134 8.44216 33.3234C8.54821 33.6573 8.62358 34.0365 8.6943 34.3913Z" fill="#0181FF" />
                      </g>
                      <defs>
                        <clipPath id="clip0_10061_18946">
                          <rect width="44" height="44" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                  </span>
                  <h5 class="text-h5 mb-2 text-light">Share the Drive</h5>
                  <p class="text-light text-opacity-75">Traveling with family or friends? Add another driver with ease. It’s the perfect way to split.</p>
                </div>
                <div class="col-sm-6">
                  <span class="icon--primary mb-4">
                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_10061_18955)">
                        <path d="M0.560209 12.9042C3.82691 13.8792 11.8209 16.9715 11.4414 23.7303C11.3641 25.0783 10.7738 26.3456 9.79153 27.272C5.20018 31.5228 1.89745 36.9796 0.260907 43.0187C0.200119 43.255 0.252597 43.5062 0.402948 43.6983C0.553299 43.8906 0.784467 44.002 1.0284 43.9999L23.1168 43.9952C23.4791 43.993 23.7928 43.7435 23.8765 43.391C27.6131 28.2085 39.6852 24.5599 43.3833 23.7901C43.7443 23.7127 44.0015 23.3926 43.9992 23.0233V12.8303C43.9993 12.5993 43.8978 12.38 43.7217 12.2306C43.5455 12.0813 43.3125 12.017 43.0848 12.0548C38.5852 12.8509 34.1605 14.024 29.8577 15.562V6.18538C31.3899 5.78978 32.389 4.31653 32.1895 2.74664C31.9901 1.17674 30.6544 0 29.072 0C27.4895 0 26.1538 1.17674 25.9545 2.74664C25.7551 4.31653 26.7541 5.78978 28.2864 6.18538V16.1175C27.9399 16.2025 27.5802 16.0404 27.4143 15.7247C23.3619 7.78414 6.00232 6.52238 0.811581 6.32287C0.598781 6.31588 0.39219 6.39547 0.239215 6.54363C0.0862406 6.69171 -8.65609e-05 6.89559 9.0326e-07 7.10856V12.1539C-0.000523882 12.5006 0.22767 12.8062 0.560209 12.9042ZM36.842 18.553C37.8893 18.2654 38.9263 18.0235 39.9233 17.8333C40.2019 17.7735 40.491 17.8693 40.6789 18.0835C40.8668 18.2977 40.9239 18.5969 40.8282 18.8653C40.7325 19.1338 40.499 19.3292 40.2179 19.3763C39.2609 19.5594 38.2648 19.7919 37.2576 20.0685C37.1894 20.0871 37.1192 20.0966 37.0486 20.0967C36.6548 20.097 36.3216 19.8057 36.2693 19.4153C36.2171 19.0249 36.462 18.6562 36.842 18.553ZM29.5104 21.2862C30.5726 20.7779 31.6521 20.3129 32.7205 19.9059C32.9848 19.7959 33.2882 19.8385 33.5121 20.0169C33.736 20.1954 33.8451 20.4815 33.7968 20.7637C33.7485 21.046 33.5505 21.2796 33.28 21.3734C32.2523 21.7663 31.2121 22.2133 30.1884 22.7027C30.083 22.7542 29.9672 22.781 29.8499 22.7813C29.4842 22.7799 29.1679 22.5264 29.0868 22.1698C29.0058 21.8132 29.1814 21.4479 29.5105 21.2885V21.2862H29.5104ZM22.4969 25.5632C23.4669 24.8141 24.4744 24.1148 25.5154 23.468C25.8842 23.2393 26.3685 23.3529 26.5972 23.7217C26.8259 24.0905 26.7123 24.5748 26.3435 24.8035C25.3483 25.4208 24.3849 26.0879 23.457 26.8022C23.1133 27.0597 22.6265 26.9935 22.3641 26.6535C22.1016 26.3135 22.1608 25.8258 22.497 25.5584L22.4969 25.5632ZM20.2492 28.5141C20.5559 28.8209 20.5559 29.3183 20.2492 29.625C19.1847 30.6815 18.2032 31.8182 17.3133 33.0253C17.0558 33.3748 16.5637 33.4494 16.2142 33.1918C15.8647 32.9343 15.7901 32.4422 16.0477 32.0927C16.9861 30.8213 18.0203 29.6237 19.1415 28.5102C19.449 28.2067 19.9438 28.2084 20.2492 28.5141ZM15.02 13.645C15.2547 13.2801 15.7408 13.1746 16.1057 13.4093C17.2981 14.1538 18.3849 15.0551 19.3371 16.0891C19.5314 16.2976 19.5977 16.5948 19.5102 16.866C19.4227 17.1371 19.1953 17.3398 18.9159 17.3954C18.6364 17.451 18.3488 17.3511 18.1641 17.1341C17.307 16.2066 16.3293 15.3982 15.2573 14.7308C15.0818 14.6183 14.9581 14.4407 14.9137 14.2371C14.8692 14.0335 14.9074 13.8205 15.02 13.645ZM14.3804 36.1757C14.5668 36.2692 14.7083 36.4329 14.7739 36.6308C14.8395 36.8287 14.8237 37.0445 14.7301 37.2308C14.002 38.6867 13.3959 40.2006 12.9184 41.7569C12.8394 42.0295 12.6194 42.2384 12.3431 42.3032C12.0667 42.368 11.7769 42.2786 11.585 42.0695C11.393 41.8604 11.3288 41.5639 11.4171 41.2941C11.9201 39.6543 12.5587 38.0592 13.3261 36.5253C13.5208 36.1378 13.9928 35.9812 14.3804 36.1757ZM8.79453 10.8976C8.93674 10.4879 9.38403 10.2709 9.79389 10.4129C10.8655 10.7829 11.9073 11.1985 12.8925 11.6565C13.1474 11.7743 13.32 12.0191 13.3455 12.2986C13.3709 12.5781 13.2453 12.8502 13.0159 13.012C12.7865 13.1738 12.4881 13.201 12.2334 13.0832C11.2961 12.6504 10.3022 12.2513 9.28013 11.8969C8.87001 11.7551 8.65266 11.3077 8.79453 10.8976ZM2.52667 8.66245C3.61245 8.81954 4.68799 9.02307 5.7227 9.25878C5.99873 9.31887 6.22124 9.52249 6.30547 9.79214C6.3897 10.0618 6.32279 10.3558 6.1301 10.5624C5.93742 10.7689 5.6487 10.8561 5.37389 10.7908C4.37846 10.5645 3.34297 10.3712 2.29734 10.2165C1.87689 10.1442 1.59097 9.74955 1.65325 9.32753C1.71552 8.90543 2.10325 8.61024 2.52667 8.66245Z" fill="#0181FF" />
                      </g>
                      <defs>
                        <clipPath id="clip0_10061_18955">
                          <rect width="44" height="44" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                  </span>
                  <h5 class="text-h5 mb-2 text-light">Unlimited Journey</h5>
                  <p class="text-light text-opacity-75">Hit the road without limits. Enjoy generous or even unlimited mileage.</p>
                </div>
                <div class="col-sm-6">
                  <span class="icon--primary mb-4">
                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M41.25 13.75V9.625C41.25 8.53098 40.8154 7.48177 40.0418 6.70818C39.2682 5.9346 38.219 5.5 37.125 5.5H31.625V4.125C31.625 3.76033 31.4801 3.41059 31.2223 3.15273C30.9644 2.89487 30.6147 2.75 30.25 2.75C29.8853 2.75 29.5356 2.89487 29.2777 3.15273C29.0199 3.41059 28.875 3.76033 28.875 4.125V5.5H15.125V4.125C15.125 3.76033 14.9801 3.41059 14.7223 3.15273C14.4644 2.89487 14.1147 2.75 13.75 2.75C13.3853 2.75 13.0356 2.89487 12.7777 3.15273C12.5199 3.41059 12.375 3.76033 12.375 4.125V5.5H6.875C5.78098 5.5 4.73177 5.9346 3.95818 6.70818C3.1846 7.48177 2.75 8.53098 2.75 9.625V13.75H41.25Z" fill="#0181FF" />
                      <path d="M2.75 16.5V37.125C2.75 38.219 3.1846 39.2682 3.95818 40.0418C4.73177 40.8154 5.78098 41.25 6.875 41.25H37.125C38.219 41.25 39.2682 40.8154 40.0418 40.0418C40.8154 39.2682 41.25 38.219 41.25 37.125V16.5H2.75ZM29.7687 24.4186L20.1437 32.6686C19.8807 32.8936 19.5424 33.011 19.1965 32.9975C18.8507 32.984 18.5226 32.8405 18.2779 32.5957L14.1529 28.4707C13.9024 28.2114 13.7638 27.8641 13.7669 27.5036C13.7701 27.1431 13.9147 26.7982 14.1696 26.5433C14.4246 26.2883 14.7694 26.1437 15.1299 26.1406C15.4905 26.1374 15.8378 26.276 16.0971 26.5265L19.3229 29.7523L27.9854 22.3273C28.1217 22.2044 28.2813 22.11 28.4546 22.0498C28.628 21.9895 28.8117 21.9646 28.9948 21.9765C29.178 21.9883 29.3569 22.0368 29.5211 22.1189C29.6852 22.201 29.8313 22.3151 29.9506 22.4546C30.07 22.594 30.1602 22.7559 30.2159 22.9308C30.2717 23.1056 30.2919 23.2899 30.2753 23.4727C30.2588 23.6555 30.2058 23.8331 30.1195 23.9951C30.0332 24.1571 29.9153 24.3002 29.7729 24.4159L29.7687 24.4186Z" fill="#0181FF" />
                    </svg>
                  </span>
                  <h5 class="text-h5 mb-2 text-light">Flexible Booking</h5>
                  <p class="text-light text-opacity-75">Whether you need a car for a few hours, a day, or an entire week our rental plans.</p>
                </div>
              </div>

              <div class="d-md-none">
                <a class="btn w-100 mt-5 btn--gradient-primary" href="#">
                  <span class="btn__text">Know More About Us</span>
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
  </section>
  <!-- /Section: : WHY Hire From US -->


  <!-- ==================== Section: OUR Rental Collection ==================== -->
  <script src="{{ asset('/assets-v2/js/components/oy-swiper.js') }}" defer></script>
  <section class="section-padding-t">
    <div class="container oy-section-title">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="text-center text-lg-start">
            <h3 class="text-h2">Our Rental Car Collection</h3>
            <p class="text-secondary">Explore our wide range of rental cars designed to suit every need and budget. From compact city cars to comfortable sedans.</p>
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
      <oy-swiper data-items="1" data-sm-items="1" data-md-items="2" data-lg-items="2" data-xl-items="2" data-loop="true" data-speed="600" data-lazy="true" data-space="30" data-autoplay="false" data-autoplay-delay="3000" data-pagination="#oy-slider-journey--pagination" data-prev="#oy-slider-journey-arrow--prev" data-next="#oy-slider-journey-arrow--next">
        <div class="swiper-wrapper">
          <!-- Slider Item -->
          <div class="swiper-slide mb-5">
            <div class="card card--product card--product-2 h-100">
              <div class="card--product__thumb mb-3">
                <img class="img-fluid w-100 rounded-3" src="{{ asset('/assets-v2/img/products/category-1.png') }}" alt="">
              </div>
              <div class="card--product__content px-0 px-lg-4 space-y-3 flex-fill d-flex flex-column align-items-start">
                <div class="mb-5 d-flex flex-wrap flex-fill w-100 justify-content-between align-items-center">
                  <h5 class="card--product__title text-h5 mb-4">Compact city cruiser</h5>
                  <div class="text-b1-semibold">
                    <span class="text-primary">$150</span>
                    /<span class="text-secondary text-opacity-50 fw-normal text-b6-regular">per day</span>
                  </div>
                </div>

                <div class="d-flex w-100 align-items-center card--product__features">
                  <!-- Flex Fill -->
                  <div class="list-item flex-fill gap-2">
                    <svg class="img-fluid" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M34.9943 48.6487H15.0078V37.0743H34.9943V48.6487ZM16.3592 47.2973H33.6429V38.4257H16.3592V47.2973Z" fill="#0072FF" />
                      <path d="M34.8068 48.6486H34.2933L34.3473 47.2973C40.5703 47.5473 41.469 42.3986 41.5027 42.1824V42.1081C42.773 37.3784 39.5568 36.4189 39.4217 36.3851C37.3136 35.7095 34.8136 38.2027 34.7933 38.2297L33.8203 37.2838C33.9487 37.1554 36.9014 34.1622 39.8 35.0878C40.9114 35.4428 41.8523 36.196 42.4419 37.2027C43.246 38.5541 43.3744 40.3311 42.8203 42.4324C42.7257 43 41.4757 48.6486 34.8068 48.6486Z" fill="#0072FF" />
                      <path d="M15.1969 48.6487C8.52796 48.6487 7.27796 43 7.16985 42.4257C6.6158 40.3243 6.74418 38.5676 7.54823 37.196C8.15004 36.1724 9.11481 35.4126 10.2509 35.0676C13.1158 34.1487 16.0617 37.1487 16.1901 37.277L15.2172 38.223C15.2172 38.223 12.7239 35.696 10.6226 36.3649C10.4536 36.4122 7.24418 37.3446 8.50769 42.1014V42.1757C8.54148 42.3919 9.43337 47.5405 15.6631 47.2905L15.7172 48.6419L15.1969 48.6487Z" fill="#0072FF" />
                      <path d="M38.7494 35.8108C38.6615 35.473 36.621 27.4595 37.1683 20.5V20.4189C37.2829 19.7471 37.2637 19.0592 37.1118 18.3948C36.96 17.7304 36.6783 17.1026 36.2831 16.5473C35.3913 15.4865 33.8642 14.9324 31.7561 14.9324H18.2426C16.121 14.9324 14.594 15.4865 13.6953 16.5743C13.3048 17.1316 13.028 17.7603 12.8808 18.4247C12.7335 19.089 12.7187 19.7759 12.8372 20.4459V20.527C13.3845 27.4865 11.344 35.5 11.2561 35.8378L9.94531 35.5C9.94531 35.4189 12.0061 27.3919 11.4926 20.6351C11.345 19.7756 11.3725 18.895 11.5733 18.0463C11.7742 17.1976 12.1443 16.3982 12.6615 15.6959C13.8304 14.277 15.7156 13.554 18.2629 13.554H31.7561C34.3034 13.554 36.1886 14.277 37.3575 15.6959C37.8759 16.4026 38.2456 17.207 38.4442 18.0606C38.6428 18.9142 38.6662 19.7993 38.5129 20.6622C37.9994 27.4189 40.0332 35.4189 40.0602 35.527L38.7494 35.8108Z" fill="#0072FF" />
                      <path d="M32.479 38.4257H17.5195V14.2567H18.8709V37.0743H31.1276V14.2567H32.479V38.4257Z" fill="#0072FF" />
                      <path d="M18.1953 23.5946H31.8034V24.946H18.1953V23.5946Z" fill="#0072FF" />
                      <path d="M28.8301 14.9324H21.168V10.7027H28.8301V14.9324ZM22.5193 13.5811H27.4788V12.054H22.5193V13.5811Z" fill="#0072FF" />
                      <path d="M30.1741 12.0541H19.8228C19.4802 12.0542 19.1414 11.9821 18.8285 11.8425C18.5156 11.703 18.2356 11.4991 18.0067 11.2441C17.7779 10.9891 17.6053 10.6888 17.5003 10.3627C17.3952 10.0365 17.3601 9.69196 17.3971 9.35135L17.9782 3.53379C18.0402 2.93292 18.3237 2.37665 18.7733 1.97324C19.2229 1.56983 19.8065 1.34815 20.4106 1.35135H29.5863C30.1935 1.34864 30.7798 1.57314 31.2299 1.98074C31.68 2.38833 31.9614 2.94954 32.0187 3.55406L32.5998 9.36487C32.6368 9.70547 32.6017 10.0501 32.4966 10.3762C32.3916 10.7023 32.219 11.0026 31.9902 11.2576C31.7613 11.5126 31.4813 11.7165 31.1684 11.856C30.8555 11.9956 30.5167 12.0677 30.1741 12.0676V12.0541ZM20.4106 2.7027C20.1399 2.70136 19.8784 2.80102 19.6772 2.98219C19.476 3.16337 19.3497 3.41305 19.3228 3.68243L18.7417 9.5C18.7245 9.65189 18.7396 9.8057 18.7862 9.95129C18.8328 10.0969 18.9098 10.2309 19.012 10.3446C19.1144 10.4579 19.2395 10.5483 19.3792 10.61C19.5189 10.6717 19.6701 10.7033 19.8228 10.7027H30.1741C30.3268 10.7033 30.478 10.6717 30.6177 10.61C30.7573 10.5483 30.8825 10.4579 30.9849 10.3446C31.0871 10.2309 31.1641 10.0969 31.2106 9.95129C31.2572 9.8057 31.2724 9.65189 31.2552 9.5L30.6741 3.68919C30.6488 3.41859 30.5231 3.16726 30.3218 2.98469C30.1204 2.80212 29.8581 2.70152 29.5863 2.7027H20.4106Z" fill="#0072FF" />
                    </svg>
                    <div>
                      <p class="fw-normal text-secondary text-b6-regular mb-0">Seat</p>
                      <h3 class="text-dark text-h6 fw-medium">4</h3>
                    </div>
                  </div>
                  <!-- Flex Fill -->
                  <div class="list-item flex-fill gap-2">
                    <svg class="img-fluid" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M44.0477 0C40.7667 0 38.0953 2.67143 38.0953 5.95234C38.0953 8.82612 40.143 11.2309 42.8573 11.7833V23.8095H26.1905V11.7834C28.9048 11.231 30.9525 8.82623 30.9525 5.95246C30.9523 2.67143 28.2809 0 25 0C21.7191 0 19.0477 2.67143 19.0477 5.95234C19.0477 8.82612 21.0953 11.2309 23.8096 11.7833V23.8095H7.14286V11.7834C9.85714 11.231 11.9048 8.82623 11.9048 5.95246C11.9048 2.67143 9.23337 0 5.95234 0C2.67132 0 0 2.67143 0 5.95234C0 8.82612 2.04766 11.2309 4.76194 11.7833V38.2166C2.04766 38.7691 0 41.1738 0 44.0477C0 47.3286 2.67143 50 5.95234 50C9.23326 50 11.9047 47.3286 11.9047 44.0477C11.9047 41.1739 9.85703 38.7691 7.14275 38.2167V26.1905H23.8094V38.2167C21.0951 38.7691 19.0474 41.1739 19.0474 44.0477C19.0477 47.3286 21.7191 50 25 50C28.2809 50 30.9523 47.3286 30.9523 44.0477C30.9523 41.1739 28.9047 38.7691 26.1904 38.2167V26.1905H44.0475C44.7047 26.1905 45.2381 25.6571 45.2381 25V11.7834C47.9523 11.2309 50 8.82623 50 5.95234C50 2.67143 47.3286 0 44.0477 0ZM9.52377 44.0477C9.52377 46.0167 7.92143 47.6191 5.95234 47.6191C3.98326 47.6191 2.38092 46.0167 2.38092 44.0477C2.38092 42.0786 3.98326 40.4762 5.95234 40.4762C7.92143 40.4762 9.52377 42.0786 9.52377 44.0477ZM5.95234 9.52377C3.98326 9.52377 2.38092 7.92143 2.38092 5.95234C2.38092 3.98326 3.98326 2.38092 5.95234 2.38092C7.92143 2.38092 9.52377 3.98326 9.52377 5.95234C9.52377 7.92143 7.92143 9.52377 5.95234 9.52377ZM28.5714 44.0477C28.5714 46.0167 26.9691 47.6191 25 47.6191C23.0309 47.6191 21.4286 46.0167 21.4286 44.0477C21.4286 42.0786 23.0309 40.4762 25 40.4762C26.9691 40.4762 28.5714 42.0786 28.5714 44.0477ZM25 9.52377C23.0309 9.52377 21.4286 7.92143 21.4286 5.95234C21.4286 3.98326 23.0309 2.38092 25 2.38092C26.9691 2.38092 28.5714 3.98326 28.5714 5.95234C28.5714 7.92143 26.9691 9.52377 25 9.52377ZM44.0477 9.52377C42.0786 9.52377 40.4762 7.92143 40.4762 5.95234C40.4762 3.98326 42.0786 2.38092 44.0477 2.38092C46.0167 2.38092 47.6191 3.98326 47.6191 5.95234C47.6191 7.92143 46.0166 9.52377 44.0477 9.52377Z" fill="#0072FF" />
                    </svg>
                    <div>
                      <p class="fw-normal text-secondary text-b6-regular mb-0">Gearbox</p>
                      <h3 class="text-dark text-h6 fw-medium">Manual</h3>
                    </div>
                  </div>
                  <!-- Flex Fill -->
                  <div class="list-item flex-fill gap-2">
                    <svg class="img-fluid" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M44.707 9.87041H40.1624V3.68242C40.1624 2.13652 38.9048 0.878906 37.359 0.878906H33.0436C31.4977 0.878906 30.24 2.13652 30.24 3.68242V9.87051H25.6954C24.1496 9.87051 22.892 11.1281 22.892 12.6739V18.3503H19.7588V12.1622C19.7588 10.6163 18.5012 9.35869 16.9554 9.35869H12.6399C11.094 9.35869 9.83643 10.6163 9.83643 12.1622V18.3503H5.2917C3.7459 18.3503 2.48828 19.6079 2.48828 21.1538V42.7402C2.48828 44.286 3.7459 45.5437 5.2917 45.5437H5.65654C5.48955 45.8765 5.39482 46.2517 5.39482 46.6487C5.39482 48.012 6.50381 49.1211 7.86709 49.1211C9.23037 49.1211 10.3395 48.012 10.3395 46.6487C10.3395 46.2517 10.2448 45.8765 10.0777 45.5437H19.5172C19.3502 45.8765 19.2555 46.2517 19.2555 46.6487C19.2555 48.012 20.3645 49.1211 21.7277 49.1211C23.091 49.1211 24.2 48.012 24.2 46.6487C24.2 46.2517 24.1054 45.8765 23.9383 45.5437H24.3031C24.5435 45.5437 24.7769 45.5132 24.9996 45.4561C25.2262 45.5143 25.4592 45.5437 25.6951 45.5437H26.06C25.893 45.8765 25.7982 46.2517 25.7982 46.6487C25.7982 48.012 26.9072 49.1211 28.2705 49.1211C29.6338 49.1211 30.7429 48.012 30.7429 46.6487C30.7429 46.2517 30.6482 45.8765 30.4812 45.5437H39.9206C39.7536 45.8765 39.6589 46.2517 39.6589 46.6487C39.6589 48.012 40.7679 49.1211 42.1312 49.1211C43.4944 49.1211 44.6034 48.012 44.6034 46.6487C44.6034 46.2517 44.5088 45.8765 44.3417 45.5437H44.7065C46.2524 45.5437 47.5101 44.286 47.5101 42.7402V12.6738C47.5105 11.128 46.2529 9.87041 44.707 9.87041ZM31.6072 3.68242C31.6072 2.89043 32.2516 2.24609 33.0436 2.24609H37.359C38.1509 2.24609 38.7952 2.89043 38.7952 3.68242V9.87051H31.6072V3.68242ZM11.2035 12.1622C11.2035 11.3702 11.8479 10.7259 12.6398 10.7259H16.9553C17.7472 10.7259 18.3915 11.3702 18.3915 12.1622V18.3503H11.2035V12.1622ZM8.97236 46.6487C8.97236 47.2581 8.47656 47.7539 7.86719 47.7539C7.25781 47.7539 6.76211 47.2581 6.76211 46.6487C6.76211 46.0394 7.25781 45.5437 7.86719 45.5437C8.47656 45.5437 8.97236 46.0393 8.97236 46.6487ZM22.833 46.6487C22.833 47.2581 22.3373 47.7539 21.7279 47.7539C21.1186 47.7539 20.6229 47.2581 20.6229 46.6487C20.6229 46.0394 21.1186 45.5437 21.7279 45.5437C22.3373 45.5437 22.833 46.0393 22.833 46.6487ZM5.2917 44.1764C4.4998 44.1764 3.85547 43.532 3.85547 42.7401V21.1537C3.85547 20.3617 4.4998 19.7174 5.2917 19.7174H24.3034C25.0954 19.7174 25.7397 20.3617 25.7397 21.1537V42.7401C25.7397 43.532 25.0954 44.1764 24.3034 44.1764H5.2917ZM29.3761 46.6487C29.3761 47.2581 28.8803 47.7539 28.2709 47.7539C27.6615 47.7539 27.1658 47.2581 27.1658 46.6487C27.1658 46.0394 27.6615 45.5437 28.2709 45.5437C28.8803 45.5437 29.3761 46.0393 29.3761 46.6487ZM43.2367 46.6487C43.2367 47.2581 42.741 47.7539 42.1316 47.7539C41.5223 47.7539 41.0266 47.2581 41.0266 46.6487C41.0266 46.0394 41.5223 45.5437 42.1316 45.5437C42.741 45.5437 43.2367 46.0393 43.2367 46.6487ZM46.1434 42.7401C46.1434 43.532 45.499 44.1764 44.707 44.1764H26.7099C26.9617 43.7561 27.1068 43.2647 27.1068 42.7401V21.1537C27.1068 19.6078 25.8492 18.3502 24.3033 18.3502H24.2591V12.6738C24.2591 11.8819 24.9034 11.2376 25.6953 11.2376H44.707C45.499 11.2376 46.1434 11.8819 46.1434 12.6738V42.7401ZM41.6976 15.7549V39.6591C41.6976 40.0366 41.3915 40.3427 41.014 40.3427C40.6364 40.3427 40.3304 40.0366 40.3304 39.6591V15.7549C40.3304 15.3773 40.6364 15.0713 41.014 15.0713C41.3915 15.0713 41.6976 15.3773 41.6976 15.7549ZM35.8848 15.7549V39.6591C35.8848 40.0366 35.5787 40.3427 35.2012 40.3427C34.8236 40.3427 34.5176 40.0366 34.5176 39.6591V15.7549C34.5176 15.3773 34.8236 15.0713 35.2012 15.0713C35.5787 15.0713 35.8848 15.3773 35.8848 15.7549ZM30.072 15.7549V39.6591C30.072 40.0366 29.7659 40.3427 29.3884 40.3427C29.0108 40.3427 28.7048 40.0366 28.7048 39.6591V15.7549C28.7048 15.3773 29.0108 15.0713 29.3884 15.0713C29.7659 15.0713 30.072 15.3773 30.072 15.7549ZM21.2939 24.2348V39.6592C21.2939 40.0367 20.9879 40.3428 20.6104 40.3428C20.2328 40.3428 19.9268 40.0367 19.9268 39.6592V24.2348C19.9268 23.8572 20.2328 23.5512 20.6104 23.5512C20.9879 23.5512 21.2939 23.8571 21.2939 24.2348ZM9.66826 24.2348V39.6592C9.66826 40.0367 9.36221 40.3428 8.98467 40.3428C8.60713 40.3428 8.30107 40.0367 8.30107 39.6592V24.2348C8.30107 23.8572 8.60713 23.5512 8.98467 23.5512C9.36221 23.5512 9.66826 23.8571 9.66826 24.2348ZM15.4812 24.2348V39.6592C15.4812 40.0367 15.1751 40.3428 14.7976 40.3428C14.42 40.3428 14.114 40.0367 14.114 39.6592V24.2348C14.114 23.8572 14.42 23.5512 14.7976 23.5512C15.1751 23.5512 15.4812 23.8571 15.4812 24.2348Z" fill="#0072FF" />
                    </svg>
                    <div>
                      <p class="fw-normal text-secondary text-b6-regular mb-0">Luggage</p>
                      <h3 class="text-dark text-h6 fw-medium">Luggage</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Slider Item -->
          <div class="swiper-slide mb-5">
            <div class="card card--product card--product-2 h-100">
              <div class="card--product__thumb mb-3">
                <img class="img-fluid w-100 rounded-3" src="{{ asset('/assets-v2/img/products/category-1.png') }}" alt="">
              </div>
              <div class="card--product__content px-0 px-lg-4 space-y-3 flex-fill d-flex flex-column align-items-start">
                <div class="mb-5 d-flex flex-wrap flex-fill w-100 justify-content-between align-items-center">
                  <h5 class="card--product__title text-h5 mb-4">Compact city cruiser</h5>
                  <div class="text-b1-semibold">
                    <span class="text-primary">$150</span>
                    /<span class="text-secondary text-opacity-50 fw-normal text-b6-regular">per day</span>
                  </div>
                </div>

                <div class="d-flex w-100 align-items-center card--product__features">
                  <!-- Flex Fill -->
                  <div class="list-item flex-fill gap-2">
                    <svg class="img-fluid" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M34.9943 48.6487H15.0078V37.0743H34.9943V48.6487ZM16.3592 47.2973H33.6429V38.4257H16.3592V47.2973Z" fill="#0072FF" />
                      <path d="M34.8068 48.6486H34.2933L34.3473 47.2973C40.5703 47.5473 41.469 42.3986 41.5027 42.1824V42.1081C42.773 37.3784 39.5568 36.4189 39.4217 36.3851C37.3136 35.7095 34.8136 38.2027 34.7933 38.2297L33.8203 37.2838C33.9487 37.1554 36.9014 34.1622 39.8 35.0878C40.9114 35.4428 41.8523 36.196 42.4419 37.2027C43.246 38.5541 43.3744 40.3311 42.8203 42.4324C42.7257 43 41.4757 48.6486 34.8068 48.6486Z" fill="#0072FF" />
                      <path d="M15.1969 48.6487C8.52796 48.6487 7.27796 43 7.16985 42.4257C6.6158 40.3243 6.74418 38.5676 7.54823 37.196C8.15004 36.1724 9.11481 35.4126 10.2509 35.0676C13.1158 34.1487 16.0617 37.1487 16.1901 37.277L15.2172 38.223C15.2172 38.223 12.7239 35.696 10.6226 36.3649C10.4536 36.4122 7.24418 37.3446 8.50769 42.1014V42.1757C8.54148 42.3919 9.43337 47.5405 15.6631 47.2905L15.7172 48.6419L15.1969 48.6487Z" fill="#0072FF" />
                      <path d="M38.7494 35.8108C38.6615 35.473 36.621 27.4595 37.1683 20.5V20.4189C37.2829 19.7471 37.2637 19.0592 37.1118 18.3948C36.96 17.7304 36.6783 17.1026 36.2831 16.5473C35.3913 15.4865 33.8642 14.9324 31.7561 14.9324H18.2426C16.121 14.9324 14.594 15.4865 13.6953 16.5743C13.3048 17.1316 13.028 17.7603 12.8808 18.4247C12.7335 19.089 12.7187 19.7759 12.8372 20.4459V20.527C13.3845 27.4865 11.344 35.5 11.2561 35.8378L9.94531 35.5C9.94531 35.4189 12.0061 27.3919 11.4926 20.6351C11.345 19.7756 11.3725 18.895 11.5733 18.0463C11.7742 17.1976 12.1443 16.3982 12.6615 15.6959C13.8304 14.277 15.7156 13.554 18.2629 13.554H31.7561C34.3034 13.554 36.1886 14.277 37.3575 15.6959C37.8759 16.4026 38.2456 17.207 38.4442 18.0606C38.6428 18.9142 38.6662 19.7993 38.5129 20.6622C37.9994 27.4189 40.0332 35.4189 40.0602 35.527L38.7494 35.8108Z" fill="#0072FF" />
                      <path d="M32.479 38.4257H17.5195V14.2567H18.8709V37.0743H31.1276V14.2567H32.479V38.4257Z" fill="#0072FF" />
                      <path d="M18.1953 23.5946H31.8034V24.946H18.1953V23.5946Z" fill="#0072FF" />
                      <path d="M28.8301 14.9324H21.168V10.7027H28.8301V14.9324ZM22.5193 13.5811H27.4788V12.054H22.5193V13.5811Z" fill="#0072FF" />
                      <path d="M30.1741 12.0541H19.8228C19.4802 12.0542 19.1414 11.9821 18.8285 11.8425C18.5156 11.703 18.2356 11.4991 18.0067 11.2441C17.7779 10.9891 17.6053 10.6888 17.5003 10.3627C17.3952 10.0365 17.3601 9.69196 17.3971 9.35135L17.9782 3.53379C18.0402 2.93292 18.3237 2.37665 18.7733 1.97324C19.2229 1.56983 19.8065 1.34815 20.4106 1.35135H29.5863C30.1935 1.34864 30.7798 1.57314 31.2299 1.98074C31.68 2.38833 31.9614 2.94954 32.0187 3.55406L32.5998 9.36487C32.6368 9.70547 32.6017 10.0501 32.4966 10.3762C32.3916 10.7023 32.219 11.0026 31.9902 11.2576C31.7613 11.5126 31.4813 11.7165 31.1684 11.856C30.8555 11.9956 30.5167 12.0677 30.1741 12.0676V12.0541ZM20.4106 2.7027C20.1399 2.70136 19.8784 2.80102 19.6772 2.98219C19.476 3.16337 19.3497 3.41305 19.3228 3.68243L18.7417 9.5C18.7245 9.65189 18.7396 9.8057 18.7862 9.95129C18.8328 10.0969 18.9098 10.2309 19.012 10.3446C19.1144 10.4579 19.2395 10.5483 19.3792 10.61C19.5189 10.6717 19.6701 10.7033 19.8228 10.7027H30.1741C30.3268 10.7033 30.478 10.6717 30.6177 10.61C30.7573 10.5483 30.8825 10.4579 30.9849 10.3446C31.0871 10.2309 31.1641 10.0969 31.2106 9.95129C31.2572 9.8057 31.2724 9.65189 31.2552 9.5L30.6741 3.68919C30.6488 3.41859 30.5231 3.16726 30.3218 2.98469C30.1204 2.80212 29.8581 2.70152 29.5863 2.7027H20.4106Z" fill="#0072FF" />
                    </svg>
                    <div>
                      <p class="fw-normal text-secondary text-b6-regular mb-0">Seat</p>
                      <h3 class="text-dark text-h6 fw-medium">4</h3>
                    </div>
                  </div>
                  <!-- Flex Fill -->
                  <div class="list-item flex-fill gap-2">
                    <svg class="img-fluid" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M44.0477 0C40.7667 0 38.0953 2.67143 38.0953 5.95234C38.0953 8.82612 40.143 11.2309 42.8573 11.7833V23.8095H26.1905V11.7834C28.9048 11.231 30.9525 8.82623 30.9525 5.95246C30.9523 2.67143 28.2809 0 25 0C21.7191 0 19.0477 2.67143 19.0477 5.95234C19.0477 8.82612 21.0953 11.2309 23.8096 11.7833V23.8095H7.14286V11.7834C9.85714 11.231 11.9048 8.82623 11.9048 5.95246C11.9048 2.67143 9.23337 0 5.95234 0C2.67132 0 0 2.67143 0 5.95234C0 8.82612 2.04766 11.2309 4.76194 11.7833V38.2166C2.04766 38.7691 0 41.1738 0 44.0477C0 47.3286 2.67143 50 5.95234 50C9.23326 50 11.9047 47.3286 11.9047 44.0477C11.9047 41.1739 9.85703 38.7691 7.14275 38.2167V26.1905H23.8094V38.2167C21.0951 38.7691 19.0474 41.1739 19.0474 44.0477C19.0477 47.3286 21.7191 50 25 50C28.2809 50 30.9523 47.3286 30.9523 44.0477C30.9523 41.1739 28.9047 38.7691 26.1904 38.2167V26.1905H44.0475C44.7047 26.1905 45.2381 25.6571 45.2381 25V11.7834C47.9523 11.2309 50 8.82623 50 5.95234C50 2.67143 47.3286 0 44.0477 0ZM9.52377 44.0477C9.52377 46.0167 7.92143 47.6191 5.95234 47.6191C3.98326 47.6191 2.38092 46.0167 2.38092 44.0477C2.38092 42.0786 3.98326 40.4762 5.95234 40.4762C7.92143 40.4762 9.52377 42.0786 9.52377 44.0477ZM5.95234 9.52377C3.98326 9.52377 2.38092 7.92143 2.38092 5.95234C2.38092 3.98326 3.98326 2.38092 5.95234 2.38092C7.92143 2.38092 9.52377 3.98326 9.52377 5.95234C9.52377 7.92143 7.92143 9.52377 5.95234 9.52377ZM28.5714 44.0477C28.5714 46.0167 26.9691 47.6191 25 47.6191C23.0309 47.6191 21.4286 46.0167 21.4286 44.0477C21.4286 42.0786 23.0309 40.4762 25 40.4762C26.9691 40.4762 28.5714 42.0786 28.5714 44.0477ZM25 9.52377C23.0309 9.52377 21.4286 7.92143 21.4286 5.95234C21.4286 3.98326 23.0309 2.38092 25 2.38092C26.9691 2.38092 28.5714 3.98326 28.5714 5.95234C28.5714 7.92143 26.9691 9.52377 25 9.52377ZM44.0477 9.52377C42.0786 9.52377 40.4762 7.92143 40.4762 5.95234C40.4762 3.98326 42.0786 2.38092 44.0477 2.38092C46.0167 2.38092 47.6191 3.98326 47.6191 5.95234C47.6191 7.92143 46.0166 9.52377 44.0477 9.52377Z" fill="#0072FF" />
                    </svg>
                    <div>
                      <p class="fw-normal text-secondary text-b6-regular mb-0">Gearbox</p>
                      <h3 class="text-dark text-h6 fw-medium">Manual</h3>
                    </div>
                  </div>
                  <!-- Flex Fill -->
                  <div class="list-item flex-fill gap-2">
                    <svg class="img-fluid" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M44.707 9.87041H40.1624V3.68242C40.1624 2.13652 38.9048 0.878906 37.359 0.878906H33.0436C31.4977 0.878906 30.24 2.13652 30.24 3.68242V9.87051H25.6954C24.1496 9.87051 22.892 11.1281 22.892 12.6739V18.3503H19.7588V12.1622C19.7588 10.6163 18.5012 9.35869 16.9554 9.35869H12.6399C11.094 9.35869 9.83643 10.6163 9.83643 12.1622V18.3503H5.2917C3.7459 18.3503 2.48828 19.6079 2.48828 21.1538V42.7402C2.48828 44.286 3.7459 45.5437 5.2917 45.5437H5.65654C5.48955 45.8765 5.39482 46.2517 5.39482 46.6487C5.39482 48.012 6.50381 49.1211 7.86709 49.1211C9.23037 49.1211 10.3395 48.012 10.3395 46.6487C10.3395 46.2517 10.2448 45.8765 10.0777 45.5437H19.5172C19.3502 45.8765 19.2555 46.2517 19.2555 46.6487C19.2555 48.012 20.3645 49.1211 21.7277 49.1211C23.091 49.1211 24.2 48.012 24.2 46.6487C24.2 46.2517 24.1054 45.8765 23.9383 45.5437H24.3031C24.5435 45.5437 24.7769 45.5132 24.9996 45.4561C25.2262 45.5143 25.4592 45.5437 25.6951 45.5437H26.06C25.893 45.8765 25.7982 46.2517 25.7982 46.6487C25.7982 48.012 26.9072 49.1211 28.2705 49.1211C29.6338 49.1211 30.7429 48.012 30.7429 46.6487C30.7429 46.2517 30.6482 45.8765 30.4812 45.5437H39.9206C39.7536 45.8765 39.6589 46.2517 39.6589 46.6487C39.6589 48.012 40.7679 49.1211 42.1312 49.1211C43.4944 49.1211 44.6034 48.012 44.6034 46.6487C44.6034 46.2517 44.5088 45.8765 44.3417 45.5437H44.7065C46.2524 45.5437 47.5101 44.286 47.5101 42.7402V12.6738C47.5105 11.128 46.2529 9.87041 44.707 9.87041ZM31.6072 3.68242C31.6072 2.89043 32.2516 2.24609 33.0436 2.24609H37.359C38.1509 2.24609 38.7952 2.89043 38.7952 3.68242V9.87051H31.6072V3.68242ZM11.2035 12.1622C11.2035 11.3702 11.8479 10.7259 12.6398 10.7259H16.9553C17.7472 10.7259 18.3915 11.3702 18.3915 12.1622V18.3503H11.2035V12.1622ZM8.97236 46.6487C8.97236 47.2581 8.47656 47.7539 7.86719 47.7539C7.25781 47.7539 6.76211 47.2581 6.76211 46.6487C6.76211 46.0394 7.25781 45.5437 7.86719 45.5437C8.47656 45.5437 8.97236 46.0393 8.97236 46.6487ZM22.833 46.6487C22.833 47.2581 22.3373 47.7539 21.7279 47.7539C21.1186 47.7539 20.6229 47.2581 20.6229 46.6487C20.6229 46.0394 21.1186 45.5437 21.7279 45.5437C22.3373 45.5437 22.833 46.0393 22.833 46.6487ZM5.2917 44.1764C4.4998 44.1764 3.85547 43.532 3.85547 42.7401V21.1537C3.85547 20.3617 4.4998 19.7174 5.2917 19.7174H24.3034C25.0954 19.7174 25.7397 20.3617 25.7397 21.1537V42.7401C25.7397 43.532 25.0954 44.1764 24.3034 44.1764H5.2917ZM29.3761 46.6487C29.3761 47.2581 28.8803 47.7539 28.2709 47.7539C27.6615 47.7539 27.1658 47.2581 27.1658 46.6487C27.1658 46.0394 27.6615 45.5437 28.2709 45.5437C28.8803 45.5437 29.3761 46.0393 29.3761 46.6487ZM43.2367 46.6487C43.2367 47.2581 42.741 47.7539 42.1316 47.7539C41.5223 47.7539 41.0266 47.2581 41.0266 46.6487C41.0266 46.0394 41.5223 45.5437 42.1316 45.5437C42.741 45.5437 43.2367 46.0393 43.2367 46.6487ZM46.1434 42.7401C46.1434 43.532 45.499 44.1764 44.707 44.1764H26.7099C26.9617 43.7561 27.1068 43.2647 27.1068 42.7401V21.1537C27.1068 19.6078 25.8492 18.3502 24.3033 18.3502H24.2591V12.6738C24.2591 11.8819 24.9034 11.2376 25.6953 11.2376H44.707C45.499 11.2376 46.1434 11.8819 46.1434 12.6738V42.7401ZM41.6976 15.7549V39.6591C41.6976 40.0366 41.3915 40.3427 41.014 40.3427C40.6364 40.3427 40.3304 40.0366 40.3304 39.6591V15.7549C40.3304 15.3773 40.6364 15.0713 41.014 15.0713C41.3915 15.0713 41.6976 15.3773 41.6976 15.7549ZM35.8848 15.7549V39.6591C35.8848 40.0366 35.5787 40.3427 35.2012 40.3427C34.8236 40.3427 34.5176 40.0366 34.5176 39.6591V15.7549C34.5176 15.3773 34.8236 15.0713 35.2012 15.0713C35.5787 15.0713 35.8848 15.3773 35.8848 15.7549ZM30.072 15.7549V39.6591C30.072 40.0366 29.7659 40.3427 29.3884 40.3427C29.0108 40.3427 28.7048 40.0366 28.7048 39.6591V15.7549C28.7048 15.3773 29.0108 15.0713 29.3884 15.0713C29.7659 15.0713 30.072 15.3773 30.072 15.7549ZM21.2939 24.2348V39.6592C21.2939 40.0367 20.9879 40.3428 20.6104 40.3428C20.2328 40.3428 19.9268 40.0367 19.9268 39.6592V24.2348C19.9268 23.8572 20.2328 23.5512 20.6104 23.5512C20.9879 23.5512 21.2939 23.8571 21.2939 24.2348ZM9.66826 24.2348V39.6592C9.66826 40.0367 9.36221 40.3428 8.98467 40.3428C8.60713 40.3428 8.30107 40.0367 8.30107 39.6592V24.2348C8.30107 23.8572 8.60713 23.5512 8.98467 23.5512C9.36221 23.5512 9.66826 23.8571 9.66826 24.2348ZM15.4812 24.2348V39.6592C15.4812 40.0367 15.1751 40.3428 14.7976 40.3428C14.42 40.3428 14.114 40.0367 14.114 39.6592V24.2348C14.114 23.8572 14.42 23.5512 14.7976 23.5512C15.1751 23.5512 15.4812 23.8571 15.4812 24.2348Z" fill="#0072FF" />
                    </svg>
                    <div>
                      <p class="fw-normal text-secondary text-b6-regular mb-0">Luggage</p>
                      <h3 class="text-dark text-h6 fw-medium">Luggage</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Slider Item -->
          <div class="swiper-slide mb-5">
            <div class="card card--product card--product-2 h-100">
              <div class="card--product__thumb mb-3">
                <img class="img-fluid w-100 rounded-3" src="{{ asset('/assets-v2/img/products/category-1.png') }}" alt="">
              </div>
              <div class="card--product__content px-0 px-lg-4 space-y-3 flex-fill d-flex flex-column align-items-start">
                <div class="mb-5 d-flex flex-wrap flex-fill w-100 justify-content-between align-items-center">
                  <h5 class="card--product__title text-h5 mb-4">Compact city cruiser</h5>
                  <div class="text-b1-semibold">
                    <span class="text-primary">$150</span>
                    /<span class="text-secondary text-opacity-50 fw-normal text-b6-regular">per day</span>
                  </div>
                </div>

                <div class="d-flex w-100 align-items-center card--product__features">
                  <!-- Flex Fill -->
                  <div class="list-item flex-fill gap-2">
                    <svg class="img-fluid" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M34.9943 48.6487H15.0078V37.0743H34.9943V48.6487ZM16.3592 47.2973H33.6429V38.4257H16.3592V47.2973Z" fill="#0072FF" />
                      <path d="M34.8068 48.6486H34.2933L34.3473 47.2973C40.5703 47.5473 41.469 42.3986 41.5027 42.1824V42.1081C42.773 37.3784 39.5568 36.4189 39.4217 36.3851C37.3136 35.7095 34.8136 38.2027 34.7933 38.2297L33.8203 37.2838C33.9487 37.1554 36.9014 34.1622 39.8 35.0878C40.9114 35.4428 41.8523 36.196 42.4419 37.2027C43.246 38.5541 43.3744 40.3311 42.8203 42.4324C42.7257 43 41.4757 48.6486 34.8068 48.6486Z" fill="#0072FF" />
                      <path d="M15.1969 48.6487C8.52796 48.6487 7.27796 43 7.16985 42.4257C6.6158 40.3243 6.74418 38.5676 7.54823 37.196C8.15004 36.1724 9.11481 35.4126 10.2509 35.0676C13.1158 34.1487 16.0617 37.1487 16.1901 37.277L15.2172 38.223C15.2172 38.223 12.7239 35.696 10.6226 36.3649C10.4536 36.4122 7.24418 37.3446 8.50769 42.1014V42.1757C8.54148 42.3919 9.43337 47.5405 15.6631 47.2905L15.7172 48.6419L15.1969 48.6487Z" fill="#0072FF" />
                      <path d="M38.7494 35.8108C38.6615 35.473 36.621 27.4595 37.1683 20.5V20.4189C37.2829 19.7471 37.2637 19.0592 37.1118 18.3948C36.96 17.7304 36.6783 17.1026 36.2831 16.5473C35.3913 15.4865 33.8642 14.9324 31.7561 14.9324H18.2426C16.121 14.9324 14.594 15.4865 13.6953 16.5743C13.3048 17.1316 13.028 17.7603 12.8808 18.4247C12.7335 19.089 12.7187 19.7759 12.8372 20.4459V20.527C13.3845 27.4865 11.344 35.5 11.2561 35.8378L9.94531 35.5C9.94531 35.4189 12.0061 27.3919 11.4926 20.6351C11.345 19.7756 11.3725 18.895 11.5733 18.0463C11.7742 17.1976 12.1443 16.3982 12.6615 15.6959C13.8304 14.277 15.7156 13.554 18.2629 13.554H31.7561C34.3034 13.554 36.1886 14.277 37.3575 15.6959C37.8759 16.4026 38.2456 17.207 38.4442 18.0606C38.6428 18.9142 38.6662 19.7993 38.5129 20.6622C37.9994 27.4189 40.0332 35.4189 40.0602 35.527L38.7494 35.8108Z" fill="#0072FF" />
                      <path d="M32.479 38.4257H17.5195V14.2567H18.8709V37.0743H31.1276V14.2567H32.479V38.4257Z" fill="#0072FF" />
                      <path d="M18.1953 23.5946H31.8034V24.946H18.1953V23.5946Z" fill="#0072FF" />
                      <path d="M28.8301 14.9324H21.168V10.7027H28.8301V14.9324ZM22.5193 13.5811H27.4788V12.054H22.5193V13.5811Z" fill="#0072FF" />
                      <path d="M30.1741 12.0541H19.8228C19.4802 12.0542 19.1414 11.9821 18.8285 11.8425C18.5156 11.703 18.2356 11.4991 18.0067 11.2441C17.7779 10.9891 17.6053 10.6888 17.5003 10.3627C17.3952 10.0365 17.3601 9.69196 17.3971 9.35135L17.9782 3.53379C18.0402 2.93292 18.3237 2.37665 18.7733 1.97324C19.2229 1.56983 19.8065 1.34815 20.4106 1.35135H29.5863C30.1935 1.34864 30.7798 1.57314 31.2299 1.98074C31.68 2.38833 31.9614 2.94954 32.0187 3.55406L32.5998 9.36487C32.6368 9.70547 32.6017 10.0501 32.4966 10.3762C32.3916 10.7023 32.219 11.0026 31.9902 11.2576C31.7613 11.5126 31.4813 11.7165 31.1684 11.856C30.8555 11.9956 30.5167 12.0677 30.1741 12.0676V12.0541ZM20.4106 2.7027C20.1399 2.70136 19.8784 2.80102 19.6772 2.98219C19.476 3.16337 19.3497 3.41305 19.3228 3.68243L18.7417 9.5C18.7245 9.65189 18.7396 9.8057 18.7862 9.95129C18.8328 10.0969 18.9098 10.2309 19.012 10.3446C19.1144 10.4579 19.2395 10.5483 19.3792 10.61C19.5189 10.6717 19.6701 10.7033 19.8228 10.7027H30.1741C30.3268 10.7033 30.478 10.6717 30.6177 10.61C30.7573 10.5483 30.8825 10.4579 30.9849 10.3446C31.0871 10.2309 31.1641 10.0969 31.2106 9.95129C31.2572 9.8057 31.2724 9.65189 31.2552 9.5L30.6741 3.68919C30.6488 3.41859 30.5231 3.16726 30.3218 2.98469C30.1204 2.80212 29.8581 2.70152 29.5863 2.7027H20.4106Z" fill="#0072FF" />
                    </svg>
                    <div>
                      <p class="fw-normal text-secondary text-b6-regular mb-0">Seat</p>
                      <h3 class="text-dark text-h6 fw-medium">4</h3>
                    </div>
                  </div>
                  <!-- Flex Fill -->
                  <div class="list-item flex-fill gap-2">
                    <svg class="img-fluid" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M44.0477 0C40.7667 0 38.0953 2.67143 38.0953 5.95234C38.0953 8.82612 40.143 11.2309 42.8573 11.7833V23.8095H26.1905V11.7834C28.9048 11.231 30.9525 8.82623 30.9525 5.95246C30.9523 2.67143 28.2809 0 25 0C21.7191 0 19.0477 2.67143 19.0477 5.95234C19.0477 8.82612 21.0953 11.2309 23.8096 11.7833V23.8095H7.14286V11.7834C9.85714 11.231 11.9048 8.82623 11.9048 5.95246C11.9048 2.67143 9.23337 0 5.95234 0C2.67132 0 0 2.67143 0 5.95234C0 8.82612 2.04766 11.2309 4.76194 11.7833V38.2166C2.04766 38.7691 0 41.1738 0 44.0477C0 47.3286 2.67143 50 5.95234 50C9.23326 50 11.9047 47.3286 11.9047 44.0477C11.9047 41.1739 9.85703 38.7691 7.14275 38.2167V26.1905H23.8094V38.2167C21.0951 38.7691 19.0474 41.1739 19.0474 44.0477C19.0477 47.3286 21.7191 50 25 50C28.2809 50 30.9523 47.3286 30.9523 44.0477C30.9523 41.1739 28.9047 38.7691 26.1904 38.2167V26.1905H44.0475C44.7047 26.1905 45.2381 25.6571 45.2381 25V11.7834C47.9523 11.2309 50 8.82623 50 5.95234C50 2.67143 47.3286 0 44.0477 0ZM9.52377 44.0477C9.52377 46.0167 7.92143 47.6191 5.95234 47.6191C3.98326 47.6191 2.38092 46.0167 2.38092 44.0477C2.38092 42.0786 3.98326 40.4762 5.95234 40.4762C7.92143 40.4762 9.52377 42.0786 9.52377 44.0477ZM5.95234 9.52377C3.98326 9.52377 2.38092 7.92143 2.38092 5.95234C2.38092 3.98326 3.98326 2.38092 5.95234 2.38092C7.92143 2.38092 9.52377 3.98326 9.52377 5.95234C9.52377 7.92143 7.92143 9.52377 5.95234 9.52377ZM28.5714 44.0477C28.5714 46.0167 26.9691 47.6191 25 47.6191C23.0309 47.6191 21.4286 46.0167 21.4286 44.0477C21.4286 42.0786 23.0309 40.4762 25 40.4762C26.9691 40.4762 28.5714 42.0786 28.5714 44.0477ZM25 9.52377C23.0309 9.52377 21.4286 7.92143 21.4286 5.95234C21.4286 3.98326 23.0309 2.38092 25 2.38092C26.9691 2.38092 28.5714 3.98326 28.5714 5.95234C28.5714 7.92143 26.9691 9.52377 25 9.52377ZM44.0477 9.52377C42.0786 9.52377 40.4762 7.92143 40.4762 5.95234C40.4762 3.98326 42.0786 2.38092 44.0477 2.38092C46.0167 2.38092 47.6191 3.98326 47.6191 5.95234C47.6191 7.92143 46.0166 9.52377 44.0477 9.52377Z" fill="#0072FF" />
                    </svg>
                    <div>
                      <p class="fw-normal text-secondary text-b6-regular mb-0">Gearbox</p>
                      <h3 class="text-dark text-h6 fw-medium">Manual</h3>
                    </div>
                  </div>
                  <!-- Flex Fill -->
                  <div class="list-item flex-fill gap-2">
                    <svg class="img-fluid" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M44.707 9.87041H40.1624V3.68242C40.1624 2.13652 38.9048 0.878906 37.359 0.878906H33.0436C31.4977 0.878906 30.24 2.13652 30.24 3.68242V9.87051H25.6954C24.1496 9.87051 22.892 11.1281 22.892 12.6739V18.3503H19.7588V12.1622C19.7588 10.6163 18.5012 9.35869 16.9554 9.35869H12.6399C11.094 9.35869 9.83643 10.6163 9.83643 12.1622V18.3503H5.2917C3.7459 18.3503 2.48828 19.6079 2.48828 21.1538V42.7402C2.48828 44.286 3.7459 45.5437 5.2917 45.5437H5.65654C5.48955 45.8765 5.39482 46.2517 5.39482 46.6487C5.39482 48.012 6.50381 49.1211 7.86709 49.1211C9.23037 49.1211 10.3395 48.012 10.3395 46.6487C10.3395 46.2517 10.2448 45.8765 10.0777 45.5437H19.5172C19.3502 45.8765 19.2555 46.2517 19.2555 46.6487C19.2555 48.012 20.3645 49.1211 21.7277 49.1211C23.091 49.1211 24.2 48.012 24.2 46.6487C24.2 46.2517 24.1054 45.8765 23.9383 45.5437H24.3031C24.5435 45.5437 24.7769 45.5132 24.9996 45.4561C25.2262 45.5143 25.4592 45.5437 25.6951 45.5437H26.06C25.893 45.8765 25.7982 46.2517 25.7982 46.6487C25.7982 48.012 26.9072 49.1211 28.2705 49.1211C29.6338 49.1211 30.7429 48.012 30.7429 46.6487C30.7429 46.2517 30.6482 45.8765 30.4812 45.5437H39.9206C39.7536 45.8765 39.6589 46.2517 39.6589 46.6487C39.6589 48.012 40.7679 49.1211 42.1312 49.1211C43.4944 49.1211 44.6034 48.012 44.6034 46.6487C44.6034 46.2517 44.5088 45.8765 44.3417 45.5437H44.7065C46.2524 45.5437 47.5101 44.286 47.5101 42.7402V12.6738C47.5105 11.128 46.2529 9.87041 44.707 9.87041ZM31.6072 3.68242C31.6072 2.89043 32.2516 2.24609 33.0436 2.24609H37.359C38.1509 2.24609 38.7952 2.89043 38.7952 3.68242V9.87051H31.6072V3.68242ZM11.2035 12.1622C11.2035 11.3702 11.8479 10.7259 12.6398 10.7259H16.9553C17.7472 10.7259 18.3915 11.3702 18.3915 12.1622V18.3503H11.2035V12.1622ZM8.97236 46.6487C8.97236 47.2581 8.47656 47.7539 7.86719 47.7539C7.25781 47.7539 6.76211 47.2581 6.76211 46.6487C6.76211 46.0394 7.25781 45.5437 7.86719 45.5437C8.47656 45.5437 8.97236 46.0393 8.97236 46.6487ZM22.833 46.6487C22.833 47.2581 22.3373 47.7539 21.7279 47.7539C21.1186 47.7539 20.6229 47.2581 20.6229 46.6487C20.6229 46.0394 21.1186 45.5437 21.7279 45.5437C22.3373 45.5437 22.833 46.0393 22.833 46.6487ZM5.2917 44.1764C4.4998 44.1764 3.85547 43.532 3.85547 42.7401V21.1537C3.85547 20.3617 4.4998 19.7174 5.2917 19.7174H24.3034C25.0954 19.7174 25.7397 20.3617 25.7397 21.1537V42.7401C25.7397 43.532 25.0954 44.1764 24.3034 44.1764H5.2917ZM29.3761 46.6487C29.3761 47.2581 28.8803 47.7539 28.2709 47.7539C27.6615 47.7539 27.1658 47.2581 27.1658 46.6487C27.1658 46.0394 27.6615 45.5437 28.2709 45.5437C28.8803 45.5437 29.3761 46.0393 29.3761 46.6487ZM43.2367 46.6487C43.2367 47.2581 42.741 47.7539 42.1316 47.7539C41.5223 47.7539 41.0266 47.2581 41.0266 46.6487C41.0266 46.0394 41.5223 45.5437 42.1316 45.5437C42.741 45.5437 43.2367 46.0393 43.2367 46.6487ZM46.1434 42.7401C46.1434 43.532 45.499 44.1764 44.707 44.1764H26.7099C26.9617 43.7561 27.1068 43.2647 27.1068 42.7401V21.1537C27.1068 19.6078 25.8492 18.3502 24.3033 18.3502H24.2591V12.6738C24.2591 11.8819 24.9034 11.2376 25.6953 11.2376H44.707C45.499 11.2376 46.1434 11.8819 46.1434 12.6738V42.7401ZM41.6976 15.7549V39.6591C41.6976 40.0366 41.3915 40.3427 41.014 40.3427C40.6364 40.3427 40.3304 40.0366 40.3304 39.6591V15.7549C40.3304 15.3773 40.6364 15.0713 41.014 15.0713C41.3915 15.0713 41.6976 15.3773 41.6976 15.7549ZM35.8848 15.7549V39.6591C35.8848 40.0366 35.5787 40.3427 35.2012 40.3427C34.8236 40.3427 34.5176 40.0366 34.5176 39.6591V15.7549C34.5176 15.3773 34.8236 15.0713 35.2012 15.0713C35.5787 15.0713 35.8848 15.3773 35.8848 15.7549ZM30.072 15.7549V39.6591C30.072 40.0366 29.7659 40.3427 29.3884 40.3427C29.0108 40.3427 28.7048 40.0366 28.7048 39.6591V15.7549C28.7048 15.3773 29.0108 15.0713 29.3884 15.0713C29.7659 15.0713 30.072 15.3773 30.072 15.7549ZM21.2939 24.2348V39.6592C21.2939 40.0367 20.9879 40.3428 20.6104 40.3428C20.2328 40.3428 19.9268 40.0367 19.9268 39.6592V24.2348C19.9268 23.8572 20.2328 23.5512 20.6104 23.5512C20.9879 23.5512 21.2939 23.8571 21.2939 24.2348ZM9.66826 24.2348V39.6592C9.66826 40.0367 9.36221 40.3428 8.98467 40.3428C8.60713 40.3428 8.30107 40.0367 8.30107 39.6592V24.2348C8.30107 23.8572 8.60713 23.5512 8.98467 23.5512C9.36221 23.5512 9.66826 23.8571 9.66826 24.2348ZM15.4812 24.2348V39.6592C15.4812 40.0367 15.1751 40.3428 14.7976 40.3428C14.42 40.3428 14.114 40.0367 14.114 39.6592V24.2348C14.114 23.8572 14.42 23.5512 14.7976 23.5512C15.1751 23.5512 15.4812 23.8571 15.4812 24.2348Z" fill="#0072FF" />
                    </svg>
                    <div>
                      <p class="fw-normal text-secondary text-b6-regular mb-0">Luggage</p>
                      <h3 class="text-dark text-h6 fw-medium">Luggage</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Slider Item -->
          <div class="swiper-slide mb-5">
            <div class="card card--product card--product-2 h-100">
              <div class="card--product__thumb mb-3">
                <img class="img-fluid w-100 rounded-3" src="{{ asset('/assets-v2/img/products/category-1.png') }}" alt="">
              </div>
              <div class="card--product__content px-0 px-lg-4 space-y-3 flex-fill d-flex flex-column align-items-start">
                <div class="mb-5 d-flex flex-wrap flex-fill w-100 justify-content-between align-items-center">
                  <h5 class="card--product__title text-h5 mb-4">Compact city cruiser</h5>
                  <div class="text-b1-semibold">
                    <span class="text-primary">$150</span>
                    /<span class="text-secondary text-opacity-50 fw-normal text-b6-regular">per day</span>
                  </div>
                </div>

                <div class="d-flex w-100 align-items-center card--product__features">
                  <!-- Flex Fill -->
                  <div class="list-item flex-fill gap-2">
                    <svg class="img-fluid" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M34.9943 48.6487H15.0078V37.0743H34.9943V48.6487ZM16.3592 47.2973H33.6429V38.4257H16.3592V47.2973Z" fill="#0072FF" />
                      <path d="M34.8068 48.6486H34.2933L34.3473 47.2973C40.5703 47.5473 41.469 42.3986 41.5027 42.1824V42.1081C42.773 37.3784 39.5568 36.4189 39.4217 36.3851C37.3136 35.7095 34.8136 38.2027 34.7933 38.2297L33.8203 37.2838C33.9487 37.1554 36.9014 34.1622 39.8 35.0878C40.9114 35.4428 41.8523 36.196 42.4419 37.2027C43.246 38.5541 43.3744 40.3311 42.8203 42.4324C42.7257 43 41.4757 48.6486 34.8068 48.6486Z" fill="#0072FF" />
                      <path d="M15.1969 48.6487C8.52796 48.6487 7.27796 43 7.16985 42.4257C6.6158 40.3243 6.74418 38.5676 7.54823 37.196C8.15004 36.1724 9.11481 35.4126 10.2509 35.0676C13.1158 34.1487 16.0617 37.1487 16.1901 37.277L15.2172 38.223C15.2172 38.223 12.7239 35.696 10.6226 36.3649C10.4536 36.4122 7.24418 37.3446 8.50769 42.1014V42.1757C8.54148 42.3919 9.43337 47.5405 15.6631 47.2905L15.7172 48.6419L15.1969 48.6487Z" fill="#0072FF" />
                      <path d="M38.7494 35.8108C38.6615 35.473 36.621 27.4595 37.1683 20.5V20.4189C37.2829 19.7471 37.2637 19.0592 37.1118 18.3948C36.96 17.7304 36.6783 17.1026 36.2831 16.5473C35.3913 15.4865 33.8642 14.9324 31.7561 14.9324H18.2426C16.121 14.9324 14.594 15.4865 13.6953 16.5743C13.3048 17.1316 13.028 17.7603 12.8808 18.4247C12.7335 19.089 12.7187 19.7759 12.8372 20.4459V20.527C13.3845 27.4865 11.344 35.5 11.2561 35.8378L9.94531 35.5C9.94531 35.4189 12.0061 27.3919 11.4926 20.6351C11.345 19.7756 11.3725 18.895 11.5733 18.0463C11.7742 17.1976 12.1443 16.3982 12.6615 15.6959C13.8304 14.277 15.7156 13.554 18.2629 13.554H31.7561C34.3034 13.554 36.1886 14.277 37.3575 15.6959C37.8759 16.4026 38.2456 17.207 38.4442 18.0606C38.6428 18.9142 38.6662 19.7993 38.5129 20.6622C37.9994 27.4189 40.0332 35.4189 40.0602 35.527L38.7494 35.8108Z" fill="#0072FF" />
                      <path d="M32.479 38.4257H17.5195V14.2567H18.8709V37.0743H31.1276V14.2567H32.479V38.4257Z" fill="#0072FF" />
                      <path d="M18.1953 23.5946H31.8034V24.946H18.1953V23.5946Z" fill="#0072FF" />
                      <path d="M28.8301 14.9324H21.168V10.7027H28.8301V14.9324ZM22.5193 13.5811H27.4788V12.054H22.5193V13.5811Z" fill="#0072FF" />
                      <path d="M30.1741 12.0541H19.8228C19.4802 12.0542 19.1414 11.9821 18.8285 11.8425C18.5156 11.703 18.2356 11.4991 18.0067 11.2441C17.7779 10.9891 17.6053 10.6888 17.5003 10.3627C17.3952 10.0365 17.3601 9.69196 17.3971 9.35135L17.9782 3.53379C18.0402 2.93292 18.3237 2.37665 18.7733 1.97324C19.2229 1.56983 19.8065 1.34815 20.4106 1.35135H29.5863C30.1935 1.34864 30.7798 1.57314 31.2299 1.98074C31.68 2.38833 31.9614 2.94954 32.0187 3.55406L32.5998 9.36487C32.6368 9.70547 32.6017 10.0501 32.4966 10.3762C32.3916 10.7023 32.219 11.0026 31.9902 11.2576C31.7613 11.5126 31.4813 11.7165 31.1684 11.856C30.8555 11.9956 30.5167 12.0677 30.1741 12.0676V12.0541ZM20.4106 2.7027C20.1399 2.70136 19.8784 2.80102 19.6772 2.98219C19.476 3.16337 19.3497 3.41305 19.3228 3.68243L18.7417 9.5C18.7245 9.65189 18.7396 9.8057 18.7862 9.95129C18.8328 10.0969 18.9098 10.2309 19.012 10.3446C19.1144 10.4579 19.2395 10.5483 19.3792 10.61C19.5189 10.6717 19.6701 10.7033 19.8228 10.7027H30.1741C30.3268 10.7033 30.478 10.6717 30.6177 10.61C30.7573 10.5483 30.8825 10.4579 30.9849 10.3446C31.0871 10.2309 31.1641 10.0969 31.2106 9.95129C31.2572 9.8057 31.2724 9.65189 31.2552 9.5L30.6741 3.68919C30.6488 3.41859 30.5231 3.16726 30.3218 2.98469C30.1204 2.80212 29.8581 2.70152 29.5863 2.7027H20.4106Z" fill="#0072FF" />
                    </svg>
                    <div>
                      <p class="fw-normal text-secondary text-b6-regular mb-0">Seat</p>
                      <h3 class="text-dark text-h6 fw-medium">4</h3>
                    </div>
                  </div>
                  <!-- Flex Fill -->
                  <div class="list-item flex-fill gap-2">
                    <svg class="img-fluid" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M44.0477 0C40.7667 0 38.0953 2.67143 38.0953 5.95234C38.0953 8.82612 40.143 11.2309 42.8573 11.7833V23.8095H26.1905V11.7834C28.9048 11.231 30.9525 8.82623 30.9525 5.95246C30.9523 2.67143 28.2809 0 25 0C21.7191 0 19.0477 2.67143 19.0477 5.95234C19.0477 8.82612 21.0953 11.2309 23.8096 11.7833V23.8095H7.14286V11.7834C9.85714 11.231 11.9048 8.82623 11.9048 5.95246C11.9048 2.67143 9.23337 0 5.95234 0C2.67132 0 0 2.67143 0 5.95234C0 8.82612 2.04766 11.2309 4.76194 11.7833V38.2166C2.04766 38.7691 0 41.1738 0 44.0477C0 47.3286 2.67143 50 5.95234 50C9.23326 50 11.9047 47.3286 11.9047 44.0477C11.9047 41.1739 9.85703 38.7691 7.14275 38.2167V26.1905H23.8094V38.2167C21.0951 38.7691 19.0474 41.1739 19.0474 44.0477C19.0477 47.3286 21.7191 50 25 50C28.2809 50 30.9523 47.3286 30.9523 44.0477C30.9523 41.1739 28.9047 38.7691 26.1904 38.2167V26.1905H44.0475C44.7047 26.1905 45.2381 25.6571 45.2381 25V11.7834C47.9523 11.2309 50 8.82623 50 5.95234C50 2.67143 47.3286 0 44.0477 0ZM9.52377 44.0477C9.52377 46.0167 7.92143 47.6191 5.95234 47.6191C3.98326 47.6191 2.38092 46.0167 2.38092 44.0477C2.38092 42.0786 3.98326 40.4762 5.95234 40.4762C7.92143 40.4762 9.52377 42.0786 9.52377 44.0477ZM5.95234 9.52377C3.98326 9.52377 2.38092 7.92143 2.38092 5.95234C2.38092 3.98326 3.98326 2.38092 5.95234 2.38092C7.92143 2.38092 9.52377 3.98326 9.52377 5.95234C9.52377 7.92143 7.92143 9.52377 5.95234 9.52377ZM28.5714 44.0477C28.5714 46.0167 26.9691 47.6191 25 47.6191C23.0309 47.6191 21.4286 46.0167 21.4286 44.0477C21.4286 42.0786 23.0309 40.4762 25 40.4762C26.9691 40.4762 28.5714 42.0786 28.5714 44.0477ZM25 9.52377C23.0309 9.52377 21.4286 7.92143 21.4286 5.95234C21.4286 3.98326 23.0309 2.38092 25 2.38092C26.9691 2.38092 28.5714 3.98326 28.5714 5.95234C28.5714 7.92143 26.9691 9.52377 25 9.52377ZM44.0477 9.52377C42.0786 9.52377 40.4762 7.92143 40.4762 5.95234C40.4762 3.98326 42.0786 2.38092 44.0477 2.38092C46.0167 2.38092 47.6191 3.98326 47.6191 5.95234C47.6191 7.92143 46.0166 9.52377 44.0477 9.52377Z" fill="#0072FF" />
                    </svg>
                    <div>
                      <p class="fw-normal text-secondary text-b6-regular mb-0">Gearbox</p>
                      <h3 class="text-dark text-h6 fw-medium">Manual</h3>
                    </div>
                  </div>
                  <!-- Flex Fill -->
                  <div class="list-item flex-fill gap-2">
                    <svg class="img-fluid" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M44.707 9.87041H40.1624V3.68242C40.1624 2.13652 38.9048 0.878906 37.359 0.878906H33.0436C31.4977 0.878906 30.24 2.13652 30.24 3.68242V9.87051H25.6954C24.1496 9.87051 22.892 11.1281 22.892 12.6739V18.3503H19.7588V12.1622C19.7588 10.6163 18.5012 9.35869 16.9554 9.35869H12.6399C11.094 9.35869 9.83643 10.6163 9.83643 12.1622V18.3503H5.2917C3.7459 18.3503 2.48828 19.6079 2.48828 21.1538V42.7402C2.48828 44.286 3.7459 45.5437 5.2917 45.5437H5.65654C5.48955 45.8765 5.39482 46.2517 5.39482 46.6487C5.39482 48.012 6.50381 49.1211 7.86709 49.1211C9.23037 49.1211 10.3395 48.012 10.3395 46.6487C10.3395 46.2517 10.2448 45.8765 10.0777 45.5437H19.5172C19.3502 45.8765 19.2555 46.2517 19.2555 46.6487C19.2555 48.012 20.3645 49.1211 21.7277 49.1211C23.091 49.1211 24.2 48.012 24.2 46.6487C24.2 46.2517 24.1054 45.8765 23.9383 45.5437H24.3031C24.5435 45.5437 24.7769 45.5132 24.9996 45.4561C25.2262 45.5143 25.4592 45.5437 25.6951 45.5437H26.06C25.893 45.8765 25.7982 46.2517 25.7982 46.6487C25.7982 48.012 26.9072 49.1211 28.2705 49.1211C29.6338 49.1211 30.7429 48.012 30.7429 46.6487C30.7429 46.2517 30.6482 45.8765 30.4812 45.5437H39.9206C39.7536 45.8765 39.6589 46.2517 39.6589 46.6487C39.6589 48.012 40.7679 49.1211 42.1312 49.1211C43.4944 49.1211 44.6034 48.012 44.6034 46.6487C44.6034 46.2517 44.5088 45.8765 44.3417 45.5437H44.7065C46.2524 45.5437 47.5101 44.286 47.5101 42.7402V12.6738C47.5105 11.128 46.2529 9.87041 44.707 9.87041ZM31.6072 3.68242C31.6072 2.89043 32.2516 2.24609 33.0436 2.24609H37.359C38.1509 2.24609 38.7952 2.89043 38.7952 3.68242V9.87051H31.6072V3.68242ZM11.2035 12.1622C11.2035 11.3702 11.8479 10.7259 12.6398 10.7259H16.9553C17.7472 10.7259 18.3915 11.3702 18.3915 12.1622V18.3503H11.2035V12.1622ZM8.97236 46.6487C8.97236 47.2581 8.47656 47.7539 7.86719 47.7539C7.25781 47.7539 6.76211 47.2581 6.76211 46.6487C6.76211 46.0394 7.25781 45.5437 7.86719 45.5437C8.47656 45.5437 8.97236 46.0393 8.97236 46.6487ZM22.833 46.6487C22.833 47.2581 22.3373 47.7539 21.7279 47.7539C21.1186 47.7539 20.6229 47.2581 20.6229 46.6487C20.6229 46.0394 21.1186 45.5437 21.7279 45.5437C22.3373 45.5437 22.833 46.0393 22.833 46.6487ZM5.2917 44.1764C4.4998 44.1764 3.85547 43.532 3.85547 42.7401V21.1537C3.85547 20.3617 4.4998 19.7174 5.2917 19.7174H24.3034C25.0954 19.7174 25.7397 20.3617 25.7397 21.1537V42.7401C25.7397 43.532 25.0954 44.1764 24.3034 44.1764H5.2917ZM29.3761 46.6487C29.3761 47.2581 28.8803 47.7539 28.2709 47.7539C27.6615 47.7539 27.1658 47.2581 27.1658 46.6487C27.1658 46.0394 27.6615 45.5437 28.2709 45.5437C28.8803 45.5437 29.3761 46.0393 29.3761 46.6487ZM43.2367 46.6487C43.2367 47.2581 42.741 47.7539 42.1316 47.7539C41.5223 47.7539 41.0266 47.2581 41.0266 46.6487C41.0266 46.0394 41.5223 45.5437 42.1316 45.5437C42.741 45.5437 43.2367 46.0393 43.2367 46.6487ZM46.1434 42.7401C46.1434 43.532 45.499 44.1764 44.707 44.1764H26.7099C26.9617 43.7561 27.1068 43.2647 27.1068 42.7401V21.1537C27.1068 19.6078 25.8492 18.3502 24.3033 18.3502H24.2591V12.6738C24.2591 11.8819 24.9034 11.2376 25.6953 11.2376H44.707C45.499 11.2376 46.1434 11.8819 46.1434 12.6738V42.7401ZM41.6976 15.7549V39.6591C41.6976 40.0366 41.3915 40.3427 41.014 40.3427C40.6364 40.3427 40.3304 40.0366 40.3304 39.6591V15.7549C40.3304 15.3773 40.6364 15.0713 41.014 15.0713C41.3915 15.0713 41.6976 15.3773 41.6976 15.7549ZM35.8848 15.7549V39.6591C35.8848 40.0366 35.5787 40.3427 35.2012 40.3427C34.8236 40.3427 34.5176 40.0366 34.5176 39.6591V15.7549C34.5176 15.3773 34.8236 15.0713 35.2012 15.0713C35.5787 15.0713 35.8848 15.3773 35.8848 15.7549ZM30.072 15.7549V39.6591C30.072 40.0366 29.7659 40.3427 29.3884 40.3427C29.0108 40.3427 28.7048 40.0366 28.7048 39.6591V15.7549C28.7048 15.3773 29.0108 15.0713 29.3884 15.0713C29.7659 15.0713 30.072 15.3773 30.072 15.7549ZM21.2939 24.2348V39.6592C21.2939 40.0367 20.9879 40.3428 20.6104 40.3428C20.2328 40.3428 19.9268 40.0367 19.9268 39.6592V24.2348C19.9268 23.8572 20.2328 23.5512 20.6104 23.5512C20.9879 23.5512 21.2939 23.8571 21.2939 24.2348ZM9.66826 24.2348V39.6592C9.66826 40.0367 9.36221 40.3428 8.98467 40.3428C8.60713 40.3428 8.30107 40.0367 8.30107 39.6592V24.2348C8.30107 23.8572 8.60713 23.5512 8.98467 23.5512C9.36221 23.5512 9.66826 23.8571 9.66826 24.2348ZM15.4812 24.2348V39.6592C15.4812 40.0367 15.1751 40.3428 14.7976 40.3428C14.42 40.3428 14.114 40.0367 14.114 39.6592V24.2348C14.114 23.8572 14.42 23.5512 14.7976 23.5512C15.1751 23.5512 15.4812 23.8571 15.4812 24.2348Z" fill="#0072FF" />
                    </svg>
                    <div>
                      <p class="fw-normal text-secondary text-b6-regular mb-0">Luggage</p>
                      <h3 class="text-dark text-h6 fw-medium">Luggage</h3>
                    </div>
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
  <!-- /Section: OUR Service Categories -->


  <!-- ==================== Section: OUR Locations ==================== -->
  <script src="{{ asset('/assets-v2/js/components/oy-swiper.js') }}" defer></script>
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
                <div class="card card--branch bg-dark-light border-dark h-100">
                  <div class="card--branch__thumb position-relative">
                    <img src="{{ asset('/assets-v2/img/products/product-1.png')}}" alt="">
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
                          <circle cx="24" cy="24" r="24" fill="#0072FF" fill-opacity="0.14" />
                          <path d="M30.875 17.125V20.875M30.875 17.125H27.125M30.875 17.125L25.875 22.125M28.375 32.125C21.4717 32.125 15.875 26.5283 15.875 19.625V17.75C15.875 17.2527 16.0725 16.7758 16.4242 16.4242C16.7758 16.0725 17.2527 15.875 17.75 15.875H18.8933C19.3233 15.875 19.6983 16.1675 19.8025 16.585L20.7242 20.2708C20.8158 20.6375 20.6792 21.0225 20.3767 21.2483L19.2992 22.0567C19.1449 22.1683 19.0308 22.3267 18.9738 22.5084C18.9167 22.69 18.9198 22.8852 18.9825 23.065C19.4841 24.4293 20.2762 25.6682 21.304 26.696C22.3318 27.7238 23.5707 28.5159 24.935 29.0175C25.3025 29.1525 25.7083 29.0142 25.9433 28.7008L26.7517 27.6233C26.8623 27.4756 27.0141 27.3639 27.188 27.3021C27.3619 27.2402 27.5501 27.2311 27.7292 27.2758L31.415 28.1975C31.8317 28.3017 32.125 28.6767 32.125 29.1067V30.25C32.125 30.7473 31.9275 31.2242 31.5758 31.5758C31.2242 31.9275 30.7473 32.125 30.25 32.125H28.375Z" stroke="#0072FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
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
                    <img src="{{ asset('/assets-v2/img/products/product-1.png') }}" alt="">
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
                          <circle cx="24" cy="24" r="24" fill="#0072FF" fill-opacity="0.14" />
                          <path d="M30.875 17.125V20.875M30.875 17.125H27.125M30.875 17.125L25.875 22.125M28.375 32.125C21.4717 32.125 15.875 26.5283 15.875 19.625V17.75C15.875 17.2527 16.0725 16.7758 16.4242 16.4242C16.7758 16.0725 17.2527 15.875 17.75 15.875H18.8933C19.3233 15.875 19.6983 16.1675 19.8025 16.585L20.7242 20.2708C20.8158 20.6375 20.6792 21.0225 20.3767 21.2483L19.2992 22.0567C19.1449 22.1683 19.0308 22.3267 18.9738 22.5084C18.9167 22.69 18.9198 22.8852 18.9825 23.065C19.4841 24.4293 20.2762 25.6682 21.304 26.696C22.3318 27.7238 23.5707 28.5159 24.935 29.0175C25.3025 29.1525 25.7083 29.0142 25.9433 28.7008L26.7517 27.6233C26.8623 27.4756 27.0141 27.3639 27.188 27.3021C27.3619 27.2402 27.5501 27.2311 27.7292 27.2758L31.415 28.1975C31.8317 28.3017 32.125 28.6767 32.125 29.1067V30.25C32.125 30.7473 31.9275 31.2242 31.5758 31.5758C31.2242 31.9275 30.7473 32.125 30.25 32.125H28.375Z" stroke="#0072FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
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
                    <img src="{{ asset('/assets-v2/img/products/product-1.png') }}" alt="">
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
                          <circle cx="24" cy="24" r="24" fill="#0072FF" fill-opacity="0.14" />
                          <path d="M30.875 17.125V20.875M30.875 17.125H27.125M30.875 17.125L25.875 22.125M28.375 32.125C21.4717 32.125 15.875 26.5283 15.875 19.625V17.75C15.875 17.2527 16.0725 16.7758 16.4242 16.4242C16.7758 16.0725 17.2527 15.875 17.75 15.875H18.8933C19.3233 15.875 19.6983 16.1675 19.8025 16.585L20.7242 20.2708C20.8158 20.6375 20.6792 21.0225 20.3767 21.2483L19.2992 22.0567C19.1449 22.1683 19.0308 22.3267 18.9738 22.5084C18.9167 22.69 18.9198 22.8852 18.9825 23.065C19.4841 24.4293 20.2762 25.6682 21.304 26.696C22.3318 27.7238 23.5707 28.5159 24.935 29.0175C25.3025 29.1525 25.7083 29.0142 25.9433 28.7008L26.7517 27.6233C26.8623 27.4756 27.0141 27.3639 27.188 27.3021C27.3619 27.2402 27.5501 27.2311 27.7292 27.2758L31.415 28.1975C31.8317 28.3017 32.125 28.6767 32.125 29.1067V30.25C32.125 30.7473 31.9275 31.2242 31.5758 31.5758C31.2242 31.9275 30.7473 32.125 30.25 32.125H28.375Z" stroke="#0072FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
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
                    <img src="{{ asset('/assets-v2/img/products/product-1.png') }}" alt="">
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
                          <circle cx="24" cy="24" r="24" fill="#0072FF" fill-opacity="0.14" />
                          <path d="M30.875 17.125V20.875M30.875 17.125H27.125M30.875 17.125L25.875 22.125M28.375 32.125C21.4717 32.125 15.875 26.5283 15.875 19.625V17.75C15.875 17.2527 16.0725 16.7758 16.4242 16.4242C16.7758 16.0725 17.2527 15.875 17.75 15.875H18.8933C19.3233 15.875 19.6983 16.1675 19.8025 16.585L20.7242 20.2708C20.8158 20.6375 20.6792 21.0225 20.3767 21.2483L19.2992 22.0567C19.1449 22.1683 19.0308 22.3267 18.9738 22.5084C18.9167 22.69 18.9198 22.8852 18.9825 23.065C19.4841 24.4293 20.2762 25.6682 21.304 26.696C22.3318 27.7238 23.5707 28.5159 24.935 29.0175C25.3025 29.1525 25.7083 29.0142 25.9433 28.7008L26.7517 27.6233C26.8623 27.4756 27.0141 27.3639 27.188 27.3021C27.3619 27.2402 27.5501 27.2311 27.7292 27.2758L31.415 28.1975C31.8317 28.3017 32.125 28.6767 32.125 29.1067V30.25C32.125 30.7473 31.9275 31.2242 31.5758 31.5758C31.2242 31.9275 30.7473 32.125 30.25 32.125H28.375Z" stroke="#0072FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
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
                    <img src="{{ asset('/assets-v2/img/products/product-1.png') }}" alt="">
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
                          <circle cx="24" cy="24" r="24" fill="#0072FF" fill-opacity="0.14" />
                          <path d="M30.875 17.125V20.875M30.875 17.125H27.125M30.875 17.125L25.875 22.125M28.375 32.125C21.4717 32.125 15.875 26.5283 15.875 19.625V17.75C15.875 17.2527 16.0725 16.7758 16.4242 16.4242C16.7758 16.0725 17.2527 15.875 17.75 15.875H18.8933C19.3233 15.875 19.6983 16.1675 19.8025 16.585L20.7242 20.2708C20.8158 20.6375 20.6792 21.0225 20.3767 21.2483L19.2992 22.0567C19.1449 22.1683 19.0308 22.3267 18.9738 22.5084C18.9167 22.69 18.9198 22.8852 18.9825 23.065C19.4841 24.4293 20.2762 25.6682 21.304 26.696C22.3318 27.7238 23.5707 28.5159 24.935 29.0175C25.3025 29.1525 25.7083 29.0142 25.9433 28.7008L26.7517 27.6233C26.8623 27.4756 27.0141 27.3639 27.188 27.3021C27.3619 27.2402 27.5501 27.2311 27.7292 27.2758L31.415 28.1975C31.8317 28.3017 32.125 28.6767 32.125 29.1067V30.25C32.125 30.7473 31.9275 31.2242 31.5758 31.5758C31.2242 31.9275 30.7473 32.125 30.25 32.125H28.375Z" stroke="#0072FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
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
                    <img src="{{ asset('/assets-v2/img/products/product-1.png') }}" alt="">
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
                          <circle cx="24" cy="24" r="24" fill="#0072FF" fill-opacity="0.14" />
                          <path d="M30.875 17.125V20.875M30.875 17.125H27.125M30.875 17.125L25.875 22.125M28.375 32.125C21.4717 32.125 15.875 26.5283 15.875 19.625V17.75C15.875 17.2527 16.0725 16.7758 16.4242 16.4242C16.7758 16.0725 17.2527 15.875 17.75 15.875H18.8933C19.3233 15.875 19.6983 16.1675 19.8025 16.585L20.7242 20.2708C20.8158 20.6375 20.6792 21.0225 20.3767 21.2483L19.2992 22.0567C19.1449 22.1683 19.0308 22.3267 18.9738 22.5084C18.9167 22.69 18.9198 22.8852 18.9825 23.065C19.4841 24.4293 20.2762 25.6682 21.304 26.696C22.3318 27.7238 23.5707 28.5159 24.935 29.0175C25.3025 29.1525 25.7083 29.0142 25.9433 28.7008L26.7517 27.6233C26.8623 27.4756 27.0141 27.3639 27.188 27.3021C27.3619 27.2402 27.5501 27.2311 27.7292 27.2758L31.415 28.1975C31.8317 28.3017 32.125 28.6767 32.125 29.1067V30.25C32.125 30.7473 31.9275 31.2242 31.5758 31.5758C31.2242 31.9275 30.7473 32.125 30.25 32.125H28.375Z" stroke="#0072FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
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
                    <img src="{{ asset('/assets-v2/img/products/product-1.png') }}" alt="">
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
                          <circle cx="24" cy="24" r="24" fill="#0072FF" fill-opacity="0.14" />
                          <path d="M30.875 17.125V20.875M30.875 17.125H27.125M30.875 17.125L25.875 22.125M28.375 32.125C21.4717 32.125 15.875 26.5283 15.875 19.625V17.75C15.875 17.2527 16.0725 16.7758 16.4242 16.4242C16.7758 16.0725 17.2527 15.875 17.75 15.875H18.8933C19.3233 15.875 19.6983 16.1675 19.8025 16.585L20.7242 20.2708C20.8158 20.6375 20.6792 21.0225 20.3767 21.2483L19.2992 22.0567C19.1449 22.1683 19.0308 22.3267 18.9738 22.5084C18.9167 22.69 18.9198 22.8852 18.9825 23.065C19.4841 24.4293 20.2762 25.6682 21.304 26.696C22.3318 27.7238 23.5707 28.5159 24.935 29.0175C25.3025 29.1525 25.7083 29.0142 25.9433 28.7008L26.7517 27.6233C26.8623 27.4756 27.0141 27.3639 27.188 27.3021C27.3619 27.2402 27.5501 27.2311 27.7292 27.2758L31.415 28.1975C31.8317 28.3017 32.125 28.6767 32.125 29.1067V30.25C32.125 30.7473 31.9275 31.2242 31.5758 31.5758C31.2242 31.9275 30.7473 32.125 30.25 32.125H28.375Z" stroke="#0072FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
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
                    <img src="{{ asset('/assets-v2/img/products/product-1.png') }}" alt="">
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
                          <circle cx="24" cy="24" r="24" fill="#0072FF" fill-opacity="0.14" />
                          <path d="M30.875 17.125V20.875M30.875 17.125H27.125M30.875 17.125L25.875 22.125M28.375 32.125C21.4717 32.125 15.875 26.5283 15.875 19.625V17.75C15.875 17.2527 16.0725 16.7758 16.4242 16.4242C16.7758 16.0725 17.2527 15.875 17.75 15.875H18.8933C19.3233 15.875 19.6983 16.1675 19.8025 16.585L20.7242 20.2708C20.8158 20.6375 20.6792 21.0225 20.3767 21.2483L19.2992 22.0567C19.1449 22.1683 19.0308 22.3267 18.9738 22.5084C18.9167 22.69 18.9198 22.8852 18.9825 23.065C19.4841 24.4293 20.2762 25.6682 21.304 26.696C22.3318 27.7238 23.5707 28.5159 24.935 29.0175C25.3025 29.1525 25.7083 29.0142 25.9433 28.7008L26.7517 27.6233C26.8623 27.4756 27.0141 27.3639 27.188 27.3021C27.3619 27.2402 27.5501 27.2311 27.7292 27.2758L31.415 28.1975C31.8317 28.3017 32.125 28.6767 32.125 29.1067V30.25C32.125 30.7473 31.9275 31.2242 31.5758 31.5758C31.2242 31.9275 30.7473 32.125 30.25 32.125H28.375Z" stroke="#0072FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
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
    <!-- /Section: Header TOP BAR (Mobile Only) -->
  </section>
  <!-- /Section: OUR Locations -->

  <!-- ==================== Section: OUR Service Categories ==================== -->
  <script src="{{ asset('/assets-v2/js/components/oy-swiper.js') }}" defer></script>
  <section class="section-padding-t">
    <div class="container oy-section-title">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="text-center text-lg-start">
            <h3 class="text-h2">Our Service Categories</h3>
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
                <img src="{{ asset('/assets-v2/img/products/category-1.png') }}" alt="">
              </div>
              <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                <div class="mb-5">
                  <h5 class="card--product__title text-b1-semibold mb-4">Luxury Car hire</h5>
                  <p class="text-secondary text-b4-regular">Indulge in the ultimate driving experience with our handpicked range of luxury vehicles.</p>
                </div>
                <a class="btn w-100 btn--outline-primary mt-auto" style="--btn-after-size: 450px" href="#">
                  <span class="btn__text">Book Now</span>
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <!-- Slider Item -->
          <div class="swiper-slide mb-5">
            <div class="card card--product h-100">
              <div class="card--product__thumb">
                <img src="{{ asset('/assets-v2/img/products/category-2.png') }}" alt="">
              </div>
              <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                <div class="mb-5">
                  <h5 class="card--product__title text-b1-semibold mb-4">Luxury Car hire</h5>
                  <p class="text-secondary text-b4-regular">Indulge in the ultimate driving experience with our handpicked range of luxury vehicles.</p>
                </div>
                <a class="btn w-100 btn--outline-primary mt-auto" style="--btn-after-size: 450px" href="#">
                  <span class="btn__text">Book Now</span>
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <!-- Slider Item -->
          <div class="swiper-slide mb-5">
            <div class="card card--product h-100">
              <div class="card--product__thumb">
                <img src="{{ asset('/assets-v2/img/products/category-3.png') }}" alt="">
              </div>
              <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                <div class="mb-5">
                  <h5 class="card--product__title text-b1-semibold mb-4">Luxury Car hire</h5>
                  <p class="text-secondary text-b4-regular">Indulge in the ultimate driving experience with our handpicked range of luxury vehicles.</p>
                </div>
                <a class="btn w-100 btn--outline-primary mt-auto" style="--btn-after-size: 450px" href="#">
                  <span class="btn__text">Book Now</span>
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <!-- Slider Item -->
          <div class="swiper-slide mb-5">
            <div class="card card--product h-100">
              <div class="card--product__thumb">
                <img src="{{ asset('/assets-v2/img/products/category-1.png') }}" alt="">
              </div>
              <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                <div class="mb-5">
                  <h5 class="card--product__title text-b1-semibold mb-4">Luxury Car hire</h5>
                  <p class="text-secondary text-b4-regular">Indulge in the ultimate driving experience with our handpicked range of luxury vehicles.</p>
                </div>
                <a class="btn w-100 btn--outline-primary mt-auto" style="--btn-after-size: 450px" href="#">
                  <span class="btn__text">Book Now</span>
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <!-- Slider Item -->
          <div class="swiper-slide mb-5">
            <div class="card card--product h-100">
              <div class="card--product__thumb">
                <img src="{{ asset('/assets-v2/img/products/category-2.png') }}" alt="">
              </div>
              <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                <div class="mb-5">
                  <h5 class="card--product__title text-b1-semibold mb-4">Luxury Car hire</h5>
                  <p class="text-secondary text-b4-regular">Indulge in the ultimate driving experience with our handpicked range of luxury vehicles.</p>
                </div>
                <a class="btn w-100 btn--outline-primary mt-auto" style="--btn-after-size: 450px" href="#">
                  <span class="btn__text">Book Now</span>
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <!-- Slider Item -->
          <div class="swiper-slide mb-5">
            <div class="card card--product h-100">
              <div class="card--product__thumb">
                <img src="{{ asset('/assets-v2/img/products/category-3.png') }}" alt="">
              </div>
              <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                <div class="mb-5">
                  <h5 class="card--product__title text-b1-semibold mb-4">Luxury Car hire</h5>
                  <p class="text-secondary text-b4-regular">Indulge in the ultimate driving experience with our handpicked range of luxury vehicles.</p>
                </div>
                <a class="btn w-100 btn--outline-primary mt-auto" style="--btn-after-size: 450px" href="#">
                  <span class="btn__text">Book Now</span>
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <!-- Slider Item -->
          <div class="swiper-slide mb-5">
            <div class="card card--product h-100">
              <div class="card--product__thumb">
                <img src="{{ asset('/assets-v2/img/products/category-1.png') }}" alt="">
              </div>
              <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                <div class="mb-5">
                  <h5 class="card--product__title text-b1-semibold mb-4">Luxury Car hire</h5>
                  <p class="text-secondary text-b4-regular">Indulge in the ultimate driving experience with our handpicked range of luxury vehicles.</p>
                </div>
                <a class="btn w-100 btn--outline-primary mt-auto" style="--btn-after-size: 450px" href="#">
                  <span class="btn__text">Book Now</span>
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <!-- Slider Item -->
          <div class="swiper-slide mb-5">
            <div class="card card--product h-100">
              <div class="card--product__thumb">
                <img src="{{ asset('/assets-v2/img/products/category-2.png') }}" alt="">
              </div>
              <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                <div class="mb-5">
                  <h5 class="card--product__title text-b1-semibold mb-4">Luxury Car hire</h5>
                  <p class="text-secondary text-b4-regular">Indulge in the ultimate driving experience with our handpicked range of luxury vehicles.</p>
                </div>
                <a class="btn w-100 btn--outline-primary mt-auto" style="--btn-after-size: 450px" href="#">
                  <span class="btn__text">Book Now</span>
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <!-- Slider Item -->
          <div class="swiper-slide mb-5">
            <div class="card card--product h-100">
              <div class="card--product__thumb">
                <img src="{{ asset('/assets-v2/img/products/category-3.png') }}" alt="">
              </div>
              <div class="card--product__content space-y-3 flex-fill d-flex flex-column align-items-start">
                <div class="mb-5">
                  <h5 class="card--product__title text-b1-semibold mb-4">Luxury Car hire</h5>
                  <p class="text-secondary text-b4-regular">Indulge in the ultimate driving experience with our handpicked range of luxury vehicles.</p>
                </div>
                <a class="btn w-100 btn--outline-primary mt-auto" style="--btn-after-size: 450px" href="#">
                  <span class="btn__text">Book Now</span>
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
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
  <!-- /Section: OUR Service Categories -->


  <!-- ==================== Section: Freequently Asked Questions ==================== -->
  <section class="section-padding-t">
    <div class="container-fluid px-3 px-lg-5">
      <div class="bg-dark text-light rounded-6 section-padding-y overflow-hidden">
        <div class="container">
          <div class="row g-4 g-lg-5">
            <div class="col-lg-6 col-xl-5">
              <h3 class="text-h2 mb-3 mb-lg-5">Freequently Asked Questions</h3>
              <img src="{{ asset('/assets-v2/img/banners/home-faq.png') }}" alt="" class="img-fluid w-100 rounded-4">
            </div>
            <div class="col-lg-6 col-xl-7">
              <div class="ps-lg-5">
                <div class="accordion accordion--style-4 space-y-4" id="accordion-faq--2">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="accordion-faq-2-heading--1">
                      <button class="accordion-button text-h6 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What types of cars do you offer?
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="accordion-faq-2-heading--1" data-bs-parent="#accordion-faq--2">
                      <div class="accordion-body text-b2-regular text-light text-opacity-75">
                        We provide a wide range of high-end vehicles including luxury cars, performance models and supercars from brands such as Aston Martin, Bentley, Ferrari, McLaren, Rolls-Royce, Porsche and more.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed text-h6 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Where are you based?
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion-faq--2">
                      <div class="accordion-body text-b2-regular text-light text-opacity-75">
                        At Autofusion, Our mission is to redefine luxury travel by delivering exceptional car hire experiences that combine elegance, performance, and comfort.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed text-h6 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Can I self-drive or hire a chauffeur?
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion-faq--2">
                      <div class="accordion-body text-b2-regular text-light text-opacity-75">
                        At Autofusion, Our mission is to redefine luxury travel by delivering exceptional car hire experiences that combine elegance, performance, and comfort.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                      <button class="accordion-button collapsed text-h6 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        How can I book a car?
                      </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordion-faq--2">
                      <div class="accordion-body text-b2-regular text-light text-opacity-75">
                        At Autofusion, Our mission is to redefine luxury travel by delivering exceptional car hire experiences that combine elegance, performance, and comfort.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                      <button class="accordion-button collapsed text-h6 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        What do I need to hire a car?
                      </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordion-faq--2">
                      <div class="accordion-body text-b2-regular text-light text-opacity-75">
                        At Autofusion, Our mission is to redefine luxury travel by delivering exceptional car hire experiences that combine elegance, performance, and comfort.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                      <button class="accordion-button collapsed text-h6 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Are there mileage limits?
                      </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordion-faq--2">
                      <div class="accordion-body text-b2-regular text-light text-opacity-75">
                        At Autofusion, Our mission is to redefine luxury travel by delivering exceptional car hire experiences that combine elegance, performance, and comfort.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                      <button class="accordion-button collapsed text-h6 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        What if the car breaks down?
                      </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordion-faq--2">
                      <div class="accordion-body text-b2-regular text-light text-opacity-75">
                        At Autofusion, Our mission is to redefine luxury travel by delivering exceptional car hire experiences that combine elegance, performance, and comfort.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Section: Freequently Asked Questions -->


  <!-- ==================== Section: : Marquee Slider ==================== -->
  <script src="{{ asset('/assets-v2/js/components/marquee-slider.js') }}"></script>
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
  <!-- /Section: : Marquee Slider -->


  <!-- ==================== Section: Footer ==================== -->
  <footer class="oy-footer">
    <div class="container-fluid px-3 px-lg-5">
      <div class="bg-dark rounded-6 overflow-hidden">
        <!-- ==================== Section: Footer TOP ==================== -->
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
        <!-- /Section: Footer TOP -->


        <!-- ==================== Section: Footer Middle ==================== -->
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

        <!-- ==================== Section: Footer Utility ==================== -->
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