<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('public/home');
});

Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('private.home');
    })->name('dashboard');


    /*
    |--------------------------------------------------------------------------
    | PERFIL
    |--------------------------------------------------------------------------
    */
    Route::get('/perfil', function () {
        return view('private.perfil');
    })->name('perfil');


    /*
    |--------------------------------------------------------------------------
    | PRODUCTOS
    |--------------------------------------------------------------------------
    */
    Route::prefix('productos')->group(function () {
        
        //Vista
        Route::get('/productos', function () {
            return view('private.productos.index');
        })->name('productos.index');
        
        /*    
            // Ver lista
            Route::get('/', function () {
                return view('private.productos.index');
            })->name('productos.');

            // Crear producto (form)
            Route::get('/crear', function () {
                return view('private.productos.create');
            })->name('productos.create');

            // Guardar producto (POST)
            Route::post('/', function () {
                // lógica aquí
            })->name('productos.store');
        */
            
    });


    /*
    |--------------------------------------------------------------------------
    | CONFIGURACIÓN
    |--------------------------------------------------------------------------
    */
    //Route::get('/configuracion', function () {
    //    return view('private.configuracion');
    //})->name('configuracion');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
