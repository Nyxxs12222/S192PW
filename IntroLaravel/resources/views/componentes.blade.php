@extends('layouts.plantilla1')

@section('titulo','Componentes')

@section('contenido')

    <x-Card encabezado="Componente" titulo="Dinamico" textoBoton="Enviar">  Soy el texto del primer componente </x-Card>
    <x-Card encabezado="Componente2" titulo="Dinamico2" textoBoton="Enviar">  Soy el texto del segundo componente </x-Card>

    <x-Alert tipo="success" >Soy un alert</x-Alert>
    <x-Alert tipo="primary" >Soy Azul</x-Alert>
    <x-Alert tipo="dark" >Soy <b>negro</b></x-Alert>
@endsection