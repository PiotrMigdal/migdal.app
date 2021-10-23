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
                <x-image-rectangle  class="mb-6 mt-10 w-48 h-32" alt="Current thumbnail" :filename="$project->thumbnail"/>
                <x-form.input class="w-60" name='thumbnail' type='file'/>
                @isset($project->featured_image)
                <x-image-rectangle class="mb-6 mt-10 w-48 h-32" alt="Current featured image" :filename="$project->featured_image"/>
                @endisset
                <x-form.input labelname="Featured image" class="w-60" name='featured_image' type='file'/>
            </x-slot>
                <x-form.input name='name' class="w-full" :value="old('name', $project->name)" required/>
                <x-form.input labelname="Release date" name='release_date' class="w-full" type="date" :value="old('release_date', $project->release_date)" required/>
                <x-form.input name='repository' class="w-full" type="url" :value="old('repository', $project->repository)"/>
                <div class="mb-6">
                    <x-form.label name="course"/>
                    <select  class="w-full bg-gray-900 focus:outline-none focus:ring-1 focus:ring-brand-pink focus:ring-opacity-50 p-2 ring-1 ring-brand-gray-light rounded-md shadow-sm" name="course_id" id="course_id">
                        <option  class="bg-brand-gray-dark" value="">--- select course ---</option>
                        @foreach ($courses as $course)
                            <option  class="bg-brand-gray-dark" value="{{ $course->id }}" {{ $course->id === $project->course_id ? 'selected' : '' }}>
                                {{ ucwords($course->name) }}
                            </option>
                        @endforeach
                    </select>
                    <x-form.error name="course"/>
                </div>
                <x-form.textarea name='purpose'>{{ old('purpose', $project->purpose) }}</x-form.textarea>
                <x-form.textarea name='description' required>{{ old('description', $project->description) }}</x-form.textarea>
                <x-form.textarea name='technologies'>{{ old('technologies', $project->technologies) }}</x-form.textarea>
        </x-admin-image-form>
    </form>
</x-layouts.app>
