<x-layouts.app menu="admin">
    <x-slot name="header">
        Add course
    </x-slot>
    <form action="/admin/courses" method="post" enctype="multipart/form-data">
        @csrf
        <x-admin-image-form>
                <x-form.input class="w-60" name='thumbnail' type='file' required/>
                <x-form.input class="w-60" name='featured_image' type='file'/>
                <x-form.input name='name' class="w-full" :value="old('name')" required/>
                <x-form.input name='platform' class="w-full" :value="old('platform')" required/>
                <x-form.input name='url' class="w-full" type="url" :value="old('url')"/>
                <x-form.input labelname="Start date" name='start_date' class="w-full" type="date" :value="old('start_date')" required/>
                <x-form.input labelname="Finish date" name='finish_date' class="w-full" type="date" :value="old('finish_date')"/>
                <x-form.input name='repository' class="w-full" type="url" :value="old('repository')"/>
                <x-form.textarea name='description' required>{{ old('description') }}</x-form.textarea>
                <x-form.textarea name='technologies'>{{ old('technologies') }}</x-form.textarea>
            </x-admin-image-form>
    </form>
</x-layouts.app>
