@php
    $menus = [
        (object) [
            'name' => 'dashboard',
            'route' => route('account'),
            'icon' => asset('assets/svgs/icon-dashboard.svg'),
        ],
        (object) [
            'name' => 'manage subscriptions',
            'route' => route('account.subscriptions'),
            'icon' => asset('assets/svgs/icon-user.svg'),
        ],
        (object) [
            'name' => 'manage bookings',
            'route' => route('account.reservations'),
            'icon' => asset('assets/svgs/icon-booking.svg'),
        ],
        (object) [
            'name' => 'settings',
            'route' => route('account.edit'),
            'icon' => asset('assets/svgs/icon-settings.svg'),
        ],
        (object) [
            'name' => 'sign out',
            'route' => route('logout'),
            'icon' => asset('assets/svgs/icon-exit.svg'),
        ],
    ];
@endphp

<div class="oy-dashboard__sidebar">
                    <!-- Header -->
    <div class="mb-5">
    <h3 class="text-dark mb-3 text-h5 fw-bold">
        <div class="text-dark text-opacity-50">{{ auth()->user()->title_lastname }}’s</div>
        <div>Account</div>
    </h3>
    <div class="badge bg-white rounded-pill text-bg-light text-b5-medium">Account #{{ auth()->user()->account_number }}</div>
    </div>
    <ul class="oy-dashboard__navbar">
        @foreach ($menus as $menu)
            <li>
            <a href="{{ $menu->route }}" class="text-capitalize menu-item {{ $menu->route == Request::url() ? 'active' : null }}">
                <img src="{{ $menu->icon }}" class="menu-icon" alt="">
                <span>{{ $menu->name }}</span>
            </a>
        </li>
        @endforeach
    </ul>
</div>

