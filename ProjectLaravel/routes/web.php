<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\diarioController;
use App\Http\Controllers\ControllerCrudD;

//vistas para el controllerCrudD
Route::get('/recuerdo/create', [ControllerCrudD::class,'create'])->name('recuerdo.create');
Route::post('/recuerdo',[ControllerCrudD::class,'store'])->name('recuerdo.store');
Route::get('/recuerdo', [ControllerCrudD::class,'index'])->name('recuerdo.index');
Route::get('/', [diarioController::class,'metodoInicio'])->name('apodoinicio');
Route::put('/recuerdo/{id}/confirm',[ControllerCrudD::class,'update'])->name('recuerdo.update');

Route::delete('/recuerdo/{id}', [ControllerCrudD::class, 'destroy'])->name('recuerdo.destroy');
































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