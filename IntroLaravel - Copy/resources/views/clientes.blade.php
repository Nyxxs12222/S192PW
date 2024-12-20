@extends('layouts.plantilla1')
        
@section('titulo', 'Clientes')

@section('contenido')
    <div class="container mt-5 col-md-8">

        <div class="card text-justify font-monospace">

            <div class="card-header fs-5 text-primary">
                Roberto Uriel Martinez Martinez

            </div>

                <div class="card-body">
                    <h5 class="fw-blod">uriel.mtz@gmail.com</h5>
                    <h5 class="fw-medium">4426804114</h5>
                    <p class="card-text fw-lighter"> </p>
                </div>

            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-warning btn-sm">{{__('Actualizar')}}</button>
                <button type="submit" class="btn btn-danger btn-sm">{{__('Eliminar')}}</button>

            </div>

        </div>
    </div>
@endsection