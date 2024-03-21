<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo', 'Atenea')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        {{-- navbar --}}
        @include('partials.navbar')
        @if (Auth::check())
            <div class ="flex justify-end">
                {{auth()->user()->name}}
                - [Rol: {{auth()->user()->rol->nombre}}]
                <form action="{{route('logout')}}", method="POST">
                    @csrf
                    <button type="submit" class="btn btn-xs btn-primary mx-2">Logout</button>
                </form>
            </div>
        @else
            <div class= "flex justify-end">
                <a href="{{route('login')}}" class="btn btn-xs btn-primary">Login</a>
            </div>
            
        @endif
    </header>
    <main>
        {{-- contenido --}}
        @yield('contenido')
    </main>
    <footer class="footer items-center p-4 bg-neutral text-neutral-content">
        @include('partials.footer')
    </footer>
</body>
</html>