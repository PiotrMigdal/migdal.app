<x-layouts.app :admin='true'>
    <x-slot name="header">
        Your Profile
    </x-slot>
    <form action="/admin/user" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <x-admin-card>
            <div class="sm:flex sm:gap-8">
                <div>
                    <x-form.input name='name'/>
                    <x-form.input name='email'/>
                    <x-form.input name='age'/>
                    <x-form.input name='education'/>
                    <x-form.input name='main_job'/>
                    <x-form.input name='additional_job'/>
                </div>

                <div>
                    <x-form.input name='thumbnail' type='file'/>
                    <x-form.input name='about_me_title'/>
                    <x-form.textarea name='about_me_body'/>
                </div>
            </div>
            <x-form.button>Publish</x-form.button>
        </x-admin-card>
    </form>
</x-layouts.app>
