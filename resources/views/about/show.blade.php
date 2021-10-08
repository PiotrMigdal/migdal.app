<x-layouts.app :user="$about->user">
    <x-slot name="header">
        <a href="{{ route('user.show', $user->username) }}">
            <button class="btn-header">{{ $user->name }}</button>
        </a> /
        <a href="{{ route('about.index', $user->username) }}">
            <button class="btn-header">About</button>
        </a> /
        <span class="p-2 truncate max-w-xs">{{ $about->title }}</span>
    </x-slot>
        <x-about-card>
            <x-slot name="title">
                {{ $about->title }}
            </x-slot>
            {!! $about->body !!}
        </x-about-card>
        <a href="{{ route('about.index', $user->username) }}">
            <button class="btn-primary">
                < back
            </button>
        </a>
</x-layouts.app>

