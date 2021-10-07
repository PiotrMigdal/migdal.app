
<article class="mb-10">
    <section class="card-shadow p-4 lg:p-8 md:mx-10">

        <div class="sm:flex flex-wrap justify-center">
            @isset ( $thumbnail )
            <div class="sm:p-8 flex-shrink-0">
                {{ $thumbnail }}
            </div>
            @endisset

            <div class="md:flex flex-wrap flex-grow">
                <div class="p-4 sm:p-8 flex-grow">
                    {{ $slot }}
                </div>
                @isset ( $column2 )
                <div class="p-4 sm:p-8 flex-grow">
                    {{ $column2 }}
                </div>
                @endisset
            </div>
        </div>
        <div class="flex justify-end"><x-form.button>Save</x-form.button></div>
    </section>
</article>

{{-- <x-admin-card>
    <div class="sm:flex sm:flex-wrap justify-center">
        <div class="sm:p-8">
            <x-image-circle class="w-48 h-48" alt="Current photo" :filename="Auth::user()->thumbnail"/>
            <x-form.input class="w-60" name='thumbnail' type='file'/>
        </div>

        <div class="sm:flex flex-wrap">
            <div class="sm:p-8 mx-auto">
                <x-form.input name='username' :value="old('username', Auth::user()->username)"/>
                <x-form.input name='name' :value="old('name', Auth::user()->name)"/>
                <x-form.input name='email' :value="old('email', Auth::user()->email)"/>
            </div>

            <div class="sm:p-8 mx-auto">
                <x-form.input name='age' :value="old('age', Auth::user()->age)"/>
                <x-form.input name='education' :value="old('education', Auth::user()->education)"/>
                <x-form.input name='main_job' labelname='Main job' :value="old('main_job', Auth::user()->main_job)"/>
                <x-form.input name='additional_job' labelname='Additional job' :value="old('additional_job', Auth::user()->additional_job)"/>
                <div class="flex justify-end"><x-form.button>Save</x-form.button></div>
            </div>
        </div>
    </div>
</x-admin-card> --}}
