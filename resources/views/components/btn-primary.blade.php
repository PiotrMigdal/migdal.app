<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-brand-pink text-white hover:bg-brand-pink-dark active:bg-brand-pink-light focus:border-brand-pink focus:ring ring-brand-pink inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest focus:outline-none disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
