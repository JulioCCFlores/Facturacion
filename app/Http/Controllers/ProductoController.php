<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\ClaveProducto;
use App\Models\ClaveUnidad;




class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::with('ClaveUnidad','ClaveProducto')->get();
        return view('productos.index', compact('productos'));

    }
    public function create()
    {
        $ClaveProductos = ClaveProducto::all();
        $ClaveUnidades = ClaveUnidad::all();
        return view('productos.create', compact('ClaveProductos', 'ClaveUnidades'));
    }
    public function store(Request $request)
    {
        $request->validate([
        'clave_producto_servicio' => 'required',
        'descripcion' => 'required|max:255',
        'clave_unidad' => 'required',
        'precio' => 'required',
        'unidad' => 'required',
        ]);

        Producto::create($request->all());

        return redirect()->route('productos.index')->with('success', 'producto creado exitosamente.');
    }
    public function edit($id)
    {
        $producto = Producto::with('ClaveUnidad', 'ClaveProducto')->findOrFail($id);

        $ClaveProductos = ClaveProducto::all();
        $ClaveUnidades = ClaveUnidad::all();
        return view('productos.edit', compact('producto', 'ClaveProductos', 'ClaveUnidades'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'clave_producto_servicio' => 'required',
            'descripcion' => 'required|max:255',
            'clave_unidad' => 'required',
            'precio' => 'required',
            'unidad' => 'required',
        ]);

        $producto = Producto::findOrFail($id);
        $producto->update($request->all());

        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
    }
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Cliente eliminado exitosamente.');
    }
}
