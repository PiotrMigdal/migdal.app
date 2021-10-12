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
        <x-slot name="thumbnail">
            <x-image-pc :filename="$project->thumbnail" alt="{{ $project->name }}"/>
        </x-slot>
        <x-slot name="title">
            {{ $project->name }}
        </x-slot>
        <p class="my-4"><b>{{ $project->purpose }}</b></p>
        @isset($project->release_date)
            <p class="my-4">Released on: <b>{{ $project->release_date }}</b></p>
        @endisset
        @isset($project->technologies)
        <p class="my-4">Built using: <b>{{ $project->technologies }}</b></p>
        @endisset
        {!! $project->description !!}
        @isset($project->repository)
        <p class="my-4">See code on: <a class="text-blue-500 hover:text-blue-400 hover:underline" href="{{ $project->repository }}">{{ $project->repository }}</a></p>
        @endisset
        <a href="{{ route('projects.index', $user->username) }}">
            <button class="btn-primary mt-10">
                < back
            </button>
        </a>
    </x-article-image-card>
</x-layouts.app>

