@extends('layouts.app')
@section('titulo', 'Crear Producto')

@section('contenido')
    
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
@endsection