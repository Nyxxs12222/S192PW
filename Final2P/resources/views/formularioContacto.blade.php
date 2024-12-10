@extends ('layouts.plantillaNav')

@section('titulo','Formulario')
@section('content')

    <div class="container">
    <h1 class="display-1 text-prmiary text-center">Gestión de Contactos </h1>

    @session('exito')
        <script>
            Swal.fire({
                title: "¡Buen trabajo!",
                text: "{{ session('exito') }}",
                icon: "success"
            });
        </script>
    @endsession

    <form action="{{ route('sendForm') }}" method="POST">
        @csrf
        <div  class="mb-3" >
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
            <small class="fts-italic text-danger">{{ $errors->first('nombre') }}</small>
        </div>
        <div  class="mb-3" >
            <label for="correo" class="form-label" >Correo:</label>
            <input type="mail" class="form-control" name="Correo" value="{{ old('Correo') }}">
            <small class="fts-italic text-danger">{{ $errors->first('Correo') }}</small>
        </div>
        <div class="mb-3" >
            <label for="telefono" class="form-label" >Telefono:</label>
            <input type="text" class="form-control" name="telefono" value="{{ old('telefono') }}">
            <small class="fts-italic text-danger">{{ $errors->first('telefono') }}</small>
        </div>
        <button type="submit" class="btn btn-danger">Agregar Contacto</button>
    </form>
    
@endsection