@extends ('layouts.navbar')

@section('titulo','Formulario')
@section('content')

    <div class="container">
    <h1 class="display-1 text-prmiary text-center">Gestión de Contactos </h1>
    <form>
        <div  class="mb-3" >
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" >
        </div>
        <div  class="mb-3" >
            <label for="correo" class="form-label" >Correo:</label>
            <input type="mail" class="form-control" name="Correo" >
        </div>
        <div class="mb-3" >
            <label for="telefono" class="form-label" >Telefono:</label>
            <input type="text" class="form-control" name="telefono" >
        </div>
        <button type="submit" class="btn btn-danger">Agregar Contacto</button>
    </form>
    
@endsection