<x-layouts.app :user="$user">
    <x-slot name="header">
        {{ $user->name }}
    </x-slot>
    <article class="md:flex my-12">
        <aside class="px-6">
            <x-image-circle class="w-24 h-24" alt="{{ $user->name }}'s photo" :filename="$user->thumbnail"/>
        </aside>
        <section class="text-center p-4">
            <h2>{{ $user->name }}</h2>
            <p>Wyksztalcenie: <span class="text-gray-300">{{ $user->education }}</span></p>
            <p>Wiek:  <span class="text-gray-300">{{ $user->age }}</span></p>
            <p>Miejsce: <span class="text-gray-300">{{ $user->main_job }}</span></p>
            <p>Miejsce: <span class="text-gray-300">{{ $user->additional_job }}</span></p>
        </section>
    </article>
</x-layouts.app>

