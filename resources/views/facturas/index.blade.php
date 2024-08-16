@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Facturas</h1>

    <a href="{{-- route('quickbooks.connect') --}}" class="btn btn-success my-3">
        Sincronizar facturas desde QBO
    </a>
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Folio</th>
                <th>Fecha</th>
                <th>Receptor</th>
                <th>Monto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Facturacion as $factura) 
                <tr>
                    <td>{{ $factura->id }}</td>
                    <td>{{ $factura->folio }}</td>
                    <td>{{ $factura->fecha }}</td>
                    <td>{{ $factura->empresa->nombre_comercial }}</td>
                    <td>{{ $factura->total }}</td>
                    <td>
                        <a href="{{ route('facturas.create') }}" class="btn btn-primary">facturar</a>
                    </td>
                </tr>
             @endforeach 
        </tbody>
    </table>
    
    {{-- {{ $facturas->links() }} --}}
</div>
@endsection
