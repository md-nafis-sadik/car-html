@extends('layouts.auth', [
    'title' => 'Login'
])

@section('main')
    <div class="flex flex-col items-center justify-center">
        <h1 class="text-white text-center text-4xl sm:text-[72px] font-black font-epilogue -tracking-[1.5px] mb-[50px]">
            Please Log In
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
            <div class="flex flex-col gap-[10px]">
                <label for="password__" class="text-sm font-medium text-white sm:text-base">
                    Password
                </label>
                <x-input-field type="email" name="password" placeholder="****************" />
                @error('password')
                    <small class="text-xs font-medium sm:text-sm text-danger">Please choose a password</small>
                @enderror
            </div>

            <div class="flex items-center justify-between w-full">
                <button type="submit" class="btn btn-primary">
                    Sign In
                </button>
                <a href="{{ route('reset-password') }}" class="text-sm font-medium text-white sm:text-base">
                    Forgot Password?
                </a>
            </div>
        </form>
    </div>
@endsection
