@props([
    'image' => asset('assets/images/default-header.png'), //default image
    'name' => '',
    'caption' => '',
    'slot' => '',
])
<header class="page-header pt-[150px] px-4 sm:px-6 lg:px-24 xl:px-40 pb-20"
        style="background: linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.7)), url('{{ $image }}') no-repeat center center/cover;">
    @component('components.header-content', ['name' => $name, 'absolute' => false])
        @if ($caption !== '')
            @slot('caption')
                {{ $caption }}
            @endslot
        @endif
        {{ $slot }}
    @endcomponent
</header>
