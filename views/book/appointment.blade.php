@extends('layouts.garage-bookings', [
    'stepper_layout' => true,
])
@section('head-info')
    <meta name="description" content="Book MOT & service for your vehicle."/>
    <title>Book Appointment - {{ config('app.name') }}</title>
    <link href="{{ asset('css/book/main.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/chassis/chassis.js') }}"></script>
@endsection

@section('main')
    <div class="flex flex-col items-center justify-center mt-16 sm:mt-7">
        @include('components.horizontal-stepper', [
            'name' => 'Choose Appointment',
            'total' => 6,
            'currentStep' => 4,
        ])

        <section class="bg-white w-full lg:min-h-[calc(100vh-150px)] h-full mt-10">
            <form method="post" action="{{ route('book.service.appointment.post', ['serviceType' => App\GarageReservation::getCurrentCart()->attributes['bookingType']]) }}" id="service-form">
                @csrf
                <div class="py-10 mx-auto max-w-screen-2xl sm:px-10" data-aos="fade-up">
                    <div class="grid gap-6 sm:grid-cols-12">
                        <div class="col-span-12 md:col-span-8">
                            <div class="pt-9 pb-[50px] px-4 md:px-11 bg-[#F3F4F6] sm:rounded-[14px]">
                                <h5 class="font-epilogue text-3xl sm:text-[35px] text-dark font-black">
                                    Choose when you'd like to book
                                </h5>
                                <p class="mt-2 mb-10 text-base sm:text-[19px] text-dark text-opacity-70">
                                    Please choose your preferred date and
                                    time
                                </p>


                                <div >
                                    <div class="ch-form__group">
                                        <span class="ch-form__control-validation field-validation-valid" data-cy="dateValidationError"
                                              id="dateValidationMessage" data-valmsg-for="dropoffDate"
                                              data-valmsg-replace="true"></span>
                                        <div class="ch-datepicker" data-cy="calendar">
                                            <div class="ch-datepicker__month">
                                                <button type="button" class="ch-datepicker__month__previous" data-cy="calendarPrevBtn">
                                                    Previous month
                                                </button>
                                                <span class="ch-datepicker__month__name" data-cy="calendarMonthName">April 2021</span>
                                                <button type="button" class="ch-datepicker__month__next" data-cy="calendarNextBtn">Next
                                                    month
                                                </button>
                                            </div>
                                            <table class="ch-datepicker__calendar">
                                                <thead>
                                                <tr class="ch-datepicker__days">
                                                    <th class="ch-datepicker__day">M</th>
                                                    <th class="ch-datepicker__day">T</th>
                                                    <th class="ch-datepicker__day">W</th>
                                                    <th class="ch-datepicker__day">T</th>
                                                    <th class="ch-datepicker__day">F</th>
                                                    <th class="ch-datepicker__day">S</th>
                                                    <th class="ch-datepicker__day">S</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="ch-datepicker__date ch-datepicker__date--unavailable">29</td>
                                                    <td class="ch-datepicker__date ch-datepicker__date--unavailable">30</td>
                                                    <td class="ch-datepicker__date ch-datepicker__date--unavailable">31</td>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-01">1</time>
                                                    </td>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-02">2</time>
                                                    </td>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-03">3</time>
                                                    </td>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-04">4</time>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-05">5</time>
                                                    </td>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-06">6</time>
                                                    </td>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-07">7</time>
                                                    </td>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-08">8</time>
                                                    </td>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-09">9</time>
                                                    </td>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-10">10</time>
                                                    </td>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-11">11</time>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-12">12</time>
                                                    </td>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-13">13</time>
                                                    </td>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-14">14</time>
                                                    </td>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-15">15</time>
                                                    </td>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-16">16</time>
                                                    </td>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-17">17</time>
                                                    </td>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-18">18</time>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-19">19</time>
                                                    </td>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-20">20</time>
                                                    </td>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-21">21</time>
                                                    </td>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-22">22</time>
                                                    </td>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-23">23</time>
                                                    </td>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-24">24</time>
                                                    </td>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-25">25</time>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-26">26</time>
                                                    </td>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-27">27</time>
                                                    </td>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-28">28</time>
                                                    </td>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-29">29</time>
                                                    </td>
                                                    <td class="ch-datepicker__date">
                                                        <time datetime="2021-04-30">30</time>
                                                    </td>
                                                    <td class="ch-datepicker__date ch-datepicker__date--unavailable">1</td>
                                                    <td class="ch-datepicker__date ch-datepicker__date--unavailable">2</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table class="loader-container" data-cy="calendarLoader" style="display: none">
                                                <tbody>
                                                <tr>
                                                    <td colspan="7">
                                                        <div class="loader"></div>
                                                        <p class="ch-fs--1">Finding available dates</p>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <input type="hidden" data-cy="dateInput" data-val="true"
                                               data-val-required="Please select a date" id="dropoffDate" name="dropoffDate" required/>
                                    </div>

                                    <div id="dropOffTimeLoader" class="md:ch-width--5 ch-mt--3"
                                         style="display: none; text-align: center">
                                        <div class="loader"></div>
                                        <p class="ch-fs--1">Finding available drop off times</p>
                                    </div>

                                    <div id="dropOffTimeContainer" class="md:ch-width--5 ch-mt--5 ch-form__group" style="display: none">
                                        <label class="ch-form__control-label" for="dropoffTime">Choose your drop off time</label>
                                        <span class="ch-form__control-validation field-validation-valid"
                                              data-cy="dropOffValidationError" id="dropOffTimeValidationMessage"
                                              data-valmsg-for="dropOffTime" data-valmsg-replace="true"></span>
                                        <input type="hidden" id="dropOffTimeInput" data-cy="dropOffTimeInput" data-val="true"
                                               data-val-required="Please select a time" name="dropoffTime" value="11:45" required/>
                                        <select id="dropOffTimeSelect" class="ch-form__control ch-list" data-cy="dropOffDropdown">
                                        </select>
                                    </div>

                                    <div id="pickUpTimeLoader" class="md:ch-width--5 ch-mt--3"
                                         style="display: none; text-align: center">
                                        <div class="loader"></div>
                                        <p class="ch-fs--1">Finding available pick up times</p>
                                    </div>

                                    <div id="pickUpTimeContainer" class="md:ch-width--5 ch-mt--5 ch-form__group--error ch-form__group"
                                         style="display: none">
                                        <label class="ch-form__control-label" for="PickUpTime">Choose your preferred pick up
                                            time</label>
                                        <span class="ch-form__control-validation field-validation-error" data-cy="pickUpValidationError"
                                              data-valmsg-for="PickUpTime" data-valmsg-replace="true">Please select a time</span>
                                        <input type="hidden" id="pickUpTimeInput" data-cy="pickUpTimeInput"
                                               class="input-validation-error" data-val="true" data-val-required="Please select a time"
                                               name="PickUpTime" value=""/>
                                        <select id="pickUpTimeSelect" class="ch-form__control ch-list" data-cy="pickUpDropdown">
                                        </select>
                                    </div>
                                </div>






                            </div>
                        </div>


                        @include('book.partials.booking-summary-bar', [
                            'continueText' => 'Thanks, now we need your contact details',
                            'continueURL' => route('book'),
                            'continueButton' => 'Continue',
                            'continueOnClick' => "submitServiceForm();",
                        ])
                    </div>
                </div>
            </form>
        </section>
    </div>

    @push('js')


        <script type="text/javascript" src="{{ asset('js/book/calendar.js') }}"></script>
        <script type="text/javascript">
            let dropOffDateCalendar = calendar();
            var dateFromModel = new Date(new Date().getTime() + (1000 * 60 * 60 * 24 * 14));
            var initialSelectedDate = dateFromModel.length > 0 ? new Date(dateFromModel) : null;

            const dateInput = document.getElementById("dropoffDate");
            const dropOffTimeInput = document.getElementById("dropOffTimeInput");
            const dropOffTimeSelectList = document.getElementById("dropOffTimeSelect");
            const pickUpTimeInput = document.getElementById("pickUpTimeInput");
            const pickUpTimeSelectList = document.getElementById("pickUpTimeSelect");
            setContinueDisabled(true);

            function resetSelect(selectElement) {
                selectElement.innerHTML = "";
                const option = document.createElement("option");
                option.value = "";
                option.text = "Select one...";
                selectElement.add(option);
            }

            function handleErrors(response) {
                if (!response.ok) {
                    throw Error(response.statusText);
                }
                return response.json();
            }

            function setDropOffTimesLoading(loading) {
                document.getElementById("dropOffTimeLoader").style.display = loading ? "block" : "none";
                document.getElementById("dropOffTimeContainer").style.display = loading ? "none" : "block";
            }

            function setPickUpTimesLoading(loading) {
                document.getElementById("pickUpTimeLoader").style.display = loading ? "block" : "none";
                document.getElementById("pickUpTimeContainer").style.display = loading ? "none" : "block";
            }

            function setContinueDisabled(bool) {
                document.getElementById("continueButton").disabled = bool;
            }

            function setInitialDate(date) {
                const lastDateOfMonth = new Date(date.getFullYear(), date.getMonth() + 1, 0);
                if (date.getDate() >= lastDateOfMonth.getDate() - 2) {
                    date = new Date(date.getFullYear(), date.getMonth() + 1, 1);
                }
                return date;
            }

            function onDateSelected(date, isInitialLoad) {
                setContinueDisabled(true);

                const dateStr = date.toISOString().substring(0, 10);

                if (!isInitialLoad && dateStr === dateInput.value) {
                    return;
                }

                dateInput.value = dateStr;

                if (!isInitialLoad) {
                    dropOffTimeInput.value = "";
                    pickUpTimeInput.value = "";
                }

                setDropOffTimesLoading(true);

                fetch(`/api/book/appointments/dropoffTimes?handler=DropOffTimes&date=${dateStr}&product={{ json_encode($products) }}&category={{ App\GarageReservation::getCurrentCart()->attributes['bookingType'] }}`)
                    .then(handleErrors)
                    .then(data => {
                        resetSelect(dropOffTimeSelectList);
                        data.map(dropOffSlot => {
                            var option = document.createElement("option");
                            option.value = dropOffSlot.value;
                            option.text = dropOffSlot.text;
                            if (dropOffTimeInput.value !== "" && dropOffTimeInput.value === dropOffSlot.value) {
                                option.selected = true;
                            }
                            dropOffTimeSelectList.add(option);
                        });

                        setDropOffTimesLoading(false);
                    });

                if (dropOffTimeInput.value !== "") {
                    // fetch(`?handler=PickUpTimes&date=${dateStr}&dropOffTime=${dropOffTimeInput.value}`)
                    //     .then(handleErrors)
                    //     .then(data => {
                    //         resetSelect(pickUpTimeSelectList);
                    //         data.map(pickUpSlot => {
                    //             var option = document.createElement("option");
                    //             option.value = pickUpSlot.value;
                    //             option.text = pickUpSlot.text;
                    //             if (pickUpTimeInput.value !== "" && pickUpTimeInput.value === pickUpSlot.value) {
                    //                 option.selected = true;
                    //             }
                    //             pickUpTimeSelectList.add(option);
                    //         });
                    //
                    //         setPickUpTimesLoading(false);
                    //     });
                } else {
                    document.getElementById("pickUpTimeContainer").style.display = "none";
                }
            }

            function onMonthChanged(dateStr, onFinishedLoading) {
                fetch(`/api/book/appointments/availability?handler=Availability&date=${dateStr}&product={{ json_encode($products) }}&category={{ App\GarageReservation::getCurrentCart()->attributes['bookingType'] }}`)
                    .then(handleErrors)
                    .then(data => {
                        for (const date of data.dates) {
                            if (!date.available) {
                                dropOffDateCalendar.setUnavailable(new Date(`${date.date}`));
                            }
                        }

                        onFinishedLoading();
                    });
            }

            function onDropOffTimeSelected() {
                const date = dateInput.value;
                const dropOffTime = dropOffTimeInput.value;

                // setPickUpTimesLoading(true);
                setContinueDisabled(false);

                // fetch(`?handler=PickUpTimes&date=${date}&dropOffTime=${dropOffTime}`)
                //     .then(handleErrors)
                //     .then(data => {
                //         resetSelect(pickUpTimeSelectList);
                //         data.map(pickUpSlot => {
                //             var option = document.createElement("option");
                //             option.value = pickUpSlot.value;
                //             option.text = pickUpSlot.text;
                //             if (pickUpTimeInput.value !== "" && pickUpTimeInput.value === pickUpSlot.value) {
                //                 option.selected = true;
                //             }
                //             pickUpTimeSelectList.add(option);
                //         });
                //
                //         setPickUpTimesLoading(false);
                //     });
            }

            dropOffTimeSelectList.addEventListener("change",
                function (e) {
                    dropOffTimeInput.value = e.target.value;
                    onDropOffTimeSelected();
                });

            pickUpTimeSelectList.addEventListener("change",
                function (e) {
                    pickUpTimeInput.value = e.target.value;
                });

            dropOffDateCalendar.init({
                onDateSelected,
                onMonthChanged,
                setInitialDate,
                initialSelectedDate,
                monthsAvailableForward: 6,
                monthsAvailableBackward: 0
            });
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
