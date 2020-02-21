@extends('formato')

    @section('Arr')
      <div class=""style=" ;border-radius: 10px; color: white;padding: 10px; background-color:rgba(20, 20, 20, 0.9); margin: 2.5% ">

    <ul style="color: red" class="errors">
      @foreach ($errors->all() as $error)
        <li>
          {{$error}}
        </li>
      @endforeach
    </ul>
    <form class="" action="/agregarCategoria" method="post">
      {{csrf_field()}}
<p>Introduzca nombre_categoria:</p>
      <input type="text" name="nombre_categoria" value="{{old('nombre_categoria')}}">

      <input type="submit" name="" value="Grabar Categoria"></p>
    </form>
  </div>
@endsection
