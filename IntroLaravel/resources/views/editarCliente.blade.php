@extends('layouts.plantilla1')

@section('titulo', 'Editar Cliente')

@section('contenido')
<div class="container mt-5 col-md-6">
    <div class="card-header fs-5 text-center text-primary">
        {{__('Editar Cliente')}}
    </div>
    <form action="#" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="nombre" class="form-label">{{__('Nombre')}}</label>
            <input type="text" class="form-control" name="txtnombre" value="{{ $cliente->nombre }}" required>
            <small class="fts-italic text-danger">{{ $errors->first('txtnombre') }}</small>
        </div>

        <div class="mb-3">
            <label for="apellido" class="form-label">{{__('Apellido')}}</label>
            <input type="text" class="form-control" name="txtapellido" value="{{ $cliente->apellido }}" required>
            <small class="fts-italic text-danger">{{ $errors->first('txtapellido') }}</small>
        </div>

        <div class="mb-3">
            <label for="correo" class="form-label">{{__('Correo')}}</label>
            <input type="email" class="form-control" name="txtcorreo" value="{{ $cliente->correo }}" required>
            <small class="fts-italic text-danger">{{ $errors->first('txtcorreo') }}</small>
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">{{__('Telefono')}}</label>
            <input type="number" class="form-control" name="txttelefono" value="{{ $cliente->telefono }}" required>
            <small class="fts-italic text-danger">{{ $errors->first('txttelefono') }}</small>
        </div>

        <button type="submit" class="btn btn-primary">{{__('Actualizar Cambios')}}</button>
        
        <a href="#" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
