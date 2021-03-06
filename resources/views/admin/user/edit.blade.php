<x-layouts.app menu="admin">
    <x-slot name="header">
        Your Profile
    </x-slot>
    <form action="/admin/user/{{ Auth::user()->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <x-admin-image-form>
            <x-slot name="thumbnail">
                <x-image-user-thumbnail class="w-48 h-48 text-7xl" :user="Auth::user()" :filename="Auth::user()->thumbnail"/>
                <x-form.input class="w-60" name='thumbnail' type='file'/>
            </x-slot>
            <x-form.input name='username' :value="old('username', Auth::user()->username)" required/>
            <x-form.input name='name' :value="old('name', Auth::user()->name)" required/>
            <x-form.input name='email' :value="old('email', Auth::user()->email)" required/>
            <x-slot name="column2">
                <x-form.input name='age' :value="old('age', Auth::user()->age)"/>
                <x-form.input name='education' :value="old('education', Auth::user()->education)"/>
                <x-form.input name='main_job' labelname='Main job' :value="old('main_job', Auth::user()->main_job)"/>
                <x-form.input name='additional_job' labelname='Additional job' :value="old('additional_job', Auth::user()->additional_job)"/>
            </x-slot>
        </x-admin-image-form>
    </form>
</x-layouts.app>
