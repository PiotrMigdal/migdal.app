@props(['active'])

@php
$classes = ($active ?? false)
            ? 'tracking-wider font-bold inline-flex items-center px-1 pt-1 border-b-2 border-brand-pink leading-5 focus:outline-none focus:border-brand-pink transition duration-150 ease-in-out'
            : 'tracking-wider font-bold inline-flex items-center px-1 pt-1 border-b-2 border-transparent leading-5 text-gray-400 hover:text-gray-300 hover:border-gray-300 focus:outline-none focus:text-gray-300 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
