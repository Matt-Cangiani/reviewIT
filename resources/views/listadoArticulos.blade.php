<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body>
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

            <div class="" style="">
            @foreach ($articulos as $articulo)

              <a href="{{ url('/articulo/'.$articulo->id) }}" class="list-group-item list-group-item-action">{{$articulo["created_at"]}} - {{$articulo->descripcion}} - {{$articulo->id}}</a>

            @endforeach
          </div>
            <a class="btn btn-primary" href="{{ url('/agregarArticulo')}}" role="button">Nuevo Articulo</a>
            <a class="btn btn-primary" href="{{ url('/agregarCategoria')}}" role="button">Nueva Categoria</a>
        </div>
        {{ $articulos->links() }}
    </body>
</html>
