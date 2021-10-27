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
        @if($project->featured_image)
            <x-slot name="featured_image">
                <x-image-enlarge :filename="$project->featured_image" alt="Featured image"/>
            </x-slot>
        @elseif ($project->thumbnail)
        <x-slot name="thumbnail">
          <x-image-pc :filename="$project->thumbnail" alt="{{ $project->name }}"/>
        </x-slot>
        @endif
        <x-slot name="header">
            <h1>{{ $project->name }}</h1>
        </x-slot>

        <x-slot name="features">
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
        <p class="my-4">Project is part of course: <a class="link" href="{{ route('courses.show', [$user->username, $course->id]) }}">{{ $course->name }}</a></p>
        @endisset
        <p>
            <a href="{{ url()->previous() }}">
                <button class="btn-primary mt-10">
                    < back
                </button>
            </a>
        </p>
    </x-article-image-card>
</x-layouts.app>

