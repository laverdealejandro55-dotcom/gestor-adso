<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col justify-center items-center px-4 py-10 bg-gradient-to-br from-indigo-600 via-indigo-500 to-sky-400">
            <a href="/" class="flex flex-col items-center text-white">
                <span class="flex items-center justify-center w-16 h-16 rounded-2xl bg-white/20 backdrop-blur ring-1 ring-white/40 shadow-lg">
                    <x-application-logo class="w-10 h-10 fill-current text-white" />
                </span>
                <span class="mt-3 text-2xl font-bold tracking-tight">Gestor ADSO</span>
                <span class="text-sm text-indigo-100">Gestión de aprendices</span>
            </a>

            <div class="w-full sm:max-w-md mt-8 px-8 py-8 bg-white shadow-2xl rounded-2xl">
                {{ $slot }}
            </div>

            <p class="mt-6 text-xs text-indigo-100">&copy; {{ date('Y') }} Gestor ADSO</p>
        </div>
    </body>
</html>
