@extends('formato')


    @section('Arr')
    <ul style="color: red" class="errors">
      @foreach ($errors->all() as $error)
        <li>
          {{$error}}
        </li>
      @endforeach
    </ul>
    <div class=""style=" ;border-radius: 10px; color: white;padding: 10px; background-color:rgba(20, 20, 20, 0.9); margin: 2.5% ">
    <form class="" action="/GrabarArticulo" method="post"enctype="multipart/form-data">
      {{csrf_field()}}
<p>Introduzca descripcion:</p>
<input type="hidden" name="id" value="{{$articulo->id}}">

      <textarea name="descripcion" rows="1" cols="80">{{$articulo->descripcion}}</textarea>
      <p>Introduzca Categoria:</p>
      <select class="" name="categoria_id">
        @php
          $categorias= DB::select('select * from Categories');
          @endphp
          @foreach ($categorias as $categoria)
          <option value="{{$categoria->id}}">{{$categoria->nombre_categoria}}</option>
          @endforeach
      </select>
<p>Contenido del articulo:</p>
    <p><textarea name="Article" rows="25" cols="80">{{$articulo->article}}</textarea></p>
<p><input type="file" name="fotoarticulo" value="agregar Foto">

  <img src="/storage/{{$articulo->fotoarticulo}}" alt="100px" width="100px">

      <input type="submit" name="" value="Grabar Articulo"></p>
    </form>
  </div>
  </body>
@endsection
