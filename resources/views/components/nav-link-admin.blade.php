@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-brand-pink-dark duration-150 ease-in-out focus:border-brand-pink focus:outline-none font-medium items-center leading-5 px-6 py-2 rounded-full self-center text-sm transition'
            : 'text-brand-pink duration-150 ease-in-out focus:border-brand-pink focus:outline-none font-medium items-center leading-5 px-6 py-2 rounded-full self-center text-sm transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
