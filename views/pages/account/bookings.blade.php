@extends('layouts.account', [
    'title' => 'Manage Bookings'
])

@section('main')
    @include('components.breadcrumb', ['items' => ['account', 'profile']])

    {{-- Nav Tabs --}}
    <ul class="pill-tabs-container" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
        <li role="presentation">
            <button class="nav-item" id="__bookings-tab" data-tabs-target="#__bookings" type="button" role="tab" aria-controls="__bookings" aria-selected="false">
                Bookings
            </button>
        </li>
        <li role="presentation">
            <button class="nav-item" id="__id_docs-tab" data-tabs-target="#__id_docs" type="button" role="tab" aria-controls="__id_docs" aria-selected="false">
                ID Docs
            </button>
        </li>
    </ul>

    <div id="default-tab-content">
        <div class="hidden" id="__bookings" role="tabpanel" aria-labelledby="__bookings-tab">
            @component('components.empty-state')
                @slot('title', 'Bookings')
                @slot('caption', 'You currently do not have any upcoming bookings.')
                <a href="{{ route('account.bookings') }}" class="btn btn-white">
                    View All Bookings
                </a>
            @endcomponent
        </div>
        <div class="hidden" id="__id_docs" role="tabpanel" aria-labelledby="__id_docs-tab">
            <p class="text-sm text-white">
                ID Docs Tab
            </p>
        </div>
    </div>
@endsection
