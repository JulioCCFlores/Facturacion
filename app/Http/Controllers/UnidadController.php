<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClaveUnidad;

class UnidadController extends Controller
{
    public function unidad(Request $request){

        $term= $request->get('term');

        $querys = ClaveUnidad::where(function ($query) use ($term) {
            $query->where('texto', 'LIKE', '%' . $term . '%')
                  ->orWhere('id', 'LIKE', '%' . $term . '%'); // Filtra por el id también
        })->get();
       

        $data = [];
        foreach($querys as $query){
            $data[] = [
                'label' => $query->id . ' - ' . $query->texto, // Esto mostrará el id y el texto juntos en la sugerencia
                'value' => $query->id, // Esto configurará el valor del campo de entrada con el id
            ];
        }
        return $data;
    }
}
