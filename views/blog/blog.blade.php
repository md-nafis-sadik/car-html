@extends('layouts.app')

@section('head-info')
    <title>How A Car Works? | Learn with {{ config('app.name') }}</title>
    <meta name="description" content="Autofusion offers a comprehensive range of car repair services, car hire options, and exceptional customer support. Our expert technicians are equipped to handle any car-related issue, from routine maintenance to major repairs. We take pride in providing top-notch service that exceeds our customers' expectations." />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="How A Car Works? | Learn with {{ config('app.name') }}" />
    <meta property="og:description" content="Autofusion offers a comprehensive range of car repair services, car hire options, and exceptional customer support. Our expert technicians are equipped to handle any car-related issue, from routine maintenance to major repairs. We take pride in providing top-notch service that exceeds our customers' expectations." />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection

@section('main')
    @component('components.hero-section', ['name' => 'Learn', 'image' => asset("images/manufacturer-heros/bmw.jpeg")])
        @slot('caption')
            Our team is dedicated to keeping you informed on all aspects of cars, <br class="desktop"> whether it's the latest
            news in the automotive industry, tips for <br class="desktop"> maintaining your vehicle or just general advice on how
            to save money <br class="desktop"> on future bills. At Autofusion, we’ve got you covered.
        @endslot
    @endcomponent

    <section id="carList" class="pt-[60px] pb-[100px] max-w-screen-xl mx-auto px-4 lg:px-20">
        <div class="grid grid-cols-2 gap-4 lg:grid-cols-3 sm:gap-x-6 sm:gap-y-8">
            @foreach ($posts as $post)
                @include('components.blog-card', [
                    'title' => $post->title,
                    'thumbnail' => $post->image->getUrl('thumb'),
                    'date' => Carbon\Carbon::parse($post->created_at)->format('D, d M Y'),
                    'body' => substr(wordwrap(strip_tags($post->excerpt), 145, "...\n", true), 0, strpos(wordwrap(strip_tags($post->excerpt), 145, "...\n", true), "\n")),
                    'index' => $loop->index,
                    'route' => $post->link(),
                ])
            @endforeach
        </div>

        {{-- Pagination --}}
        {{ $posts->links() }}
        {{--        @include('components.pagination.underlined', ['paginator' => $posts])--}}
    </section>
@endsection
