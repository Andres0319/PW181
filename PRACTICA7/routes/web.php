<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\diarioController;


// Rutas individuales para controlador
 Route::get('/ini', [diarioController::class,'metodoInicio'])->name('apodoInicio');
 Route::get('/regis', [diarioController::class,'metodoRegistro'])->name('apodoRegistro');


//Ruta para un request post del recuerdo
Route::post('/guardarRecuerdo', [diarioController::class,'guardarRecuerdo'])->name('guardar');



// Rutas agrupadas por controlador

// Route::controller(diarioController::class)->group(function (){
//     Route::get('/','metodoinicio')->name('apodoinicio');
//     Route::get('/form','metodoFormulario')->name('apodoFormulario');
//     Route::get('/loquequieroolvidar','metodoRecuerdos')->name('apodoRecuerdos');
// });



