@extends('formato')

    @section('Arr')
      <div class=""style=" ;border-radius: 10px; color: white;padding:3% ; background-color:rgba(20, 20, 20, 0.9); margin: 2.5%; margin-right: 45%">

<a class="btn btn-primary" href="{{ url('/')}}" role="button">Volver Al listado</a>
    <ul style="color: red" class="errors">
      @foreach ($errors->all() as $error)
        <li>
          {{$error}}
        </li>
      @endforeach
    </ul>
    <form class="" action="/agregarArticulo" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
<p>Introduzca descripcion:
      <input type="text" name="descripcion" value="{{old('descripcion')}}"></p>
      <p>Introduzca Categoria:

      <select class="" name="categoria_id">
        @php
          $categorias= DB::select('select * from Categories');
          @endphp
          @foreach ($categorias as $categoria)
          <option value="{{$categoria->id}}">{{$categoria->nombre_categoria}}</option>
          @endforeach
      </select></p>
<p>Contenido del articulo:</p>
    <p><textarea name="Article" rows="20" cols="80"></textarea></p>
<p>
<label for="">Foto</label>
<input type="file" name="fotoarticulo" value="agregar Foto">
      <input type="submit" name="" value="Grabar Articulo"></p>
    </form>
</div>
@endsection
