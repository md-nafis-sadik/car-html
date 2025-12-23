<section class="dark-container mt-11 !bg-[#2C2F36]">
    <h4 class="text-3xl font-black text-center text-white sm:text-5xl font-epilogue" data-aos="fade-up">
        Looking for another service?
    </h4>

    @php
        $services = [
            (object) [
                'name' => 'Servicing',
                'photo' => asset('assets/images/service-1.png'),
                'isComing' => 0,
                'route' => route('servicing')
            ],
            (object) [
                'name' => 'Tyres',
                'photo' => asset('assets/images/service-3.png'),
                'isComing' => 0,
                'route' => route('tyres')
            ],
            (object) [
                'name' => 'Wheel Alignment',
                'photo' => asset('assets/images/service-5.png'),
                'isComing' => 0,
                'route' => route('wheel-alignment')
            ],
            (object) [
                'name' => 'Trackers',
                'photo' => asset('assets/images/service-4.png'),
                'isComing' => 0,
                'route' => route('trackers')
            ],
        ];
    @endphp
    <div class="grid items-center sm:w-max justify-center mx-auto grid-cols-2 gap-3 sm:gap-5 lg:grid-cols-4 mt-[60px]" data-aos="fade-up">
        @foreach ($services as $service)
            @include('components.feature-card', [
                'name' => $service->name,
                'photo' => $service->photo,
                'isComing' => $service->isComing,
                'route' => $service->route,
                'index' => $loop->index,
            ])
        @endforeach
    </div>
</section>
