@if (session()->has('success'))
    <div x-data="{ show: true }"
        class="fixed bg-green-600 text-white py-1 px-10 rounded-lg bottom-3 right-3 text-sm opacity-80"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        >
        <p>{{ session('success') }}</p>
    </div>
@elseif (session()->has('error'))
<div x-data="{ show: true }"
    class="fixed bg-red-600 text-white py-1 px-10 rounded-lg bottom-3 right-3 text-sm opacity-80"
    x-init="setTimeout(() => show = false, 4000)"
    x-show="show"
    >
    <p>{{ session('error') }}</p>
</div>
@endif
