@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Clientes</h1>
    <a href="{{ route('clientes.create') }}" class="btn btn-primary">Nuevo Cliente</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>RUT</th>
            <th>Razón Social</th>
            <th>Contacto</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse($clientes as $cliente)
        <tr>
            <td>{{ $cliente->rut }}</td>
            <td>{{ $cliente->razon_social }}</td>
            <td>{{ $cliente->nombre_contacto }}</td>
            <td>{{ $cliente->email }}</td>
            <td>{{ $cliente->telefono }}</td>
            <td>
                <a href="{{ route('clientes.show', $cliente) }}" class="btn btn-sm btn-info">Ver</a>
                <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-sm btn-warning">Editar</a>
                <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Eliminar?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="6" class="text-center">No hay clientes registrados.</td></tr>
        @endforelse
    </tbody>
</table>

{{ $clientes->links() }}
@endsection
