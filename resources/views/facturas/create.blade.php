@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-group">
        <div class="toggle-button" onclick="toggleSection('receptorSection')">
            Receptor +
        </div>
        <div id="receptorSection" class="toggle-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="razon_social">Razón Social</label>
                            <input type="text" class="form-control" id="razon_social" name="razon_social" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="nombre_comercial">Nombre Comercial</label>
                            <input type="text" class="form-control" id="nombre_comercial" name="nombre_comercial" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="rfc">RFC</label>
                            <input type="text" class="form-control" id="rfc" name="rfc" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="calle">Calle</label>
                            <input type="text" class="form-control" id="calle" name="calle" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="numero_exterior">Número Exterior</label>
                            <input type="text" class="form-control" id="numero_exterior" name="numero_exterior" value="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="numero_interior">Número Interior</label>
                            <input type="text" class="form-control" id="numero_interior" name="numero_interior" value="">
                        </div>
                        <div class="form-group">
                            <label for="codigo_postal">Código Postal</label>
                            <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="correo_electronico">Correo Electrónico</label>
                            <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" value="" required>
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
                                <option value="">Seleccione un municipio</option>
                                @foreach($municipios as $municipio)
                                    <option value="{{ $municipio->municipio }}">{{ $municipio->municipio }}</option>
                                @endforeach
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
                    </div>
                </div>
        </div>
    </div>
   
        <div class="container">
            <div class="form-group">
                <h3>Conceptos</h3>
                <table class="table" id="concepts-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Clave Producto</th>
                            <th>Clave Unidad</th>
                            <th>Descripción</th>
                            <th>Cantidad</th>
                            <th>Valor Unitario</th>
                            <th>Monto Descuento</th>
                            <th>IVA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="servicio" placeholder="Escriba el servicio que desee">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">                             
                                    <input type="text" class="form-control" id="unidad" placeholder="Escriba el servicio que desee">                               
                                </div>
                            </td>
                            <td><input type="text" class="form-control" id="descripcion"></td>
                            <td><input type="number" class="form-control" id="cantidad"></td>
                            <td><input type="number" class="form-control" id="valorUnitario"></td>
                            <td><input type="number" class="form-control" id="montoDescuento"></td>
                            <td><input type="text" class="form-control" id="iva"></td>
                        </tr>
                    </tbody>
                </table>
                <button class="btn btn-primary" onclick="agregarConcepto(),limpiarCampos()">Agregar Concepto</button>
                
            </div>
            <div class="form-group">
                <h3>Resumen</h3>
                <p>Subtotal: $<span id="subtotal">0.00</span></p>
                <p>Descuento: $<span id="descuentoTotal">0.00</span></p>
                <p>IVA: $<span id="ivaTotal">0.00</span></p>
                <p>Total: $<span id="total">0.00</span></p>
            </div>
        </div>
        

        <div class="form-group">
            <label for="observaciones">Observaciones</label>
            <textarea class="form-control" id="observaciones"></textarea>
        </div>

        <div class="form-group">
            <label for="metodoPago">Método de pago</label>
            <select class="form-control" id="metodoPago">
                <option>PUE - Pago en una sola exhibición</option>
                <option>PPD - Pago en parcialidades o diferido</option>
              
            </select>
        </div>
        <div class="form-group">
            <label for="formaPago">Forma de pago</label>
            <select class="form-control" id="formaPago">
                <option>01 - Efectivo</option>
                <option>02 - Cheque nominativo</option>
                <option>03 - Transferencia electrónica de fondos</option>
                <option>04 - Tarjeta de crédito</option>
                <option>05 - Monedero electrónico</option>
                <option>06 - Dinero electrónico</option>
                <option>07 - Vales de despensa</option>
                <option>08 - Dación en pago</option>
                <option>09 - Pago por subrogación</option>
                <option>10 - Pago por consignación</option>
            </select>
        </div>
        <div class="form-group">
            <label for="usoCfdi">Uso del CFDI</label>
            <select class="form-control" id="usoCfdi">
                <option>G01 - Adquisición de mercancías</option>
                <option>G02 - Devoluciones, descuentos o bonificaciones.</option>
                <option>G03 - Gastos en general.</option>
                <option>I01 - Construcciones</option>
                <option>I02 - Mobiliario y equipo de oficina por inversiones</option>
                <option>I03 - Equipo de transporte</option>
                <option>I04 - Equipo de computo y accesorios</option>
                <option>I05 - Dados, troqueles, moldes, matrices y herramental</option>
                <option>I06 - Comunicaciones telefónicas</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tipoComprobante">Tipo de comprobante</label>
            <select class="form-control" id="tipoComprobante">
                <option>I - Ingreso</option>
                <option>E - Egreso</option>
                <option>T - Traslado</option>
                <option>N - Nómina</option>
                <option>P - Pago</option>
            </select>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha" value="{{ old('fecha', date('Y-m-d')) }}">
        </div>
       
        <div class="form-group">
            <label for="folio">Folio</label>
            <input type="text" class="form-control" id="folio" value="1020">
        </div>
        <div class="form-group">
            <label for="serie">Serie</label>
            <input type="text" class="form-control" id="serie">
        </div>
        
        <div class="form-group text-right">
            <button type="button" class="btn btn-info" onclick="openPDF()">Generar factura</button>
            <button type="button" class="btn btn-danger">Regresar</button>
        </div>
    
