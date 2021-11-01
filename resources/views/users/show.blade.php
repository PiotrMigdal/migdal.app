<x-layouts.app :user="$user"  x-data="{ open: false }">
    <x-slot name="header">
        <a href="{{ route('user.show', $user->username) }}">
            <button class="btn-header">{{ $user->name }}</button>
        </a>
    </x-slot>
    <div class="lg:grid lg:grid-cols-12 lg:gap-12 card-shadow p-4 lg:p-8 bg-brand-gray-dark relative">
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
            <h1>Projects</h1>
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
            <h1>Jobs</h1>
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
            <h1>Latest courses</h1>
            @foreach ($courses as $course)
                <li class="p-1"><a class="link" href="{{ route('courses.show', [$user->username, $course]) }}">{{ $course->name }} </a>on {{ $course->platform . ' finished ' . \Carbon\Carbon::parse($course->finish_date)->diffForHumans()}}</li>
            @endforeach
        </section>
        <section class="lg:col-span-12">
            <h1>Abouts</h1>
            @foreach ($abouts as $about)
                <li class="p-1"><a class="link" href="{{ route('about.show', [$user->username, $about]) }}">{{ $about->title }}</a> | {{ Str::of($about->excerpt)->words(10, ' ...') }}</li>
            @endforeach
        </section>
        @endif
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button class="flex items-center text-sm font-medium  hover: hover:border-gray-300 focus:outline-none focus: focus:border-gray-300 transition duration-150 ease-in-out">
                    <x-image-user-thumbnail class="w-6 h-6" :user="Auth::user()" :filename="Auth::user()->thumbnail"/>
                    <div class="ml-2">{{ Auth::user()->name }}</div>

                    <div class="ml-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <button class="absolute right-4 top-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="27" viewBox="0 0 6 27">
                    <g id="Icon_feather-more-vertical" data-name="Icon feather-more-vertical" transform="translate(-15 -4.5)">
                    <path id="Path_17" data-name="Path 17" d="M19.5,18A1.5,1.5,0,1,1,18,16.5,1.5,1.5,0,0,1,19.5,18Z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                    <path id="Path_18" data-name="Path 18" d="M19.5,7.5A1.5,1.5,0,1,1,18,6,1.5,1.5,0,0,1,19.5,7.5Z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                    <path id="Path_19" data-name="Path 19" d="M19.5,28.5A1.5,1.5,0,1,1,18,27,1.5,1.5,0,0,1,19.5,28.5Z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                    </g>
                </svg>
            </button>
        </x-slot>

        <x-slot name="content"></x-slot>
    </div>
</x-layouts.app>

