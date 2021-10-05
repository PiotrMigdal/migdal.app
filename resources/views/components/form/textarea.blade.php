@props(['name', 'label' => true, 'labelname'])
<div class="mb-6">
    @if ($label)
        <x-form.label name="{{ $labelname ?? $name }}"/>
    @endif

    <textarea name="{{ $name }}" id="{{ $name }}" required
    class="border border-gray-300 rounded-sm w-full {{ !$label ? 'mt-3' : '' }}">{{ $slot ?? old($name) }}</textarea>

    <x-form.error name="{{ $name }}"/>
</div>