</div>

<script>
    function openPDF() {
        window.open('{{ route("open.pdf") }}', '_blank');
    }
    function toggleSection(sectionId) {
        var section = document.getElementById(sectionId);
        if (section.style.display === 'none' || section.style.display === '') {
            section.style.display = 'block';
        } else {
            section.style.display = 'none';
        }
    }
</script>
<script>
    let contador = 0;
    
    function agregarConcepto() {
        contador++;
        const claveProducto = document.getElementById('servicio').value || 'N/A';
        const claveUnidad = document.getElementById('unidad').value || 'N/A';
        const descripcion = document.getElementById('descripcion').value || 'N/A';
        const cantidad = parseFloat(document.getElementById('cantidad').value) || 0;
        const valorUnitario = parseFloat(document.getElementById('valorUnitario').value) || 0;
        const montoDescuento = parseFloat(document.getElementById('montoDescuento').value) || 0;
        const ivaPorcentaje = parseFloat(document.getElementById('iva').value.replace('T: ', '').replace('%', '')) / 100 || 0;
    
        const valorTotal = cantidad * valorUnitario;
        const descuentoTotal = montoDescuento;
        const subtotal = valorTotal - descuentoTotal;
        const ivaTotal = subtotal * ivaPorcentaje;
        const total = subtotal + ivaTotal;
    
        const newRow = `
            <tr>
                <td>${contador}</td>
                <td>${claveProducto}</td>
                <td>${claveUnidad}</td>
                <td>${descripcion}</td>
                <td>${cantidad.toFixed(2)}</td>
                <td>${valorUnitario.toFixed(2)}</td>
                <td>${descuentoTotal.toFixed(2)}</td>
                <td>${(ivaPorcentaje * 100).toFixed(2)}%</td>
                <td><button type="button" class="btn btn-danger btn-sm" onclick="eliminarConcepto(this)">Eliminar</button></td>
            </tr>
        `;
    
        document.querySelector('#concepts-table tbody').insertAdjacentHTML('beforeend', newRow);
    
        actualizarResumen(subtotal, ivaTotal, total, descuentoTotal);
    }
    
    function actualizarResumen(subtotal, ivaTotal, total, descuentoTotal) {
        const subtotalElem = document.getElementById('subtotal');
        const ivaTotalElem = document.getElementById('ivaTotal');
        const totalElem = document.getElementById('total');
        const descuentoTotalElem = document.getElementById('descuentoTotal');
    
        subtotalElem.textContent = (parseFloat(subtotalElem.textContent) || 0 + subtotal).toFixed(2);
        ivaTotalElem.textContent = (parseFloat(ivaTotalElem.textContent) || 0 + ivaTotal).toFixed(2);
        totalElem.textContent = (parseFloat(totalElem.textContent) || 0 + total).toFixed(2);
        descuentoTotalElem.textContent = (parseFloat(descuentoTotalElem.textContent) || 0 + descuentoTotal).toFixed(2);
    }
    
    function eliminarConcepto(button) {
        const row = button.parentNode.parentNode;
        const cells = row.getElementsByTagName('td');
        
        const cantidad = parseFloat(cells[4].textContent) || 0;
        const valorUnitario = parseFloat(cells[5].textContent) || 0;
        const descuentoTotal = parseFloat(cells[6].textContent) || 0;
        const ivaPorcentaje = parseFloat(cells[7].textContent.replace('%', '')) / 100 || 0;
        
        const subtotal = (cantidad * valorUnitario) - descuentoTotal;
        const ivaTotal = subtotal * ivaPorcentaje;
        const total = subtotal + ivaTotal;
    
        actualizarResumen(-subtotal, -ivaTotal, -total, -descuentoTotal);
        row.parentNode.removeChild(row);
    }
   
    
function limpiarCampos() {
    document.getElementById('claveProducto').value = '';
    document.getElementById('claveUnidad').value = '';
    document.getElementById('descripcion').value = '';
    document.getElementById('cantidad').value = '';
    document.getElementById('valorUnitario').value = '';
    document.getElementById('montoDescuento').value = '';
    document.getElementById('iva').value = '';
}

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
     });|
</script>

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

