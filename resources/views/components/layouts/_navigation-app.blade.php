
<!-- Left navigation -->
<aside class="hidden mt-5 sm:block w-48 sm:flex-shrink-0">
    <nav class="bg-brand-gray-dark mr-8">
        <x-nav-left-link :href="route('about.index', $user->username)" :active="request()->routeIs(['about.index', 'show.about'])">
            {{ __('About') }}
        </x-nav-left-link>
        <x-nav-left-link :href="route('timeline')" :active="request()->routeIs('timeline')">
            {{ __('Timeline') }}
        </x-nav-left-link>
        <x-nav-left-link :href="route('projects.index', $user->username)" :active="request()->routeIs('projects.index')">
            {{ __('Projects') }}
        </x-nav-left-link>
        <x-nav-left-link :href="route('courses')" :active="request()->routeIs('courses')">
            {{ __('Courses') }}
        </x-nav-left-link>
    </nav>
</aside>

<!-- Responsive left navigation -->
<nav class="sm:hidden grid grid-cols-2 gap-2">
        <x-responsive-nav-left-link :href="route('about.index', $user->username)" :active="request()->routeIs(['about.index', 'show.about'])">
            {{ __('About') }}
        </x-responsive-nav-left-link>
        <x-responsive-nav-left-link :href="route('timeline')" :active="request()->routeIs('timeline')">
            {{ __('Timeline') }}
        </x-responsive-nav-left-link>
        <x-responsive-nav-left-link :href="route('projects.index', $user->username)" :active="request()->routeIs('projects.index')">
            {{ __('Projects') }}
        </x-responsive-nav-left-link>
        <x-responsive-nav-link :href="route('courses')" :active="request()->routeIs('courses')">
            {{ __('Courses') }}
        </x-responsive-nav-link>
</nav>
