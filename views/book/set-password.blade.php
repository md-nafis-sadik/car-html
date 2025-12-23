@extends('layouts.auth')
@section('head-info')
    <meta name="description" content="Book MOT & service for your vehicle."/>
    <title>Set Password - {{ config('app.name') }}</title>
@endsection
@section('main')
    <div class="flex flex-col items-center justify-center">
        <h1 class="text-white text-center text-4xl sm:text-[72px] font-black font-epilogue -tracking-[1.5px] mb-[50px]">
            Set a password
        </h1>
        <p class="text-white text-center text-lg  font-epilogue mb-[50px]">You can now set a password for your account.</p>
        <form action="{{ route('set-password.post') }}" method="POST" class="bg-[#d9d9d9] backdrop-blur bg-opacity-15 rounded-[14px] p-6 sm:px-8 sm:py-[34px] flex flex-col gap-6 max-w-[400px] w-full">
            @csrf
            @method('POST')
            <div class="flex flex-col gap-[10px]">
                <label for="set-password" class="text-sm font-medium text-white sm:text-base">
                    Password
                </label>
                <x-input-field type="password" name="set-password" id="set-password" required="true" />
            </div>
            <div class="flex flex-col gap-[10px]">
                <label for="set-password-confirm" class="text-sm font-medium text-white sm:text-base">
                    Confirm Password
                </label>
                <x-input-field type="password" name="set-password-confirm" id="set-password-confirm" required="true" />
            </div>

            <button type="submit" class="w-full btn btn-primary">
                Save Password
            </button>
        </form>
    </div>
@endsection
