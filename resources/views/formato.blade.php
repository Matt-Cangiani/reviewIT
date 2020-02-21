<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ReviewIT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  </head>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
      <a class="navbar-brand" href="{{ url('/')}}"><img src="http://pixelartmaker.com/art/375fc3f8bf99b8a.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          @if(auth::id())
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/misArticulos/'. auth::id()) }}">Mis articulos <span class="sr-only">(current)</span></a>
            </li>
          @endif
          @if (auth::id()== 7)
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/agregarCategoria')}}">Nueva Categoria <span class="sr-only">(current)</span></a>
            </li>
          @endif
          @if(auth::id())
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/agregarArticulo')}}">Nuevo Articulo <span class="sr-only">(current)</span></a>
            </li>
          @endif
            <a class="nav-link" href="{{ url('/about')}}">Historia de el sitio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias
          </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        @php
          $categorias= DB::select('select * from Categories');
      @endphp
    @foreach ($categorias as $categoria)
 <a class="dropdown-item" href="{{ url('/categoria/'.$categoria->id) }}">{{$categoria->nombre_categoria}}</a>
    @endforeach





      </div>
    </li>
  </ul>

</div>
<div id="app">

        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{Auth::user()->name}}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
  </nav>
  </header>
  <body style="background-image: url(https://cdnb.artstation.com/p/assets/images/images/017/005/185/large/alex-korneev-dsdsfdfgdf.jpg?1554290007)">
@yield('Arr')
  </body>
  <!-- Footer -->
<footer class="page-footer font-small blue pt-4 fixed" style="background-color: #212529; color: white">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">ReviewIT 2009</h5>
        <p>Buy it, use it, reviewIT... </p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <div class="pagination text-center" style="margin-left:38%">


        </div>




        </ul>

      </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->


  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> ReviewIT.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</html>
