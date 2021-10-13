
<!-- Left navigation -->
<aside class="hidden mt-5 sm:block w-48 sm:flex-shrink-0">
    <nav class="bg-brand-gray-dark mr-8">
        <x-nav-left-link :href="route('user.edit')" :active="request()->routeIs('user.edit')">
            {{ __('Profile') }}
        </x-nav-left-link>
        <x-nav-left-link :href="route('about.index.admin')" :active="request()->routeIs(['about.index.admin', 'about.edit', 'about.create'])">
            {{ __('About') }}
        </x-nav-left-link>
        <x-nav-left-link :href="route('timeline')" :active="request()->routeIs('timeline')">
            {{ __('Timeline') }}
        </x-nav-left-link>
        <x-nav-left-link :href="route('projects.index.admin')" :active="request()->routeIs(['projects.index.admin', 'projects.edit', 'projects.create'])">
            {{ __('Projects') }}
        </x-nav-left-link>
        <x-nav-left-link :href="route('courses.index.admin')" :active="request()->routeIs(['courses.index.admin', 'courses.edit', 'courses.create'])">
            {{ __('Courses') }}
        </x-nav-left-link>
    </nav>
</aside>

<!-- Responsive left navigation -->
<nav class="sm:hidden grid grid-cols-2 gap-2">
        <x-responsive-nav-left-link :href="route('user.edit')" :active="request()->routeIs('user.edit')">
            {{ __('Profile') }}
        </x-responsive-nav-left-link>
        <x-responsive-nav-left-link :href="route('about.index.admin')" :active="request()->routeIs(['about.index.admin', 'about.edit', 'about.create'])">
            {{ __('About') }}
        </x-responsive-nav-left-link>
        <x-responsive-nav-left-link :href="route('projects.index.admin')" :active="request()->routeIs(['projects.index.admin', 'projects.edit', 'projects.create'])">
            {{ __('Projects') }}
        </x-responsive-nav-left-link>
        <x-responsive-nav-left-link :href="route('courses.index.admin')" :active="request()->routeIs(['courses.index.admin', 'courses.edit', 'courses.create'])">
            {{ __('Courses') }}
        </x-responsive-nav-left-link>
        <x-responsive-nav-left-link :href="route('timeline')" :active="request()->routeIs('timeline')">
            {{ __('Others') }}
        </x-responsive-nav-left-link>
</nav>
