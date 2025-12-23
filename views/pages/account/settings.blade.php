@extends('layouts.account', [
    'title' => 'Dashboard Profile'
])

@section('main')
    @include('components.breadcrumb', ['items' => ['account', 'settings']])

    {{-- Nav Tabs --}}
    <ul class="pill-tabs-container" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
        <li role="presentation">
            <button class="nav-item" id="__personal-tab" data-tabs-target="#__personal" type="button" role="tab" aria-controls="__personal" aria-selected="false">
                personal
            </button>
        </li>
        <li role="presentation">
            <button class="nav-item" id="__billing-tab" data-tabs-target="#__billing" type="button" role="tab" aria-controls="__billing" aria-selected="false">
                billing
            </button>
        </li>
        <li role="presentation">
            <button class="nav-item" id="__password-tab" data-tabs-target="#__password" type="button" role="tab" aria-controls="__password" aria-selected="false">
                password
            </button>
        </li>
    </ul>

    <div id="default-tab-content">
        <div class="hidden" id="__personal" role="tabpanel" aria-labelledby="__personal-tab">
            <form action="" method="POST" class="lg:max-w-[780px] w-full flex flex-col gap-5">
                @csrf
                @method('POST')
                <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                    <label for="title" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                        Title (required)
                    </label>
                    <select name="title" id="title" class="inputStyle valid:text-dark lg:max-w-[380px] w-full" required>
                        <option value="mr" selected>Mr</option>
                        <option value="mrs">Mrs</option>
                    </select>
                </div>
                <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                    <label for="first_name" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                        First Name (required)
                    </label>
                    <x-input-field type="text" name="first_name" class-name="valid:text-dark lg:max-w-[380px] w-full" placeholder="First Name" value="Douglas" />
                </div>
                <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                    <label for="last_name" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                        Last Name (required)
                    </label>
                    <x-input-field type="text" name="last_name" class-name="valid:text-dark lg:max-w-[380px] w-full" placeholder="Last Name" value="Douglas" />
                </div>
                <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                    <label for="email_address" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                        Email Address
                    </label>
                    <x-input-field type="email" name="email_address" class-name="valid:text-dark lg:max-w-[380px] w-full" placeholder="Email Address" value="rainbow@mail.com" :required="false" />
                </div>
                <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                    <label for="phone_number" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                        Phone (required)
                    </label>
                    <x-input-field type="number" name="phone_number" class-name="valid:text-dark lg:max-w-[380px] w-full" placeholder="Phone" value="1231231231" />
                </div>
                <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                    <label for="date_of_birth" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                        Date of Birth (DD/MM/YYYY) (required)
                    </label>
                    <x-input-field type="date" name="date_of_birth" class-name="valid:text-dark lg:max-w-[380px] w-full" />
                </div>
                <div class="ml-auto">
                    <button type="submit" class="btn btn-primary">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
        <div class="hidden" id="__billing" role="tabpanel" aria-labelledby="__billing-tab">
            <p class="text-sm text-white">
                Billing Tab
            </p>
        </div>
        <div class="hidden" id="__password" role="tabpanel" aria-labelledby="__password-tab">
            <p class="text-sm text-white">
                Password Tab
            </p>
        </div>
    </div>
@endsection
