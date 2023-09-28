<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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

 Route::view('/','welcome')->name('apodoinicio');
 Route::view('/form','formulario')->name('apodoformulario');
 Route::view('/loquequieroolvidar','recuerdos')->name('apodorecuerdo');