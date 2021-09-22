<x-layouts.app>
    <x-slot name="header">
        {{ __('About ' . Auth::user()->name) }}
    </x-slot>
    <article class="grid lg:grid-cols-5 my-12">
        <aside class="lg:col-span-2 px-6">
            <img class="m-auto h-48 w-48 rounded-full border-gray-50 border-2 object-cover" src="images\small.jpg" alt="">
        </aside>
        <section class="lg:col-span-3">
            <h1 class="font-headline lg:text-xl my-10 sm:text-3xl text-2xl">
                Why this website done
            </h1>
            <p class="tracking-wide my-2">Section. Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, sed! At facere sunt molestias voluptates perspiciatis quam quas iusto quia vitae, libero quibusdam autem vel modi ducimus soluta perferendis id! Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, sed! At facere sunt molestias voluptates perspiciatis quam quas iusto quia vitae, libero quibusdam autem vel modi ducimus soluta perferendis id!</p>
            <p class="tracking-wide my-2">Section. Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, sed! At facere sunt molestias voluptates perspiciatis quam quas iusto quia vitae, libero quibusdam autem vel modi ducimus soluta perferendis id!</p>
            <p class="tracking-wide my-2">Section. Asto quia vitae, libero quibusdam autem vel modi ducimus soluta perferendis id!</p>
        </section>
    </article>
    <article class="grid lg:grid-cols-5 my-12">
        <aside class="lg:col-span-2 px-6">
            <img class="m-auto h-48 w-48 rounded-full border-gray-50 border-2 object-cover" src="images\small.jpg" alt="">
        </aside>
        <section class="lg:col-span-3">
            <h1 class="font-headline lg:text-xl my-10 sm:text-3xl text-2xl">
                Why this website done
            </h1>
            <p class="tracking-wide my-2">Section. Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, sed! At facere sunt molestias voluptates perspiciatis quam quas iusto quia vitae, libero quibusdam autem vel modi ducimus soluta perferendis id!</p>
            <p class="tracking-wide my-2">Section. Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, sed! At facere sunt molestias voluptates perspiciatis quam quas iusto quia vitae, Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, sed! At facere sunt molestias voluptates perspiciatis quam quas iusto quia vitae, libero quibusdam autem vel modi ducimus soluta perferendis id!libero quibusdam autem vel modi ducimus soluta perferendis id!</p>
        </section>
    </article>
</x-layouts.app>

