@props([
    'id' => 'dropdownNavbar',
    'className' => '',
    'menus' => (object) [],
])

<div id="{{ $id }}"
     class="lg:z-10 hidden font-normal lg:bg-white divide-y divide-gray-100 lg:rounded-lg lg:shadow lg:w-52 {{ $className }}"
     data-dropdown-list>
    <ul class="py-2 text-sm text-white border-b border-white lg:text-dark border-opacity-15 lg:border-b-0">
        @foreach ($menus as $menu)
            <li>
                <a href="{{ $menu->route }}"
                   class="block px-4 py-2 font-semibold hover:bg-gray-100 lg:font-normal">{{ $menu->name }}</a>
            </li>
        @endforeach
    </ul>
</div>

@pushOnce('js')
    <script src="{{ asset('scripts/NavbarDropdown.js') }}"></script>
@endpushOnce
