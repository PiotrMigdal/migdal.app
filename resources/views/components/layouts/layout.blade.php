<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="scroll-behavior: smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <meta name="theme-color" content="#111827" />

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    </head>
    <body class="font-sans antialiased bg-brand-gray-dark text-gray-200">
        <div class="flex flex-col min-h-screen">
            @include('components.layouts._navigation-top')

            <!-- Page Content -->
            <main class="bg-brand-gray flex-1">
                <div class="container mx-auto">
                    <div class="overflow-hidden pb-16">
                        {{ $slot }}
                    </div>
                </div>
            </main>
            @include('components.layouts._footer')
        </div>
        <x-flash />
    </body>
</html>
