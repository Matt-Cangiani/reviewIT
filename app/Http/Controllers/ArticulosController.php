<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articulos;
class ArticulosController extends Controller
{
    public function listado(){
      //$articulos = articulos::paginate(9)->sortBy("created_at",0,true);
      $articulos = articulos::select('articulos.*')
    ->join('categories', 'categories.id', '=', 'articulos.categoria_id')
    ->orderBy('articulos.created_at', 'desc')
    ->paginate(10);
       $share= compact("articulos");
      return  view("listadoArticulos", $share);}

    public function detalle($id){
      $articulo= articulos::find($id);
      $share= compact("articulo");
      return view("DetalleArticulo", $share);}

    public function Agregar(Request $req){
      $articuloNuevo = new articulos();

      $articuloNuevo->descripcion = $req['descripcion'];
      $articuloNuevo->categoria_id =$req['categoria_id'];
      $articuloNuevo->article = $req['Article'];
      $articuloNuevo->usuario_id = 1;
      $articuloNuevo->created_at =date('Y-m-d H:i:s') ;
      $articuloNuevo->save();
      return redirect('/');}

      public function borrar(request $req){
        $id= $req["id"];
        $articulo= articulos::find($id);
        $articulo->delete();
        return redirect('/');}


}
