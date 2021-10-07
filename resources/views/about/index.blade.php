
<x-layouts.app :user="$user">
    <x-slot name="header">
        <x-header-link :href="route('user.show', $user->username)">{{ $user->name }}</x-header-link> / about
    </x-slot>
    @foreach ($user->abouts as $about)
        <x-about-card>
            <x-slot name="title">
                {{ $about->title }}
            </x-slot>
            {!! $about->excerpt !!}
            <div class="flex justify-end">
                <a href="{{ route('about.show', [$user->username, $about]) }}">
                    <x-btn-primary>
                        Read more
                    </x-btn-primary>
                </a>
            </div>
        </x-about-card>
    @endforeach
</x-layouts.app>

