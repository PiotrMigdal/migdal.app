
<!-- Left navigation -->
<aside class="hidden mt-5 sm:block w-48 sm:flex-shrink-0">
    <nav class="bg-brand-gray-dark mr-8">
        <x-nav-left-link :href="route('user.show', $user->username)" :active="request()->routeIs(['user.show'])">
            {{ __('Profile') }}
        </x-nav-left-link>
        <x-nav-left-link :href="route('about.index', $user->username)" :active="request()->routeIs(['about.index', 'about.show'])">
            {{ __('About') }}
        </x-nav-left-link>
        <x-nav-left-link :href="route('jobs.index', $user->username)" :active="request()->routeIs('jobs.index')">
            {{ __('Timeline') }}
        </x-nav-left-link>
        <x-nav-left-link :href="route('projects.index', $user->username)" :active="request()->routeIs(['projects.index', 'projects.show'])">
            {{ __('Projects') }}
        </x-nav-left-link>
        <x-nav-left-link :href="route('courses.index', $user->username)" :active="request()->routeIs(['courses.index', 'courses.show'])">
            {{ __('Courses') }}
        </x-nav-left-link>
    </nav>
</aside>

<!-- Responsive left navigation -->
<nav class="sm:hidden grid grid-cols-2 gap-2">
        <x-responsive-nav-left-link :href="route('user.show', $user->username)" :active="request()->routeIs(['user.show'])">
            {{ __('Profile') }}
        </x-responsive-nav-left-link>
        <x-responsive-nav-left-link :href="route('about.index', $user->username)" :active="request()->routeIs(['about.index', 'about.show'])">
            {{ __('About') }}
        </x-responsive-nav-left-link>
        <x-responsive-nav-left-link :href="route('jobs.index', $user->username)" :active="request()->routeIs('jobs.index')">
            {{ __('Timeline') }}
        </x-responsive-nav-left-link>
        <x-responsive-nav-left-link :href="route('projects.index', $user->username)" :active="request()->routeIs(['projects.index', 'projects.show'])">
            {{ __('Projects') }}
        </x-responsive-nav-left-link>
        <x-responsive-nav-left-link :href="route('courses.index', $user->username)" :active="request()->routeIs(['courses.index', 'courses.show'])">
            {{ __('Courses') }}
        </x-responsive-nav-left-link>
</nav>
