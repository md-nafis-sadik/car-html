@extends('layouts.account', [
    'title' => 'Manage Subscriptions'
])

@section('main')
    @include('components.breadcrumb', ['items' => ['account', 'Subscriptions']])

    @component('components.empty-state')
        @slot('title', 'Manage <br> Subscriptions')
        @slot('caption', 'You currently do not have any subscriptions.')
    @endcomponent
@endsection
