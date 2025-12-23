@if(request()->route()->getName() == "nova.password.request" || str_contains(request()->url(), "/login"))
<img src="{{ asset('images/logo-white.svg') }}" height="10" alt="Autofusion Logo" style="height: 30px; filter: invert(1); margin-bottom: 10px">
@else
    <img src="{{ asset('images/logo-white.svg') }}" height="10" style="padding: 20px" alt="Autofusion Logo">
@endif

