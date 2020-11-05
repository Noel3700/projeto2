ID:{{$genero->id_genero}}<br>
Designacao:{{$genero->designacao}}<br>
Observacoes:{{$genero->observacoes}}

@if(count($genero->livros))
@foreach ($genero->livros as $livro)
<h3>{{$livro->titulo}}</h3>
@endforeach
@else
<div class="alert alert-danger" role="alert">
Neste género ainda nao há livros!
</div>
@endif