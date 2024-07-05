{{-- resources/views/usuarios/index.blade.php --}}

@extends('base')

@section('titulo', 'Listagem | Usuários')

@section('conteudo')

<p>
    <a href="{{route('usuarios.cadastrar')}}">Cadastrar usuário</a>
</p>
<p> Veja nossa lista de Usuários</p>


<table border=1>
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>UserName</th>
        <th>Password</th>
        <th>Admin</th>
        <th>Ações</th>
    </tr>

    @foreach($usuarios as $usuario)
    <tr>
        <td>{{$usuario['name']}}</td>
        <td>{{$usuario['email']}}</td>
        <td>{{$usuario['username']}}</td>
        <td>{{$usuario['password']}}</td>
        <td>@if($usuario['admin'] == 0) Não @else Sim @endif</td>
        <td>
            <a href="{{route('usuarios.apagar', $usuario['id'])}}">Apagar</a> |
            <a href="{{route('usuarios.alterar', $usuario['id'])}}">Alterar</a>
        </td>
    </tr>
    @endforeach

</table>

@endsection