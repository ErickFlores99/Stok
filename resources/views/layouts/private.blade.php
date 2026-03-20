<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-100">

    <div class="min-h-screen">

        <div class="pt-6">

            {{-- HEADER --}}
            @include('components.private.header', ['opt' => $opt ?? ''])

            {{-- CONTENIDO --}}
            <main class="max-w-7xl mx-auto px-4 pb-10">
                @yield('content')
            </main>

        </div>

    </div>

    {{-- SCRIPTS --}}
    //link header acctions
    <script src="{{ asset('js/private/header.js') }}"></script>

    @yield('scripts')
</body>
</html>