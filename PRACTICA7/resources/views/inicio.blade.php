@extends('layouts.plantilla')

@section('titulo', 'inicio')

@section('name')

@section('contenido')

<h1 class="display-1 text-center text-dark mt-4">Principal</h1>

<div class="card-group">
    <div class="card custom-card" style="width: 18rem;">
        <img src="css/imagen2.avif" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Kazuo Ishiguro: el poder de la nostalgia</h5>
            <p class="card-text">El proyecto literario del premio Nobel 2017 está anclado en dos hemisferios: los mecanismos de la memoria y la pérdida.</p>
            <a href="{{ url('/regis') }}" class="btn btn-primary">Ir a Registro</a>
        </div>
    </div>
    <div class="card custom-card" style="width: 18rem;">
        <img src="css/messi.avif" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Messi Ganador 8vo Balon de oro </h5>
            <p class="card-text">Se llevó a cabo la edición número 67 del premio Balón de Oro, que es entregado por la revista France Football. El Balón de Oro 2023 coronó a los dos mejores jugadores del mundo: Lionel Messi en la categoría masculina y Aitana Bonmatí en la femenina.</p>
            <a href="{{ url('/regis') }}" class="btn btn-primary">Ir a Registro</a>
        </div>
    </div>
    <div class="card custom-card" style="width: 18rem;">
        <img src="css/imagen3.avif" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Mecanoscrito original con relatos inéditos de Cortázar, encontrado en una caja de bananos, se remata en US$ 36.000</h5>
            <p class="card-text">Un mecanoscrito original de “Historias de cronopios y de famas”, el icónico libro de relatos del fallecido escritor argentino Julio Cortázar, que incluye siete relatos inéditos, fue subastado en Montevideo en US$ 36.000.</p>
            <a href="{{ url('/regis') }}" class="btn btn-primary">Ir a Registro</a>
        </div>
    </div>
</div>

<hr>
<footer>
    <p class="text-center">&copy; {{ date('Y') }} Biblioteca Readman {{ date('d F Y') }} </p>
</footer>
</div>

</body>
</html>

@endsection
