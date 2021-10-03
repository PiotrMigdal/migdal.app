
<x-layouts.app :user="$user">
    <x-slot name="header">
        <a class="text-brand-pink-light hover:text-brand-pink" href="/users/{{ $user->username }}">{{ $user->name }}</a> / about
    </x-slot>
    @foreach ($user->abouts as $about)
        <x-about-card>
            <x-slot name="title">
                {{ $about->title }}
            </x-slot>
            {!! $about->excerpt !!}
            <div class="flex justify-end">
                <x-btn-link-primary :href="route('show.about', [$user->username, $about->slug])">
                    Read more
                </x-btn-link-primary>
            </div>
        </x-about-card>
    @endforeach
</x-layouts.app>

