@extends('layout')
@section('titulo')
A minha APP
@endsection
@section('header')

@endsection
@section('conteudo')

<ul>
    @foreach($livros as $livro)
<li>
    <a href="{{route('livros.show',['id'=>$livro->idl])}}">
    {{$livro->titulo}}
        </a>
        </li>
@endforeach
    {{$livros->render()}}
</ul>
@endsection
