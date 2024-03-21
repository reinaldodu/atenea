<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome')->name('index');

//Rutas para un CRUD de productos
// Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
// Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
// Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');
// Route::get('/productos/{producto}', [ProductoController::class, 'show'])->name('productos.show');
// Route::get('/productos/{producto}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
// Route::put('/productos/{producto}', [ProductoController::class, 'update'])->name('productos.update');
// Route::delete('/productos/{producto}', [ProductoController::class, 'destroy'])->name('productos.destroy');

Route::resource('productos', ProductoController::class);

// Asociar productos con usuarios
Route::get('/usuarios/{usuario}/productos', [ProductoController::class, 'listarUsuarioProductos'])->name('usuarioProductos');
Route::post('/usuarios/{usuario}/productos', [ProductoController::class, 'asignarProductosUsuario'])->name('asignarProductosUsuario');

//Rutas para un CRUD de usuarios sin update
Route::resource('usuarios', UserController::class)->except(['destroy']);

//Rutas de login y logout
Route::view('/login', 'usuarios.login')->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');