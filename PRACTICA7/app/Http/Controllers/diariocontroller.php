<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormRecuerdos;

class diarioController extends Controller
{
    public function metodoInicio(){

        return view ('inicio');
    }

    public function metodoRegistro(){

        return view ('registro');
    }

    public function guardarRecuerdo(validadorFormRecuerdos $req){

          return redirect('/regis')->with('confirmacion','Tu Registro del libro llego al controlador');

         
    }
}
