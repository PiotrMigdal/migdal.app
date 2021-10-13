<x-layouts.app :admin='true'>
    <x-slot name="header">
        Your courses
    </x-slot>
    <div class="card-shadow">
        @foreach (Auth::user()->courses as $course)
            <div class="lg:flex hover:bg-brand-gray-dark rounded-2xl lg:px-10">
                <div class="lg:flex-none p-8 m-auto">
                    <x-image-circle class="flex-shrink-0 w-24 h-24" alt="Current photo" :filename="$course->thumbnail"/>
                </div>
                <div class="lg:flex-1 p-3 md:p-8 m-auto text-center">
                    {{ $course->name }} (preview){{-- <a class="hover:underline" href="{{ route('courses.show', [Auth::user()->username, $course]) }}" title="Preview">{{ $course->name }} (preview)</a> --}}
                </div>

                <div class="lg:flex-none flex justify-center">
                    <div class="p-3 md:p-8 m-auto">
                        <a href="{{ route('courses.edit', $course->id) }}" class="text-blue-500 hover:text-blue-700" title="Edit">Edit</a>
                    </div>

                    <div class="p-3 md:p-8 m-auto">
                        <form action="{{ route('courses.destroy', $course->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500 hover:text-red-700" title="Delete">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="m-4 bg-gradient-to-r from-transparent via-gray-100 to-transparent h-0.5"></div>
        @endforeach
            <x-icon-and-text icon="plus" href="{{ route('courses.create' ) }} " title="Add course" ></x-icon-and-text>
    </div>
</x-layouts.app>
