{{-- resources/views/hoteis/index.blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Hotéis em um site de reservas')

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

<form method="post" action="{{route ('hoteis.gravar')}}">
    @csrf
    {{-- Campos no banco: id, nome, cidade, país, estrelas, valor da diária e comodidades. --}}
    <input type="text" name="nome" placeholder="Nome" value="{{old('nome')}}">
    <br>
    <input type="text" name="cidade" placeholder="Cidade" value="{{old('cidade')}}">
    <br>
    <input type="text" name="pais" placeholder="País" value="{{old('pais')}}">
    <br>
    <input type="number" name="estrelas" placeholder="Estrelas" value="{{old('estrelas')}}">
    <br>
    <input type="number" name="valorDiaria" placeholder="ValorDiária" value="{{old('valorDiaria')}}">
    <br>
    <input type="text" name="comodidades" placeholder="Comodidades" value="{{old('comodidades')}}">
    <br>
    <input type="submit" value="Gravar">
</form>

@endsection
