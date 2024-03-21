@extends('layouts.app')
@section('titulo', 'Asociar Usuario a Producto')

@section('contenido')
    <select name="select_user" id="select_user" class="form-control" onchange="window.location.href = '/usuarios/'+this.value+'/productos'">
        <option value="">Seleccione un usuario</option>
        @foreach ($usuarios as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select>

<form action="{{route('asignarProductosUsuario', $usuario)}}" method="post">
    @csrf
    <table class="table table-zebra w-1/2" >
        <thead>
            <tr>
                <td>Nombre Proyecto</td>
                <td>Codigo proyecto</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
        @foreach ($productos as $producto)
            <tr>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->precio}}</td>
                <td>
                    @if ($usuario->productos->contains($producto))
                        <input class="checkbox checkbox-primary checkbox-sm" type="checkbox" name="productos[]" value="{{$producto->id}}" checked>
                    @else
                        <input class="checkbox checkbox-primary checkbox-sm" type="checkbox" name="productos[]" value="{{$producto->id}}">
                    @endif
                
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button class="btn btn-neutral m-4" type="submit">Asociar</button>
</form>

@endsection