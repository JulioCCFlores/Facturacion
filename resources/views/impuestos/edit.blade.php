@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Impuestos</h1>
        <form action="{{ route('impuestos.update', $impuesto->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre">nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $impuesto->nombre }}"required>
            </div>
            
            <div class="form-group">
                <label for="Impuesto">Impuesto</label>
                <select class="form-control" id="Impuesto" name="Impuesto" required>
                    <option value="">Seleccione un Impuesto</option>


                     @foreach($timpuestos as $timpuesto)
                        <option value="{{ $timpuesto->nombre }}" @if($impuesto->Impuesto == $timpuesto->nombre) selected @endif>{{ $timpuesto->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="Tipo">Tipo</label>
                <select class="form-control" id="Tipo" name="Tipo" required>
                    <option value="">Seleccione un Tipo</option>

                        @foreach($tipos as $tipo)
                        <option value="{{ $tipo->nombre }}" @if($impuesto->Tipo == $tipo->nombre) selected @endif>{{ $tipo->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="Factor">factores</label>
                <select class="form-control" id="factores" name="Factor" required>
                    <option value="">Seleccione un factor</option>
                    @foreach($factores as $factor)
                        <option value="{{ $factor->nombre }}" @if($impuesto->Factor == $factor->nombre) selected @endif>{{ $factor->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="Tasa">Tasa</label>
                <input type="double" class="form-control" id="Tasa" name="Tasa" value="{{ $impuesto->Tasa }}" required>
            </div>
           
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a href="{{ route('impuestos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

@endsection
