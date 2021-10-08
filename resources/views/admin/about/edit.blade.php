<x-layouts.app :admin='true'>
    <x-slot name="header">
        <a href="{{ route('about.index.admin') }}">
            <button class="btn-header">About</button>
        </a> /
        Edit: {{ $about->title }}
    </x-slot>
    <form action="/admin/about/{{ $about->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <x-admin-image-form>
            <x-slot name="thumbnail">
                <x-image-circle class="w-48 h-48" alt="About current photo" :filename="$about->thumbnail"/>
                <x-form.input class="w-60" name='thumbnail' type='file'/>
            </x-slot>
                <x-form.input name='title' class="w-full" :value="old('title', $about->title)"/>
                <x-form.textarea name='excerpt'>{{ old('excerpt', $about->excerpt) }}</x-form.textarea>
                <x-form.textarea name='body'>{{ old('body', $about->body) }}</x-form.textarea>
        </x-admin-image-form>
    </form>
</x-layouts.app>
