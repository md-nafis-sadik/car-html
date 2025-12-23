@extends('layouts.garage-bookings', [
    'stepper_layout' => true,
])
@section('head-info')
    <meta name="description" content="Book MOT & service for your vehicle."/>
    <title>Select Branch - {{ config('app.name') }}</title>
@endsection

@section('main')
    <div class="flex flex-col items-center justify-center mt-16 sm:mt-7">
        @include('components.horizontal-stepper', [
            'name' => 'Service Branch',
            'total' => 6,
            'currentStep' => 3,
        ])

        <section class="bg-white w-full lg:min-h-[calc(100vh-150px)] h-full mt-10">
            <form method="POST" action="{{ route('book.service.select-branch.post', ['serviceType' => App\GarageReservation::getCurrentCart()->attributes['bookingType']]) }}" id="service-form">
                @csrf
                <div class="py-10 mx-auto max-w-screen-2xl sm:px-10" data-aos="fade-up">
                    <div class="grid gap-6 sm:grid-cols-12">
                        <div class="col-span-12 md:col-span-8">
                            <div class="pt-9 pb-[50px] px-4 md:px-11 bg-[#F3F4F6] sm:rounded-[14px]">
                                <h5 class="font-epilogue text-3xl sm:text-[35px] text-dark font-black">
                                    Tell us where you are to find a service branch
                                </h5>
                                <p class="mt-2 mb-10 text-base sm:text-[19px] text-dark text-opacity-70">
                                    Choose the location closest to you
                                </p>

                                <div class="flex flex-col gap-4">
                                    @foreach($locations as $opt)
                                        @component('components.input-radio')
                                            @slot('id', $opt->id)
                                            @slot('name', 'branchSelect[]')
                                            @slot('value', $opt->id)
                                            @if ($loop->first)@slot('checked', 'checked') @endif
                                            <div>
                                                <p class="text-[19px] font-semibold text-dark">
                                                    {{ $opt->name }}
                                                </p>
{{--                                                <p class="text-primary font-medium text-[15px] mt-1">--}}
{{--                                                    0 miles away--}}
{{--                                                </p>--}}
                                            </div>
                                        @endcomponent
                                    @endforeach
                                </div>
{{--                                <p class="mt-5 text-sm text-[#FF5353] font-medium">--}}
{{--                                    Choose the best option for your vehicle--}}
{{--                                </p>--}}
                            </div>
                        </div>

                        @include('book.partials.booking-summary-bar', [
                            'continueText' => 'Great, next you can choose a date and time',
                            'continueURL' => '#',
                            'continueButton' => 'Continue',
                            'continueOnClick' => "submitServiceForm();",
                        ])
                    </div>
                </div>
            </form>
        </section>
    </div>

    @push('js')
        <script type="text/javascript">
            function initMap() {
                var input = document.getElementById('locationInput');
                var autocomplete = new google.maps.places.Autocomplete(input);
                autocomplete.addListener('place_changed', function () {
                    var place = autocomplete.getPlace();
                    console.log(place);
                    //Perform search

                    var location1lat = 55.8939481;
                    var location1lng = -4.3958794;

                    var distance = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(place.geometry.location.lat(), place.geometry.location.lng()), new google.maps.LatLng(location1lat, location1lng));
                    var distance_miles = distance * 0.000621371192;
                    document.getElementById("location-1-distance").innerText = distance_miles.toFixed(0) + " miles away";
                });
            }

            document.addEventListener("DOMContentLoaded", function (event) {
                initMap();
            });
        </script>
    @endpush
@endsection
