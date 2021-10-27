
<article class="group hover:bg-brand-gray-dark p-4 lg:p-8 m-4 relative rounded-xl">
    <section class="">
        @isset($thumbnail)
        <div class="m-auto lg:flex-shrink-0 p-6">
            {{ $thumbnail }}
        </div>
        @endisset
        @isset($header)
        <div class="lg:flex-1">
            <h1 class="transition hover:text-gray-400 text-center">{{ $header }}</h1>
        </div>
        @endisset
    </section>
    <div class="m-4 bg-gradient-to-r from-transparent via-gray-100 to-transparent h-0.5"></div>
    <section class="absolute bg-brand-gray-dark group-hover:block hidden left-0 p-6 pt-0 rounded-b-xl text-sm w-full z-10">
        {{ $slot }}
    </section>
</article>
