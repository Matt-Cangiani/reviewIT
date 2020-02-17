<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background-color: grey">

    <form class="" action="/agregarArticulo" method="post">
      {{csrf_field()}}
<p>Introduzca descripcion:</p>
      <input type="text" name="descripcion" value="">
      <p>Introduzca Categoria:</p><input type="text" name="categoria_id" value="">
<p>Contenido del articulo:</p>
    <p><textarea name="Article" rows="25" cols="80"></textarea></p>
<p>
      <input type="submit" name="" value="Grabar Articulo"></p>
    </form>
  </body>
</html>
