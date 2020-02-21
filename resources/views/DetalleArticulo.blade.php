@extends('formato')

    @section('Arr')
    <form class="" action="/borrarArticulo" method="post">
{{csrf_field()}}
      <input type="hidden" name="id" value="{{$articulo->id}}">
<input type="submit" name="" value="borrar Articulo">
    </form>

</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body style="">
<article class="" style="width:100%; height: 700px; overflow: hidden;">
  <div class="imagen" style="background-color: white; width:42%; height: 100%; border:black 1px  solid; float: left; margin-left: 15%; margin-top: 20px;border-top-left-radius: 10px;border-bottom-left-radius: 10px; padding: 10px" >
  <div class="img-magnifier-container">
  <p style=" width: 100%; height: 100%; box-sizing: border-box; border-radius: 10px;">Articulo:
  {{$articulo->article}} </p>
</div>
  </div>
  <div class="producto" style="background-color:grey; width:28%; height: 800px; border-bottom:black 1px solid; border-right:black 1px solid; border-top:black 1px solid; margin-top: 20px; float: left; padding: 10px; border-top-right-radius: 10px;border-bottom-right-radius: 10px;">
  <p style="font-weight: bold; font-size: 30; text-align: center"></p>
<br>
<br>
<p style="font-size: 20; font-weight: bold; text-align: center;"> </p>
<br>
<p id="whatHappened"></p>
<p style="text-align: center; font-weight: bold"><img src="/storage/{{$articulo->fotoarticulo}}" alt=""></p>
<div class="">


</div>
<br>
<br>

  <div class="descripcion" style="background-color: white; width:100%; height: 100%; border-bottom: :black 2px  solid; float: left; margin-left:; margin-top:; border-radius: ; border: black 1px solid; padding: 10px; float: left">
    <p style="font-size: 20; font-style: normal; font-weight: bold"><p></p>Descripcion:
      {{$articulo->descripcion}}</p></p>

  </div>
</article>
@endsection
