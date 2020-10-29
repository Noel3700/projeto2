@extends('layout')
@section('titulo')
A minha APP
@endsection
@section('header')

@endsection
@section('conteudo')
<ul>
    @foreach($editoras as $editora)
<li>{{$editora->nome}}</li>
@endforeach
    {{$editoras->render()}}
</ul>
´@endsection