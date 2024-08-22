@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Producto</h1>
        <form action="{{ route('productos.update', $producto->id) }}" method="POST">
            @csrf
            @method('PUT')

           <div class="form-group">
        <label for="clave_producto_servicio">servicio</label>
        <input type="text" class="form-control" id="servicio" placeholder="Escriba el servicio que desee"value="{{ $producto->clave_producto_servicio }}-{{ $producto->ClaveProducto->texto}}" required >
        <input type="hidden" id="servicio_id" name="clave_producto_servicio">
    </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $producto->descripcion }}" required>
            </div>

            <div class="form-group">
                <label for="clave_unidad">clave unidad</label>
                <input type="text" class="form-control" id="unidad" placeholder="Escriba el servicio que desee" value="{{ $producto->clave_unidad }}-{{ $producto->ClaveUnidad->texto}}" required>
                <input type="hidden" id="unidad_id" name="clave_unidad">
            </div>

            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" class="form-control" id="precio" name="precio" value="{{ $producto->precio }}" required>
            </div>

            <div class="form-group">
                <label for="unidad">Unidad</label>
                <input type="text" class="form-control" id="unidad" name="unidad" value="{{ $producto->unidad }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
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
