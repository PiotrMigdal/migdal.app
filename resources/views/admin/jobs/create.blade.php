<x-layouts.app :admin='true'>
    <x-slot name="header">
        Add job
    </x-slot>
    <form action="/admin/jobs" method="post" enctype="multipart/form-data">
        @csrf
        <x-admin-image-form>
            <x-form.input class="w-60" name='thumbnail' type='file' required/>
            <x-form.input name='company_name' class="w-full" :value="old('company_name')" required/>
            <x-form.input labelname="Job title" name='job_title' class="w-full" :value="old('job_title')" required/>
            <x-form.input labelname="Start date" name='start_date' class="w-full" type="date" :value="old('start_date')" required/>
            <x-form.input labelname="Finish date" name='finish_date' class="w-full" type="date" :value="old('finish_date')"/>
            <x-form.input name='responsibilities' class="w-full" :value="old('responsibilities')" required/>
            <x-form.textarea name='description' required>{{ old('description') }}</x-form.textarea>
            </x-admin-image-form>
    </form>
</x-layouts.app>
