<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;

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

Route::view('/', 'welcome');

//Rutas para un CRUD de productos
// Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
// Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
// Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');
// Route::get('/productos/{producto}', [ProductoController::class, 'show'])->name('productos.show');
// Route::get('/productos/{producto}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
// Route::put('/productos/{producto}', [ProductoController::class, 'update'])->name('productos.update');
// Route::delete('/productos/{producto}', [ProductoController::class, 'destroy'])->name('productos.destroy');

Route::resource('productos', ProductoController::class);

