
<x-layouts.app :user="$user">
    <x-slot name="header">
        <a href="{{ route('user.show', $user->username) }}">
            <button class="btn-header">{{ $user->name }}</button>
        </a> /
        <span class="p-2 truncate max-w-xs">About</span>
    </x-slot>
    @foreach ($abouts as $about)
        <x-article-image-card>
            <x-slot name="thumbnail">
                <x-image-circle class="h-48 w-48" :filename="$about->thumbnail" alt="{{ $about->name }}"/>
            </x-slot>
            <x-slot name="title">
                {{ $about->title }}
            </x-slot>
            {!! $about->excerpt !!}
            <div class="flex justify-end">
                <a href="{{ route('about.show', [$user->username, $about]) }}">
                    <button class="btn-primary mt-4">
                        Read more
                    </button>
                </a>
            </div>
        </x-article-image-card>
    @endforeach
    {{ $abouts->links() }}
</x-layouts.app>

