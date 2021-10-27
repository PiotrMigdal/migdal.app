
<article {{ $attributes->merge(['class' => 'group hover:bg-brand-gray-dark p-4 lg:p-8 m-4 relative rounded-xl']) }}>
    <section class="">
        @isset($thumbnail)
        <div class="m-auto">
            {{ $thumbnail }}
        </div>
        @endisset
        @isset($header)
        <div>
            <h1 class="transition hover:text-gray-400 text-center mb-4 hover:underline">{{ $header }}</h1>
        </div>
        @endisset
    </section>
    <div class="mb-4 bg-gradient-to-r from-transparent via-gray-100 to-transparent h-0.5"></div>
    <section class="lg:absolute lg:bg-brand-gray-dark group-hover:block lg:hidden left-0 p-6 pt-0 rounded-b-xl text-sm w-full z-10 text-justify">
        {{ $slot }}
    </section>
</article>
