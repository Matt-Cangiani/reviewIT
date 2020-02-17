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
    $categoriesNuevo = new Categories();

    $categoriesNuevo->nombre_categoria= $req['nombre_categoria'];

    $categoriesNuevo->save();
    return redirect('/listadocategorias');}
}
