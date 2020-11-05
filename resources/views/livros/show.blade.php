@extends('layout')
ID:{{$livro->id_livro}}<br>
Título:{{$livro->titulo}}<br>
Idioma:{{$livro->idioma}}<br>
Paginas:{{$livro->total_paginas}}<br>
Data:{{$livro->data_edicao}}<br>
ISBN:{{$livro->isbn}}<br>
Obseracoes:{{$livro->obseracoes}}<br>
Imagem:{{$livro->imagem}}<br>
Genero:{{$livro->id_genero}}<br>
Autor:{{$livro->id_autor}}<br>
Sinopse:{{$livro->sinopse}}<br>

@if(isset($livro->genero->designacao))
{{$livro->genero->designacao}}
@else
<div class="alert alert-danger" role="alert">Sem genero definido
</div>
@endif