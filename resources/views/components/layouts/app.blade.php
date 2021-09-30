<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-brand-gray-dark text-gray-50">
        <div class="min-h-screen">
            @include('components.layouts._navigation')

            <!-- Page Heading -->
            <header class="shadow bg-brand-gray py-6">
                <div class="border-b-2 container lg:px-8 mx-auto px-4 py-6 mb-6 sm:px-6">
                    <h2 class="font-semibold text-xl leading-tight uppercase">
                    {{ $header }}
                    </h2>
                </div>
            </header>

            <!-- Page Content -->
            <main class="bg-brand-gray">
                <div class="container mx-auto px-6 lg:px-8">
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
