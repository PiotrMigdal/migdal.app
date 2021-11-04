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
        @if($course->featured_image)
            <x-slot name="featured_image">
                <x-image-enlarge :filename="$course->featured_image" alt="Featured image"/>
            </x-slot>
        @elseif ($course->thumbnail)
            <x-slot name="thumbnail">
                <x-image-play :filename="$course->thumbnail" alt="{{ $course->name }}"/>
            </x-slot>
        @endif
        <x-slot name="header">
            <h1>{{ $course->name }}</h1>
            <p class="my-4">Course on <a class="link" href="{{ $course->url }}">{{ $course->platform }}</a></p>

            @isset($course->start_date)
                <p class="my-4">Started on {{ $course->start_date }}</p>
            @endisset

            @isset($course->finish_date)
                <p class="my-4">Finished on {{ $course->finish_date }}</p>
            @endisset

            @isset($course->technologies)
            <p class="my-4">Included: {{ $course->technologies }}</p>
            @endisset
        </x-slot>

        {!! $course->description !!}

        @isset($course->repository)
        <p class="my-4">See code on: <a class="link" href="{{ $course->repository }}">{{ $course->repository }}</a></p>
        @endisset
        @if ($course->projects->count())
            <p>Projects made in the course:</p>
            @foreach ($course->projects as $project)
                <li><a class="link" href="{{ route('projects.show', [$user->username, $project->id]) }}">{{$project->name}}</a></li>
            @endforeach
        @endif
        <br>
        <a href="{{ url()->previous() }}">
            <button class="btn-primary mt-10">
                < back
            </button>
        </a>
    </x-article-image-card>
</x-layouts.app>