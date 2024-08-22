@extends('layouts.app')

@section('content')

    
        <h1>Lista de Impuestos</h1> <a href="{{ route('impuestos.create') }}" class="btn btn-primary">Agregar Impuesto</a>

        
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Nombre</th>
                  <th>Impuesto</th>
                  <th>Tipo</th>
                  <th>Factor</th>
                  <th>Tasa</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($impuestos as $impuesto)
                  <tr>
                    <td>{{ $impuesto->id }}</td>
                    <td>{{ $impuesto->nombre }}</td>
                    <td>{{ $impuesto->Impuesto }}</td>
                    <td>{{ $impuesto->Tipo }}</td>
                    <td>{{ $impuesto->Factor }}</td>
                    <td>{{ $impuesto->Tasa }}</td>
                    <td style="width:300px;">
                      <a href="{{ route('impuestos.edit', $impuesto->id) }}" class="btn btn-warning">Editar</a>
                      <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $impuesto->id }})">Eliminar</button>
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
                    ¿Estás seguro de que deseas eliminar este impuesto?
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
