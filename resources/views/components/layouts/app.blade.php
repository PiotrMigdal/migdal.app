@props(['user'])
<x-layouts.layout>
    <div class="sm:flex">
        <!-- Left navigation -->
        <aside class="hidden mt-5 sm:block w-48 sm:flex-shrink-0">
            <nav class="bg-brand-gray-dark mr-8">
                <x-nav-left-link :href="route('about', $user->username)" :active="request()->routeIs('about')">
                    {{ __('About') }}
                </x-nav-left-link>
                <x-nav-left-link :href="route('timeline')" :active="request()->routeIs('timeline')">
                    {{ __('Timeline') }}
                </x-nav-left-link>
                <x-nav-left-link :href="route('projects')" :active="request()->routeIs('projects')">
                    {{ __('Projects') }}
                </x-nav-left-link>
                <x-nav-left-link :href="route('courses')" :active="request()->routeIs('courses')">
                    {{ __('Courses') }}
                </x-nav-left-link>
            </nav>
        </aside>

        <!-- Responsive left navigation -->
        <nav class="sm:hidden grid grid-cols-2 gap-2">
                <x-responsive-nav-left-link :href="route('about', $user->username)" :active="request()->routeIs('about')">
                    {{ __('About') }}
                </x-responsive-nav-left-link>
                <x-responsive-nav-left-link :href="route('timeline')" :active="request()->routeIs('timeline')">
                    {{ __('Timeline') }}
                </x-responsive-nav-left-link>
                <x-responsive-nav-left-link :href="route('projects')" :active="request()->routeIs('projects')">
                    {{ __('Projects') }}
                </x-responsive-nav-left-link>
                <x-responsive-nav-link :href="route('courses')" :active="request()->routeIs('courses')">
                    {{ __('Courses') }}
                </x-responsive-nav-link>
        </nav>

        <article class="flex-1">
            <!-- Page Heading -->
            <header class="py-4">
                <div class="shadow-lg lg:px-8 mx-auto px-4 py-6 mb-6 sm:px-6">
                    <div class="bg-brand-gray-dark font-semibold inline leading-tight px-8 py-2 rounded-full shadow-md tracking-wide uppercase">
                    {{ $header }}
                    </div>
                </div>
            </header>
            <!-- Settings content -->
            <section>
                <div class="my-3">
                    {{ $slot }}
                </div>
            </section>
        </article>
    </div>
</x-layouts.layout>
