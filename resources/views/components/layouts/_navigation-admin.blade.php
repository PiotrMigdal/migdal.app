
<!-- Left navigation -->
<aside class="hidden ml-5 rounded-xl lg:block w-52 lg:flex-shrink-0 mt-1">
    <nav class="rounded-b-xl bg-brand-gray-dark h-full space-y-2 pt-4">
        <x-nav-left-link :href="route('user.edit')" :active="request()->routeIs('user.edit')">
            {{ __('Profile') }}
        </x-nav-left-link>
        <x-nav-left-link :href="route('about.index.admin')" :active="request()->routeIs(['about.index.admin', 'about.edit', 'about.create'])">
            {{ __('About') }}
        </x-nav-left-link>
        <x-nav-left-link :href="route('jobs.index.admin')" :active="request()->routeIs(['jobs.index.admin', 'jobs.edit', 'jobs.create'])">
            {{ __('Job history') }}
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
<nav class="lg:hidden grid grid-cols-2 gap-2 my-4">
        <x-responsive-nav-left-link :href="route('user.edit')" :active="request()->routeIs('user.edit')">
            {{ __('Profile') }}
        </x-responsive-nav-left-link>
        <x-responsive-nav-left-link :href="route('about.index.admin')" :active="request()->routeIs(['about.index.admin', 'about.edit', 'about.create'])">
            {{ __('About') }}
        </x-responsive-nav-left-link>
        <x-responsive-nav-left-link :href="route('jobs.index.admin')" :active="request()->routeIs(['jobs.index.admin', 'jobs.edit', 'jobs.create'])">
            {{ __('Job history') }}
        </x-responsive-nav-left-link>
        <x-responsive-nav-left-link :href="route('projects.index.admin')" :active="request()->routeIs(['projects.index.admin', 'projects.edit', 'projects.create'])">
            {{ __('Projects') }}
        </x-responsive-nav-left-link>
        <x-responsive-nav-left-link :href="route('courses.index.admin')" :active="request()->routeIs(['courses.index.admin', 'courses.edit', 'courses.create'])">
            {{ __('Courses') }}
        </x-responsive-nav-left-link>
</nav>
