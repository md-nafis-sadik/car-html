@props([
    'continueText' => '',
    'continueURL' => '#',
    'continueOnClick' => '',
    'continueButton' => 'Continue',
    'useSubmitButton' => false,
])
<div class="col-span-12 px-4 md:col-span-4 sm:px-0">
    <div class="py-4 sm:py-8 sm:px-[14px] rounded-[20px] bg-[#2C2F36]"
          data-aos="fade-up">
        <p class="text-lg font-semibold text-primary px-4 sm:px-[10px] mb-6">
            Booking Summary
        </p>

        <div class="bg-white sm:rounded-[14px] p-5 py-4 border border-[#E1E1E1]">
           <div id="vehicle">
               <div class="flex items-center justify-between gap-4 mb-4">
                   <p class="text-sm font-medium text-dark text-opacity-60">
                       Your vehicle
                   </p>
                   <a id="vehicleEditLink" href="{{ route('book') }}"
                      class="py-1 px-[9px] font-medium text-sm bg-[#0099D6] bg-opacity-20 text-[#146b90] rounded-[5px] text-center">
                       Edit
                   </a>
               </div>

               <p class="font-semibold text-base text-dark mb-[10px]">
                   {{ json_decode(App\GarageReservation::getCurrentCart()->attributes['vehicleDetails'])->DataItems->ClassificationDetails->Dvla->Make }}  {{ json_decode(App\GarageReservation::getCurrentCart()->attributes['vehicleDetails'])->DataItems->ClassificationDetails->Dvla->Model }}
               </p>
               <p
                       class="py-[6px] px-[10px] w-max text-xs font-semibold text-white tracking-[2px] rounded-md bg-primary">
                   {{ json_decode(App\GarageReservation::getCurrentCart()->attributes['vehicleDetails'])->DataItems->VehicleRegistration->Vrm }}
               </p>
           </div>

            <!-- Works -->
            @if(App\GarageReservation::getCurrentCart()->attributes['serviceRequired'] || App\GarageReservation::getCurrentCart()->attributes['motRequired'] || App\GarageReservation::getCurrentCart()->attributes['trackerSelected'] || App\GarageReservation::getCurrentCart()->attributes['wheelAlignmentSelected'] || App\GarageReservation::getCurrentCart()->attributes['diagnosticSelected'])
            <div id="works" class="mt-4 pt-3 mb-0 pb-0 border-t border-1 ">
               <div class="flex items-center justify-between gap-4 mb-4">
                   <p class="text-sm font-medium text-dark text-opacity-60">
                       Description of work
                   </p>

                   @if(App\GarageReservation::getCurrentCart()->attributes['bookingType'] == "mot")
                      <a id="serviceEditLink" href="{{ route('book.service.service', ['serviceType' => App\GarageReservation::getCurrentCart()->attributes['bookingType']]) }}"
                         class="py-1 px-[9px] font-medium text-sm bg-[#0099D6] bg-opacity-20 text-[#146b90] rounded-[5px] text-center">
                          Edit
                      </a>
                   @elseif(App\GarageReservation::getCurrentCart()->attributes['bookingType'] == "trackers")
                       <a id="serviceEditLink" href="{{ route('book.service.trackers', ['serviceType' => App\GarageReservation::getCurrentCart()->attributes['bookingType']]) }}"
                          class="py-1 px-[9px] font-medium text-sm bg-[#0099D6] bg-opacity-20 text-[#146b90] rounded-[5px] text-center">
                           Edit
                       </a>
                   @elseif(App\GarageReservation::getCurrentCart()->attributes['bookingType'] == "wheel-alignment")
                       <a id="serviceEditLink" href="{{ route('book.service.wheel-alignment', ['serviceType' => App\GarageReservation::getCurrentCart()->attributes['bookingType']]) }}"
                          class="py-1 px-[9px] font-medium text-sm bg-[#0099D6] bg-opacity-20 text-[#146b90] rounded-[5px] text-center">
                           Edit
                       </a>
                   @endif
               </div>

                @php
                    $cart = App\GarageReservation::getCurrentCart()->attributes;
                    $selectedItems = [];

                    if ($cart['diagnosticSelected']) {
                        $selectedItems[] = 'diagnosticSelected';
                    }
                    if ($cart['wheelAlignmentSelected']) {
                        $selectedItems[] = 'wheelAlignmentSelected';
                    }
                    if ($cart['trackerSelected']) {
                        $selectedItems[] = 'trackerSelected';
                    }
                    if ($cart['trackerSubscriptionSelected']) {
                        $selectedItems[] = 'trackerSubscriptionSelected';
                    }
                    if ($cart['immobilisationSelected']) {
                        $selectedItems[] = 'immobilisationSelected';
                    }
                    if ($cart['serviceSelected']) {
                        $selectedItems[] = 'serviceSelected';
                    }
                    if ($cart['motSelected']) {
                        $selectedItems[] = 'motSelected';
                    }
                @endphp

                @foreach ($selectedItems as $index => $item)
                    <p class="text-base font-semibold sm:text-lg text-dark">
                        @if($item == 'immobilisationSelected')
                            + Immobiliser
                        @else
                            {{ App\Product::getName($cart[$item]) }}
                        @endif
                    </p>

