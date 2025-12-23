<section class="dark-container !bg-[#F3F4F6] my-[58px]">
    <h4 class="mb-8 text-4xl font-black text-dark sm:text-5xl font-epilogue md:mb-[52px]" data-aos="fade-up">
        Did you know?
    </h4>
    @php
        $keypoints = [
            (object) [
                'caption' => 'The service is suited to the make, model, mileage, and age of your vehicle.'
            ],
            (object) [
                'caption' => 'Our experts have received extensive training and only use authentic Alfa Romeo components.'
            ],
            (object) [
                'caption' => "We'll wash your car and vacuum the footwells regardless of the service."
            ],
        ];
    @endphp
    <div class="flex flex-wrap gap-6 align-items-center">
        @foreach ($keypoints as $key)
            <div class="max-w-[350px]" data-aos="fade-up" data-aos-delay="{{ ($loop->index + 1) * 100 }}">
                <div class="flex items-baseline gap-4">
                    <img src="{{ asset('assets/svgs/green_lantern.svg') }}" alt="">
                    <p class="font-medium text-base sm:text-[22px] leading-7 text-dark">
                        {{ $key->caption }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</section>
