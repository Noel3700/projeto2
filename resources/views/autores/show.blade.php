ID:{{$autor->ida}}<br>
Nome:{{$autor->nome}}<br>
Nacionalidade:{{$autor->nacionalidade}}<br>
Data:{{$autor->data}}

if(count($livros->editoras))
@foreach ($livros->editoras as $editora)
<h3>{{$editora->nome}}</h3>
@endforeach
@else
<div class="alert alert-danger" role="alert">
Neste livro  nao há editora!
</div>
@endif