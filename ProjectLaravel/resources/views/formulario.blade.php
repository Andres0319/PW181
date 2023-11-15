@extends('layouts.plantilla')

@section('titulo','formulario')

@section('name')

@section('contenido')
    
    
    <h1 class="display-1 text-center text-danger mt-4">Formulario</h1>


    <div class="container mt-5 col-md-8">

    <div class="card">
        <div class="card-header fs-5 fw-medium text-primary text-center">
          Introduce aqui tus memorias...
        </div>

        <div class="card-body">

            <form method="POST" action="/recuerdo">
              @csrf 

              <div class="mb-3">
                <label class="form-label">Titulo:</label>
                <input type="text" name="txtTitulo" class="form-control" value="{{ old('txtTitulo') }}">
                <p class="text-danger fw-bold">{{$errors->first('txtTitulo')}}</p>
             </div>
         
             <div class="mb-3">
                <label class="form-label">Recuerdo:</label>
                <input type="text" name="txtRecuerdo" class="form-control" value="{{ old('txtRecuerdo') }}">
                <p class="text-danger fw-bold">{{$errors->first('txtRecuerdo')}}</p>
             </div>

        <div class="card-footer text-body-secondary">
            <button type="submit" class="btn btn-outline-success">Guardar Recuerdo</button>
        </form>
        </div>
      </div> <!-- cierre de la tarjeta-->
    </div> <!-- cierre del container-->

@endsection