<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gestor ADSO')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100 text-gray-800 min-h-screen">
    <nav class="bg-white border-b border-gray-200 shadow-sm">
        <div class="max-w-5xl mx-auto px-4 h-16 flex items-center justify-between">
            <div class="flex items-center gap-6">
                <a href="{{ route('aprendices.index') }}" class="text-lg font-bold text-indigo-600">Gestor ADSO</a>
                <a href="{{ route('aprendices.index') }}"
                   class="text-sm font-medium {{ request()->routeIs('aprendices.*') ? 'text-indigo-600' : 'text-gray-600 hover:text-gray-900' }}">
                    Aprendices
                </a>
            </div>

            <div class="flex items-center gap-4">
                @auth
                    <span class="text-sm text-gray-600">Hola, <strong class="text-gray-900">{{ auth()->user()->name }}</strong></span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="px-3 py-1.5 text-sm font-medium rounded-md border border-gray-300 text-gray-700 hover:bg-gray-50">Salir</button>
                    </form>
                @endauth

                @guest
                    <a href="{{ route('login') }}" class="text-sm font-medium text-gray-600 hover:text-gray-900">Iniciar sesión</a>
                    <a href="{{ route('register') }}" class="px-3 py-1.5 text-sm font-medium rounded-md bg-indigo-600 text-white hover:bg-indigo-500">Registrarse</a>
                @endguest
            </div>
        </div>
    </nav>

    <main class="max-w-5xl mx-auto px-4 py-8">
        @if(session('ok'))
            <div class="mb-4 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800">{{ session('ok') }}</div>
        @endif

        @yield('content')
    </main>
</body>
</html>
