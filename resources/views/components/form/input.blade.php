@props(['name', 'labelname'])
<div class="mb-6">
    <x-form.label name="{{ $labelname ?? $name }}"/>

    <input {{ $attributes(['value' => old($name)]) }} name="{{ $name }}" id="{{ $name }}" class="bg-gray-900 focus:outline-none focus:ring-1 focus:ring-brand-pink focus:ring-opacity-50 p-2 ring-1 ring-brand-gray-light rounded-md shadow-sm" >

    <x-form.error name="{{ $name }}"/>
</div>
