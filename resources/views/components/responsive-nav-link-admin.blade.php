@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-brand-pink-dark block pl-3 pr-4 py-2 border-l-4 border-brand-pink text-base font-medium focus:outline-none focus:text-gray-500 focus:bg-gray-100 focus:border-gray-400 transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-brand-pink-dark hover:text-brand-pink focus:outline-none focus:brand-pink-light transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
