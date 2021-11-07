@props(['user' => Auth::user(), 'menu' => 'app'])
<x-layouts.layout :user='$user'>
    <div class="lg:flex">
        @if ($menu == 'nomenu')
        @elseif ($menu == 'app')
        @include('components.layouts._navigation-app')
        @elseif ($menu == 'admin')
        @include('components.layouts._navigation-admin')
        @endif

        <article class="flex-1 mt-4 px-2 lg:px-8">
            <!-- Page Heading -->
            <header class="py-4 relative">
                <div class="sm:bg-brand-gray-dark font-semibold inline leading-tight px-8 py-2 rounded-full shadow-md tracking-wide uppercase">
                {{ $header }}
                @if ($menu == 'app' && Auth::user()->id === $user->id)
                <div class="absolute right-0 top-4">
                    <a class="btn-secondary" href="{{ route('user.edit') }}">
                        Edit Profile
                    </a>
                </div>
                @endif
                </div>
            </header>
            <!-- Settings content -->
            <section>
                {{ $slot }}
            </section>
        </article>
    </div>
</x-layouts.layout>
