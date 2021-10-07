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
            @include('components.layouts._navigation-top')

            <!-- Page Content -->
            <main class="bg-brand-gray">
                <div class="container mx-auto px-4 sm:p-6 lg:px-8">
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
