<x-layouts.app :admin='true'>
    <x-slot name="header">
        Create courses article
    </x-slot>
    <form action="/admin/courses" method="post" enctype="multipart/form-data">
        @csrf
        <x-admin-image-form>
                <x-form.input class="w-60" name='thumbnail' type='file'/>
                <x-form.input class="w-60" name='photos' type='file'/>
                <x-form.input name='name' class="w-full" :value="old('name')"/>
                <x-form.input name='platform' class="w-full" :value="old('platform')"/>
                <x-form.input name='url' class="w-full" type="url" :value="old('url')"/>
                <x-form.input labelname="Start date" name='start_date' class="w-full" type="date" :value="old('start_date')"/>
                <x-form.input labelname="Finish date" name='finish_date' class="w-full" type="date" :value="old('finish_date')"/>
                <x-form.input name='repository' class="w-full" type="url" :value="old('repository')"/>
                <x-form.input labelname="Project" name='project_id' class="w-full" type="number" :value="old('project_id')"/>
                <x-form.textarea name='description'>{{ old('description') }}</x-form.textarea>
                <x-form.textarea name='technologies'>{{ old('technologies') }}</x-form.textarea>
            </x-admin-image-form>
    </form>
</x-layouts.app>
