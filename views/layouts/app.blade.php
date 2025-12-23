<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  class="scroll-smooth">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-S9B4TPQNTH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-S9B4TPQNTH');
    </script>
    <!-- Facebook Pixel Code -->
    <script defer>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '369705844171103');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=369705844171103&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
    {{--    <link rel="shortcut icon" href="/favicon.ico" />--}}
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#000000">
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="format-detection" content="telephone=no">
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @yield('head-info')
    @include('utils.app-styles')
    @stack('css')
</head>

@props([
    'footerMarginTop' => true,
])

<body>


@if(nova_get_setting('promotion_header_enabled'))
    <div id="promo-bar" class="bg-primary text-white">
        <!-- Match the same container approach as the nav -->
        <div class="w-full px-4 py-0 mx-auto xl:px-10 2xl:px-16">
            <div class="flex flex-col sm:flex-row items-center justify-between space-y-2 sm:space-y-0">
                <!-- Promo Header Text -->
                <p class="mb-0 text-sm font-medium text-center sm:text-left">
                    {{ nova_get_setting('promotion_header_text') }}
                </p>
                <!-- Terms & Conditions -->
                <div class="bg-black rounded px-3 py-0.5">
                    <span class="text-white text-sm">Terms &amp; conditions apply</span>
                </div>
            </div>
        </div>
    </div>
@endif
    @include('components.navbar')


    <main>
        @yield('main')
    </main>

    @include('components.footer', [
        'marginTop' => $footerMarginTop
    ])

    @include('utils.app-scripts')
    @stack('js')
</body>

</html>
