<x-layouts.app :user="$user">
    <x-slot name="header">
        <a href="{{ route('user.show', $user->username) }}">
            <button class="btn-header">{{ $user->name }}</button>
        </a>
    </x-slot>
    <div class="lg:grid lg:grid-cols-12 lg:gap-12 card-shadow p-4 lg:p-8 bg-brand-gray-dark">
        <section class="flex flex-wrap mb-12 lg:col-span-12 lg:justify-between">
            <div class="m-auto lg:m-0">
                <h1 class="text-5xl">{{ $user->name }}</h1>
                <div class="font-mono p-8 space-y-2">
                    <p>Education: <span class="text-gray-300">{{ $user->education }}</span></p>
                    <p>Age:  <span class="text-gray-300">{{ $user->age }}</span></p>
                    <p>Main job: <span class="text-gray-300">{{ $user->main_job }}</span></p>
                    @if($user->additional_job)
                    <p>Additional job: <span class="text-gray-300">{{ $user->additional_job }}</span></p>
                    @endif
                </div>
            </div>
            <aside class="flex-shrink-0 m-auto lg:m-0">
                <x-image-user-thumbnail class="w-64 h-64 text-9xl" :user="$user" :filename="$user->thumbnail"/>
            </aside>
        </section>
        @if ($project_years->count())
        <section class="lg:col-span-5">
            <a class="header-link" href="{{ route('projects.index', [$user->username]) }}">
                <h1>
                    Projects
                </h1>
            </a>
            <div>
                <div class="flex place-content-end">
                    <div class="flex-shrink-0 font-mono w-4 mb-4 pb-2 border-r border-gray-500">
                        @for ($max_projects; $max_projects > 0; $max_projects--)
                            <div class="h-8">{{ $max_projects}}</div>
                        @endfor
                    </div>
                    <div class="flex-1 flex items-end">
                        @for ($year = date('Y') - 5; $year <= date('Y'); $year++)
                            <div class="text-center flex-1">
                                @foreach ($project_years as $project_year => $projects)
                                    @if ($project_year == $year)
                                        @foreach ($projects as $project)
                                        <a href="{{ route('projects.show', [$user->username, $project]) }}" title="{{ $project->name }}"><div class="bg-brand-pink h-8 mx-1 hover:bg-brand-pink-dark"></div></a>
                                        @endforeach
                                    @endif
                                @endforeach
                                <div class="font mono pt-1 border-t border-gray-500 text-xs h-4">{{ $year }}</div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </section>
        @endif
        @if ($jobs->count())
        <section class="lg:col-span-7">
            <a class="header-link" href="{{ route('jobs.index', [$user->username]) }}">
                <h1>
                    Jobs
                </h1>
            </a>
            @foreach ($jobs as $job)
            <a href="{{ route('jobs.show', [$user->username, $job->id]) }}">
                <div class="grid grid-cols-12 mb-4">
                    <div class="col-span-4 hover:text-white text-sm">
                        {{ $job->job_title . 'at' . $job->company_name . $job->current}}
                    </div>
                    <div class="group col-span-8">
                        <div class="bg-brand-pink h-5 hover:bg-brand-pink-dark" style="width: {{ $job->years / $max_job_length * 100 }}% ">
                        </div>
                        <div class="bg-brand-gray-dark font-mono text-xs hidden absolute  group-hover:block p-2">
                            {{ $job->years > 0 ? ($job->years > 1 ? $job->years . ' years' : $job->years . ' year') : '' }} {{ $job->months > 0 ? $job->months . ' months' : 'less than month' }}
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </section>
        @endif
        @if ($abouts->count())
        <section class="lg:col-span-12">
            <a class="header-link" href="{{ route('courses.index', [$user->username]) }}">
                <h1>
                    Latest courses
                </h1>
            </a>
            @foreach ($courses as $course)
                <li class="p-1"><a class="link" href="{{ route('courses.show', [$user->username, $course]) }}">{{ $course->name }} </a>on {{ $course->platform . ' finished ' . \Carbon\Carbon::parse($course->finish_date)->diffForHumans()}}</li>
            @endforeach
        </section>
        <section class="lg:col-span-12">
            <a class="header-link" href="{{ route('about.index', [$user->username]) }}">
                <h1>
                    Abouts
                </h1>
            </a>
            @foreach ($abouts as $about)
                <li class="p-1"><a class="link" href="{{ route('about.show', [$user->username, $about]) }}">{{ $about->title }}</a> | {{ Str::of($about->excerpt)->words(10, ' ...') }}</li>
            @endforeach
        </section>
        @endif
    </div>
</x-layouts.app>

