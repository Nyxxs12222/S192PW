@extends('layouts.plantilla1')

        @section('titulo', 'Repaso1')
        
        @section('contenido')

        <div class="container mt-5">
                <h1>Convertidor de unidades</h1>
                <form method="POST" action="{{ route('convert') }}">
                @csrf
                        <div class="form-group">
                                <label for="value">Cantidad</label>
                                <input type="number" class="form-control" id="value" name="value" required>
                        </div>
                        <div class="form-group">
                                <label for="unit">Convertir</label>
                                <select class="form-control" id="unit" name="unit">
                                        <option value="MBtoGB">MB a GB</option>
                                        <option value="GBtoMB">GB a MB</option>
                                        <option value="GBtoTB">GB a TB</option>
                                        <option value="TBtoGB">TB a GB</option>
                                </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Convertir</button>
                </form>

                @if(isset($result))

                <div class="mt-3">
                        <h2>Resultado:</h2>
                        <p>{{ $result }}</p>
                </div>

        @endif
        </div>


        @endsection