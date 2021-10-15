<x-layouts.app :user="$user">
    <x-slot name="header">
        {{ __('Job history ' . $user->name) }}
    </x-slot>
    <div class="grid md:grid-cols-6">
        <aside class="hidden md:block col-span-1 bg-brand-gray-dark mr-4 lg:mr-8">
            <ul class="border-gray-500 border-r mx-auto my-10 pb-5 w-24">
                <li class="border-b border-gray-500 p-2 relative text-center">
                    <a href="#">Now</a>
                    <div class="-right-2 absolute bg-brand-pink h-4 rounded-full top-3 w-4"></div>
                </li>
                <li class="border-b border-gray-500 p-2 relative text-center">
                    <a href="#">2021</a>
                </li>
                <li class="border-b border-gray-500 p-2 relative text-center">
                    <a href="#">2020</a>
                </li>
                <li class="border-b border-gray-500 p-2 relative text-center">
                    <a href="#">2018 - 2019</a>
                </li>
            </ul>
        </aside>
        <article class="sm:col-span-5">
            <header class="grid grid-cols-4 sm:grid-cols-8">
                <div class="col-span-1 border-gray-500 border-r">
                </div>
                <div class="sm:col-span-5 col-span-3 text-center">
                    <h1 class="px-4">Job</h1>
                </div>
            </header>
            {{-- Section is one year --}}
            @for ($year = date('Y'); $year >= $min_year; $year--)
            <section class="border-dashed border-gray-500 border-t grid sm:grid-cols-8 grid-cols-4">
                <div class="col-span-1 border-gray-500 border-r">
                    <div class="flex h-full items-center">
                        <span class="-rotate-90 text-3xl text-gray-500 transform w-full whitespace-nowrap text-center">
                            {{ $year }}
                        </span>
                    </div>
                </div>
                <ul class="sm:col-span-5 col-span-3 p-4">
                    @foreach ($jobs as $job)
                        @if ($job->start_year == $year || $job->finish_year == $year)
                        <div class="grid">
                            <li class="card-shadow m-4 pb-6 w-1/2 {{ $job->is_main === 0 ? 'justify-self-end' : '' }} {{ $job->start_year == $year ? 'border-green-600' : ($job->finish_year == $year ? 'border-red-600' : 'border-yellow-600') }}">
                                <p class="font-mono p-1  {{ $job->start_year == $year ? 'text-green-600' : ($job->finish_year == $year ? 'text-red-600' : 'text-yellow-600') }} text-center text-xs">
                                    @if ($job->start_year == $year && $job->finish_year == $year)
                                    {{ $job->start_date }} - {{ $job->finish_date }}
                                    @elseif  ($job->start_year == $year)
                                    Started on {{ $job->start_date }}
                                    @else
                                    Finished on {{ $job->finish_date }}
                                    @endif
                                </p>
                                <div class="sm:flex sm:items-center text-sm">
                                    <div class="sm:flex-shrink-0 sm:p-3">
                                        <x-image-circle :filename="$job->thumbnail" class="h-16 w-16"/>
                                    </div>
                                    <div>
                                        <h3>{{ $job->job_title }} at {{ $job->company_name }}</h3>
                                        <p>Total duration: <b>xxx</b></p>
                                        <a href="{{ route('jobs.show', [$user->username, $job]) }}" class="link">See job details</a>
                                    </div>
                                </div>
                            </li>
                        </div>
                        @endif
                    @endforeach
                </ul>
            </section>
            @endfor
        </article>
    </div>
</x-layouts.app>

