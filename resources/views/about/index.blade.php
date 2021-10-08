
<x-layouts.app :user="$user">
    <x-slot name="header">
        <a href="{{ route('user.show', $user->username) }}">
            <button class="btn-header">{{ $user->name }}</button>
        </a> /
        <span class="p-2 truncate max-w-xs">About</span>
    </x-slot>
    @foreach ($user->abouts as $about)
        <x-about-card>
            <x-slot name="title">
                {{ $about->title }}
            </x-slot>
            {!! $about->excerpt !!}
            <div class="flex justify-end">
                <a href="{{ route('about.show', [$user->username, $about]) }}">
                    <button class="btn-primary">
                        Read more
                    </button>
                </a>
            </div>
        </x-about-card>
    @endforeach
</x-layouts.app>

