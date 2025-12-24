@props([
    'marginTop' => true
])
<footer class="{{ $marginTop ? 'mt-[110px]' : 'mt-0' }} pt-[60px] pb-10 bg-dark w-full">
    <div class="grid px-4 gap-y-20 gap-x-4 sm:gap-10 sm:grid-cols-12 md:px-20">
        <div class="sm:col-span-12 lg:col-span-4">
            <a href="{{ url('/') }}">
                <img src="{{ asset('assets/svgs/header_logo.svg') }}" alt="">
            </a>
            <p class="mt-6 mb-5 text-base text-white text-opacity-40">
                Follow us on social media
            </p>
            <div class="inline-flex items-center gap-4">
                <a href="https://twitter.com/AutofusionUK" target="_blank">
                    <img src="{{ asset('assets/svgs/twitter.svg') }}" class="hover:opacity-75"  alt="">
                </a>
                <a href="https://www.facebook.com/AutofusionUK" target="_blank">
                    <img src="{{ asset('assets/svgs/facebook.svg') }}" class="hover:opacity-75" alt="">
                </a>
                {{-- <a href="https://www.instagram.com/autofusionrepairs/?hl=en" target="_blank">
                    <img src="{{ asset('assets/svgs/insta.svg') }}" class="hover:opacity-75" alt="">
                </a> --}}
                <a href="https://www.instagram.com/autofusionhire/?hl=en" target="_blank">
                    <img src="{{ asset('assets/svgs/insta.svg') }}" class="hover:opacity-75" alt="">
                </a>
            </div>
        </div>
        <div class="sm:col-span-6 lg:col-span-2">
            <p class="text-base text-white text-opacity-40 font-semibold mb-[14px] pb-3 w-full border-b border-b-white border-opacity-10">
                Autofusion Hire
            </p>
            <div class="flex flex-col gap-2">
                <a href="{{ route('account') }}" class="text-lg font-medium text-white capitalize text-opacity-80 hover:text-opacity-100 w-max">
                    Account
                </a>
                <a href="{{ route('about') }}" class="text-lg font-medium text-white capitalize text-opacity-80 hover:text-opacity-100 w-max">
                    About Us
                </a>
                {{-- <a href="{{ route('book') }}" class="text-lg font-medium text-white capitalize text-opacity-80 hover:text-opacity-100 w-max">
                    Book service
                </a> --}}
                <a href="{{ route('hire') }}" class="text-lg font-medium text-white capitalize text-opacity-80 hover:text-opacity-100 w-max">
                    Car hire
                </a>
                <a href="{{ route('testimonials') }}" class="text-lg font-medium text-white capitalize text-opacity-80 hover:text-opacity-100 w-max">
                    Testimonials
                </a>
                <a href="{{ route('contact') }}" class="text-lg font-medium text-white capitalize text-opacity-80 hover:text-opacity-100 w-max">
                    Contact Us
                </a>
            </div>
        </div>
        <div class="sm:col-span-6 lg:col-span-2">
            <p class="text-base text-white text-opacity-40 font-semibold mb-[14px] pb-3 w-full border-b border-b-white border-opacity-10">
                Customer Services
            </p>
            <div class="flex flex-col gap-2">
                <a href="tel:01412375050" class="text-lg font-medium text-white capitalize border-b text-opacity-80 hover:text-opacity-100 border-b-white border-opacity-10 w-max">
                    0141 237 5050
                </a>
            </div>
        </div>
        <div class="sm:col-span-12 lg:col-span-4">
            <p class="text-white text-base font-semibold mb-[22px]">
                Don't miss out on our offers! Sign up for deals!
            </p>
            <form id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" action="https://autofusionrepairs.us20.list-manage.com/subscribe/post?u=982f966b7dead3ec25c25b4b9&amp;id=43ee87d637" method="post" novalidate class="w-full flex flex-col sm:flex-row gap-[6px]">
                @csrf
                <input type="email" name="EMAIL" id="mce-EMAIL" class="sm:w-9/12 bg-white bg-opacity-10 rounded-[15px] p-4 text-white text-base font-medium placeholder:text-white placeholder:text-opacity-50 focus:ring-2 focus:ring-primary focus:outline-none" placeholder="Enter your e-mail address">

                <div id="mce-responses" class="clear">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                </div>
                <button type="button" class="btn btn-primary px-[22px]">
                    Subscribe
                </button>
            </form>
            <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
        </div>
    </div>

</footer>
<div class="bg-dark text-white w-full">
    <div class="mx-18 px-5 md:px-20 py-5">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
            <div id="links" class="space-x-4 text-base flex md:inline-block py-3 md:py-0">
                <a href="https://autofusioncars.co.uk/downloads/Autofusion-Limited-Hire-Car-Terms-And-Conditions.pdf" target="_blank" class="underline text-sm">Terms & Conditions</a>
                {{-- <a href="https://autofusioncars.co.uk/downloads/Autofusion-Repairs-Terms-And-Conditions.pdf" target="_blank" class="underline text-sm">Garage T&Cs</a> --}}
            </div>
            <span class="text-sm mt-3 md:mt-0">Copyright © {{ date('Y') }} AUTOFUSION. All Rights Reserved. Built & powered by <a href="https://la5digital.com" target="_blank" rel="noopener" class="text-white hover:underline">LA5 Digital</a>.</span>
        </div>
    </div>
</div>
<script type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "Organization",
      "name" : "Autofusion",
      "foundingDate" : "2019",
      "address": {
        "@type": "PostalAddress",
        "addressLocality" : "Glasgow",
        "addressRegion" : "Scotland"
      }
    }
</script>
<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
