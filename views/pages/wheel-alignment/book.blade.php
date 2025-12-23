@extends('layouts.app')

@section('title', 'Book Service')

@php
    $param = str_replace('-', ' ', Route::current()->parameter('slug'));

    if (mb_strlen($param, 'UTF-8') > 3)
        $param = ucwords($param);
    else
        $param = strtoupper($param);
@endphp

@section('main')
    <header class="page-header min-h-[900px]">
        <img src="{{ asset('assets/images/default-header.png') }}" class="w-full h-full" alt="">

        @component('components.header-content', ['name' => 'Book Your '. $param .' Servicing'])
            @slot('caption')
                At Autofusion, you never need to worry about whether our team of <br class="desktop"> mechanics will know how to take care of your {{ $param  }}.
            @endslot
            @include('components.form-booking-service')
            @include('components.service-payment-info')
        @endcomponent
    </header>

    <section class="dark-container mt-[76px]">
        <h4 class="text-3xl font-black text-center text-white sm:text-5xl font-epilogue" data-aos="fade-up">
            {{ $param }} Servicing
        </h4>
        <p class="max-w-[903px] text-white text-opacity-55 text-base sm:text-[23px] leading-7 font-medium text-center mx-auto mt-[30px] mb-[110px]"
            data-aos="fade-up">
            Whether you have a GTV, a Spider or a Giulia, we use genuine {{ $param }} parts, and we will make sure that your car gets the correct treatment for its age and mileage. Talk to our experts today.
        </p>

        <div class="grid md:grid-cols-2 justify-center items-center gap-[50px] xl:px-24">
            @component('components.section-summary')
                @slot('caption')
                    <span class="text-white">
                        If you are looking for vehicle servicing in Glasgow, get in touch with Autofusion today.
                    </span>
                @endslot
                @slot('textMedium')
                    <span class="text-white text-opacity-40">
                        We offer unparalleled customer service and years of expertise to keep your car in top condition.
                    </span>
                @endslot
            @endcomponent
            <img src="{{ asset('assets/images/repair_1.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
        </div>
    </section>

    @include('components.did-you-know')

    @include('components.why-choose-autofusion')
@endsection
