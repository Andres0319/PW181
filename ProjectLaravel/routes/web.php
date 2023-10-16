<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\diarioController;


// Rutas individuales para controlador
// Route::get('/', [diarioController::class,'metodoInicio'])->name('apodoinicio');
// Route::get('/form', [diarioController::class,'metodoFormulario'])->name('apodoFormulario');
// Route::get('/loquequieroolvidar', [diarioController::class,'metodoRecuerdos'])->name('apodoRecuerdos');

// Rutas agrupadas por controlador

Route::controller(diarioController::class)->group(function (){
    Route::get('/','metodoinicio')->name('apodoinicio');
    Route::get('/form','metodoFormulario')->name('apodoFormulario');
    Route::get('/loquequieroolvidar','metodoRecuerdos')->name('apodoRecuerdos');
});
































// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/form', function () {
//     return view('formulario');
// });

// Route::get('/loquequieroolvidar', function () {
//     return view('recuerdos');
// });



 //rutas de tipo view

//  Route::view('/','welcome')->name('apodoinicio');
//  Route::view('/form','formulario')->name('apodoformulario');
//  Route::view('/loquequieroolvidar','recuerdos')->name('apodorecuerdo');