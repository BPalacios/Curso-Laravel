<?php

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

/*Route::get('/', function () {  rutear un closure, funcion dentro de otra funcion
    return view('welcome');
});*/

//Route::get('permiso', 'PermisosController@create'); Rutear un controlador
//Route::view('permiso', 'permiso'); //pasar una vista
//Route::get('permiso/{nombre}/{sluug?}', 'PermisosController@index');  //enrutar con parametros y un parametro opcional
//Route::get('admin/sistema/permisos', 'PermisosController@index')->name('permiso'); //ruta con noombre

Route::get('permiso/{nombre}', function ($nombre) {   //parametoo validado
    return $nombre; 
})->where('nombre', '[A-Za-z]+')->name('permiso');