@extends('layout')
ID:{{$editora->id_editora}}<br>
Nome:{{$editora->nome}}<br>
Morada:{{$editora->morada}}<br>
Observacoes:{{$editora->observacoes}}


@if(count($editora->livros)>0)
@foreach($editora->livros as $editora)
{{$editora->nome}}<br>
@endforeach
@else
<div class="alert alert-danger" role="alert">Este editor nao tem livros
</div>
@endif