<x-layouts.admin>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <form action="/admin/user" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <x-form.input name='name'/>
                <x-form.input name='email'/>
                <x-form.input name='thumbnail' type='file'/>
                <x-form.input name='age'/>
                <x-form.input name='education'/>
                <x-form.input name='main_job'/>
                <x-form.input name='additional_job'/>
                <x-form.input name='about_me_title'/>
                <x-form.textarea name='about_me_body'/>
                <x-form.button>Publish</x-form.button>
            </form>
        </div>
        </div>
    </div>
</x-layouts.admin>

