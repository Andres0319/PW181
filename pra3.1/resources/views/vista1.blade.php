@extends('layouts.plantilla')

@section('titulo','Inicio')

@section('contenido')
    

    
    <h1 class="display-1 text-center text-danger mt-4">Vista 1</h1>

    <x-card></x-card>
    
    <x-mensaje mensaje="Esta es la vista 1" fecha="11/10/23"></x-mensaje>

@endsection