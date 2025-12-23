@props([
    'items' => [
        ['title' => 'Account', 'url' => '/account'],
        ['title' => 'Profile'] // No URL
    ],
    'actions' => [
//        ['title' => 'Account', 'url' => '/account'],
    ]
])

<div class="flex flex-row items-center gap-1 mb-[50px] justify-between">
    <div>

    @foreach ($items as $item)
        <p class="last:after:content-none after:content-['/'] whitespace-nowrap after:ml-1 inline-flex items-center text-xs text-[#767A83] font-semibold first:text-primary uppercase after:text-[#767A83] group">
            <img src="{{ asset('assets/svgs/green_lantern.svg') }}" class="h-[10px] w-full group-first:block hidden mr-2" alt="">
            @if (isset($item['url']))
                <a href="{{ $item['url'] }}" class="group-first:underline group-first:underline-offset-2">{{ $item['title'] }}</a>
            @else
                <span class="group-first:underline group-first:underline-offset-2">{{ $item['title'] }}</span>
            @endif
        </p>
    @endforeach
    </div>

    @if($actions)
        <div class="float-right">
            @foreach($actions as $action)
                <a class="text-sm font-medium text-white capitalize text-opacity-80 hover:text-opacity-100 w-max" href="{{ $action['url'] }}" target="_blank">{{ $action['title'] }}</a>
            @endforeach
        </div>
    @endif
</div>