{{--                    @if ($index < count($selectedItems) - 1)--}}
{{--                        <span class="text-opacity-30 text-dark">|</span>--}}
{{--                    @endif--}}
                @endforeach


                @if(App\GarageReservation::getCurrentCart()->attributes['vehicleMileage'])
                    <p class="text-sm font-medium text-dark text-opacity-60 mt-3">
                       Mileage
                    </p>
                    <p class="ch-display--block ch-fs--4 ch-text--bold ch-mb--1">{{ App\GarageReservation::getCurrentCart()->attributes['vehicleMileage'] }}</p>
                @endif
           </div>
            @endif

            <!-- Location, Date/Time -->
            @if(App\GarageReservation::getCurrentCart()->attributes['branchSelected'])
                <div id="location" class="mt-4 pt-3 mb-0 pb-0 border-t border-1 ">
                    <div class="flex items-center justify-between gap-4 mb-4">
                        <p class="text-sm font-medium text-dark text-opacity-60">
                            When and where
                        </p>

                        <a id="branchEditLink" href="{{ route('book.service.select-branch', ['serviceType' => App\GarageReservation::getCurrentCart()->attributes['bookingType']]) }}"
                           class="py-1 px-[9px] font-medium text-sm bg-[#0099D6] bg-opacity-20 text-[#146b90] rounded-[5px] text-center">
                            Edit
                        </a>
                    </div>

                    @if(App\GarageReservation::getCurrentCart()->attributes['branchSelected'] == 1)
                        <p class="text-base font-semibold sm:text-lg text-dark">{{ \App\Location::getName(App\GarageReservation::getCurrentCart()->attributes['branchSelected']) }}</p>
                    @endif

                    @if(App\GarageReservation::getCurrentCart()->attributes['dropoffDate'])
                        <p class="text-base  sm:text-xl">{{ Carbon\Carbon::parse(App\GarageReservation::getCurrentCart()->attributes['dropoffDate'])->format('jS M Y')  }}</p>
                    @endif

                    @if(App\GarageReservation::getCurrentCart()->attributes['dropoffTime'])
                        <p class="text-sm font-medium text-dark text-opacity-60 mt-3">
                           Drop-off Time
                        </p>
                        <p class="text-base font-semibold sm:text-lg text-dark">{{ App\GarageReservation::getCurrentCart()->attributes['dropoffTime'] }}</p>
                    @endif

                </div>
            @endif

            <!-- Price -->
            @if(App\GarageReservation::getCurrentCart()->price)
                <div id="location" class="mt-4 pt-3 mb-0 pb-0 border-t border-1 ">
                <div
                        class="flex flex-col ">
                    <div class="flex items-center justify-between gap-5">
                        <div>
                            <p class="mb-1 text-base font-semibold sm:text-2xl text-dark">Total Due</p>
                            <p class="text-sm font-medium text-dark text-opacity-60">Incl. VAT</p>
                        </div>
                        <p class="font-semibold text-[26px] text-primary">
                            £{{ number_format(App\GarageReservation::getCurrentCart()->price, 2) }}
                        </p>
                    </div>
                </div>
                </div>
            @endif


        </div>

        <div class="flex flex-col items-center justify-center">
            <p class="mt-[30px] mb-[15px] text-white text-xs text-opacity-40 font-medium text-center">
                @if($continueText)
                    {{ $continueText }}
                @endif
            </p>

            @if($useSubmitButton)
                <button id="continueButton" name="continueButton" type="submit" class="btn btn-primary">
                    {{ $continueButton }}
                </button>
            @else
                @if($continueOnClick)
                    <button id="continueButton" name="continueButton" onclick="{{ $continueOnClick  }}" class="btn btn-primary">
                        {{ $continueButton }}
                    </button>
                @else
                    <a id="continueButton" name="continueButton" href="{{ $continueURL  }}" class="btn btn-primary">
                        {{ $continueButton }}
                    </a>
                @endif
            @endif

            @guest()
                <div class="ch-alert ch-alert--warning ch-mt--2 ch-mb--2" id="val-errors"
                     style="display: none">
                    <p id="val-error-text" class="ch-fs--2 ch-text--bold ch-mb--0"></p>
                </div>
            @endguest


        </div>
    </div>
</div>
