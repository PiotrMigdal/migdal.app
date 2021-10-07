
<article class="lg:flex mb-10">
    <aside class="lg:flex-shrink-0 p-6">
        <img class="mx-auto h-48 w-48 rounded-full border-gray-50 border-2 object-cover" src="\images\small.jpg" alt="">
    </aside>
    <section class="card-shadow p-4 lg:p-8 lg:flex-1  md:mx-10">
        <h1>
            {{ $title }}
        </h1>
        {{ $slot }}
    </section>
</article>
