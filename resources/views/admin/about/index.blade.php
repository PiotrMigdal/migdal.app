<x-layouts.app :admin='true'>
    <x-slot name="header">
        Your about articles
    </x-slot>
    <form action="/admin/about/{{ Auth::user()->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="card-shadow">
            @foreach (Auth::user()->abouts as $about)
                <div class="lg:flex hover:bg-brand-gray-dark rounded-2xl lg:px-10">
                    <div class="lg:flex-none p-8 m-auto">
                        <x-image-circle class="flex-shrink-0 w-24 h-24" alt="Current photo" :filename="Auth::user()->thumbnail"/>
                    </div>
                    <div class="lg:flex-1 p-3 md:p-8 m-auto text-center">
                        <a class="hover:underline" href="/posts/{{ $about->slug }}" title="Preview">{{ $about->title }}</a>
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
            <div class="text-center w-full p-4">
                <x-link-add href="{{ route('about.create' ) }}">add about</x-link-add>
            </div>
        </div>
    </form>
</x-layouts.app>
