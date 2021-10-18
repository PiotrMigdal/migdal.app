<x-layouts.app :user="$user">
    <x-slot name="header">
        {{ __('Job history ' . $user->name) }}
    </x-slot>

    <article>
        <header class="grid grid-cols-4 sm:grid-cols-6">
            <div class="col-span-1 border-gray-500 border-r">
            </div>
            <div class="sm:col-span-5 col-span-3">
                <div class="hidden md:grid grid-cols-2">
                    <h1 class="px-4 text-center">Jobs</h1>
                    <h1 class="px-4 text-center">Courses & Projects</h1>
                </div>
                <div class="md:hidden">
                    <h1 class="px-4 text-center">Events</h1>
                </div>
            </div>
        </header>
        {{-- Section is one year --}}
        @for ($year = date('Y'); $year >= $min_year; $year--)
        <section class="min-h-32 border-dashed border-gray-500 border-t grid sm:grid-cols-6 grid-cols-4">
            <div class="col-span-1 border-gray-500 border-r">
                <div class="flex h-full items-center">
                    <span class="-rotate-90 text-3xl text-gray-500 transform w-full whitespace-nowrap text-center">
                        {{ $year }}
                    </span>
                </div>
            </div>
            <ul class="sm:col-span-5 col-span-3 p-4 grid">
                {{-- JOBS --}}
                @foreach ($jobs as $job)
                    @if ($job->start_year == $year || $job->finish_year == $year)
                        <x-timeline-event link="{{ route('jobs.show', [$user->username, $job]) }}" image="{{ $job->thumbnail }}" color="{{ $job->start_year == $year ? 'green-600' : ($job->finish_year == $year ? 'red-600' : 'yellow-600') }}">
                            <x-slot name="date">
                                @if ($job->start_year == $year && $job->finish_year == $year)
                                {{ $job->start_date }} - {{ $job->finish_date }}
                                @elseif  ($job->start_year == $year)
                                Started job on {{ $job->start_date }}
                                @else
                                Finished job on {{ $job->finish_date }}
                                @endif
                            </x-slot>
                            <x-slot name="header">
                                {{ $job->job_title }} at {{ $job->company_name }}
                            </x-slot>
                        </x-timeline-event>
                    @endif
                @endforeach
                {{-- Courses --}}
                @foreach ($adds as $add)
                    @if ($add->release_year == $year)
                    <x-timeline-event link="{{ route($add->type . 's.show', [$user->username, $add->id]) }}" class="md:justify-self-end" image="{{ $add->thumbnail }}" color="brand-pink">
                        <x-slot name="date">
                            Completed add on {{ $add->release_date }}
                        </x-slot>
                        <x-slot name="header">
                            {{ $add->name }}
                        </x-slot>
                    </x-timeline-event>
                    @endif
                @endforeach
            </ul>
        </section>
        @endfor
    </article>

</x-layouts.app>

