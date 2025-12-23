<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('head-info')
    @include('utils.app-styles')
    @stack('css')
</head>

<body>

    @include('components.navbar')

    <main class="relative min-h-dvh bg-[#191b21] flex">
        @include('components.account-sidebar')
        <div class="relative mt-[120px] px-4 lg:px-10 flex-grow pb-20" data-aos="fade-up">
            @yield('main')
        </div>
    </main>

    @include('components.footer', ['marginTop' => false])

    @include('utils.app-scripts')
    @stack('js')
</body>

</html>
