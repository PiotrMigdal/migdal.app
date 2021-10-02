
<x-layouts.layout>

    <div class="sm:flex">
        <!-- Left navigation -->
        <aside class="hidden sm:block w-48 sm:flex-shrink-0">
            <nav class="bg-brand-gray-dark mr-8">
                <x-nav-left-link :href="route('admin')" :active="request()->routeIs('admin')">
                    {{ __('About') }}
                </x-nav-left-link>
                <x-nav-left-link :href="route('about')" :active="request()->routeIs('about')">
                    {{ __('Timeline') }}
                </x-nav-left-link>
                <x-nav-left-link :href="route('about')" :active="request()->routeIs('about')">
                    {{ __('Courses') }}
                </x-nav-left-link>
                <x-nav-left-link :href="route('about')" :active="request()->routeIs('about')">
                    {{ __('Others') }}
                </x-nav-left-link>
            </nav>
        </aside>

        <!-- Responsive left navigation -->
        <nav class="sm:hidden grid grid-cols-2 gap-2">
                <x-responsive-nav-left-link :href="route('admin')" :active="request()->routeIs('admin')">
                    {{ __('About') }}
                </x-responsive-nav-left-link>
                <x-responsive-nav-left-link :href="route('about')" :active="request()->routeIs('about')">
                    {{ __('Timeline') }}
                </x-responsive-nav-left-link>
                <x-responsive-nav-left-link :href="route('about')" :active="request()->routeIs('about')">
                    {{ __('Courses') }}
                </x-responsive-nav-left-link>
                <x-responsive-nav-left-link :href="route('about')" :active="request()->routeIs('about')">
                    {{ __('Others') }}
                </x-responsive-nav-left-link>
        </nav>

        <!-- Settings content -->
        <article class="flex-1">
            <div class="my-3">
                {{ $slot }}
            </div>
        </article>
    </div>
</x-layouts.layout>
