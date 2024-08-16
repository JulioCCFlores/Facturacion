@extends('layouts.app')

@section('content')

    <div>
        <h1>Lista de Clientes</h1> <a href="{{ route('clientes.create') }}" class="btn btn-primary">Agregar Clientes</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Razón Social</th>
                    <th>Nombre Comercial</th>
                    <th>RFC</th>
                    <th>Calle</th>
                    <th>Número Exterior</th>
                    <th>Número Interior</th>
                    <th>Código Postal</th>
                    <th>Correo Electrónico</th>
                    <th>Estado</th>
                    <th>Municipio</th>
                    <th>Régimen Fiscal</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($empresas as $empresa)
                    <tr>
                      
                        <td>{{ $empresa->razon_social }}</td>
                        <td>{{ $empresa->nombre_comercial }}</td>
                        <td>{{ $empresa->rfc }}</td>
                        <td>{{ $empresa->calle }}</td>
                        <td>{{ $empresa->numero_exterior }}</td>
                        <td>{{ $empresa->numero_interior }}</td>
                        <td>{{ $empresa->codigo_postal }}</td>
                        <td>{{ $empresa->correo_electronico }}</td>
                        <td>{{ $empresa->estado }}</td> 
                        <td>{{ $empresa->municipio }}</td>
                        <td>{{ $empresa->regimenfiscal->descripcion }}</td>
                        
                        <td>
                            <a href="{{ route('clientes.edit', $empresa->id) }}" class="btn btn-warning">Editar</a>
                            <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $empresa->id }})">Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

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
                    ¿Estás seguro de que deseas eliminar este cliente?
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
            form.action = '/clientes/' + id;
            
            // Mostrar el modal
            $('#deleteModal').modal('show');
        }
    </script>
@endsection
