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

        <style>
            .bg-gradient-primary {background: linear-gradient(87deg, #5e72e4 0, #825ee4 100%); }
        </style>

        <!-- Scripts -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

        <script src="{{ asset('js/app.js') }}" defer></script>

        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-gray-100 flex">

        <aside class="relative bg-white min-h-screen w-64 hidden sm:block shadow-xl">

            @include('layouts.sidebar')
            
        </aside>

        <div class="w-full flex flex-col min-h-screen overflow-y-hidden">
            
            {{-- Desktop Header --}}
            @include('layouts.header_desktop')

           
            {{-- Mobile Header & Nav --}}
            @include('layouts.header_mobile')
           
            {{-- Main Content --}}
            {{ $slot }}

        </div>
        
        @livewireScripts
    </body>
</html>
