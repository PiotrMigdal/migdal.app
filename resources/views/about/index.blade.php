<x-layouts.app>
    <x-slot name="header">
        {{ __('About ' . Auth::user()->name) }}
    </x-slot>
    <article class="grid lg:grid-cols-5 my-12">
        <aside class="lg:col-span-2 px-6">
            <img class="img-large-circle" src="images\small.jpg" alt="">
            <div class="text-center p-4">
                <h2>{{ Auth::user()->name }}</h2>
                <div>
                    <p>Wyksztalcenie: <span class="text-gray-300">{{ Auth::user()->education }}</span></p>
                    <p>Wiek:  <span class="text-gray-300">{{ Auth::user()->age }}</span></p>
                    <p>Miejsce: <span class="text-gray-300">{{ Auth::user()->main_job }}</span></p>
                    <p>Miejsce: <span class="text-gray-300">{{ Auth::user()->additional_job }}</span></p>
                </div>
            </div>
        </aside>
        <section class="lg:col-span-3">
            <h1>
                {{ Auth::user()->about_me_title }}
            </h1>
            {!! Auth::user()->about_me_body !!}
        </section>
    </article>
    <article class="grid lg:grid-cols-5 my-12">
        <aside class="lg:col-span-2 px-6">
            <img class="img-large-circle" src="images\small.jpg" alt="">
        </aside>
        <section class="lg:col-span-3">
            <h1>
                Add new section
            </h1>
        </section>
    </article>
</x-layouts.app>

