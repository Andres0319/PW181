<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormRegistro;

class diarioController extends Controller
{
    public function metodoInicio(){

        return view ('inicio');
    }

    public function metodoRegistro(){

        return view ('registro');
    }

    public function guardarRecuerdo(validadorFormRegistro $req){

          return redirect('/regis')->with('confirmacion','Todo correcto: Libro ' .$req->input('titulo').' guardado');

         
    }
}
