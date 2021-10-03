
<article class="lg:flex mb-10">
    <aside class="lg:flex-shrink-0 p-6">
        <img class="mx-auto h-48 w-48 rounded-full border-gray-50 border-2 object-cover" src="\images\small.jpg" alt="">
    </aside>
    <section class="border border-brand-gray-dark rounded-3xl shadow-lg lg:flex-1 p-10">
        <h1>
            {{ $title }}
        </h1>
        {{ $slot }}
    </section>
</article>