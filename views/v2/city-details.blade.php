<!DOCTYPE html>
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
              <img src="{{ asset('/assets-v2/img/header/vehicles.svg') }}" alt="icon">
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
      <div class="oy-banner bg-dark" style="background-image: url('{{ asset('/assets-v2/img/banners/gradient-banner-desktop-2.png') }}');">
        <div class="row oy-banner__row g-4 g-xl-5 align-items-center justify-content-between">
          <div class="col-lg-6 col-xl-6">
            <div class="space-y-3">
              <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b4-regular text-uppercase">London</span>
              <h2 class="text-light text-h1 mb-5">London's Leading Luxury Car Hire Service</h2>
              <p class="text-light text-opacity-50 text-b2-regular">Enjoy effortless online luxury car rentals, flexible pick-up and drop-off, and a driving experience that defines sophistication across the city.</p>
            </div>
          </div>
          <div class="col-lg-6 col-xl-4">
            <div class="space-y-4">
              <img class="rounded-4 d-md-none img-fluid w-100" src="{{ asset('/assets-v2/img/banners/gradient-banner-mobile-2.png') }}" />
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
                    <select name="" id="" class="form-select e-select" e-search="true">
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
                    <select name="" id="" class="form-select e-select" e-search="true">
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
                    <select name="" id="" class="form-select e-select">
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

  <!-- ==================== Section: OUR Luxury Cars ==================== -->
  <section class="section-padding-y overflow-hidden">
    <div class="container oy-section-title text-center">
      <div class="row g-4 justify-content-center">
        <div class="col-12 col-lg-12">
          <h3 class="text-h2 mb-0">Choose From The World’s Most Iconic Luxury Cars </h3>
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <p class="text-b2-regular text-secondary">Discover a fleet curated for opulence right here in Central London, featuring supercars, sports cars, and prestige luxury vehicles from the world’s finest marques.</p>
            </div>
          </div>
          <div class="mt-5 d-flex text-start justify-content-center align-items-center gap-4 " id="filter-container">
            <!-- Vehicle Brand -->
            <div class="e-select-group">
              <span class="e-select-icon">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20.8468 16.3215L17.7017 13.1928L18.3224 12.7442C18.9299 12.3053 19.1822 11.533 18.9502 10.8226L18.5263 9.52516C18.4815 9.38803 18.4815 9.24304 18.5263 9.10596L18.9502 7.80848C19.1822 7.0981 18.9299 6.32581 18.3224 5.88688L17.2128 5.08493C17.0955 5.00019 17.0098 4.88293 16.9651 4.74579L16.5412 3.44832C16.3091 2.73798 15.6487 2.26067 14.8978 2.26067H13.5261C13.3812 2.26067 13.2426 2.21587 13.1253 2.13113L12.0157 1.32923C11.4082 0.890256 10.5918 0.890256 9.98429 1.32923L8.87461 2.13118C8.75735 2.21593 8.61874 2.26072 8.47381 2.26072H7.10219C6.35126 2.26072 5.69082 2.73798 5.45875 3.44837L5.03488 4.74589C4.99011 4.88293 4.90444 5.00019 4.78717 5.08499L3.67754 5.88688C3.07004 6.32591 2.81777 7.09815 3.04979 7.80848L3.47366 9.10596C3.51844 9.24304 3.51844 9.38803 3.47366 9.52511L3.04979 10.8226C2.81777 11.533 3.07004 12.3053 3.67754 12.7442L4.29823 13.1928L1.15315 16.3214C1.02835 16.4456 0.974953 16.624 1.01109 16.7958C1.04724 16.9677 1.16811 17.1098 1.3325 17.1738L3.85852 18.1568L4.84685 20.6693C4.91113 20.8328 5.05402 20.953 5.22684 20.989C5.26246 20.9964 5.29834 21 5.33395 21C5.4712 21 5.60468 20.9462 5.7038 20.8476L9.5701 17.0025L9.98429 17.3018C10.2881 17.5213 10.644 17.631 11 17.631C11.3559 17.631 11.7119 17.5213 12.0157 17.3018L12.4299 17.0024L16.2963 20.8476C16.3954 20.9462 16.5288 21 16.6661 21C16.7017 21 16.7375 20.9964 16.7732 20.989C16.946 20.953 17.0888 20.8328 17.1532 20.6693L18.1415 18.1568L20.6675 17.1738C20.8319 17.1098 20.9527 16.9677 20.9889 16.7958C21.0251 16.624 20.9716 16.4456 20.8468 16.3215ZM5.52962 19.5495L4.7493 17.5658C4.69616 17.4306 4.58868 17.3237 4.45279 17.2708L2.45839 16.4947L5.04634 13.9202L5.4588 15.1828C5.69088 15.8931 6.35126 16.3704 7.10224 16.3704H8.47386C8.54855 16.3704 8.62151 16.3825 8.69076 16.4056L5.52962 19.5495ZM10.5991 16.4601L9.48949 15.6581C9.1923 15.4434 8.84114 15.3299 8.47386 15.3299H7.10224C6.80589 15.3299 6.54526 15.1416 6.45373 14.8612L6.02986 13.5638C5.92143 13.2318 5.71755 12.9466 5.44045 12.7345C5.43093 12.7263 5.42109 12.7188 5.41116 12.7115C5.40807 12.7092 5.40524 12.7067 5.40211 12.7044L4.29248 11.9025C4.05277 11.7293 3.95319 11.4245 4.04477 11.1442L4.46864 9.84672C4.58214 9.49926 4.58214 9.13197 4.46864 8.7845L4.04477 7.48708C3.95319 7.20672 4.05277 6.90197 4.29248 6.72868L5.40211 5.92678C5.69935 5.71198 5.91641 5.41482 6.02986 5.06745L6.45373 3.76998C6.54526 3.48962 6.80594 3.3013 7.10224 3.3013H8.47386C8.84119 3.3013 9.19241 3.18778 9.48955 2.97303L10.5991 2.17119C10.8389 1.99795 11.1612 1.99789 11.4008 2.17119L12.5105 2.97313C12.8076 3.18789 13.1588 3.3014 13.5261 3.3014H14.8978C15.1941 3.3014 15.4547 3.48978 15.5463 3.77008L15.9701 5.06751C16.0836 5.41497 16.3007 5.71213 16.5979 5.92689L17.7076 6.72883C17.9473 6.90207 18.0468 7.20683 17.9552 7.48718L17.5314 8.78471C17.4179 9.13212 17.4179 9.49941 17.5314 9.84688L17.9552 11.1444C18.0468 11.4247 17.9473 11.7294 17.7075 11.9027L16.598 12.7045C16.5941 12.7074 16.5906 12.7105 16.5867 12.7133C16.5779 12.7199 16.5691 12.7266 16.5606 12.7338C16.283 12.946 16.0787 13.2315 15.9701 13.5639L15.5463 14.8614C15.4547 15.1418 15.1941 15.3301 14.8978 15.3301H13.5261C13.1589 15.3301 12.8077 15.4436 12.5105 15.6584L11.4009 16.4602C11.161 16.6334 10.8388 16.6332 10.5991 16.4601ZM17.5472 17.2708C17.4113 17.3237 17.3039 17.4306 17.2507 17.5658L16.4704 19.5495L13.3092 16.4057C13.3784 16.3825 13.4514 16.3705 13.5261 16.3705H14.8978C15.6486 16.3705 16.3091 15.8932 16.5411 15.1829L16.9536 13.9202L19.5417 16.4947L17.5472 17.2708Z" fill="#545A64" />
                  <path d="M12.773 12.8019C12.862 12.8019 12.9507 12.7742 13.0256 12.7199C13.1579 12.6237 13.2242 12.4608 13.1966 12.2996L12.8552 10.3094L14.3012 8.89997C14.4183 8.7858 14.4604 8.61505 14.4099 8.4595C14.3593 8.30395 14.2248 8.1906 14.063 8.16705L12.0647 7.87667L11.1711 6.06592C11.0987 5.91927 10.9493 5.82642 10.7857 5.82642C10.6222 5.82642 10.4728 5.91927 10.4004 6.06592L9.50683 7.87667L7.50857 8.16705C7.3467 8.19056 7.21225 8.30395 7.16168 8.4595C7.11111 8.61505 7.1533 8.7858 7.27043 8.89997L8.71637 10.3094L8.37503 12.2996C8.34736 12.4608 8.41362 12.6237 8.54596 12.7199C8.67826 12.816 8.8537 12.8286 8.99846 12.7526L10.7857 11.813L12.5731 12.7525C12.6359 12.7856 12.7046 12.8019 12.773 12.8019ZM10.9857 10.9472C10.9231 10.9143 10.8544 10.8978 10.7857 10.8978C10.7171 10.8978 10.6484 10.9143 10.5858 10.9472L9.3692 11.5868L9.60157 10.232C9.62551 10.0927 9.57927 9.95043 9.478 9.85169L8.49375 8.89228L9.85397 8.69458C9.99392 8.67426 10.1149 8.58634 10.1775 8.45954L10.7857 7.22703L11.394 8.45958C11.4566 8.58639 11.5776 8.6743 11.7175 8.69462L13.0778 8.89232L12.0935 9.85173C11.9923 9.95043 11.946 10.0927 11.9699 10.2321L12.2023 11.5868L10.9857 10.9472Z" fill="#545A64" />
                </svg>
              </span>
              <select name="" id="" class="form-select e-select rounded-pill" e-search="true">
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
            <!-- Vehicle Type -->
            <div class="e-select-group">
              <span class="e-select-icon">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19.7615 10.0468L18.9732 9.13925H19.3123C19.899 9.13925 20.3757 8.66258 20.3757 8.07592V7.72758C20.3757 7.14092 19.899 6.66425 19.3123 6.66425H19.0098C18.7532 6.66425 18.5515 6.86592 18.5515 7.12258C18.5515 7.37925 18.7532 7.58092 19.0098 7.58092H19.3123C19.3948 7.58092 19.459 7.64508 19.459 7.72758V8.07592C19.459 8.15842 19.3948 8.22258 19.3123 8.22258H18.6707L17.9832 5.97675C17.534 4.52842 16.2232 3.56592 14.7107 3.56592H7.28568C5.77318 3.56592 4.46234 4.53758 4.01318 5.97675L3.32568 8.22258H2.68401C2.60151 8.22258 2.53734 8.15842 2.53734 8.07592V7.72758C2.53734 7.64508 2.60151 7.58092 2.68401 7.58092H2.98651C3.24318 7.58092 3.44484 7.37925 3.44484 7.12258C3.44484 6.86592 3.24318 6.66425 2.98651 6.66425H2.68401C2.09734 6.66425 1.62068 7.14092 1.62068 7.72758V8.07592C1.62068 8.66258 2.09734 9.13925 2.68401 9.13925H3.02318L2.23484 10.0468C1.73984 10.6151 1.46484 11.3484 1.46484 12.1093V14.7401C1.46484 15.2993 1.77651 15.7851 2.24401 16.0418V17.0776C2.24401 17.8384 2.85818 18.4526 3.61901 18.4526H5.19568C5.95651 18.4526 6.57068 17.8384 6.57068 17.0776V16.2343H15.4257V17.0776C15.4257 17.8384 16.0398 18.4526 16.8007 18.4526H18.3773C19.1382 18.4526 19.7523 17.8384 19.7523 17.0776V16.0418C20.2107 15.7851 20.5315 15.3084 20.5315 14.7401V12.1093C20.5315 11.3484 20.2565 10.6151 19.7615 10.0468ZM2.93151 10.6518L3.81151 9.64342C3.85734 9.59758 3.88484 9.54258 3.90318 9.47842L4.08651 8.88258C4.08651 8.88258 4.10484 8.82758 4.11401 8.80008L4.90234 6.25175C5.23234 5.19758 6.19484 4.48258 7.29484 4.48258H14.7107C15.8198 4.48258 16.7823 5.18842 17.1032 6.25175L17.8915 8.80008C17.8915 8.80008 17.9007 8.85508 17.919 8.88258L18.1023 9.47842C18.1207 9.54258 18.1482 9.59758 18.194 9.64342L19.074 10.6518C19.4223 11.0551 19.624 11.5776 19.624 12.1184V13.4476H17.534C17.2315 13.4476 16.9748 13.2001 16.9748 12.8884V12.3018C16.9748 11.9993 17.2223 11.7426 17.534 11.7426H18.6523C18.909 11.7426 19.1107 11.5409 19.1107 11.2843C19.1107 11.0276 18.909 10.8259 18.6523 10.8259H17.534C16.7182 10.8259 16.0582 11.4859 16.0582 12.3018V12.8884C16.0582 13.7043 16.7182 14.3643 17.534 14.3643H19.624V14.7493C19.624 15.0609 19.3673 15.3176 19.0557 15.3176H14.344V13.7501C14.344 13.4934 14.1423 13.2918 13.8857 13.2918H8.12901C7.87234 13.2918 7.67068 13.4934 7.67068 13.7501V15.3176H2.95901C2.64734 15.3176 2.39068 15.0609 2.39068 14.7493V14.3643H4.48068C5.29651 14.3643 5.95651 13.7043 5.95651 12.8884V12.3018C5.95651 11.4859 5.29651 10.8259 4.48068 10.8259H3.36234C3.10568 10.8259 2.90401 11.0276 2.90401 11.2843C2.90401 11.5409 3.10568 11.7426 3.36234 11.7426H4.48068C4.78318 11.7426 5.03984 11.9901 5.03984 12.3018V12.8884C5.03984 13.1909 4.79234 13.4476 4.48068 13.4476H2.39068V12.1184C2.39068 11.5776 2.58318 11.0643 2.94068 10.6518H2.93151ZM5.65401 17.0684C5.65401 17.3251 5.45234 17.5268 5.19568 17.5268H3.61901C3.36234 17.5268 3.16068 17.3251 3.16068 17.0684V16.2251H5.65401V17.0684ZM8.57818 15.3084V14.1993H13.4182V15.3084H8.57818ZM18.8357 17.0684C18.8357 17.3251 18.634 17.5268 18.3773 17.5268H16.8007C16.544 17.5268 16.3423 17.3251 16.3423 17.0684V16.2251H18.8357V17.0684Z" fill="#545A64" />
                  <path d="M5.48958 9.13005H16.5079C16.7646 9.13005 16.9663 8.92838 16.9663 8.67171C16.9663 8.41505 16.7646 8.21338 16.5079 8.21338H5.48958C5.23292 8.21338 5.03125 8.41505 5.03125 8.67171C5.03125 8.92838 5.23292 9.13005 5.48958 9.13005Z" fill="#545A64" />
                  <path d="M14.7496 10.8167H7.2513C6.99464 10.8167 6.79297 11.0183 6.79297 11.275C6.79297 11.5317 6.99464 11.7333 7.2513 11.7333H14.7496C15.0063 11.7333 15.208 11.5317 15.208 11.275C15.208 11.0183 15.0063 10.8167 14.7496 10.8167Z" fill="#545A64" />
                </svg>
              </span>
              <select name="" id="" class="form-select e-select rounded-pill" e-search="true">
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
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5625 1.375C7.94221 1.375 8.25 1.68281 8.25 2.0625V2.75H11.6875C12.0672 2.75 12.375 3.05781 12.375 3.4375C12.375 3.81719 12.0672 4.125 11.6875 4.125H8.25V4.8125C8.25 5.19219 7.94221 5.5 7.5625 5.5C7.18279 5.5 6.875 5.19219 6.875 4.8125V4.125H5.5C3.98122 4.125 2.75 5.35622 2.75 6.875V16.5C2.75 18.0188 3.98122 19.25 5.5 19.25H9.625C10.0047 19.25 10.3125 19.5578 10.3125 19.9375C10.3125 20.3172 10.0047 20.625 9.625 20.625H5.5C3.22182 20.625 1.375 18.7782 1.375 16.5V6.875C1.375 4.59682 3.22182 2.75 5.5 2.75H6.875V2.0625C6.875 1.68281 7.18279 1.375 7.5625 1.375ZM14.4375 1.375C14.8172 1.375 15.125 1.68281 15.125 2.0625V2.75H16.5C18.7782 2.75 20.625 4.59682 20.625 6.875V9.625C20.625 10.0047 20.3172 10.3125 19.9375 10.3125C19.5578 10.3125 19.25 10.0047 19.25 9.625V6.875C19.25 5.35622 18.0188 4.125 16.5 4.125H15.125V4.8125C15.125 5.19219 14.8172 5.5 14.4375 5.5C14.0578 5.5 13.75 5.19219 13.75 4.8125V2.0625C13.75 1.68281 14.0578 1.375 14.4375 1.375ZM5.5 7.5625C5.12031 7.5625 4.8125 7.87029 4.8125 8.25C4.8125 8.62971 5.12031 8.9375 5.5 8.9375H16.5C16.8797 8.9375 17.1875 8.62971 17.1875 8.25C17.1875 7.87029 16.8797 7.5625 16.5 7.5625H5.5ZM17.6736 15.6111L15.9549 17.3299C15.6864 17.5984 15.2511 17.5984 14.9826 17.3299L13.9514 16.2986C13.6829 16.0302 13.6829 15.5948 13.9514 15.3264C14.2198 15.0579 14.6552 15.0579 14.9236 15.3264L15.4688 15.8715L16.7014 14.6389C16.9698 14.3704 17.4052 14.3704 17.6736 14.6389C17.9421 14.9073 17.9421 15.3427 17.6736 15.6111ZM6.875 12.0312C6.875 12.6008 6.4133 13.0625 5.84375 13.0625C5.2742 13.0625 4.8125 12.6008 4.8125 12.0312C4.8125 11.4617 5.2742 11 5.84375 11C6.4133 11 6.875 11.4617 6.875 12.0312ZM5.84375 17.1875C6.4133 17.1875 6.875 16.7258 6.875 16.1562C6.875 15.5867 6.4133 15.125 5.84375 15.125C5.2742 15.125 4.8125 15.5867 4.8125 16.1562C4.8125 16.7258 5.2742 17.1875 5.84375 17.1875ZM12.375 15.8125C12.375 13.914 13.914 12.375 15.8125 12.375C17.711 12.375 19.25 13.914 19.25 15.8125C19.25 17.711 17.711 19.25 15.8125 19.25C13.914 19.25 12.375 17.711 12.375 15.8125ZM15.8125 11C13.1546 11 11 13.1546 11 15.8125C11 18.4704 13.1546 20.625 15.8125 20.625C18.4704 20.625 20.625 18.4704 20.625 15.8125C20.625 13.1546 18.4704 11 15.8125 11Z" fill="#545A64" />
                </svg>
              </span>
              <select name="" id="" class="form-select e-select rounded-pill">
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
                  <path d="M10 19C7.59602 19 5.33589 18.0639 3.63602 16.364C1.93614 14.6641 1 12.404 1 10C1 7.59602 1.93618 5.33593 3.63602 3.63602C5.33586 1.93611 7.59602 1 10 1C12.404 1 14.6641 1.93614 16.364 3.63602C18.0639 5.33589 19 7.59602 19 10C19 12.404 18.0638 14.6641 16.364 16.364C14.6641 18.0639 12.404 19 10 19ZM10 2.125C5.65771 2.125 2.125 5.65771 2.125 10C2.125 14.3423 5.65771 17.875 10 17.875C14.3423 17.875 17.875 14.3423 17.875 10C17.875 5.65771 14.3423 2.125 10 2.125Z" fill="#545A64" />
                  <path d="M10 9.5C9.081 9.5 8.33333 8.93925 8.33333 8.25C8.33333 7.56075 9.081 7 10 7C10.919 7 11.6667 7.56075 11.6667 8.25C11.6667 8.52612 11.9651 8.75 12.3333 8.75C12.7015 8.75 13 8.52612 13 8.25C13 7.18122 12.0009 6.28475 10.6667 6.05669V5.5C10.6667 5.22387 10.3682 5 10 5C9.63179 5 9.33333 5.22387 9.33333 5.5V6.05669C7.99908 6.28475 7 7.18122 7 8.25C7 9.49066 8.34579 10.5 10 10.5C10.919 10.5 11.6667 11.0608 11.6667 11.75C11.6667 12.4392 10.919 13 10 13C9.081 13 8.33333 12.4392 8.33333 11.75C8.33333 11.4739 8.03488 11.25 7.66667 11.25C7.29846 11.25 7 11.4739 7 11.75C7 12.8188 7.99908 13.7153 9.33333 13.9433V14.5C9.33333 14.7761 9.63179 15 10 15C10.3682 15 10.6667 14.7761 10.6667 14.5V13.9433C12.0009 13.7153 13 12.8188 13 11.75C13 10.5093 11.6542 9.5 10 9.5Z" fill="#545A64" />
                </svg>
              </span>
              <select name="" id="" class="form-select e-select rounded-pill">
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
        <!-- Column -->
        <div class="col-md-6 col-lg-4">
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
        <!-- Column -->
        <div class="col-md-6 col-lg-4">
          <div class="card card--product h-100">
            <div class="card--product__thumb">
              <img src="{{ asset('/assets-v2/img/products/product-3.png') }}" alt="">
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
                      <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
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
        <!-- Column -->
        <div class="col-md-6 col-lg-4">
          <div class="card card--product h-100">
            <div class="card--product__thumb">
              <img src="{{ asset('/assets-v2/img/products/product-2.png') }}" alt="">
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
                      <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
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
              <img src="{{ asset('/assets-v2/img/products/product-3.png') }}" alt="">
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
                      <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
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
              <img src="{{ asset('/assets-v2/img/products/product-1.png') }}" alt="">
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
                      <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
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
              <img src="{{ asset('/assets-v2/img/products/product-1.png') }}" alt="">
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
                      <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
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
        <!-- Column -->
        <div class="col-md-6 col-lg-4">
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
        <!-- Column -->
        <div class="col-md-6 col-lg-4">
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
        <!-- Column -->
        <div class="col-md-6 col-lg-4">
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
  <!-- /Section: OUR Luxury Cars -->


  <!-- ==================== Section: : Contact Information ==================== -->
  <section class="py-5">
    <div class="container-fluid px-3 px-lg-5">
      <div class="bg-dark rounded-6 section-padding-y overflow-hidden">
        <div class="container">
          <div class="row g-4 mb-5">
            <div class="col-lg-12">
              <div class="mb-5">
                <iframe class="rounded-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.364973311433!2d-0.452250123221129!3d51.46981471344817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487673cb743ccf01%3A0xea74a219c60588e1!2sTerminal%202%2C%20Inner%20Ring%20E%2C%20Hounslow%20TW6%201EW%2C%20UK!5e0!3m2!1sen!2sbd!4v1765670857124!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <h3 class="text-h3 text-light">Contact Information</h3>
            </div>
          </div>
          <div class="row g-4 g-lg-5 justify-content-between">
            <!-- Column -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="d-flex align-items-center gap-3">
                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="30" cy="30" r="30" fill="white" fill-opacity="0.14" />
                  <path d="M36.5573 28.5417C36.0557 28.5417 35.659 28.1333 35.659 27.6433C35.659 27.2117 35.2273 26.3133 34.504 25.5317C33.7923 24.7733 33.0107 24.33 32.3573 24.33C31.8557 24.33 31.459 23.9217 31.459 23.4317C31.459 22.9417 31.8673 22.5333 32.3573 22.5333C33.524 22.5333 34.749 23.1633 35.8223 24.295C36.8257 25.3567 37.4673 26.675 37.4673 27.6317C37.4673 28.1333 37.059 28.5417 36.5573 28.5417Z" fill="white" />
                  <path d="M40.769 28.5417C40.2674 28.5417 39.8707 28.1333 39.8707 27.6433C39.8707 23.5017 36.499 20.1417 32.369 20.1417C31.8674 20.1417 31.4707 19.7333 31.4707 19.2433C31.4707 18.7533 31.8674 18.3333 32.3574 18.3333C37.4907 18.3333 41.6674 22.51 41.6674 27.6433C41.6674 28.1333 41.259 28.5417 40.769 28.5417Z" fill="white" />
                  <path d="M28.8923 33.4417L26.734 35.6C26.279 36.055 25.5557 36.055 25.089 35.6117C24.9607 35.4833 24.8323 35.3667 24.704 35.2383C23.5023 34.025 22.4173 32.7533 21.449 31.4233C20.4923 30.0933 19.7223 28.7633 19.1623 27.445C18.614 26.115 18.334 24.8433 18.334 23.63C18.334 22.8367 18.474 22.0783 18.754 21.3783C19.034 20.6667 19.4773 20.0133 20.0957 19.43C20.8423 18.695 21.659 18.3333 22.5223 18.3333C22.849 18.3333 23.1757 18.4033 23.4673 18.5433C23.7707 18.6833 24.039 18.8933 24.249 19.1967L26.9557 23.0117C27.1657 23.3033 27.3173 23.5717 27.4223 23.8283C27.5273 24.0733 27.5857 24.3183 27.5857 24.54C27.5857 24.82 27.504 25.1 27.3407 25.3683C27.189 25.6367 26.9673 25.9167 26.6873 26.1967L25.8007 27.1183C25.6723 27.2467 25.614 27.3983 25.614 27.585C25.614 27.6783 25.6257 27.76 25.649 27.8533C25.684 27.9467 25.719 28.0167 25.7423 28.0867C25.9523 28.4717 26.314 28.9733 26.8273 29.58C27.3523 30.1867 27.9123 30.805 28.519 31.4233C28.6357 31.54 28.764 31.6567 28.8807 31.7733C29.3473 32.2283 29.359 32.975 28.8923 33.4417Z" fill="white" />
                  <path d="M41.6309 37.385C41.6309 37.7117 41.5726 38.05 41.4559 38.3767C41.4209 38.47 41.3859 38.5633 41.3392 38.6567C41.1409 39.0767 40.8842 39.4733 40.5459 39.8467C39.9742 40.4767 39.3442 40.9317 38.6326 41.2233C38.6209 41.2233 38.6092 41.235 38.5976 41.235C37.9092 41.515 37.1626 41.6667 36.3576 41.6667C35.1676 41.6667 33.8959 41.3867 32.5542 40.815C31.2126 40.2433 29.8709 39.4733 28.5409 38.505C28.0859 38.1667 27.6309 37.8283 27.1992 37.4667L31.0142 33.6517C31.3409 33.8967 31.6326 34.0833 31.8776 34.2117C31.9359 34.235 32.0059 34.27 32.0876 34.305C32.1809 34.34 32.2742 34.3517 32.3792 34.3517C32.5776 34.3517 32.7292 34.2817 32.8576 34.1533L33.7442 33.2783C34.0359 32.9867 34.3159 32.765 34.5842 32.625C34.8526 32.4617 35.1209 32.38 35.4126 32.38C35.6342 32.38 35.8676 32.4267 36.1242 32.5317C36.3809 32.6367 36.6492 32.7883 36.9409 32.9867L40.8026 35.7283C41.1059 35.9383 41.3159 36.1833 41.4442 36.475C41.5609 36.7667 41.6309 37.0583 41.6309 37.385Z" fill="white" />
                </svg>
                <div>
                  <p class="text-light text-opacity-50 mb-0">Phone Number</p>
                  <div class="text-light text-b4-semibold">+447947929977</div>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="d-flex align-items-center gap-3">
                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="30" cy="30" r="30" fill="white" fill-opacity="0.14" />
                  <path d="M35.834 20.0833H24.1673C20.6673 20.0833 18.334 21.8333 18.334 25.9167V34.0833C18.334 38.1667 20.6673 39.9167 24.1673 39.9167H35.834C39.334 39.9167 41.6673 38.1667 41.6673 34.0833V25.9167C41.6673 21.8333 39.334 20.0833 35.834 20.0833ZM36.3823 27.1883L32.7307 30.105C31.9607 30.7233 30.9807 31.0267 30.0007 31.0267C29.0207 31.0267 28.029 30.7233 27.2707 30.105L23.619 27.1883C23.2457 26.885 23.1873 26.325 23.479 25.9517C23.7823 25.5783 24.3307 25.5083 24.704 25.8117L28.3557 28.7283C29.2423 29.44 30.7473 29.44 31.634 28.7283L35.2857 25.8117C35.659 25.5083 36.219 25.5667 36.5107 25.9517C36.814 26.325 36.7557 26.885 36.3823 27.1883Z" fill="white" />
                </svg>
                <div>
                  <p class="text-light text-opacity-50 mb-0">Email Address</p>
                  <div class="text-light text-b4-semibold">shoaib@autofusionhire.co.uk</div>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="d-flex align-items-center gap-3">
                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="30" cy="30" r="30" fill="white" fill-opacity="0.14" />
                  <g clip-path="url(#clip0_10061_30325)">
                    <path d="M40.0573 25.8583C38.8323 20.4683 34.1306 18.0417 30.0006 18.0417C30.0006 18.0417 30.0006 18.0417 29.9889 18.0417C25.8706 18.0417 21.1573 20.4567 19.9323 25.8467C18.5673 31.8667 22.2539 36.965 25.5906 40.1733C26.8273 41.3633 28.4139 41.9583 30.0006 41.9583C31.5873 41.9583 33.1739 41.3633 34.3989 40.1733C37.7356 36.965 41.4223 31.8783 40.0573 25.8583ZM30.0006 31.7033C27.9706 31.7033 26.3256 30.0583 26.3256 28.0283C26.3256 25.9983 27.9706 24.3533 30.0006 24.3533C32.0306 24.3533 33.6756 25.9983 33.6756 28.0283C33.6756 30.0583 32.0306 31.7033 30.0006 31.7033Z" fill="white" />
                  </g>
                  <defs>
                    <clipPath id="clip0_10061_30325">
                      <rect width="28" height="28" fill="white" transform="translate(16 16)" />
                    </clipPath>
                  </defs>
                </svg>
                <div>
                  <div class="text-light text-b4-semibold">London Heathrow Airport, <br>Terminal 2 Landside, TW6 1EF</div>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="d-flex align-items-center gap-3">
                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="30" cy="30" r="30" fill="white" fill-opacity="0.14" />
                  <path d="M30 17.5C23.1125 17.5 17.5 23.1125 17.5 30C17.5 36.8875 23.1125 42.5 30 42.5C36.8875 42.5 42.5 36.8875 42.5 30C42.5 23.1125 36.8875 17.5 30 17.5ZM35.4375 34.4625C35.2625 34.7625 34.95 34.925 34.625 34.925C34.4625 34.925 34.3 34.8875 34.15 34.7875L30.275 32.475C29.3125 31.9 28.6 30.6375 28.6 29.525V24.4C28.6 23.8875 29.025 23.4625 29.5375 23.4625C30.05 23.4625 30.475 23.8875 30.475 24.4V29.525C30.475 29.975 30.85 30.6375 31.2375 30.8625L35.1125 33.175C35.5625 33.4375 35.7125 34.0125 35.4375 34.4625Z" fill="white" />
                </svg>
                <div>
                  <div class="text-light text-b4-semibold">Mon-Fri8:30am - 5:30pm</div>
                  <div class="text-light text-b4-semibold">Sat-Sun10:00am - 7:00pm</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Section: : Contact Information -->


  <!-- ==================== Section: : A Bespoke Luxury ==================== -->
  <section class="section-padding-y">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 order-lg-1">
          <div class="position-relative">
            <img class="img-fluid w-100 rounded-4" src="{{ asset('/assets-v2/img/banners/about-banner-4.png') }}" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-0">
          <div class="space-y-3 ps-lg-5">
            <h2 class="text-dark text-h3 mb-3">A Bespoke Luxury Car Hire Experience In London </h2>
            <p class="text-secondary text-opacity-50 text-b3-regular">You deserve a lot more than an ordinary car, and that is why we’re here. Our luxury car hire collection includes some of the most sought-after in performance and prestige. Lamborghini, Ferrari, McLaren, Bentley, Rolls-Royce, Porsche 911, Range Rovers, and more, each of our luxury vehicles is maintained with attention to detail in pristine condition.</p>
            <p class="text-secondary text-opacity-50 text-b3-regular">Collect your luxury vehicle from Mayfair, arrange a delivery to Kensington, or return it at London Heathrow. Everything is possible with our convenient pickup and drop-off across Central London to save you time and keep the driving experience first-class.</p>

            <div class="mt-5">
              <a href="#" class="btn btn--gradient-primary">
                <span class="btn__text">Book Your Supercar</span>
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
  </section>
  <!-- /Section: : A Bespoke Luxury -->

  <!-- ==================== Section: About US ==================== -->
  <section class="section-padding-y">
    <div class="container oy-section-title">
      <div class="row g-4 justify-content-center">
        <div class="col-md-7 text-center">
          <div class="text-center">
            <h3 class="text-h3">Why Our Luxury Car Hire In London Is The One To Rely On</h3>
            <p class="text-secondary text-b4-regular">Our luxury car hire service makes premium travel simple across Central London, Heathrow, Gatwick, Kensington, and Mayfair. We don’t outsource customer care or cut corners.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row g-4 g-xl-5">
        <div class="col-lg-6">
          <img class="img-fluid rounded-4" src="{{ asset('/assets-v2/img/banners/about-banner-6.png') }}" alt="">
        </div>
        <div class="col-lg-6">
          <div class="ps-lg-4 space-y-4">
            <div>
              <div class="accordion accordion--style-2" id="accordion-About-Us">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button text-h5 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Effortless Booking Process
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
                      Premium Well-Maintained Cars
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
                      Chauffeur & Self-Driven Options
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
      </div>
    </div>
  </section>
  <!-- /Section: About US -->

  <!-- ==================== Section: : Booking Your London ==================== -->
  <section>
    <div class="container-fluid px-3 px-lg-5">
      <div class="bg-dark rounded-6 section-padding-y overflow-hidden">
        <div class="container">
          <div class="row g-4 mb-5 justify-content-center">
            <div class="col-lg-10">
              <div class="mb-5">
                <h3 class="text-h2 text-center text-light">Booking Your London Luxury Car Rental is Simple With Autofusion</h3>
              </div>
            </div>
          </div>
          <div class="row g-4 g-lg-5">
            <!-- Column -->
            <div class="col-sm-6 col-lg-4">
              <div class="card p-4 p-lg-5 card__feature text-start h-100">
                <span class="card__feature-icon">
                  <svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_10061_30403)">
                      <path d="M36.2965 48.0342H20.5663C19.4661 48.0342 18.5742 48.9261 18.5742 50.0264C18.5742 51.1266 19.4662 52.0186 20.5663 52.0186H36.2965C37.3967 52.0186 38.2885 51.1266 38.2885 50.0264C38.2885 48.9261 37.3967 48.0342 36.2965 48.0342Z" fill="currentColor" />
                      <path d="M51.067 33.8675C60.404 33.8675 68 26.2711 68 16.9337C68 7.59634 60.4039 0 51.067 0C41.7302 0 34.134 7.59634 34.134 16.9337C34.134 21.0433 35.6059 24.8154 38.0497 27.7512H13.5771C12.7436 27.7512 11.9982 28.2701 11.7088 29.0518L7.59325 40.1714C6.06551 40.4419 4.64043 41.1408 3.48098 42.2078C1.96479 43.6031 1.03603 45.5025 0.865503 47.5559L0.00979188 57.8523C-0.108544 58.9786 0.862847 60.0342 1.99507 60.0095H4.3509V66.0078C4.3509 67.108 5.24287 68 6.34296 68H15.5279C16.6281 68 17.5199 67.108 17.5199 66.0078V60.0095H39.5446V66.0078C39.5446 67.108 40.4366 68 41.5367 68H50.7216C51.8218 68 52.7136 67.108 52.7136 66.0078V60.0095H54.8703C56.0025 60.0342 56.9739 58.9786 56.8555 57.8523L56 47.5559C55.8293 45.5025 54.9004 43.6031 53.3845 42.2078C52.2252 41.1409 50.8002 40.4421 49.2727 40.1715L46.7307 33.3037C48.1151 33.6708 49.5685 33.8675 51.067 33.8675ZM51.067 3.98438C58.2069 3.98438 64.0159 9.79346 64.0159 16.9337C64.0159 24.074 58.207 29.8831 51.067 29.8831C43.927 29.8831 38.1182 24.074 38.1182 16.9337C38.1182 9.79346 43.927 3.98438 51.067 3.98438ZM14.9639 31.7355H41.9018L44.9771 40.0442H11.8887L14.9639 31.7355ZM13.5357 64.0156H8.33501V60.0095H13.5357V64.0156ZM48.7295 64.0156H43.5289V60.0095H48.7295V64.0156ZM52.0294 47.8858L52.0417 48.0343H46.9792C45.879 48.0343 44.9871 48.9263 44.9871 50.0265C44.9871 51.1267 45.8791 52.0187 46.9792 52.0187H52.3728L52.7058 56.0251H4.15952L4.49248 52.0187H9.88639C10.9866 52.0187 11.8784 51.1267 11.8784 50.0265C11.8784 48.9263 10.9865 48.0343 9.88639 48.0343H4.82358L4.83593 47.8858C5.01549 45.726 6.8511 44.0339 9.0174 44.0288C9.02059 44.0288 9.02378 44.0292 9.02683 44.0292C9.03254 44.0292 9.03812 44.0285 9.04383 44.0285H47.8219C47.8276 44.0285 47.8332 44.0292 47.8389 44.0292C47.8419 44.0292 47.8451 44.0288 47.8482 44.0288C50.0142 44.034 51.85 45.7263 52.0294 47.8858Z" fill="currentColor" />
                      <path d="M47.4249 22.8805C48.2028 23.6585 49.4642 23.6585 50.2421 22.8805L58.3623 14.7599C59.1403 13.982 59.1403 12.7206 58.3623 11.9425C57.5844 11.1647 56.3229 11.1647 55.5451 11.9425L48.8335 18.6544L45.721 15.5418C44.9432 14.7639 43.6817 14.7639 42.9038 15.5418C42.1258 16.3196 42.1258 17.5811 42.9038 18.3591L47.4249 22.8805Z" fill="currentColor" />
                    </g>
                    <defs>
                      <clipPath id="clip0_10061_30403">
                        <rect width="68" height="68" fill="white" />
                      </clipPath>
                    </defs>
                  </svg>
                </span>
                <span class="card__feature-number badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">Step-01</span>
                <h5 class="text-h6 mb-3">Browse & Select</h5>
                <p class="text-b4-regular">We launched our fleet of premium cars available for self-drive or chauffeur hire because we believe every special occasion</p>
              </div>
            </div>
            <!-- Column -->
            <div class="col-sm-6 col-lg-4">
              <div class="card p-4 p-lg-5 card__feature active text-start h-100">
                <span class="card__feature-icon">
                  <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_10061_30417)">
                      <path d="M45.2344 26.9531C46.5288 26.9531 47.5781 25.9038 47.5781 24.6094C47.5781 23.315 46.5288 22.2656 45.2344 22.2656C43.94 22.2656 42.8906 23.315 42.8906 24.6094C42.8906 25.9038 43.94 26.9531 45.2344 26.9531Z" fill="currentColor" />
                      <path d="M50.625 4.6875H47.5781V2.34375C47.5781 1.0493 46.5288 0 45.2344 0C43.9399 0 42.8906 1.0493 42.8906 2.34375V4.6875H32.2266V2.34375C32.2266 1.0493 31.1773 0 29.8828 0C28.5884 0 27.5391 1.0493 27.5391 2.34375V4.6875H16.9922V2.34375C16.9922 1.0493 15.9429 0 14.6484 0C13.354 0 12.3047 1.0493 12.3047 2.34375V4.6875H9.375C4.20563 4.6875 0 8.89313 0 14.0625V50.625C0 55.7944 4.20563 60 9.375 60H27.3047C28.5991 60 29.6484 58.9507 29.6484 57.6562C29.6484 56.3618 28.5991 55.3125 27.3047 55.3125H9.375C6.79031 55.3125 4.6875 53.2097 4.6875 50.625V14.0625C4.6875 11.4778 6.79031 9.375 9.375 9.375H12.3047V11.7188C12.3047 13.0132 13.354 14.0625 14.6484 14.0625C15.9429 14.0625 16.9922 13.0132 16.9922 11.7188V9.375H27.5391V11.7188C27.5391 13.0132 28.5884 14.0625 29.8828 14.0625C31.1773 14.0625 32.2266 13.0132 32.2266 11.7188V9.375H42.8906V11.7188C42.8906 13.0132 43.9399 14.0625 45.2344 14.0625C46.5288 14.0625 47.5781 13.0132 47.5781 11.7188V9.375H50.625C53.2097 9.375 55.3125 11.4778 55.3125 14.0625V27.4219C55.3125 28.7163 56.3618 29.7656 57.6562 29.7656C58.9507 29.7656 60 28.7163 60 27.4219V14.0625C60 8.89313 55.7944 4.6875 50.625 4.6875Z" fill="currentColor" />
                      <path d="M45.8203 31.6406C38.0016 31.6406 31.6406 38.0016 31.6406 45.8203C31.6406 53.6391 38.0016 60 45.8203 60C53.6391 60 60 53.6391 60 45.8203C60 38.0016 53.6391 31.6406 45.8203 31.6406ZM45.8203 55.3125C40.5864 55.3125 36.3281 51.0544 36.3281 45.8203C36.3281 40.5863 40.5864 36.3281 45.8203 36.3281C51.0543 36.3281 55.3125 40.5863 55.3125 45.8203C55.3125 51.0544 51.0543 55.3125 45.8203 55.3125Z" fill="currentColor" />
                      <path d="M49.2188 43.4766H48.1641V41.0156C48.1641 39.7212 47.1148 38.6719 45.8203 38.6719C44.5259 38.6719 43.4766 39.7212 43.4766 41.0156V45.8203C43.4766 47.1148 44.5259 48.1641 45.8203 48.1641H49.2188C50.5132 48.1641 51.5625 47.1148 51.5625 45.8203C51.5625 44.5259 50.5132 43.4766 49.2188 43.4766Z" fill="currentColor" />
                      <path d="M35.0391 26.9531C36.3335 26.9531 37.3828 25.9038 37.3828 24.6094C37.3828 23.315 36.3335 22.2656 35.0391 22.2656C33.7446 22.2656 32.6953 23.315 32.6953 24.6094C32.6953 25.9038 33.7446 26.9531 35.0391 26.9531Z" fill="currentColor" />
                      <path d="M24.8438 37.1484C26.1382 37.1484 27.1875 36.0991 27.1875 34.8047C27.1875 33.5103 26.1382 32.4609 24.8438 32.4609C23.5493 32.4609 22.5 33.5103 22.5 34.8047C22.5 36.0991 23.5493 37.1484 24.8438 37.1484Z" fill="currentColor" />
                      <path d="M14.6484 26.9531C15.9429 26.9531 16.9922 25.9038 16.9922 24.6094C16.9922 23.315 15.9429 22.2656 14.6484 22.2656C13.354 22.2656 12.3047 23.315 12.3047 24.6094C12.3047 25.9038 13.354 26.9531 14.6484 26.9531Z" fill="currentColor" />
                      <path d="M14.6484 37.1484C15.9429 37.1484 16.9922 36.0991 16.9922 34.8047C16.9922 33.5103 15.9429 32.4609 14.6484 32.4609C13.354 32.4609 12.3047 33.5103 12.3047 34.8047C12.3047 36.0991 13.354 37.1484 14.6484 37.1484Z" fill="currentColor" />
                      <path d="M14.6484 47.3438C15.9429 47.3438 16.9922 46.2944 16.9922 45C16.9922 43.7056 15.9429 42.6562 14.6484 42.6562C13.354 42.6562 12.3047 43.7056 12.3047 45C12.3047 46.2944 13.354 47.3438 14.6484 47.3438Z" fill="currentColor" />
                      <path d="M24.8438 47.3438C26.1382 47.3438 27.1875 46.2944 27.1875 45C27.1875 43.7056 26.1382 42.6562 24.8438 42.6562C23.5493 42.6562 22.5 43.7056 22.5 45C22.5 46.2944 23.5493 47.3438 24.8438 47.3438Z" fill="currentColor" />
                      <path d="M24.8438 26.9531C26.1382 26.9531 27.1875 25.9038 27.1875 24.6094C27.1875 23.315 26.1382 22.2656 24.8438 22.2656C23.5493 22.2656 22.5 23.315 22.5 24.6094C22.5 25.9038 23.5493 26.9531 24.8438 26.9531Z" fill="currentColor" />
                    </g>
                    <defs>
                      <clipPath id="clip0_10061_30417">
                        <rect width="60" height="60" fill="white" />
                      </clipPath>
                    </defs>
                  </svg>

                </span>
                <span class="card__feature-number badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">Step-02</span>
                <h5 class="text-h6 mb-3">Select Pick-up Date and Time</h5>
                <p class="text-b4-regular">Set the schedule that works for you. Our online booking system makes it simple to reserve your luxury car exactly when you need it.</p>
              </div>
            </div>
            <!-- Column -->
            <div class="col-sm-6 col-lg-4">
              <div class="card p-4 p-lg-5 card__feature text-start h-100">
                <span class="card__feature-icon">
                  <svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.5324 6.375C16.8737 6.375 13.6255 8.71615 12.4685 12.1871L9.30079 21.6903L7.65106 20.7378C6.63469 20.1511 5.33506 20.4992 4.74826 21.5156C4.16145 22.532 4.50969 23.8317 5.52606 24.4184L7.92897 25.8058L7.585 26.8377C4.32801 28.6529 2.125 32.1317 2.125 36.125V48.875C2.125 53.5694 5.93058 57.375 10.625 57.375C14.9596 57.375 18.5364 54.1304 19.0592 49.9375H32.9682C32.9478 49.5859 32.9375 49.2317 32.9375 48.875C32.9375 47.7873 33.0337 46.7222 33.2179 45.6875H17C15.8264 45.6875 14.875 46.6389 14.875 47.8125V48.875C14.875 51.2222 12.9722 53.125 10.625 53.125C8.27779 53.125 6.375 51.2222 6.375 48.875V36.125C6.375 32.6042 9.22918 29.75 12.75 29.75H55.25C58.0301 29.75 60.3946 31.5296 61.2664 34.0118C63.0673 35.2581 64.6307 36.8233 65.875 38.6257V36.125C65.875 32.1317 63.672 28.6529 60.415 26.8377L60.0366 25.7024L62.2605 24.4184C63.2769 23.8317 63.625 22.532 63.0382 21.5156C62.4514 20.4992 61.1519 20.1511 60.1355 20.7378L58.6648 21.5869L55.5315 12.1871C54.3745 8.71615 51.1263 6.375 47.4676 6.375H20.5324ZM55.4892 25.5L51.4996 13.531C50.9211 11.7956 49.297 10.625 47.4676 10.625H20.5324C18.703 10.625 17.0789 11.7956 16.5004 13.531L12.5108 25.5H55.4892Z" fill="currentColor" />
                    <path d="M22.3125 38.25C22.3125 39.4236 21.3611 40.375 20.1875 40.375H15.9375C14.7639 40.375 13.8125 39.4236 13.8125 38.25C13.8125 37.0764 14.7639 36.125 15.9375 36.125H20.1875C21.3611 36.125 22.3125 37.0764 22.3125 38.25Z" fill="currentColor" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M61.043 38.8321C57.4336 35.2226 51.5816 35.2226 47.9722 38.8321C46.0461 40.7583 45.1493 43.3237 45.2774 45.8407L40.0636 51.0545C37.6455 53.4727 37.6455 57.3933 40.0636 59.8114C42.4818 62.2296 46.4024 62.2296 48.8206 59.8114L54.0343 54.5977C56.5514 54.7258 59.1168 53.8289 61.043 51.9028C64.6524 48.2934 64.6524 42.4415 61.043 38.8321ZM50.9775 41.8372C52.9271 39.8877 56.0881 39.8877 58.0378 41.8372C59.9874 43.7869 59.9874 46.948 58.0378 48.8976C56.8394 50.0959 55.1843 50.5596 53.6256 50.2819C52.9417 50.16 52.2414 50.3802 51.7503 50.8714L45.8153 56.8062C45.0569 57.5647 43.8273 57.5647 43.0689 56.8062C42.3104 56.0478 42.3104 54.8181 43.0689 54.0597L49.0037 48.1248C49.4949 47.6336 49.715 46.9334 49.5932 46.2495C49.3154 44.6908 49.7791 43.0356 50.9775 41.8372Z" fill="currentColor" />
                  </svg>
                </span>
                <span class="card__feature-number badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b5-regular text-uppercase">Step-03</span>
                <h5 class="text-h6 mb-3">Collection and Drop-off</h5>
                <p class="text-b4-regular">Pick-up and drop-off across Central London, Heathrow, Gatwick, and surrounding areas. Your luxury car hire experience is tailored entirely to your day.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Section: : Booking Your London -->


  <!-- ==================== Section: : A Bespoke Luxury ==================== -->
  <section class="section-padding-y">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 order-lg-1">
          <div class="position-relative">
            <img class="img-fluid w-100 rounded-4" src="{{ asset('/assets-v2/img/banners/about-banner-5.png') }}" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-0">
          <div class="space-y-3 ps-lg-5">
            <h2 class="text-dark text-h2 mb-3">Covering Central London And Beyond</h2>
            <p class="text-secondary text-opacity-50 text-b3-regular">We make sure our luxury car hire fleet is ready whenever you are, and wherever you are, with full-service support from pickup to drop-off. Our service area covers:</p>
            <ul class="list-unstyled space-y-2">
              <li class="d-flex gap-3">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect width="20" height="20" rx="10" fill="#0072FF" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2483 6.15838L8.28164 11.9167L6.69831 10.2251C6.40664 9.95005 5.94831 9.93338 5.61497 10.1667C5.28997 10.4084 5.19831 10.8334 5.39831 11.1751L7.27331 14.2251C7.45664 14.5084 7.77331 14.6834 8.13164 14.6834C8.47331 14.6834 8.79831 14.5084 8.98164 14.2251C9.28164 13.8334 15.0066 7.00838 15.0066 7.00838C15.7566 6.24172 14.8483 5.56672 14.2483 6.15005V6.15838Z" fill="white" />
                </svg>
                <span>Central London</span>
              </li>
              <li class="d-flex gap-3">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect width="20" height="20" rx="10" fill="#0072FF" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2483 6.15838L8.28164 11.9167L6.69831 10.2251C6.40664 9.95005 5.94831 9.93338 5.61497 10.1667C5.28997 10.4084 5.19831 10.8334 5.39831 11.1751L7.27331 14.2251C7.45664 14.5084 7.77331 14.6834 8.13164 14.6834C8.47331 14.6834 8.79831 14.5084 8.98164 14.2251C9.28164 13.8334 15.0066 7.00838 15.0066 7.00838C15.7566 6.24172 14.8483 5.56672 14.2483 6.15005V6.15838Z" fill="white" />
                </svg>
                <span>Kensington</span>
              </li>
              <li class="d-flex gap-3">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect width="20" height="20" rx="10" fill="#0072FF" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2483 6.15838L8.28164 11.9167L6.69831 10.2251C6.40664 9.95005 5.94831 9.93338 5.61497 10.1667C5.28997 10.4084 5.19831 10.8334 5.39831 11.1751L7.27331 14.2251C7.45664 14.5084 7.77331 14.6834 8.13164 14.6834C8.47331 14.6834 8.79831 14.5084 8.98164 14.2251C9.28164 13.8334 15.0066 7.00838 15.0066 7.00838C15.7566 6.24172 14.8483 5.56672 14.2483 6.15005V6.15838Z" fill="white" />
                </svg>
                <span>Mayfair</span>
              </li>
              <li class="d-flex gap-3">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect width="20" height="20" rx="10" fill="#0072FF" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2483 6.15838L8.28164 11.9167L6.69831 10.2251C6.40664 9.95005 5.94831 9.93338 5.61497 10.1667C5.28997 10.4084 5.19831 10.8334 5.39831 11.1751L7.27331 14.2251C7.45664 14.5084 7.77331 14.6834 8.13164 14.6834C8.47331 14.6834 8.79831 14.5084 8.98164 14.2251C9.28164 13.8334 15.0066 7.00838 15.0066 7.00838C15.7566 6.24172 14.8483 5.56672 14.2483 6.15005V6.15838Z" fill="white" />
                </svg>
                <span>London Heathrow</span>
              </li>
              <li class="d-flex gap-3">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect width="20" height="20" rx="10" fill="#0072FF" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2483 6.15838L8.28164 11.9167L6.69831 10.2251C6.40664 9.95005 5.94831 9.93338 5.61497 10.1667C5.28997 10.4084 5.19831 10.8334 5.39831 11.1751L7.27331 14.2251C7.45664 14.5084 7.77331 14.6834 8.13164 14.6834C8.47331 14.6834 8.79831 14.5084 8.98164 14.2251C9.28164 13.8334 15.0066 7.00838 15.0066 7.00838C15.7566 6.24172 14.8483 5.56672 14.2483 6.15005V6.15838Z" fill="white" />
                </svg>
                <span>Gatwick</span>
              </li>
            </ul>

            <div class="mt-5">
              <a href="#" class="btn btn--gradient-primary">
                <span class="btn__text">View Fleet</span>
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
  </section>
  <!-- /Section: : A Bespoke Luxury -->

  <!-- ==================== Section: : Frequently Asked Questions ==================== -->
  <section class="oy-faq section-padding-y">
    <div class="container">
      <div class="oy-section-title text-center">
        <h3 class="text-h2">FAQs About Luxury Car Hire in London</h3>
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="accordion accordion--style-1 space-y-4" id="accordion-faq--2">
            <div class="accordion-item">
              <h2 class="accordion-header" id="accordion-faq-2-heading--1">
                <button class="accordion-button text-h6 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  How does self-drive hire work?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="accordion-faq-2-heading--1" data-bs-parent="#accordion-faq--2">
                <div class="accordion-body text-b2-regular text-secondary">
                  To access our self-drive luxury car hire service, drivers need to be above the age of 25 and should have held their driving license for at least 2 years. Then you can pick up your supercar from Central London, Heathrow, or Gatwick.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed text-h6 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Is comprehensive insurance included?
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
                  Can I add a driver to the car?
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
                  What’s your cancellation policy?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordion-faq--2">
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