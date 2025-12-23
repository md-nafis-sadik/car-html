<section class="dark-container">
    <h4 class="mb-12 text-4xl font-black text-white sm:text-5xl font-epilogue md:mb-24" data-aos="fade-up">
        Why Choose Autofusion for Servicing
    </h4>
    @php
        $keypoints = [
            (object) [
                'name' => "Courtesy vehicles <br class='desktop'> available",
                'description' => "With our courtesy vehicles, you can still <br class='desktop'> reach where you need to go. Before you <br class='desktop'> arrive at your appointment, phone us to <br class='desktop'> make a reservation.",
            ],
            (object) [
                'name' => "Payment Solutions <br class='desktop'> Available",
                'description' => "We have a wide range of payment <br class='desktop'> solutions available (from bank transfer <br class='desktop'> to 0% interest free payment plan, <br class='desktop'> spread over 3 months)",
            ],
            (object) [
                'name' => "Free puncture <br class='desktop'> repairs",
                'description' => "Have you run into a snag? We'll fix your <br class='desktop'> tyre for free as long as it's safe, and <br class='desktop'> you'll be back on the road in no time.",
            ],
            (object) [
                'name' => "Free WiFi <br class='desktop'> and refreshments",
                'description' => "Take advantage of our free Wi-Fi and a <br class='desktop'> cup of coffee while you wait for a <br class='desktop'> service or repair.",
            ],
            (object) [
                'name' => 'Free Wash & Vaccum',
                'description' => "We'll wash your car and vacuum the <br class='desktop'> footwells regardless of the service.",
            ],
            (object) [
                'name' => 'Easy Online Booking',
                'description' => "With our <a href='/book' class='text-white text-opacity-100 underline'>online booking system</a>, <br class='desktop'> scheduling a service or MOT for your <br class='desktop'> vehicle is simple and quick.",
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
