<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">NotiCiudad </a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('users.index') }}">Usuarios <span class="sr-only"></span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('categorias.index') }}">Categorias <span class="sr-only"></span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('articulos.index') }}">Articulos <span class="sr-only"></span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">Imagenes <span class="sr-only"></span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">Tags <span class="sr-only"></span></a>
      </li>

      <!--<li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>-->
      <!-- Authentication Links -->
    
      
    

    </ul>
    <div class="form-inline my-2 my-lg-0">
      <li><a href="">Login</a></li>
      <li><a href=" {{ route('users.create') }}">Register</a></li>
    </div>
  </div>
</nav>