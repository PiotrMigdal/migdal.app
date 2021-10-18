<x-layouts.app :admin='true'>
    <x-slot name="header">
        Your about articles
    </x-slot>
    <div class="card-shadow">
        @foreach ($abouts as $about)
            <div class="lg:flex hover:bg-brand-gray-dark rounded-2xl lg:px-10">
                <div class="lg:flex-none p-8 m-auto">
                    <x-image-circle class="flex-shrink-0 w-24 h-24" alt="Current photo" :filename="$about->thumbnail"/>
                </div>
                <div class="lg:flex-1 p-3 md:p-8 m-auto text-center">
                    <a class="hover:underline" href="{{ route('about.show', [Auth::user()->username, $about]) }}" title="Preview">{{ $about->title }} (preview)</a>
                </div>

                <div class="lg:flex-none flex justify-center">
                    <div class="p-3 md:p-8 m-auto">
                        <a href="{{ route('about.edit', $about->id) }}" class="text-blue-500 hover:text-blue-700" title="Edit">Edit</a>
                    </div>

                    <div class="p-3 md:p-8 m-auto">
                        <form action="{{ route('about.destroy', $about->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500 hover:text-red-700" title="Delete">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="m-4 bg-gradient-to-r from-transparent via-gray-100 to-transparent h-0.5"></div>
        @endforeach
            <x-icon-and-text icon="plus" href="{{ route('about.create' ) }} " title="Add about" ></x-icon-and-text>
    </div>
    {{ $abouts->links() }}
</x-layouts.app>
