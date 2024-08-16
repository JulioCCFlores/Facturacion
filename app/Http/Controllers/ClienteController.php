<?php

namespace App\Http\Controllers;

use App\Models\Cfdi400Estado;
use App\Models\Cfdi400Municipio;
use App\Models\Empresa;
use App\Models\RegimenFiscal;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        
        $empresas = Empresa::with('regimenFiscal')->get();
        return view('clientes.index', compact('empresas'));
    }

    public function create()
    {
        $estados = Cfdi400Estado::all();
        $municipios = Cfdi400Municipio::all();
        $regimenesFiscales = RegimenFiscal::all();
        return view('clientes.create', compact('estados', 'municipios', 'regimenesFiscales'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'razon_social' => 'required|string|max:255',
            'nombre_comercial' => 'required|string|max:255',
            'rfc' => 'required|string|max:13',
            'calle' => 'required|string|max:255',
            'numero_exterior' => 'required|string|max:10',
            'numero_interior' => 'nullable|string|max:10',
            'codigo_postal' => 'required|string|max:5',
            'correo_electronico' => 'required|email|max:255',
            'estado' => 'required|string',
            'municipio' => 'required|string',
            'regimen_fiscal_id' => 'required|string',
        ]);

        Empresa::create($request->all());

        return redirect()->route('clientes.index')->with('success', 'Cliente creado exitosamente.');
    }
    public function edit($id)
    {
        $cliente = Empresa::findOrFail($id);
        $estados = Cfdi400Estado::all();
        $municipios = Cfdi400Municipio::where('estado', $cliente->estado)->get();
        $regimenesFiscales = RegimenFiscal::all();
        return view('clientes.edit', compact('cliente', 'estados', 'municipios', 'regimenesFiscales'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'razon_social' => 'required',
            'nombre_comercial' => 'required',
            'rfc' => 'required',
            'calle' => 'required',
            'numero_exterior' => 'required',
            'codigo_postal' => 'required',
            'correo_electronico' => 'required|email',
            'estado' => 'required',
            'municipio' => 'required',
            'regimen_fiscal_id' => 'required',
        ]);

        $cliente = Empresa::findOrFail($id);
        $cliente->update($request->all());

        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado exitosamente.');
    }
    public function destroy($id)
    {
        $cliente = Empresa::findOrFail($id);
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado exitosamente.');
    }

    public function getMunicipios($estado)
    {
        $municipios = Cfdi400Municipio::where('estado', $estado)->get();
        return response()->json($municipios);
    }
}
