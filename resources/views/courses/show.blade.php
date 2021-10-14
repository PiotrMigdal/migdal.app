<x-layouts.app :user="$course->user">
    <x-slot name="header">
        <a href="{{ route('user.show', $user->username) }}">
            <button class="btn-header">{{ $user->name }}</button>
        </a> /
        <a href="{{ route('courses.index', $user->username) }}">
            <button class="btn-header">Courses</button>
        </a> /
        <span class="p-2 truncate max-w-xs">{{ $course->name }}</span>
    </x-slot>
    <x-article-image-card>
        <x-slot name="thumbnail">
            <x-image-play :filename="$course->thumbnail" alt="{{ $course->name }}"/>
        </x-slot>
        <x-slot name="title">
            {{ $course->name }}
        </x-slot>
        <p class="my-4">Course on <a class="link" href="{{ $course->url }}">{{ $course->platform }}</a></p>

        @isset($course->start_date)
            <p class="my-4">Started on <b>{{ $course->start_date }}</b></p>
        @endisset

        @isset($course->finish_date)
            <p class="my-4">Finished on <b>{{ $course->finish_date }}</b></p>
        @endisset

        @isset($course->technologies)
        <p class="my-4">Included: <b>{{ $course->technologies }}</b></p>
        @endisset

        {!! $course->description !!}

        @isset($course->repository)
        <p class="my-4">See code on: <a class="link" href="{{ $course->repository }}">{{ $course->repository }}</a></p>
        @endisset
        <a href="{{ route('courses.index', $user->username) }}">
            <button class="btn-primary mt-10">
                < back
            </button>
        </a>
    </x-article-image-card>
</x-layouts.app>