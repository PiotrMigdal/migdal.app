<x-layouts.app menu="admin">
    <x-slot name="header">
        Add something about
    </x-slot>
    <form action="/admin/about" method="post" enctype="multipart/form-data">
        @csrf
        <x-admin-image-form>
            <x-form.input class="w-60" name='thumbnail' type='file' required/>
            <x-form.input name='title' class="w-full" :value="old('title')" required/>
            <x-form.textarea name='excerpt' required>{{ old('excerpt') }}</x-form.textarea>
            <x-form.textarea name='body' required>{{ old('body') }}</x-form.textarea>
        </x-admin-image-form>
    </form>
</x-layouts.app>
