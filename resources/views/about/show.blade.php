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
    <x-article-image-card>
        <x-slot name="thumbnail">
            <x-image-circle class="h-48 w-48" :filename="$about->thumbnail" alt="About thumbnail"/>
        </x-slot>
        <h1>{{ $about->title }}</h1>
        {!! $about->body !!}
        <a href="{{ url()->previous() }}">
            <button class="btn-primary mt-10">
                < back
            </button>
        </a>
    </x-article-image-card>
</x-layouts.app>

