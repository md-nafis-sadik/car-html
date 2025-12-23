@extends('layouts.frontend')
@section('head-info')
    <title>{{ $manufacturer_name }} Servicing Glasgow | Book With {{ config('app.name') }}</title>
    <meta name="description" content="At Autofusion, you never need to worry about whether our team of mechanics will know how to take care of your {{ $manufacturer_name }}. " />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $manufacturer_name }} Servicing Glasgow | Book With {{ config('app.name') }}" />
    <meta property="og:description" content="At Autofusion, you never need to worry about whether our team of mechanics will know how to take care of your {{ $manufacturer_name }}. " />
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
                                <h1 class="ch-fs--7 md:ch-fs--8 sl:ch-text--center md:ch-text--left xs:ch-text--center">Book Your {{ $manufacturer_name }} Servicing</h1>
                                    <p class="ch-fs--3 ch-mb--4 ch-measure ch-text--left">At Autofusion, you never need to worry about whether our team of mechanics will know how to take care of your {{ $manufacturer_name }}.</p>

                                <div class="ch-mt-4 ch-mb-4">
                                    <form action="/book/mot/vrm" method="POST">
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
                    <h4 class="ch-fs--4 ch-text--bold">{{ $manufacturer_name }} Servicing</h4>
                    @if($manufacturer == "abarth")
                        <p>Each Abarth model has a scheduled service plan because each Abarth model is unique. We will keep your car at the high standards of performance and efficiency that you expect.</p>
                    @elseif($manufacturer == "alfa-romeo")
                        <p>Whether you have a GTV, a Spider or a Giulia, we use genuine Alfa Romeo parts, and we will make sure that your car gets the correct treatment for its age and mileage. Talk to our experts today.</p>
                    @elseif($manufacturer == "audi")
                        <p>We will ensure that your Audi gets the specialised care it needs. Whether you need to replace parts or you simply want us to give it a once-over, we will ensure that your vehicle is running smoothly.</p>
                    @elseif($manufacturer == "bmw")
                        <p>At Autofusion, we can provide a range of services for your car that range from addressing safety concerns to giving the car an oil service to keep it in optimum condition. By using genuine BMW parts, we will keep your car’s resale value high. </p>
                    @elseif($manufacturer == "chevrolet")
                        <p>If you are lucky enough to be the owner of a Chevrolet, you will demand the highest standards when it comes to servicing. You may no longer be able to buy a new model in the UK, but we continue to offer premium servicing and care for your vehicle.</p>
                    @elseif($manufacturer == "chrysler")
                        <p>Chrysler owners know that their cars need to be serviced regularly. We can work to the specific servicing schedule of your Chrysler make, and model and you will be thrilled with the results of our services. </p>
                    @elseif($manufacturer == "citroen")
                        <p>Citroens are one of the most popular car manufacturers in the UK, and our experts are ready to get your car in optimum condition regardless of the make. From Picasso to the Citroen SUV, we have got you covered.</p>
                    @elseif($manufacturer == "dacia")
                        <p>Dacia recommends that you have your vehicle serviced every 12,000 miles or once a year. We will use genuine Dacia parts, and our excellent service is guaranteed for a full 12 months.</p>
                    @elseif($manufacturer == "ds")
                        <p>Make sure that your DS car is running safely and smoothly by bringing it into Autofusion for a regular full service. We will follow the instructions laid out by the manufacturer to ensure the warranty is kept.</p>
                    @elseif($manufacturer == "fiat")
                        <p>Our expert technicians can provide the best possible service for your Fiat Punto, Fiat 500, and a range of other Fiat models. Keep your Fiat running smoothly with a regular check-up.</p>
                    @elseif($manufacturer == "ford")
                        <p>Your Ford does not need to be a Focus to get great manufacturer servicing care from us. If you bring your car in regularly, we will get you peak performance and maximum resale value.</p>
                    @elseif($manufacturer == "honda")
                        <p>Our expert technicians know Honda makes and models inside and out. Honda prides itself on safe, reliable, high-performing cars, and you can keep them that way with regular service checks.</p>
                    @elseif($manufacturer == "hyundai")
                        <p>The best way to keep your Hyundai in great condition is by finding a service that uses genuine parts and follows the Hyundai service schedule. Our team will give you the best service regardless of mileage and model.</p>
                    @elseif($manufacturer == "jeep")
                        <p>Jeep’s vehicles are built to, but you still need to follow their recommended servicing schedule. If you are looking for Jeep servicing in the Glasgow area, visit Autofusion.</p>
                    @elseif($manufacturer == "kia")
                        <p>With manufacturer servicing, your Kia will keep running in great shape for as long as possible. We know that there are many models out there, and our team can help with all of them.</p>
                    @elseif($manufacturer == "mazda")
                        <p>Our Mazda manufacturer servicing is specifically tailored to each individual car. We take the model, the mileage, and the age of your car into account to provide the best possible service. </p>
                    @elseif($manufacturer == "mercedes-benz")
                        <p>Choose from a quick inspection or a comprehensive look at how your Mercedes-Benz is performing. We will use genuine parts, and we can help you fit a Mercedes Me adapter. </p>
                    @elseif($manufacturer == "mg")
                        <p>You can maintain your warranty and keep your car resale value up by bringing your MG in for regular servicing. We will only ever use genuine MG parts in our servicing.</p>
                    @elseif($manufacturer == "mini")
                        <p>Autofusion can offer you fast, dependable MINI servicing. Our experts will tailor their work based on the make, model, and mileage of your MINI and use genuine MINI parts.</p>
                    @elseif($manufacturer == "mitsubishi")
                        <p>Bring your Mitsubishi into Autofusion for a comprehensive servicing, where our highly trained experts will use genuine Mitsubishi parts to ensure the highest level of performance.</p>
                    @elseif($manufacturer == "nissan")
                        <p>Our Nissan services are specifically calibrated for the make, model, and mileage of your individual car. You can give your car’s resale value a boost by showing a full manufacturer’s service history.</p>
                    @elseif($manufacturer == "peugeot")
                        <p>Our expert team is ready to offer you the best service out there for any Peugeot make. They use genuine Peugeot parts and offer a range of safety checks to give you peace of mind.</p>
                    @elseif($manufacturer == "renault")
                        <p>Keep your Renault running smoothly and keep that resale value high by bringing your car in for a specialised servicing. We will check everything from brakes to wiper blades.</p>
                    @elseif($manufacturer == "seat")
                        <p>By using genuine SEAT parts, we can offer the manufacturer standard 12–14-month guarantee. A SEAT specific servicing will keep your car in warranty.</p>
                    @elseif($manufacturer == "skoda")
                        <p>No two SKODAs are exactly alike, and our expert team will provide specific servicing care for your car. SKODA-approved parts will keep your warranty intact and resale value high.</p>
                    @elseif($manufacturer == "smart")
                        <p>Bring your smart car in for a comprehensive full servicing from our expert technicians. Autofusion offers a range of free safety services and can offer a range of payment solutions.</p>
                    @elseif($manufacturer == "toyota")
                        <p>Toyota is one of the most popular car manufacturers on the roads, and our expert team can handle each and every one. That includes electric and hybrid models like the Prius. </p>
                    @elseif($manufacturer == "vauxhall")
                        <p>Bring your Vauxhall in for regular servicing to keep driving safely. Our experts can handle any make and model, and we use genuine manufacturer parts.</p>
                    @elseif($manufacturer == "volkswagen")
                        <p>Get peace of mind by bringing your Volkswagen into Autofusion, where our expert team will use approved parts and solutions. Mileage and age will also be considered.</p>
                    @elseif($manufacturer == "volvo")
                        <p>Keep your Volvo at its famous best by using our manufacturer servicing. We offer a range of options and upgrades, including the Polestar Optimisation software.</p>
                    @endif
                    <p>If you are looking for vehicle servicing in Glasgow, get in touch with Autofusion today. We offer unparalleled customer service and years of expertise to keep your car in top condition.</p>
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
    </body>
@endsection
