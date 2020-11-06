ID:{{$autor->ida}}<br>
Nome:{{$autor->nome}}<br>
Nacionalidade:{{$autor->nacionalidade}}<br>
Data:{{$autor->data}}

 


@if(count($autor->livros))
@foreach ($autor->livros as $livro)
<h3>{{$livro->titulo}}</h3>
@endforeach
@else
<div class="alert alert-danger" role="alert">
Este autor nao tem livros!!!
</div>
@endif