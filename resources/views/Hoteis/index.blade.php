{{-- resources/views/hoteis/index.blade.php --}}

@extends('base')

@section('titulo', 'Listagem | Hotéis em um site de reservas')

@section('conteudo')
<p>
    <a href="{{route('hoteis.cadastrar')}}">Cadastrar hotel</a>
</p>
<p> Veja nossa lista de hoteis para reservas</p>

<table border=1>
    <tr>
        <th>Nome</th>
        <th>Cidade</th>
        <th>Pais</th>
        <th>Estrelas</th>
        <th>ValorDiaria</th>
        <th>Comodidades</th>
        <th>Ações</th>
    </tr>

    @foreach($hoteis as $hotel)
    <tr>
        <td>{{$hotel['nome']}}</td>
        <td>{{$hotel['cidade']}}</td>
        <td>{{$hotel['pais']}}</td>
        <td>{{$hotel['estrelas']}}</td>
        <td>{{$hotel['valorDiaria']}}</td>
        <td>{{$hotel['comodidades']}}</td>
        <td>
            <a href="{{route('hoteis.apagar', $hotel['id'])}}">Apagar</a> |
            <a href="{{route('hoteis.alterar', $hotel['id'])}}">Alterar</a>
        </td>
    </tr>
    @endforeach

</table>
@endsection


