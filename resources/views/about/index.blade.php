
<x-layouts.app :user="$user">
    <x-slot name="header">
        <a href="{{ route('user.show', $user->username) }}">
            <button class="btn-header">{{ $user->name }}</button>
        </a> /
        <span class="p-2 truncate max-w-xs">About <x-plus class="ml-1" href="{{ route('about.create' ) }}" title="Add about" /></span>

    </x-slot>
    @if ($abouts->count())
    @foreach ($abouts as $about)
        <x-article-image-card class="relative">
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
            @if (Auth::user()->id === $user->id)
                <div class="absolute right-2 top-2">
                    <x-dropdown align="right" width="36">
                        <x-slot name="trigger">
                            <button class="p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="27" viewBox="0 0 6 27">
                                    <g id="Icon_feather-more-vertical" data-name="Icon feather-more-vertical" transform="translate(-15 -4.5)">
                                    <path id="Path_17" data-name="Path 17" d="M19.5,18A1.5,1.5,0,1,1,18,16.5,1.5,1.5,0,0,1,19.5,18Z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                    <path id="Path_18" data-name="Path 18" d="M19.5,7.5A1.5,1.5,0,1,1,18,6,1.5,1.5,0,0,1,19.5,7.5Z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                    <path id="Path_19" data-name="Path 19" d="M19.5,28.5A1.5,1.5,0,1,1,18,27,1.5,1.5,0,0,1,19.5,28.5Z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                    </g>
                                </svg>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link href="{{ route('about.edit', $about) }}" class="text-blue-500 hover:text-blue-700">
                                Edit
                            </x-dropdown-link>
                            <form action="{{ route('about.destroy', $about->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button title="Delete">
                                    <x-dropdown-link class="text-red-500 hover:text-red-700">
                                        Delete
                                    </x-dropdown-link>
                                </button>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div
            @endif
        </x-article-image-card>
    @endforeach
    {{ $abouts->links() }}
    @else
    <x-sorry-no-content>Sorry, no abouts yet</x-sorry-no-content>
    @endif
</x-layouts.app>

