@extends('layouts.app')

@section('title', 'Nuevo Cliente')

@section('content')
<h1>Nuevo Cliente</h1>

<form action="{{ route('clientes.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">RUT</label>
        <input type="text" name="rut" class="form-control" value="{{ old('rut') }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Razón Social</label>
        <input type="text" name="razon_social" class="form-control" value="{{ old('razon_social') }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Nombre Contacto</label>
        <input type="text" name="nombre_contacto" class="form-control" value="{{ old('nombre_contacto') }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Teléfono</label>
        <input type="text" name="telefono" class="form-control" value="{{ old('telefono') }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Dirección</label>
        <input type="text" name="direccion" class="form-control" value="{{ old('direccion') }}">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
