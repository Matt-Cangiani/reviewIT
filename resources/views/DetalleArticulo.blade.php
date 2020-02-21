@extends('formato')

    @section('Arr')

<img src="/storage/{{$articulo->fotoarticulo}}" alt="">
<div class=""style=" ;border-radius: 10px; padding: 10px; background-color: grey;margin-top: 1%;margin-left: 2.5%; margin-right: 30%;height: 60%">

<p >Articulo:  {{$articulo->article}} </p>

</div>
<br>
@if(auth::id() == $articulo->usuario_id)
  <form class="" action="/borrarArticulo" method="post">
  {{csrf_field()}}
        <input type="hidden" name="id" value="{{$articulo->id}}">
  <input type="submit" name="" value="borrar Articulo">
      </form>
      <br>
      <a class="btn btn-primary" href="{{ url('/articuloEditar/'.$articulo->id)}}" role="button">Editar Articulo</a>

@endif
@endsection
