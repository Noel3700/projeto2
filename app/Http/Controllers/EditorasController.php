<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editora;
class EditorasController extends Controller
{
    public function index(){
       $editoras=Editora::paginate(4);
   	//$editoras=Editora::all()->sortbydesc('idl');

   	 return view('editoras.index',[
   	 	'editoras'=>$editoras
   	 ]);
   }
}
