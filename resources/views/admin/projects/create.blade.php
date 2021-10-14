<x-layouts.app :admin='true'>
    <x-slot name="header">
        Add project
    </x-slot>
    <form action="/admin/projects" method="post" enctype="multipart/form-data">
        @csrf
        <x-admin-image-form>
            <x-form.input class="w-60" name='thumbnail' type='file'/>
            <x-form.input class="w-60" name='photos' type='file' multiple/>
            <x-form.input name='name' class="w-full" :value="old('name')"/>
            <x-form.input name='release_date' class="w-full" type="date" :value="old('release_date')"/>
            <x-form.input name='repository' class="w-full" type="url" :value="old('repository')"/>
            <x-form.input name='course_id' class="w-full" type="number" :value="old('course_id')"/>
            <x-form.textarea name='purpose'>{{ old('purpose') }}</x-form.textarea>
            <x-form.textarea name='description'>{{ old('description') }}</x-form.textarea>
            <x-form.textarea name='technologies'>{{ old('technologies') }}</x-form.textarea>
        </x-admin-image-form>
    </form>
</x-layouts.app>
