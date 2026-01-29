<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Biblioteca')</title>
    <x-custom-css />
</head>
<body>
        <header>
             @section('header')
            <h1>Biblioteca App</h1>
            @show
        </header>
        <nav>
            @section('navigation')
            @guest
            <x-boton-enlace ruta="{{ route('login') }}">Login</x-boton-enlace>
            <x-boton-enlace ruta="{{ route('register') }}">Register</x-boton-enlace>
            @endguest
            @auth
            <x-boton-enlace evento="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</x-boton-enlace>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <x-boton-enlace ruta="{{ route('profile.edit') }}"> User: {{ Auth::user()->name }}</x-boton-enlace>
            @endauth
            @show
        </nav>
        <main>
            @yield('content')
        </main>
        <footer>
            @section('footer')
            <p>&copy; {{ date('Y') }} M. Varon</p>
            @show
        </footer>
    
</body>
</html>