@extends('layouts.auth', [
    'title' => 'Verify Account'
])

@section('main')
    <div class="flex flex-col items-center justify-center">
        <h1 class="text-white text-center text-4xl sm:text-[72px] font-black font-epilogue -tracking-[1.5px] mb-[50px]">
            E-mail Verification
        </h1>

        <div class="bg-[#d9d9d9] backdrop-blur bg-opacity-15 rounded-[14px] p-6 sm:px-8 sm:py-[34px] flex flex-col gap-6 max-w-[400px] w-full">
            <!-- Success Message -->
            @if (session('resent'))
                <div class="bg-green-500 text-white p-4 rounded mb-4" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif

            <!-- Instructions -->
            <p class="font-semibold text-white">
                {{ __('Before proceeding, please check your email for a verification link. Give it a few minutes and don\'t forget to check the SPAM folder.') }}
            </p>
            <p class="font-base text-white">
                {{ __('If you did not receive the email') }}:
            </p>

            <!-- Resend Verification Form -->
            <form method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="w-full btn btn-primary">
                    {{ __('Click here to request another') }}
                </button>
            </form>
        </div>
    </div>
@endsection
