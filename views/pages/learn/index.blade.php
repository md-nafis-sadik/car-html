@extends('layouts.app')

@section('title', 'Blog')

@section('main')
    @component('components.hero-section', ['name' => 'Learn', 'image' => asset('assets/images/default-header.png')])
        @slot('caption')
            Our team is dedicated to keeping you informed on all aspects of cars, <br class="desktop"> whether it's the latest
            news in the automotive industry, tips for <br class="desktop"> maintaining your vehicle or just general advice on how
            to save money <br class="desktop"> on future bills. At Autofusion, we’ve got you covered.
        @endslot
    @endcomponent

    <section id="carList" class="pt-[60px] pb-[100px] max-w-screen-xl mx-auto px-4 lg:px-20">
        <div class="grid grid-cols-2 gap-4 lg:grid-cols-3 sm:gap-x-6 sm:gap-y-8">
            @foreach ($paginatedBlogs as $blog)
                @include('components.blog-card', [
                    'title' => $blog->title,
                    'thumbnail' => $blog->thumbnail,
                    'date' => $blog->date,
                    'body' => $blog->body,
                    'index' => $loop->index,
                    'route' => $blog->route,
                ])
            @endforeach
        </div>

        {{-- Pagination --}}
        @include('components.pagination.underlined', ['paginator' => $paginatedBlogs])
    </section>
@endsection
