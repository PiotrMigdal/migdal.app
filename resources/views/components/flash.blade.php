@if (session()->has('success'))
    <div x-data="{ show: true }"
        class="fixed bg-green-600 text-white py-4 px-7 rounded-xl bottom-3 right-3 text-xl"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        >
        <p>{{ session('success') }}</p>
    </div>
@endif
