@extends('layouts.app')

@section('content')
    
        <h1>Lista de Productos</h1> <a href="{{route('productos.create')}}" class="btn btn-primary">Agregar Producto</a>

        
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Clave de producto</th>
                  <th>Descripcion</th>
                  <th>Clave de unidad</th>
                  <th>Precio</th>
                  <th>Unidad</th>
                </tr>
              </thead>
              <tbody>
              @foreach($productos as $producto)
                  <tr>
                    <td>{{ $producto->clave_producto_servicio}}-{{ $producto->ClaveProducto->texto}}</td>
                    <td>{{ $producto->descripcion}}</td>
                    <td>{{ $producto->clave_unidad}}-{{ $producto->ClaveUnidad->texto}}</td>
                    <td>{{ $producto->precio}}</td>
                    <td>{{ $producto->unidad}}</td>
                    <td style="width:300px;">
                     <a href="{{ route('productos.edit', $impuesto->id) }}" class="btn btn-warning">Editar</a>
                      <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $producto->id }})">Eliminar</button>
                    </td>
                  </tr>
               @endforeach
              </tbody>
            </table>
        


    <!-- Modal de confirmación -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirmar Eliminación</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Estás seguro de que deseas eliminar este producto?
                </div>
                <div class="modal-footer">
                    <form id="deleteForm" action="" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <script>
        function confirmDelete(id) {
            // Configurar la acción del formulario para el cliente a eliminar
            let form = document.getElementById('deleteForm');
            form.action = '/impuesto/' + id;
            
            // Mostrar el modal
            $('#deleteModal').modal('show');
        }
    </script>
  
@endsection
