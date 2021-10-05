<x-layouts.app :user="$about->user">
    <x-slot name="header">
        <x-header-link :href="route('user.show', $user->username)">{{ $user->name }}</x-header-link> / <x-header-link :href="route('about.index', $user->username)">About</x-header-link> / {{ $about->title }}
    </x-slot>
        <x-about-card>
            <x-slot name="title">
                {{ $about->title }}
            </x-slot>
            {!! $about->body !!}
        </x-about-card>
        <x-btn-link-primary :href="route('about.index', $user->username)">
            < back
        </x-btn-link-primary>
</x-layouts.app>

