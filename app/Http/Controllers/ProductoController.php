<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Storage;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $productos = Producto::all();
        return view("productos.index", compact("productos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("productos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $nuevoProducto = new Producto();

        $request->validate([
            'nombre' => "required",
            "precio" => "required",
            "stock" => "required",
            "descripcion" => "required",
            "imagen" => "required",
            ['image']
        ]);

        if ($request->hasFile('imagen')) {
            $image = Storage::disk('public')->put('imagen', $request->file('imagen'));
        }

        $nuevoProducto->nombre = $request->nombre;
        $nuevoProducto->precio = $request->precio;
        $nuevoProducto->stock = $request->stock;
        $nuevoProducto->descripcion = $request->descripcion;
        $nuevoProducto->imagen = $image;

        $nuevoProducto->save();

        return redirect()->route("productos.index")->with("success", "Producto creado exitosamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $producto = Producto::findOrFail($id);
        return view("productos.show", compact("producto"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $producto = Producto::findOrFail($id);
        return view("productos.edit", compact("producto"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
        $nuevoProducto = $producto;

        $request->validate([
            'nombre' => "required",
            "precio" => "required",
            "stock" => "required",
            "descripcion" => "required",
            "imagen" => "required",
            ["image"],
        ]);

        if ($request->hasFile('imagen')) {
            $image = Storage::disk('public')->put('imagen', $producto->file('imagen'));
        }

        $nuevoProducto->nombre = $request->nombre;
        $nuevoProducto->precio = $request->precio;
        $nuevoProducto->stock = $request->stock;
        $nuevoProducto->descripcion = $request->descripcion;
        $nuevoProducto->imagen = $image;

        $nuevoProducto->update();

        return redirect()->route("productos.index")->with("success", "Producto actualizado exitosamente");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $producto = Producto::findOrFail($id);

        // dd($producto);
        Storage::disk('public')->delete(paths: $producto->imagen);
        $producto->delete();

        return redirect()->route("productos.index")->with("success", "Producto eliminado exitosamente");
    }
}
