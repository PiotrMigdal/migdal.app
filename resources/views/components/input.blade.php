@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-brand-gray-light focus:ring focus:ring-brand-pink focus:ring-opacity-50 rounded-sm shadow-sm text-gray-100']) !!}>
