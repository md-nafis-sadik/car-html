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

    <section class="py-5">
        <div class="container-fluid px-3 px-lg-5">
            <div class="oy-banner bg-dark" style="background-image: url('../assets/img/banners/gradient-banner-desktop-8.jpg');">
                <div class="row oy-banner__row g-4 g-xl-5 align-items-center justify-content-between">
                    <div class="col-lg-6 col-xl-6">
                        <div class="space-y-3">
                            <span class="badge rounded-pill text-bg-primary bg-opacity-10 text-primary text-b4-regular text-uppercase">Learn</span>
                            <h2 class="text-light text-h1 mb-5">Learning Hub & Repair Guidance</h2>
                            <p class="text-light text-opacity-50 text-b2-regular mb-3">Our team is dedicated to keeping you informed on all aspects of cars, whether it's the latest news in the automotive industry, tips for maintaining your vehicle or just general advice on how to save money on future bills. At Autofusion, we’ve got you covered.</p>
                            <a class="btn d-none d-lg-inline-flex btn--gradient-primary" href="#" data-pulse-direction="left">
                                <span class="btn__text">View Models</span>
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="space-y-4 d-md-none">
                            <img class="rounded-4 img-fluid w-100" src="../assets/img/banners/gradient-banner-mobile-8.png" />
                            <a class="btn btn--gradient-primary" href="#" data-pulse-direction="left">
                                <span class="btn__text">View Models</span>
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    
    {{-- @component('components.hero-section', ['name' => 'Learn', 'image' => asset("images/manufacturer-heros/bmw.jpeg")])
        @slot('caption')
            Our team is dedicated to keeping you informed on all aspects of cars, <br class="desktop"> whether it's the latest
            news in the automotive industry, tips for <br class="desktop"> maintaining your vehicle or just general advice on how
            to save money <br class="desktop"> on future bills. At Autofusion, we’ve got you covered.
        @endslot
    @endcomponent --}}

    <section class="section-padding-y">
        <div class="container-fluid px-3 px-lg-5">
            <div class="bg-light px-2 py-4 p-lg-5 rounded-5 overflow-hidden">
                <div class="container">
                    <!-- ==================== Section: Learn More ==================== -->
                    @if($posts->count() > 0)
                        @php
                            $firstPost = $posts->first();
                        @endphp
                        
                        <div class="row mb-5 g-0 bg-white rounded-4 overflow-hidden align-items-center">
                            <div class="col-lg-6">
                                <img class="img-fluid w-100" src="{{ $firstPost->image->getUrl() }}" alt="{{ $firstPost->title }}">
                            </div>
                            <div class="col-lg-6">
                                <div class="space-y-4 px-4 ps-lg-5 py-4 py-lg-5">
                                    <div class="d-flex text-primary align-items-center gap-3">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.8337 4.16675H15.0003V2.50008C15.0003 2.27907 14.9125 2.06711 14.7562 1.91083C14.6 1.75455 14.388 1.66675 14.167 1.66675C13.946 1.66675 13.734 1.75455 13.5777 1.91083C13.4215 2.06711 13.3337 2.27907 13.3337 2.50008V4.16675H6.66699V2.50008C6.66699 2.27907 6.57919 2.06711 6.42291 1.91083C6.26663 1.75455 6.05467 1.66675 5.83366 1.66675C5.61264 1.66675 5.40068 1.75455 5.2444 1.91083C5.08812 2.06711 5.00032 2.27907 5.00032 2.50008V4.16675H4.16699C3.50395 4.16675 2.86807 4.43014 2.39923 4.89898C1.93038 5.36782 1.66699 6.00371 1.66699 6.66675V7.50008H18.3337V6.66675C18.3337 6.00371 18.0703 5.36782 17.6014 4.89898C17.1326 4.43014 16.4967 4.16675 15.8337 4.16675Z" fill="#0072FF"/>
                                            <path d="M1.66699 15.8334C1.66699 16.4965 1.93038 17.1323 2.39923 17.6012C2.86807 18.07 3.50395 18.3334 4.16699 18.3334H15.8337C16.4967 18.3334 17.1326 18.07 17.6014 17.6012C18.0703 17.1323 18.3337 16.4965 18.3337 15.8334V9.16675H1.66699V15.8334Z" fill="#0072FF"/>
                                        </svg>
                                        <span>{{ Carbon\Carbon::parse($firstPost->created_at)->format('d M Y') }}</span>
                                    </div>
                                    <h2 class="text-h5 fw-bold mb-3">{{ $firstPost->title }}</h2>
                                    <p class="text-b3-regular fw-normal text-secondary text-opacity-75 mb-4 mb-lg-5">
                                        @php
                                            $excerpt = wordwrap(strip_tags($firstPost->excerpt), 145, "...\n", true);
                                            $truncatedExcerpt = substr($excerpt, 0, strpos($excerpt, "\n"));
                                        @endphp
                                        {{ $truncatedExcerpt }}
                                    </p>
                                    <a href="{{ $firstPost->link() }}" class="link-dark text-decoration-underline fw-semibold">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Category List -->
                     <div class="row mb-5">
                        <div class="col-lg-12">
                            <h3 class="text-h5 fw-bold mb-4">Browse by Category</h3>
                            <ul class="list-unstyled list__category-filter" id="filter-container">
                                <li>
                                    <span class="filter-item active">All</span>
                                </li>
                                <li>
                                    <span class="filter-item">Luxury & Supercars</span>
                                </li>
                                <li>
                                    <span class="filter-item">Travel & Lifestyle</span>
                                </li>
                                <li>
                                    <span class="filter-item">Car Care & Maintenance</span>
                                </li>
                                <li>
                                    <span class="filter-item">Business & Corporate Hire</span>
                                </li>
                                <li>
                                    <span class="filter-item">Motoring News & Events</span>
                                </li>
                            </ul>
                        </div>
                     </div>

                     <div class="row g-4 g-lg-5">
            @foreach ($posts as $post)
                @include('components.blog-card', [
                    'title' => $post->title,
                    'thumbnail' => $post->image->getUrl('thumb'),
                    'date' => Carbon\Carbon::parse($post->created_at)->format('D, d M Y'),
                    'body' => substr(wordwrap(strip_tags($post->excerpt), 145, "...\n", true), 0, strpos(wordwrap(strip_tags($post->excerpt), 145, "...\n", true), "\n")),
                    'index' => $loop->index + 1,
                    'route' => $post->link(),
                ])
            @endforeach
        </div>

                     <div class="row">
                        <div class="col-lg-12">
                            <div class="pagination-primary mt-5 d-flex flex-wrap justify-content-center align-items-center gap-4">
                                <a href="#" class="btn--circle outlined" data-pulse-direction="right">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M15.0496 19.92L8.52965 13.4C7.75965 12.63 7.75965 11.37 8.52965 10.6L15.0496 4.08" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                </a>
                                <!-- Active -->
                                <span class="btn--circle text-b1-medium is-active">01</span>

                                <a href="#" class="btn--circle text-b1-medium">02</a>
                                <a href="#" class="btn--circle text-b1-medium">03</a>
                                <a href="#" class="btn--circle text-b1-medium outlined" data-pulse-direction="left">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M8.95035 19.92L15.4704 13.4C16.2404 12.63 16.2404 11.37 15.4704 10.6L8.95035 4.08" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                </a>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </section>

        {{-- Pagination --}}
        {{ $posts->links() }}
        {{--        @include('components.pagination.underlined', ['paginator' => $posts])--}}
    </section>
@endsection
