<x-layouts.app  left_panel="none">
    <x-slot name="header">
        Colleagues
    </x-slot>
    <div class="card-shadow">
        @foreach ($users as $user)
            <a href="{{ route('user.show', $user) }}">
                <div class="grid grid-cols-8 gap-3 hover:bg-brand-gray-dark rounded-2xl lg:px-10">
                    <div class="col-span-3 md:col-span-2 lg:col-span-1 p-4 m-auto">
                        <x-image-user-thumbnail class="w-12 h-12 text-2xl" :user="$user" :filename="$user->thumbnail"/>
                        <div class="text-center mt-2 lg:hidden">
                            {{ $user->name }}
                        </div>
                    </div>
                    <div class="col-span-5 md:col-span-6 lg:col-span-7 pr-4">
                        <div class="grid gap-1 sm:grid-cols-2 lg:grid-cols-3 h-full">
                            <div class="text-center m-auto hidden lg:block">
                                {{ $user->name }}
                            </div>
                            <div class="text-center m-auto">
                                {{ $user->main_job }}
                            </div>
                            <div class="text-center m-auto">
                                {{ $user->projects->count() }} projects & {{ $user->courses->count() }} courses
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <div class="m-2 bg-gradient-to-r from-transparent via-gray-100 to-transparent h-0.5"></div>
        @endforeach
    </div>
    {{ $users->links() }}
</x-layouts.app>
