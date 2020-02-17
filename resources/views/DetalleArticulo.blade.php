<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ReviewIT</title>
  </head>
  <body>
    <form class="" action="/borrarArticulo" method="post">
{{csrf_field()}}
      <input type="hidden" name="id" value="{{$articulo->id}}">
<input type="submit" name="" value="borrar Articulo">
    </form>

{{$articulo->descripcion}}
{{$articulo->article}}
  </body>
</html>
