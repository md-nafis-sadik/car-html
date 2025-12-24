@php
    // Get active locations for the dropdown
    $activeLocations = \App\Location::where('is_active', true)
        ->orderBy('name')
        ->limit(5) // Limit to 5 locations to keep dropdown manageable
        ->get();
    
    $links = [
        (object)[
            'name' => 'home',
            'route' => route('home'),
            'dropdown' => [],
        ],
        (object)[
            'name' => 'about',
            'route' => route('about'),
            'dropdown' => [],
        ],
        // (object)[
        //     'name' => 'repair centre',
        //     'route' => route('vehicle-repairs'),
        //     'dropdown' => [
        //         (object) [
        //             'name' => 'MOT',
        //             'route' => route('mot'),
        //         ],
        //         (object) [
        //             'name' => 'Servicing',
        //             'route' => route('servicing'),
        //         ],
        //         (object) [
        //             'name' => 'Wheel Alignment',
        //             'route' => route('wheel-alignment'),
        //         ],
        //         (object) [
        //             'name' => 'Alloy Refurbishment',
        //             'route' => route('alloy-refurbishment'),
        //         ],
        //         (object) [
        //             'name' => 'Vehicle Repairs',
        //             'route' => route('vehicle-repairs'),
        //         ],
        //         (object) [
        //             'name' => 'Book Now',
        //             'route' => route('book'),
        //         ],
        //     ],
        // ],
        // (object)[
        //     'name' => 'trackers',
        //     'route' => '',
        //     'dropdown' => [
        //         (object) [
        //             'name' => 'Vehicle Tracking Platform',
        //             'route' => route('trackers.vehicle-tracking-platform'),
        //         ],
        //         (object) [
        //             'name' => 'Personal Vehicle Tracking',
        //             'route' => route('trackers.personal-vehicle-tracking'),
        //         ],
        //         (object) [
        //             'name' => 'Fleet Trackers',
        //             'route' => route('trackers.fleet-trackers'),
        //         ],
        //         (object) [
        //             'name' => 'Vehicle Immobilisers',
        //             'route' => route('trackers.vehicle-immobilisers'),
        //         ],
        //         (object) [
        //             'name' => 'Book Now',
        //             'route' => route('book'),
        //         ],
        //     ],
        // ],
        // (object)[
        //     'name' => 'tyres',
        //     'route' => '',
        //     'dropdown' => [
        //         (object) [
        //             'name' => 'Tyre Prices',
        //             'route' => route('tyres.tyre-prices'),
        //         ],
        //         (object) [
        //             'name' => 'Tyre Safety',
        //             'route' => route('tyres.tyre-safety'),
        //         ],
        //         (object) [
        //             'name' => 'Budget Tyres',
        //             'route' => route('tyres.budget-tyres'),
        //         ],
        //         (object) [
        //             'name' => 'Winter Tyres',
        //             'route' => route('tyres.winter-tyres'),
        //         ],
        //     ]
        // ],
        (object)[
            'name' => 'locations',
            'route' => route('locations.index'),
            'dropdown' => array_merge(
                [
                    (object) [
                        'name' => 'All Locations',
                        'route' => route('locations.index'),
                    ],
                ],
                $activeLocations->map(function($location) {
                    return (object) [
                        'name' => $location->name,
                        'route' => route('locations.show', $location->slug),
                    ];
                })->toArray()
            ),
        ],
        (object)[
            'name' => 'Our Cars',
            'route' => route('hire.cars'),
            'dropdown' => [],
        ],
        (object)[
            'name' => 'learn',
            'route' => route('blog'),
            'dropdown' => [],
        ],
        (object)[
            'name' => 'contact',
            'route' => route('contact'),
            'dropdown' => [],
        ],
    ];
