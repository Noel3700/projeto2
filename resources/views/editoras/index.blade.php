@extends('layout')
@section('titulo')
A minha APP
@endsection
@section('header')

@endsection
@section('conteudo')
<ul>
    @foreach($editoras as $editora)
    <li>
    <a href="{{route('editoras.show',['id'=>$editora->id_editora])}}">
    {{$editora->nome}}
    </a>
    </li>

@endforeach
    {{$editoras->render()}}
</ul>
@endsection