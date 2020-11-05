<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;
class GenerosController extends Controller
{
    public function index(){
       $generos=Genero::paginate(4);
   	//$generos=Genero::all()->sortbydesc('idl');

   	 return view('generos.index',[
   	 	'generos'=>$generos
   	 ]);
    }
        public function show(Request $request){
       $idGenero=$request->id;
        $genero = Genero::where('id_genero',$idGenero)->with('livros')->first();
         
       return view('generos.show',[
           'genero'=>$genero
       ]);
            
}
}
