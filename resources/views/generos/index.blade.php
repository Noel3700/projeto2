@extends('layout')
@section('titulo')
A minha APP
@endsection
@section('header')

@endsection
@section('conteudo')
<ul>
    @foreach($generos as $genero)
    <li>
    <a href="{{route('generos.show',['id'=>$genero->id_genero])}}">
    {{$genero->designacao}}
    </a>
    </li>

@endforeach
    {{$generos->render()}}
</ul>
@endsection