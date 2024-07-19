{{-- resources/views/base.blade.php --}}
<html>
<head>
    <title>@yield('titulo')</title>
    <head>
    <body>
        <h1>@yield('titulo')</h1>
        <hr>
        <a href="{{route('index')}}">Inicial</a>
        |
        <a href="{{route('hoteis')}}">Hoteis</a>
        |
        {{-- primeiro ver se o usuário está autenticado --}}
        @if(Auth::user() && Auth::user()['admin'] == 1)
            <a href="{{route('usuarios')}}">Usuarios</a>
            |
        @endif
        @if(Auth::user())
            Olá, <strong> {{Auth::user()['name']}} </strong>
            <a href="{{route('logout')}}">Logout</a>
        @else
            <a href="{{route('login')}}">Login</a>
        @endif
        <hr>
        @yield('conteudo')
    </body>
</html>
