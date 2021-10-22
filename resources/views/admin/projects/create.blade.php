<x-layouts.app :admin='true'>
    <x-slot name="header">
        Add project
    </x-slot>
    <form action="/admin/projects" method="post" enctype="multipart/form-data">
        @csrf
        <x-admin-image-form>
            <x-form.input class="w-60" name='thumbnail' type='file' required/>
            <x-form.input class="w-60" name='featured_image' type='file'/>
            <x-form.input name='name' class="w-full" :value="old('name')" required/>
            <x-form.input labelname="Release date" name='release_date' class="w-full" type="date" :value="old('release_date')" required/>
            <x-form.input name='repository' class="w-full" type="url" :value="old('repository')"/>
            <x-form.textarea name='purpose'>{{ old('purpose') }}</x-form.textarea>
            <x-form.textarea name='description' required>{{ old('description') }}</x-form.textarea>
            <x-form.textarea name='technologies'>{{ old('technologies') }}</x-form.textarea>
            <div>
                <x-form.label name="course"/>
                <select  class="w-full bg-gray-900 focus:outline-none focus:ring-1 focus:ring-brand-pink focus:ring-opacity-50 p-2 ring-1 ring-brand-gray-light rounded-md shadow-sm" name="course_id" id="course_id">
                    <option  class="bg-brand-gray-dark" value="" selected>Choose course</option>
                    @foreach ($courses as $course)
                        <option  class="bg-brand-gray-dark" value="{{ $course->id }}" {{ $course->project_id ? 'disabled' : '' }}>
                            {{ ucwords($course->name) }}
                        </option>
                    @endforeach
                </select>
                <x-form.error name="course"/>
            </div>
        </x-admin-image-form>
    </form>
</x-layouts.app>
