<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    protected $primaryKey="id_autor";

    protected $table="autores";
    
     public function livro(){
         return $this->hasMany('App\Models\Livro', 'id_autor');   
        
    }
    
    public function livros(){
        return $this->belongsToMany(
        'App\Models\Livro',
            'autores_livros',//nome da tabela pivot
            'id_autor',//fk de autores livros que relaciona com  livro
            'id_livro'//fk de autores livros que relaciona com Autor
        )->withTimestamps();
    }
}
