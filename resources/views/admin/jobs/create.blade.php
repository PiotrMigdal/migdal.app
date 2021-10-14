<x-layouts.app :admin='true'>
    <x-slot name="header">
        Add job
    </x-slot>
    <form action="/admin/jobs" method="post" enctype="multipart/form-data">
        @csrf
        <x-admin-image-form>
            <x-form.input class="w-60" name='thumbnail' type='file'/>
            <x-form.input name='company_name' class="w-full" :value="old('company_name')"/>
            <x-form.input name='job_title' class="w-full" :value="old('job_title')"/>
            <x-form.input name='start_date' class="w-full" type="date" :value="old('start_date')"/>
            <x-form.input name='finish_date' class="w-full" type="date" :value="old('finish_date')"/>
            <x-form.input name='responsibilties' class="w-full" :value="old('responsibilties')"/>
            <x-form.input name='is_main' class="w-full" type="number" :value="old('is_main')"/>
            <x-form.textarea name='description'>{{ old('description') }}</x-form.textarea>
            </x-admin-image-form>
    </form>
</x-layouts.app>
