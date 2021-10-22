
<article class="card-shadow p-4 lg:p-8 m-4 ">
    <div class="lg:flex">
        @isset($thumbnail)
        <aside class="m-auto lg:flex-shrink-0 p-6">
            {{ $thumbnail }}
        </aside>
        @endisset
        @isset($header)
        <header class="lg:flex-1">
            {{ $header }}
        </header>
        @endisset
    </div>
    <section class="pt-6">
        {{ $slot }}
    </section>
</article>
