@extends('layout')
@section('titulo')
A minha APP
@endsection
@section('header')

@endsection
@section('conteudo')
<ul>
    @foreach($autores as $autor)
<li>{{$autor->nome}}</li>
@endforeach
    {{$autores->render()}}
</ul>
@endsection