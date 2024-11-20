@extends('layouts.plantilla1')
        
@section('titulo', 'Clientes')

@section('contenido')
    <div class="container mt-5 col-md-8">
        
        @foreach ($consultaClientes as $cliente)
        <div class="card text-justify font-monospace mt-3">
            <div class="card-header fs-5 text-primary ">
                {{ $cliente -> nombre}}
            </div>
            <div class="card-body">
                <h5 class="fw-blod">{{ $cliente -> correo}}</h5>
                <h5 class="fw-medium">{{ $cliente -> telefono}}</h5>
                <p class="card-text fw-lighter"> </p>
            </div>

            <div class="card-footer text-muted">
                <a href="{{ route('editarCliente', $cliente->id) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="#" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </div>
            
        </div>
        @endforeach
    </div>
@endsection



