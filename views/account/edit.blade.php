@extends('layouts.account-v2', [
    'title' => 'Dashboard Profile'
])

@section('main')
    {{-- Nav Tabs --}}
     <div class="col-sm-auto">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="account-personal" data-bs-toggle="tab" data-bs-target="#account-personal-pane" type="button" role="tab" aria-controls="account-personal-pane" aria-selected="true">Personal</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="account-billing" data-bs-toggle="tab" data-bs-target="#account-billing-pane" type="button" role="tab" aria-controls="account-billing-pane" aria-selected="false">Billing</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="account-password" data-bs-toggle="tab" data-bs-target="#account-password-pane" type="button" role="tab" aria-controls="account-password-pane" aria-selected="false">Password</button>
            </li>
        </ul>
    </div>

    <form method="POST" action="{{ route('account.edit.post') }}">
        @csrf
        @method('POST')
        <div class="tab-content mt-5" id="myTabContent">
            <!-- Personal -->
            <div class="tab-pane fade show active" id="account-personal-pane" role="tabpanel" aria-labelledby="account-personal" tabindex="0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-8">
                            <div class="d-flex flex-column gap-4">
                                <!-- Title Field -->
                                <div class="row g-3 align-items-lg-center">
                                    <div class="col-lg-5">
                                        <label for="title" class="form-label text-secondary fw-medium text-capitalize mb-lg-0">
                                            Title (required)
                                        </label>
                                    </div>
                                    <div class="col-lg-7">
                                        <select name="title" id="title" class="form-select" value="{{ auth()->user()->title }}" required>
                                            <option @if(auth()->user()->title == "Mr") selected @endif value="Mr">Mr</option>
                                            <option @if(auth()->user()->title == "Mrs") selected @endif value="Mrs">Mrs</option>
                                            <option @if(auth()->user()->title == "Ms") selected @endif value="Ms">Ms</option>
                                            <option @if(auth()->user()->title == "Miss") selected @endif value="Miss">Miss</option>
                                            <option @if(auth()->user()->title == "Mx") selected @endif value="Mx">Mx</option>
                                            <option @if(auth()->user()->title == "Dr") selected @endif value="Dr">Dr</option>
                                            <option @if(auth()->user()->title == "Prof") selected @endif value="Prof">Prof</option>
                                        </select>
                                        @error('title')<small class="text-danger d-block mt-1">{{ $message }}</small>@enderror
                                    </div>
                                </div>

                                <!-- First Name Field -->
                                <div class="row g-3 align-items-lg-center">
                                    <div class="col-lg-5">
                                        <label for="first_name" class="form-label text-secondary fw-medium text-capitalize mb-lg-0">
                                            First Name (required)
                                        </label>
                                    </div>
                                    <div class="col-lg-7">
                                        <x-input-field type="text" name="first_name" class-name="form-control" placeholder="First Name" id="first_name" value="{{ auth()->user()->first_name }}" :required="true"/>
                                        @error('first_name')<small class="text-danger d-block mt-1">{{ $message }}</small>@enderror
                                    </div>
                                </div>

                                <!-- Last Name Field -->
                                <div class="row g-3 align-items-lg-center">
                                    <div class="col-lg-5">
                                        <label for="last_name" class="form-label text-secondary fw-medium text-capitalize mb-lg-0">
                                            Last Name (required)
                                        </label>
                                    </div>
                                    <div class="col-lg-7">
                                        <x-input-field type="text" name="last_name" class-name="form-control" placeholder="Last Name" id="last_name" value="{{ auth()->user()->last_name }}" :required="true"/>
                                        @error('last_name')<small class="text-danger d-block mt-1">{{ $message }}</small>@enderror
                                    </div>
                                </div>

                                <!-- Email Address Field -->
                                <div class="row g-3 align-items-lg-center">
                                    <div class="col-lg-5">
                                        <label for="email" class="form-label text-secondary fw-medium text-capitalize mb-lg-0">
                                            Email Address (Required)
                                        </label>
                                    </div>
                                    <div class="col-lg-7">
                                        <x-input-field type="email" class-name="form-control" value="{{ auth()->user()->email }}" id="email" name="email" maxlength="100" autocomplete="email" :required="true"/>
                                        @error('email')<small class="text-danger d-block mt-1">{{ $message }}</small>@enderror
                                    </div>
                                </div>

                                <!-- Phone Field -->
                                <div class="row g-3 align-items-lg-center">
                                    <div class="col-lg-5">
                                        <label for="phone" class="form-label text-secondary fw-medium text-capitalize mb-lg-0">
                                            Phone (required)
                                        </label>
                                    </div>
                                    <div class="col-lg-7">
                                        <x-input-field class-name="form-control" placeholder="Phone" type="tel" value="{{ auth()->user()->phone }}" id="phone" name="phone" maxlength="100" autocomplete="phone" :required="true" />
                                        @error('phone')<small class="text-danger d-block mt-1">{{ $message }}</small>@enderror
                                    </div>
                                </div>

                                <!-- Date of Birth Field -->
                                <div class="row g-3 align-items-lg-center">
                                    <div class="col-lg-5">
                                        <label for="dob" class="form-label text-secondary fw-medium text-capitalize mb-lg-0">
                                            Date of Birth (DD/MM/YYYY) (required)
                                        </label>
                                    </div>
                                    <div class="col-lg-7">
                                        @if(auth()->user()->dob)
                                            <x-input-field type="date" name="dob" id="dob" class-name="form-control" value="{{ auth()->user()->dob->format('Y-m-d') }}" autocomplete="dob" :required="true"/>
                                        @else
                                            <x-input-field type="date" name="dob" id="dob" class-name="form-control" value="" autocomplete="dob" :required="true"/>
                                        @endif
                                        @error('dob')<small class="text-danger d-block mt-1">{{ $message }}</small>@enderror
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="ms-auto">
                                    <button type="submit" class="btn btn--gradient-primary">
                                        Save Changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Billing -->
            <div class="tab-pane fade show" id="account-billing-pane" role="tabpanel" aria-labelledby="account-billing" tabindex="1">
               <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-8">
                            <div class="d-flex flex-column gap-4">
                                <!-- Address Line 1 Field -->
                                <div class="row g-3 align-items-lg-center">
                                    <div class="col-lg-5">
                                        <label for="address_line_1" class="form-label text-secondary fw-medium text-capitalize mb-lg-0">
                                            Address Line 1 (required)
                                        </label>
                                    </div>
                                    <div class="col-lg-7">
                                        <x-input-field type="text" name="address_line_1" class-name="form-control" placeholder="Address Line 1" id="address_line_1" value="{{ auth()->user()->address_line_1 }}" :required="true"/>
                                        @error('address_line_1')<small class="text-danger d-block mt-1">{{ $message }}</small>@enderror
                                    </div>
                                </div>

                                <!-- Address Line 2 Field -->
                                <div class="row g-3 align-items-lg-center">
                                    <div class="col-lg-5">
                                        <label for="address_line_2" class="form-label text-secondary fw-medium text-capitalize mb-lg-0">
                                            Address Line 2 (required)
                                        </label>
                                    </div>
                                    <div class="col-lg-7">
                                        <x-input-field type="text" name="address_line_2" class-name="form-control" placeholder="Address Line 2" id="address_line_2" value="{{ auth()->user()->address_line_2 }}" :required="true"/>
                                        @error('address_line_2')<small class="text-danger d-block mt-1">{{ $message }}</small>@enderror
                                    </div>
                                </div>

                                <!-- Town Field -->
                                <div class="row g-3 align-items-lg-center">
                                    <div class="col-lg-5">
                                        <label for="address_town" class="form-label text-secondary fw-medium text-capitalize mb-lg-0">
                                            Town (required)
                                        </label>
                                    </div>
                                    <div class="col-lg-7">
                                        <x-input-field type="text" name="address_town" class-name="form-control" placeholder="Town" id="address_town" value="{{ auth()->user()->address_town }}" :required="true"/>
                                        @error('address_town')<small class="text-danger d-block mt-1">{{ $message }}</small>@enderror
                                    </div>
                                </div>

                                <!-- County Field -->
                                <div class="row g-3 align-items-lg-center">
                                    <div class="col-lg-5">
                                        <label for="address_county" class="form-label text-secondary fw-medium text-capitalize mb-lg-0">
                                            County (required)
                                        </label>
                                    </div>
                                    <div class="col-lg-7">
                                        <x-input-field type="text" name="address_county" class-name="form-control" placeholder="County" id="address_county" value="{{ auth()->user()->address_county }}" :required="true"/>
                                        @error('address_county')<small class="text-danger d-block mt-1">{{ $message }}</small>@enderror
                                    </div>
                                </div>

                                <!-- Postcode Field -->
                                <div class="row g-3 align-items-lg-center">
                                    <div class="col-lg-5">
                                        <label for="address_postcode" class="form-label text-secondary fw-medium text-capitalize mb-lg-0">
                                            Postcode (required)
                                        </label>
                                    </div>
                                    <div class="col-lg-7">
                                        <x-input-field type="text" name="address_postcode" class-name="form-control" placeholder="Postcode" id="address_postcode" value="{{ auth()->user()->address_postcode }}" :required="true"/>
                                        @error('address_postcode')<small class="text-danger d-block mt-1">{{ $message }}</small>@enderror
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="ms-auto">
                                    <button type="submit" class="btn btn--gradient-primary">
                                        Save Changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Password -->
            <div class="tab-pane fade show" id="account-password-pane" role="tabpanel" aria-labelledby="account-password" tabindex="2">
               <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-8">
                            <div class="d-flex flex-column gap-4">
                                <!-- New Password Field -->
                                <div class="row g-3 align-items-lg-center">
                                    <div class="col-lg-5">
                                        <label for="password" class="form-label text-secondary fw-medium text-capitalize mb-lg-0">
                                            {{ __('New Password') }}
                                        </label>
                                    </div>
                                    <div class="col-lg-7">
                                        <x-input-field type="password" name="password" class-name="form-control" placeholder="Enter new password" id="password" autocomplete="off" :required="false"/>
                                        @error('password')<small class="text-danger d-block mt-1">{{ $message }}</small>@enderror
                                    </div>
                                </div>

                                <!-- Confirm Password Field -->
                                <div class="row g-3 align-items-lg-center">
                                    <div class="col-lg-5">
                                        <label for="password-confirm" class="form-label text-secondary fw-medium text-capitalize mb-lg-0">
                                            {{ __('Confirm Password') }}
                                        </label>
                                    </div>
                                    <div class="col-lg-7">
                                        <x-input-field type="password" name="password-confirm" class-name="form-control" placeholder="Enter new password" id="password-confirm" autocomplete="off" :required="false"/>
                                        @error('password-confirm')<small class="text-danger d-block mt-1">{{ $message }}</small>@enderror
                                    </div>
                                </div>
                                
                                <!-- Info Text -->
                                <div class="row g-3">
                                    <div class="col-12">
                                        <p class="text-secondary fw-medium mb-0">Leave blank to leave unchanged.</p>
                                    </div>
                                </div>
                                
                                <!-- Submit Button -->
                                <div class="ms-auto">
                                    <button type="submit" class="btn btn--gradient-primary">
                                        Save Changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
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
    </form >
@endsection
