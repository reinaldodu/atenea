<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all(); //SELECT * FROM productos
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dump y die
        //dd($request->all());
        //Guardar todos campos $request->all()
        Producto::create($request->all()); //INSERT INTO productos (nombre, precio) VALUES (?, ?)
        return to_route('productos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Producto::find($id); //SELECT * FROM productos WHERE id = ?
        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Producto::find($id); //SELECT * FROM productos WHERE id = ?
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Producto::find($id)->update($request->all()); //UPDATE productos SET nombre = ?, precio = ? WHERE id = ?
        //Actualizar solo nombre y precio
        //Producto::find($id)->update($request->only('nombre', 'precio'));
        return to_route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Producto::destroy($id); //DELETE FROM productos WHERE id = ?
        return to_route('productos.index');
    }
}
