@extends('layouts.frontend')
@section('head-info')
    <title>Vehicle Repairs Glasgow | Book Now With {{ config('app.name') }}</title>
    <meta name="description" content="At Autofusion, we work with several of the big insurance companies to help you regardless of whether you were the driver at fault or not. " />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Vehicle Repairs - {{ config('app.name') }}" />
    <meta property="og:description" content="At Autofusion, we work with several of the big insurance companies to help you regardless of whether you were the driver at fault or not. " />
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
            <section class="hero ch-bg--ac-black ch-color--white" style="background:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url({{ asset("images/manufacturer-heros/mazda.jpeg") }}) center">
                <div class="ch-container">
                    <div class="ch-row">
                        <div class="sl:ch-col--8 sm:ch-col--6 md:ch-col--12">
                            <div class="md:ch-text--left xs:ch-text-center sl:ch-text--center">
                                <h1 class="ch-fs--7 md:ch-fs--8 sl:ch-text--center md:ch-text--left xs:ch-text--center">Affordable Vehicle Repairs</h1>
                                <p class="ch-fs--3 ch-mb--4 ch-measure ch-text--left">At Autofusion, we work with several of the big insurance companies to help you regardless of whether you were the driver at fault or not.</p>

                                <div class="ch-mt-4 ch-mb-4">
                                        <div class="md:ch-col--3 ch-pl--0 ch-width--auto">
                                            <a href="{{ route('book') }}" class="ch-btn ch-btn--white ch-btn--ghost ch-mb--2 sl:ch-mb--0 ch-width--12 sl:ch-width--auto ch-text--center">Book A Repair</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="finance-strip ch-pa--0">
                <div class="ch-row ch-text--center ch-fs--2 ch-ma--0">
                    <p class="ch-mb--0 ch-pa--1">With our interest-free payment plan (0% APR), you can make your repair expenditures more manageable. Spread over 3 monthly payments. <a href="https://www.payment-assist.co.uk/signup" target="_blank">Learn More</a></p>
                </div>
            </div>

            <section class="ch-container" id="servicing_manufacturer">
                <div class="ch-row ch-mt--10 ch-mb--6 ch-text--center">
                    <p class="ch-fs--3 ch-text--bold">There is never a good time to need to bring your car in for repairs. In the best-case scenario, you may have noticed a minor issue slowly getting worse over time. In this instance, you will have taken your car to the garage to get it fixed before it becomes a major problem.</p>
                    <p class="ch-fs--3 ch-text--bold">But things do not always work out that simply. If you have suffered an accident, you may be facing some serious damage that needs a lot of work. Or maybe something in your car will have broken without warning. Needing repair work for your car is a hugely stressful and difficult experience to go through, and at Autofusion, we know that all you want is to get your car fixed up and back on the road as soon as possible.</p>
                </div>
                <div class="ch-row ch-mt--10 ch-mb--10 ch-text--left">
                    <div class="md:ch-col--6 xs:ch-pr--0 md:ch-pr--10">
                        <h3 class="ch-text--bold">How Much Do Repairs Cost?</h3>
                        <p>The answer to this question is tricky as it depends entirely on the issue that is being repaired and the condition of the vehicle. However, our team will take care to explain any costs that you could be looking at before we start work so that you can make an informed decision.
                            </br></br>
                            There will be no hidden costs, and we won’t add anything to the bill at the end that was not previously discussed. Of course, some car repair issues are bigger than others, and we will take each one on a case-by-case basis to make sure that we get to the root of the problem as quickly and efficiently as possible.</p>
                    </div>
                    <div class="md:ch-col--6 ch-mt--1 bg-black ch-pa--4 text-white">
                        <h4>Do You Use Authentic Manufacturer Parts?</h4>
                        <p>Yes, we do. At Autofusion, we take great pride in using authentic manufacturer parts on any car that we service or repair. This means that you can keep your manufacturer's guarantee, and it will also help to keep the resale price of your car as high as possible.</p>
                        <p>Get in touch if you want to double-check that we have the parts available for your make and model. So, whether you own an Audi or a Volvo, a Mercedes, or a Fiat, we can help you get back on the road as quickly as possible.</p>
                    </div>
                </div>

                <div class="ch-row ch-mt--6 ch-mb--6 ch-text--center">
                    <h3 class="ch-text--bold">Why choose Autofusion?</h3>

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


            <section class="bg-black ch-full-bleed">
                <div class="ch-container">
                    <div class="ch-row ch-mt--10 ch-mb--6 ch-text--center text-white">
                        <h2 class="ch-text--bold">What Are The Most Common Car Repairs?</h2>
                        <p class="ch-fs--3">The part of your car that is most commonly in need of repair is the clutch. This is because it is subjected to a lot of stress, wear, and tear during its lifespan, and over time it will begin to wear down. You can try to reduce the amount of pressure that you put it under, but this is an issue that will happen to most motorists at one point or another. You may notice that you find it tough to change gear if your car has a gearbox or that you hear a strange noise while you are using the clutch. If this happens, bring your car into Autofusion as soon as possible.</p>
                        <p class="ch-fs--3">Other common car repair issues include needing to have your cambelt replaced (if your car does not start, this is one of the most likely reasons why). This is because the cambelt is, like your clutch, put under a lot of strain, and there is only so much that rubber can take. Problems with brakes are also extremely common. If something goes wrong with your brake pads or brake discs, then you need to bring your car in for servicing and repair right away. You may also be surprised at how often motorists need a battery replacement.</p>
                    </div>
                </div>
            </section>

            <section class="ch-full-bleed">
                <div class="ch-container">
                    <div class="ch-row ch-mt--10 ch-mb--6 ch-text--left">
                        <div class="ch-col-6 md:ch-col--6">
                            <h2 class="ch-text--bold">What Should I Do If My Car Has Been In An Accident?</h2>
                            <p class="ch-fs--3">You should notify your insurance company as soon as possible if you have been involved in an accident. Remember that you should exchange information with the other driver if another driver was involved, as having their insurance info will help to get your claim processed more quickly.</p>
                            <p class="ch-fs--3">When you are making a claim, you will need to give your provider your information as well as the other party’s if possible. We will get in touch with your insurance provider to detail the specific repair work that is needed and the exact costs that are involved. If you are not sure about what you can charge to your insurance, contact our reliable mechanical experts.</p>
                        </div>
                        <div class="ch-col-6 md:ch-col--6">
                            <h2 class="ch-text--bold">How Can I Reduce The Chances Of My Car Needing Repairs?</h2>
                            <p class="ch-fs--3">With a lot of the wear and tear issues, you can reduce the amount of damage to your car by driving less aggressively and putting less strain on areas like your tires, brakes, and belts. However, one of the best ways that you can put off expensive repairs to your car is by bringing your car in for regular servicing.</p>
                            <p class="ch-fs--3">At Autofusion, we can give your car the annual MOT check that is required by law, but we also offer comprehensive servicing to go over every nook and cranny of your vehicle. With regular servicing, you can identify potential issues before they become serious, and you can stay in control of your spending.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="another-service-cta" class="ch-full-bleed">
                <div class="ch-text--center text-white">
                    <div class="md:ch-col--12 bg-black">
                        <div class="ch-pt--6 ch-pb--6">
                            <h3 class="text-white">Looking for another service?</h3>
                            <div class="mt-4 mb-4 grid">
                                <a href="{{ route('tyres') }}" class="ch-btn ch-btn--white ch-btn--ghost ch-ml--2">Tyres</a>
                                <a href="{{ route('servicing') }}" class="ch-btn ch-btn--white ch-btn--ghost ch-ml--2">Servicing</a>
                                <a href="{{ route('wheel-alignment') }}" class="ch-btn ch-btn--white ch-btn--ghost ch-ml--2">Wheel Alignment</a>
                                <a href="{{ route('trackers.vehicle-tracking-platform') }}" class="ch-btn ch-btn--white ch-btn--ghost ch-ml--2 md:ch-ml--2 sm:ch-ml--0 ch-mt--2 xs:ch-mt--2 sm:ch-mt--15">Vehicle Trackers</a>
                            </div>
                        </div>
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
