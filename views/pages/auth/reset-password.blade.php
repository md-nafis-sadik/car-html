@extends('layouts.auth', [
    'title' => 'Reset Password'
])

@section('main')
    <div class="flex flex-col items-center justify-center">
        <h1 class="text-white text-center text-4xl sm:text-[72px] font-black font-epilogue -tracking-[1.5px] mb-[50px]">
            Reset your password
        </h1>
        <form action="" method="POST" class="bg-[#d9d9d9] backdrop-blur bg-opacity-15 rounded-[14px] p-6 sm:px-8 sm:py-[34px] flex flex-col gap-6 max-w-[400px] w-full">
            @csrf
            @method('POST')
            <div class="flex flex-col gap-[10px]">
                <label for="email_address" class="text-sm font-medium text-white sm:text-base">
                    Email Address
                </label>
                <x-input-field type="email" name="email_address" placeholder="example@example.com" />
            </div>

            <button type="submit" class="w-full btn btn-primary">
                Send Password Reset Link
            </button>
        </form>
    </div>
@endsection
