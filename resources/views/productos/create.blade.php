@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Crear Nuevo Producto</h1>
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
       {{-- <div class="form-group">
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
      ------------------------------------------------------------------------------------------- --}}
      <div class="form-group">
        <label for="clave_producto_servicio">servicio</label>
        <input type="text" class="form-control" id="servicio" placeholder="Escriba el servicio que desee">
        <input type="hidden" id="servicio_id" name="clave_producto_servicio">
    </div>


   <div class="form-group">
        <label for="descripcion">descripcion</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" required>
    </div>

    <div class="form-group">
        <label for="clave_unidad">clave unidad</label>
        <input type="text" class="form-control" id="unidad" placeholder="Escriba el servicio que desee">
        <input type="hidden" id="unidad_id" name="clave_unidad">
    </div>
    
    {{-- <div class="form-group">
        <label for="clave_unidad">Clave de unidad</label>
        <select class="form-control" id="clave_unidad" name="clave_unidad" required>
            <option value="">Seleccione un Clave del producto</option>
            @foreach($ClaveUnidades as $ClaveUnidad)
                <option value="{{ $ClaveUnidad->id }}">{{ $ClaveUnidad->id }}-{{ $ClaveUnidad->texto }}</option>
            @endforeach
        </select>
    </div> --}}

    <div class="form-group">
        <label for="precio">precio</label>
        <input type="number" class="form-control" id="precio" name="precio" required>
    </div>

    <div class="form-group">
        <label for="unidad">unidad</label>
        <input type="number" class="form-control" id="unidad" name="unidad" required>
    </div>
        

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    </div>
    <script>
        $(document).ready(function() {
            $('#servicio').autocomplete({
                source: function(request, response) {
                    $.ajax({
                        url: "{{ route('productos.servicio') }}",
                        dataType: 'json',
                        data: {
                            term: request.term
                        },
                        success: function(data) {
                            response(data);
                        }
                    });
                },
                select: function(event, ui) {
                    $('#servicio').val(ui.item.label); // Muestra el texto completo en el campo de texto
                    $('#servicio_id').val(ui.item.value); // Guarda solo el id en el campo oculto
    
                    return false; // Previene que jQuery UI autocomplete cambie el valor del input
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#unidad').autocomplete({
                source: function(request, response) {
                    $.ajax({
                        url: "{{ route('productos.unidad') }}",
                        dataType: 'json',
                        data: {
                            term: request.term
                        },
                        success: function(data) {
                            response(data);
                        }
                    });
                },
                select: function(event, ui) {
                    $('#unidad').val(ui.item.label); // Muestra el texto completo en el campo de texto
                    $('#unidad_id').val(ui.item.value); // Guarda solo el id en el campo oculto
    
                    return false; // Previene que jQuery UI autocomplete cambie el valor del input
                }
            });
        });
    </script>
    
@endsection