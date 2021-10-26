<nav x-data="{ open: false }">
    <!-- Primary Navigation Menu -->
    <div class="container mx-auto px-4 lg:px-6">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="/users/PiotrMigdal">
                        <x-logo-horizontal class="block h-10 w-auto fill-current " />
                    </a>
                </div>

                <!-- Left navigation Links -->
                <div class="hidden space-x-8 lg:-my-px lg:ml-10 lg:flex">
                    <x-nav-link href="/users/PiotrMigdal" :active="request()->Is('users/PiotrMigdal')">
                        {{ __('Piotr Migdal') }}
                    </x-nav-link>
                    <x-nav-link :href="route('user.index')" :active="request()->routeIs('user.index')">
                        {{ __('Other colleagues') }}
                    </x-nav-link>
                    <x-nav-link :href="route('user.edit')" :active="request()->routeIs('user.edit')">
                        {{ __('My account') }}
                    </x-nav-link>
                </div>
            </div>
            <!-- Search -->
            <div class="m-auto px-2 py-1">
                <form method="GET" action="/users/{{ $user->username }}/search">
                  <input type="text" name="search" placeholder="Search {{ $user->name }}"
                          class="bg-gray-900 focus:outline-none focus:ring-1 focus:ring-brand-pink focus:ring-opacity-50 p-2 ring-1 ring-brand-gray-light border-0 rounded-md shadow-sm text-sm w-64" value="{{ request('search') }}">
                          <x-form.error name="search"/>
                </form>
            </div>

            <!-- Right navigation Links -->
            <div class="hidden lg:flex lg:items-center lg:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium  hover: hover:border-gray-300 focus:outline-none focus: focus:border-gray-300 transition duration-150 ease-in-out">
                            <x-image-user-thumbnail class="w-6 h-6" :user="Auth::user()" :filename="Auth::user()->thumbnail"/>
                            <div class="ml-2">{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center lg:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md  hover: hover:text-brand-pink focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="flex lg:hidden container m-auto px-6 justify-between">
        <div class="pt-2 pb-3 space-y-0.5 shadow-md md:flex">
            <x-responsive-nav-link href="/users/piotrmigdal" :active="request()->Is('users/piotrmigdal')">
                {{ __('Piotr Migdal') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('user.index')" :active="request()->routeIs('user.index')">
                {{ __('Other colleagues') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('user.edit')" :active="request()->routeIs('user.edit')">
                {{ __('My account') }}
            </x-responsive-nav-link>
        </div>


        <div class="px-4 m-4">
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    <button class="btn-secondary">{{ __('Log Out') }}</button>
                </a>
            </form>
        </div>
    </div>
</nav>
