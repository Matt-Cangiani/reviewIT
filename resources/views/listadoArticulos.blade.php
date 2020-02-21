
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


         <a class="btn btn-primary" href="{{ url('/listadocategorias')}}" role="button">Editar Categorias</a>
         <a class="btn btn-primary" href="{{ url('/agregarArticulo')}}" role="button">Nuevo Articulo</a>
           {{ $articulos->links() }}

@endsection
