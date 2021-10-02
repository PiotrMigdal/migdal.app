<x-layouts.app :user="$about->user">
    <x-slot name="header">
        {{ __('About ' . $about->user->name) }}
    </x-slot>
        <article class="grid lg:grid-cols-10 mb-10">
            <aside class="lg:col-span-3 px-6 m-auto">
                <img class="my-auto h-48 w-48 rounded-full border-gray-50 border-2 object-cover" src="\images\small.jpg" alt="">
            </aside>
            <section class="lg:col-span-6">
                <h1>
                    {{ $about->title }}
                </h1>
                {!! $about->excerpt !!}
                <div class="flex justify-end">
                    <x-btn-secondary href="#" class="">
                        Read more
                    </x-btn-secondary>
                </div>
            </section>
        </article>
</x-layouts.app>

