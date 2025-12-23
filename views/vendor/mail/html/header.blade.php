<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="{{ config('app.name') }} Logo">
@else
<img src="{{ asset('images/logo-black.png') }}" height="20" alt="{{ config('app.name') }}">

{{--{{ $slot }}--}}
@endif
</a>
</td>
</tr>
