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
    @php
        // Fetch related posts from the same category
        $relatedPosts = App\BlogPost::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->where('status', 'published')
            ->latest()
            ->take(4)
            ->get();
        
        // If not enough posts in category, fill with latest posts
        if ($relatedPosts->count() < 4) {
            $additionalPosts = App\BlogPost::where('id', '!=', $post->id)
                ->whereNotIn('id', $relatedPosts->pluck('id'))
                ->where('status', 'published')
                ->latest()
                ->take(4 - $relatedPosts->count())
                ->get();
            
            $relatedPosts = $relatedPosts->merge($additionalPosts);
        }

        // Format the post content with special H3 styling
        $formattedContent = \Illuminate\Support\Str::markdown($post->body);
        
        // Convert H3 followed by P into styled cards
        $formattedContent = preg_replace(
            '/<h3>(.*?)<\/h3>\s*(<p>.*?<\/p>)/s',
            '<div class="card border-none shadow-none rounded-4 p-4">' .
            '<h3 class="text-b2-medium mb-2">$1</h3>$2' .
            '</div>',
            $formattedContent
        );
        
        // Wrap consecutive card divs in a container
        $formattedContent = preg_replace(
            '/((?:<div class="card border-none shadow-none rounded-4 p-4">(?:(?!<\/div>\s*<div class="card border-none).)*?<\/div>\s*){2,})/s',
            '<div class="space-y-4 mb-4">$1</div>',
            $formattedContent
        );
        
        // Apply any additional formatting from BlogPost model
        $formattedContent = App\BlogPost::formatPost($formattedContent);
        
    @endphp

    <!-- Section: Hero Banner -->
    <section class="py-5">
        <div class="container-fluid px-3 px-lg-5">
            <div class="oy-banner bg-dark" style="background-image: url('{{ $post->image->getUrl() }}');">
                <div class="row oy-banner__row g-4 g-xl-5 align-items-center justify-content-between">
                    <div class="col-lg-6 col-xl-7">
                        <div class="space-y-3">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b4-regular text-uppercase">
                                {{ $post->created_at->format('d M Y') }}
                            </span>
                            <h2 class="text-light text-h1 mb-5">{{ $post->title }}</h2>
                            <p class="text-light text-opacity-50 text-b2-regular mb-3">{{ $post->excerpt }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="space-y-4 d-md-none">
                            <img class="rounded-4 img-fluid w-100" src="{{ $post->image->getUrl() }}" alt="{{ $post->title }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section: Hero Banner -->

    <!-- Section: Content -->
    <section class="section-padding-y">
        <div class="container">
            <div class="row g-4 g-lg-5">
                <div class="col-lg-7 col-xl-8">
                    <div class="card p-4 p-lg-5 rounded-4 bg-light oy-content">
                        {!! $formattedContent !!}
                    </div>
                </div>
                
                <div class="col-lg-5 col-xl-4">
                    <div class="card p-30 border-none shadow-none bg-white">
                        <h3 class="text-h5 mb-4">Latest Learning Hub</h3>

                        <ul class="list__related-post">
                            @foreach($relatedPosts as $relatedPost)
                            <!-- Post Item -->
                            <li>
                                <a class="post__item" href="{{ url('learn/' . $relatedPost->slug) }}">
                                    <div class="post__item-thumbnail">
                                        <img src="{{ $relatedPost->image->getUrl() }}" alt="{{ $relatedPost->title }}">
                                    </div>
                                    <div class="post__item-content">
                                        <div class="post__item-date text-b5-regular text-secondary text-opacity-75 mb-2">
                                            {{ $relatedPost->created_at->format('d M Y') }}
                                        </div>
                                        <h6 class="post__item-title text-h6 mb-2">{{ $relatedPost->title }}</h6>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



{{-- @extends('layouts.app')

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
    @endcomponent --}}
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

    {{-- <section id="carList" class="pt-[60px] pb-[100px] max-w-screen-xl mx-auto px-4 lg:px-20">
        <div class="grid gap-4 sm:gap-x-6 sm:gap-y-8 w-full">
            <div class="p-5 rounded bg-gray-100">
                {!!  App\BlogPost::formatPost(\Illuminate\Support\Str::markdown($post->body)) !!}
            </div>
        </div>

    </section>
@endsection --}}
