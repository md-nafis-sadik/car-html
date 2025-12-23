@extends('layouts.frontend')
@section('head-info')
    <title>Alloy Wheel Repairs & Refurbishment In Glasgow | {{ config('app.name') }}</title>
    <meta name="description" content="At Autofusion, we offer alloy wheel refurbishment for drivers in the Glasgow area from Clydebank to Paisley. " />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Alloy Wheel Repairs & Refurbishment In Glasgow | {{ config('app.name') }}" />
    <meta property="og:description" content="At Autofusion, we offer alloy wheel refurbishment for drivers in the Glasgow area from Clydebank to Paisley. " />
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
            <section class="hero ch-bg--ac-black ch-color--white" style="background:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url({{ asset("images/manufacturer-heros/citroen.jpeg") }}) center">
                <div class="ch-container">
                    <div class="ch-row">
                        <div class="sl:ch-col--8 sm:ch-col--6 md:ch-col--12">
                            <div class="md:ch-text--left xs:ch-text-center sl:ch-text--center">
                                <h1 class="ch-fs--7 md:ch-fs--8 sl:ch-text--center md:ch-text--left xs:ch-text--center">Alloy Refurbishment</h1>
                                <p class="ch-fs--3 ch-mb--4 ch-measure ch-text--left">At Autofusion, we offer alloy wheel refurbishment for drivers in the Glasgow area from Clydebank to Paisley.</p>

                                <div class="ch-mt-4 ch-mb-4">
                                    <form action="/book">
                                    <div class="md:ch-col--3 ch-pl--0 ch-width--auto">
                                        <a href="{{ route('contact') }}" class="ch-btn ch-btn--white ch-btn--ghost ch-mb--2 sl:ch-mb--0 ch-width--12 sl:ch-width--auto ch-text--center">Request Quote</a>
                                    </div>
                                    </form>
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
                    <p class="ch-fs--3 ch-text--bold">For many of us, keeping our cars in the best condition possible is a point of pride. We take every step that we can think of to make sure that our vehicles look as good as new every time we take them out on the road. However, it is a fact of life that we cannot stop them from getting the occasional scrape and ding. Maybe it’s a dent from a close-call collision. Maybe it’s a scratch from taking your car up a gravel road. Or maybe it’s a mysterious crack that you just can’t account for, but you know that you want it gone as quickly as possible.</p>
                    <p class="ch-fs--3 ch-text--bold">We all know that it can be tricky to keep our alloy wheels in pristine condition. But that does not mean that we should not treat ourselves and our cars to a bit of refurbishment and proper care when we can. If you’ve recently noticed some damage to your wheels, you may have found yourself looking at whether bringing your car in for refurbishment is the best option.</p>
                </div>
                <div class="ch-row ch-mt--10 ch-mb--10 ch-text--left">
                    <div class="md:ch-col--6 xs:ch-pr--0 md:ch-pr--10">
                        <h3 class="ch-text--bold">What Is Alloy Wheel Refurbishment?</h3>
                        <p>Let’s start with the basics, shall we? Alloy wheel refurbishment simply means repairing your wheel alloys instead of replacing them. At Autofusion, we can take care of scratches, dings, dents, and other damage to your wheel alloys. The process begins by removing the tyre or tyres in question from your car. Then, we will give the wheel a deep clean. That means removing all the dirt, mud, debris, and grime from the wheel. If you have any dents or scratches on your wheel, these will be taken care of with filler.
                            </br></br>
                            Then, your alloy wheel will be cured and sanded. The next step is applying the coat of paint, which we will consult you about. You can choose to match the colour of the wheels you already have in place, or you can go with something completely different. Finally, there’s lacquering, curing, and polishing to make sure that your alloy wheel is as shiny as it was the day that your car rolled off the production line.</p>
                    </div>
                    <div class="md:ch-col--6 ch-mt--8 bg-black ch-pa--4 text-white">
                        <h4>Which Is Better: Alloy Replacement Or Alloy Refurbishment?</h4>
                        <p>If you have damage to your alloy wheels, then getting an alloy wheel refurbishment will be significantly cheaper than paying for an entirely new set. With a refurbishment, you can also make changes to the colour and choose from other customisation options. It is also worth noting that refurbishing your alloy wheels is not just about improving the way they look. You will be greatly improving their durability, so you do not need to worry about lasting damage.</p>
                        <p>However, it is important to note that severe damage to your alloy wheels may make refurbishment impossible. In this case, paying for alloy replacements is the only way to go.</p>
                    </div>
                </div>

            </section>


            <section class="bg-black ch-full-bleed">
                <div class="ch-container">
                    <div class="ch-row ch-mt--10 ch-mb--6 ch-text--center text-white">
                        <h2 class="ch-text--bold">Why Is Alloy Wheel Refurbishment Necessary?</h2>
                        <p class="ch-fs--3">Even if you are not someone who places a great deal of value on how good your car looks on the outside, there are practical considerations that you need to be aware of. To start with, damage to your wheel alloys is the kind of thing that can impact the price of your car if you want to sell it. Even if you don’t mind driving around with a scuffed or scratched wheel alloy, it is the kind of the thing that buyers will definitely notice. So yes, it may be an investment now, but it could help you to make sure that you close that sale in the future.</p>
                        <p class="ch-fs--3">The other thing to consider is that you may be experiencing greater tyre damage if you leave damage to your wheel alloys unattended. There are all sorts of dirt and debris that can work their way into any holes or scratches, not to mention brake dust. Additionally, if the alloy cracks while you are on the road, then it could do major damage to your tyre. Getting your alloy wheels refurbished is a lot cheaper and a lot less hassle than paying for an entirely new tyre. It is a good idea to bring your car in for regular checks of your tyres anyway, and wheel alloy maintenance is a big part of that.</p>
                    </div>
                </div>
            </section>









