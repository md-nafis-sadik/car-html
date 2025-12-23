<!DOCTYPE html>
<html lang="en">
@php
    $stepper_layout = $stepper_layout ?? false
@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('head-info')
    @include('utils.app-styles')
    @stack('css')
</head>

<body>

    @if ($stepper_layout)
        <main class="relative min-h-dvh bg-no-repeat bg-cover bg-[url('/public/assets/images/garage-booking-background-2.png')]">
            <section class="relative flex justify-between px-4 mx-auto sm:justify-center max-w-screen-2xl pt-7">
                <div class="flex flex-col gap-6 sm:justify-center sm:items-center">
                    <a href="{{ route('home') }}" data-aos="fade-up">
                        <img src="{{ asset('assets/svgs/header_logo.svg') }}" class="w-auto h-5 sm:h-7 pointer-events-none" alt="">
                    </a>
                    <p class="font-semibold text-center text-white text-[11px] tracking-[5px] uppercase w-max" data-aos="fade-up">
                        GARAGE BOOKINGS
                    </p>
                </div>

                {{-- Exit button --}}
                <div class="relative sm:absolute sm:top-7 sm:right-4" data-aos="fade-up">
                    <a href="{{ route('book') }}" class="bg-white flex items-center gap-4 rounded-[9px] md:min-w-[128px] justify-between py-[10px] px-[11px] w-max">
                        Exit
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-6.57611e-05 3.2669V13.4043C0.00293979 14.0056 0.214984 14.5811 0.589737 15.005C0.964491 15.429 1.47149 15.6669 1.99997 15.6669C2.53041 15.6669 3.03912 15.4272 3.4142 15.0004C3.78928 14.5737 4 13.9949 4 13.3914V3.25395C3.995 2.65419 3.78208 2.08093 3.40754 1.65884C3.033 1.23675 2.52714 0.999973 1.99997 1C1.47084 0.999996 0.963267 1.23857 0.588405 1.66345C0.213543 2.08833 0.00194042 2.66489 -6.57611e-05 3.2669Z" fill="#4D555C"/>
                            <path d="M11.1547 5.38885C11.1549 5.3205 11.1698 5.25337 11.1981 5.19424C11.2263 5.13512 11.2668 5.08606 11.3156 5.05197C11.3644 5.01788 11.4197 4.99995 11.4759 5C11.5322 5.00005 11.5875 5.01807 11.6362 5.05225L13.7378 6.52394L15.8395 7.99565C15.8883 8.02988 15.9288 8.07909 15.957 8.13838C15.9852 8.19767 16 8.26493 16 8.33339C16 8.40185 15.9852 8.46911 15.957 8.5284C15.9288 8.58768 15.8883 8.6369 15.8395 8.67112L13.7378 10.1428L11.6362 11.6145C11.5875 11.6487 11.5322 11.6667 11.4759 11.6668C11.4197 11.6668 11.3644 11.6489 11.3156 11.6148C11.2668 11.5807 11.2263 11.5317 11.1981 11.4725C11.1698 11.4134 11.1549 11.3463 11.1547 11.2779V9.66929H6.44512C6.15021 9.66929 5.86738 9.52696 5.65884 9.2736C5.45031 9.02025 5.33316 8.67662 5.33316 8.31831C5.33316 7.96001 5.45031 7.61638 5.65884 7.36302C5.86738 7.10966 6.15021 6.96731 6.44512 6.96731H11.1547V5.37491V5.38885Z" fill="#4D555C"/>
                        </svg>
                    </a>
                </div>
            </section>
            @yield('main')
        </main>
    @else
        <main class="relative min-h-dvh bg-no-repeat bg-cover bg-[url('/public/assets/images/garage-booking-background-1.png')] px-4 py-7">
            <div class="flex flex-col items-center justify-center gap-6">
                <a href="{{ route('home') }}" data-aos="fade-up">
                    <img src="{{ asset('assets/svgs/header_logo.svg') }}" class="w-auto h-7" alt="">
                </a>
                <p class="font-semibold text-center text-white text-[11px] tracking-[5px] uppercase" data-aos="fade-up">
                    GARAGE BOOKINGS
                </p>
            </div>
            @yield('main')
        </main>
    @endif

    @include('utils.app-scripts')
    @stack('js')
    <script>
        function submitServiceForm() {
            var form = document.getElementById('service-form');
            if (form.checkValidity()) {
                form.submit();
            } else {
                form.reportValidity();
            }
        }
    </script>
</body>

</html>
