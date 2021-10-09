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
    <body class="bg-brand-gray text-gray-50">
        <div class="md:flex min-h-screen">
            <div class="w-full flex items-center justify-center">
                <div class="max-w-sm m-8">
                    <div class="text-7xl md:text-15xl text-center">
                        @yield('code', __('Oh no'))
                    </div>

                    <div class="w-16 h-1 bg-purple-light my-3 md:my-6"></div>

                    <p class="text-grey-darker text-2xl md:text-3xl font-light mb-8 leading-normal text-center">
                        @yield('message')
                    </p>

                    <div class="text-center">
                        <a href="{{ app('router')->has('home') ? route('home') : url('/') }}">
                            <div class="btn-primary">
                                {{ __('Go Home') }}
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