{{--            <div class="ch-row quote-form" style="background-image:url({{ asset('upload/traffic-car-vehicle-black.jpg') }});">--}}
{{--                <div class="overlay_background" style="background:#000000;background:rgb(0,0,0,0.6);background:rgba(0,0,0,0.6);"></div>--}}
{{--                    <div class="page_content_wrapper">--}}
{{--                                <h2 class="ch-pt--5 text-white ch-text--bold">Request A Quote</h2>--}}
{{--                                <div class="md:ch-col--6 md:ch-col--offset-3 ch-mt--5 ch-mb--5">--}}
{{--                                    <div class="bg-black text-white ch-text--center ch-pa--8">--}}
{{--                                        <div  role="form"  lang="en-GB" dir="ltr">--}}
{{--                                            <div class="screen-reader-response" role="alert" aria-live="polite"></div>--}}
{{--                                            <form id="contact-form" action="/alloy-refurbishment" method="POST" validate>--}}
{{--                                                @csrf--}}

{{--                                                <div class="ch-form__group @error('company-name') ch-form__group--error @enderror ch-text--left">--}}
{{--                                                    <label class="ch-form__control-label ch-mt--2 ch-text--bold" for="company-name">{{ __('Company Name') }} (required)</label>--}}
{{--                                                    @error('company-name')--}}
{{--                                                    <span class="ch-form__control-validation">{{ $message }}</span>--}}
{{--                                                    @enderror--}}
{{--                                                    <input type="text" class="ch-form__control" value="{{ old('company-name') }}" id="company-name" name="company-name" maxlength="100" autocomplete="company" required/>--}}
{{--                                                </div>--}}

{{--                                                <div class="ch-form__group @error('your-name') ch-form__group--error @enderror ch-text--left">--}}
{{--                                                    <label class="ch-form__control-label ch-mt--2 ch-text--bold" for="your-name">{{ __('Contact Name') }} (required)</label>--}}
{{--                                                    @error('your-name')--}}
{{--                                                    <span class="ch-form__control-validation">{{ $message }}</span>--}}
{{--                                                    @enderror--}}
{{--                                                    <input type="text" class="ch-form__control" value="{{ old('your-name') }}" id="your-name" name="your-name" maxlength="100" autocomplete="name" required/>--}}
{{--                                                </div>--}}

{{--                                                <div class="ch-form__group @error('your-position') ch-form__group--error @enderror ch-text--left">--}}
{{--                                                    <label class="ch-form__control-label ch-mt--2 ch-text--bold" for="your-position">{{ __('Contact Position') }} (required)</label>--}}
{{--                                                    @error('your-position')--}}
{{--                                                    <span class="ch-form__control-validation">{{ $message }}</span>--}}
{{--                                                    @enderror--}}
{{--                                                    <input type="text" class="ch-form__control" value="{{ old('your-position') }}" id="your-position" name="your-position" maxlength="100" autocomplete="position" required/>--}}
{{--                                                </div>--}}

{{--                                                <div class="ch-form__group @error('your-email') ch-form__group--error @enderror ch-text--left">--}}
{{--                                                    <label class="ch-form__control-label ch-mt--2 ch-text--bold" for="your-email">{{ __('Contact Position') }} (required)</label>--}}
{{--                                                    @error('your-email')--}}
{{--                                                    <span class="ch-form__control-validation">{{ $message }}</span>--}}
{{--                                                    @enderror--}}
{{--                                                    <input type="email" class="ch-form__control" value="{{ old('your-email') }}" id="your-email" name="your-email" maxlength="100" autocomplete="email" required/>--}}
{{--                                                </div>--}}

{{--                                                <div class="ch-form__group @error('your-phone') ch-form__group--error @enderror ch-text--left">--}}
{{--                                                    <label class="ch-form__control-label ch-mt--2 ch-text--bold" for="your-email">{{ __('Contact Phone') }} (required)</label>--}}
{{--                                                    @error('your-phone')--}}
{{--                                                    <span class="ch-form__control-validation">{{ $message }}</span>--}}
{{--                                                    @enderror--}}
{{--                                                    <input type="tel" class="ch-form__control" value="{{ old('your-phone') }}" id="your-phone" name="your-phone" maxlength="100" autocomplete="phone" required/>--}}
{{--                                                </div>--}}


