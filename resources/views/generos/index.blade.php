@extends('layout')
@section('titulo')
A minha APP
@endsection
@section('header')

@endsection
@section('conteudo')
<ul>
    @foreach($generos as $genero)
<li>{{$genero->designacao}}</li>
@endforeach
    {{$generos->render()}}
</ul>
@endsection