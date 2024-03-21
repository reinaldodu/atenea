<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;
use App\Models\User;

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
    public function store(ProductoRequest $request)
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
    public function update(ProductoRequest $request, string $id)
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

    // Listar productos de un usuario
    public function listarUsuarioProductos(User $usuario)
    {
        $usuarios = User::all();
        $productos = Producto::all();
        $productosUsuario = $usuario->productos;
        //dd($productos, $productosUsuario);
        return view('productos.productos_usuarios', compact('productos', 'productosUsuario', 'usuarios', 'usuario'));
    }

    // Guardar los productos de un usuario
    public function asignarProductosUsuario(Request $request, User $usuario)
    {
        //dd($request->productos);
        $usuario->productos()->sync($request->productos);
        return to_route('usuarioProductos', $usuario);
    }
}
