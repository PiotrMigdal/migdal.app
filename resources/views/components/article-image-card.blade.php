
<article {{ $attributes->merge(['class' => 'card-shadow bg-brand-gray-dark mb-6']) }}>
    @isset($featured_image)
        {{ $featured_image }}
    @endisset
    <div class="p-4 lg:p-8">
        <div class="lg:flex">
            @isset($thumbnail)
            <aside class="m-auto lg:flex-shrink-0 p-6">
                {{ $thumbnail }}
            </aside>
            @endisset
            <div class="lg:flex-1">
                @isset($header)
                <header>
                    {{ $header }}
                </header>
                @endisset
                @isset($features)
                <section class="font-mono">
                    {{ $features }}
                </section>
                @endisset
            </div>
        </div>
        <section class="pt-6">
            {{ $slot }}
        </section>
    </div>
</article>
