@props(['name'])
<label for="{{ $name }}" class="block font-medium text-sm text-gray-100">
    {{ ucwords($name) }}
</label>
