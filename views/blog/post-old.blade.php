@extends('layouts.frontend')
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

    <link href="{{ asset('css/chassis/chassis.css') }}" rel="stylesheet" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" />

    <script src="{{ asset('js/chassis/chassis.js') }}"></script>
@endsection
@section('body')
    <body>
    @include('partials.header')

    <a class="ch-skip" href="#main">Skip to main content</a>
    <main id="main">
        <div id="main-section" class="ch-bg--white">
            <section class="hero ch-bg--ac-black ch-color--white" style="background:linear-gradient(rgba(0, 0, 0, 0.8 ), rgba(0, 0, 0, 0.8)), url({{ $post->image->getUrl() }}) center">
                <div class="ch-container">
                    <div class="ch-row">
                        <div class="sl:ch-col--8 sm:ch-col--6 md:ch-col--12">
                            <div class="md:ch-text--left xs:ch-text-center sl:ch-text--center">
                                <h1 class="ch-fs--5 md:ch-fs--6 sl:ch-text--center md:ch-text--left xs:ch-text--center">
                                {{ $post->title }}</h1>
                                <span class="ch-mt-1 text-base font-normal">Written on <time datetime="{{ Carbon\Carbon::parse($post->created_at)->toIso8601String() }}">{{ Carbon\Carbon::parse($post->created_at)->format('D, d M Y') }}</time>.</span>
{{--                                <span class="mt-5 text-base font-normal">Written on <time datetime="{{ Carbon\Carbon::parse($post->created_at)->toIso8601String() }}">{{ Carbon\Carbon::parse($post->created_at)->toFormattedDateString() }}</time>. Posted in <a href="{{ route('blog', $post->category->slug) }}" rel="category">{{ $post->category->name }}</a>.</span>--}}
                                <p class="ch-fs--3 ch-mt--5 ch-measure ch-text--left">{{ $post->excerpt }}</p>

                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="ch-full-bleed">
                <div class="ch-container">

{{--                    <div class="ch-card ch-card__content ch-mt--6">--}}
                        <ul class="ch-breadcrumb ch-mt--6">
                            <li class="ch-breadcrumb__item"><a href="{{ route('blog') }}">Learn</a></li>
                            <li class="ch-breadcrumb__item"><a href="{{ route('blog.category', $category->slug) }}">{{ $category->name }}</a></li>
                            <li class="ch-breadcrumb__item">{{ $post->title }}</li>
                        </ul>
{{--                    </div>--}}

                    <div class="ch-row ch-mt--5 ch-mb--10 ch-text--center">
                        <div class="ch-card ch-card__content ch-text--left">
                            <div class="bg-gray-100 w-full">
                                {!!  App\BlogPost::formatPost(\Illuminate\Support\Str::markdown($post->body)) !!}
                            </div>
                        </div>
                    </div>
                </div>

            </section>


        </div>
    </main>

    @include('partials.footer')

    <script type='text/javascript' src='/js/jquery.js'></script>
    <script type='text/javascript' src='/js/jquery-migrate.min.js'></script>
    </body>
@endsection
