@props([
    'type' => 'text', // input type: text || number || email || date || password
    'name' => 'default_name',
    'className' => '',
    'placeholder' => '',
    'value' => '',
    'disabled' => false,
    'required' => true,
])

<input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
       class="inputStyle {{ $className }}" placeholder="{{ $placeholder }}"
       value="{{ $value }}" {{ $required ? 'required' : '' }} {{ $disabled ? 'disabled' : '' }}>
