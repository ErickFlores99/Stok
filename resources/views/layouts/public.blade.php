<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('script')
</head>

<body class="font-sans antialiased bg-background">

    {{-- Contenedor padre --}}
    <div class="min-h-screen">

        {{-- Espaciado superior global --}}
        <div class="pt-6">

            {{-- HEADER --}}
            <header class="mb-6">
                @yield('header')
            </header>

            {{-- CONTENIDO --}}
            <main class="max-w-7xl mx-auto px-4 pb-10">
                @yield('content')
            </main>

        </div>

    </div>

</body>
</html>