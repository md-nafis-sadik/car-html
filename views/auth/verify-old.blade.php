@extends('layouts.auth')
@section('head-info')
    <title>Verify Account - {{ config('app.name') }}</title>
    <meta name="description" content="Verify your account account on the {{ config('app.name') }} website." />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('/images/homepage-header.jpeg') }}" />
    <meta property="og:title" content="Verify Account - {{ config('app.name') }}" />
    <meta property="og:description" content="Verify your account account on the {{ config('app.name') }} website." />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection
@section('main')
    <div class="flex flex-col items-center justify-center">
        <h1 class="text-white text-center text-4xl sm:text-[72px] font-black font-epilogue -tracking-[1.5px] mb-[50px]">
            E-mail Verification
        </h1>


        <div class="bg-[#d9d9d9] backdrop-blur bg-opacity-15 rounded-[14px] p-6 sm:px-8 sm:py-[34px] flex flex-col gap-6 max-w-[400px] w-full">
            <p class="font-semibold text-white">{{ __('Before proceeding, please check your email for a verification link. Give it a few minutes and don\'t forget to check the SPAM folder.') }}</p>
            <p class="font-base text-white">{{ __('If you did not receive the email') }}:</p>
            <form method="POST" action="{{ route('verification.resend') }}" class="init">
                @csrf
                <input type="submit" class="w-full btn btn-primary" value="{{ __('Click here to request another') }}"/>
            </form>


            @if (session('resent'))
                <div class="text-primary mt-4" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif

        </div>

    </div>
@endsection
