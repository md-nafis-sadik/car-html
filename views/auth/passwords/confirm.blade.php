@extends('layouts.auth', [
    'title' => 'Confirm Password'
])

@section('main')
    <div class="flex flex-col items-center justify-center">
        <h1 class="text-white text-center text-4xl sm:text-[72px] font-black font-epilogue -tracking-[1.5px] mb-[30px]">
            Confirm Password
        </h1>
        <p class="text-white text-center mb-6">
            Please confirm your password before continuing.
        </p>
        <form method="POST" action="{{ route('password.confirm') }}" class="bg-[#d9d9d9] backdrop-blur bg-opacity-15 rounded-[14px] p-6 sm:px-8 sm:py-[34px] flex flex-col gap-6 max-w-[400px] w-full">
            @csrf

            <!-- Password Field -->
            <div class="flex flex-col gap-[10px]">
                <label for="password" class="text-sm font-medium text-white sm:text-base">
                    Password
                </label>
                <x-input-field
                        id="password"
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password"
                        class="@error('password') border-red-500 @enderror"
                />
                @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full btn btn-primary">
                Confirm Password
            </button>

            <!-- Forgot Password Link -->
            @if (Route::has('password.request'))
                <a class="text-sm text-white text-center mt-4" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
            @endif

            <!-- Display Validation Errors -->
            @if($errors->any())
                <div class="bg-red-500 text-white p-4 rounded mt-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="font-bold mb-0">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </div>
@endsection
