@props([
    'name' => 'default_name',
    'className' => '',
    'placeholder' => '',
    'disabled' => false,
    'required' => true,
])
<textarea name="{{ $name }}" id="{{ $name }}" @disabled($disabled) @required($required) @class(['inputStyle', $className]) placeholder="{{ $placeholder }}">{{ $slot }}</textarea>
