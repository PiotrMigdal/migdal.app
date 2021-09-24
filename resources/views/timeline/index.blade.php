<x-layouts.app>
    <x-slot name="header">
        {{ __('Timeline ' . Auth::user()->name) }}
    </x-slot>
    <div class="grid sm:grid-cols-6">
        <aside class="hidden sm:block col-span-1 bg-brand-gray-dark mr-8">
            aside
        </aside>
        <article class="sm:col-span-5">
            <header class="grid grid-cols-7 sm:grid-cols-11">
                <div class="col-span-1 border-gray-500 border-r">
                </div>
                <div class="sm:col-span-5 col-span-3 text-center border-gray-500 border-r">
                    <h1 class="h1 px-4">Main Job</h1>
                </div>
                <div class="sm:col-span-5 col-span-3 text-center">
                    <h1 class="h1 mb-1 px-4">Additional</h1>
                    <p class="mb-3">(web related)</p>
                </div>
            </header>
            <section class="border-dashed border-gray-500 border-t grid sm:grid-cols-11 grid-cols-7">
                <div class="col-span-1 border-gray-500 border-r">
                    <div class="transform -rotate-90">2021</div>
                </div>
                <div class="sm:col-span-5 col-span-3 p-6 sm:flex border-gray-500 border-r">
                    <div class="hidden sm:block">Lorem ipsum dolor sit amet, consectetur adipisicing elit:<br>
                        - Sunt porro a voluptates enim ex in nemo facilis. Blanditiis accusantium commodi, <br>
                        - incidunt fugit voluptatibus quam laudantium voluptate, officia suscipit ipsam beatae?
                    </div>
                    <div class="sm:flex-shrink-0 w-26 p-3">
                        <img class="m-auto h-20 w-20 rounded-full border-gray-50 border-2 object-cover" src="images\small.jpg" alt="">
                    </div>
                </div>
                <div class="sm:col-span-5 col-span-3 p-6 sm:flex">
                    <div class="hidden sm:block">Lorem ipsum dolor sit amet, consectetur adipisicing elit:<br>
                        - Sunt porro a voluptates enim ex in nemo facilis. Blanditiis accusantium commodi, <br>
                        - incidunt fugit voluptatibus quam laudantium voluptate, officia suscipit ipsam beatae?
                    </div>
                    <div class="sm:flex-shrink-0 w-26 p-3">
                        <img class="m-auto h-20 w-20 rounded-full border-gray-50 border-2 object-cover" src="images\small.jpg" alt="">
                    </div>
                </div>
            </section>
        </article>
    </div>
</x-layouts.app>

