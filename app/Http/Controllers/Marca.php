<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
class Marca extends Controller
{
    public function listado_marcas(){
        $marcas = DB::table('marca')->get();
        return view ('marcas.listado',['marc'=>$marcas]);
      }  
}
