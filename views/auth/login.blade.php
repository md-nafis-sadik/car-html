@extends('layouts.auth-v2')
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
@endsection
@section('main')
    {{-- <div class="flex flex-col items-center justify-center">
        <h1 class="text-white text-center text-4xl sm:text-[72px] font-black font-epilogue -tracking-[1.5px] mb-[50px]">
            Please Log In
        </h1>
        <form action="" method="POST" class="bg-[#d9d9d9] backdrop-blur bg-opacity-15 rounded-[14px] p-6 sm:px-8 sm:py-[34px] flex flex-col gap-6 max-w-[400px] w-full">
            @csrf
            <div class="flex flex-col gap-[10px]">
                <label for="email_address" class="text-sm font-medium text-white sm:text-base">
                    Email Address
                </label>
                <x-input-field type="email" name="email_address" data-val-email="A valid email address must be provided" data-val-maxlength="The field Email must be a string or array type with a maximum length of '100'." data-val-maxlength-max="100" data-val-required="A valid email address must be provided" id="email" maxlength="100" name="email" required autocomplete="email" value="{{ old('email') }}" />
                @error('email')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
            </div>
            <div class="flex flex-col gap-[10px]">
                <label for="password__" class="text-sm font-medium text-white sm:text-base">
                    Password
                </label>
                <x-input-field type="password" name="password" placeholder="" />
                @error('password')
                <small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex items-center justify-between w-full">
                <button type="submit" class="btn btn-primary">
                    Sign In
                </button>
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-sm font-medium text-white sm:text-base">
                    Forgot Password?
                </a>
               @endif

            </div>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="text-sm font-medium text-white sm:text-base">
                    {{ __('Don\'t have an account? Register') }}
                </a>
            @endif
        </form>
    </div> --}}

    <section class="pt-5 oy-auth">
        <div class="container-fluid px-3 px-lg-4">
            <div class="oy-auth__banner" style="background-image: url('{{ asset('assets/img/banners/dashboard-banner.jpg') }}');">
                <div class="row oy-auth__row align-items-center justify-content-center">
                    <div class="col-md-6 col-xl-4">
                        <div class="oy-auth__header" style="background-image: url('{{ asset('assets/img/banners/auth-banner-mobile.png') }}');">
                            <h2 class="text-h4 text-center mb-5 text-white">Log in</h2>                                
                        </div>

                        
                        <div class="oy-auth__form">
                                <form method="POST" action="{{ route('login') }}{{ '?'.http_build_query(request()->all()) }}" class="card p-4 p-lg-5 space-y-4">
                                    @csrf
                                <div class="form-group">
                                    <label for="form-field__email" class="form-label text-b5-semibold text-secondary text-opacity-50 text-uppercase">Email Address</label>
                                    {{-- <input type="text" name="email" class="form-control" id="form-field__email" placeholder="Email Address"> --}}
                                    <input type="email" name="email" class="form-control" id="form-field__email" placeholder="Email Address" data-val-email="A valid email address must be provided" data-val-maxlength="The field Email must be a string or array type with a maximum length of '100'." data-val-maxlength-max="100" data-val-required="A valid email address must be provided" id="email" maxlength="100" required autocomplete="email" value="{{ old('email') }}" />
                                    @error('email')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                                </div>
                                <div class="form-group">
                                    <label for="form-field__password" class="form-label text-b5-semibold text-secondary text-opacity-50 text-uppercase">Password</label>
                                    {{-- <input type="password" name="password" class="form-control" id="form-field__password" placeholder="Password"> --}}
                                    <input type="password" name="password" class="form-control" id="form-field__password" placeholder="Password" />
                                    @error('password')
                                    <small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="d-flex justify-content-between align-items-center gap-3 mb-4">
                                    <div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember-me">
                                            <label class="form-check-label text-b4-regular" for="remember-me">Remember me</label>
                                        </div>
                                    </div>
                                    @if (Route::has('password.request'))
                                    <div>
                                        <a href="#" class="link-dark text-decoration-none text-b4-regular">Forget password?</a>
                                    </div>
                                    @endif
                                </div>
                                <button type="submit" class="btn w-100 btn--gradient-primary" style="--btn-before-size: 440px;">
                                    <span class="btn__text">Log in</span>
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                @if (Route::has('register'))
                                <div class="mt-3 text-secondary text-opacity-75 text-center">
                                    Don’t have an account yet? <a href="{{ route('register') }}" class="link-primary">Register</a>
                                </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
@endsection
