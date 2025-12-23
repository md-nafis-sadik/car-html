@extends('layouts.frontend')
@section('head-info')
    <title>Register Now - {{ config('app.name') }} Glasgow</title>
    <meta name="description" content="Register on the {{ config('app.name') }} website." />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('/images/homepage-header.jpeg') }}" />
    <meta property="og:title" content="Register Now - {{ config('app.name') }} Glasgow" />
    <meta property="og:description" content="Register on the {{ config('app.name') }} website." />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />

    <link href="{{ asset('css/chassis/chassis.css') }}" rel="stylesheet" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" />

    <script src="{{ asset('js/chassis/chassis.js') }}"></script>
@endsection
@section('body')
    <body>
    @include('partials.header')
    <header class="subnav ch-bg--white" role="sub-header">
        <div class="ch-container">
            <div class="ch-row">
                <div class="subnav__content ch-display--flex">
                    <div class="subnav__header">
                        <div class="subnav__brand">
                            <h1>Register</h1>
                        </div>
                        <div class="subnav__toggle ch-display--flex md:ch-display--none">
                            <a href="#" class="subnav__button ch-btn ch-btn--sm">Actions</a>
                        </div>
                    </div>
                    <div class="subnav__links ch-display--none md:ch-display--block">
                        <ul class="md:ch-display--flex ch-bt--1 ch-bb--1 ch-bc--grey-3 md:ch-ba--0">

                            <li class="md:ch-mh--2 ch-ph--2 ch-bb--1 ch-bc--grey-2 md:ch-bb--0">
                                <a href="{{ route('login') }}" title="Log in" class="navlink ch-fs--3 ch-text-decoration--none ch-color--ac-black">Log in</a>
                            </li>
                            <li class="md:ch-mh--2 ch-ph--2 ch-bb--1 ch-bc--grey-2 md:ch-bb--0">
                                <a href="{{ route('register') }}" id="registerBtn" title="Register" class="navlink ch-fs--3 ch-text-decoration--none ch-color--ac-black">Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <a class="ch-skip" href="#main">Skip to main content</a>
    <main id="main">
        <div id="main-section" class="ch-bg--white">
            <div id="careers-register" class="ch-pb--10">
                <section>
                    <div class="ch-container">
                        <div class="ch-row sl:ch-ph--1">
                            <div class="sm:ch-col--6 sm:ch-col--offset-3 md:ch-col--8 md:ch-col--offset-0">
                                <h2 class="ch-mt--1 ch-mb--3 ch-fs--4 md:ch-mt--6 md:ch-fs--6 sm:ch-mt--5">Create an account</h2>
                                <div class="ch-display--block ch-mb--2 md:ch-col--6 sm:ch-pl--0 ch-pa--0">
                                    <form method="POST" action="{{ route('register') }}" class="init">
                                        @csrf

                                        <div class="ch-form__group @error('title') ch-form__group--error @enderror">
                                            <label for="title" class="ch-form__control-label ch-mt--2 ch-text--bold">{{ __('Title') }} (required)</label>
                                            @error('title')
                                            <span class="ch-form__control-validation">{{ $message }}</span>
                                            @enderror
                                            <select name="title" id="title" class="ch-form__control" value="{{ old('title') }}" autocomplete="title">
                                                <option @if(old('title') == "Mr") selected @endif value="Mr">Mr</option>
                                                <option @if(old('title') == "Mrs") selected @endif value="Mrs">Mrs</option>
                                                <option @if(old('title') == "Ms") selected @endif value="Ms">Ms</option>
                                                <option @if(old('title') == "Miss") selected @endif value="Miss">Miss</option>
                                                <option @if(old('title') == "Mx") selected @endif value="Mx">Mx</option>
                                                <option @if(old('title') == "Dr") selected @endif value="Dr">Dr</option>
                                                <option @if(old('title') == "Prof") selected @endif value="Prof">Prof</option>
                                            </select>
                                        </div>

                                        <div class="ch-form__group @error('first_name') ch-form__group--error @enderror">
                                            <label class="ch-form__control-label ch-mt--2 ch-text--bold" for="first_name">{{ __('First Name') }} (required)</label>
                                            @error('first_name')
                                            <span class="ch-form__control-validation">{{ $message }}</span>
                                            @enderror
                                            <input type="text" class="ch-form__control" value="{{ old('first_name') }}" id="first_name" name="first_name" maxlength="100" autocomplete="first_name" style="text-transform: capitalize" required/>
                                        </div>


                                        <div class="ch-form__group @error('last_name') ch-form__group--error @enderror">
                                            <label class="ch-form__control-label ch-mt--2 ch-text--bold" for="last_name">{{ __('Last Name') }} (required)</label>
                                            @error('last_name')
                                            <span class="ch-form__control-validation">{{ $message }}</span>
                                            @enderror
                                            <input type="text" class="ch-form__control" value="{{ old('last_name') }}" id="last_name" name="last_name" maxlength="100" autocomplete="last_name"  style="text-transform: capitalize" required/>
                                        </div>

                                        <div class="ch-form__group @error('email') ch-form__group--error @enderror">
                                            <label class="ch-form__control-label ch-mt--2 ch-text--bold" for="email">E-Mail Address</label>
                                            @error('email')
                                            <span class="ch-form__control-validation">{{ $message }}</span>
                                            @enderror
                                            <input type="email" class="ch-form__control" value="{{ old('email') }}" id="email" name="email" maxlength="100" autocomplete="email" required/>
                                        </div>


                                        <div class="ch-form__group @error('phone') ch-form__group--error @enderror">
                                            <label class="ch-form__control-label ch-mt--2 ch-text--bold" for="phone">{{ __('Phone') }} (required)</label>
                                            @error('phone')
                                            <span class="ch-form__control-validation">{{ $message }}</span>
                                            @enderror
                                            <input type="tel" class="ch-form__control" value="{{ old('phone') }}" id="phone" name="phone" maxlength="100" autocomplete="phone" required/>
                                        </div>

                                        <div class="ch-form__group @error('dob') ch-form__group--error @enderror">
                                            <label class="ch-form__control-label ch-mt--2 ch-text--bold" for="dob">{{ __('Date Of Birth (DD/MM/YYYY)') }} (required)</label>
                                            @error('dob')
                                            <span class="ch-form__control-validation">{{ $message }}</span>
                                            @enderror
                                            <input type="date" class="ch-form__control" value="{{ old('dob') }}" id="dob" name="dob" autocomplete="dob" required/>
                                        </div>

                                        <div id="addressFields" style="display: none;">
                                            <div class="ch-form__group @error('address_line_1') ch-form__group--error @enderror">
                                                <label class="ch-form__control-label ch-mt--2 ch-text--bold" for="address_line_1">{{ __('Address Line 1') }} (required)</label>
                                                @error('address_line_1')
                                                <span class="ch-form__control-validation">{{ $message }}</span>
                                                @enderror
                                                <input type="text" class="ch-form__control  @error('address_line_1') is-invalid @enderror" value="{{ old('address_line_1') }}" id="address_line_1" name="address_line_1" maxlength="100" autocomplete="address_line_1" required/>
                                            </div>


                                            <div class="ch-form__group @error('address_line_2') ch-form__group--error @enderror">
                                                <label class="ch-form__control-label ch-mt--2 ch-text--bold" for="address_line_2">{{ __('Address Line 2') }}</label>
                                                @error('address_line_2')<span class="ch-form__control-validation">{{ $message }}</span>@enderror
                                                <input type="text" class="ch-form__control  @error('address_line_2') is-invalid @enderror" value="{{ old('address_line_2') }}" id="address_line_2" name="address_line_2" maxlength="100" autocomplete="address_line_2"/>
                                            </div>

                                            <div class="ch-form__group @error('address_town') ch-form__group--error @enderror">
                                                <label class="ch-form__control-label ch-mt--2 ch-text--bold" for="address_town">{{ __('Town') }} (required)</label>
                                                @error('address_town')<span class="ch-form__control-validation">{{ $message }}</span>@enderror
                                                <input type="text" class="ch-form__control  @error('address_town') is-invalid @enderror" value="{{ old('address_town') }}" id="address_town" name="address_town" maxlength="100" autocomplete="address_town" required/>
                                            </div>

                                            <div class="ch-form__group @error('address_county') ch-form__group--error @enderror">
                                                <label class="ch-form__control-label ch-mt--2 ch-text--bold" for="address_county">{{ __('County') }} (required)</label>
                                                @error('address_county')<span class="ch-form__control-validation">{{ $message }}</span>@enderror
                                                <input type="text" class="ch-form__control  @error('address_county') is-invalid @enderror" value="{{ old('address_county') }}" id="address_county" name="address_county" maxlength="100" autocomplete="address_county"/>
                                            </div>
                                        </div>

                                        <div class="ch-form__group @error('address_postcode') ch-form__group--error @enderror">
                                            <label class="ch-form__control-label ch-mt--2 ch-text--bold" for="address_postcode">{{ __('Postcode') }} (required)</label>
                                            @error('address_postcode')<span class="ch-form__control-validation">{{ $message }}</span>@enderror
                                            <input type="text" oninput="this.value = this.value.toUpperCase()" class="ch-form__control  @error('address_postcode') is-invalid @enderror" value="{{ old('address_postcode') }}" id="address_postcode" name="address_postcode" maxlength="100" autocomplete="address_postcode"/>
                                            <select id="addressList" class="ch-form__control ch-mt--2"  onchange="addressesListChanged()" style="display: none">
                                                <option value="">Choose your address</option>
                                            </select>
                                        </div>

                                        <input type="hidden" value="GB"  id="address_country" name="address_country"/>

                                        <div class="validationStyle" id="postCodeLookupErrorMessage" data-cy="postcodeValidationErrorCustom"></div>

                                        <a class="ch-btn ch-btn--primary ch-mt--1" id="findAddressBtn" onclick="lookupAddress()">Lookup</a>

                                        <div class="ch-form__group @error('password') ch-form__group--error @enderror">
                                            <label class="ch-form__control-label ch-mt--2 ch-text--bold" for="password">{{ __('Password') }}</label>
                                            @error('password')<span class="ch-form__control-validation">{{ $message }}</span>@enderror
                                            <input type="password" class="ch-form__control  @error('password') is-invalid @enderror" id="password" name="password" autocomplete="new-password" required/>
                                        </div>

                                        <div class="ch-form__group @error('password') ch-form__group--error @enderror">
                                            <label class="ch-form__control-label ch-mt--2 ch-text--bold" for="password">{{ __('Confirm Password') }}</label>
                                            @error('password')<span class="ch-form__control-validation">{{ $message }}</span>@enderror
                                            <input type="password" class="ch-form__control  @error('password') is-invalid @enderror" id="password" name="password_confirmation" autocomplete="new-password" required/>
                                        </div>

                                        <div class="ch-form__group @error('g-recaptcha-response') ch-form__group--error @enderror">
                                            <label class="ch-form__control-label ch-mt--2 ch-text--bold" for="address_postcode">Verification Challenge</label>
                                            @error('g-recaptcha-response')<span class="ch-form__control-validation">{{ $message }}</span>@enderror
                                            <div class="g-recaptcha" data-sitekey="{{config('services.recaptcha.key')}}"></div>
                                        </div>

                                        <div class="ch-form__group @error('agreement') ch-form__group--error @enderror">
                                            <input class="ch-checkbox" type="checkbox" name="agreement" id="agreement" required="">
                                            <label class="ch-checkbox__label" for="agreement">
                                                <p class="ch-small ch-mb--0">By signing up, I agree to the <a href="/downloads/Autofusion-Repairs-Terms-And-Conditions.pdf">Terms &amp; Conditions</a>.</p>
                                            </label>
                                        </div>

                                        <input type="submit" class="ch-btn ch-btn--success ch-mt--3 ch-width--12"  value="Register"/>

                                        @if($errors->any())
                                            <div class="ch-alert ch-alert--danger ch-mt--3">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li class="ch-text--bold ch-mb--0">{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        @if (Route::has('login'))
                                            <div class="ch-display--block ch-mt--4">
                                                <a  href="{{ route('login') }}">
                                                    {{ __('Already have an account?') }}
                                                </a>
                                            </div>
                                        @endif
                                    </form>

                                </div>


                            </div>
                        </div>


                    </div>
                </section>
            </div>


        </div>
    </main>

    @include('partials.footer')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script type="text/javascript">
        const postCode = document.getElementById("address_postcode");
        const address1 = document.getElementById("address_line_1");
        const address2 = document.getElementById("address_line_2");
        // const address3 = document.getElementById("addressLine3");
        const town = document.getElementById("address_town");
        const county = document.getElementById("address_county");
        const hiddenAddressDiv = document.getElementById("addressFields");
        const addressSelectList = document.getElementById("addressList");
        const displayAddressInput = document.getElementById("DisplayAddress");
        const continueBtn = document.getElementById('continueButton');
        const findAddressBtn = document.getElementById('findAddressBtn');

        const customJsError = document.getElementById("postCodeLookupErrorMessage");
        const postcodeMissingError = "Please enter your postcode to find your address";
        const pafSearchError =
            "Sorry, we can't find the postcode you entered. Please try again, or fill out your address.";

        let addressList = null;
        hiddenAddressDiv.style.display = "none";

        // Validation
        let inputs = document.querySelectorAll('input:required');
        let form = document.querySelector('form');

        // function validateInputs() {
        //     var disabled = false
        //     inputs.forEach(function (input, index) {
        //         if (input.value === '' || !input.value.replace(/\s/g, '').length) {
        //             disabled = true
        //         }
        //     })
        //     if (disabled) {
        //         continueBtn.setAttribute('disabled', 'disabled')
        //     } else {
        //         continueBtn.removeAttribute('disabled')
        //     }
        // }

        // form.addEventListener('keyup', function (e) {
        //     validateInputs();
        // })

        {{--form.addEventListener('submit', function(ev) {--}}
        {{--    ev.preventDefault();--}}
        {{--    var enteredEmail = document.getElementById('email');--}}
        {{--    var errorText = document.getElementById('val-error-text');--}}
        {{--    if(!enteredEmail.disabled) {--}}
        {{--        $.ajax({--}}
        {{--            type: "POST",--}}
        {{--            url: "/api/auth/validation/email",--}}
        {{--            data: { email: enteredEmail.value},--}}
        {{--            success: function (response) {--}}
        {{--                // console.log(response);--}}
        {{--                if(response.error == true) {--}}
        {{--                    var errEL = document.getElementById('val-errors');--}}
        {{--                    errEL.style.display = "block";--}}
        {{--                    errorText.innerHTML = 'Looks like you already have an account with us. Please login  <a href=\"{{ config('app.url') }}/login\">here</a> to continue.';--}}
        {{--                    continueBtn.setAttribute('disabled', 'disabled');--}}
        {{--                    return false;--}}
        {{--                } else {--}}
        {{--                    //Checkout--}}
        {{--                    form.submit();--}}
        {{--                }--}}
        {{--            },--}}
        {{--            error: function (er) {--}}
        {{--                alert("An error occured.");--}}
        {{--                return false;--}}
        {{--            }--}}
        {{--        });--}}
        {{--    } else {--}}
        {{--        form.submit();--}}
        {{--    }--}}
        {{--    return false;--}}
        {{--});--}}

        function isEmptyOrSpaces(str) {
            return str === null || str.match(/^ *$/) !== null;
        };

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
                data.addresses.sort(function (a, b) {
                    return sortAlphaNumerically(a, b);
                });

                addressList = data.addresses;
                addressList.map(
                    ({ postTown, line1, line2, line3, udprnId }) => {
                        var text = `${line1}, `;
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
            } else {
                customJsError.innerText = pafSearchError;
                hiddenAddressDiv.style.display = "block";
            }
        }

        const getAddressesForPostcode = (postcode) => {
            window.fetch(`/api/book/paf?postcode=${postcode}`)
                .then(handleErrors)
                .then(data => {
                    populateAddressResults(data);
                })
                .catch(err => {
                    console.error(err);
                    customJsError.innerText = pafSearchError;
                    hiddenAddressDiv.style.display = "block";
                });
        };

        function handleErrors(response) {
            if (!response.ok) {
                addressSelectList.style.display = "none";
                throw Error(response.statusText);
            }
            if (response.status === 204) {
                addressSelectList.style.display = "none";
                throw Error("No addresses returned by PAF API");
            }

            return response.json();
        };

        function lookupAddress() {
            const postcode = postCode.value;
            if (isEmptyOrSpaces(postcode)) {
                customJsError.innerText = postcodeMissingError;
            } else {
                customJsError.value = "";
                getAddressesForPostcode(postcode);
                // displayAddressInput.value = true;
            }
        };

        function addressesListChanged() {
            const selectedUdprnId = addressSelectList.value;
            const selectedAddressObject = addressList.find(address => {
                return address.udprnId === selectedUdprnId;
            });

            if (selectedAddressObject !== null && selectedAddressObject !== undefined) {
                console.log(selectedAddressObject);
                address1.value = selectedAddressObject.line1;
                address2.value = selectedAddressObject.line2;
                // address3.value = selectedAddressObject.line3;
                town.value = selectedAddressObject.postTown;
                county.value = selectedAddressObject.postTown;
            }

            // validateInputs();
            findAddressBtn.style.display = "none";
            hiddenAddressDiv.style.display = "block";
            addressSelectList.style.display = "none";
        };
    </script>

    </body>
@endsection
