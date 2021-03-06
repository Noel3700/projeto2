<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;
class AutoresController extends Controller
{
    public function index(){
       $autores=Autor::paginate(4);
   	//$autores=Autor::all()->sortbydesc('idl');

   	 return view('autores.index',[
   	 	'autores'=>$autores
   	 ]);
   }
    
   public function show(Request $request){
       $idAutor=$request->id;
        $autor = Autor::where('id_autor',$idAutor)->with('livro')->first();
       return view('autores.show',[
           'autor'=>$autor
       ]);
           
       
   } 
    
    
    
    
    
}
