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
Route::get('/articuloEditar/{id}', "ArticulosController@Editar");
Route::post("/GrabarArticulo","ArticulosController@Grabar");

Route::get('/', "ArticulosController@listado");

Route::get('/articulo/{id}', "ArticulosController@Detalle");

Route::get('/agregarArticulo', function (){
  return view('agregarArticulo');});

Route::post("/agregarArticulo","ArticulosController@Agregar");

Route::post("/borrarArticulo","ArticulosController@borrar");

Route::get('/agregarCategoria', function (){
  return view('agregarCategoria');});

Route::post("/agregarCategoria","CategoriesController@Agregar");


Route::get('/listadocategorias', "CategoriesController@listado");
Route::post("/borrarCategoria","CategoriesController@borrar");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function () {
    return view('paginadeabout');});
