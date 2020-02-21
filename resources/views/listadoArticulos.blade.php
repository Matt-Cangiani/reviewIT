
        <!-- Styles -->
@extends('formato')

    @section('Arr')
    <body>
      @if(auth::id())
        <a class="btn btn-primary" href="{{ url('/agregarArticulo')}}" role="button">Nuevo Articulo</a>
      @endif
            <div class="" style="">
            @foreach ($articulos as $articulo)
                <div class="" style="">
              <a style="background-color:rgba(20, 20, 20, 0.5); color: white;border-color: white; border-width: 1px; font-family: Helvetica; font-size: 12;font-weight: 400;" href="{{ url('/articulo/'.$articulo->id) }}" class="list-group-item list-group-item-action">{{$articulo["created_at"]}} -{{$articulo->categoria->nombre_categoria}}- <p style="font-weight: bold">Descripcion:</p>{{$articulo->descripcion}}
            </a>
            </div>
            @endforeach
          </div>


        </div>
    <br>


        <div class="" style="">
             {{ $articulos ?? ''->links() }}
        </div>


@endsection
