<section class="dark-container">
    <h4 class="mb-12 text-4xl font-black text-white sm:text-5xl font-epilogue md:mb-24" data-aos="fade-up">
        Why Choose Autofusion
    </h4>
    @php
        $keypoints = [
            (object) [
                'name' => "Variety of Car Brands",
                'description' => "At Autofusion, we have a range of prestigious cars available to our customers. We cater for all occasions.",
            ],
            (object) [
                'name' => "Prestige & Affordable",
                'description' => "We provide the best rates possible for our customers, allowing them the unique experiences in some of the world’ most prestigious cars.",
            ],
            (object) [
                'name' => "100% Customer Satisfaction",
                'description' => "We take pride in our customer service. A member of our team will be with you throughout your entire rental experience.",
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
