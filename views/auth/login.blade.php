@extends('layouts.auth')
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
    <div class="flex flex-col items-center justify-center">
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
    </div>
@endsection
