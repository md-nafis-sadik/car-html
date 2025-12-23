@extends('layouts.garage-bookings', [
    'title' => 'FORD FIEST ST-LINE X TURBO'
])

@section('main')
    <section class="flex flex-col items-center justify-center my-20">
        <div class="flex flex-col items-center w-full max-w-[390px] bg-[#D9D9D9] bg-opacity-15 backdrop-blur rounded-[14px] p-4 sm:px-9 sm:py-10" data-aos="fade-up">
            <p class="text-base text-white font-semibold mb-[14px] text-center tracking-[2px]">
                FORD FIEST ST-LINE X TURBO
            </p>
            <img src="{{ asset('assets/images/sample-cars/vehicle-sample.png') }}" class="w-full h-[150px] rounded-[14px] max-w-[230px]" alt="">
            <p class="mb-[50px] -mt-5 py-[7px] px-[14px] text-white font-semibold text-base uppercase ring-inset ring-2 ring-white ring-opacity-50 bg-primary rounded-lg tracking-[2.7px] text-center">
                MX23USKS
            </p>

            <p class="text-2xl text-center font-semibold text-white !leading-8 -tracking-[0.5px]">
                We’ve found your vehicle.
            </p>
            <p class="mt-5 text-base font-medium text-center text-white mb-7 text-opacity-60">
                We’ll now take your through your <br> booking step by step
            </p>

            <div class="flex flex-col gap-[10px] w-full">
                <a href="{{ route('book.form') }}" class="w-full btn btn-primary">
                    Get Started
                </a>
                <a href="#" class="w-full text-white bg-white btn bg-opacity-10 backdrop-blur-0">
                    This isn't my car
                </a>
            </div>
        </div>
    </section>
@endsection
