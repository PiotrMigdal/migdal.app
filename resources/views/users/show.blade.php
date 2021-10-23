<x-layouts.app :user="$user">
    <x-slot name="header">
        {{ $user->name }}
    </x-slot>
    <article class="md:flex my-12">
        <aside class="px-6">
            <x-image-user-thumbnail class="w-24 h-24 text-3xl" :user="Auth::user()" :filename="Auth::user()->thumbnail"/>
        </aside>
        <section class="text-center p-4">
            <h2>{{ $user->name }}</h2>
            <p>Wyksztalcenie: <span class="text-gray-300">{{ $user->education }}</span></p>
            <p>Wiek:  <span class="text-gray-300">{{ $user->age }}</span></p>
            <p>Miejsce: <span class="text-gray-300">{{ $user->main_job }}</span></p>
            <p>Miejsce: <span class="text-gray-300">{{ $user->additional_job }}</span></p>
        </section>
    </article>
    <article>
        <h1>Projects</h1>
        <div>
            <div class="flex place-content-end">
                <div class="flex-shrink-0 font-mono text-xs w-4 mb-4 pb-2 border-r border-gray-500">

                    <div class="h-8">1</div>
                </div>
                <div class="flex-1 flex items-end">
                        @for ($year = date('Y'); $year <= ($year-5); $year++)
                            <div class="text-center flex-1">
                                <div class="bg-brand-pink h-8 mx-1 "></div>
                                <div class="font mono pt-1 border-t border-gray-500 text-xs h-4">{{ $year }}</div>
                            </div>
                        @endfor
                </div>
            </div>
        </div>
    </article>
    <article>
        <h1>Jobs</h1>
        @foreach ($jobs as $job)
            <div class="grid grid-cols-12 m-4">
                <div class="col-span-4 hover:text-white text-sm">
                    <a href="{{ route('jobs.show', [$user->username, $job->id]) }}">{{ $job->job_title . 'at' . $job->company_name . $job->current}} </a>
                </div>
                <div class="group col-span-6">
                    <div class="bg-brand-pink h-5" style="width: {{ $job->years / $max_length * 100 }}% ">
                    </div>
                    <div class="bg-brand-gray-dark font-mono text-xs hidden absolute  group-hover:block p-2">
                        {{ $job->years > 0 ? ($job->years > 1 ? $job->years . ' years' : $job->years . ' year') : '' }} {{ $job->months > 0 ? $job->months . ' months' : 'less than month' }}
                    </div>
                </div>
            </div>
        @endforeach
    </article>
</x-layouts.app>

