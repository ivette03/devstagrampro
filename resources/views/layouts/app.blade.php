<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel-@yield('titulo')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200">
    <header class="p-4 border-b bg-white shadow">
        <div class="flex justify-between mx-auto container">
            <h1 class="text-xl font-black">DevStagram</h1>
            @auth
            <nav class="flex gap-2 items-center">
                <p>Hola <span class="font-bold">{{ auth()->user()->username }}</span></p>
               <form method="POST" action="{{ route('logout') }}">
                @csrf
               <button type="submit" class="font-bold uppercase text-gray-600" href="{{ route('logout')}} ">Cerrar sesión</button>
               </form>
            </nav>
            @endauth
            @guest
            <nav class="flex gap-2 items-center">
                <a class="font-bold uppercase text-gray-600" href="{{ route('login') }}">Login</a>
                <a class="font-bold uppercase text-gray-600" href="{{ route('register') }}">Crear Cuenta</a>
            </nav>
            @endguest
        </div>
    </header>
    <main class="container mx-auto mt-5">
        <h2 class="text-center text-3xl font-bold my-5">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>
    <footer class="text-gray-500 text-center font-bold">
        DevStagram Todos los derechos reservados {{now()->year}}
    </footer>
</body>

</html>