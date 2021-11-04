
<article {{ $attributes->merge(['class' => 'card-shadow bg-brand-gray-dark mb-6']) }}>
    <div class="p-4 lg:p-8">
        <div class="lg:flex">
            @isset($thumbnail)
            <aside class="m-auto lg:flex-shrink-0 p-6">
                {{ $thumbnail }}
            </aside>
            @endisset
            @isset($featured_image)
            <aside class="m-auto lg:flex-shrink-0 p-6">
                {{ $featured_image }}
            </aside>
            @endisset
            <div class="lg:flex-1 px-4">
                @isset($header)
                <header>
                    {{ $header }}
                </header>
                @endisset
                @isset($features)
                <section>
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
