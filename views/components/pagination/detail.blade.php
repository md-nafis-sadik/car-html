@props([
    'data'
])

<p class="text-xs font-semibold text-center text-[#96989C] sm:text-[15px]">
    {!! __('Showing') !!}
    @if ($data->firstItem())
        <span class="font-medium text-[#50535A]">{{ $data->firstItem() }}</span>
        {!! __('to') !!}
        <span class="font-medium text-[#50535A]">{{ $data->lastItem() }}</span>
    @else
        {{ $data->count() }}
    @endif
    {!! __('of') !!}
    <span class="font-medium text-[#50535A]">{{ $data->total() }}</span>
    {!! __('results') !!}
</p>
