@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Servicios del Taller</h3>
    <div>
        <a href="{{ route('servicios.create') }}" class="btn btn-success">Nuevo Servicio</a>
        <form action="{{ route('logout') }}" method="POST" class="d-inline">
            @csrf
            <button class="btn btn-outline-danger">Cerrar Sesión ({{ auth()->user()->name }})</button>
        </form>
    </div>
</div>

@if(session('ok'))
    <div class="alert alert-success">{{ session('ok') }}</div>
@endif

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Servicio</th>
            <th>Precio</th>
            <th>Estado</th>
            <th>Registrado por</th>
        </tr>
    </thead>
    <tbody>
        @forelse($servicios as $servicio)
        <tr>
            <td>{{ $servicio->nombre }}</td>
            <td>Bs. {{ number_format($servicio->precio, 2) }}</td>
            <td>{{ $servicio->estado }}</td>
            <td>{{ $servicio->user->name }}</td>
        </tr>
        @empty
        <tr><td colspan="4" class="text-center">No hay servicios registrados aún.</td></tr>
        @endforelse
    </tbody>
</table>
@endsection