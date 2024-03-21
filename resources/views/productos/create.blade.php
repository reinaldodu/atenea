@extends('layouts.app')
@section('titulo', 'Crear Producto')

@section('contenido')
@if (auth()->user()->rol->nombre == 'admin' || auth()->user()->rol->nombre == 'inspector')
    <form action="{{route('productos.store')}}" method="POST">
        @csrf
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}">
            @if ($errors->has('nombre'))
                <div class="badge badge-warning">
                    {{$errors->first('nombre')}}
                </div>
            @endif
        </div>
        
        <br>
        <label for="precio">Precio</label>
        <input type="text" name="precio" id="precio" value="{{ old('precio') }}">
        <br>
        @if ($errors->has('precio'))
            <div class="badge badge-warning">
                {{$errors->first('precio')}}
            </div>
        @endif
        <br>
        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
@else
    <h1>No tienes permisos para crear productos</h1>
@endif
@endsection