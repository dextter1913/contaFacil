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
    return view('auth.login');
});


/**
 * VIEWS DEL CONTROLADOR serviciosPublicosController
 * Route::get('/serviciosPublicos', [serviciosPublicos::class, 'index']);
 */

// Route::get('/serviciosPublicos', function () {
//     return view('serviciosPublicos.create');
// });

// Route::get('/serviciosPublicos/create', [ServiciosPublicosController::class, 'create']);

/**
 * OBLIGANDO A QUE TODO ESTE AUTENTICADO EN EL CONTROLADOR ServiciosPublicosController
 */
Route::resource('/serviciosPublicos', ServiciosPublicosController::class)->middleware('auth');


/**
 * VIEWS DEL CONTROLADOR AuthController
 */
Auth::routes();

/**
 * VIEWS QUE REDIRECCIONA HOME A EL CONTROLADOR SERVICIOSPUBLICOSCONTROLLER
 */
Route::get('/home', [ServiciosPublicosController::class, 'index'])->name('home');

/**
 * VIEWS DEL CONTROLADOR ServiciosPublicosController
 */
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [ServiciosPublicosController::class, 'index'])->name('home');
});
