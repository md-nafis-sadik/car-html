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
  <script src="{{ asset('/assets-v2/js/components/header-sticky.js') }}" defer></script>
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
      <div class="oy-banner bg-dark" style="background-image: url('{{ asset('/assets-v2/img/banners/gradient-banner-desktop-10.png') }}');">
        <div class="row oy-banner__row h-100 g-4 g-xl-5 align-items-center justify-content-between">
          <div class="col-lg-6 col-xl-6">
            <div class="space-y-3">
              <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b4-regular text-uppercase">Contact us</span>
              <h2 class="text-light text-h1 mb-3 mb-lg-4">Get In Touch</h2>
              <p class="text-light text-opacity-50 text-b2-regular mb-3">Looking to hire a supercar? We're a leading car hire company based in Glasgow, offering premium vehicles for every occasion.</p>
            </div>
          </div>
          <div class="col-lg-6 col-xl-4">
            <div class="space-y-4 d-md-none">
              <img class="rounded-4 img-fluid w-100" src="{{ asset('/assets-v2/img/banners/gradient-banner-mobile-10.png') }}" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Section: Hero Banner -->


  <!-- ==================== Section: Content ==================== -->
  <section class="section-padding-t">
    <div class="container">
      <div class="row g-4 g-lg-5">
        <div class="col-lg-6">
          <div class="card p-4 p-lg-5 rounded-4 bg-light border">
            <h3 class="text-h5 mb-4">Contact Information</h3>
            <p class="mb-4">We specialize in providing premium car hire services with a fleet of luxury and supercars. Whether you need a vehicle for a special occasion, business trip, or just want to experience driving a high-performance car, we have the perfect vehicle for you</p>
            <p class="mb-4">If you would like to browse our available vehicles, you can do so <a href="#" class="link-primary">here</a>.</p>
            <p>If you cannot find the answer you are looking for, please feel free to contact us.</p>

            <hr class="border my-4">

            <h3 class="text-h5 mb-4">General Enquiries</h3>
            <ul class="list-unstyled d-flex flex-column gap-3 text-b1-medium">
              <!-- Item -->
              <li class="d-flex align-items-center gap-3">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="20" cy="20" r="20" fill="#0072FF" fill-opacity="0.1" />
                  <path d="M24.215 19.0625C23.8925 19.0625 23.6375 18.8 23.6375 18.485C23.6375 18.2075 23.36 17.63 22.895 17.1275C22.4375 16.64 21.935 16.355 21.515 16.355C21.1925 16.355 20.9375 16.0925 20.9375 15.7775C20.9375 15.4625 21.2 15.2 21.515 15.2C22.265 15.2 23.0525 15.605 23.7425 16.3325C24.3875 17.015 24.8 17.8625 24.8 18.4775C24.8 18.8 24.5375 19.0625 24.215 19.0625Z" fill="#0072FF" />
                  <path d="M26.9223 19.0625C26.5998 19.0625 26.3448 18.8 26.3448 18.485C26.3448 15.8225 24.1773 13.6625 21.5223 13.6625C21.1998 13.6625 20.9448 13.4 20.9448 13.085C20.9448 12.77 21.1998 12.5 21.5148 12.5C24.8148 12.5 27.4998 15.185 27.4998 18.485C27.4998 18.8 27.2373 19.0625 26.9223 19.0625Z" fill="#0072FF" />
                  <path d="M19.2875 22.2125L17.9 23.6C17.6075 23.8925 17.1425 23.8925 16.8425 23.6075C16.76 23.525 16.6775 23.45 16.595 23.3675C15.8225 22.5875 15.125 21.77 14.5025 20.915C13.8875 20.06 13.3925 19.205 13.0325 18.3575C12.68 17.5025 12.5 16.685 12.5 15.905C12.5 15.395 12.59 14.9075 12.77 14.4575C12.95 14 13.235 13.58 13.6325 13.205C14.1125 12.7325 14.6375 12.5 15.1925 12.5C15.4025 12.5 15.6125 12.545 15.8 12.635C15.995 12.725 16.1675 12.86 16.3025 13.055L18.0425 15.5075C18.1775 15.695 18.275 15.8675 18.3425 16.0325C18.41 16.19 18.4475 16.3475 18.4475 16.49C18.4475 16.67 18.395 16.85 18.29 17.0225C18.1925 17.195 18.05 17.375 17.87 17.555L17.3 18.1475C17.2175 18.23 17.18 18.3275 17.18 18.4475C17.18 18.5075 17.1875 18.56 17.2025 18.62C17.225 18.68 17.2475 18.725 17.2625 18.77C17.3975 19.0175 17.63 19.34 17.96 19.73C18.2975 20.12 18.6575 20.5175 19.0475 20.915C19.1225 20.99 19.205 21.065 19.28 21.14C19.58 21.4325 19.5875 21.9125 19.2875 22.2125Z" fill="#0072FF" />
                  <path d="M27.4777 24.7475C27.4777 24.9575 27.4402 25.175 27.3652 25.385C27.3427 25.445 27.3202 25.505 27.2902 25.565C27.1627 25.835 26.9977 26.09 26.7802 26.33C26.4127 26.735 26.0077 27.0275 25.5502 27.215C25.5427 27.215 25.5352 27.2225 25.5277 27.2225C25.0852 27.4025 24.6052 27.5 24.0877 27.5C23.3227 27.5 22.5052 27.32 21.6427 26.9525C20.7802 26.585 19.9177 26.09 19.0627 25.4675C18.7702 25.25 18.4777 25.0325 18.2002 24.8L20.6527 22.3475C20.8627 22.505 21.0502 22.625 21.2077 22.7075C21.2452 22.7225 21.2902 22.745 21.3427 22.7675C21.4027 22.79 21.4627 22.7975 21.5302 22.7975C21.6577 22.7975 21.7552 22.7525 21.8377 22.67L22.4077 22.1075C22.5952 21.92 22.7752 21.7775 22.9477 21.6875C23.1202 21.5825 23.2927 21.53 23.4802 21.53C23.6227 21.53 23.7727 21.56 23.9377 21.6275C24.1027 21.695 24.2752 21.7925 24.4627 21.92L26.9452 23.6825C27.1402 23.8175 27.2752 23.975 27.3577 24.1625C27.4327 24.35 27.4777 24.5375 27.4777 24.7475Z" fill="#0072FF" />
                </svg>
                <a class="link-dark text-decoration-none fw-semibold" href="telto:01412375050">0141 237 5050</a>
              </li>
              <!-- Item -->
              <li class="d-flex align-items-center gap-3">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="20" cy="20" r="20" fill="#0072FF" fill-opacity="0.1" />
                  <path d="M24.1665 12.9167H15.8332C13.3332 12.9167 11.6665 14.1667 11.6665 17.0834V22.9167C11.6665 25.8334 13.3332 27.0834 15.8332 27.0834H24.1665C26.6665 27.0834 28.3332 25.8334 28.3332 22.9167V17.0834C28.3332 14.1667 26.6665 12.9167 24.1665 12.9167ZM24.5582 17.9917L21.9498 20.0751C21.3998 20.5167 20.6998 20.7334 19.9998 20.7334C19.2998 20.7334 18.5915 20.5167 18.0498 20.0751L15.4415 17.9917C15.1748 17.7751 15.1332 17.3751 15.3415 17.1084C15.5582 16.8417 15.9498 16.7917 16.2165 17.0084L18.8248 19.0917C19.4582 19.6001 20.5332 19.6001 21.1665 19.0917L23.7748 17.0084C24.0415 16.7917 24.4415 16.8334 24.6498 17.1084C24.8665 17.3751 24.8248 17.7751 24.5582 17.9917Z" fill="#0072FF" />
                </svg>
                <a class="link-dark text-decoration-none fw-semibold" href="mailto:enquiries@autofusionhire.co.uk">enquiries@autofusionhire.co.uk</a>
              </li>
            </ul>

            <!-- Social Media -->
            <ul class="list-unstyled mt-4 mb-0 d-flex flex-wrap gap-3">
              <li><a href="#">
                  <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="25" cy="25" r="25" fill="#5C5C5C" fill-opacity="0.07" />
                    <path d="M26.7109 36.0256V25.9815H30.0994L30.6031 22.0489H26.7109V19.544C26.7109 18.4091 27.0271 17.6322 28.6558 17.6322H30.7195V14.1261C29.7154 14.0185 28.7061 13.9665 27.6962 13.9704C24.7011 13.9704 22.6447 15.7989 22.6447 19.1555V22.0415H19.2783V25.9741H22.6521V36.0256H26.7109Z" fill="#030B1C" />
                  </svg>
                </a></li>
              <li><a href="#">
                  <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="25" cy="25" r="25" fill="#5C5C5C" fill-opacity="0.07" />
                    <g clip-path="url(#clip0_10061_15823)">
                      <path d="M30.1469 14.7065H19.853C17.0224 14.7065 14.7061 17.0229 14.7061 19.8535V30.1478C14.7061 32.9777 17.0224 35.2948 19.853 35.2948H30.1469C32.9774 35.2948 35.2938 32.9777 35.2938 30.1478V19.8535C35.2938 17.0229 32.9774 14.7065 30.1469 14.7065ZM33.5781 30.1478C33.5781 32.0393 32.0394 33.5791 30.1469 33.5791H19.853C17.9612 33.5791 16.4218 32.0393 16.4218 30.1478V19.8535C16.4218 17.9615 17.9612 16.4223 19.853 16.4223H30.1469C32.0394 16.4223 33.5781 17.9615 33.5781 19.8535V30.1478Z" fill="#030B1C" />
                      <path d="M30.5738 20.7119C31.2845 20.7119 31.8606 20.1358 31.8606 19.4252C31.8606 18.7145 31.2845 18.1384 30.5738 18.1384C29.8632 18.1384 29.2871 18.7145 29.2871 19.4252C29.2871 20.1358 29.8632 20.7119 30.5738 20.7119Z" fill="#030B1C" />
                      <path d="M24.9995 19.8525C22.1563 19.8525 19.8525 22.1565 19.8525 24.9995C19.8525 27.8413 22.1563 30.1469 24.9995 30.1469C27.8418 30.1469 30.1464 27.8413 30.1464 24.9995C30.1464 22.1565 27.8418 19.8525 24.9995 19.8525ZM24.9995 28.4312C23.1046 28.4312 21.5683 26.8948 21.5683 24.9995C21.5683 23.1041 23.1046 21.5683 24.9995 21.5683C26.8943 21.5683 28.4307 23.1041 28.4307 24.9995C28.4307 26.8948 26.8943 28.4312 24.9995 28.4312Z" fill="#030B1C" />
                    </g>
                    <defs>
                      <clipPath id="clip0_10061_15823">
                        <rect width="20.5882" height="20.5882" fill="white" transform="translate(14.7061 14.7065)" />
                      </clipPath>
                    </defs>
                  </svg>
                </a></li>
              <li><a href="#">
                  <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="25" cy="25" r="25" fill="#5C5C5C" fill-opacity="0.07" />
                    <g clip-path="url(#clip0_10061_15830)">
                      <path d="M16.6355 14.4285C15.018 14.4285 13.9604 15.4906 13.9604 16.8867C13.9604 18.2519 14.9865 19.3443 16.5735 19.3443H16.6042C18.2533 19.3443 19.2797 18.2519 19.2797 16.8867C19.2488 15.4906 18.2533 14.4285 16.6355 14.4285Z" fill="#030B1C" />
                      <path d="M14.2368 21.2861H18.9655V35.5126H14.2368V21.2861Z" fill="#030B1C" />
                      <path d="M30.5729 20.9541C28.0219 20.9541 26.3114 23.3512 26.3114 23.3512V21.288H21.5825V35.5145H26.3111V27.5699C26.3111 27.1445 26.3419 26.7199 26.4669 26.4158C26.8087 25.5665 27.5866 24.6866 28.893 24.6866C30.6041 24.6866 31.2885 25.9913 31.2885 27.9038V35.5145H36.0167V27.3573C36.0167 22.9875 33.6838 20.9541 30.5729 20.9541Z" fill="#030B1C" />
                    </g>
                    <defs>
                      <clipPath id="clip0_10061_15830">
                        <rect width="23.5294" height="23.5294" fill="white" transform="translate(13.2349 13.2339)" />
                      </clipPath>
                    </defs>
                  </svg>
                </a></li>
              <li><a href="#">
                  <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="25" cy="25" r="25" fill="#5C5C5C" fill-opacity="0.07" />
                    <g clip-path="url(#clip0_10061_15836)">
                      <path d="M30.3936 18.5626C29.471 17.4898 28.9875 16.1036 29.0258 14.6923L25.5774 14.6091V14.9545V29.3673C24.649 33.5045 18.6614 32.425 19.2608 28.2156C19.5953 26.2928 21.6609 25.1098 23.4969 25.7785V22.2601C19.5001 21.5643 15.7125 24.7453 15.7523 28.7981C16.1016 37.5873 28.708 37.5886 29.0577 28.7981C28.9696 28.4836 29.0188 22.6263 29.0063 22.1324C30.5743 23.108 32.3987 23.5956 34.2463 23.5335V19.8996C32.5383 19.8996 31.2347 19.4455 30.3936 18.5626Z" fill="#030B1C" />
                    </g>
                    <defs>
                      <clipPath id="clip0_10061_15836">
                        <rect width="21.875" height="21.875" fill="white" transform="translate(14.0625 14.0625)" />
                      </clipPath>
                    </defs>
                  </svg>
                </a></li>
              <li><a href="#">
                  <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="25" cy="25" r="25" fill="#5C5C5C" fill-opacity="0.07" />
                    <g clip-path="url(#clip0_10061_15841)">
                      <path d="M34.3645 19.0799C33.6313 18.2083 32.2776 17.8528 29.6923 17.8528H20.3076C17.6631 17.8528 16.2864 18.2313 15.5559 19.1592C14.8438 20.064 14.8438 21.3971 14.8438 23.2421V26.7587C14.8438 30.3331 15.6888 32.1479 20.3076 32.1479H29.6923C31.9343 32.1479 33.1766 31.8342 33.9804 31.065C34.8046 30.2762 35.1562 28.9884 35.1562 26.7587V23.2421C35.1562 21.2963 35.1011 19.9554 34.3645 19.0799ZM27.8844 25.4859L23.6229 27.7131C23.5276 27.7629 23.4234 27.7876 23.3194 27.7876C23.2016 27.7876 23.084 27.7559 22.9799 27.6929C22.7838 27.5741 22.6641 27.3616 22.6641 27.1324V22.6922C22.6641 22.4634 22.7835 22.2511 22.9792 22.1322C23.1749 22.0134 23.4183 22.0052 23.6214 22.1107L27.8829 24.3236C28.0998 24.4362 28.2359 24.66 28.2362 24.9042C28.2365 25.1486 28.1009 25.3728 27.8844 25.4859Z" fill="#030B1C" />
                    </g>
                    <defs>
                      <clipPath id="clip0_10061_15841">
                        <rect width="20.3125" height="20.3125" fill="white" transform="translate(14.8438 14.8438)" />
                      </clipPath>
                    </defs>
                  </svg>
                </a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card p-4 p-lg-5 rounded-4 bg-lighter">
            <h3 class="text-h5 mb-4">Get In Touch About Car Hire</h3>
            <p class="mb-4">Have questions about our luxury car hire services? We're here to help.</p>

            <form>
              <div class="row g-4">
                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your full name">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email address">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="tel" class="form-control" placeholder="Phone number">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <select name="" id="" class="e-select ps-3 form-select">
                      <option value="">Subject</option>
                      <option value="">Subject 01</option>
                      <option value="">Subject 02</option>
                      <option value="">Subject 03</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <textarea rows="5" cols="30" class="form-control" placeholder="Your message"></textarea>
                  </div>
                </div>
                <div class="col-lg-12">
                  <button type="submit" class="btn btn--gradient-primary">
                    <span class="btn__text">Send Message</span>
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="d-flex rounded-4 overflow-hidden">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.364973311433!2d-0.452250123221129!3d51.46981471344817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487673cb743ccf01%3A0xea74a219c60588e1!2sTerminal%202%2C%20Inner%20Ring%20E%2C%20Hounslow%20TW6%201EW%2C%20UK!5e0!3m2!1sen!2sbd!4v1765670857124!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Section: Content -->


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


  <!-- ==================== Section: : Marquee Slider ==================== -->
  <script src="{{ asset('/assets-v2/js/components/marquee-slider.js') }}" defer></script>
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

  <!-- ==================== Section: : OUR Fleet Slider ==================== -->
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
  <!-- /Section: : OUR Fleet Slider -->

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