@extends('layouts.frontend')
@section('head-info')
    <title>About us | {{ config('app.name') }} Glasgow</title>
    <meta name="description" content="Autofusion is proud to offer an expert car repairs service and unparalleled customer support." />
    <link rel="canonical" href="https://www.autofusionrepairs.co.uk/about" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="About us | {{ config('app.name') }} Glasgow" />
    <meta property="og:description" content="Autofusion is proud to offer an expert car repairs service and unparalleled customer support." />
    <meta property="og:url" content="https://autofusionrepairs.co.uk/about" />
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
            <section class="hero ch-bg--ac-black ch-color--white" style="background:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url({{ asset("images/manufacturer-heros/bmw.jpeg") }}) center">
                <div class="ch-container">
                    <div class="ch-row">
                        <div class="sl:ch-col--8 sm:ch-col--6 md:ch-col--12">
                            <div class="md:ch-text--left xs:ch-text-center sl:ch-text--center">
                                <h1 class="ch-fs--7 md:ch-fs--8 sl:ch-text--center md:ch-text--left xs:ch-text--center">About Us</h1>
                                <p class="ch-fs--3 ch-mb--4 ch-measure ch-text--left">Autofusion is proud to offer an expert car repairs service, car hire and unparalleled customer support.</p>

{{--                                <div class="ch-mt-4 ch-mb-4">--}}
{{--                                    <form action="/book/mot/vrm" method="POST">--}}
{{--                                        @csrf--}}
{{--                                        <div class="ch-form__group md:ch-col--3 ch-pl--0">--}}
{{--                                            <input type="text" required="true" data-id="registrationInput" name="vehicleReg" placeholder="Enter vehicle reg" class="reg-input ch-form__control">--}}
{{--                                        </div>--}}
{{--                                        <div class="md:ch-col--3 ch-pl--0 ch-width--auto">--}}
{{--                                            <input type="submit" value="Start Booking" class="ch-btn ch-btn--cta ch-mb--2 sl:ch-mb--0 ch-width--12 sl:ch-width--auto ch-text--center"  data-label="Start Booking">--}}
{{--                                        </div>--}}
{{--                                        <div class="md:ch-col--3 ch-pl--0 ch-mt--0">--}}
{{--                                            <a href="https://www.gov.uk/check-mot-history" target="_blank" class="ch-btn ch-btn--white ch-btn--ghost ch-mb--2 sl:ch-mb--0 ch-width--12 sl:ch-width--auto ch-text--center">Check Due Date</a>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                </div>--}}


                            </div>
                        </div>
                    </div>
                </div>
            </section>
{{--            <div class="finance-strip ch-pa--0">--}}
{{--                <div class="ch-row ch-text--center ch-fs--2 ch-ma--0">--}}
{{--                    <p class="ch-mb--0 ch-pa--1">With our interest-free payment plan (0% APR), you can make your repair expenditures more manageable. Spread over 3 monthly payments. <a href="https://www.payment-assist.co.uk/signup" target="_blank">Learn More</a></p>--}}
{{--                </div>--}}
{{--            </div>--}}



            <section class="bg-black ch-full-bleed">
                <div class="ch-container">
                    <div class="ch-row ch-mt--10 ch-mb--6 ch-text--center text-white">
                        <img src="{{ asset('images/logo-white.svg') }}" alt="Autofusion" height="30" class="ch-mb--9">
                        <h1 class="ch-text--bold ch-mb--2">Our team specialise in vehicle repair and car hire in Glasgow.</h1>
                        <p class="ch-fs--3 ch-mb--3">We offer manufacturer servicing, car repairs, safety advice and MOT testing in Clydebank, and we are available to help drivers across the Glasgow area from the city to the surrounding towns.</p>
                        <p class="ch-fs--3 ch-mb--3">We know that time is of the essence and that having your car out of action is more than just an inconvenience. If you need repairs made to your car, whether it's the brakes or the tyres, these can keep you from doing your work. It can put a strain on your driving team, and it comes with a host of additional stresses. When you are pushed for time and working to a tight budget, it’s the kind of thing that can make life incredibly difficult. There is never a good time to have a breakdown or to deal with a safety concern.</p>
                        <p class="ch-fs--3 ch-mb--3">We also know that there are a lot of garages out there and that it can be hard to tell the good from the bad. That is why we guarantee that we will use genuine manufacturer parts in any repairs or upgrades that we make, so you get the highest industry standard of repairs at an affordable price. That is why we offer a range of different safety solutions, from the standard MOT checks to trackers to protect your car from theft. And that is why we have put together a range of different resources to help you learn more about the best ways to keep your vehicle in the best condition possible. Our team aim to offer our knowledge to allow our clients, so you can get the best possible support at the best prices. Here are a few of types of car repairs and issues that we take most seriously.</p>

                        <div id="counters" class="ch-mt--8">
                        <div class="md:ch-col--4">
                            <h3 class="ch-fs--7 ch-text--bold ch-mb--0">15+</h3>
                            <span class="counter_subject">Vehicles Serviced &amp; Maintained Daily</span>
                        </div>
                        <div class="md:ch-col--4">
                            <h3 class="ch-fs--7 ch-text--bold ch-mb--0">20+</h3>
                            <span class="counter_subject">Vehicles Available For Hire</span>
                        </div>
                        <div class="md:ch-col--4">
                            <h3 class="ch-fs--7 ch-text--bold ch-mb--0">1,000+</h3>
                            <span class="counter_subject">Satisfied Customers</span>
                        </div>
                        </div>

                    </div>
                </div>
            </section>



            <section class="ch-full-bleed">
                <div class="ch-container">
                    <div class="ch-row ch-mt--10 ch-mb--6 ch-text--center">
                        <h2 class="ch-text--bold">Road Safety</h2>
                        <p class="ch-fs--3">There is nothing more sobering than looking at the road accident statistics for the past year, and we know that around here, the driving conditions are often less than ideal. We believe that every driver needs to get proactive when it comes to road safety, and we have a range of different options to help you look after yours.</p>
                        <p class="ch-fs--3">We offer tyre checks to ensure that your car won’t lose its grip on the road surface. We can talk you through our range of winter tyres, which will keep you driving when the temperature drops below zero. We can also help you to make sure that your spare tyres are installed safely should you need to make a replacement in a hurry. When it comes to your annual MOT, we will help you to ensure that everything is working as it should be, from your brakes to your doors.</p>
                    </div>
                </div>
            </section>



            <section class="bg-black ch-full-bleed">
                <div class="ch-container">
                    <div class="ch-row ch-mt--10 ch-mb--6 ch-text--center text-white">
                        <h2 class="ch-text--bold">Vehicle Safety</h2>
                        <p class="ch-fs--3">Of course, safety is about more than how your car performs on the road. As much as we all wish it were otherwise, car thieves are only getting more sophisticated. Keyless cars have made our lives easier in many ways, but many of the UK’s most popular keyless vehicles are at risk from theft. You may have heard about how relay theft crimes are on the rise, as car thieves can capture your car keys’ signal and can transmit it to gain access to your car in a matter of seconds.</p>
                        <p class="ch-fs--3">Having your car stolen is such a difficult experience to go through, both in terms of emotional stress and financial difficulty. You may face losing your no-claims bonus and paying higher insurance premiums, not to mention the costs of renting a replacement car. There is the matter of losing any personal items that were inside the car, as well as dealing with the violation of a stranger coming into your life and stealing your property.</p>
                        <p class="ch-fs--3">This is why we are so proud of the GeckoTrack vehicle trackers that we have on offer. The combination of GPS and LBS tracking means that even if the thief can block the GPS, the vehicle can still be traced. You will have 24/7 real-time information about exactly where your vehicle is, and you will receive an alert if someone tries to move your vehicle without your unique driver ID. You can also set up geofenced location markers to ping you if it moves in or out of your pre-set area, and operators are on hand 24/7 to notify the authorities in case of theft. Our vehicle trackers are Thatcham-approved, and we have options available for businesses to track each vehicle in their fleet.</p>
                        <p class="ch-fs--3"><a href="{{ route('contact') }}">Get in touch with us</a> to ask about our vehicle tracking platform to monitor everything from sharp braking to fuel consumption.</p>
                    </div>
                </div>
            </section>



            <section class="ch-full-bleed">
                <div class="ch-container">
                    <div class="ch-row ch-mt--10 ch-mb--6 ch-text--center">
                        <h2 class="ch-text--bold">The Standards You Expect</h2>
                        <p class="ch-fs--3">When you bring your car to be serviced, you want to know that the technicians that you are entrusting it to and who are doing repairs understand exactly what they are doing and that they will give your vehicle the very best care. That is why we are committed to following manufacturer guidelines and only using genuine manufacturer parts for any servicing or repairs. By doing so, we can give you the peace of mind that your vehicle will continue running exactly as well as you would expect it to. What’s more, you will avoid any issues with your warranty, and you will be able to keep that resale value up.</p>
                        <p class="ch-fs--3">It does not matter whether you have a Chevrolet that you are looking to keep in near-mint condition or a Ford Focus that you need to get up and running again as quickly as possible. All the cars we work on are given the same specialised treatment, no matter what repairs you need.</p>
                        <a href="{{ route('servicing') }}">Explore Vehicle Servicing</a>
                    </div>
                </div>
            </section>



            <section class="bg-black ch-full-bleed">
                <div class="ch-container">
                    <div class="ch-row ch-mt--10 ch-mb--6 ch-text--center text-white">
                        <h2 class="ch-text--bold">Our Commitment To You</h2>
                        <p class="ch-fs--3">If you are looking for vehicle repair in Clydebank, Renfrew, Paisley, Scotstoun, Kelvindale, Finnieston, Partick, Broomhill, Anniesland, Anderson, Gorbals, Govan or anywhere in Glasgow from the eastend to the south side, visit Autofusion. Our team of expert technicians is ready and waiting to listen to any questions that you may have about the best way to keep your car maintained or how much you could be looking at paying for extensive repairs.</p>
                        <p class="ch-fs--3">Whether you are dropping in for a quick check for your tyres or you want us to give your car a comprehensive safety and performance inspection, we are committed to giving you and your vehicle the very best service. We can help you to decide what kind of software upgrades and additional repairs you could make, but we will never try to sell you something that we don’t think will make your ride better. Our team provide a friendly service at a competitive price. We offer competitive prices and individual, customer-focused service. Bring your car into Autofusion today to find out how we can help you.</p>
                        <a id="car_search_btn" class="ch-btn ch-btn--cta ch-mt--3" href="{{ route('hire') }}">Hire a car</a>
                        <a id="car_search_btn" class="ch-btn ch-btn--white ch-mt--3 md:ch-ml--2" href="/book">Book a service</a>
                    </div>
                </div>
            </section>


        </div>
    </main>

    @include('partials.footer')

    <script type='text/javascript' src='/js/jquery.js'></script>
    <script type='text/javascript' src='/js/jquery-migrate.min.js'></script>
    </body>
@endsection
