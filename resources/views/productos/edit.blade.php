@extends('layouts.app')
@section('titulo', 'Editar Producto')

@section('contenido')
<div class="flex justify-center">
<div class="flex flex-col w-64 m-8 shadow-lg p-4">
    <form action="{{route('productos.update', $producto->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre</label>
        <input type="text" class="input input-bordered input-primary w-full max-w-xs" name="nombre" id="nombre" value="{{$producto->nombre}}">
        <br>
        <label for="precio">Precio</label>
        <input type="text" class="input input-bordered input-primary w-full max-w-xs" name="precio" id="precio" value="{{$producto->precio}}">
        <br>
        <button class="btn btn-primary my-4" type="submit">Actualizar</button>
        <a class="btn btn-outline btn-primary my-4" href="{{route('productos.index')}}">Cancelar</a>
    </form>
</div>
</div>
@endsection