<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;
class CategoriesController extends Controller
{
  public function listado(){

    $categories = Categories::all();
     $share= compact("categories");
    return  view("listadocategorias", $share);}

  public function Agregar(Request $req){

    $reglas = [
      "nombre_categoria" => "string|min:1|unique:categories,nombre_categoria"
    ];
    $mensajes = [
      "unique" => "Ya existe la categoria",
      "min" => "El campo esta vacio",
      "string" => "debe ingresar un texto"

    ];

    $this->validate($req, $reglas, $mensajes);
    $categoriesNuevo = new Categories();

    $categoriesNuevo->nombre_categoria= $req['nombre_categoria'];

    $categoriesNuevo->save();
    return redirect('/listadocategorias');}


    public function borrar(request $req){
      $id= $req["id"];
      $categoria= Categories::find($id);
      $categoria->delete();
      return redirect('/listadocategorias');}

      public function devolver(){

        $categories = Categories::all();
         $share= compact("categories");
         return $share;
       }


}
