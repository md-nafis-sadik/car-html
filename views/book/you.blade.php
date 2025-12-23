@extends('layouts.garage-bookings', [
    'stepper_layout' => true,
])
@section('head-info')
    <meta name="description" content="Book MOT & service for your vehicle."/>
    <title>About Yourself - {{ config('app.name') }}</title>
    <link href="{{ asset('css/book/main.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/chassis/chassis.js') }}"></script>
@endsection

@section('main')
    <div class="flex flex-col items-center justify-center mt-16 sm:mt-7">
        @include('components.horizontal-stepper', [
            'name' => 'About You',
            'total' => 6,
            'currentStep' => 5,
        ])

        <section class="bg-white w-full lg:min-h-[calc(100vh-150px)] h-full mt-10">
            <form method="post" action="{{ route('book.service.you.post', ['serviceType' => App\GarageReservation::getCurrentCart()->attributes['bookingType']]) }}" id="service-form">
                @csrf
                <div class="py-10 mx-auto max-w-screen-2xl sm:px-10" data-aos="fade-up">
                    <div class="grid gap-6 sm:grid-cols-12">
                        <div class="col-span-12 md:col-span-8">
                            <div class="pt-9 pb-[50px] px-4 md:px-11 bg-[#F3F4F6] sm:rounded-[14px]">
                                <h5 class="font-epilogue text-3xl sm:text-[35px] text-dark font-black">
                                    Vehicle Owner Details
                                </h5>

                                @if(auth()->check())
                                    <p class="mt-2 mb-10 text-base sm:text-[19px] text-dark text-opacity-70">
                                        Hello {{ auth()->user()->title_last_name }}. As you're already logged in we will use your
                                        account details for this part. You can update your account details <a
                                                class="font-medium text-blue-500 underline transition-all hover:text-blue-400 underline-offset-2"
                                                href="{{ route('account.edit') }}">here</a>.
                                    </p>
                                    <div class="block mb-2 md:w-5/12 sm:pl-0 p-0">
                                        {{--                            <div class="ch-form__group">--}}
                                        {{--                                <label class="ch-form__control-label ch-mt--2" for="DetailsModel_FirstName">Title</label>--}}
                                        {{--                                <span class="ch-form__control-validation field-validation-valid" data-cy="firstNameValidationError" data-valmsg-for="DetailsModel.FirstName" data-valmsg-replace="true"></span>--}}
                                        {{--                                <input type="text" class="ch-form__control inputStyle" value="" autocomplete="off" data-cy="titleInput" data-val="true" data-val-maxlength="The field Title must be a string or array type with a maximum length of '50'." data-val-maxlength-max="50" data-val-required="First Name(s) must be provided" id="titleInput" maxlength="50" name="titleInput" required>--}}
                                        {{--                            </div>--}}

                                        <div class="ch-form__group">
                                            <label for="title" class="ch-form__control-label">Title</label>
                                            <select class="ch-form__control inputStyle !pb-0 !pt-0 !text-black !bg-white" name="title" id="title"
                                                    value="{{ auth()->user()->title }}" autocomplete="title" required disabled>
                                                <option value="{{ auth()->user()->title }}">{{ auth()->user()->title }}</option>
                                            </select>
                                        </div>

                                        <div class="ch-form__group">
                                            <label class="ch-form__control-label ch-mt--2" for="DetailsModel_FirstName">First
                                                Name(s)</label>
                                            <span class="ch-form__control-validation field-validation-valid"
                                                  data-cy="firstNameValidationError" data-valmsg-for="DetailsModel.FirstName"
                                                  data-valmsg-replace="true"></span>
                                            <input type="text" class="ch-form__control inputStyle !text-black !bg-white" value="" autocomplete="off"
                                                   data-cy="firstNameInput" data-val="true"
                                                   data-val-maxlength="The field First Name(s) must be a string or array type with a maximum length of '50'."
                                                   data-val-maxlength-max="50" data-val-required="First Name(s) must be provided"
                                                   id="firstName" maxlength="50" name="firstName"
                                                   placeholder="{{ auth()->user()->first_name }}" disabled required>
                                        </div>

                                        <div class="ch-form__group">
                                            <label class="ch-form__control-label ch-mt--2" for="DetailsModel_Surname">Last
                                                Name</label>
                                            <span class="ch-form__control-validation field-validation-valid"
                                                  data-cy="surnameValidationError" data-valmsg-for="DetailsModel.Surname"
                                                  data-valmsg-replace="true"></span>
                                            <input type="text" class="ch-form__control inputStyle !text-black !bg-white" value="" autocomplete="off"
                                                   data-cy="surnameInput" data-val="true"
                                                   data-val-maxlength="The field Last Name must be a string or array type with a maximum length of '50'."
                                                   data-val-maxlength-max="50" data-val-required="Last Name must be provided"
                                                   id="lastName" maxlength="50" name="lastName"
                                                   placeholder="{{ auth()->user()->last_name }}" disabled required>
                                        </div>

                                        <div class="ch-form__group">
                                            <label class="ch-form__control-label ch-mt--2" for="DetailsModel_Email">E-mail
                                                Address</label>
                                            <span class="ch-form__control-validation field-validation-valid"
                                                  data-cy="emailValidationError" data-valmsg-for="DetailsModel.Email"
                                                  data-valmsg-replace="true"></span>
                                            <input type="email" class="ch-form__control inputStyle !text-black !bg-white" value="" autocomplete="off"
                                                   data-cy="emailInput" data-val="true"
                                                   data-val-email="A valid email address must be provided"
                                                   data-val-maxlength="The field Email must be a string or array type with a maximum length of '100'."
                                                   data-val-maxlength-max="100"
                                                   data-val-required="A valid email address must be provided" id="email"
                                                   maxlength="100" name="email" placeholder="{{ auth()->user()->email }}" disabled
                                                   required>
                                        </div>

                                        {{--                            ch-width--8--}}
                                        <div class="ch-form__group">
                                            <label class="ch-form__control-label ch-mt--2" for="DetailsModel_ContactNumber">Contact
                                                Number</label>
                                            <span class="ch-form__control-validation field-validation-valid"
                                                  data-cy="contactValidationError" data-valmsg-for="DetailsModel.ContactNumber"
                                                  data-valmsg-replace="true"></span>
                                            <input type="tel" class="ch-form__control inputStyle !text-black !bg-white" value="" autocomplete="off"
                                                   data-cy="contactInput" data-val="true"
                                                   data-val-required="A valid contact number must be provided" id="phone"
                                                   name="phone" placeholder="{{ auth()->user()->phone }}" disabled required>
                                        </div>

                                        <div id="addressFields">
                                            <div class="ch-form__group">
                                                <label class="ch-form__control-label ch-mt--2" for="addressLine1">Address line
                                                    1</label>
                                                <span class="ch-form__control-validation field-validation-valid"
                                                      data-cy="line1ValidationError" data-valmsg-for="addressLine1"
                                                      data-valmsg-replace="true"></span>
                                                <input type="text" class="ch-form__control inputStyle !text-black !bg-white" value="" autocomplete="off"
                                                       data-cy="line1Input" data-val="true"
                                                       data-val-maxlength="The field Address line 1 must be a string or array type with a maximum length of '35'."
                                                       data-val-maxlength-max="35"
                                                       data-val-required="Address line 1 must be provided" id="addressLine1"
                                                       maxlength="35" name="addressLine1"
                                                       placeholder="{{ auth()->user()->address_line_1 }}" disabled required>
                                            </div>

                                            <div class="ch-form__group">
                                                <label class="ch-form__control-label ch-mt--2" for="addressLine2">Address line
                                                    2</label>
                                                <input type="text" class="ch-form__control inputStyle !text-black !bg-white" value="" autocomplete="off"
                                                       data-cy="line2Input" data-val="true"
                                                       data-val-maxlength="The field Address line 2 must be a string or array type with a maximum length of '35'."
                                                       data-val-maxlength-max="35" id="addressLine2" maxlength="35"
                                                       name="addressLine2" placeholder="{{ auth()->user()->address_line_2 }}"
                                                       disabled>
                                            </div>

                                            <div class="ch-hide ch-form__group">
                                                <label class="ch-form__control-label ch-mt--2" for="addressLine3">Address line
                                                    3</label>
                                                <input type="text" class="ch-form__control inputStyle !text-black  !bg-white" value="" autocomplete="off"
                                                       data-cy="line3Input" data-val="true"
                                                       data-val-maxlength="The field Address line 3 must be a string or array type with a maximum length of '35'."
                                                       data-val-maxlength-max="35" id="addressLine3" maxlength="35"
                                                       name="addressLine3" placeholder="{{ auth()->user()->address_line_3 }}"
                                                       disabled>
                                            </div>

                                            <div class="ch-form__group">
                                                <label class="ch-form__control-label ch-mt--2" for="addressTown">Town/City</label>
                                                <span class="ch-form__control-validation field-validation-valid"
                                                      data-cy="townValidationError" data-valmsg-for="addressTown"
                                                      data-valmsg-replace="true"></span>
                                                <input type="text" class="ch-form__control inputStyle  !bg-white" value="" autocomplete="off"
                                                       data-cy="townInput" data-val="true"
                                                       data-val-maxlength="The field Town/City must be a string or array type with a maximum length of '35'."
                                                       data-val-maxlength-max="35" data-val-required="Town/City must be provided"
                                                       id="addressTown" maxlength="35" name="addressTown"
                                                       placeholder="{{ auth()->user()->address_town }}" disabled required>
                                            </div>

                                            <div class="ch-form__group">
                                                <label class="ch-form__control-label ch-mt--2"
                                                       for="addressCounty">County/Province</label>
                                                <span class="ch-form__control-validation field-validation-valid"
                                                      data-cy="townValidationError" data-valmsg-for="addressCounty"
                                                      data-valmsg-replace="true"></span>
                                                <input type="text" class="ch-form__control inputStyle !text-black  !bg-white" value="" autocomplete="off"
                                                       data-cy="addressCounty" data-val="true"
                                                       data-val-maxlength="The field County/Province must be a string or array type with a maximum length of '35'."
                                                       data-val-maxlength-max="35"
                                                       data-val-required="County/Province must be provided" id="addressCounty"
                                                       maxlength="35" name="addressCounty"
                                                       placeholder="{{ auth()->user()->address_county }}" disabled required>
                                            </div>
                                        </div>

                                        {{--                            ch-width--5--}}
                                        <div class="ch-form__group">
                                            <label class="ch-form__control-label ch-mt--2" for="addressPostcode">Postcode</label>
                                            <span class="ch-form__control-validation field-validation-valid"
                                                  data-cy="postcodeValidationError" data-valmsg-for="addressPostcode"
                                                  data-valmsg-replace="true"></span>
                                            <div class="validationStyle" id="postCodeLookupErrorMessage"
                                                 data-cy="postcodeValidationErrorCustom"></div>
                                            <input type="text" class="ch-form__control ch-text--uppercase inputStyle !text-black !bg-white" value=""
                                                   autocomplete="off" data-cy="postcodeInput" data-val="true"
                                                   data-val-maxlength="The field Postcode must be a string or array type with a maximum length of '8'."
                                                   data-val-maxlength-max="8" id="addressPostcode" maxlength="8"
                                                   name="addressPostcode" placeholder="{{ auth()->user()->address_postcode }}"
                                                   disabled required>
                                        </div>

                                    </div>

                                @else
                                    <p class="mt-2 mb-10 text-base sm:text-[19px] text-dark text-opacity-70">
                                        Fill in the vehicle owner's details below. If you already have an account with us then <a
                                                class="font-medium text-blue-500 underline transition-all hover:text-blue-400 underline-offset-2"
                                                href="{{ route('login') }}?previous={{ request()->url() }}">login here</a>.
                                    </p>
                                    <div class="block mb-2 md:w-5/12 sm:pl-0 p-0">
                                        {{--                            <div class="ch-form__group">--}}
                                        {{--                                <label class="ch-form__control-label ch-mt--2" for="DetailsModel_FirstName">Title</label>--}}
                                        {{--                                <span class="ch-form__control-validation field-validation-valid" data-cy="firstNameValidationError" data-valmsg-for="DetailsModel.FirstName" data-valmsg-replace="true"></span>--}}
                                        {{--                                <input type="text" class="ch-form__control inputStyle" value="" autocomplete="off" data-cy="titleInput" data-val="true" data-val-maxlength="The field Title must be a string or array type with a maximum length of '50'." data-val-maxlength-max="50" data-val-required="First Name(s) must be provided" id="titleInput" maxlength="50" name="titleInput" required>--}}
                                        {{--                            </div>--}}

                                        <div class="ch-form__group">
                                            <label for="title" class="ch-form__control-label">Title</label>
                                            <select class="ch-form__control inputStyle !pt-0 !pb-0" name="title" id="title" value="Mr" autocomplete="title"
                                                    required>
                                                <option value="Mr">Mr</option>
                                                <option value="Mrs">Mrs</option>
                                                <option value="Ms">Ms</option>
                                                <option value="Miss">Miss</option>
                                                <option value="Mx">Mx</option>
                                                <option value="Dr">Dr</option>
                                                <option value="Prof">Prof</option>
                                            </select>
                                        </div>

                                        <div class="ch-form__group">
                                            <label class="ch-form__control-label ch-mt--2" for="DetailsModel_FirstName">First
                                                Name(s)</label>
                                            <span class="ch-form__control-validation field-validation-valid"
                                                  data-cy="firstNameValidationError" data-valmsg-for="DetailsModel.FirstName"
                                                  data-valmsg-replace="true"></span>
                                            <input type="text" class="ch-form__control inputStyle" value="" autocomplete="off"
                                                   data-cy="firstNameInput" data-val="true"
                                                   data-val-maxlength="The field First Name(s) must be a string or array type with a maximum length of '50'."
                                                   data-val-maxlength-max="50" data-val-required="First Name(s) must be provided"
                                                   id="firstName" maxlength="50" name="firstName" required>
                                        </div>

                                        <div class="ch-form__group">
                                            <label class="ch-form__control-label ch-mt--2" for="DetailsModel_Surname">Last
                                                Name</label>
                                            <span class="ch-form__control-validation field-validation-valid"
                                                  data-cy="surnameValidationError" data-valmsg-for="DetailsModel.Surname"
                                                  data-valmsg-replace="true"></span>
                                            <input type="text" class="ch-form__control inputStyle" value="" autocomplete="off"
                                                   data-cy="surnameInput" data-val="true"
                                                   data-val-maxlength="The field Last Name must be a string or array type with a maximum length of '50'."
                                                   data-val-maxlength-max="50" data-val-required="Last Name must be provided"
                                                   id="lastName" maxlength="50" name="lastName" required>
                                        </div>

                                        <div class="ch-form__group">
                                            <label class="ch-form__control-label ch-mt--2" for="DetailsModel_Email">E-mail
                                                Address</label>
                                            <span class="ch-form__control-validation field-validation-valid"
                                                  data-cy="emailValidationError" data-valmsg-for="DetailsModel.Email"
                                                  data-valmsg-replace="true"></span>
                                            <input type="email" class="ch-form__control inputStyle" value="" autocomplete="off"
                                                   data-cy="emailInput" data-val="true"
                                                   data-val-email="A valid email address must be provided"
                                                   data-val-maxlength="The field Email must be a string or array type with a maximum length of '100'."
                                                   data-val-maxlength-max="100"
                                                   data-val-required="A valid email address must be provided" id="email"
                                                   maxlength="100" name="email" required>
                                        </div>

                                        {{--                            ch-width--8--}}
                                        <div class="ch-form__group">
                                            <label class="ch-form__control-label ch-mt--2" for="DetailsModel_ContactNumber">Contact
                                                Number</label>
                                            <span class="ch-form__control-validation field-validation-valid"
                                                  data-cy="contactValidationError" data-valmsg-for="DetailsModel.ContactNumber"
                                                  data-valmsg-replace="true"></span>
                                            <input type="tel" class="ch-form__control inputStyle" value="" autocomplete="off"
                                                   data-cy="contactInput" data-val="true"
                                                   data-val-required="A valid contact number must be provided" id="phone"
                                                   name="phone" required>
                                        </div>

                                        <div id="addressFields" style="display:none">
                                            <div class="ch-form__group">
                                                <label class="ch-form__control-label ch-mt--2" for="addressLine1">Address line
                                                    1</label>
                                                <span class="ch-form__control-validation field-validation-valid"
                                                      data-cy="line1ValidationError" data-valmsg-for="addressLine1"
                                                      data-valmsg-replace="true"></span>
                                                <input type="text" class="ch-form__control inputStyle" value="" autocomplete="off"
                                                       data-cy="line1Input" data-val="true"
                                                       data-val-maxlength="The field Address line 1 must be a string or array type with a maximum length of '35'."
                                                       data-val-maxlength-max="35"
                                                       data-val-required="Address line 1 must be provided" id="addressLine1"
                                                       maxlength="35" name="addressLine1" required>
                                            </div>

                                            <div class="ch-form__group">
                                                <label class="ch-form__control-label ch-mt--2" for="addressLine2">Address line
                                                    2</label>
                                                <input type="text" class="ch-form__control inputStyle" value="" autocomplete="off"
                                                       data-cy="line2Input" data-val="true"
                                                       data-val-maxlength="The field Address line 2 must be a string or array type with a maximum length of '35'."
                                                       data-val-maxlength-max="35" id="addressLine2" maxlength="35"
                                                       name="addressLine2">
                                            </div>

                                            <div class="ch-hide ch-form__group">
                                                <label class="ch-form__control-label ch-mt--2" for="addressLine3">Address line
                                                    3</label>
                                                <input type="text" class="ch-form__control inputStyle" value="" autocomplete="off"
                                                       data-cy="line3Input" data-val="true"
                                                       data-val-maxlength="The field Address line 3 must be a string or array type with a maximum length of '35'."
                                                       data-val-maxlength-max="35" id="addressLine3" maxlength="35"
                                                       name="addressLine3">
                                            </div>

                                            <div class="ch-form__group">
                                                <label class="ch-form__control-label ch-mt--2" for="addressTown">Town/City</label>
                                                <span class="ch-form__control-validation field-validation-valid"
                                                      data-cy="townValidationError" data-valmsg-for="addressTown"
                                                      data-valmsg-replace="true"></span>
                                                <input type="text" class="ch-form__control inputStyle" value="" autocomplete="off"
                                                       data-cy="townInput" data-val="true"
                                                       data-val-maxlength="The field Town/City must be a string or array type with a maximum length of '35'."
                                                       data-val-maxlength-max="35" data-val-required="Town/City must be provided"
                                                       id="addressTown" maxlength="35" name="addressTown" required>
                                            </div>

                                            <div class="ch-form__group">
                                                <label class="ch-form__control-label ch-mt--2"
                                                       for="addressCounty">County/Province</label>
                                                <span class="ch-form__control-validation field-validation-valid"
                                                      data-cy="townValidationError" data-valmsg-for="addressCounty"
                                                      data-valmsg-replace="true"></span>
                                                <input type="text" class="ch-form__control inputStyle" value="" autocomplete="off"
                                                       data-cy="addressCounty" data-val="true"
                                                       data-val-maxlength="The field County/Province must be a string or array type with a maximum length of '35'."
                                                       data-val-maxlength-max="35"
                                                       data-val-required="County/Province must be provided" id="addressCounty"
                                                       maxlength="35" name="addressCounty" required>
                                            </div>
                                        </div>

                                        {{--                            ch-width--5--}}
                                        <div class="ch-form__group">
                                            <label class="ch-form__control-label ch-mt--2" for="addressPostcode">Postcode</label>
                                            <span class="ch-form__control-validation field-validation-valid"
                                                  data-cy="postcodeValidationError" data-valmsg-for="addressPostcode"
                                                  data-valmsg-replace="true"></span>
                                            <div class="validationStyle" id="postCodeLookupErrorMessage"
                                                 data-cy="postcodeValidationErrorCustom"></div>
                                            <input type="text" class="ch-form__control inputStyle ch-text--uppercase" value=""
                                                   autocomplete="off" data-cy="postcodeInput" data-val="true"
                                                   data-val-maxlength="The field Postcode must be a string or array type with a maximum length of '8'."
                                                   data-val-maxlength-max="8" id="addressPostcode" maxlength="8"
                                                   name="addressPostcode" required>
                                        </div>

                                        <select id="addressList" class="ch-form__control ch-mt--4" onchange="addressesListChanged()"
                                                style="display: none" data-cy="AddressListInput">
                                            <option value="">Choose your address</option>
                                        </select>

                                        <a class="ch-btn ch-btn--primary ch-mt--3" id="findAddressBtn" data-cy="findAddressBtn"
                                           onclick="lookupAddress()">Find Address</a>
                                    </div>
                                @endif


                            </div>
                        </div>


                        @include('book.partials.booking-summary-bar', [
                            'continueText' => '',
                            'continueURL' => route('book'),
                            'continueButton' => 'Continue',
                            'useSubmitButton' => true,
//                            'continueOnClick' => "submitServiceForm();",
                        ])
                    </div>
                </div>
            </form>
        </section>
    </div>

    @push('js')
        <script
                src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
                crossorigin="anonymous"></script>
        <script type="text/javascript">
            const postCode = document.getElementById("addressPostcode");
            const address1 = document.getElementById("addressLine1");
            const address2 = document.getElementById("addressLine2");
            // const address3 = document.getElementById("addressLine3");
            const town = document.getElementById("addressTown");
            const county = document.getElementById("addressCounty");
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

            // Validation
            let inputs = document.querySelectorAll('input:required');
            let form = document.querySelector('form');

            function validateInputs() {
                var disabled = false
                inputs.forEach(function (input, index) {
                    if (input.value === '' || !input.value.replace(/\s/g, '').length) {
                        disabled = true
                    }
                })
                if (disabled) {
                    continueBtn.setAttribute('disabled', 'disabled')
                } else {
                    continueBtn.removeAttribute('disabled')
                }
            }

            form.addEventListener('keyup', function (e) {
                validateInputs();
            })

            form.addEventListener('submit', function (ev) {
                ev.preventDefault();
                var enteredEmail = document.getElementById('email');
                var errorText = document.getElementById('val-error-text');
                if (!enteredEmail.disabled) {
                    $.ajax({
                        type: "POST",
                        url: "/api/auth/validation/email",
                        data: {email: enteredEmail.value},
                        success: function (response) {
                            // console.log(response);
                            if (response.error == true) {
                                var errEL = document.getElementById('val-errors');
                                errEL.style.display = "block";
                                errorText.innerHTML = 'Looks like you already have an account with us. Please login  <a href=\"{{ config('app.url') }}/login\">here</a> to continue.';
                                continueBtn.setAttribute('disabled', 'disabled');
                                return false;
                            } else {
                                //Checkout
                                form.submit();
                            }
                        },
                        error: function (er) {
                            alert("Unable to proceed with checkout. Error #{{ config('app.name') }}-ERR-V-1");
                            return false;
                        }
                    });
                } else {
                    form.submit();
                }
                return false;
            });

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
                        ({postTown, line1, line2, line3, udprnId}) => {
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
                window.fetch(`{{ config('app.url') }}/api/book/paf?postcode=${postcode}`)
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

                validateInputs();
                findAddressBtn.style.display = "none";
                hiddenAddressDiv.style.display = "block";
                addressSelectList.style.display = "none";
            };
        </script>

        <script type="text/javascript">

            document.addEventListener("DOMContentLoaded", function (event) {
                var cancelButton = document.querySelectorAll("[id^='cancelButton']");
                var cancelModal = document.getElementById("cancelModal");
                var goBackButton = document.getElementById("goBackButton");
                if (cancelButton && cancelModal && goBackButton) {
                    cancelButton.forEach(function (btn) {
                        btn.addEventListener("click",
                            function () {
                                cancelModal.style.display = "block";
                            });
                    });
                    goBackButton.addEventListener("click",
                        function () {
                            cancelModal.style.display = "none";
                        });
                }

            });
        </script>

        <script type="text/javascript">

            const isVisible = function (elem) {
                return !!(elem.offsetWidth || elem.offsetHeight || elem.getClientRects().length);
            };


            (function () {
                if ("False" === "True") {
                    const validationErrors = document.getElementsByClassName("ch-form__control-validation");

                    for (let i = 0; i < validationErrors.length; i++) {
                        const currentItem = validationErrors[i];
                        const display = window.getComputedStyle(currentItem, null).display;
                        if (display === 'block') {
                            console.log("Found it");
                            console.log(`${currentItem.id}`);
                            console.log(currentItem.id !== "dateValidationMessage");

                            if (currentItem.id !== "dateValidationMessage") {
                                window.scrollTo(0, document.body.scrollHeight);
                            }

                            currentItem.focus();
                            return;
                        }
                    }
                    ;
                }
            })();


        </script>
    @endpush
@endsection
