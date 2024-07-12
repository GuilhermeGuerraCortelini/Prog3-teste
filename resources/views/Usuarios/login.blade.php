{{-- resources/views/usuarios/login.blade.php --}}

@extends('base')

@section('titulo', 'Login | Usuários')

@section('conteudo')

@if(session('erro'))
    <div style="background-color:red;color:white">
    {{ session('erro') }}
    </div>
@endif  

@if($errors->any())
<div>
    <h4>Deu ruim | Preencha todos os campos >:(</h4>
    @foreach($errors->all() as $erro)
    <p>{{$erro}}</p>
    @endforeach
</div>
@endif

<form action="{{route('login')}}" method="post">
    @csrf
    <input type="text" name="username" placeholder="Usuário">
    <br>
    <input type="password" name="password" placeholder="Senha">
    <br>
    <input type="submit" value="Entrar">
</form>

@endsection