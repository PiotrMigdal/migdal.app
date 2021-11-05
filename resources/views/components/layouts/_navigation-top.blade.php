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
                    @if (Auth()->user()->username <> 'PiotrMigdal')
                    <x-nav-link :href="route('user.show', Auth()->user()->username)" :active="request()->Is('users/' . Auth()->user()->username)">
                        {{ Auth()->user()->name }}
                    </x-nav-link>
                    @endif
                    <x-nav-link :href="route('user.index')" :active="request()->routeIs('user.index')">
                        {{ __('All colleagues') }}
                    </x-nav-link>
                </div>
            </div>
            <!-- Search -->
            <div class="m-auto px-2 py-1">
                <form method="GET" action="/users/{{ $user->username }}/search">
                  <input type="text" name="search" placeholder="Search {{ $user->name }}"
                          class="bg-gray-900 focus:outline-none focus:ring-1 focus:ring-brand-pink focus:ring-opacity-50 px-3 py-1.5 font-mono tracking-wider ring-1 ring-brand-gray-light border-0 rounded-md shadow-sm text-sm w-64" value="{{ request('search') }}">
                          <x-form.error name="search"/>
                </form>
            </div>

            <!-- Right navigation Links -->
            <div class="hidden lg:flex lg:items-center lg:ml-6">
                <x-dropdown align="top" width="36">
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
                        <x-dropdown-link :href="route('user.show', Auth::user()->username)" class="flex">
                            <div class="pr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 27 30">
                                    <g id="Icon_feather-user" data-name="Icon feather-user" transform="translate(-4.5 -3)">
                                      <path id="Path_20" data-name="Path 20" d="M30,31.5v-3a6,6,0,0,0-6-6H12a6,6,0,0,0-6,6v3" fill="none" stroke="#4c546a" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                      <path id="Path_21" data-name="Path 21" d="M24,10.5a6,6,0,1,1-6-6A6,6,0,0,1,24,10.5Z" fill="none" stroke="#4c546a" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                    </g>
                                  </svg>
                            </div>
                            {{ __('Account') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('user.edit')" class="flex">
                            <div class="pr-2">
                                <svg id="Icon_feather-settings" data-name="Icon feather-settings" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 27.938 27.938">
                                    <path id="Path_4" data-name="Path 4" d="M14.665,11.082A3.582,3.582,0,1,1,11.082,7.5,3.582,3.582,0,0,1,14.665,11.082Z" transform="translate(2.886 2.886)" fill="none" stroke="#4c546a" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.667"/>
                                    <path id="Path_5" data-name="Path 5" d="M22.805,17.551a1.97,1.97,0,0,0,.394,2.173l.072.072a2.39,2.39,0,1,1-3.379,3.379L19.82,23.1a1.986,1.986,0,0,0-3.367,1.409v.2a2.388,2.388,0,0,1-4.777,0v-.107a1.97,1.97,0,0,0-1.29-1.8,1.97,1.97,0,0,0-2.173.394l-.072.072a2.39,2.39,0,1,1-3.379-3.379l.072-.072a1.986,1.986,0,0,0-1.409-3.367h-.2a2.388,2.388,0,0,1,0-4.777h.107a1.97,1.97,0,0,0,1.8-1.29,1.97,1.97,0,0,0-.394-2.173l-.072-.072A2.39,2.39,0,1,1,8.046,4.762l.072.072a1.97,1.97,0,0,0,2.173.394h.1a1.97,1.97,0,0,0,1.194-1.8v-.2a2.388,2.388,0,0,1,4.777,0v.107a1.986,1.986,0,0,0,3.367,1.409l.072-.072a2.39,2.39,0,1,1,3.379,3.379l-.072.072a1.97,1.97,0,0,0-.394,2.173v.1a1.97,1.97,0,0,0,1.8,1.194h.2a2.388,2.388,0,0,1,0,4.777h-.107a1.97,1.97,0,0,0-1.8,1.194Z" transform="translate(0 0)" fill="none" stroke="#4c546a" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.667"/>
                                </svg>
                            </div>
                            {{ __('Edit account') }}
                        </x-dropdown-link>
                        <!-- Authentication -->
                        <div class="p-4 text-center mt-4 border-t border-gray-800">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="btn-secondary">{{ __('Log Out') }}</button>
                            </form>
                        </div>
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
                <button class="btn-secondary">Piotr Migdal</button>
            </x-responsive-nav-link>
            @if (Auth()->user()->username <> 'PiotrMigdal')
            <x-responsive-nav-link :href="route('user.show', Auth()->user()->username)" :active="request()->Is('users/' . Auth()->user()->username)">
                <button class="btn-secondary">{{ Auth()->user()->name }}</button>
            </x-responsive-nav-link>
            @endif
            <x-responsive-nav-link :href="route('user.index')" :active="request()->routeIs('user.index')">
                <button class="btn-secondary">All colleagues</button>
            </x-responsive-nav-link>
        </div>


        <div class="border border-gray-400 m-2 p-2 px-2 rounded space-y-2">
                <x-responsive-nav-link :href="route('user.show', Auth::user()->username)" class="flex">
                    <div class="pr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 27 30">
                            <g id="Icon_feather-user" data-name="Icon feather-user" transform="translate(-4.5 -3)">
                              <path id="Path_20" data-name="Path 20" d="M30,31.5v-3a6,6,0,0,0-6-6H12a6,6,0,0,0-6,6v3" fill="none" stroke="#4c546a" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                              <path id="Path_21" data-name="Path 21" d="M24,10.5a6,6,0,1,1-6-6A6,6,0,0,1,24,10.5Z" fill="none" stroke="#4c546a" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                            </g>
                          </svg>
                    </div>
                    {{ __('Account') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('user.edit')" class="flex">
                    <div class="pr-2">
                        <svg id="Icon_feather-settings" data-name="Icon feather-settings" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 27.938 27.938">
                            <path id="Path_4" data-name="Path 4" d="M14.665,11.082A3.582,3.582,0,1,1,11.082,7.5,3.582,3.582,0,0,1,14.665,11.082Z" transform="translate(2.886 2.886)" fill="none" stroke="#4c546a" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.667"/>
                            <path id="Path_5" data-name="Path 5" d="M22.805,17.551a1.97,1.97,0,0,0,.394,2.173l.072.072a2.39,2.39,0,1,1-3.379,3.379L19.82,23.1a1.986,1.986,0,0,0-3.367,1.409v.2a2.388,2.388,0,0,1-4.777,0v-.107a1.97,1.97,0,0,0-1.29-1.8,1.97,1.97,0,0,0-2.173.394l-.072.072a2.39,2.39,0,1,1-3.379-3.379l.072-.072a1.986,1.986,0,0,0-1.409-3.367h-.2a2.388,2.388,0,0,1,0-4.777h.107a1.97,1.97,0,0,0,1.8-1.29,1.97,1.97,0,0,0-.394-2.173l-.072-.072A2.39,2.39,0,1,1,8.046,4.762l.072.072a1.97,1.97,0,0,0,2.173.394h.1a1.97,1.97,0,0,0,1.194-1.8v-.2a2.388,2.388,0,0,1,4.777,0v.107a1.986,1.986,0,0,0,3.367,1.409l.072-.072a2.39,2.39,0,1,1,3.379,3.379l-.072.072a1.97,1.97,0,0,0-.394,2.173v.1a1.97,1.97,0,0,0,1.8,1.194h.2a2.388,2.388,0,0,1,0,4.777h-.107a1.97,1.97,0,0,0-1.8,1.194Z" transform="translate(0 0)" fill="none" stroke="#4c546a" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.667"/>
                        </svg>
                    </div>
                    {{ __('Edit account') }}
                </x-responsive-nav-link>
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}" class="text-center">
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
