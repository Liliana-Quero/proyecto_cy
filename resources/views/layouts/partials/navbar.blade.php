<nav class="navbar navbar-expand-lg bg-green"  style="background-color:#7ebf7a; font-size: 21px;" >

  <div class="container-fluid"  >
    <a class="navbar-brand" href="#">
      <img src="{!! asset('images/LogoCY-PNG.png') !!}" alt="Logo" width="190" height="70" class="d-inline-block align-text-top">
    </a>

    <div class="navbar-brand mb-0 h1" style="color:#144212;font-size: 27px;">  &nbsp COOPERATIVA YOLOMECATL</div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div  class="collapse navbar-collapse" id="navbarSupportedContent" style="color:#144212;">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="color:#144212;">

            </ul>

                <ul class="nav navbar-nav navbar-right" style="color:#144212;">
                    @auth
                    <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle" href="#" style="color:#144212;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{!! asset('images/usuario.png') !!}" alt="usuario" width="38" height="38" style="opacity:65%">

                Usuario: {{auth()->user()->name ?? auth()->user()->username}}
                </a>
                <ul class="dropdown-menu" style="font-size: 21px;" >
                <a class="dropdown-item" href="/perfil" >
                <img src="{!! asset('images/usuario.png') !!}" alt="usuario" width="38" height="38" style="opacity:95%">
                    &nbsp MI PERFIL </a>                <div class="dropdown-divider" ></div>

                <a class="dropdown-item" href="/logout">
                    <img src="{!! asset('images/boton-salir.png') !!}" alt="usuario" width="38" height="34" style="opacity:85%">
                    &nbsp  CERRAR SESIÓN </a></li>
          </ul>
            </li>
            @endauth

            <li class="nav-item">
                <a class="nav-link disabled"></a>
            </li>
      </ul>
      </form>
    </div>
</nav>
  </div>


</nav>
