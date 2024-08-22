@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Nuevo Cliente</h1>
        
        <form action="{{ route('impuestos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            
            <div class="form-group">
                <label for="Impuesto">Impuesto</label>
                <select class="form-control" id="Impuesto" name="Impuesto" required>
                    <option value="">Seleccione un Impuesto</option>
                    @foreach($timpuestos as $timpuesto)
                        <option value="{{ $timpuesto->nombre }}">{{ $timpuesto->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="Tipo">Tipo</label>
                <select class="form-control" id="Tipo" name="Tipo" required>
                    <option value="">Seleccione un Tipo</option>
                    @foreach($tipos as $tipo)
                        <option value="{{ $tipo->nombre }}">{{ $tipo->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="Factor">factores</label>
                <select class="form-control" id="factores" name="Factor" required>
                    <option value="">Seleccione un factor</option>
                    @foreach($factores as $factor)
                        <option value="{{ $factor->nombre }}">{{ $factor->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="Tasa">Tasa</label>
                <input type="double" class="form-control" id="Tasa" name="Tasa" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

@endsection