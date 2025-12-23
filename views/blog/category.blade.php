@extends('layouts.app')

@section('head-info')
    <title>{{ $category->seo_title }}</title>
    <meta name="description" content="{{ $category->seo_description }}" />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $category->seo_title }}" />
    <meta property="og:description" content="{{ $category->seo_description }}" />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection

@section('main')
    <header class="page-header">
        <img src="{{ asset("images/manufacturer-heros/bmw.jpeg") }}" class="w-full h-full" alt="">

        @component('components.header-content', ['name' => "$category->name"])
            @slot('caption')
                @php
                    $words = explode(' ', $category->seo_description);
                    $wordCount = 0;
                    foreach ($words as $word) {
                        echo $word . ' ';
                        $wordCount++;
                        if ($wordCount % 8 == 0) {
                            echo '<br class="desktop">';
                        }
                    }
                @endphp
            @endslot
        @endcomponent
    </header>

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
