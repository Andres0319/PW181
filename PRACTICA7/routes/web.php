<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\diarioController;


// Rutas individuales para controlador
 Route::get('/', [diarioController::class,'metodoInicio'])->name('apodoInicio');
 Route::get('/regis', [diarioController::class,'metodoRegistro'])->name('apodoRegistro');


//Ruta para un request post del recuerdo
Route::post('/guardarRecuerdo', [diarioController::class,'guardarRecuerdo'])->name('guardar');