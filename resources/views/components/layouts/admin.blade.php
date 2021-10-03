
<x-layouts.layout>
    <div class="sm:flex">
        @include('components.layouts._navigation-admin')
        <!-- Left navigation -->

        <!-- Settings content -->
        <article class="flex-1">
            <div class="my-3">
                {{ $slot }}
            </div>
        </article>
    </div>
</x-layouts.layout>
