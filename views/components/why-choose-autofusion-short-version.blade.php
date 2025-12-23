<section class="bg-dark lg:rounded-[42px] py-12 md:py-24 px-5 lg:px-16 mx-auto max-w-4xl">
    <h4 class="mb-12 text-4xl font-black text-white sm:text-5xl font-epilogue md:mb-24" data-aos="fade-up">
        Why Choose Autofusion?
    </h4>
    @php
        $keypoints = [
            (object) [
                'name' => "Fitting is included",
                'description' => "",
            ],
            (object) [
                'name' => "State of the art fitting centre",
                'description' => "",
            ],
            (object) [
                'name' => "Over 35 years’ experience",
                'description' => "",
            ],
            (object) [
                'name' => "Free puncture repairs",
                'description' => "",
            ],
            (object) [
                'name' => "Free tyre safety checks",
                'description' => "",
            ],
            (object) [
                'name' => "Free wheel balancing",
                'description' => "",
            ],
            (object) [
                'name' => "Premium, mid-range, budget, cross-climate and winter tyres available",
                'description' => "",
            ],
        ];
    @endphp
    <div class="grid justify-center gap-10 sm:grid-cols-2 lg:gap-x-12 lg:gap-y-10 align-items-center">
        @foreach ($keypoints as $key)
            <div data-aos="fade-up" data-aos-delay="{{ ($loop->index + 1) * 100 }}" @class(['sm:col-span-2' => $loop->last && sizeof($keypoints) % 2 != 0])>
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
