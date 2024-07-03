{{-- resources/views/hoteis/apagar.blade.php --}}

@extends('base')

@section('titulo', 'Apagar | Hotéis em um site de reservas')

@section('conteudo')
    <p>Tem certeza que quer apagar?</p>
    <p><em>{{ $hotel['nome'] }}</em></p>
    <form action="{{route('hoteis.apagar', $hotel['id'])}}" method="post">
    @method('delete') 
    @csrf
    <input type="submit" value="Pode apagar sem medo" style="background-color:red;color:white">
    </form>
    <a href="{{route('hoteis')}}">Cancelar</a> 
@endsection
