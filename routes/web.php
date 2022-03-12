<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('muebleria.user.index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('muebleria.user.index');
})->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin_home');

Route::resource('/productos', 'App\Http\Controllers\ProductosController');
Route::resource('/ubicacion', 'App\Http\Controllers\MapasController');
Route::resource('admin/categorias', 'App\Http\Controllers\CategoriaController');
Route::resource('admin/sucursal', 'App\Http\Controllers\SucursalController');

Route::get('producto/calientes', 'App\Http\Controllers\ProductosController@calientes');
Route::get('/imagenes/{filename}',array(
    'as' => 'imageVideo',
    'uses' => 'App\Http\Controllers\MapasController@getImage'
));

Route::get('mapa/info', 'App\Http\Controllers\MapasController@getDataMap');