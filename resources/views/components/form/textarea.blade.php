@props(['name', 'label' => true, 'labelname'])
<div class="mb-6">
    @if ($label)
        <x-form.label name="{{ $labelname ?? $name }}"/>
    @endif

    <textarea name="{{ $name }}" id="{{ $name }}" required
    {{ $attributes->merge(['class' => 'h-10 bg-gray-900 focus:outline-none focus:ring-1 focus:ring-brand-pink focus:ring-opacity-50 p-2 ring-1 ring-brand-gray-light rounded-md shadow-sm w-full resize-y overflow-hidden']) }}
    >{{ $slot ?? old($name) }}</textarea>

    <x-form.error name="{{ $name }}"/>
</div>