{{--                                                <div class="ch-form__group @error('your-address') ch-form__group--error @enderror ch-text--left">--}}
{{--                                                    <label class="ch-form__control-label ch-mt--2 ch-text--bold" for="your-address">{{ __('Your Address') }} (required)</label>--}}
{{--                                                    @error('your-address')--}}
{{--                                                    <span class="ch-form__control-validation">{{ $message }}</span>--}}
{{--                                                    @enderror--}}
{{--                                                    <textarea class="ch-form__control" value="{{ old('your-address') }}" id="your-address" name="your-address" cols="40" rows="2" placeholder="Address" required autocomplete="address"></textarea>--}}
{{--                                                </div>--}}


{{--                                                <div class="ch-form__group @error('vehicle-quantity') ch-form__group--error @enderror ch-text--left">--}}
{{--                                                    <label class="ch-form__control-label ch-mt--2 ch-text--bold" for="vehicle-quantity">{{ __('Vehicle Quantity') }} (required)</label>--}}
{{--                                                    @error('vehicle-quantity')--}}
{{--                                                    <span class="ch-form__control-validation">{{ $message }}</span>--}}
{{--                                                    @enderror--}}
{{--                                                    <input type="number" class="ch-form__control" value="{{ old('vehicle-quantity') }}" id="vehicle-quantity" name="vehicle-quantity" maxlength="100" required/>--}}
{{--                                                </div>--}}

{{--                                                <div class="ch-form__group @error('g-recaptcha-response') ch-form__group--error @enderror ch-text--left">--}}
{{--                                                    <label class="ch-form__control-label ch-mt--2 ch-text--bold" for="address_postcode">Verification Challenge</label>--}}
{{--                                                    @error('g-recaptcha-response')<span class="ch-form__control-validation">{{ $message }}</span>@enderror--}}
{{--                                                    <div class="g-recaptcha" data-sitekey="{{config('services.recaptcha.key')}}"></div>--}}
{{--                                                </div>--}}
{{--                                                <p class="ch-text--left"><input type="submit" value="Submit Request" class="ch-btn ch-btn--success ch-mt--3 md:ch-width--3 ch-text--left"><span class="ajax-loader"></span></p>--}}
{{--                                                <div class="contact-response-output" role="alert">--}}
{{--                                                    @if(!empty($status))--}}
{{--                                                        <br class="clear" />--}}
{{--                                                        <div class="alert" role="alert">--}}
{{--                                                            {{ $status }}--}}
{{--                                                        </div>--}}
{{--                                                    @endif--}}
{{--                                                </div>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                    </div>--}}
{{--            </div>--}}












            <section class="ch-full-bleed">
                <div class="ch-container">
                    <div class="ch-row ch-mt--10 ch-mb--6 ch-text--left">
                        <div class="ch-col-6 md:ch-col--6">
                            <h2 class="ch-text--bold">How Does Damage To Wheel Alloys Come About?</h2>
                            <p class="ch-fs--3">The way that most people damage their alloy wheels is by scraping them while parking up against the curb. Everyone knows the sound of that screech all too well, but a lot of the damage to your wheel alloys comes about from simple wear and tear.</p>
                            <p class="ch-fs--3">The reason why this happens so frequently is that your alloy wheels are made of a different kind of metal to the body of your car. The metal on alloy wheels is softer, designed specifically to improve the performance of your tires and to turn and bend more easily, as well as preventing your brakes from overheating. As a result, they can incur damage more easily.</p>
                        </div>
                        <div class="ch-col-6 md:ch-col--6">
                            <h2 class="ch-text--bold">Why Should I Pay For Expert Servicing?</h2>
                            <p class="ch-fs--3">At Autofusion, we know how much your car means to you, and we know how important it is that you can rest assured that your car is operating at the highest level possible when it comes to safety and performance. When you bring your car in for alloy wheel replacement in Glasgow, we will give you the very best customer care and vehicle service.</p>
                            <p class="ch-fs--3">We will be able to advise you on how long the process is going to take (it can vary from case to case depending on the type and extent of the damage). We will also be able to take care of any other vehicle maintenance issue, including tyre realignment and vehicle servicing.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ch-container ch-text--center ch-mb--4">
                <div class="ch-row">
                    <p class="ch-fs--3 ch-text--bold">At Autofusion, we also take great pride in our expertise and customer service. We will give you honest answers about whether you should look at another tyre brand or whether servicing your existing tyres is the best way to go. Whether you are in Glasgow or the surrounding area, bring your car into Autofusion today for a service you can count on.</p>
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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script type='text/javascript' src='/js/jquery.js'></script>
    <script type='text/javascript' src='/js/jquery-migrate.min.js'></script>
    </body>
@endsection
