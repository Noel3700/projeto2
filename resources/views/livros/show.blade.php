@extends('layout')
ID:{{$livro->id_livro}}<br>
Título:{{$livro->titulo}}<br>
Idioma:{{$livro->idioma}}<br>
Paginas:{{$livro->total_paginas}}<br>
Data:{{$livro->data_edicao}}<br>
ISBN:{{$livro->isbn}}<br>
Obseracoes:{{$livro->obseracoes}}<br>
Imagem:{{$livro->imagem}}<br>
Sinopse:{{$livro->sinopse}}<br>

@if(isset($livro->genero->designacao))
{{$livro->genero->designacao}}<br>
@else
<div class="alert alert-danger" role="alert">Sem genero definido
</div>
@endif

@if(count($livro->autores)>0)
@foreach($livro->autores as $autor)
{{$autor->nome}}<br>
@endforeach
@else
<div class="alert alert-danger" role="alert">Sem autor definido
</div>
@endif
