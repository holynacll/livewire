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
    <body class="font-sans antialiased">
        <div class="container flex min-h-screen bg-gray-100">
            {{-- @include('layouts.navigation') --}}

            {{-- <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header> --}}

            <!-- Page Content -->

                {{-- <aside class="flex flex-col w-64 border-r border-gray-200 bg-indigo-800">
                    @include('layouts.dash')
                </aside> --}}

                <aside class="hidden md:flex flex md:flex-shrink-0">
                    @include('layouts.dash')
                </aside>

                <main class="flex flex-col w-0 flex-1 overflow-hidden">

                        <!-- Page Heading -->
                        <header class="bg-white shadow">
                            <div class="max-w-7xl mx-auto py-5 px-4 sm:px-6 lg:px-8">
                                {{ $header }}
                            </div>
                        </header>
                        
                    {{ $slot }}
                </main>


            
        </div>
    </body>
</html>
