
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
                <x-btn-link-primary :href="route('about.show', [$user->username, $about])">
                    Read more
                </x-btn-link-primary>
            </div>
        </x-about-card>
    @endforeach
</x-layouts.app>