@endphp
<section class="oy-header-top d-none d-md-block bg-dark text-light py-3">
        <div class="container" style="max-width: 920px;">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <div class="d-flex align-items-center gap-3 fw-medium">
                        <img src="../assets/img/header/satisfied-icon.svg" alt="icon">
                        <span>1000+ Satisfied Customers</span>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="d-flex align-items-center gap-3 fw-medium">
                        <img src="../assets/img/header/vehicles.svg" alt="icon">
                        <span>Over 200 Vehicles</span>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="d-flex align-items-center gap-3 fw-medium">
                        <img src="../assets/img/header/rent.svg" alt="icon">
                        <span>Rent with Confidence</span>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
{{-- <nav class="block w-full px-4 pt-4 pb-3 mx-auto bg-opacity-100 border-b-2 bg-dark border-b-white border-opacity-10 xl:px-10 2xl:px-16 lg:bg-opacity-0" data-aos="fade-down">
    <div class="flex flex-col justify-between w-full gap-4 lg:flex-row lg:items-center">
        <!-- Logo & Toggler Button here -->
        <div class="flex items-center justify-between">
            <!-- LOGO -->
            <a href="{{ url('/') }}">
                <img src="{{ asset('assets/img/header/logo.svg') }}" class="w-8/12 h-auto sm:w-full" alt="af-assets" />
            </a>
            <!-- RESPONSIVE NAVBAR BUTTON TOGGLER -->
            <div class="block lg:hidden">
                <button class="p-2 rounded-lg outline-none bg-slate-100" id="navbarToggler" data-target="#navigation">
                    <svg class="text-dark w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16">
                        </path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Nav Menu -->
        <div class="hidden w-full lg:block" id="navigation">
            <div class="flex flex-col items-baseline gap-4 mt-6 lg:justify-between lg:flex-row lg:items-center lg:mt-0">
                <div class="flex flex-col w-full gap-4 ml-auto lg:w-auto lg:gap-9 lg:items-center lg:flex-row ">
                    @foreach ($links as $link)
                        @if (sizeof($link->dropdown))
                            <div class="relative flex flex-col gap-2">
                                <button type="button" class="nav-link-item text-[#000]" id="dropdownNavbarLink-{{ Str::slug($link->name) }}" data-dropdown-autofusion="{{ Str::slug($link->name) }}">
                                    {{ $link->name }}
                                    <img src="{{ asset('assets/svgs/chevron-right.svg') }}" class="w-[10px] h-[10px] rotate-90" alt="">
                                </button>
                                @include('components.dropdown-menu', [
                                    'menus' => $link->dropdown,
                                    'id' => Str::slug($link->name)
                                ])
                            </div>
                        @else
                            <a href="{{ $link->route }}"
                               class="nav-link-item text-[#000] {{ $link->route == Request::url() ? 'active' : null }}">
                                {{ $link->name }}
                            </a>
                        @endif
                    @endforeach
                </div>
                <div class="flex flex-col w-full gap-3 ml-auto lg:w-auto lg:items-center lg:flex-row">
                    <a href="{{ route('hire') }}" class="border-4 border-transparent btn btn-sm btn-primary">
                        Car Hire
                    </a>
                    <a href="{{ route('account') }}" class="btn btn-sm btn-outline">
                        Account
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav> --}}
<script src="{{asset('assets-v2/js/components/header-sticky.js')}}"></script>
<header class="oy-header">
    <header-sticky data-sticky-start="350" data-sticky-offset="0">
        <nav class="navbar bg-white navbar-expand-lg py-3 py-lg-4">
            <div class="container-fluid">
                <!-- Logo -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/img/header/logo.svg') }}" alt="logo">
                </a>
                
                <!-- Mobile Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler__bar"></span>
                    <span class="navbar-toggler__bar"></span>
                    <span class="navbar-toggler__bar"></span>
                </button>
                
                <!-- Navigation Menu -->
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll">
                        @foreach ($links as $link)
                            @if (sizeof($link->dropdown))
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" 
                                       role="button" 
                                       data-bs-toggle="dropdown" 
                                       aria-expanded="false"
                                       id="dropdownNavbarLink-{{ Str::slug($link->name) }}">
                                        {{ $link->name }}
                                    </a>
                                    <ul class="dropdown-menu">
                                        @foreach ($link->dropdown as $dropdown)
                                            <li>
                                                <a class="dropdown-item" href="{{ $dropdown->route }}">
                                                    {{ $dropdown->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link {{ $link->route == Request::url() ? 'active' : '' }}" 
                                       href="{{ $link->route }}"
                                       aria-current="{{ $link->route == Request::url() ? 'page' : 'false' }}">
                                        {{ $link->name }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>

                    <!-- Action Buttons -->
                    <div class="d-flex align-items-center gap-5">
                        <a class="link link_btn" href="{{ route('account') }}">Login</a>
                        <a class="btn btn--gradient-primary" href="{{ route('hire') }}">
                            <span class="btn__text">Car Hire</span>
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header-sticky>
</header>

<script>
    // Mobile toggle
    const toggler = document.getElementById('navbarToggler');
    const navMenu = document.getElementById('navigation');

    toggler.addEventListener('click', () => {
        navMenu.classList.toggle('hidden');
    });
</script>




@push('js')
    <script src="{{ asset('scripts/NavbarToggler.js') }}"></script>
@endpush
