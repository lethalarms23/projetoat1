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

Route::get('/', 'App\Http\Controllers\PortalController@marcaArray')->name('view.index');

Route::get('/noticias', function () {
    return view('noticias');
})->name('noticias.index');

Route::get('/empresa', function () {
    return view('empresa');
})->name('empresa.index');

Route::get('/onde-estamos', function () {
    return view('onde-estamos');
})->name('onde-estamos.index');

Route::get('/contactos', function () {
    return view('contactos');
})->name('contactos.index');

Route::post('/formulario', 'App\Http\Controllers\PortalController@processaForm')->name('processar.form');

Route::get('/mostrasites', 'App\Http\Controllers\PortalController@mostraSite')->name('sites.index');