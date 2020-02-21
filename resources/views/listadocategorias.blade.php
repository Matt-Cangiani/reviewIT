@extends('formato')


    @section('Arr')
      <div class=""style=" ;border-radius: 10px; color: white;padding: 10px; background-color:rgba(20, 20, 20, 0.9); margin: 2.5% ">


    @foreach ($categories as $categoria)
<form class="" action="/borrarCategoria" method="post">
  {{csrf_field()}}
 <input type="hidden" name="id" value="{{$categoria->id}}">
   {{$categoria->nombre_categoria}} - {{$categoria->id}}<input type="submit" name="" value="borrar">
   </form>
    @endforeach

    <a class="btn btn-primary" href="{{ url('/agregarCategoria')}}" role="button">Nueva Categoria</a>
      </div>
@endsection
