@props(['name'])
<div class="mb-6">
    <x-form.label name="{{ $name }}"/>

    <input {{ $attributes(['value' => old($name)]) }} name="{{ $name }}" id="{{ $name }}" class="bg-gray-200 focus:ring focus:ring-brand-pink focus:ring-opacity-50 rounded-sm shadow-sm text-gray-100" >

    <x-form.error name="{{ $name }}"/>
</div>
