<x-layouts.app :admin='true'>
    <x-slot name="header">
        <a href="{{ route('courses.index.admin') }}">
            <button class="btn-header">Projects</button>
        </a> /
        Edit: {{ $course->name }}
    </x-slot>
    <form action="/admin/courses/{{ $course->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <x-admin-image-form>
            <x-slot name="thumbnail">
                <x-image-circle class="w-48 h-48" alt="Project current photo" :filename="$course->thumbnail"/>
                <x-form.input class="w-60" name='thumbnail' type='file'/>
                <x-form.input class="w-60" name='photos' type='file'/>
            </x-slot>
                <x-form.input name='name' class="w-full" :value="old('name', $course->name)"/>
                <x-form.input name='platform' class="w-full" :value="old('platform', $course->platform)"/>
                <x-form.input name='url' class="w-full" type="url" :value="old('url', $course->url)"/>
                <x-form.input name='start_date' class="w-full" type="date" :value="old('start_date', $course->start_date)"/>
                <x-form.input name='finish_date' class="w-full" type="date" :value="old('finish_date', $course->finish_date)"/>
                <x-form.input name='repository' class="w-full" type="url" :value="old('repository', $course->repository)"/>
                <x-form.input name='project_id' class="w-full" type="number" :value="old('project_id', $course->project_id)"/>
            <x-slot name="column2">
                <x-form.textarea name='description'>{{ old('description', $course->description) }}</x-form.textarea>
                <x-form.textarea name='technologies'>{{ old('technologies', $course->technologies) }}</x-form.textarea>
            </x-slot>
        </x-admin-image-form>
    </form>
</x-layouts.app>
