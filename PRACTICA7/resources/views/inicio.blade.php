@extends('layouts.plantilla')

@section('titulo', 'inicio')

@section('name')

@section('contenido')

<h1 class="display-1 text-center text-dark mt-4">Principal</h1>
<div class="container mt-4">
    <h2>Noticia Literaria</h2>
    <p>Aquí puedes agregar la noticia literaria que deseas mostrar en la página principal de la biblioteca. Por ejemplo, puedes escribir algo interesante sobre libros, autores o eventos literarios.</p>

    <img src="{{ asset('nombre_de_la_imagen.jpg') }}" alt="Descripción de la imagen">
</div>

<hr>
<footer>

    
    <p>&copy; {{ date('Y') }} Biblioteca Readman {{ date('d F Y') }} </p>
</footer>
</div>

</body>
</html>

@endsection
