@extends('layouts.app')

@section('content')
<h3>Registrar Servicio</h3>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('servicios.store') }}">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Descripción</label>
        <textarea name="descripcion" class="form-control">{{ old('descripcion') }}</textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Precio</label>
        <input type="number" step="0.01" name="precio" class="form-control" value="{{ old('precio') }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Duración estimada (minutos)</label>
        <input type="number" name="duracion_estimada" class="form-control" value="{{ old('duracion_estimada') }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Estado</label>
        <select name="estado" class="form-control" required>
            <option value="pendiente">Pendiente</option>
            <option value="en proceso">En proceso</option>
            <option value="finalizado">Finalizado</option>
        </select>
    </div>
    <button class="btn btn-primary">Guardar</button>
    <a href="{{ route('servicios.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection