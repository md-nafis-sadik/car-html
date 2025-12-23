@extends('layouts.account', [
    'title' => 'Dashboard Profile'
])

@section('main')
    @include('components.breadcrumb', ['items' => [
           ['title' => 'Account', 'url' => route('account')],
           ['title' => 'Settings']
       ]])

    {{-- Nav Tabs --}}
    <ul class="pill-tabs-container" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
        <li role="presentation">
            <button class="nav-item" id="__personal-tab" data-tabs-target="#__personal" type="button" role="tab" aria-controls="__personal" aria-selected="false">
                Personal
            </button>
        </li>
        <li role="presentation">
            <button class="nav-item" id="__billing-tab" data-tabs-target="#__billing" type="button" role="tab" aria-controls="__billing" aria-selected="false">
                Billing
            </button>
        </li>
        <li role="presentation">
            <button class="nav-item" id="__password-tab" data-tabs-target="#__password" type="button" role="tab" aria-controls="__password" aria-selected="false">
                Password
            </button>
        </li>
    </ul>

    <div id="default-tab-content">
        <form method="POST" action="{{ route('account.edit.post') }}">
            @csrf
            @method('POST')
        <div class="hidden" id="__personal" role="tabpanel" aria-labelledby="__personal-tab">
            <div class="lg:max-w-[780px] w-full flex flex-col gap-5">
                <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                    <label for="title" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                        Title (required)
                    </label>
                    <select name="title" id="title" class="inputStyle valid:text-dark lg:max-w-[380px] w-full" value="{{ auth()->user()->title }}" required>
                        <option @if(auth()->user()->title == "Mr") selected @endif value="Mr">Mr</option>
                        <option @if(auth()->user()->title == "Mrs") selected @endif value="Mrs">Mrs</option>
                        <option @if(auth()->user()->title == "Ms") selected @endif value="Ms">Ms</option>
                        <option @if(auth()->user()->title == "Miss") selected @endif value="Miss">Miss</option>
                        <option @if(auth()->user()->title == "Mx") selected @endif value="Mx">Mx</option>
                        <option @if(auth()->user()->title == "Dr") selected @endif value="Dr">Dr</option>
                        <option @if(auth()->user()->title == "Prof") selected @endif value="Prof">Prof</option>
                    </select>
                    @error('title')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                </div>
                <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                    <label for="first_name" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                        First Name (required)
                    </label>
                    <x-input-field type="text" name="first_name" class-name="valid:text-dark lg:max-w-[380px] w-full" placeholder="First Name" id="first_name" value="{{ auth()->user()->first_name }}" :required="true"/>
                    @error('first_name')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                </div>
                <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                    <label for="last_name" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                        last Name (required)
                    </label>
                    <x-input-field type="text" name="last_name" class-name="valid:text-dark lg:max-w-[380px] w-full" placeholder="Last Name" id="last_name" value="{{ auth()->user()->last_name }}" :required="true"/>
                    @error('last_name')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                </div>
                <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                    <label for="email_address" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                        Email Address (Required)
                    </label>
                    <x-input-field type="email" class-name="valid:text-dark lg:max-w-[380px] w-full" value="{{ auth()->user()->email }}" id="email" name="email" maxlength="100" autocomplete="email" :required="true"/>
                    @error('email')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                </div>
                <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                    <label for="phone_number" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                        Phone (required)
                    </label>
                    <x-input-field class-name="valid:text-dark lg:max-w-[380px] w-full" placeholder="Phone" type="tel" value="{{ auth()->user()->phone }}" id="phone" name="phone" maxlength="100" autocomplete="phone" :required="true" />
                    @error('phone')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                </div>
                <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                    <label for="date_of_birth" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                        Date of Birth (DD/MM/YYYY) (required)
                    </label>
                    @if(auth()->user()->dob)
                        <x-input-field type="date" name="dob" id="dob" class-name="valid:text-dark lg:max-w-[380px] w-full" value="{{ auth()->user()->dob->format('Y-m-d')  }}" autocomplete="dob" :required="true"/>
                    @else
                        <x-input-field type="date" name="dob" id="dob" class-name="valid:text-dark lg:max-w-[380px] w-full" value="{{ auth()->user()->dob->format('Y-m-d')  }}" autocomplete="dob" :required="true"/>
                    @endif

                    @error('dob')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                </div>
                <div class="ml-auto">
                    <button type="submit" class="btn btn-primary">
                        Save Changes
                    </button>
                </div>
            </div>
        </div>
        <div class="hidden" id="__billing" role="tabpanel" aria-labelledby="__billing-tab">
            <div class="lg:max-w-[780px] w-full flex flex-col gap-5">
                <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                    <label for="address_line_1" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                        Address Line 1 (required)
                    </label>
                    <x-input-field type="text" name="address_line_1" class-name="valid:text-dark lg:max-w-[380px] w-full" placeholder="Address Line 1" id="address_line_1" value="{{ auth()->user()->address_line_1 }}" :required="true"/>
                    @error('address_line_1')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                </div>

                <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                    <label for="address_line_2" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                        Address Line 2 (required)
                    </label>
                    <x-input-field type="text" name="address_line_1" class-name="valid:text-dark lg:max-w-[380px] w-full" placeholder="Address Line 2" id="address_line_2" value="{{ auth()->user()->address_line_2 }}" :required="true"/>
                    @error('address_line_2')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                </div>

                <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                    <label for="address_town" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                        Town (required)
                    </label>
                    <x-input-field type="text" name="address_town" class-name="valid:text-dark lg:max-w-[380px] w-full" placeholder="Town" id="address_town" value="{{ auth()->user()->address_town }}" :required="true"/>
                    @error('address_town')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                </div>

                <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                    <label for="address_county" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                        County (required)
                    </label>
                    <x-input-field type="text" name="address_county" class-name="valid:text-dark lg:max-w-[380px] w-full" placeholder="County" id="address_county" value="{{ auth()->user()->address_county }}" :required="true"/>
                    @error('address_county')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                </div>

                <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                    <label for="address_postcode" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                        Postcode (required)
                    </label>
                    <x-input-field type="text" name="address_postcode" class-name="valid:text-dark lg:max-w-[380px] w-full" placeholder="Postcode" id="address_postcode" value="{{ auth()->user()->address_postcode }}" :required="true"/>
                    @error('address_postcode')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                </div>

                <div class="ml-auto">
                    <button type="submit" class="btn btn-primary">
                        Save Changes
                    </button>
                </div>

            </div>

        </div>
        <div class="hidden" id="__password" role="tabpanel" aria-labelledby="__password-tab">

            <div class="lg:max-w-[780px] w-full flex flex-col gap-5">

                <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                    <label for="password" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                        {{ __('New Password') }}
                    </label>
                    <x-input-field type="password" name="password" class-name="valid:text-dark lg:max-w-[380px] w-full" placeholder="Enter new password" id="password" autocomplete="off" :required="false"/>
                    @error('password')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                </div>

                <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                    <label for="password" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                        {{ __('Confirm Password') }}
                    </label>
                    <x-input-field type="password" name="password-confirm" class-name="valid:text-dark lg:max-w-[380px] w-full" placeholder="Enter new password" id="password-confirm" autocomplete="off" :required="false"/>
                    @error('password-confirm')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                </div>


                <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                    <p class="text-sm sm:text-base text-[#8C94A7] font-medium">Leave blank to leave unchanged.</p>
                </div>

                <div class="ml-auto">
                    <button type="submit" class="btn btn-primary">
                        Save Changes
                    </button>
                </div>
            </div>

        </div>

            @foreach (['danger' => 'red', 'warning' => 'orange', 'success' => 'primary', 'info' => 'blue'] as $type => $color)
                @if(Session::has('alert-' . $type))
                    <div class="sl:px-1 mt-4">
                        <div class="bg-white border-{{ $color }}-500 text-{{ $color }}-900 border-l-4 p-4 rounded">
                            <p class="font-bold mb-0">{!! Session::get('alert-' . $type) !!}</p>
                        </div>
                    </div>
                @endif
            @endforeach

            @if($errors->any())
                <div class="bg-red-200 border-red-500 text-red-900 border-l-4 p-4 rounded my-5">
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
