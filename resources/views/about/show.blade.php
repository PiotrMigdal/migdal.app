<x-layouts.app :user="$about->user">
    <x-slot name="header">
        {{ __('About ' . $about->user->name) }}
    </x-slot>
        <x-about-card>
            <x-slot name="title">
                {{ $about->title }}
            </x-slot>
            {!! $about->body !!}
        </x-about-card>
        <x-btn-link-primary :href="route('about', $user->username)">
            < back
        </x-btn-link-primary>
</x-layouts.app>

