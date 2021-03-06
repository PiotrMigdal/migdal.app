<x-layouts.app menu="admin">
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
                <x-image-rectangle  class="mb-6 mt-10 w-48 h-32" alt="Current thumbnail" :filename="$job->thumbnail"/>
                <x-form.input class="w-60" name='thumbnail' type='file'/>
            </x-slot>
                <x-form.input labelname='Company name' name='company_name' class="w-full" :value="old('company_name', $job->company_name)" required/>
                <x-form.input labelname="Job title" name='job_title' class="w-full" :value="old('job_title', $job->job_title)" required/>
                <x-form.input labelname="Start date" name='start_date' class="w-full" type="date" :value="old('start_date', $job->start_date)" required/>
                <x-form.input labelname="Finish date" name='finish_date' class="w-full" type="date" :value="old('finish_date', $job->finish_date)"/>
                <x-form.input name='responsibilities' class="w-full" :value="old('responsibilities', $job->responsibilities)" required/>
            <x-slot name="bottom">
                <x-form.textarea name='description' required>{{ old('description', $job->description) }}</x-form.textarea>
            </x-slot>
        </x-admin-image-form>
    </form>
    <script>
        CKEDITOR.replace( 'description' );
    </script>
</x-layouts.app>