<nav class="ch-pull--right ac-touchnav js-off--hide" data-nav-id="acTouchNav" role="navigation">
    <a href="#" class="ac-touchnav__button" data-nav-id="button" aria-expanded="false">
        <span class="ac-touchnav__button-line"></span><span data-nav-id="button-text">Menu</span></a>
    <ul class="ac-touchnav__menu" data-nav-id="home">
        <li>
            <a href="{{ route('home') }}" class="ac-nav__link ac-touchnav__link">Home</a>
        </li>
        <li>
            <a href="{{ route('about') }}" class="ac-nav__link ac-touchnav__link ac-touchnav__link">About</a>
        </li><li>
            <a href="{{ route('hire') }}" class="ac-nav__link ac-touchnav__link">Car Hire</a>
        </li>
        {{-- <li>
            <span class="ac-nav__link ac-touchnav__link ac-touchnav__link--follow" tabindex="0" data-goto="garage-links">Repair Center</span>
        </li>

        <li>
            <span class="ac-nav__link ac-touchnav__link ac-touchnav__link--follow" tabindex="0" data-goto="tracker-links">Trackers</span>
        </li>

        <li>
            <span class="ac-nav__link ac-touchnav__link ac-touchnav__link--follow" tabindex="0" data-goto="tyre-links">Tyres</span>
        </li> --}}

        <li>
            <a href="{{ route('blog') }}" class="ac-nav__link ac-touchnav__link">Learn</a>
        </li>

        <li>
            <a href="{{ route('testimonials') }}" class="ac-nav__link ac-touchnav__link">Testimonials</a>
        </li>
        <li>
            <a href="{{ route('account') }}" class="ac-nav__link ac-touchnav__link">Account</a>
        </li>
    </ul>
    {{-- <ul class="ac-touchnav__menu" data-nav-id="garage-links" style="display: none;">
        <li>
            <span class="ac-nav__link ac-touchnav__link ac-touchnav__link--follow ac-touchnav__link--back" tabindex="0" data-goto="home">Garage</span>
        </li>
        <li>
            <a href="{{ route('mot') }}" class="ac-nav__link ac-touchnav__link">MOT</a>
        </li>
        <li>
            <a href="{{ route('servicing') }}" class="ac-nav__link ac-touchnav__link">Servicing</a>
        </li>
        <li>
            <a href="{{ route('wheel-alignment') }}" class="ac-nav__link ac-touchnav__link">Wheel Alignment</a>
        </li>
        <li>
            <a href="{{ route('alloy-refurbishment') }}" class="ac-nav__link ac-touchnav__link">Alloy Refurbishment</a>
        </li>
        <li>
            <a href="{{ route('vehicle-repairs') }}" class="ac-nav__link ac-touchnav__link">Vehicle Repairs</a>
        </li>
        <li>
            <a class="ac-nav__link ac-touchnav__link" href="{{ route('book') }}">
                Book Now
            </a>
        </li>
    </ul>

    <ul class="ac-touchnav__menu" data-nav-id="tracker-links" style="display: none;">
        <li>
            <span class="ac-nav__link ac-touchnav__link ac-touchnav__link--follow ac-touchnav__link--back" tabindex="0" data-goto="home">Trackers</span>
        </li>
        <li>
            <a class="ac-nav__link ac-touchnav__link" href="{{ route('trackers.vehicle-tracking-platform') }}">
                Vehicle Tracking Platform
            </a>
        </li>
        <li>
            <a class="ac-nav__link ac-touchnav__link"  href="{{ route('trackers.personal-vehicle-tracking') }}">Personal Vehicle Tracking</a>
        </li>
        <li>
            <a class="ac-nav__link ac-touchnav__link"  href="{{ route('trackers.fleet-trackers') }}">Fleet Trackers</a>
        </li>
        <li>
            <a class="ac-nav__link ac-touchnav__link" href="{{ route('trackers.vehicle-immobilisers') }}">Vehicle Immobilisers </a>
        </li>
        <li>
            <a class="ac-nav__link ac-touchnav__link" href="{{ route('book') }}">
                Book Now
            </a>
        </li>
    </ul>

    <ul class="ac-touchnav__menu" data-nav-id="tyre-links" style="display: none;">
        <li>
            <span class="ac-nav__link ac-touchnav__link ac-touchnav__link--follow ac-touchnav__link--back" tabindex="0" data-goto="home">Tyres</span>
        </li>
        <li>
            <a class="ac-nav__link ac-touchnav__link" href="{{ route('tyres.tyre-prices') }}">Tyre Prices</a>
        </li>
        <li>
            <a class="ac-nav__link ac-touchnav__link" href="{{ route('tyres.tyre-safety') }}">Tyre Safety</a>
        </li>
        <li>
            <a class="ac-nav__link ac-touchnav__link" href="{{ route('tyres.budget-tyres') }}">Budget Tyres</a>
        </li>
        <li>
            <a class="ac-nav__link ac-touchnav__link" href="{{ route('tyres.winter-tyres') }}">Winter Tyres</a>
        </li>
    </ul> --}}

