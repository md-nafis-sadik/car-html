@extends('layouts.frontend')
@section('head-info')
    <title>Log In - {{ config('app.name') }} Glasgow</title>
    <meta name="description" content="Login at {{ config('app.name') }} website." />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('/images/homepage-header.jpeg') }}" />
    <meta property="og:title" content="Log In - {{ config('app.name') }} Glasgow" />
    <meta property="og:description" content="Login at {{ config('app.name') }} website." />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />

    <link href="{{ asset('css/chassis/chassis.css') }}" rel="stylesheet" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" />

    <script src="{{ asset('js/chassis/chassis.js') }}"></script>
@endsection
@section('body')
    <body>
    @include('partials.header')
    <header class="subnav ch-bg--white" role="sub-header">
        <div class="ch-container">
            <div class="ch-row">
                <div class="subnav__content ch-display--flex">
                    <div class="subnav__header">
                        <div class="subnav__brand">
                            <h1>Login</h1>
                        </div>
                        <div class="subnav__toggle ch-display--flex md:ch-display--none">
                            <a href="#" class="subnav__button ch-btn ch-btn--sm">Actions</a>
                        </div>
                    </div>
                    <div class="subnav__links ch-display--none md:ch-display--block">
                        <ul class="md:ch-display--flex ch-bt--1 ch-bb--1 ch-bc--grey-3 md:ch-ba--0">

                            <li class="md:ch-mh--2 ch-ph--2 ch-bb--1 ch-bc--grey-2 md:ch-bb--0">
                                <a href="{{ route('login') }}" title="Log in" class="navlink ch-fs--3 ch-text-decoration--none ch-color--ac-black">Log in</a>
                            </li>
                            <li class="md:ch-mh--2 ch-ph--2 ch-bb--1 ch-bc--grey-2 md:ch-bb--0">
                                <a href="{{ route('register') }}" id="registerBtn" title="Register" class="navlink ch-fs--3 ch-text-decoration--none ch-color--ac-black">Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <a class="ch-skip" href="#main">Skip to main content</a>
    <main id="main">
        <div id="main-section" class="ch-bg--white">
            <div id="careers-register" class="ch-pb--10">
                <section>
                    <div class="ch-container">
                        <div class="ch-row sl:ch-ph--1">
                            <div class="sm:ch-col--6 sm:ch-col--offset-3 md:ch-col--8 md:ch-col--offset-0">
                                <h2 class="ch-mt--1 ch-mb--3 ch-fs--4 md:ch-mt--6 md:ch-fs--6 sm:ch-mt--5">Please log in</h2>
                                <div class="ch-display--block ch-mb--2 md:ch-col--5 sm:ch-pl--0 ch-pa--0">
                                    <form method="POST" action="{{ route('login') }}{{ '?'.http_build_query(request()->all()) }}" class="init">
                                        @csrf
                                        <div class="ch-form__group @error('email') ch-form__group--error @enderror">
                                        <label class="ch-form__control-label ch-mt--2 ch-text--bold" for="email">{{ __('E-Mail Address') }}</label>
                                        <input type="email" class="ch-form__control" value="{{ old('email') }}" data-cy="emailInput" data-val="true" data-val-email="A valid email address must be provided" data-val-maxlength="The field Email must be a string or array type with a maximum length of '100'." data-val-maxlength-max="100" data-val-required="A valid email address must be provided" id="email" maxlength="100" name="email" required autocomplete="email">
                                    </div>

                                        <div class="ch-form__group @error('password') ch-form__group--error @enderror">
                                        <label class="ch-form__control-label ch-mt--2 ch-text--bold" for="password">Password</label>
                                        @error('password')<span class="ch-form__control-validation">{{ $message }}</span>@enderror
                                        <input type="password" class="ch-form__control" name="password" required autocomplete="current-password" data-val="true" data-val-required="A valid contact number must be provided" id="password" >
                                    </div>

                                        @error('email')<span class="ch-form__control-validation">{{ $message }}</span>@enderror


                                        <div class="ch-form__group">
                                        <input
                                                class="ch-checkbox"
                                                name="remember" id="remember"
                                                type="checkbox" {{ old('remember') ? 'checked' : '' }}
                                        />
                                        <label for="remember" class="ch-checkbox__label">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>

                                    <input type="submit" class="ch-btn ch-btn--success ch-mt--3 ch-width--12"  value="Login"/>

                                    @if($errors->any())
                                        <div class="ch-alert ch-alert--danger ch-mt--3">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li class="ch-text--bold ch-mb--0">{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    @if (Route::has('password.request'))
                                        <div class="ch-display--block ch-mt--4">
                                            <a  href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        </div>
                                    @endif
                                    @if (Route::has('register'))
                                        <div class="ch-display--block ch-mt--2">
                                            <a  href="{{ route('register') }}">
                                                {{ __('Don\'t have an account? Register') }}
                                            </a>
                                        </div>
                                    @endif
                                    </form>

                                </div>


                            </div>
                        </div>


                    </div>
                </section>
            </div>


        </div>
    </main>

    @include('partials.footer')
    </body>
@endsection
