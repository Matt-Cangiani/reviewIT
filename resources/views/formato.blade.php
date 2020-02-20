<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ReviewIT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  </head>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  " style="background-color:">
      <a class="navbar-brand" href="#">ReviewIT</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Listado Principal <span class="sr-only">(current)</span></a>
          </li>
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



          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias
          </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">



      </div>
    </li>
  </ul>
  <span class="navbar-text" style=" ">
      <p style="">  {{ Auth::user()->name }}</p>
    </span>
</div>
</nav>
  </header>
  <body style="background-color: grey">
@yield('Arr')
  </body>
  <!-- Footer -->
<footer class="page-footer font-small blue pt-4 fixed: bottom" style="background-color: #212529; color: white">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Footer Content</h5>
        <p>Here you can use rows and columns to organize your footer content.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <div class="pagination text-center" style="margin-left:38%">

        {{ $articulos->links() }}
        </div>




        </ul>

      </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <a class="btn btn-primary" href="{{ url('/about')}}" role="button">Historia de la pagina</a>

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> ReviewIT.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</html>
