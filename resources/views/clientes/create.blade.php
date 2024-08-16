@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Nuevo Cliente</h1>
        <form action="{{ route('clientes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="razon_social">Razón Social</label>
                <input type="text" class="form-control" id="razon_social" name="razon_social" required>
            </div>
            <div class="form-group">
                <label for="nombre_comercial">Nombre Comercial</label>
                <input type="text" class="form-control" id="nombre_comercial" name="nombre_comercial" required>
            </div>
            <div class="form-group">
                <label for="rfc">RFC</label>
                <input type="text" class="form-control" id="rfc" name="rfc" required>
            </div>
            <div class="form-group">
                <label for="calle">Calle</label>
                <input type="text" class="form-control" id="calle" name="calle" required>
            </div>
            <div class="form-group">
                <label for="numero_exterior">Número Exterior</label>
                <input type="text" class="form-control" id="numero_exterior" name="numero_exterior" required>
            </div>
            <div class="form-group">
                <label for="numero_interior">Número Interior</label>
                <input type="text" class="form-control" id="numero_interior" name="numero_interior">
            </div>
            <div class="form-group">
                <label for="codigo_postal">Código Postal</label>
                <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" required>
            </div>
            <div class="form-group">
                <label for="correo_electronico">Correo Electrónico</label>
                <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <select class="form-control" id="estado" name="estado" required onchange="cargarMunicipios(this)">
                    <option value="">Seleccione un estado</option>
                    @foreach($estados as $estado)
                        <option value="{{ $estado->estado }}">{{ $estado->estado }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="municipio">Municipio</label>
                <select class="form-control" id="municipio" name="municipio" required>
                    <option value="">Seleccione un estado primero</option>
                </select>
            </div>
            <div class="form-group">
                <label for="regimen_fiscal_id">Régimen Fiscal</label>
                <select class="form-control" id="regimen_fiscal_id" name="regimen_fiscal_id" required>
                    <option value="">Seleccione un régimen fiscal</option>
                    @foreach($regimenesFiscales as $regimenFiscal)
                        <option value="{{ $regimenFiscal->id }}">{{ $regimenFiscal->descripcion }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        function cargarMunicipios(estadoselect) {
            let estadoid = estadoselect.value;

            fetch(`/clientes/getMunicipios/${estadoid}`)
                .then(function(response) {
                    return response.json();
                })
                .then(function(data) {
                    console.log(data); // Muestra los datos en la consola para depuración
                    let municipioSelect = document.getElementById('municipio');
                    municipioSelect.innerHTML = '<option value="">Seleccione un municipio</option>';
                    data.forEach(function(municipio) {
                        let option = document.createElement('option');
                        option.value = municipio.municipio;
                        option.text = municipio.municipio;
                        municipioSelect.appendChild(option);
                    });
                })
                .catch(function(error) {
                    console.error('Error:', error);
                });
        }
    </script>
    
        @endsection