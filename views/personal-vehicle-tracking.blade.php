@extends('layouts.app')
@section('head-info')
<title>Personal Vehicle Tracking | Get a Quote Now With {{ config('app.name') }}</title>
<meta name="description" content="Vehicle tracking is the best way to ensure the safety of your car. If you do not have a car tracker, then you have no way of locating your vehicle in the event of theft." />
<link rel="canonical" href="{{ request()->url() }}" />
<meta property="og:locale" content="en_GB" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Personal Vehicle Tracking | Get a Quote Now With {{ config('app.name') }}" />
<meta property="og:description" content="Vehicle tracking is the best way to ensure the safety of your car. If you do not have a car tracker, then you have no way of locating your vehicle in the event of theft." />
<meta property="og:url" content="{{ request()->url() }}" />
<meta property="og:site_name" content="{{ config('app.name') }}" />
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
<meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
@endsection
@section('main')
    @component('components.hero-section', [
        'name' => 'Personal Vehicle Tracking',
        'image' => 'https://autofusioncars.co.uk/images/manufacturer-heros/audi.jpeg',
    ])
        @slot('caption')
            Vehicle tracking is the best way to ensure the safety of your car.
            <br class="desktop">
            If you do not have a car tracker, then you have no way of locating
            <br class="desktop">
            your vehicle in the event of theft.
        @endslot
        <div class="mt-5 flex flex-col sm:flex-row gap-[9px] items-center">
            @include('components.form-booking-service', [
                              'action' => "/book/trackers/vrm",
                              'method' => "POST",
          ])
        </div>
        @include('components.service-payment-info')
    @endcomponent
    <section class="dark-container mt-[76px]">
        <p class="max-w-[903px] text-white text-opacity-55 text-base sm:text-xl leading-7 font-medium text-center mx-auto"
           data-aos="fade-up">
            We understand that as a car owner, you go to great lengths to maintain your car and ensure that it is kept up to code when it comes to everything from windscreen wiper fluid to tyres. We also know that car safety is paramount and that you will always lock your car and set the alarm when you leave it.
            <br><br>
            However, it is impossible to ignore the numbers when it comes to car theft, and we all need to recognise that car thieves have grown more sophisticated over the last few years. Through key card cloning and jamming, the criminals have learned how to get around the latest technology that car manufacturers have come up with to make our lives easier and more secure.
        </p>
    </section>
    <section class="base-container">
        <div class="grid md:grid-cols-2 md:justify-between items-center gap-[50px] xl:gap-[100px]">
            @include('components.section-summary', [
                'containerWidth' => 'max-w-[535px]',
                'header' => 'What Does A Vehicle Tracker Do?',
                'caption' =>
                    "Most of us are familiar with the idea of a GPS tracker at this point. However, a basic GPS tracker can be easily disabled or blocked by a car thief if they know what they are looking for. A good Glasgow vehicle tracking device will use both GPS and LBS to make things much more difficult for the thief and to give you a more precise location.",
                'textMedium' =>
                    'Many car trackers will also be able to make your vehicle visible no matter where the thief takes it, whether that is underground or in a storage container. It will also continue transmitting even if the car leaves the UK.',
            ])
            <img src="{{ asset('assets/images/personal_vehicle_tracking_1.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
        </div>
    </section>
    @include('components.did-you-know-2')
    {{-- Main features --}}
    @include('components.main-features')
    <section class="dark-container !bg-[#F3F4F6] mt-11">
        <h4 class="text-3xl font-black text-center sm:text-5xl text-dark font-epilogue" data-aos="fade-up">
            Why Do I Need A Vehicle Tracker?
        </h4>
        <p class="max-w-[903px] text-dark text-opacity-60 text-base sm:text-[23px] leading-7 font-medium text-center mx-auto mt-[30px] mb-[110px]"
           data-aos="fade-up">
            The most obvious reason for buying a vehicle tracker is that you will have a much better chance of retrieving your car if it is lost in Glasgow or elsewhere. You can be alerted if someone is driving your vehicle without the proper driver ID tag, and you can also set up a range of different instant alerts for the car. You can monitor everything from pre-set GEO fenced location, which can be in Glasgow or further afield, to whether the ignition has been turned on, for additional security.
        </p>
        <div class="grid md:grid-cols-2 justify-center items-center gap-[50px] xl:gap-24">
            <img src="{{ asset('assets/images/personal_vehicle_tracking_2.png') }}" class="w-full h-auto" alt="" data-aos="zoom-in">
            @component('components.section-summary')
                @slot('caption')
                    <span class="text-dark">
                        But it is also important to remember the cost of car theft is a lot bigger than you may realise. There is the emotional cost that comes with a theft as the violation and loss of control hits hard. You could also be facing some serious costs when it comes to your insurance. For example, you could lose your no-claims bonus and be given a less favourable insurance premium. You may also have to pay to hire a car; you will have to wait for the insurance payments to be sorted out. With a GPS tracking device, you can reduce the impact of vehicle theft and improve your general car security.
                    </span>
                @endslot
                @slot('textMedium')
                    <span class="text-[#393938]">
                        If you are looking for the best range of car trackers in Glasgow or the Glasgow area, Autofusion can help. Our Thatcham-approved GeckoTrack S7 offers 24/7 monitoring, and it is accepted by all insurance companies as an S7 vehicle tracker. Autofusion is here to help motorists in Glasgow as well as further afield, such as Anniesland and Scotstoun, and provide the highest-quality service to drivers of all types and makes of cars on the market. Contact us to talk safety, servicing and more. As our insurance-approved trackers in Glasgow offer many benefits, you'll have the peace of mind knowing that your vehicle is safe whenever you drive it throughout Glasgow, Scotland or the whole UK.
                    </span>
                @endslot
            @endcomponent
        </div>
        <div class="flex justify-center mt-10">
            <a href="{{ route('book') }}" class="btn btn-primary">Book Tracker Installation</a>
        </div>
    </section>
@endsection
