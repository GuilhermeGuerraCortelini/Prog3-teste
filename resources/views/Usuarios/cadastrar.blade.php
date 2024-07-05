{{-- resources/views/usuarios/index.blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Usuários')

@section('conteudo')

<p>Preencha o formulário</p>

@if($errors->any())
<div>
    <h4>Deu ruim | Preencha todos os campos >:(</h4>
    @foreach($errors->all() as $erro)
    <p>{{$erro}}</p>
    @endforeach
</div>
@endif

<form method="post" action="{{route ('usuarios.gravar')}}">
    @csrf
    {{-- Campos no banco: id, nome, cidade, país, estrelas, valor da diária e comodidades. --}}
    <input type="text" name="name" placeholder="Name" value="{{old('name')}}">
    <br>
    <input type="text" name="email" placeholder="Email" value="{{old('email')}}">
    <br>
    <input type="text" name="username" placeholder="UserName" value="{{old('username')}}">
    <br>
    <input type="password" name="password" placeholder="Password" value="{{old('password')}}">
    <br>
    <select name="admin">
        <option value="null">Selecione um Admin</option>
        <option value="1">Sim</option>
        <option value="0">Não</option>
    </select>
    <br>
    <input type="submit" value="Gravar">
</form>

@endsection
