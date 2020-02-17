<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ReviewIT</title>
  </head>
  <body style="background-color: white">
    <ul style="color: red" class="errors">
      @foreach ($errors->all() as $error)
        <li>
          {{$error}}
        </li>
      @endforeach
    </ul>
    <form class="" action="/agregarCategoria" method="post">
      {{csrf_field()}}
<p>Introduzca nombre_categoria:</p>
      <input type="text" name="nombre_categoria" value="{{old('nombre_categoria')}}">

      <input type="submit" name="" value="Grabar Categoria"></p>
    </form>
  </body>
</html>
