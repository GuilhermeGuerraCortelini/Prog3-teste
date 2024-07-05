{{-- resources/views/usuarios/index.blade.php --}}

@extends('base')

@section('titulo', 'Alterar | Usuários')

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

<form method="post" action="{{route ('usuarios.alterar', $usuario->id)}}">
    @csrf
    @method('put')
    {{-- Campos no banco: id, nome, cidade, país, estrelas, valor da diária e comodidades. --}}
    <input type="text" name="name" placeholder="Name" value="{{old('name', $usuario->name ?? '')}}">
    <br>
    <input type="text" name="email" placeholder="Email" value="{{old('email', $usuario->email ?? '')}}">
    <br>
    <input type="text" name="username" placeholder="UserName" value="{{old('username', $usuario->username ?? '')}}">
    <br>
    <input type="password" name="password" placeholder="Password" value="{{old('password', $usuario->password ?? '')}}">
    <br>
    <select name="admin" value="{{old('admin', $usuario->admin ?? '')}}">
        <option value="-1">Seleione um Admin</option>
        <option value="1">Sim</option>
        <option value="0">Não</option>
    </select>
    <br>
    <input type="submit" value="Gravar">
</form>

@endsection