</nav>

<noscript>
    <nav class="ch-pull--right ac-touchnav" role="navigation">
        <a href="/fallback-nav" class="ac-touchnav__button" aria-expanded="false">
            <span class="ac-touchnav__button-line"></span><span data-nav-id="button-text">Menu</span>
        </a>
    </nav>
</noscript>

{{--<a id="close_mobile_menu" href="javascript:;"></a>--}}
{{--<div class="mobile_menu_wrapper">--}}
{{--    <a id="mobile_menu_close" href="javascript:;" class="button"><span class="ti-close"></span></a>--}}
{{--    <div class="mobile_menu_content">--}}
{{--        <div class="menu-main-menu-container">--}}
{{--            <ul id="mobile_main_menu" class="mobile_main_nav">--}}
{{--                <li class="menu-item {{ (request()->is('home') || request()->is('/')) ? 'current-menu-item' : '' }}"><a href="/">Home</a> </li>--}}
{{--                <li class="menu-item {{ (request()->is('about') || request()->is('/about')) ? 'current-menu-item' : '' }}"><a href="/about">About</a> </li>--}}
{{--                <li class="menu-item {{ (request()->is('book')) ? 'current-menu-item' : '' }}"><a href="/book">Book</a>--}}
{{--                <li class="menu-item {{ (request()->is('mot') || request()->is('servicing') || request()->is('wheel-alignment')) ? 'current-menu-item' : '' }} menu-item-type-custom menu-item-object-custom menu-item-has-children arrow menu-item-9">--}}
{{--                    <a href="#">Services</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li class="menu-item menu-item-type-post_type menu-item-object-car menu-item-134"><a href="{{ route('mot') }}">MOT</a></li>--}}
{{--                        <li class="menu-item menu-item-type-post_type menu-item-object-car menu-item-134"><a href="{{ route('servicing') }}">Servicing</a></li>--}}
{{--                        <li class="menu-item menu-item-type-post_type menu-item-object-car menu-item-134"><a href="{{ route('wheel-alignment') }}">Wheel Alignment</a></li>--}}
{{--                        <li class="menu-item menu-item-type-post_type menu-item-object-car menu-item-134"><a href="{{ route('alloy-refurbishment') }}">Alloy Refurbishment</a>--}}
{{--                        <li class="menu-item menu-item-type-post_type menu-item-object-car menu-item-134"><a href="{{ route('vehicle-repairs') }}">Vehicle Repairs</a>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children arrow menu-item-9 {{ (request()->is('vehicle-tracking-platform') || request()->is('servicing') || request()->is('wheel-alignment')) ? 'current-menu-item' : '' }} ">--}}
{{--                    <a href="#">Trackers</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li class="menu-item menu-item-type-post_type menu-item-object-car menu-item-134"><a href="{{ route('trackers.vehicle-tracking-platform') }}">Vehicle Tracking Platform</a></li>--}}
{{--                        <li class="menu-item menu-item-type-post_type menu-item-object-car menu-item-134"><a href="{{ route('trackers.personal-vehicle-tracking') }}">Personal Vehicle Tracking</a></li>--}}
{{--                        <li class="menu-item menu-item-type-post_type menu-item-object-car menu-item-134"><a href="{{ route('trackers.fleet-trackers') }}">Fleet Trackers</a></li>--}}
{{--                        <li class="menu-item menu-item-type-post_type menu-item-object-car menu-item-134"><a href="{{ route('trackers.vehicle-immobilisers') }}">Vehicle Immobilisers</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children arrow menu-item-9 {{ (request()->is('trackers/vehicle-tracking-platform') || request()->is('tyres/tyre-prices') || request()->is('tyres/tyre-safety') || request()->is('tyres/budget-tyres') || request()->is('tyres/winter-tyres')) ? 'current-menu-item' : '' }} ">--}}
{{--                    <a href="#">Tyres</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li class="menu-item menu-item-type-post_type menu-item-object-car menu-item-134"><a href="{{ route('tyres.tyre-prices') }}">Tyre Prices</a></li>--}}
{{--                        <li class="menu-item menu-item-type-post_type menu-item-object-car menu-item-134"><a href="{{ route('tyres.tyre-safety') }}">Tyre Safety</a></li>--}}
{{--                        <li class="menu-item menu-item-type-post_type menu-item-object-car menu-item-134"><a href="{{ route('tyres.budget-tyres') }}">Budget Tyres</a></li>--}}
{{--                        <li class="menu-item menu-item-type-post_type menu-item-object-car menu-item-134"><a href="{{ route('tyres.winter-tyres') }}">Winter Tyres</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="menu-item {{ (request()->is('services')) ? 'current-menu-item' : '' }}"><a href="/services">Our Services</a></li>--}}
{{--                <li class="menu-item"><a href="/features-benefits">Features & Benefits</a></li>--}}
{{--                <li class="menu-item"><a href="/partners">Partners</a></li>--}}
{{--                <li class="menu-item {{ (request()->is('repairs')) ? 'current-menu-item' : '' }}"><a target="_blank" href="https://www.autofusionhire.co.uk">Car Hire</a>--}}
{{--                <li class="menu-item {{ (request()->is('testimonials')) ? 'current-menu-item' : '' }}"><a href="/testimonials">Testimonials</a>--}}
{{--                <li class="menu-item {{ (request()->is('contact')) ? 'current-menu-item' : '' }}"><a href="/contact">Contact Us</a>--}}


{{--                @guest--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                    </li>--}}
{{--                    @if (Route::has('register'))--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                @else--}}
{{--                    --}}{{--                                            <li class="nav-item dropdown">--}}
{{--                    --}}{{--                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                    --}}{{--                                                    {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                    --}}{{--                                                </a>--}}

{{--                    --}}{{--                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                    <li class="menu-item {{ (request()->is('account')) ? 'current-menu-item' : '' }}"><a href="/account">Account</a></li>--}}

{{--                    <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('logout') }}"--}}
{{--                           onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>--}}
{{--                    </li>--}}

{{--                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                        @csrf--}}
{{--                    </form>--}}
{{--                    --}}{{--                                                </div>--}}
{{--                    --}}{{--                                            </li>--}}
{{--                @endguest--}}
{{--                --}}{{--                                        <li class="menu-item"><a href="/login">Login</a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--        <!-- Begin side menu sidebar -->--}}
{{--        <div class="page_content_wrapper">--}}
{{--            <div class="sidebar_wrapper">--}}
{{--                <div class="sidebar">--}}
{{--                    <div class="content">--}}
{{--                        <ul class="sidebar_widget">--}}
{{--                            <li id="text-8" class="widget widget_text">--}}
{{--                                <h2 class="widgettitle">Get In Touch</h2>--}}
{{--                                <div class="textwidget"><span class="ti-mobile" style="margin-right:10px;"></span>0141 237 5050--}}
{{--                                    <br/>--}}
{{--                                    <span class="ti-alarm-clock" style="margin-right:10px;"></span>Mon - Sat: 8.30AM - 5.30PM--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- End side menu sidebar -->--}}
{{--        <div class="social_wrapper">--}}
{{--            <ul>--}}
{{--                <li class="facebook"><a target="_blank" href="https://www.facebook.com/AutofusionUK" rel="noopener"><i class="fa fa-facebook-official"></i></a></li>--}}
{{--                <li class="twitter"><a target="_blank" href="https://twitter.com/AutofusionUK" rel="noopener"><i class="fa fa-twitter"></i></a></li>--}}
{{--                <li class="youtube"><a target="_blank" title="Youtube" href="https://www.youtube.com/user/Ussy94yssU" rel="noopener"><i class="fa fa-youtube"></i></a></li>--}}
{{--                <li class="instagram"><a target="_blank" title="Instagram" href="https://www.instagram.com/autofusionrepairs/?hl=en" rel="noopener"><i class="fa fa-instagram"></i></a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
