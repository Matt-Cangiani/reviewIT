<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ReviewIT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body style="background-color: yellow">
<a class="btn btn-primary" href="{{ url('/')}}" role="button">Ya no estoy inspirado</a>
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
      <p>Introduzca Categoria:<input type="text" name="categoria_id" value="{{old('categoria_id')}}"></p>
<p>Contenido del articulo:</p>
    <p><textarea name="Article" rows="20" cols="80"></textarea></p>
<p>
<label for="">Foto</label>
<input type="file" name="fotoarticulo" value="agregar Foto">
      <input type="submit" name="" value="Grabar Articulo"></p>
    </form>

  </body>
</html>
