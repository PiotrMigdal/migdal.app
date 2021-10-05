<x-layouts.app :admin='true'>
    <x-slot name="header">
        Your about articles
    </x-slot>
    <form action="/admin/about/{{ Auth::user()->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <x-admin-card>
            @foreach (Auth::user()->abouts as $about)
                <div class="md:flex sm:flex-wrap hover:bg-brand-gray-dark rounded-2xl">
                    <div class="p-8 m-auto">
                        <x-image-circle class="flex-shrink-0 w-24 h-24" alt="Current photo" :filename="Auth::user()->thumbnail"/>
                    </div>
                    <div class="p-3 md:p-8 m-auto text-center">
                        <a class="hover:underline" href="/posts/{{ $about->slug }}" title="Preview">{{ $about->title }}</a>
                    </div>

                    <div class="flex m-auto">
                        <div class="p-3 md:p-8 m-auto">
                            <a href="{{ route('about.edit', $about->id) }}" class="text-blue-500 hover:text-blue-700" title="Edit">Edit</a>
                        </div>

                        <div class="p-3 md:p-8 m-auto">
                            <form action="/admin/posts/{{ $about->id }}" method="post">
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
                <x-link-add href="#">add about</x-link-add>
            </div>
        </x-admin-card>
    </form>
</x-layouts.app>
