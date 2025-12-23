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

  <!-- ==================== Section: Dashboard ==================== -->
  <section class="oy-dashboard">
    <div class="container-fluid px-3 px-lg-5">
      <div class="oy-dashboard__grid">
        <!-- Dashboard Sidebar -->
        <div class="oy-dashboard__sidebar">
          <!-- Header -->
          <div class="mb-5">
            <h3 class="text-dark mb-3 text-h5 fw-bold">
              <div class="text-dark text-opacity-50">Mr Usman's</div>
              <div>Account</div>
            </h3>
            <div class="badge bg-white rounded-pill text-bg-light text-b5-medium">Account #AFU-25130A04B5</div>
          </div>

          <ul class="oy-dashboard__navbar">
            <li>
              <a href="#" class="active">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 10H7C7.55 10 8 9.55 8 9V1C8 0.45 7.55 0 7 0H1C0.45 0 0 0.45 0 1V9C0 9.55 0.45 10 1 10ZM1 18H7C7.55 18 8 17.55 8 17V13C8 12.45 7.55 12 7 12H1C0.45 12 0 12.45 0 13V17C0 17.55 0.45 18 1 18ZM11 18H17C17.55 18 18 17.55 18 17V9C18 8.45 17.55 8 17 8H11C10.45 8 10 8.45 10 9V17C10 17.55 10.45 18 11 18ZM10 1V5C10 5.55 10.45 6 11 6H17C17.55 6 18 5.55 18 5V1C18 0.45 17.55 0 17 0H11C10.45 0 10 0.45 10 1Z" fill="currentColor" />
                </svg>
                <span>Dashboard</span>
              </a>
            </li>
            <li>
              <a href="#">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16.5208 18.741H2.9891C1.63638 18.741 0.592366 17.7204 0.769669 16.3794L0.87227 15.5973C1.05857 14.5173 2.04679 13.8378 3.1196 13.6047L9.6852 12.45H9.8148L16.3804 13.6047C17.4712 13.8567 18.4414 14.4984 18.6277 15.5973L18.7303 16.3893C18.9076 17.7303 17.8636 18.75 16.5109 18.75L16.5208 18.741ZM14.2501 5.25C14.2501 6.44347 13.776 7.58807 12.932 8.43198C12.0881 9.27589 10.9435 9.75 9.75 9.75C8.55651 9.75 7.4119 9.27589 6.56797 8.43198C5.72405 7.58807 5.24993 6.44347 5.24993 5.25C5.24993 4.05653 5.72405 2.91193 6.56797 2.06802C7.4119 1.22411 8.55651 0.75 9.75 0.75C10.9435 0.75 12.0881 1.22411 12.932 2.06802C13.776 2.91193 14.2501 4.05653 14.2501 5.25Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span>Manage Subscriptions</span>
              </a>
            </li>
            <li>
              <a href="#">
                <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.75 18.75C10.1434 17.6305 8.28351 16.9171 6.33324 16.6769C4.95004 16.3987 3.54081 16.2673 2.12946 16.2849C1.94887 16.2865 1.76976 16.2526 1.60246 16.1853C1.43517 16.1179 1.283 16.0184 1.15475 15.8926C1.02649 15.7667 0.924695 15.6169 0.855226 15.4519C0.785757 15.2869 0.749993 15.1099 0.75 14.9311L0.774973 2.10766C0.774213 1.76359 0.905825 1.43214 1.14306 1.18067C1.38029 0.929207 1.70535 0.776598 2.05216 0.75386C3.48887 0.725588 4.92441 0.852696 6.33324 1.13292C8.2814 1.38174 10.1398 2.0934 11.75 3.20718M11.75 18.75V3.20718M11.75 18.75C13.3566 17.6305 15.2165 16.9171 17.1668 16.6769C18.55 16.3987 19.9592 16.2673 21.3705 16.2849C21.5511 16.2865 21.7302 16.2526 21.8975 16.1853C22.0648 16.1179 22.217 16.0184 22.3453 15.8926C22.4735 15.7667 22.5753 15.6169 22.6448 15.4519C22.7142 15.2869 22.75 15.1099 22.75 14.9311L22.7238 2.10766C22.7246 1.76378 22.5932 1.43249 22.3562 1.18105C22.1192 0.929619 21.7944 0.776884 21.4478 0.75386C20.0111 0.725588 18.5756 0.852696 17.1668 1.13292C15.2186 1.38174 13.3602 2.0934 11.75 3.20718" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span>Manage Bookings</span>
              </a>
            </li>
            <li>
              <a href="#">
                <svg width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.79252 17.8346C5.50838 18.136 5.52236 18.6107 5.82375 18.8948C6.12514 19.179 6.59981 19.165 6.88395 18.8636L6.33824 18.3491L5.79252 17.8346ZM13.6071 18.854C13.886 19.1603 14.3603 19.1826 14.6666 18.9037C14.9729 18.6249 14.9952 18.1506 14.7164 17.8442L14.1618 18.3491L13.6071 18.854ZM12.4182 11.7494V10.9994H11.6682V11.7494H12.4182ZM12.4194 11.7494V12.4994H13.1694V11.7494H12.4194ZM7.45867 3.70208C7.87288 3.70054 8.20742 3.36351 8.20588 2.9493C8.20434 2.53509 7.8673 2.20055 7.45309 2.20209L7.45588 2.95209L7.45867 3.70208ZM1.89559 4.01904L2.40703 4.56761L2.40711 4.56753L1.89559 4.01904ZM1.89559 21.6809L2.40731 21.1325L2.40675 21.132L1.89559 21.6809ZM18.6044 21.682L19.1159 22.2305L19.1161 22.2303L18.6044 21.682ZM18.6044 4.01904L18.0929 4.56753L18.093 4.56761L18.6044 4.01904ZM13.0469 2.20209C12.6327 2.20055 12.2957 2.53509 12.2941 2.9493C12.2926 3.36351 12.6271 3.70054 13.0413 3.70208L13.0441 2.95209L13.0469 2.20209ZM7.75988 2.54511L7.02978 2.3735L7.02965 2.37404L7.75988 2.54511ZM8.02365 1.67395L7.37418 1.2986L7.36736 1.31093L8.02365 1.67395ZM9.23406 0.801697L9.38835 1.53576L9.40068 1.53295L9.23406 0.801697ZM11.2659 0.801697L11.0993 1.53306L11.1117 1.53566L11.2659 0.801697ZM12.4764 1.67395L13.1335 1.31257L13.1297 1.30558L13.1257 1.29867L12.4764 1.67395ZM12.7401 2.54511L13.4703 2.37404L13.4702 2.3735L12.7401 2.54511ZM12.8329 2.94109L12.1027 3.11216L12.1028 3.11268L12.8329 2.94109ZM12.9748 4.46561L13.6531 4.78572L13.6563 4.7788L12.9748 4.46561ZM12.5199 4.96169L12.1406 4.31467L12.1346 4.31826L12.5199 4.96169ZM7.98006 4.96279L8.36376 4.31835L8.35986 4.31607L7.98006 4.96279ZM7.52518 4.46561L6.84367 4.77882L6.84644 4.78469L7.52518 4.46561ZM7.66712 2.94109L8.39728 3.11246L8.39735 3.11216L7.66712 2.94109ZM6.33824 18.3491L6.88395 18.8636C8.62842 17.0132 11.8697 16.9454 13.6071 18.854L14.1618 18.3491L14.7164 17.8442C12.3566 15.2519 8.10064 15.3864 5.79252 17.8346L6.33824 18.3491ZM12.4182 11.7494H11.6682C11.6682 12.5585 11.0228 13.1993 10.2422 13.1993V13.9493V14.6993C11.8667 14.6993 13.1682 13.3713 13.1682 11.7494H12.4182ZM10.2422 13.9493V13.1993C9.46242 13.1993 8.81612 12.5582 8.81612 11.7494H8.06612H7.31612C7.31612 13.3716 8.61899 14.6993 10.2422 14.6993V13.9493ZM8.06612 11.7494H8.81612C8.81612 10.9407 9.46242 10.2996 10.2422 10.2996V9.54956V8.79956C8.61899 8.79956 7.31612 10.1273 7.31612 11.7494H8.06612ZM10.2422 9.54956V10.2996C11.0224 10.2996 11.6694 10.9412 11.6694 11.7494H12.4194H13.1694C13.1694 10.1268 11.8649 8.79956 10.2422 8.79956V9.54956ZM12.4194 11.7494V10.9994H12.4182V11.7494V12.4994H12.4194V11.7494ZM7.45588 2.95209L7.45309 2.20209C5.98347 2.20757 4.79097 2.23438 3.83044 2.39149C2.85236 2.55147 2.04201 2.85695 1.38407 3.47054L1.89559 4.01904L2.40711 4.56753C2.77293 4.22637 3.2652 4.00388 4.07256 3.87182C4.89748 3.73689 5.97324 3.70761 7.45867 3.70208L7.45588 2.95209ZM1.89559 4.01904L1.38415 3.47047C0.639816 4.16442 0.30751 5.04966 0.150876 6.13595C-0.001827 7.19498 0 8.5482 0 10.2447H0.75H1.5C1.5 8.50282 1.50183 7.27722 1.63552 6.35002C1.76528 5.45009 2.00577 4.9417 2.40703 4.56761L1.89559 4.01904ZM0.75 10.2447H0V15.4552H0.75H1.5V10.2447H0.75ZM0.75 15.4552H0C0 17.1517 -0.00182647 18.5052 0.150874 19.5643C0.30749 20.6507 0.639785 21.5362 1.38443 22.2297L1.89559 21.6809L2.40675 21.132C2.0058 20.7586 1.7653 20.2505 1.63552 19.3503C1.50183 18.4229 1.5 17.1971 1.5 15.4552H0.75ZM1.89559 21.6809L1.38387 22.2292C2.12073 22.9169 3.04832 23.2176 4.18771 23.3605C5.31054 23.5014 6.74923 23.5 8.57353 23.5V22.75V22C6.70959 22 5.3821 21.9986 4.37443 21.8722C3.3833 21.7478 2.81603 21.514 2.40731 21.1325L1.89559 21.6809ZM8.57353 22.75V23.5H11.9265V22.75V22H8.57353V22.75ZM11.9265 22.75V23.5C13.7508 23.5 15.1894 23.5014 16.3122 23.3607C17.4515 23.2179 18.379 22.9175 19.1159 22.2305L18.6044 21.682L18.093 21.1334C17.6843 21.5144 17.1169 21.7481 16.1257 21.8723C15.1179 21.9986 13.7904 22 11.9265 22V22.75ZM18.6044 21.682L19.1161 22.2303C19.8602 21.5358 20.1925 20.6505 20.3491 19.5642C20.5018 18.5052 20.5 17.1522 20.5 15.4563H19.75H19C19 17.1976 18.9982 18.4229 18.8645 19.3501C18.7347 20.2501 18.4942 20.7589 18.0927 21.1336L18.6044 21.682ZM19.75 15.4563H20.5V10.2447H19.75H19V15.4563H19.75ZM19.75 10.2447H20.5C20.5 8.5482 20.5018 7.19498 20.3491 6.13595C20.1925 5.04966 19.8602 4.16442 19.1159 3.47047L18.6044 4.01904L18.093 4.56761C18.4942 4.9417 18.7347 5.45009 18.8645 6.35002C18.9982 7.27722 19 8.50282 19 10.2447H19.75ZM18.6044 4.01904L19.1159 3.47054C18.458 2.857 17.648 2.55149 16.67 2.39149C15.7096 2.23438 14.5171 2.20757 13.0469 2.20209L13.0441 2.95209L13.0413 3.70208C14.5273 3.70761 15.6031 3.7369 16.4278 3.87182C17.235 4.00386 17.727 4.22632 18.0929 4.56753L18.6044 4.01904ZM7.75988 2.54511L8.48999 2.71672C8.608 2.21463 8.63946 2.11015 8.67994 2.03697L8.02365 1.67395L7.36736 1.31093C7.20219 1.60954 7.12635 1.96263 7.02978 2.3735L7.75988 2.54511ZM8.02365 1.67395L8.673 2.04924C8.74745 1.92042 8.84929 1.80763 8.9725 1.71884L8.53403 1.11037L8.09554 0.501901C7.80154 0.713772 7.55551 0.985113 7.37429 1.29867L8.02365 1.67395ZM8.53403 1.11037L8.9725 1.71884C9.09575 1.63002 9.23742 1.56738 9.38833 1.53566L9.23406 0.801697L9.07979 0.0677356C8.72499 0.142311 8.38952 0.290056 8.09554 0.501901L8.53403 1.11037ZM9.23406 0.801697L9.40068 1.53295C9.52504 1.50462 9.68579 1.5 10.25 1.5V0.75V0C9.76362 0 9.39684 -0.00461787 9.06743 0.0704406L9.23406 0.801697ZM10.25 0.75V1.5C10.8142 1.5 10.975 1.50462 11.0993 1.53295L11.2659 0.801697L11.4326 0.0704406C11.1032 -0.00461787 10.7364 0 10.25 0V0.75ZM11.2659 0.801697L11.1117 1.53566C11.2626 1.56738 11.4042 1.63002 11.5275 1.71884L11.966 1.11037L12.4045 0.501901C12.1105 0.290056 11.775 0.142311 11.4202 0.0677356L11.2659 0.801697ZM11.966 1.11037L11.5275 1.71884C11.6507 1.80763 11.7526 1.92042 11.827 2.04924L12.4764 1.67395L13.1257 1.29867C12.9445 0.985113 12.6985 0.713772 12.4045 0.501901L11.966 1.11037ZM12.4764 1.67395L11.8192 2.03534C11.8606 2.11073 11.8924 2.21621 12.01 2.71672L12.7401 2.54511L13.4702 2.3735C13.3733 1.96105 13.2977 1.61116 13.1335 1.31257L12.4764 1.67395ZM12.7401 2.54511L12.0099 2.71618L12.1027 3.11216L12.8329 2.94109L13.5631 2.77002L13.4703 2.37404L12.7401 2.54511ZM12.8329 2.94109L12.1028 3.11268C12.2017 3.53347 12.2609 3.79012 12.2843 3.98121C12.3065 4.16171 12.2811 4.17908 12.2933 4.15242L12.9748 4.46561L13.6563 4.7788C13.8116 4.44086 13.8102 4.1002 13.7732 3.79837C13.7374 3.50714 13.6541 3.15717 13.563 2.7695L12.8329 2.94109ZM12.9748 4.46561L12.2966 4.14552C12.2641 4.21424 12.2104 4.27376 12.1406 4.31469L12.5199 4.96169L12.8993 5.60868C13.2272 5.41644 13.4905 5.1302 13.6531 4.78571L12.9748 4.46561ZM12.5199 4.96169L12.1346 4.31826C12.1214 4.32615 12.0594 4.3593 11.8306 4.37904C11.5978 4.39912 11.2861 4.39978 10.8066 4.39978V5.14978V5.89978C11.2592 5.89978 11.6471 5.90044 11.9595 5.87349C12.2758 5.84621 12.6044 5.78532 12.9053 5.60512L12.5199 4.96169ZM10.8066 5.14978V4.39978H9.69341V5.14978V5.89978H10.8066V5.14978ZM9.69341 5.14978V4.39978C9.21397 4.39978 8.90205 4.39913 8.66904 4.37915C8.43982 4.35949 8.37728 4.32642 8.36375 4.31837L7.98006 4.96279L7.59637 5.60721C7.8969 5.78615 8.22498 5.84657 8.54088 5.87366C8.85301 5.90043 9.24073 5.89978 9.69341 5.89978V5.14978ZM7.98006 4.96279L8.35986 4.31607C8.28998 4.27503 8.23628 4.21538 8.20392 4.14653L7.52518 4.46561L6.84644 4.78469C7.00871 5.12987 7.27209 5.41679 7.60026 5.60951L7.98006 4.96279ZM7.52518 4.46561L8.20665 4.15242C8.21888 4.17902 8.19351 4.16188 8.21565 3.98168C8.23913 3.79061 8.29834 3.53401 8.39728 3.11246L7.66712 2.94109L6.93696 2.76973C6.84589 3.15773 6.76261 3.50775 6.72685 3.79873C6.68976 4.10058 6.68842 4.44092 6.8437 4.7788L7.52518 4.46561ZM7.66712 2.94109L8.39735 3.11216L8.49011 2.71618L7.75988 2.54511L7.02965 2.37404L6.93689 2.77002L7.66712 2.94109Z" fill="currentColor" />
                </svg>
                <span>ID Docs</span>
              </a>
            </li>
            <li>
              <a href="#">
                <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.7623 11.9151L16.3723 10.7275C16.4381 10.3245 16.4721 9.91313 16.4721 9.50172C16.4721 9.09031 16.4381 8.67889 16.3723 8.27597L17.7623 7.08838C17.8672 6.99869 17.9422 6.87923 17.9775 6.74589C18.0127 6.61255 18.0065 6.47164 17.9597 6.3419L17.9406 6.28676C17.5579 5.21799 16.9849 4.22722 16.2492 3.36234L16.211 3.31781C16.1218 3.21294 16.0028 3.13756 15.8699 3.1016C15.7369 3.06564 15.5961 3.07078 15.4662 3.11634L13.7409 3.72922C13.1042 3.20753 12.3933 2.79612 11.6251 2.50771L11.2919 0.705127C11.2668 0.569493 11.2009 0.444712 11.1031 0.347363C11.0053 0.250014 10.8802 0.184705 10.7444 0.160112L10.6871 0.149508C9.58147 -0.049836 8.41853 -0.049836 7.3129 0.149508L7.2556 0.160112C7.11978 0.184705 6.99466 0.250014 6.89686 0.347363C6.79907 0.444712 6.73323 0.569493 6.70809 0.705127L6.37279 2.51619C5.61071 2.80468 4.90102 3.21587 4.27187 3.73346L2.53384 3.11634C2.40389 3.07041 2.26304 3.06509 2.12999 3.10107C1.99694 3.13706 1.878 3.21265 1.78897 3.31781L1.75077 3.36234C1.01596 4.22784 0.443048 5.21844 0.0594242 6.28676L0.0403249 6.3419C-0.0551714 6.60699 0.0233479 6.90388 0.237684 7.08838L1.64466 8.28869C1.57888 8.68738 1.54704 9.09455 1.54704 9.4996C1.54704 9.90677 1.57888 10.3139 1.64466 10.7105L0.237684 11.9108C0.132841 12.0005 0.0578039 12.12 0.0225499 12.2533C-0.0127041 12.3867 -0.00650436 12.5276 0.0403249 12.6573L0.0594242 12.7124C0.443532 13.7813 1.01227 14.7674 1.75077 15.6369L1.78897 15.6814C1.87821 15.7863 1.99716 15.8616 2.13013 15.8976C2.2631 15.9336 2.40385 15.9284 2.53384 15.8829L4.27187 15.2657C4.90427 15.7853 5.61094 16.1967 6.37279 16.483L6.70809 18.2941C6.73323 18.4297 6.79907 18.5545 6.89686 18.6518C6.99466 18.7492 7.11978 18.8145 7.2556 18.8391L7.3129 18.8497C8.42869 19.0501 9.57131 19.0501 10.6871 18.8497L10.7444 18.8391C10.8802 18.8145 11.0053 18.7492 11.1031 18.6518C11.2009 18.5545 11.2668 18.4297 11.2919 18.2941L11.6251 16.4915C12.393 16.2038 13.1079 15.7911 13.7409 15.27L15.4662 15.8829C15.5961 15.9288 15.737 15.9341 15.87 15.8981C16.0031 15.8621 16.122 15.7865 16.211 15.6814L16.2492 15.6369C16.9877 14.7653 17.5565 13.7813 17.9406 12.7124L17.9597 12.6573C18.0552 12.3965 17.9767 12.0996 17.7623 11.9151ZM14.8656 8.52621C14.9186 8.84643 14.9462 9.17513 14.9462 9.50384C14.9462 9.83255 14.9186 10.1613 14.8656 10.4815L14.7255 11.3319L16.3108 12.687C16.0705 13.2403 15.7671 13.764 15.4067 14.2478L13.4374 13.5501L12.771 14.0972C12.2639 14.5129 11.6994 14.8395 11.0882 15.0685L10.2797 15.3718L9.89979 17.4288C9.30043 17.4967 8.69532 17.4967 8.09597 17.4288L7.71611 15.3675L6.91394 15.06C6.30913 14.831 5.74676 14.5044 5.24381 14.0909L4.57746 13.5416L2.59538 14.2457C2.23462 13.7601 1.93327 13.2362 1.69135 12.6849L3.29357 11.317L3.15563 10.4688C3.1047 10.1528 3.07711 9.82618 3.07711 9.50384C3.07711 9.17938 3.10257 8.85491 3.15563 8.53893L3.29357 7.69066L1.69135 6.32282C1.93115 5.76932 2.23462 5.24763 2.59538 4.76199L4.57746 5.46606L5.24381 4.9168C5.74676 4.50327 6.30913 4.17668 6.91394 3.94765L7.71823 3.64439L8.09809 1.58309C8.69441 1.51523 9.30347 1.51523 9.90191 1.58309L10.2818 3.64015L11.0903 3.94341C11.6994 4.17244 12.266 4.49903 12.7732 4.91468L13.4395 5.46182L15.4089 4.76411C15.7696 5.24975 16.071 5.77356 16.3129 6.32494L14.7277 7.68005L14.8656 8.52621ZM9.00212 5.55937C6.9394 5.55937 5.26716 7.23047 5.26716 9.29177C5.26716 11.3531 6.9394 13.0242 9.00212 13.0242C11.0648 13.0242 12.7371 11.3531 12.7371 9.29177C12.7371 7.23047 11.0648 5.55937 9.00212 5.55937ZM10.6829 10.9714C10.4624 11.1923 10.2004 11.3675 9.91199 11.4868C9.62354 11.6062 9.31433 11.6674 9.00212 11.6669C8.3676 11.6669 7.77128 11.4188 7.32139 10.9714C7.10031 10.7511 6.925 10.4893 6.80554 10.201C6.68609 9.91277 6.62484 9.60376 6.62533 9.29177C6.62533 8.65769 6.87362 8.06178 7.32139 7.61219C7.77128 7.16261 8.3676 6.91661 9.00212 6.91661C9.63664 6.91661 10.233 7.16261 10.6829 7.61219C10.9039 7.83248 11.0792 8.09428 11.1987 8.38253C11.3182 8.67078 11.3794 8.97978 11.3789 9.29177C11.3789 9.92586 11.1306 10.5218 10.6829 10.9714Z" fill="currentColor" />
                </svg>
                <span>Settings</span>
              </a>
            </li>
            <li>
              <a href="#">
                <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 2.375C0 1.064 1.08559 0 2.4232 0H5.88491C6.16035 4.02261e-09 6.4245 0.107238 6.61925 0.298123C6.81401 0.489009 6.92343 0.747905 6.92343 1.01786C6.92343 1.28781 6.81401 1.54671 6.61925 1.73759C6.4245 1.92848 6.16035 2.03571 5.88491 2.03571H2.4232C2.33139 2.03571 2.24334 2.07146 2.17842 2.13509C2.1135 2.19872 2.07703 2.28502 2.07703 2.375V16.625C2.07703 16.8123 2.23211 16.9643 2.4232 16.9643H5.88491C6.16035 16.9643 6.4245 17.0715 6.61925 17.2624C6.81401 17.4533 6.92343 17.7122 6.92343 17.9821C6.92343 18.2521 6.81401 18.511 6.61925 18.7019C6.4245 18.8928 6.16035 19 5.88491 19H2.4232C1.78053 19 1.16418 18.7498 0.709739 18.3044C0.255301 17.859 0 17.2549 0 16.625V2.375ZM14.4561 8.48214L11.7283 5.80857C11.5916 5.68416 11.4917 5.52591 11.439 5.3505C11.3864 5.1751 11.383 4.98902 11.4292 4.81188C11.4754 4.63474 11.5695 4.47309 11.7016 4.34398C11.8337 4.21486 11.9988 4.12305 12.1797 4.07821C12.3602 4.03301 12.5499 4.03625 12.7287 4.08758C12.9075 4.13892 13.0689 4.23647 13.1961 4.37L17.6963 8.78071C17.8908 8.97156 18 9.23027 18 9.5C18 9.76973 17.8908 10.0284 17.6963 10.2193L13.1961 14.63C13.0691 14.764 12.9077 14.8619 12.7287 14.9135C12.5497 14.9651 12.3599 14.9684 12.1791 14.9231C11.9984 14.8779 11.8335 14.7856 11.7017 14.6562C11.57 14.5267 11.4763 14.3648 11.4306 14.1876C11.3845 14.0106 11.3878 13.8248 11.4401 13.6495C11.4925 13.4742 11.592 13.316 11.7283 13.1914L14.4561 10.5179H6.57726C6.30183 10.5179 6.03768 10.4106 5.84292 10.2197C5.64816 10.0288 5.53874 9.76995 5.53874 9.5C5.53874 9.23005 5.64816 8.97115 5.84292 8.78027C6.03768 8.58938 6.30183 8.48214 6.57726 8.48214H14.4561Z" fill="currentColor" />
                </svg>
                <span>Sign Out</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="oy-dashboard__content" style="background-image: url('{{ asset('/assets-v2/img/banners/dashboard-banner.jpg') }}');">

          <!-- Header -->
          <div class="d-flex mb-5 align-items-center justify-content-between gap-10">
            <h3 class="text-b1-semibold d-flex align-items-center gap-3 text-light">
              <span class="oy-dashboard__toggler">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6.75 1.25V18.25M0.75 7.15C0.75 4.91 0.75 3.79 1.186 2.934C1.56949 2.18139 2.18139 1.56949 2.934 1.186C3.79 0.75 4.91 0.75 7.15 0.75H12.35C14.59 0.75 15.71 0.75 16.566 1.186C17.3186 1.56949 17.9305 2.18139 18.314 2.934C18.75 3.79 18.75 4.91 18.75 7.15V12.35C18.75 14.59 18.75 15.71 18.314 16.566C17.9305 17.3186 17.3186 17.9305 16.566 18.314C15.71 18.75 14.59 18.75 12.35 18.75H7.15C4.91 18.75 3.79 18.75 2.934 18.314C2.18139 17.9305 1.56949 17.3186 1.186 16.566C0.75 15.71 0.75 14.59 0.75 12.35V7.15Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </span>
              Profile
            </h3>

            <a href="#" class="btn text-b5-medium py-3 btn--gradient-primary">
              <div class="btn__text">Bookings</div>
            </a>
          </div>

          <div class="card p-4 p-lg-5 rounded-5">
            <h2 class="text-h5 text-dark mb-3">Bookings</h2>
            <p class="text-secondary text-b4-regular">You currently do not have any upcoming bookings.</p>

            <div class="mt-4">
              <a href="#" class="btn btn--gradient-primary">
                <div class="btn__text">View All Bookings</div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ==================== Section: Dashboard ==================== -->


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