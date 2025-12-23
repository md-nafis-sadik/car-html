<div class="ch-card ch-color--ac-black md:ch-display--block">
    {{--                            ch-display--none--}}
    <div class="ch-card__content ch-bg--grey-2 ch-card__content--compact">
        <h3 class="ch-mt--2">Booking summary</h3>
    </div>

    <style>
        html, body {
            height: 100%; /* Needed for container's min-height  */
        }
    </style>

    <div class="ch-card__content">
        <div style="display: flex; justify-content: space-between">
            <p class="ch-mb--0 sm:ch-fs--3 fs-18 ch-color--grey-6">Your vehicle</p>
            <a data-cy="vehicleEditLink" href="{{ route('book') }}">Edit</a>
        </div>
        <p class="ch-display--block ch-fs--4 ch-text--bold ch-mb--1">{{ json_decode(App\GarageReservation::getCurrentCart()->attributes['vehicleDetails'])->DataItems->ClassificationDetails->Dvla->Make }}  {{ json_decode(App\GarageReservation::getCurrentCart()->attributes['vehicleDetails'])->DataItems->ClassificationDetails->Dvla->Model }}</p>
        <span class="ch-chip ch-chip--lg ch-chip--yellow ch-mb--1 ch-mr--1">{{ json_decode(App\GarageReservation::getCurrentCart()->attributes['vehicleDetails'])->DataItems->VehicleRegistration->Vrm }}</span>

        @if(App\GarageReservation::getCurrentCart()->attributes['diagnosticSelected'] || App\GarageReservation::getCurrentCart()->attributes['serviceRequired'] || App\GarageReservation::getCurrentCart()->attributes['motRequired'] || App\GarageReservation::getCurrentCart()->attributes['trackerSelected'] || App\GarageReservation::getCurrentCart()->attributes['wheelAlignmentSelected'])
            <hr class="ch-mv--3 ch-bg--grey-3">
            <div style="display: flex; justify-content: space-between">
                <p class="ch-mb--0 fs-18 ch-color--grey-6">Description of work</p>
                @if(App\GarageReservation::getCurrentCart()->attributes['bookingType'] == "mot")
                    <a data-cy="serviceEditLink"
                       href="{{ route('book.service.service', ['serviceType' => App\GarageReservation::getCurrentCart()->attributes['bookingType']]) }}">Edit</a>
                @elseif(App\GarageReservation::getCurrentCart()->attributes['bookingType'] == "trackers")
                    <a data-cy="serviceEditLink"
                       href="{{ route('book.service.trackers', ['serviceType' => App\GarageReservation::getCurrentCart()->attributes['bookingType']]) }}">Edit</a>
                @elseif(App\GarageReservation::getCurrentCart()->attributes['bookingType'] == "wheel-alignment")
                    <a data-cy="serviceEditLink"
                       href="{{ route('book.service.wheel-alignment', ['serviceType' => App\GarageReservation::getCurrentCart()->attributes['bookingType']]) }}">Edit</a>
                @endif
            </div>
            <div class="ch-mb--2">
                @if(App\GarageReservation::getCurrentCart()->attributes['diagnosticSelected'])
                    <div class="ch-mb--2">
                        <p class="ch-display--block ch-fs--4 sm:fs-18 ch-text--bold ch-mb--0">{{ App\Product::getName(App\GarageReservation::getCurrentCart()->attributes['diagnosticSelected']) }}</p>
                    </div>
                @endif
                @if(App\GarageReservation::getCurrentCart()->attributes['wheelAlignmentSelected'])
                    <div class="ch-mb--2">
                        <p class="ch-display--block ch-fs--4 sm:fs-18 ch-text--bold ch-mb--0">{{ App\Product::getName(App\GarageReservation::getCurrentCart()->attributes['wheelAlignmentSelected']) }}</p>
                    </div>
                @endif
                @if(App\GarageReservation::getCurrentCart()->attributes['trackerSelected'])
                    <div class="ch-mb--2">
                        <p class="ch-display--block ch-fs--4 sm:fs-18 ch-text--bold ch-mb--0">{{ App\Product::getName(App\GarageReservation::getCurrentCart()->attributes['trackerSelected']) }}</p>
                    </div>
                @endif
                @if(App\GarageReservation::getCurrentCart()->attributes['trackerSubscriptionSelected'])
                    <p class="ch-display--block ch-fs--4 ch-text--bold ch-mb--0">{{ App\Product::getName(App\GarageReservation::getCurrentCart()->attributes['trackerSubscriptionSelected'])  }}</p>
                @endif
                @if(App\GarageReservation::getCurrentCart()->attributes['immobilisationSelected'])
                    <p class="ch-display--block ch-fs--4 ch-text--bold ch-mb--0">+ Immobiliser</p>
                @endif
                @if(App\GarageReservation::getCurrentCart()->attributes['serviceSelected'])
                    <div class="ch-mb--2">
                        <p class="ch-display--block ch-fs--4 sm:fs-18 ch-text--bold ch-mb--0">{{ App\Product::getName(App\GarageReservation::getCurrentCart()->attributes['serviceSelected']) }}</p>
                    </div>
                @endif
                @if(App\GarageReservation::getCurrentCart()->attributes['motSelected'])
                    <p class="ch-display--block ch-fs--4 ch-text--bold ch-mb--0">{{ App\Product::getName(App\GarageReservation::getCurrentCart()->attributes['motSelected']) }}</p>
                @endif
            </div>

            @if(App\GarageReservation::getCurrentCart()->attributes['vehicleMileage'])
                <p class="ch-mb--0 fs-18 ch-color--grey-6">Mileage</p>
                <p class="ch-display--block ch-fs--4 ch-text--bold ch-mb--1">{{ App\GarageReservation::getCurrentCart()->attributes['vehicleMileage'] }}</p>
            @endif
            @if(App\GarageReservation::getCurrentCart()->attributes['branchSelected'])
                <hr class="ch-mv--3 ch-bg--grey-3">
                <div style="display: flex; justify-content: space-between">
                    <p class="ch-mb--0 fs-18 ch-color--grey-6">When and where</p>
                    <a data-cy="branchEditLink"
                       href="{{ route('book.service.select-branch', ['serviceType' => App\GarageReservation::getCurrentCart()->attributes['bookingType']]) }}">Edit</a>
                </div>

                @if(App\GarageReservation::getCurrentCart()->attributes['branchSelected'] == 1)
                    <p class="ch-display--block ch-fs--4 ch-text--bold ch-mb--0">{{ \App\Location::getName(App\GarageReservation::getCurrentCart()->attributes['branchSelected']) }}</p>
                @endif

                @if(App\GarageReservation::getCurrentCart()->attributes['dropoffDate'])
                    <p class="ch-display--block ch-fs--4 ch-mb--0">{{ Carbon\Carbon::parse(App\GarageReservation::getCurrentCart()->attributes['dropoffDate'])->format('jS M Y')  }}</p>
                @endif

                @if(App\GarageReservation::getCurrentCart()->attributes['dropoffTime'])
                    <p class="ch-mb--0 fs-18 ch-color--grey-6 ch-mt--2">Drop-off Time</p>
                    <p class="ch-display--block ch-fs--4 ch-mb--0">{{ App\GarageReservation::getCurrentCart()->attributes['dropoffTime'] }}</p>
                @endif

                @if(App\GarageReservation::getCurrentCart()->price)
                    <hr class="ch-mv--3 ch-bg--grey-3">
                    <p class="ch-mb--n2 ch-fs--5 ch-text--bold">Total</p>
                    <div class="ch-align-items--center ch-display--flex">
                        <p class="ch-mt--1 ch-mb--0 ch-fs--2 ch-color--grey-6">Incl. VAT</p>
                        <span class="ch-color--ac-pricing ch-text--bold ch-fs--6 ch-ml--auto ch-mt--n1"
                              id="TotalCost">£{{ number_format(App\GarageReservation::getCurrentCart()->price, 2) }}</span>
                    </div>
                @endif


                {{--                                        <p class="ch-display--block ch-fs--4 ch-mb--0">Friday 28th January</p>--}}
                {{--                                        <p class="ch-mb--0 fs-18 ch-color--grey-6 ch-mt--2">Drop-off</p>--}}
                {{--                                        <p class="ch-display--block ch-fs--4 ch-mb--0">8:00 am</p>--}}
                {{--                                        <p class="ch-mb--0 fs-18 ch-color--grey-6 ch-mt--2">Preferred pick-up</p>--}}
                {{--                                        <p class="ch-display--block ch-fs--4 ch-mb--0">4:15 pm</p>--}}
            @endif

        @endif

    </div>
</div>
