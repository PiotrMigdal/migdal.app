@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-brand-pink text-base font-medium focus:outline-none focus:text-gray-500 focus:bg-gray-100 focus:border-gray-400 transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-400 hover:text-gray-300 hover:border-gray-300 focus:outline-none focus:text-gray-50 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
