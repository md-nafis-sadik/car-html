@props([
    'id' => 'checkbox',
    'name' => 'default_name',
    'className' => '',
    'value' => '',
    'disabled' => false,
    'required' => true,
    'onClick' => '',
    'checked' => '',
])
    <input type="checkbox" name="{{ $name }}" id="{{ $id }}" class="accent-primary border-[#cbcbcb] border bg-[#f3f4f6] rounded-[6px] text-white checked:bg-primary checked:text-white checked:ring-primary focus:ring-primary {{ $className }}" {{ $required ? 'required' : null }}
    {{ $disabled ? 'disabled' : null }} @if($onClick) onClick="{{ $onClick }} @endif" @if($checked) checked @endif>
