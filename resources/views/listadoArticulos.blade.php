
        <!-- Styles -->
@extends('formato')

    @section('Arr')
    <body>

            <div class="" style="">
            @foreach ($articulos as $articulo)
                <div class="" style="">
              <a style="background-color: grey; color: white" href="{{ url('/articulo/'.$articulo->id) }}" class="list-group-item list-group-item-action">{{$articulo["created_at"]}} -{{$articulo->categoria->nombre_categoria}}- <p style="font-weight: bold">Descripcion:</p>{{$articulo->descripcion}}
            </a>
            </div>
            @endforeach
          </div>


        </div>
        <br>
        <br>

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

@endsection
