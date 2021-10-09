<x-layouts.app :admin='true'>
    <x-slot name="header">
        <a href="{{ route('projects.index.admin') }}">
            <button class="btn-header">Projects</button>
        </a> /
        Edit: {{ $project->name }}
    </x-slot>
    <form action="/admin/projects/{{ $project->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <x-admin-image-form>
            <x-slot name="thumbnail">
                <x-image-circle class="w-48 h-48" alt="Project current photo" :filename="$project->thumbnail"/>
                <x-form.input class="w-60" name='thumbnail' type='file'/>
                <x-form.input class="w-60" name='photos' type='file'/>
            </x-slot>
                <x-form.input name='name' class="w-full" :value="old('name', $project->name)"/>
                <x-form.input name='release_date' class="w-full" type="date" :value="old('release_date', $project->release_date)"/>
                <x-form.input name='repository' class="w-full" type="url" :value="old('repository', $project->repository)"/>
                <x-form.input name='course_id' class="w-full" type="number" :value="old('course_id', $project->course_id)"/>
            <x-slot name="column2">
                <x-form.textarea name='description'>{{ old('description', $project->description) }}</x-form.textarea>
                <x-form.textarea name='technologies'>{{ old('technologies', $project->technologies) }}</x-form.textarea>
            </x-slot>
        </x-admin-image-form>
    </form>
</x-layouts.app>
