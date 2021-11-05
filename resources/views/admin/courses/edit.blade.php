<x-layouts.app menu="admin">
    <x-slot name="header">
        <a href="{{ route('courses.index.admin') }}">
            <button class="btn-header">Courses</button>
        </a> /
        Edit: {{ $course->name }}
    </x-slot>
    <form action="/admin/courses/{{ $course->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <x-admin-image-form>
            <x-slot name="thumbnail">
                <x-image-rectangle  class="mb-6 mt-10 w-48 h-32" alt="Current thumbnail" :filename="$course->thumbnail"/>
                <x-form.input class="w-60" name='thumbnail' type='file'/>
                @isset($course->featured_image)
                <x-image-rectangle class="mb-6 mt-10 w-48 h-32" alt="Current featured image" :filename="$course->featured_image"/>
                @endisset
                <x-form.input labelname="Featured image" class="w-60" name='featured_image' type='file'/>
            </x-slot>
                <x-form.input name='name' class="w-full" :value="old('name', $course->name)" required/>
                <x-form.input name='platform' class="w-full" :value="old('platform', $course->platform)" required/>
                <x-form.input name='url' class="w-full" type="url" :value="old('url', $course->url)"/>
                <x-form.input labelname="Start date" name='start_date' class="w-full" type="date" :value="old('start_date', $course->start_date)" required/>
                <x-form.input labelname="Finish date" name='finish_date' class="w-full" type="date" :value="old('finish_date', $course->finish_date)"/>
                <x-form.input name='repository' class="w-full" type="url" :value="old('repository', $course->repository)"/>
            <x-slot name="column2">
                <x-form.textarea name='description' required>{{ old('description', $course->description) }}</x-form.textarea>
                <x-form.textarea name='technologies'>{{ old('technologies', $course->technologies) }}</x-form.textarea>
            </x-slot>
        </x-admin-image-form>
    </form>
</x-layouts.app>
