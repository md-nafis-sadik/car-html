<header class="ac-header" role="banner">
    <div class="ch-container">
        <div class="ch-row">
            <div class="xs:ch-col--8 md:ch-col--2">
                <a href="/" class="ac-brand ac-brand--header">
                    <span class="ch-reader">{{ config('app.name') }}</span>
                </a>
            </div>
            <div class="xs:ch-col--4 md:ch-col--10 ac-position--override">
                <ul class="ac-nav ch-display--none sm:ch-display--block">
                    <li class="ac-nav__list-item" tabindex="0">
                        <a class="ac-nav__link" href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    <li class="ac-nav__list-item" tabindex="0">
                        <a class="ac-nav__link" href="{{ route('about') }}">
                            About
                        </a>
                    </li>

                    <li class="ac-nav__list-item" >
                        <a class="ac-nav__link" href="{{ route('hire') }}">
                            Car Hire
                        </a>
                    </li>

                    {{-- <li class="ac-nav__list-item" tabindex="0">
                        <span class="ac-nav__link">Repair Centre</span>
                        <div class="ac-subnav ac-subnav--garage"> <!-- ac-subnav--find-a-car ac-subnav--other-->
                            <ul class="ac-subnav__list ch-row"> <!--  ac-subnav__list--top-->
                                <li class="ac-subnav__list-item">
                                    <a class="ac-subnav__link ch-width--12" href="{{ route('mot') }}">
                                        MOT
                                    </a>
                                </li>
                                <li class="ac-subnav__list-item">
                                    <a class="ac-subnav__link ch-width--12" href="{{ route('servicing') }}">
                                        Servicing
                                    </a>
                                </li>
                                <li class="ac-subnav__list-item">
                                    <a class="ac-subnav__link ch-width--12" href="{{ route('wheel-alignment') }}">
                                        Wheel Alignment
                                    </a>
                                </li>
                                <li class="ac-subnav__list-item">
                                    <a class="ac-subnav__link ch-width--12" href="{{ route('alloy-refurbishment') }}">
                                        Alloy Refurbishment
                                    </a>
                                </li>
                                <li class="ac-subnav__list-item">
                                    <a class="ac-subnav__link ch-width--12" href="{{ route('vehicle-repairs') }}">
                                        Vehicle Repairs
                                    </a>
                                </li>
                                <li class="ac-subnav__list-item">
                                    <a class="ac-subnav__link ch-width--12" href="{{ route('book') }}">
                                        Book Now
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="ac-nav__list-item" tabindex="0">
                        <span class="ac-nav__link">Trackers</span>
                        <div class="ac-subnav ac-subnav--trackers"> <!-- ac-subnav--find-a-car ac-subnav--other-->
                            <ul class="ac-subnav__list ch-row"> <!--  ac-subnav__list--top-->
                                <li class="ac-subnav__list-item">
                                    <a class="ac-subnav__link ch-width--12" href="{{ route('trackers.vehicle-tracking-platform') }}">
                                        Vehicle Tracking Platform
                                    </a>
                                </li>
                                <li class="ac-subnav__list-item">
                                    <a class="ac-subnav__link ch-width--12"  href="{{ route('trackers.personal-vehicle-tracking') }}">Personal Vehicle Tracking</a>
                                </li>
                                <li class="ac-subnav__list-item">
                                    <a class="ac-subnav__link ch-width--12"  href="{{ route('trackers.fleet-trackers') }}">Fleet Trackers</a>
                                </li>
                                <li class="ac-subnav__list-item">
                                    <a class="ac-subnav__link ch-width--12" href="{{ route('trackers.vehicle-immobilisers') }}">Vehicle Immobilisers </a>
                                </li>
                                <li class="ac-subnav__list-item">
                                    <a class="ac-subnav__link ch-width--12" href="{{ route('book') }}">
                                        Book Now
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="ac-nav__list-item" tabindex="0">
                        <span class="ac-nav__link">Tyres</span>
                        <div class="ac-subnav ac-subnav--tyres"> <!-- ac-subnav--find-a-car ac-subnav--other-->
                            <ul class="ac-subnav__list ch-row"> <!--  ac-subnav__list--top-->
                                <li class="ac-subnav__list-item">
                                    <a class="ac-subnav__link ch-width--12" href="{{ route('tyres.tyre-prices') }}">Tyre Prices</a>
                                </li>
                                <li class="ac-subnav__list-item">
                                    <a class="ac-subnav__link ch-width--12" href="{{ route('tyres.tyre-safety') }}">Tyre Safety</a>
                                </li>
                                <li class="ac-subnav__list-item">
                                    <a class="ac-subnav__link ch-width--12" href="{{ route('tyres.budget-tyres') }}">Budget Tyres</a>
                                </li>
                                <li class="ac-subnav__list-item">
                                    <a class="ac-subnav__link ch-width--12" href="{{ route('tyres.winter-tyres') }}">Winter Tyres</a>
                                </li>
                            </ul>
                        </div>
                    </li> --}}

                    <li class="ac-nav__list-item" tabindex="0">
                        <a class="ac-nav__link" href="{{ route('blog') }}">
                            Learn
                        </a>
                    </li>
                    <li class="ac-nav__list-item">
                        <a class="ac-nav__link" href="{{ route('account') }}">
                            Account
                        </a>
                    </li>
                    <li class="ch-display--none">
                            <select class="ac-touchnav__manufacturers"></select>
                    </li>
                </ul>

                <!-- Begin mobile menu -->
                @include('partials.mobile-menu')
                <!-- End mobile menu -->
            </div>
        </div>
    </div>
</header>
