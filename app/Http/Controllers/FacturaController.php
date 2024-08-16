<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cfdi400Estado;
use App\Models\Cfdi400Municipio;
use App\Models\ClaveProducto;
use App\Models\RegimenFiscal;
use App\Models\Facturacion;


class FacturaController extends Controller
{
    public function create()
    {
        
        $ClaveProductos = ClaveProducto::all();
        $regimenesFiscales = RegimenFiscal::all();
        $estados = Cfdi400Estado::all();
        $municipios = Cfdi400Municipio::where('estado')->get();

        return view('facturas.create',compact('ClaveProductos','regimenesFiscales','estados', 'municipios'));
    }
    public function index()
    {
        $Facturacion = Facturacion::with('miempresa','producto','empresa','impuesto')->get();
        return view('facturas.index',compact('Facturacion'));
    }
}
