
<x-layouts.app :user="$user">
    <x-slot name="header">
        <a href="{{ route('user.show', $user->username) }}">
            <button class="btn-header">{{ $user->name }}</button>
        </a> /
        <span class="p-2 truncate max-w-xs">About</span>
    </x-slot>
    @if ($abouts->count())
    @foreach ($abouts as $about)
        <x-article-image-card>
            <x-slot name="thumbnail">
                <x-image-circle class="h-48 w-48" :filename="$about->thumbnail" alt="{{ $about->name }}"/>
            </x-slot>
            <x-slot name="header">
                <h1>{{ $about->title }}</h1>
                {!! $about->excerpt !!}
            </x-slot>
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
    @else
    <x-sorry-no-content>Sorry, no abouts yet</x-sorry-no-content>
    @endif
</x-layouts.app>

