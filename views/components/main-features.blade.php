<section class="dark-container">
    <h4 class="mb-12 text-4xl font-black text-white sm:text-5xl font-epilogue md:mb-24" data-aos="fade-up">
        Main Features
    </h4>
    @php
        $keypoints = [
            (object) [
                'name' => "Instant Alerts",
                'description' => "With Glasgow vehicle tracking, you can stay right on top of any changes that you need to be alerted to. You can decide whether you want to know about whether the ignition is off, whether there has been a battery disconnect and so on.",
            ],
            (object) [
                'name' => "Worldwide Tracking",
                'description' => "Our fleet trackers are not just limited to Scotland, or even the UK. Whether your fleet is heading to the EU or further afield, our technology gives you comprehensive coverage for maximum peace of mind.",
            ],
            (object) [
                'name' => "Driver ID Tags",
                'description' => "Speaking of security, one of the most important elements of the fleet tracker is notifying you if someone is trying to drive one of the vehicles in your fleet without the proper driver ID. If this happens, you will receive a call from us.",
            ],
            (object) [
                'name' => "Geo-Fencing",
                'description' => "With our vehicle tracking technology, you can set a geo-fenced location or area and be notified when any of your vehicles enters or leaves it. You have total control of this function, so you can adjust the vehcile tracking perimeters should your company relocate or start working in a different region.",
            ],
            (object) [
                'name' => "Detailed History",
                'description' => "You can use our vehicle tracking tech to get a better idea of how your fleet and vehicles are performing. This means that you can analyse everything from acceleration to braking speeds, how well the corners are being handled, and whether your drivers have been speeding.",
            ],
            (object) [
                'name' => "Live Tracking",
                'description' => "With our asset tracker, you can pinpoint the location of your vehicle around the clock. You will also be able to track your asset even if it goes underground or is hidden in a container, so you get the highest-quality service and can promptly get your business asset returned.",
            ],
        ];
    @endphp
    <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3 lg:gap-x-12 lg:gap-y-20 align-items-center">
        @foreach ($keypoints as $key)
            <div data-aos="fade-up" data-aos-delay="{{ ($loop->index + 1) * 100 }}">
                <div class="flex items-baseline gap-4">
                    <img src="{{ asset('assets/svgs/green_lantern.svg') }}" alt="">
                    <div class="flex flex-col gap-4">
                        <p class="font-semibold text-[22px] leading-7 text-white">
                            {!! $key->name !!}
                        </p>
                        <p class="text-base text-white text-opacity-60">
                            {!! $key->description !!}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
