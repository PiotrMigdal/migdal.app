<x-layouts.app>
    <x-slot name="header">
        {{ __('About ' . Auth::user()->name) }}
    </x-slot>
    <article class="grid lg:grid-cols-5 my-12">
        <aside class="lg:col-span-2 px-6">
            <img class="m-auto h-48 w-48 rounded-full border-gray-50 border-2 object-cover" src="images\small.jpg" alt="">
            <div class="m-auto text-center p-4">
                <div>
                <h2>{{ Auth::user()->name }}</h2>
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
            <img class="my-auto h-48 w-48 rounded-full border-gray-50 border-2 object-cover" src="images\small.jpg" alt="">
        </aside>
        <section class="lg:col-span-3">
            <h1>
                Add new section
            </h1>
        </section>
    </article>
</x-layouts.app>

