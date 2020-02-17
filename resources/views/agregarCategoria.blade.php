<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background-color: grey">

    <form class="" action="/agregarCategoria" method="post">
      {{csrf_field()}}
<p>Introduzca nombre_categoria:</p>
      <input type="text" name="nombre_categoria" value="">

      <input type="submit" name="" value="Grabar Categoria"></p>
    </form>
  </body>
</html>
