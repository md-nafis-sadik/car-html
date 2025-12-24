@extends('layouts.app-v2')

@section('head-info')
    <title>{{ $post->seo_title }} - {{ config('app.name') }}</title>
    <meta name="description" content="{{ $post->seo_description }}" />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $post->seo_title }} - Autofusion" />
    <meta property="og:description" content="{{ $post->seo_description }}" />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection

@section('main')
    @component('components.hero-section', ['name' => "$post->title", 'image' => $post->image->getUrl()])
        @slot('caption')
            @php
                $words = explode(' ', $post->excerpt);
                $wordCount = 0;
                foreach ($words as $word) {
                    echo $word . ' ';
                    $wordCount++;
                    if ($wordCount % 12 == 0) {
                        echo '<br class="desktop">';
                    }
                }
            @endphp
        @endslot
    @endcomponent
{{--    <header class="page-header">--}}
{{--        <img src="{{ asset("images/manufacturer-heros/bmw.jpeg") }}" class="w-full h-full" alt="">--}}

{{--        @component('components.header-content', ['name' => "$post->title"])--}}
{{--            @slot('caption')--}}
{{--                @php--}}
{{--                    $words = explode(' ', $post->excerpt);--}}
{{--                    $wordCount = 0;--}}
{{--                    foreach ($words as $word) {--}}
{{--                        echo $word . ' ';--}}
{{--                        $wordCount++;--}}
{{--                        if ($wordCount % 8 == 0) {--}}
{{--                            echo '<br class="desktop">';--}}
{{--                        }--}}
{{--                    }--}}
{{--                @endphp--}}
{{--            @endslot--}}
{{--        @endcomponent--}}
{{--    </header>--}}

    <section id="carList" class="pt-[60px] pb-[100px] max-w-screen-xl mx-auto px-4 lg:px-20">
        <div class="grid gap-4 sm:gap-x-6 sm:gap-y-8 w-full">
            <div class="p-5 rounded bg-gray-100">
                {!!  App\BlogPost::formatPost(\Illuminate\Support\Str::markdown($post->body)) !!}
            </div>
        </div>

    </section>
@endsection
