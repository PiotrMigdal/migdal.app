
<!-- Left navigation -->
<aside class="hidden mt-5 sm:block w-48 sm:flex-shrink-0">
    <nav class="bg-brand-gray-dark mr-8">
        <x-nav-left-link :href="route('admin')" :active="request()->routeIs('admin')">
            {{ __('Profile') }}
        </x-nav-left-link>
        <x-nav-left-link :href="route('timeline')" :active="request()->routeIs('timeline')">
            {{ __('About') }}
        </x-nav-left-link>
        <x-nav-left-link :href="route('timeline')" :active="request()->routeIs('timeline')">
            {{ __('Timeline') }}
        </x-nav-left-link>
        <x-nav-left-link :href="route('timeline')" :active="request()->routeIs('timeline')">
            {{ __('Courses') }}
        </x-nav-left-link>
        <x-nav-left-link :href="route('timeline')" :active="request()->routeIs('timeline')">
            {{ __('Others') }}
        </x-nav-left-link>
    </nav>
</aside>

<!-- Responsive left navigation -->
<nav class="sm:hidden grid grid-cols-2 gap-2">
        <x-responsive-nav-left-link :href="route('admin')" :active="request()->routeIs('admin')">
            {{ __('timeline') }}
        </x-responsive-nav-left-link>
        <x-responsive-nav-left-link :href="route('timeline')" :active="request()->routeIs('timeline')">
            {{ __('Timeline') }}
        </x-responsive-nav-left-link>
        <x-responsive-nav-left-link :href="route('timeline')" :active="request()->routeIs('timeline')">
            {{ __('Courses') }}
        </x-responsive-nav-left-link>
        <x-responsive-nav-left-link :href="route('timeline')" :active="request()->routeIs('timeline')">
            {{ __('Others') }}
        </x-responsive-nav-left-link>
</nav>