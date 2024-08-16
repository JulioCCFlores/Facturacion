@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('miempresa.update', $miempresa->id) }}" method="POST" id="miempresaForm" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <h3>General</h3>
                <div class="form-group">
                    <label for="razon_social">Razon social</label>
                    <input type="text" class="form-control" id="razon_social" name="razon_social" value="{{ $miempresa->razon_social }}" disabled>
                </div>
                <div class="form-group">
                    <label for="regimen_fiscal_id">Regimen Fiscal</label>
                    <select class="form-control" id="regimen_fiscal_id" name="regimen_fiscal_id" disabled>
                        @foreach($regimenesFiscales as $regimenFiscal)
                            <option value="{{ $regimenFiscal->id }}" @if($miempresa->regimen_fiscal_id == $regimenFiscal->id) selected @endif>{{ $regimenFiscal->descripcion }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="rfc">RFC</label>
                    <input type="text" class="form-control" id="rfc" name="rfc" value="{{ $miempresa->rfc }}" disabled>
                </div>
            </div>
            <div class="col-md-6">
                <h3>Logotipo para la factura</h3>
                {{-- <div class="form-group">
                    <label for="logotipo">Logotipo</label>
                    <input type="file" class="form-control" id="logotipo" name="logotipo" disabled>
                    <img src="{{ asset('imagenes/' . $miempresa->logotipo) }}" alt="{{ $miempresa->logotipo }}" height="100px" width="100px" class="img-thumbnail">
                </div> --}}

                <div class="form-group">
                    <label for="logotipo">Imagen</label>
                    <input type="file" class="form-control" id="logotipo" name="logotipo" disabled>
                    @if (!empty($miempresa->logotipo))
                        <img src="{{ asset('imagenes/' . $miempresa->logotipo) }}" alt="Logotipo" height="100px" width="100px" class="img-thumbnail">
                    @endif
                </div>

                <div class="form-group">
                    <label for="archivo_cer">Archivo CER</label>
                    <input type="file" class="form-control" id="archivo_cer" name="archivo_cer" disabled>
                </div>
                <div class="form-group">
                    <label for="archivo_key">Archivo KEY</label>
                    <input type="file" class="form-control" id="archivo_key" name="archivo_key" disabled>
                </div> 
            </div>
        </div>
        <h3>Domicilio</h3>
        <div class="form-group">
            <label for="calle">Calle</label>
            <textarea class="form-control" id="calle" name="calle" disabled>{{ $miempresa->calle }}</textarea>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="municipio">Municipio</label>
                <select class="form-control" id="municipio" name="municipio" disabled>
                    <option value="">Seleccione un municipio</option>
                    @foreach($municipios as $municipio)
                        <option value="{{ $municipio->municipio }}" @if($miempresa->municipio == $municipio->municipio) selected @endif>{{ $municipio->municipio }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="estado">Estado</label>
                <select class="form-control" id="estado" name="estado" disabled onchange="cargarMunicipios(this)">
                    <option value="">Seleccione un estado</option>
                    @foreach($estados as $estado)
                        <option value="{{ $estado->estado }}" @if($miempresa->estado == $estado->estado) selected @endif>{{ $estado->estado }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="codigo_postal">Código Postal</label>
                <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" value="{{ $miempresa->codigo_postal }}" disabled>
            </div>
        </div>
        <div id="buttons" class="form-group">
            <button type="button" class="btn btn-primary" id="editButton" onclick="enableEditing()">Editar</button>
            <button type="submit" class="btn btn-success" id="saveButton" style="display:none;">Guardar</button>
            <button type="button" class="btn btn-secondary" id="cancelButton" style="display:none;" onclick="disableEditing()">Cancelar</button>
        </div>
    </form>
</div>
<script>
    function enableEditing() {
        var form = document.getElementById('miempresaForm');
        var elements = form.elements;

        for (var i = 0; i < elements.length; i++) {
            if (elements[i].type !== 'button' && elements[i].type !== 'submit') {
                elements[i].disabled = false;
            }
        }

        document.getElementById('editButton').style.display = 'none';
        document.getElementById('saveButton').style.display = 'inline';
        document.getElementById('cancelButton').style.display = 'inline';
    }

    function disableEditing() {
        var form = document.getElementById('miempresaForm');
        var elements = form.elements;

        for (var i = 0; i < elements.length; i++) {
            if (elements[i].type !== 'button' && elements[i].type !== 'submit') {
                elements[i].disabled = true;
            }
        }

        document.getElementById('editButton').style.display = 'inline';
        document.getElementById('saveButton').style.display = 'none';
        document.getElementById('cancelButton').style.display = 'none';
    }

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

    // Inicialmente deshabilitar todos los campos del formulario
    disableEditing();
</script>
@endsection
