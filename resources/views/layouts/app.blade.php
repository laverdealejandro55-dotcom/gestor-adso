<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Gestor ADSO</title>
 @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
 <nav>
 <a href="/aprendices">Aprendices</a>

 @auth
 <span>Hola, {{ auth()->user()->name }}</span>
 <form method="POST" action="{{ route('logout') }}">
 @csrf
 <button type="submit">Salir</button>
 </form>
 @endauth

 @guest
 <a href="{{ route('login') }}">Iniciar sesión</a>
 <a href="{{ route('register') }}">Registrarse</a>
 @endguest
 </nav>

 @if(session('ok'))
 <div>{{ session('ok') }}</div>
 @endif

 @yield('content')
</body>
</html>
