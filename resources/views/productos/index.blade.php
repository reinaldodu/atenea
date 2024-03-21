@extends('layouts.app')
@section('titulo', 'Listar Productos')

@section('contenido')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 m-8">
    @foreach ($productos as $producto)
        <div class="card w-64 bg-base-100 shadow-xl">
            <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
            <div class="card-body">
            <h2 class="card-title text-sm text-blue-400 md:text-md md:text-blue-600 lg:text-lg lg:text-blue-900">{{$producto->nombre}}</h2>
            <p>{{$producto->precio}}</p>
            <div class="card-actions justify-end">
                <a class="btn btn-outline btn-primary" href="{{route('productos.edit', $producto->id)}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15px" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                    </svg>
                </a>
                <form action="{{route('productos.destroy', $producto->id )}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15px" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                          </svg>
                    </button>
                </form>

            </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection