<x-layouts.app :user="Auth::user()">
    <x-slot name="header">
        {{ __('Timeline ' . Auth::user()->name) }}
    </x-slot>
    <div class="grid md:grid-cols-6">
        <aside class="hidden md:block col-span-1 bg-brand-gray-dark mr-4 lg:mr-8">
            <ul class="border-gray-500 border-r mx-auto my-10 pb-5 w-24">
                <li class="border-b border-gray-500 p-2 relative text-center">
                    <a href="#">Now</a>
                    <div class="-right-2 absolute bg-brand-pink h-4 rounded-full top-3 w-4"></div>
                </li>
                <li class="border-b border-gray-500 p-2 relative text-center">
                    <a href="#">2021</a>
                </li>
                <li class="border-b border-gray-500 p-2 relative text-center">
                    <a href="#">2020</a>
                </li>
                <li class="border-b border-gray-500 p-2 relative text-center">
                    <a href="#">2018 - 2019</a>
                </li>
            </ul>
        </aside>
        <article class="sm:col-span-5">
            <header class="grid grid-cols-7 sm:grid-cols-11">
                <div class="col-span-1 border-gray-500 border-r">
                </div>
                <div class="sm:col-span-5 col-span-3 text-center border-gray-500 border-r">
                    <h1 class="px-4">Main</h1>
                </div>
                <div class="sm:col-span-5 col-span-3 text-center">
                    <h1 class="mb-1 px-4">Additional</h1>
                    <p class="mb-3">(web related)</p>
                </div>
            </header>
            {{-- Section is one year --}}
            <section class="border-dashed border-gray-500 border-t grid sm:grid-cols-11 grid-cols-7">
                <div class="col-span-1 border-gray-500 border-r">
                    <div class="flex h-full items-center">
                        <span class="-rotate-90 text-3xl text-gray-500 transform w-full whitespace-nowrap text-center">Now</span>
                    </div>
                </div>
                <ul class="border-gray-500 border-r col-span-3 p-4 sm:col-span-5">
                    <li>
                        <div class="sm:flex">
                            <div>
                                <h3>Officia suscipit</h3>
                                <div class="hidden sm:block text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit:<br>
                                    - Sunt porro a voluptates enim ex in nemo facilis,<br>
                                    - incidunt fugit voluptatibus quam laudantium voluptate, officia suscipit ipsam beatae?
                                </div>
                            </div>
                            <div class="sm:flex-shrink-0 w-26 sm:p-3">
                                <img class="m-auto h-20 w-20 rounded-full border-gray-50 border-2 object-cover" src="images\small.jpg" alt="">
                            </div>
                        </div>
                        <div class="border-brand-pink border-dashed border-t my-4 tracking-normal w-full">
                            <p class="font-mono p-1 text-brand-pink text-center text-xs">30 September 2021</p>
                        </div>
                    </li>
                </ul>
                <ul class="sm:col-span-5 col-span-3 p-4">
                </ul>
            </section>
            <section class="border-dashed border-gray-500 border-t grid sm:grid-cols-11 grid-cols-7">
                <div class="col-span-1 border-gray-500 border-r">
                    <div class="flex h-full items-center">
                        <span class="-rotate-90 text-3xl text-gray-500 transform w-full whitespace-nowrap text-cente">2021</span>
                    </div>
                </div>
                <ul class="border-gray-500 border-r col-span-3 p-4 sm:col-span-5">
                    <li>
                        <div class="sm:flex">
                            <div>
                                <h3>Officia suscipit</h3>
                                <div class="hidden sm:block text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit:<br>
                                    - Sunt porro a voluptates enim ex in nemo facilis,<br>
                                    - incidunt fugit voluptatibus quam laudantium voluptate, officia suscipit ipsam beatae?
                                </div>
                            </div>
                            <div class="sm:flex-shrink-0 w-26 sm:p-3">
                                <img class="m-auto h-20 w-20 rounded-full border-gray-50 border-2 object-cover" src="images\small.jpg" alt="">
                            </div>
                        </div>
                        <div class="border-brand-pink border-dashed border-t my-4 tracking-normal w-full">
                            <p class="font-mono p-1 text-brand-pink text-center text-xs">30 September 2021</p>
                        </div>
                    </li>
                </ul>
                <ul class="sm:col-span-5 col-span-3 p-4">
                    <li>
                        <div class="sm:flex">
                            <div>
                                <h3>Officia suscipit</h3>
                                <div class="hidden sm:block text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit:<br>
                                    - Sunt porro a voluptates enim ex in nemo facilis,<br>
                                    - incidunt fugit voluptatibus quam laudantium voluptate, officia suscipit ipsam beatae?
                                </div>
                            </div>
                            <div class="sm:flex-shrink-0 w-26 sm:p-3">
                                <img class="m-auto h-20 w-20 rounded-full border-gray-50 border-2 object-cover" src="images\small.jpg" alt="">
                            </div>
                        </div>
                        <div class="border-brand-pink border-dashed border-t my-4 tracking-normal w-full">
                            <p class="font-mono p-1 text-brand-pink text-center text-xs">30 September 2021</p>
                        </div>
                    </li>
                    <li>
                        <div class="sm:flex">
                            <div>
                                <h3>Officia suscipit</h3>
                                <div class="hidden sm:block text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit:<br>
                                    - Sunt porro a voluptates enim ex in nemo facilis,<br>
                                    - incidunt fugit voluptatibus quam laudantium voluptate, officia suscipit ipsam beatae?
                                </div>
                            </div>
                            <div class="sm:flex-shrink-0 w-26 sm:p-3">
                                <img class="m-auto h-20 w-20 rounded-full border-gray-50 border-2 object-cover" src="images\small.jpg" alt="">
                            </div>
                        </div>
                        <div class="border-brand-pink border-dashed border-t my-4 tracking-normal w-full">
                            <p class="font-mono p-1 text-brand-pink text-center text-xs">30 September 2021</p>
                        </div>
                    </li>
                </ul>
            </section>
            <section class="border-dashed border-gray-500 border-t grid sm:grid-cols-11 grid-cols-7">
                <div class="col-span-1 border-gray-500 border-r">
                    <div class="flex h-full items-center">
                        <span class="-rotate-90 text-3xl text-gray-500 transform w-full whitespace-nowrap text-cente">2018 - 2019</span>
                    </div>
                </div>
                <ul class="border-gray-500 border-r col-span-3 p-4 sm:col-span-5">
                    <li>
                        <div class="sm:flex">
                            <div>
                                <h3>Officia suscipit</h3>
                                <div class="hidden sm:block text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit:<br>
                                    - Sunt porro a voluptates enim ex in nemo facilis,<br>
                                    - incidunt fugit voluptatibus quam laudantium voluptate, officia suscipit ipsam beatae?
                                </div>
                            </div>
                            <div class="sm:flex-shrink-0 w-26 sm:p-3">
                                <img class="m-auto h-20 w-20 rounded-full border-gray-50 border-2 object-cover" src="images\small.jpg" alt="">
                            </div>
                        </div>
                        <div class="border-brand-pink border-dashed border-t my-4 tracking-normal w-full">
                            <p class="font-mono p-1 text-brand-pink text-center text-xs">30 September 2021</p>
                        </div>
                    </li>
                </ul>
                <ul class="sm:col-span-5 col-span-3 p-4">
                    <li>
                        <div class="sm:flex">
                            <div>
                                <h3>Officia suscipit</h3>
                                <div class="hidden sm:block text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit:<br>
                                    - Sunt porro a voluptates enim ex in nemo facilis,<br>
                                    - incidunt fugit voluptatibus quam laudantium voluptate, officia suscipit ipsam beatae?
                                </div>
                            </div>
                            <div class="sm:flex-shrink-0 w-26 sm:p-3">
                                <img class="m-auto h-20 w-20 rounded-full border-gray-50 border-2 object-cover" src="images\small.jpg" alt="">
                            </div>
                        </div>
                        <div class="border-brand-pink border-dashed border-t my-4 tracking-normal w-full">
                            <p class="font-mono p-1 text-brand-pink text-center text-xs">30 September 2021</p>
                        </div>
                    </li>
                    <li>
                        <div class="sm:flex">
                            <div>
                                <h3>Officia suscipit</h3>
                                <div class="hidden sm:block text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit:<br>
                                    - Sunt porro a voluptates enim ex in nemo facilis,<br>
                                    - incidunt fugit voluptatibus quam laudantium voluptate, officia suscipit ipsam beatae?
                                </div>
                            </div>
                            <div class="sm:flex-shrink-0 w-26 sm:p-3">
                                <img class="m-auto h-20 w-20 rounded-full border-gray-50 border-2 object-cover" src="images\small.jpg" alt="">
                            </div>
                        </div>
                        <div class="border-brand-pink border-dashed border-t my-4 tracking-normal w-full">
                            <p class="font-mono p-1 text-brand-pink text-center text-xs">30 September 2021</p>
                        </div>
                    </li>
                </ul>
            </section>
        </article>
    </div>
</x-layouts.app>

