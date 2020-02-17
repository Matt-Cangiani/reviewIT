<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ReviewIT</title>
  </head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <body>
    <div class="" style="">
    @foreach ($categories as $categoria)

      <a href="" class="list-group-item list-group-item-action"> {{$categoria->nombre_categoria}} - {{$categoria->id}}</a>

    @endforeach
    </div>
    <a class="btn btn-primary" href="{{ url('/agregarCategoria')}}" role="button">Nueva Categoria</a>
  </body>
</html>
