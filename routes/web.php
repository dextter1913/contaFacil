<?php

use App\Models\serviciosPublicos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosPublicosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * ACCEDIENDO A LA VIEW POR DEFECTO DE LARAVEL
 */
Route::get('/', function () {
    return view('welcome');
});


/**
 * VIEWS DEL CONTROLADOR serviciosPublicosController
 * Route::get('/serviciosPublicos', [serviciosPublicos::class, 'index']);
 */

// Route::get('/serviciosPublicos', function () {
//     return view('serviciosPublicos.create');
// });

// Route::get('/serviciosPublicos/create', [ServiciosPublicosController::class, 'create']);
Route::resource('/serviciosPublicos', ServiciosPublicosController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
