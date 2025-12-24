@extends('layouts.auth')
@section('head-info')
    <title>Register - {{ config('app.name') }} Glasgow</title>
    <meta name="description" content="Register on the {{ config('app.name') }} website." />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('/images/homepage-header.jpeg') }}" />
    <meta property="og:title" content="Register - {{ config('app.name') }} Glasgow" />
    <meta property="og:description" content="Register on the {{ config('app.name') }} website." />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection
@section('main')
    {{-- <div class="flex flex-col items-center justify-center mb-20">
        <h1 class="text-white text-center text-4xl sm:text-[72px] font-black font-epilogue -tracking-[1.5px] mb-[50px]">
            Register
        </h1>

        @component('components.empty-state')
            <form method="POST" action="{{ route('register') }}" class="w-full">
                @csrf
                <div class="lg:max-w-[780px] w-full flex flex-col gap-5 mx-auto">
                    <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                        <label for="title" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                            Title (required)
                        </label>
                        <select name="title" id="title" class="inputStyle valid:text-dark lg:max-w-[380px] w-full" required>
                            <option value="Mr" @if(old('title') == "Mr") selected @endif>Mr</option>
                            <option value="Mrs" @if(old('title') == "Mrs") selected @endif>Mrs</option>
                            <option value="Ms" @if(old('title') == "Ms") selected @endif>Ms</option>
                            <option value="Miss" @if(old('title') == "Miss") selected @endif>Miss</option>
                            <option value="Mx" @if(old('title') == "Mx") selected @endif>Mx</option>
                            <option value="Dr" @if(old('title') == "Dr") selected @endif>Dr</option>
                            <option value="Prof" @if(old('title') == "Prof") selected @endif>Prof</option>
                        </select>
                        @error('title')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                    </div>
                    <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                        <label for="first_name" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                            First Name (required)
                        </label>
                        <x-input-field type="text" name="first_name" class-name="valid:text-dark lg:max-w-[380px] w-full" placeholder="First Name" id="first_name" value="{{ old('first_name') }}" :required="true" style="text-transform: capitalize"/>
                        @error('first_name')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                    </div>
                    <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                        <label for="last_name" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                            Last Name (required)
                        </label>
                        <x-input-field type="text" name="last_name" class-name="valid:text-dark lg:max-w-[380px] w-full" placeholder="Last Name" id="last_name" value="{{ old('last_name') }}" :required="true" style="text-transform: capitalize"/>
                        @error('last_name')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                    </div>
                    <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                        <label for="email" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                            Email Address (Required)
                        </label>
                        <x-input-field type="email" class-name="valid:text-dark lg:max-w-[380px] w-full" value="{{ old('email') }}" id="email" name="email" maxlength="100" autocomplete="email" :required="true"/>
                        @error('email')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                    </div>
                    <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                        <label for="phone" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                            Phone (required)
                        </label>
                        <x-input-field class-name="valid:text-dark lg:max-w-[380px] w-full" placeholder="Phone" type="tel" value="{{ old('phone') }}" id="phone" name="phone" maxlength="100" autocomplete="phone" :required="true" />
                        @error('phone')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                    </div>
                    <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                        <label for="dob" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                            Date of Birth (DD/MM/YYYY) (required)
                        </label>
                        <x-input-field type="date" name="dob" id="dob" class-name="valid:text-dark lg:max-w-[380px] w-full" value="{{ old('dob') }}" autocomplete="dob" :required="true"/>
                        @error('dob')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                    </div>
                </div>
                <div id="addressFields" class="lg:max-w-[780px] w-full flex flex-col gap-5 mx-auto mt-5">
                    <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                        <label for="address_postcode" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                            Postcode (required)
                        </label>
                        <div class="lg:max-w-[380px] w-full">
                            <x-input-field type="text" name="address_postcode" class-name="valid:text-dark w-full" placeholder="Postcode" id="address_postcode" value="{{ old('address_postcode') }}" :required="true" oninput="this.value = this.value.toUpperCase()"/>
                            <button type="button" id="findAddressBtn" class="btn btn-primary mt-2" onclick="lookupAddress()">Lookup</button>
                        </div>
                        @error('address_postcode')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                    </div>
                    <input type="hidden" value="GB"  id="address_country" name="address_country"/>
                    <select id="addressList" class="inputStyle valid:text-dark lg:max-w-[380px] w-full ml-auto" onchange="addressesListChanged()" style="display: none">
                        <option value="">Choose your address</option>
                    </select>
                    <div id="manualAddressFields" style="display: none;">
                        <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                            <label for="address_line_1" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                                Address Line 1 (required)
                            </label>
                            <x-input-field type="text" name="address_line_1" class-name="valid:text-dark lg:max-w-[380px] w-full" placeholder="Address Line 1" id="address_line_1" value="{{ old('address_line_1') }}" :required="true"/>
                            @error('address_line_1')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between mt-3">
                            <label for="address_line_2" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                                Address Line 2
                            </label>
                            <x-input-field type="text" name="address_line_2" class-name="valid:text-dark lg:max-w-[380px] w-full" placeholder="Address Line 2" id="address_line_2" value="{{ old('address_line_2') }}"/>
                            @error('address_line_2')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between mt-3">
                            <label for="address_town" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                                Town (required)
                            </label>
                            <x-input-field type="text" name="address_town" class-name="valid:text-dark lg:max-w-[380px] w-full" placeholder="Town" id="address_town" value="{{ old('address_town') }}" :required="true"/>
                            @error('address_town')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between mt-3">
                            <label for="address_county" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                                County
                            </label>
                            <x-input-field type="text" name="address_county" class-name="valid:text-dark lg:max-w-[380px] w-full" placeholder="County" id="address_county" value="{{ old('address_county') }}"/>
                            @error('address_county')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                        </div>
                    </div>
                </div>
                <div class="lg:max-w-[780px] w-full flex flex-col gap-5 mx-auto mt-5">
                    <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                        <label for="password" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                            Password (required)
                        </label>
                        <x-input-field type="password" name="password" class-name="valid:text-dark lg:max-w-[380px] w-full" placeholder="Enter password" id="password" :required="true"/>
                        @error('password')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                    </div>
                    <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                        <label for="password_confirmation" class="lg:min-w-[330px] lg:max-w-[330px] w-full text-sm sm:text-base text-[#8C94A7] font-medium capitalize">
                            Confirm Password (required)
                        </label>
                        <x-input-field type="password" name="password_confirmation" class-name="valid:text-dark lg:max-w-[380px] w-full" placeholder="Confirm password" id="password_confirmation" :required="true"/>
                    </div>
                    <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                        <div class="lg:min-w-[330px] lg:max-w-[330px] w-full"></div>
                        <div class="lg:max-w-[380px] w-full">
                            <div class="g-recaptcha" data-sitekey="{{config('services.recaptcha.key')}}"></div>
                            @error('g-recaptcha-response')<small class="text-xs font-medium sm:text-sm text-danger">{{ $message }}</small>@enderror
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 lg:items-center lg:gap-10 lg:flex-row lg:justify-between">
                        <div class="lg:min-w-[330px] lg:max-w-[330px] w-full"></div>
                        <div class="lg:max-w-[380px] w-full">
                            <input class="mr-2" type="checkbox" name="agreement" id="agreement" required>
                            <label for="agreement">
                                <span class="text-sm sm:text-base text-[#8C94A7]">By signing up, I agree to the <a href="/downloads/Autofusion-Repairs-Terms-And-Conditions.pdf" class="text-primary">Terms & Conditions</a>.</span>
                            </label>
                            @error('agreement')<small class="block text-xs font-medium sm:text-sm text-danger mt-1">{{ $message }}</small>@enderror
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </div>
                </div>

                @if($errors->any())
                    <div class="bg-red-200 border-red-500 text-red-900 border-l-4 p-4 rounded my-5 lg:max-w-[780px] mx-auto">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="font-bold mb-0">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (Route::has('login'))
                    <div class="text-center mt-4">
                        <a href="{{ route('login') }}" class="text-primary">
                            {{ __('Already have an account?') }}
                        </a>
                    </div>
                @endif
            </form>
        @endcomponent
    </div> --}}
    <section class="pt-5 oy-auth">
        <div class="container-fluid px-3 px-lg-4">
            <div class="oy-auth__banner" style="background-image: url('{{ asset('assets/img/banners/dashboard-banner.jpg') }}');">
                <div class="row oy-auth__row align-items-center justify-content-center">
                    <div class="col-md-6 col-xl-4">
                        <div class="oy-auth__header" style="background-image: url('{{ asset('assets/img/banners/auth-banner-mobile.png') }}');">
                            <h2 class="text-h4 text-center mb-5 text-white">Register</h2>                                
                        </div>                        
                        <div class="oy-auth__form">
                                <form action="#" class="card p-4 p-lg-5">
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="form-field__title" class="form-label text-b5-semibold text-secondary text-opacity-50 text-uppercase">Title (Required)</label>
                                                {{-- <input type="text" name="title" class="form-control"  placeholder="Mr." required> --}}
                                                <select name="title" id="title" class="form-control" id="form-field__title" required>
                                                    <option value="Mr" @if(old('title') == "Mr") selected @endif>Mr</option>
                                                    <option value="Mrs" @if(old('title') == "Mrs") selected @endif>Mrs</option>
                                                    <option value="Ms" @if(old('title') == "Ms") selected @endif>Ms</option>
                                                    <option value="Miss" @if(old('title') == "Miss") selected @endif>Miss</option>
                                                    <option value="Mx" @if(old('title') == "Mx") selected @endif>Mx</option>
                                                    <option value="Dr" @if(old('title') == "Dr") selected @endif>Dr</option>
                                                    <option value="Prof" @if(old('title') == "Prof") selected @endif>Prof</option>
                                                </select>
                                                @error('title')
                                                <small class="text-danger fw-medium">
                                                    {{ $message }}
                                                </small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="form-field__first_name" class="form-label text-b5-semibold text-secondary text-opacity-50 text-uppercase">First Name (Required)</label>
                                                <input type="text" name="first_name" class="form-control" placeholder="First Name" id="first_name" value="{{ old('first_name') }}" required style="text-transform: capitalize"/>
                                                @error('first_name')
                                                    <small class="text-danger fw-medium">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="form-field__last_name" class="form-label text-b5-semibold text-secondary text-opacity-50 text-uppercase">Last Name (Required)</label>
                                                <input type="text" name="last_name" class="form-control" placeholder="Last Name" id="last_name" value="{{ old('last_name') }}" required style="text-transform: capitalize"/>
                                                @error('last_name')
                                                    <small class="text-danger fw-medium">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="form-field__email" class="form-label text-b5-semibold text-secondary text-opacity-50 text-uppercase">Email Address (Required)</label>
                                                <input type="email" name="email" class="form-control" value="{{ old('email') }}" id="email" placeholder="john@example.com" required/>
                                                @error('email')
                                                    <small class="text-danger fw-medium">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="form-field__dob" class="form-label text-b5-semibold text-secondary text-opacity-50 text-uppercase">Date of Birth (DD/MM/YYYY) (Required)</label>
                                                <input type="date" name="dob" id="dob" class="form-control" value="{{ old('dob') }}" placeholder="(DD/MM/YYYY)" autocomplete="dob" required/>
                                                @error('dob')
                                                    <small class="text-danger fw-medium">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="form-field__postcode" class="form-label text-b5-semibold text-secondary text-opacity-50 text-uppercase">Postcode (Required)</label>
                                                <div class="position-relative">
                                                    <input type="text" name="address_postcode" class="form-control" placeholder="Postcode" id="address_postcode" value="{{ old('address_postcode') }}" required oninput="this.value = this.value.toUpperCase()"/>
                                                    <button type="button" id="findAddressBtn" class="form-group__lookup" onclick="lookupAddress()">Lookup</button>
                                                </div>
                                                @error('address_postcode')
                                                    <small class="text-danger fw-medium">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="form-field__password" class="form-label text-b5-semibold text-secondary text-opacity-50 text-uppercase">Password (Required)</label>
                                                <input type="password" name="password" class="form-control" placeholder="Enter password" id="password" required/>
                                                @error('password')
                                                    <small class="text-danger fw-medium">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="form-field__password-confirm" class="form-label text-b5-semibold text-secondary text-opacity-50 text-uppercase">Confirm Password (Required)</label>
                                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password" id="password_confirmation" required/>
                                                @error('password_confirmation')
                                                    <small class="text-danger fw-medium">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group form-check">
                                                <input class="form-check-input" type="checkbox" name="agreement" id="agreement" required>
                                                <label class="form-check-label text-b4-regular" for="agreement"> By signing up, I agree to the Terms & Conditions.</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn w-100 btn--gradient-primary" style="--btn-before-size: 550px;">
                                                <span class="btn__text">Register</span>
                                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.2266 5.43579L18.7907 11L13.2266 16.5641" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M3.20703 11H18.6345" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </button>
                                            @if (Route::has('login'))
                                            <div class="mt-3 text-secondary text-opacity-75 text-center">
                                                Already have an account? <a href="{{ route('login') }}" class="link-primary">Sign in</a>
                                            </div>
                                            @endif
                                        </div>
                                        @if ($errors->any())
                                            <div class="alert alert-danger border-start border-4 rounded my-5 mx-auto" style="max-width: 780px;">
                                                <ul class="mb-0">
                                                    @foreach ($errors->all() as $error)
                                                        <li class="fw-bold">{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
@endsection

@push('js')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script type="text/javascript">
        const postCode = document.getElementById("address_postcode");
        const address1 = document.getElementById("address_line_1");
        const address2 = document.getElementById("address_line_2");
        const town = document.getElementById("address_town");
        const county = document.getElementById("address_county");
        const manualAddressFields = document.getElementById("manualAddressFields");
        const addressSelectList = document.getElementById("addressList");
        const findAddressBtn = document.getElementById('findAddressBtn');

        const customJsError = document.createElement("div");
        customJsError.className = "text-xs font-medium sm:text-sm text-danger mt-1";
        document.querySelector("#addressFields").appendChild(customJsError);

        const postcodeMissingError = "Please enter your postcode to find your address";
        const pafSearchError = "Sorry, we can't find the postcode you entered. Please try again, or fill out your address.";

        let addressList = null;

        const sortAlphaNumerically = (a, b) => {
            let addressA = a.line1;
            let addressB = b.line1;

            if (a.line2 !== '') {
                addressA = `${a.line2} ${a.line1}`;
            }
            if (b.line2 !== '') {
                addressB = `${b.line2} ${b.line1}`;
            }

            const aA = addressA.replace(/[^a-zA-Z]/g, '');
            const bA = addressB.replace(/[^a-zA-Z]/g, '');

            if (aA === bA) {
                const aN = parseInt(addressA.replace(/[^0-9]/g, ''), 10);
                const bN = parseInt(addressB.replace(/[^0-9]/g, ''), 10);
                if (isNaN(bN)) {
                    return addressA > addressB ? 1 : -1;
                }
                return aN === bN ? 0 : aN > bN ? 1 : -1;
            } else {
                return aA > bA ? 1 : -1;
            }
        };

        const populateAddressResults = (data) => {
            addressSelectList.length = 1;
            if (data.addresses.length > 0) {
                data.addresses.sort(sortAlphaNumerically);

                addressList = data.addresses;
                addressList.forEach(({ postTown, line1, line2, line3, udprnId }) => {
                    let text = `${line1}, `;
                    if (line2 !== '') {
                        text += `${line2}, `;
                    }
                    if (line3 !== '') {
                        text += `${line3}, `;
                    }
                    text += postTown;
                    addressSelectList.add(new Option(text, udprnId));
                });

                addressSelectList.style.display = "block";
                customJsError.textContent = "";
            } else {
                customJsError.textContent = pafSearchError;
                manualAddressFields.style.display = "block";
            }
        }

        const getAddressesForPostcode = (postcode) => {
            fetch(`/api/book/paf?postcode=${postcode}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(response.statusText);
                    }
                    if (response.status === 204) {
                        throw new Error("No addresses returned by PAF API");
                    }
                    return response.json();
                })
                .then(data => {
                    populateAddressResults(data);
                })
                .catch(err => {
                    console.error(err);
                    customJsError.textContent = pafSearchError;
                    manualAddressFields.style.display = "block";
                });
        };

        function lookupAddress() {
            const postcode = postCode.value;
            if (isEmptyOrSpaces(postcode)) {
                customJsError.textContent = postcodeMissingError;
            } else {
                customJsError.textContent = "";
                getAddressesForPostcode(postcode);
            }
        }

        function addressesListChanged() {
            const selectedUdprnId = addressSelectList.value;
            const selectedAddressObject = addressList.find(address => address.udprnId === selectedUdprnId);

            if (selectedAddressObject) {
                address1.value = selectedAddressObject.line1;
                address2.value = selectedAddressObject.line2;
                town.value = selectedAddressObject.postTown;
                county.value = selectedAddressObject.postTown;
                manualAddressFields.style.display = "block";
            }

            findAddressBtn.style.display = "none";
            addressSelectList.style.display = "none";
        }

        function isEmptyOrSpaces(str) {
            return str === null || str.match(/^ *$/) !== null;
        }
    </script>
@endpush
