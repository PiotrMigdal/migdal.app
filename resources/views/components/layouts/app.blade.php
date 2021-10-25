@props(['user' => Auth::user(), 'admin' => false])
<x-layouts.layout :user='$user'>
    <div class="md:flex">
        @if ($admin == false)
        @include('components.layouts._navigation-app')
        @elseif ($admin == true)
        @include('components.layouts._navigation-admin')
        @endif

        <article class="flex-1">
            <!-- Page Heading -->
            <header class="py-4">
                <div class="bg-brand-gray-dark font-semibold inline leading-tight px-8 py-2 rounded-full shadow-md tracking-wide uppercase">
                {{ $header }}
                </div>
            </header>
            <!-- Settings content -->
            <section>
                {{ $slot }}
            </section>
        </article>
    </div>
</x-layouts.layout>
