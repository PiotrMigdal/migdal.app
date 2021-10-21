<x-layouts.app :admin='true'>
    <x-slot name="header">
        <a href="{{ route('jobs.index.admin') }}">
            <button class="btn-header">Jobs</button>
        </a> /
        Edit: {{ $job->job_title }}
    </x-slot>
    <form action="/admin/jobs/{{ $job->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <x-admin-image-form>
            <x-slot name="thumbnail">
                <x-image-circle class="w-48 h-48" alt="Project current photo" :filename="$job->thumbnail"/>
                <x-form.input class="w-60" name='thumbnail' type='file'/>
            </x-slot>
                <x-form.input name='company_name' class="w-full" :value="old('company_name', $job->company_name)"/>
                <x-form.input labelname="Job title" name='job_title' class="w-full" :value="old('job_title', $job->job_title)"/>
                <x-form.input labelname="Start date" name='start_date' class="w-full" type="date" :value="old('start_date', $job->start_date)"/>
                <x-form.input labelname="Finish date" name='finish_date' class="w-full" type="date" :value="old('finish_date', $job->finish_date)"/>
                <x-form.input name='responsibilities' class="w-full" :value="old('responsibilities', $job->responsibilities)"/>
            <x-slot name="column2">
                <x-form.input name='is_main' class="w-full" type="number" :value="old('is_main', $job->is_main)"/>
                <x-form.textarea name='description'>{{ old('description', $job->description) }}</x-form.textarea>
            </x-slot>
        </x-admin-image-form>
    </form>
</x-layouts.app>