<x-layouts.app :admin='true'>
    <x-slot name="header">
        Your Profile
    </x-slot>
    <form action="/admin/about/{{ $about->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <x-admin-card>
            <div class="sm:flex sm:flex-wrap">
                <div class="p-8 mx-auto sm:flex-shrink-0">
                    <x-image-circle class="w-48 h-48" alt="About current photo" :filename="$about->thumbnail"/>
                    <x-form.input class="w-60" name='thumbnail' type='file'/>
                </div>

                <div class="sm:flex-1 mx-auto">
                    <div class="p-8 mx-auto">
                        <x-form.input name='title' class="w-full" :value="old('title', $about->title)"/>
                        <x-form.textarea name='excerpt'>{{ old('excerpt', $about->excerpt) }}</x-form.textarea>
                        <x-form.textarea name='body'>{{ old('body', $about->body) }}</x-form.textarea>
                    </div>
                    <div class="flex justify-end"><x-form.button>Save</x-form.button></div>
                </div>
            </div>
        </x-admin-card>
    </form>
</x-layouts.app>
