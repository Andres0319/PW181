<!DOCTYPE html>
<html>
<head>
    <title>Búsqueda de Productos</title>
</head>
<body>
    <h1>Búsqueda de Productos</h1>
    <form action="{{ route('productos') }}" method="post">
    <form method="GET" action="/busqueda-productos">
        <label for="busqueda">Buscar productos:</label>
        <input type="text" name="busqueda" id="busqueda">
        <button type="submit">Buscar</button>
    </form>
</body>
</html> 


@extends('layouts.plantilla')

@section('titulo','productos')

@section('name')

@section('contenido')

@section('partials.card')

@endsection
