@extends('layouts.app')

@section('head-info')
    <title>Testimonials - {{ config('app.name') }} Glasgow</title>
    <meta name="description" content="Our customers have great things to say about us." />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('/images/homepage-header.jpeg') }}" />
    <meta property="og:title" content="Testimonials - {{ config('app.name') }} Glasgow" />
    <meta property="og:description" content="Our customers have great things to say about us." />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection

@section('main')
    <header class="page-header min-h-[800px]">
        <img src="{{ asset('assets/images/default-header.png') }}" class="w-full h-full" alt="">

        @component('components.header-content', ['name' => 'Testimonials'])
        @endcomponent
    </header>

    <section class="my-10">
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-793bd8a6-5fca-4b27-bbe1-7033adfb8dd0"></div>
    </section>
@endsection
