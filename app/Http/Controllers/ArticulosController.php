<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articulos;

class ArticulosController extends Controller
{




    public function listado(){
      $articulos = articulos::orderBy("created_at","DESC")->paginate(4);
       $share= compact("articulos");
      return  view("listadoArticulos", $share);}

      public function ChooseCategory($cat){
        $articulos = articulos::where('categoria_id',"=",$cat)
->paginate(4);

         $share= compact("articulos");
        return  view("listadoArticulos", $share);}

    public function detalle($id){
      $articulo= articulos::find($id);
      $share= compact("articulo");
      return view("DetalleArticulo", $share);}

    public function Agregar(Request $req){
      $reglas = [
        "Article" => "string|min:1",
        "descripcion" => "string|min:1",
        "fotoarticulo"=>"file"
      ];
      $mensajes = [
        "min" => "El campo :attribute esta vacio",
        "string" => "debe ingresar un texto"


      ];

      $this->validate($req, $reglas, $mensajes);

      $articuloNuevo = new articulos();
      $ruta =  $req->file("fotoarticulo")->store("public");
      $nombreArchivo = basename ($ruta);
      $articuloNuevo->fotoarticulo = $nombreArchivo;
      $articuloNuevo->descripcion = $req['descripcion'];
      $articuloNuevo->categoria_id =$req['categoria_id'];
      $articuloNuevo->article = $req['Article'];
      $articuloNuevo->usuario_id = Auth()->user()->id;
      $articuloNuevo->created_at =date('Y-m-d H:i:s') ;
      $articuloNuevo->save();
      return redirect('/');}

      public function borrar(request $req){
        $id= $req["id"];
        $articulo= articulos::find($id);
        $articulo->delete();
        return redirect('/');}

        public function Editar($id){
          $articulo= articulos::find($id);
          $share= compact("articulo");
          return view("articuloEditar", $share);}

          public function Grabar(Request $req){
            $reglas = [
              "Article" => "string|min:1",
              "descripcion" => "string|min:1"
            ];
            $mensajes = [
              "min" => "El campo :attribute esta vacio",
              "string" => "debe ingresar un texto"

            ];

            $this->validate($req, $reglas, $mensajes);


              $id= $req["id"];
            $articulo = articulos::find($id);

            $ruta =  $req->file("fotoarticulo")->store("public");
            $nombreArchivo = basename ($ruta);
            $articulo->fotoarticulo = $nombreArchivo;
            $articulo->descripcion = $req['descripcion'];
            $articulo->categoria_id =$req['categoria_id'];
            $articulo->article = $req['Article'];
            $articulo->usuario_id = $req['usuario_id'];
            $articulo->created_at =date('Y-m-d H:i:s') ;
            $articulo->save();
            return redirect('/');}


            public function misArticulos($usuario_vigente){
          if (auth()->user()->id == $usuario_vigente){
              $articulos = articulos::where('usuario_id',"=",$usuario_vigente)
              ->orderBy("created_at", 'DESC')
          ->paginate(4);
               $share= compact("articulos");
              return  view("listadoArticulos", $share);}
              else{return view('home');
              }

          }
        }
