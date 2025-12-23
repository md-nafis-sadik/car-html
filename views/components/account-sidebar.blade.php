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

{{-- MOBILE ONLY! Profile picture --}}
{{--<div class="absolute z-20 top-4 right-[88px] block md:hidden" data-aos="fade-down">--}}
{{--    <button type="button" data-target="#autofusionSidebar" id="sidebarToggler">--}}
{{--        <img src="{{ asset('apple-touch-icon.png') }}" class="rounded-full w-11 h-11" alt="">--}}
{{--    </button>--}}
{{--</div>--}}

{{-- Sidebar Backdrop --}}
<div class="fixed inset-0 z-40 hidden w-full h-full transition-all duration-300 bg-black opacity-0 bg-opacity-60" id="sidebarBackdrop"></div>

<aside class="bg-dark px-4 xl:px-[60px] py-7 md:pt-[120px] mb:pb-10 overflow-y-auto flex flex-col min-w-[290px] lg:max-w-[370px] h-svh md:h-auto min-h-dvh fixed top-0 z-50 md:z-0 md:relative transition-all -left-full md:left-0 duration-300" id="autofusionSidebar" data-aos="fade-right">
    <button type="button" class="block mb-10 ml-auto md:hidden" id="autofusionSidebarClose">
        <svg class="stroke-[#A4A4A4] w-6 h-6" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"></path>
        </svg>
    </button>
    <p class="font-epilogue font-black text-white text-2xl lg:text-[33px] lg:leading-[31px] -tracking-[0.6px]">
        <span class="text-[#A4A4A4]">{{ auth()->user()->title_lastname }}’s</span> <br>
        Account
    </p>

    <div class="mt-5 mb-10 rounded-full bg-[#303237] py-[5px] px-[9px] w-fit">
        <p class="text-white font-semibold text-xs -tracking-[0.2px] text-center">
            <span class="text-[#A0A4AE]">Account</span> #{{ auth()->user()->account_number }}
        </p>
    </div>

    <ul class="flex flex-col gap-5">
        @foreach ($menus as $menu)
            <li>
                <a href="{{ $menu->route }}" class="group capitalize leading-3 text-sm text-[#9AA2B6] font-medium py-[6px] px-[10px] rounded-[7px] flex items-center gap-[14px] transition-all hover:bg-primary hover:text-white {{ $menu->route == Request::url() ? '!bg-primary !text-white' : null }}">
                    <img src="{{ $menu->icon }}" class="w-5 h-5 group-hover:invert group-hover:brightness-0 {{ $menu->route == Request::url() ? 'invert brightness-0' : null }}" alt="">
                    {{ $menu->name }}
                </a>
            </li>
        @endforeach
    </ul>
</aside>

@push('js')
    <script src="{{ asset('scripts/AccountSidebar.js') }}"></script>
@endpush
