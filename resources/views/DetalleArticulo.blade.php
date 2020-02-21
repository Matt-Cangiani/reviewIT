@extends('formato')

    @section('Arr')


<div class=""style=" ;border-radius: 10px; padding: 10px; background-color: rgba(20, 20, 20, 0.7);margin-top: 1%;margin-left: 2.5%; margin-right: 20%;height: 60%">
<p style="color: white; font-size: 50px; font-style:normal; font-weight: bold"> {{$articulo->descripcion}}</p>
<img src="/storage/{{$articulo->fotoarticulo}}" alt="" width:"200px" height="200px">
<p style="color: white">Articulo:  {{$articulo->article}} </p>
</div>


<br>
@if(auth::id() == $articulo->usuario_id || auth::id()==7)
  <form class="" action="/borrarArticulo" method="post" >
  {{csrf_field()}}
        <input type="hidden" name="id" value="{{$articulo->id}}">
  <input type="submit" name="" value="borrar Articulo">
      </form>
      <br>
      <a class="btn btn-primary" href="{{ url('/articuloEditar/'.$articulo->id)}}" role="button">Editar Articulo</a>

@endif
@endsection
