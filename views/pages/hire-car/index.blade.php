@extends('layouts.app')

@section('title', 'Book a car')

@section('main')
    <header class="page-header min-h-[900px]">
        <img src="{{ asset('assets/images/default-header.png') }}" class="w-full h-full" alt="">

        @component('components.header-content', ['name' => 'Book Your Favourite Car'])
            @slot('caption')
                View our fleet of performance, luxury and supercars available to hire
            @endslot
            <form action="" method="POST" class="mt-[30px] mb-16 flex flex-col sm:flex-wrap sm:flex-row gap-[7px]">
                @csrf
                <x-input-field type="date" name="date_range" class-name="w-full sm:w-[260px] appearance-none" />
                <x-input-field type="text" name="time" class-name="w-full sm:w-[87px]" />
                <select name="type" id="type" class="inputStyle w-full sm:w-[260px]">
                    <option value="" selected hidden>Any Type</option>
                    <option value="a">Luxury Car</option>
                    <option value="b">Sports Car</option>
                    <option value="c">Family Car</option>
                </select>
                <select name="type" id="type" class="inputStyle w-full sm:w-[260px]">
                    <option value="" selected hidden>Price Low to High</option>
                    <option value="a">Luxury Car</option>
                    <option value="b">Sports Car</option>
                    <option value="c">Family Car</option>
                </select>
                <button type="button" class="w-full ml-auto btn btn-primary sm:ml-0 lg:w-max">
                    Search
                </button>
            </form>
        @endcomponent
    </header>

    <section id="carList" class="pt-[60px] pb-[100px] max-w-screen-xl mx-auto px-4 lg:px-20">
        <div class="grid grid-cols-2 gap-4 lg:grid-cols-3 sm:gap-x-6 sm:gap-y-8">
            @foreach ($paginatedData as $car)
                @include('components.product-card', [
                    'name' => $car->name,
                    'thumbnail' => $car->thumbnail,
                    'type' => $car->type,
                    'price' => $car->price,
                    'index' => $loop->index,
                    'route' => route('hire.detail', ['slug' => Str::slug($car->name)]),
                ])
            @endforeach
        </div>

        {{-- Pagination --}}
        @include('components.pagination.squircle', ['paginator' => $paginatedData])
    </section>

    @include('components.why-choose-autofusion')
@endsection
