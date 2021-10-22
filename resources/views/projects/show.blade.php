<x-layouts.app :user="$project->user">
    <x-slot name="header">
        <a href="{{ route('user.show', $user->username) }}">
            <button class="btn-header">{{ $user->name }}</button>
        </a> /
        <a href="{{ route('projects.index', $user->username) }}">
            <button class="btn-header">Projects</button>
        </a> /
        <span class="p-2 truncate max-w-xs">{{ $project->name }}</span>
    </x-slot>
    <x-article-image-card>
        @isset($project->featured_image)
            <x-slot name="thumbnail">
                <x-image-enlarge class="h-40 w-56" :filename="$project->featured_image" alt="Featured image"/>
            </x-slot>
        @endisset
        <x-slot name="header">
            <h1>{{ $project->name }}</h1>
            <p class="my-4"><b>{{ $project->purpose }}</b></p>
            @isset($project->release_date)
                <p class="my-4">Released on: <b>{{ $project->release_date }}</b></p>
            @endisset
            @isset($project->technologies)
            <p class="my-4">Built using: <b>{{ $project->technologies }}</b></p>
            @endisset
            @isset($project->repository)
            <p class="my-4">See code on: <a class="link" href="{{ $project->repository }}">{{ $project->repository }}</a></p>
            @endisset
        </x-slot>
        {!! $project->description !!}
        @isset($course)
        <p class="my-4">This project was made as part of a course <a class="link" href="{{ route('courses.show', [$user->username, $course->id]) }}">{{ $course->name }}</a></p>
        @endisset
        <a href="{{ url()->previous() }}">
            <button class="btn-primary mt-10">
                < back
            </button>
        </a>
    </x-article-image-card>
</x-layouts.app>

