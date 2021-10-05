<x-layouts.app :admin='true'>
    <x-slot name="header">
        Your Profile
    </x-slot>
    <form action="/admin/user/{{ Auth::user()->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <x-admin-card>
            <div class="sm:flex sm:gap-8">
                <div>
                    <x-image-circle class="w-24 h-24" alt="Current photo" :filename="Auth::user()->thumbnail"/>
                    <x-form.input class="w-60" name='thumbnail' type='file'/>
                    <x-form.input name='username' :value="old('username', Auth::user()->username)"/>
                    <x-form.input name='name' :value="old('name', Auth::user()->name)"/>
                    <x-form.input name='email' :value="old('email', Auth::user()->email)"/>
                </div>

                <div>
                    <x-form.input name='age' :value="old('age', Auth::user()->age)"/>
                    <x-form.input name='education' :value="old('education', Auth::user()->education)"/>
                    <x-form.input name='main_job' labelname='Main job' :value="old('main_job', Auth::user()->main_job)"/>
                    <x-form.input name='additional_job' labelname='Additional job' :value="old('additional_job', Auth::user()->additional_job)"/>
                </div>
            </div>
            <div class="flex justify-end"><x-form.button>Publish</x-form.button></div>
        </x-admin-card>
    </form>
</x-layouts.app>