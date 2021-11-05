<x-layouts.app menu="admin">
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
                <x-image-circle class="w-48 h-48" alt="Current thumbnail" :filename="$about->thumbnail"/>
                <x-form.input class="w-60" name='thumbnail' type='file'/>
            </x-slot>
                <x-form.input name='title' class="w-full" :value="old('title', $about->title)" required/>
                <x-form.textarea name='excerpt' required>{{ old('excerpt', $about->excerpt) }}</x-form.textarea>
                <x-slot name="bottom">
                    <x-form.textarea name='body' required>{{ old('body', $about->body) }}</x-form.textarea>
                </x-slot>
        </x-admin-image-form>
    </form>
    <script>
        CKEDITOR.replace( 'body' );
    </script>
</x-layouts.app>
