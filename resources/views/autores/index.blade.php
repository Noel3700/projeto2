@extends('layout')
@section('titulo')
A minha APP
@endsection
@section('header')

@endsection
@section('conteudo')
<ul>
    @foreach($autores as $autor)
    
<li>
    <a href="{{route('autores.show',['id'=>$autor->id_autor])}}">
    {{$autor->nome}}
    </a>
    </li>
@endforeach
    {{$autores->render()}}
</ul>
@endsection