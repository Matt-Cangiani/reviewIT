<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>ReviewIT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body style="background-image:url(https://static.vecteezy.com/system/resources/previews/000/154/792/non_2x/vector-green-numbers-background-in-matrix-style.jpg)">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
          </div>
           <a class="btn btn-primary" href="{{ url('/listadocategorias')}}" role="button">Editar Categorias</a>
           <a class="btn btn-primary" href="{{ url('/agregarArticulo')}}" role="button">Nuevo Articulo</a>
           <a class="btn btn-primary" href="{{ url('/about')}}" role="button">Historia de la pagina</a>
            <div class="" style="">
            @foreach ($articulos as $articulo)
                <div class="" style="">
              <a style="background-color: grey; color: white" href="{{ url('/articulo/'.$articulo->id) }}" class="list-group-item list-group-item-action">{{$articulo["created_at"]}} -{{$articulo->categoria->nombre_categoria}}- <p style="font-weight: bold">Descripcion:</p>{{$articulo->descripcion}} <a class="btn btn-primary" href="{{ url('/articuloEditar/'.$articulo->id) }}" role="button">Editar
              </a>
            </a>
            </div>
            @endforeach
          </div>


        </div>
        <br>
        <br>
        <div class="" style="text-align: center">
        {{ $articulos->links() }}
      </div>
    </body>
</html>
