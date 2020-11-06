<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $primaryKey="id_livro";

    protected $table="livros";
    
    public function genero(){
     return $this->belongsTo('App\Models\Genero', 'id_genero');        
    }
    public function autor(){
        return $this->belongsTo('App\Models\Autor', 'id_autor');
    }
    
    public function autores(){
        return $this->belongsToMany(
        'App\Models\Autor',
            'autores_livros',//nome da tabela pivot
            'id_livro',//fk de autores livros que relaciona com  livro
            'id_autor'//fk de autores livros que relaciona com Autor
        )->withTimestamps();
    }
    
    public function editoras(){
        return $this->belongsToMany(
        'App\Models\Editora',
            'edicoes',//nome da tabela pivot
            'id_livro',//fk de autores livros que relaciona com  livro
            'id_editora'//fk de autores livros que relaciona com Autor
        )->withTimestamps();
    }
}
