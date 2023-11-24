@extends('layouts.plantilla')

@section('titulo','Recuerdos')

@section('name')

@section('contenido')

@if(session()->has('confirmacion'))
   <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
      <strong>{{session('confirmacion')}}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
@endif
 
<h1 class="display-1 text-center text-danger mt-4">Recuerdos</h1>
<div class="container">

@foreach ($consR as $item)
   <div class="card w-75 mb-3 mt-5">
      <div class="card-body">
         <h5 class="card-title fw-bold ">{{$item->titulo}}</h5>
         <h5 class="card-tittle fw-medium">{{$item->fecha}}</h5>
         <p class="card-text fw-lighter">{{$item->recuerdo}}</p>
         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editar{{$item->id}}">
            Editar
         </button>
         
         <!-- Agregamos un botón para activar el modal de confirmación -->
         <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmarEliminar{{$item->id}}">
            Eliminar
         </button>
      </div>
   </div>

   @include('partials.modal')
   @include('partials.modaleliminar')


@endforeach

@endsection
