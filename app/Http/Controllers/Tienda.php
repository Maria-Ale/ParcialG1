<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tienda extends Controller
{
    public function tienda(){
        return view ('tiendas.texto');
    }
}