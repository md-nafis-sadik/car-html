@extends('layouts.frontend')
@section('head-info')
    <title>{{ $manufacturer_name }} Wheel Alignment | Book Now with {{ config('app.name') }}</title>
    <meta name="description" content="Ensuring that your wheels are properly aligned is a crucial part of good car maintenance for your {{ $manufacturer_name }}. " />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $manufacturer_name }} Wheel Alignment | Book Now with {{ config('app.name') }}" />
    <meta property="og:description" content="Ensuring that your wheels are properly aligned is a crucial part of good car maintenance for your {{ $manufacturer_name }}. " />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />

    <link href="{{ asset('css/chassis/chassis.css') }}" rel="stylesheet" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" />

    <script src="{{ asset('js/chassis/chassis.js') }}"></script>
@endsection
@section('body')
    <body>
    @include('partials.header')

    <a class="ch-skip" href="#main">Skip to main content</a>
    <main id="main">
        <div id="main-section" class="ch-bg--white">
            <section class="hero ch-bg--ac-black ch-color--white" style="background:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url({{ asset("images/manufacturer-heros/$manufacturer.jpeg") }}) center">
                <div class="ch-container">
                    <div class="ch-row">
                        <div class="sl:ch-col--8 sm:ch-col--6 md:ch-col--12">
                            <div class="md:ch-text--left xs:ch-text-center sl:ch-text--center">
                                <h1 class="ch-fs--7 md:ch-fs--8 sl:ch-text--center md:ch-text--left xs:ch-text--center">Book Your Wheel Alignment</h1>
                                <p class="ch-fs--3 ch-mb--4 ch-measure ch-text--left">Ensuring that your wheels are properly aligned is a crucial part of good car maintenance for your {{ $manufacturer_name }}.</p>

                                <div class="ch-mt-4 ch-mb-4">
                                    <form action="/book/wheel-alignment/vrm" method="POST">
                                        @csrf
                                        <div class="ch-form__group md:ch-col--3 ch-pl--0">
                                            <input type="text" required="true" data-id="registrationInput" name="vehicleReg" placeholder="Enter vehicle reg" class="reg-input ch-form__control">
                                        </div>
                                        <div class="md:ch-col--3 ch-pl--0">
                                            <input type="submit" value="Start Booking" class="ch-btn ch-btn--cta ch-mb--2 sl:ch-mb--0 ch-width--12 sl:ch-width--auto ch-text--center"  data-label="Start Booking">
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="finance-strip">
                <div class="ch-row ch-text--center ch-fs--2">
                    <p class="ch-pt--1 ch-pb--1 ch-mb--0">With our interest-free payment plan (0% APR), you can make your repair expenditures more manageable. Spread over 3 monthly payments. <a href="https://www.payment-assist.co.uk/signup" target="_blank">Learn More</a></p>
                </div>
            </div>
            <section class="ch-container" id="servicing_manufacturer">
                <div class="ch-row ch-mt--8 ch-mb--6 ch-text--left ch-fs--3">
                    <h4 class="ch-fs--4 ch-text--bold">{{ $manufacturer_name }} Wheel Alignment</h4>
                    @if($manufacturer == "abarth")
                        <p>Each Abarth model has its own specific needs. Our wheel alignment services will ensure that your Abarth gives you the best performance possible.</p>
                    @elseif($manufacturer == "alfa-romeo")
                        <p>The Spider, Giulia, and GTV Alfa Romeo models are beloved by drivers the world over, but you must ensure that your wheels are properly aligned. Visit Autofusion to find out how to get yours tested.</p>
                    @elseif($manufacturer == "audi")
                        <p>We know how important it is that your Audi is running safely and smoothly and checking your wheel alignment regularly is a crucial part of its maintenance. Autofusion can help you get yours checked quickly.</p>
                    @elseif($manufacturer == "bmw")
                        <p>Checking your BMW’s wheel alignment is one of the best ways to ensure that it runs well and that you are keeping wheel wear and tear low. Pop into Autofusion for wheel alignment testing.</p>
                    @elseif($manufacturer == "chevrolet")
                        <p>Given that you can no longer buy a new Chevrolet in the UK, you will want to protect it from any kind of potential damage. Visit Autofusion to check your wheel alignment today. </p>
                    @elseif($manufacturer == "chrysler")
                        <p>At Autofusion, we are dedicated to keeping your Chrysler in top condition. Test your wheel alignment to be safer, reduce tyre damage and keep your handling efficient.</p>
                    @elseif($manufacturer == "citroen")
                        <p>It doesn’t matter whether you have a Citroen SUV or a Picasso; you need to keep your wheels properly aligned. Autofusion offers a quick and easy wheel alignment service to give you peace of mind. </p>
                    @elseif($manufacturer == "dacia")
                        <p>As the owner of a Dacia, you know that the manufacturers recommend regular servicing. Checking your wheel alignment is a core element of proper car maintenance, and Autofusion offers peerless testing. </p>
                    @elseif($manufacturer == "ds")
                        <p>Visit Autofusion to have your DS car’s alignment comprehensively tested. With our Bluetooth Pro Wheel Aligner, we will keep your car running at its very best.</p>
                    @elseif($manufacturer == "fiat")
                        <p>There are a lot of popular Fiat models out there, from the 500 to the Punto, and proper wheel alignment is crucial to their efficiency and safety. Pop into Autofusion for a quick and easy wheel alignment test. </p>
                    @elseif($manufacturer == "ford")
                        <p>An alignment test is a great way to ensure that your Ford is running at the kind of level that you demand. Autofusion can check your wheel adjustment quickly and effectively to protect your vehicle.</p>
                    @elseif($manufacturer == "honda")
                        <p>Your Honda is in safe hands with our team of experts. Our wheel adjustment testing protects your tires, it protects your car, and it protects you, the driver. Visit Autofusion to find out more.</p>
                    @elseif($manufacturer == "hyundai")
                        <p>When your Hyundai’s wheels are not properly aligned, you run the risk of damaging your tires and impacting its safety features. Get your car's alignment tested today at Autofusion.</p>
                    @elseif($manufacturer == "jeep")
                        <p>We all know that Jeep vehicles can handle almost anything, but the wheels need to be properly aligned to do so. Autofusion’s expert wheel alignment testing will protect you and your car. </p>
                    @elseif($manufacturer == "kia")
                        <p>The reasons for checking your Kia’s wheel alignment range from safety and efficiency to comfort and handling, so visit Autofusion to get yours tested. Our Bluetooth testing is just part of our expert servicing range.</p>
                    @elseif($manufacturer == "mazda")
                        <p>We know that you want your Mazda kept in the best condition possible. That’s why we urge you to check your wheel alignment to massively reduce the risk of wear and tear, not to mention safety issues.</p>
                    @elseif($manufacturer == "mercedes-benz")
                        <p>Even a Mercedes-Benz needs the occasional check-up. Visit Autofusion to make sure that your wheels are properly aligned to keep your car running as beautifully as it can. </p>
                    @elseif($manufacturer == "mg")
                        <p>There is never a good time in your journey to realise that your wheels are not properly aligned. With a quick wheel alignment test at Autofusion, you can get that peace of mind behind the steering wheel.</p>
                    @elseif($manufacturer == "mini")
                        <p>Getting your MINI’s wheel alignment tested is incredibly easy with Autofusion’s Bluetooth Pro Wheel Aligner. It’s quick, it’s simple, and it is an essential part of maintaining your MINI.</p>
                    @elseif($manufacturer == "mitsubishi")
                        <p>We know that performance is everything when it comes to Mitsubishi. Protect your car by getting your alignment checked at Autofusion.</p>
                    @elseif($manufacturer == "nissan")
                        <p>Come into Autofusion to check the wheel alignment on your Nissan. Our experts can pinpoint any discrepancies with the angle of the wheels and get you back on the road in no time.</p>
                    @elseif($manufacturer == "peugeot")
                        <p>Wheel alignment issues can be the driving force behind a number of different problems with your Peugeot. If you have any concerns, visit Autofusion for a tyre alignment check today.</p>
                    @elseif($manufacturer == "renault")
                        <p>When was the last time you had the wheel alignment of your Renault checked? Find out how much difference perfect wheel alignment can make by visiting Autofusion for a check-up.</p>
                    @elseif($manufacturer == "seat")
                        <p>At Autofusion, we use top of the line software to give us maximum accuracy when testing the wheel alignment on your SEAT. Book in a check to improve your SEAT’s performance and safety.</p>
                    @elseif($manufacturer == "skoda")
                        <p>If you suspect that the wheel alignment may be off on your SKODA, contact Autofusion today. We use Bluetooth Pro Wheel Alignment to pinpoint even the slightest discrepancy.</p>
                    @elseif($manufacturer == "smart")
                        <p>When your smart car’s alignment is off, you could be impacting your car’s fuel efficiency. This is just one of the many reasons why you should book in for a tyre alignment test at Autofusion.</p>
                    @elseif($manufacturer == "toyota")
                        <p>At Autofusion, we know that you rely on your Toyota to offer efficiency, reliability, and safety. Our alignment checks can reduce tyre wear and ensure that all your wheels point in the right direction. That is why we recommend you bring your Toyota in for regular wheel alignment checks. </p>
                    @elseif($manufacturer == "vauxhall")
                        <p>Our experts will be able to locate even the slightest tyre alignment issue with your Vauxhall and address the problem quickly and efficiently. Keep your Vauxhall at its very best and reduce tyre wear with our services.</p>
                    @elseif($manufacturer == "volkswagen")
                        <p>A wheel alignment test could help you to avoid issues with your Volkswagen’s handling and safety, as well as lowering fuel consumption. Talk to the experts at Autofusion about booking in now to get your vehicle's wheels aligned and check the alignment angles to improve vehicle handling, reduce tyre wear and more. </p>
                    @elseif($manufacturer == "volvo")
                        <p>At Autofusion, we know that keeping your Volvo in the best condition is a point of pride. We offer top of the line checks for wheel alignments and alignment angles to ensure that your handling and efficiency is where it needs to be. </p>
                    @endif
                    <p>If you are looking for wheel alignment in Glasgow that meets your car manufacturer's specifications, visit Autofusion. We can get to the bottom of any alignment issue, put your wheels in the optimum position and get you back on the road in no time. We also offer car servicing, car repairs, wheel tracking and a range of other services, so you can get everything you need from our leading Glasgow garage. </p>
                </div>
            </section>

            <section class="ch-container">

                {{--                <div class="ch-row ch-mt--6 ch-mb--6 ch-text--center">--}}
                <div id="servicing-manufacturer" class="ch-row bg-black text-white ch-mb--6">
                    <div class="marketing-message">
                        <div id="marketing-message__inner" class="marketing-message__inner">
                            <div class="ch-row ch-mt--2 ch-mb--2 ch-text--left">
                                <h5 class="text-white ch-ml--2 ch-text--bold">Did you know?</h5>
                                <ul class="ch-ml--4 ch-fs--3">
                                    <li class="ch-ml--2">The service is suited to the make, model, mileage, and age of your vehicle.</li>
                                    <li class="ch-ml--2">Our experts have received extensive training and only use authentic
                                        {{ $manufacturer_name }} components.</li>
                                    <li class="ch-ml--2">We'll wash your car and vacuum the footwells regardless of the service.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                {{--                </div>--}}

                <div class="ch-row ch-mb--6 ch-mb--6 ch-text--center">

                    <div class="ch-col--4 md:ch-col--4 ch-mt--2">
                        <img src="{{ asset('images/icons/key.svg') }}" alt="Car keys" width="75">
                        <h5 class="ch-text--bold ch-mt--2">Courtesy vehicles available</h5>
                        <p>With our courtesy vehicles, you can still reach where you need to go. Before you arrive at your appointment, phone us to make a reservation.</p>
                    </div>
                    <div class="ch-col--4 md:ch-col--4 ch-mt--2">
                        <img src="{{ asset('images/icons/steering-wheel.svg') }}" alt="Steering Wheel" width="75">
                        <h5 class="ch-text--bold ch-mt--2">Payment Solutions Available</h5>
                        <p>We have a wide range of payment solutions available (from bank transfer to 0% interest free payment plan, spread over 3 months)</p>
                    </div>
                    <div class="ch-col--4 md:ch-col--4 ch-mt--2">
                        <img src="{{ asset('images/icons/tyre.svg') }}" alt="Car Tyre" width="75">
                        <h5 class="ch-text--bold ch-mt--2">Free puncture repairs</h5>
                        <p>Have you run into a snag? We'll fix your tyre for free as long as it's safe, and you'll be back on the road in no time.</p>
                    </div>
                    <div class="ch-col--4 md:ch-col--4 ch-mt--2">
                        <img src="{{ asset('images/icons/to-go-cup.svg') }}" alt="Refreshment Cup" width="75">
                        <h5 class="ch-text--bold ch-mt--2">Free WiFi and refreshments</h5>
                        <p>Take advantage of our free Wi-Fi and a cup of coffee while you wait for a service or repair.</p>
                    </div>
                    <div class="ch-col--4 md:ch-col--4 ch-mt--2">
                        <img src="{{ asset('images/icons/bucket.svg') }}" alt="Car Wash Bucket" width="75">
                        <h5 class="ch-text--bold ch-mt--2">Free Wash & Vaccum</h5>
                        <p>We'll wash your car and vacuum the footwells regardless of the service.</p>
                    </div>
                    <div class="ch-col--4 md:ch-col--4 ch-mt--2">
                        <img src="{{ asset('images/icons/iphone.svg') }}" alt="phone" width="75">
                        <h5 class="ch-text--bold ch-mt--2">Easy Online Booking</h5>
                        <p>With our <a href="/book">online booking system</a>, scheduling a service or MOT for your vehicle is simple and quick.</p>
                    </div>



                </div>


                <div class="ch-row ch-mt--6 ch-mb--6 ch-text--left">
                    <p class="ch-fs--1">All offers subject to availability and cannot be used in conjunction with any other offer. Free oil and fluid top-ups available to all current Autofusion customers (between servicing appointments). Courtesy cars will incur a daily insurance charge and are subject to availability. A charge may apply for any wheel alignment adjustments needed. Free puncture repairs carried out when appropriate. Complimentary wash & vac available after servicing/repairs have been carried out. Terms and conditions apply – see in branch for details.</p>
                </div>


            </section>
        </div>
    </main>


    @include('partials.footer')



    <script type='text/javascript' src='/js/jquery.js'></script>
    <script type='text/javascript' src='/js/jquery-migrate.min.js'></script>
    {{--<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.9.1/dayjs.min.js" integrity="sha512-u7elBfdMr+7LhU4rvUk3IM28QZDKTyUxba4Nx2IJ1W9cj4shfRSPq7EZXD2ULD9cBoizw2FQyeR6YBog6LcnHg==" crossorigin="anonymous"></script>
    {{--<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/js/main.js"></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/js/main.js"></script>
    </body>
@endsection
