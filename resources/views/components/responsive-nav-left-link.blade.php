@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-center bg-brand-pink-dark block pl-3 pr-4 py-2 text-base font-medium focus:outline-none  transition duration-150 ease-in-out'
            : 'text-center bg-brand-gray-light block pl-3 pr-4 py-2 text-base font-medium hover:bg-gray-700 focus:outline-none focus:bg-gray-500 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
