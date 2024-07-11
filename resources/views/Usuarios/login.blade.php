{{-- resources/views/usuarios/login.blade.php --}}

@extends('base')

@section('titulo', 'Login | Usuários')

@section('conteudo')

<form action="{{route('login')}}" method="post">
    @csrf
    <input type="text" name="username" placeholder="Usuário">
    <br>
    <input type="password" name="password" placeholder="Senha">
    <br>
    <input type="submit" value="Entrar">
</form>

@endsection