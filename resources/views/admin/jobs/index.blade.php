<x-layouts.app :admin='true'>
    <x-slot name="header">
        Your jobs
    </x-slot>
    <div class="card-shadow">
        @foreach ($jobs as $job)
            <div class="lg:flex hover:bg-brand-gray-dark rounded-2xl lg:px-10">
                <div class="lg:flex-none p-8 m-auto">
                    <x-image-circle class="flex-shrink-0 w-24 h-24" alt="Current photo" :filename="$job->thumbnail"/>
                </div>
                <div class="lg:flex-1 p-3 md:p-8 m-auto text-center">
                    <a class="hover:underline" href="{{ route('jobs.show', [Auth::user()->username, $job]) }}" title="Preview">{{ $job->job_title . ' at ' . $job->company_name }} (preview)</a>
                </div>

                <div class="lg:flex-none flex justify-center">
                    <div class="p-3 md:p-8 m-auto">
                        <a href="{{ route('jobs.edit', $job->id) }}" class="text-blue-500 hover:text-blue-700" title="Edit">Edit</a>
                    </div>

                    <div class="p-3 md:p-8 m-auto">
                        <form action="{{ route('jobs.destroy', $job->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500 hover:text-red-700" title="Delete">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="m-4 bg-gradient-to-r from-transparent via-gray-100 to-transparent h-0.5"></div>
        @endforeach
            <x-icon-and-text icon="plus" href="{{ route('jobs.create' ) }} " title="Add job" ></x-icon-and-text>
    </div>
    {{ $jobs->links() }}
</x-layouts.app>
