<x-layouts.app :user="$user">
    <x-slot name="header">
        <a href="{{ route('user.show', $user->username) }}">
            <button class="btn-header">{{ $user->name }}</button>
        </a> /
        <span class="p-2 truncate max-w-xs">Jobs</span>
    </x-slot>
    @if ($jobs->count())
    <article class="lg:p-6 pt-8">
        <div class="card-shadow">
            @foreach ($jobs as $job)
                <div class="lg:flex hover:bg-brand-gray-dark rounded-2xl lg:px-10">
                    <div class="lg:flex-none p-8 m-auto">
                        <x-image-circle class="flex-shrink-0 w-24 h-24" alt="Current photo" :filename="$job->thumbnail"/>
                    </div>
                    <div class="lg:flex-1 p-3 md:p-8 m-auto text-center">
                        <a class="hover:underline" href="{{ route('jobs.show', [$user->username, $job]) }}" title="Preview">{{ $job->job_title . ' at ' . $job->company_name }}</a>
                    </div>
                    <div class="p-3 md:p-8 m-auto">
                        <span class="text-green-600">
                            From {{ $job->start_date }}
                        </span>

                        @isset($job->finish_date)
                        <span class="text-red-600">
                            to {{ $job->finish_date }}
                        </span>
                        @else
                        <span class="text-green-600">
                            (current job)
                        </span>
                        @endisset
                    </div>
                </div>
                <div class="m-4 bg-gradient-to-r from-transparent via-gray-100 to-transparent h-0.5"></div>
            @endforeach
        </div>
        {{ $jobs->links() }}
    </article>
    @else
    <x-sorry-no-content>Sorry, no jobs yet</x-sorry-no-content>
    @endif

</x-layouts.app>

