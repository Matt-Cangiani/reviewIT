@extends('formato')


    @section('Arr')
    <ul style="color: red" class="errors">
      @foreach ($errors->all() as $error)
        <li>
          {{$error}}
        </li>
      @endforeach
    </ul>
    <form class="" action="/GrabarArticulo" method="post"enctype="multipart/form-data">
      {{csrf_field()}}
<p>Introduzca descripcion:</p>
<input type="hidden" name="id" value="{{$articulo->id}}">
<input type="hidden" name="usuario_id" value="{{$articulo->usuario_id}}">
      <textarea name="descripcion" rows="1" cols="80">{{$articulo->descripcion}}</textarea>
      <p>Introduzca Categoria:</p><textarea name="categoria_id" rows="1" cols="80">{{$articulo->categoria_id}}</textarea>
<p>Contenido del articulo:</p>
    <p><textarea name="Article" rows="25" cols="80">{{$articulo->article}}</textarea></p>
<p><input type="file" name="fotoarticulo" value="agregar Foto">

  <img src="/storage/{{$articulo->fotoarticulo}}" alt="200px">



  <a class="btn btn-primary" href="{{ url('/agregarFoto')}}" role="button">Nueva Categoria</a>

      <input type="submit" name="" value="Grabar Articulo"></p>
    </form>
  </body>
@endsection
