<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-gray-800 text-white hover:bg-gray-700 active:bg-gray-900 focus:border-gray-900 focus:ring ring-gray-300 bg-gray-800 text-white hover:bg-gray-700 active:bg-gray-900 focus:border-gray-900 focus:ring ring-gray-300 inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest focus:outline-none disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
