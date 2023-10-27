@extends('layouts.plantilla')

@section('titulo', 'registro')

@section('name')

@section('contenido')

<h1 class="display-1 text-center text-dark mt-4">Registro del Libro</h1>

<div class="container mt-5 col-md-8">
    @if (session()->has('confirmacion'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('confirmacion') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @endif

    @if ($errors->any())
    @foreach ($errors->all() as $error)

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ $error }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @endforeach
    @endif

    <div class="card">
        <div class="card-header fs-5 fw-medium text-Primary text-center">
            Introduce aquí el registro de tus libros...
        </div>

        <div class="card-body">
            <form method="POST" action="/guardarRecuerdo">
                @csrf

                <div class="mb-3">
                    <label class="form-label text-primary">ISBN: </label>
                    <input type="text" name="isbn" class="form-control" value="{{ old('isbn') }}">
                    <p class="text-danger fw-bold"> {{ $errors->first('isbn') }}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label text-primary">Título: </label>
                    <input type="text" name="titulo" class="form-control" value="{{ old('titulo') }}">
                    <p class="text-danger fw-bold"> {{ $errors->first('titulo') }}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label text-primary">Autor: </label>
                    <input type="text" name="autor" class="form-control" value="{{ old('autor') }}">
                    <p class="text-danger fw-bold"> {{ $errors->first('autor') }}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label text-primary">Páginas: </label>
                    <input type="text" name="paginas" class="form-control" value="{{ old('paginas') }}">
                    <p class="text-danger fw-bold"> {{ $errors->first('paginas') }}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label text-primary">Editorial: </label>
                    <input type="text" name="editorial" class="form-control" value="{{ old('editorial') }}">
                    <p class="text-danger fw-bold"> {{ $errors->first('editorial') }}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label text-primary">Email de Editorial: </label>
                    <input type="text" name="email_editorial" class="form-control" value="{{ old('email_editorial') }}">
                    <p class="text-danger fw-bold"> {{ $errors->first('email_editorial') }}</p>
                </div>
        </div>

        <div class="card-footer text-body-secondary">
            <button type="submit" class="btn btn-outline-success">Guardar Recuerdo</button>
        </form>
    </div>
</div> <!-- cierre de la tarjeta -->

</div> <!-- cierre del container -->

<footer>
    <p>&copy; {{ date('Y') }} Biblioteca Readman {{ date('d F Y') }} </p>
</footer>

@endsection
