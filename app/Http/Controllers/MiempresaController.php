<?php

namespace App\Http\Controllers;
use App\Models\miempresa;
use App\Models\Cfdi400Estado;
use App\Models\Cfdi400Municipio;
use App\Models\RegimenFiscal;
use Illuminate\Http\Request;


class MiempresaController extends Controller
{
    public function index()
    {
        $id = 1;
        $miempresa = miempresa::findOrFail($id);
        $estados = Cfdi400Estado::all();
        $municipios = Cfdi400Municipio::where('estado', $miempresa->estado)->get();
        $regimenesFiscales = RegimenFiscal::all();
        return view('Miempresa.index', compact('miempresa', 'estados', 'municipios', 'regimenesFiscales'));
        
    }


    public function update(Request $request)
    {
        $id = 1; // ID predeterminado que deseas usar
        $miempresa=miempresa::findOrFail($id);;
        $request->validate([
            'razon_social' => 'required',
            'logotipo'=>'mimes:jpeg,bmp,png',
        ]);

       
        if ($request->hasFile('logotipo')) {
            $file = $request->file('logotipo');
            $filename = time() . '_' . $file->getClientOriginalName(); // Renombrar para evitar conflictos
            $file->move(public_path('imagenes'), $filename); // Mueve el archivo a la carpeta 'public/imagenes'
            
            // Guarda el nombre del archivo en la base de datos
            $miempresa->logotipo = $filename;
        }
    
    
         if ($request->hasFile('archivo_cer')) {
             $data['archivo_cer'] = $request->file('archivo_cer')->store('archivos_cer', 'public');
         }
         if ($request->hasFile('archivo_key')) {
             $data['archivo_key'] = $request->file('archivo_key')->store('archivos_key', 'public');
         }

        
        $miempresa->update($request->except('logotipo'));

        return redirect()->route('Miempresa.index')->with('success', 'miempresa actualizado exitosamente.');
    }
}
