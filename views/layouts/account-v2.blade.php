<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Stylesheet -->
    <!-- <link href="{{ asset('assets-v2/css/style.css') }}" rel="stylesheet"> -->
    <link rel="preload" href="{{ asset('assets-v2/css/style.css') }}" as="style">
    <link rel="preload" href="{{ asset('assets-v2/js/app.js') }}" as="script">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Stylesheet -->
    <link href="{{ asset('assets-v2/css/style.css') }}" rel="stylesheet">
    @yield('head-info')
</head>

<body>

    @include('components.navbar-v2')

    <section class="oy-dashboard">
        <div class="container-fluid px-3 px-lg-5">
            <div class="oy-dashboard__grid">
                @include('components.account-sidebar-v2')
                <div class="oy-dashboard__content" style="background-image: url('{{ asset('assets-v2/img/banners/dashboard-banner.jpg') }}');">
                    @yield('main')
                </div>
            </div>
        </div>
     </section>

    @include('components.footer-v2', ['marginTop' => false])

    @include('utils.app-scripts-v2')
    @stack('js')
</body>

</html>
