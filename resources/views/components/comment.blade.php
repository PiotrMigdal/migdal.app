@props(["filename"])

<article {{ $attributes->merge(['class' => 'flex m-4 p-4']) }}>
    <aside class="flex-shrink-0 m-auto">
        <x-image-circle class="w-20 h-20" :filename="$filename" alt="User thumbnail"/>
    </aside>
    <section class="flex-1 w-96 ml-4">
        <h2>{{ $header }}</h2>
        {{ $slot }}
    </section>
</article>
