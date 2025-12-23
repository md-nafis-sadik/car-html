@props([
    'id' => '',
    'value' => 'default_value',
    'name' => 'default_name',
    'className' => 'gap-6 max-w-[435px] pt-4 px-5 pb-5 rounded-[20px] bg-white border-2 border-[#D4D4D4]',
    'checked' => '',
    'onClick' => '',
])

<div
    class="relative inline-flex items-center {{ $className }} @if($checked) !border-primary @endif">
    <div class="w-5 h-5">
        <input type="radio" value="{{ $value }}" name="{{ $name }}" id="{{ isset($id) ? $id : $value }}"
            class="absolute inset-0 z-10 w-full h-full opacity-0 cursor-pointer" @if($checked) checked="{{ $checked }}" @endif @if($onClick) onclick="{{ $onClick }}"@endif>
        <div class="check-appearance"></div>
    </div>
    @if ($slot !== '')
        {{ $slot }}
    @endif
</div>

@pushOnce('js')
    <script src="{{ asset('scripts/InputRadio.js') }}"></script>
@endPushOnce
