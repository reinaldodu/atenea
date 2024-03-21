@extends('layouts.app')
@section('titulo', 'Login')
@section('contenido')

@if ($errors->has('email'))
    <div class="alert alert-danger">
        {{$errors->first('email')}}
    </div>
@endif

<form action="{{route('login')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="email">Correo</label>
        <input class="input input-bordered" type="email" class="form-control" id="email" name="email" placeholder="Correo">
    </div>
    <div class="form-group">
        <label for="password">Contraseña</label>
        <input class="input input-bordered" type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
    </div>
    <button type="submit" class="btn btn-primary">Ingresar</button>
</form>
@endsection