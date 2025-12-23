@extends('layouts.garage-bookings', [
    'title' => $pageTitle
])

@section('main')
    <section class="flex flex-col items-center justify-center my-20">
        <h1 class="text-4xl md:text-[50px] font-epilogue text-white font-black text-center -tracking-[0.4px]" data-aos="fade-up">
            Book Your Diagnostic or Repair
        </h1>
        <p class="mt-4 text-white text-opacity-70 font-light text-base md:text-[23px] text-center mb-[67px]" data-aos="fade-up">
            Enter your vehicle reg to find your vehicle
        </p>

        <form action="" method="POST" class="flex flex-col w-full max-w-[400px] bg-[#D9D9D9] bg-opacity-15 backdrop-blur rounded-[14px] p-4 sm:p-8" data-aos="fade-up">
            @csrf
            @method('POST')
            <p class="text-center text-white text-base font-medium mb-[9px]">
                Vehicle Registration
            </p>
            <input type="text" name="code" id="code" maxlength="9" class="p-2 sm:px-4 sm:py-[15px] bg-white bg-opacity-15 rounded-[15px] border-4 border-white border-opacity-50 text-center font-semibold text-white placeholder:text-white text-[27px] uppercase tracking-[5px] focus:outline-none focus:border-primary" placeholder="ENTER REG">
            <div class="w-full mt-6">
                {{-- <button type="button" class="w-full btn btn-primary">
                    Search VRM
                </button> --}}
                <a href="{{ route('book.vrm.found') }}" class="w-full btn btn-primary">
                    Search VRM
                </a>
            </div>
        </form>
    </section>
@endsection
