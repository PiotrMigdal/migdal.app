<x-layouts.app>
    <x-slot name="header">
        Search results
    </x-slot>
    <div class="card-shadow">
        @foreach ($results as $result)
            <a href="{{ route($result->type.'.show', [$user->username, $result->id]) }}">
                <div class="lg:flex hover:bg-brand-gray-dark rounded-2xl lg:px-10">
                    <div class="lg:flex-none p-8 m-auto">
                        <x-image-circle class="flex-shrink-0 w-24 h-24" alt="Current photo" :filename="$result->thumbnail"/>
                    </div>
                    <div class="lg:flex-1 p-3 md:p-8 m-auto">
                        <h1>{{ $result->name }}</h1>
                        <p>{!! $result->description !!}</p>
                    </div>
                </div>
            </a>
            <div class="m-4 bg-gradient-to-r from-transparent via-gray-100 to-transparent h-0.5"></div>
        @endforeach
    </div>
</x-layouts.app>
