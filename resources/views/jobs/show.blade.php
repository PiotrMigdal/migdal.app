<x-layouts.app :user="$job->user">
    <x-slot name="header">
        <a href="{{ route('user.show', $user->username) }}">
            <button class="btn-header">{{ $user->name }}</button>
        </a> /
        <a href="{{ route('jobs.index', $user->username) }}">
            <button class="btn-header">Jobs</button>
        </a> /
        <span class="p-2 truncate max-w-xs">{{ $job->job_title }}</span>
    </x-slot>
    <x-article-image-card>
        <x-slot name="thumbnail">
            <x-image-circle class="w-44 h-44" :filename="$job->thumbnail" alt="{{ $job->job_title }}"/>
        </x-slot>

        <x-slot name="header">
            <h1>{{ $job->job_title }}</h1>

            <p class="my-4">Company name: <b>{{ $job->company_name }}</b></p>

            <p class="my-4">Started on: <b>{{ $job->start_date }}</b></p>

            @isset($job->finish_date)
                <p class="my-4">Finished on: <b>{{ $job->finish_date }}</b></p>
            @endisset

            @isset($job->responsibilities)
            <p class="my-4">Main responsibilities: <b>{{ $job->responsibilities }}</b></p>
            @endisset
        </x-slot>

        {!! $job->description !!}

        <a href="{{ url()->previous() }}">
            <button class="btn-primary mt-10">
                < back
            </button>
        </a>

    </x-article-image-card>
</x-layouts.app>

