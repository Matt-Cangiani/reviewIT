@extends('formato')


    @section('Arr')
    <div class="" style="">

    @foreach ($categories as $categoria)
<form class="" action="/borrarCategoria" method="post">
  {{csrf_field()}}
 <input type="hidden" name="id" value="{{$categoria->id}}">
   {{$categoria->nombre_categoria}} - {{$categoria->id}} <input type="submit" name="" value="borrar">
   </form>
    @endforeach
    </div>
    <a class="btn btn-primary" href="{{ url('/agregarCategoria')}}" role="button">Nueva Categoria</a>
@endsection
