@extends('layouts.plantilla1')
        
@section('titulo', 'Clientes')

@section('contenido')

    <div class="container mt-5 col-md-8">

        @session('exito')
            <script>
                Swal.fire({
                    title: "¡Operación exitosa!",
                    text: '{{ $value }}',
                    icon: "success"
                });
            </script>
        @endsession
        
        <div class="card-header fs-1 text-center text-primary">
            {{__('Clientes')}}
        </div>
        
        @foreach ($consultaClientes as $cliente)
        <div class="card text-justify font-monospace mt-3">
            <div class="card-header fs-5 text-primary ">
                {{ $cliente -> nombre}} {{ $cliente -> apellido}}
            </div>
            <div class="card-body">
                <h5 class="fw-blod">{{ $cliente -> correo}}</h5>
                <h5 class="fw-medium">{{ $cliente -> telefono}}</h5>
            </div>


            <div class="card-footer text-muted">
                <a href="{{ route('editarCliente', $cliente->id) }}" class="btn btn-warning btn-sm">Editar</a>

                <form action="{{ route('eliminarCliente', $cliente->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmar(this)">Eliminar</button>
                </form>
            </div>

            <script>
                function confirmar(button) {
                    Swal.fire({
                        title: "¿Estás seguro?",
                        text: "¡No podrás revertir esto!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Sí, eliminarlo",
                        cancelButtonText: "Cancelar"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            button.closest('form').submit();
                        }
                    });
                }
            </script>

        </div>
        @endforeach
    </div>

@endsection
