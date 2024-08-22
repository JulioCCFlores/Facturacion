<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Impuesto;
use App\Models\timpuesto;
use App\Models\ImpuestoFactor;
use App\Models\ImpuestoTipo;

class ImpuestoController extends Controller
{
    public function index()
    {
        $impuestos = Impuesto::all();
        return view('impuestos.index', compact('impuestos'));
    }

    public function create()
    {
        $factores = ImpuestoFactor::all();
        $tipos = ImpuestoTipo::all();
        $timpuestos = timpuesto::all();
        return view('impuestos.create', compact('factores', 'tipos', 'timpuestos'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'Impuesto' => 'required',
            'Tipo' => 'required',
            'Factor' => 'required',
            'Tasa' => 'required|max:103',
            
        ]);

        Impuesto::create($request->all());

        return redirect()->route('impuestos.index')->with('success', 'impuesto creado exitosamente.');
    }
    
    // public function edit($id)
    // {
    //     $impuesto = Impuesto::findOrFail($id);
    //     $factores = ImpuestoFactor::all();
    //     $tipos = ImpuestoTipo::all();
    //     $timpuestos = timpuesto::all();
    //     return view('impuestos.edit', compact('factores', 'tipos', 'timpuestos', 'impuesto'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'nombre' => 'required|max:255',
    //         'Impuesto' => 'required',
    //         'Tipo' => 'required',
    //         'Factor' => 'required',
    //         'Tasa' => 'required|max:103',
            
    //     ]);

    //     $impuesto = Impuesto::findOrFail($id);
    //     $impuesto->update($request->all());

    //     return redirect()->route('impuestos.index')->with('success', 'impuesto actualizado exitosamente.');
    // }
    
    // public function destroy($id)
    // {
    //     $impuestos = Impuesto::findOrFail($id);
    //     $impuestos->delete();
    //     return redirect()->route('impuestos.index')->with('success', 'impuesto eliminado exitosamente.');
    // }
}
