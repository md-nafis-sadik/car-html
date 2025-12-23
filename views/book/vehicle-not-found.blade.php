@extends('layouts.garage-bookings')
@section('head-info')
    <meta name="description" content="Book MOT & service for your vehicle."/>
    <title>Vehicle Not Found - {{ config('app.name') }}</title>
@endsection
@section('main')
    <section class="flex flex-col items-center justify-center my-20">
        <div class="flex flex-col items-center w-full max-w-[390px] bg-[#D9D9D9] bg-opacity-15 backdrop-blur rounded-[14px] p-4 sm:px-9 sm:py-10" data-aos="fade-up">

            <p class="text-2xl text-center font-semibold text-white !leading-8 -tracking-[0.5px]">
                Sorry, we couldn't find your vehicle
            </p>
            <p class="mt-5 text-base font-medium text-center text-white mb-7 text-opacity-60">
                Get in touch and we'll help with your booking or check your reg and try again.
            </p>

            <div class="flex flex-col gap-[10px] w-full">
                <a href="/book" class="w-full text-white bg-white btn bg-opacity-10 backdrop-blur-0">
                    Back to booking
                </a>
            </div>
        </div>
    </section>
@endsection
