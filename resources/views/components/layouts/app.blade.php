@props(['user' => false, 'admin' => false])
<x-layouts.layout>
    <div class="sm:flex">
        @if ($admin == false)
        @include('components.layouts._navigation-app')
        @else
        @include('components.layouts._navigation-admin')
        @endif

        <article class="flex-1">
            <!-- Page Heading -->
            <header class="py-4">
                <div class="lg:px-8 mb-6 mx-auto px-4 py-6 sm:px-6">
                    <div class="bg-brand-gray-dark font-semibold inline leading-tight px-8 py-2 rounded-full shadow-md tracking-wide uppercase">
                    {{ $header }}
                    </div>
                </div>
            </header>
            <!-- Settings content -->
            <section>
                <div class="lg:px-8 mb-6 mx-auto px-4 py-6 sm:px-6">
                    {{ $slot }}
                </div>
            </section>
        </article>
    </div>
</x-layouts.layout>
