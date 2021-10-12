
<article class="lg:flex card-shadow p-4 lg:p-8 m-4 ">
    <aside class="lg:flex-shrink-0 p-6 lg:mr-4">
        {{ $thumbnail }}
    </aside>
    <section class="lg:flex-1">
        <h1>
            {{ $title }}
        </h1>
        {{ $slot }}
    </section>
</article>
