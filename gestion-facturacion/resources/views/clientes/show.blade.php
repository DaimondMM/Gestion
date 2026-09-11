@extends('layouts.app')

@section('title', 'Detalle Cliente')

@section('content')
<h1>{{ $cliente->razon_social }}</h1>

<div class="card">
    <div class="card-body">
        <p><strong>RUT:</strong> {{ $cliente->rut }}</p>
        <p><strong>Contacto:</strong> {{ $cliente->nombre_contacto }}</p>
        <p><strong>Email:</strong> {{ $cliente->email }}</p>
        <p><strong>Teléfono:</strong> {{ $cliente->telefono }}</p>
        <p><strong>Dirección:</strong> {{ $cliente->direccion }}</p>
    </div>
</div>

<a href="{{ route('clientes.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection
