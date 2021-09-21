<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-gray-800 text-white hover:bg-gray-700 active:bg-gray-900 focus:border-gray-900 focus:ring ring-gray-300']) }}>
    {{ $slot }}
</button>
