@extends('layouts.auth', [
    'title' => 'Reset Password'
])

@section('main')
    <div class="flex flex-col items-center justify-center">
        <h1 class="text-white text-center text-4xl sm:text-[72px] font-black font-epilogue -tracking-[1.5px] mb-[50px]">
            Reset your password
        </h1>
        <form method="POST" action="{{ route('password.update') }}" class="bg-[#d9d9d9] backdrop-blur bg-opacity-15 rounded-[14px] p-6 sm:px-8 sm:py-[34px] flex flex-col gap-6 max-w-[400px] w-full">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <!-- Email Address -->
            <div class="flex flex-col gap-[10px]">
                <label for="email" class="text-sm font-medium text-white sm:text-base">
                    Email Address
                </label>
                <x-input-field
                        type="email"
                        name="email"
                        placeholder="example@example.com"
                        value="{{ $email ?? old('email') }}"
                        required
                        autocomplete="email"
                        class="@error('email') border-red-500 @enderror"
                />
                @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- New Password -->
            <div class="flex flex-col gap-[10px]">
                <label for="password" class="text-sm font-medium text-white sm:text-base">
                    New Password
                </label>
                <x-input-field
                        type="password"
                        name="password"
                        required
                        autocomplete="new-password"
                        class="@error('password') border-red-500 @enderror"
                />
                @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="flex flex-col gap-[10px]">
                <label for="password_confirmation" class="text-sm font-medium text-white sm:text-base">
                    Confirm Password
                </label>
                <x-input-field
                        type="password"
                        name="password_confirmation"
                        required
                        autocomplete="new-password"
                        class="@error('password_confirmation') border-red-500 @enderror"
                />
                @error('password_confirmation')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full btn btn-primary">
                Reset Password
            </button>

            <!-- Display Validation Errors -->
            @if($errors->any())
                <div class="bg-red-500 text-white p-4 rounded">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="font-bold mb-0">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Display Success Message -->
            @if (session('status'))
                <div class="bg-green-500 text-white p-4 rounded" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </form>
    </div>
@endsection
