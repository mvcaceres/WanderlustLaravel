@yield('sectionPhp')

<!DOCTYPE html>
<html lang="es" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Wanderlust</title>
    <meta name="description" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:400,700" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@yield('css')
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  </head>

  <body>
    <header>
<!-- barra superior mobile y tablet -->
      <div class="barraSuperior">
            <!-- Redes Sociales -->
        <div class="barraSuperior-izquierda">
            <div class="RRSS">
            <nav class="redesSociales">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter-square"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
            </nav>
            </div>
            <!--Fin redes-sociales-->
        </div>

        <div class="barraSuperior-derecha">
            <!-- inicio/registro -->
            <div class="inicio-registro">
              <nav class="inicioRegistro">

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

                    @if (Route::has('register'))

                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>

                    @endif
                    </li>
                @else
                    <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/miperfil">
                    Hola, {{Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                    </li>
                @endguest

              </nav>
            </div>
            <!-- fin inicio/registro -->

            <!-- carrito: -->
            <div class="carrito">
              <a href="/carrito">
              <i class="fas fa-shopping-cart"></i>
              </a>
            </div>
            <!-- fin Carrito -->
      </div>

      </div>

<!-- fin barra superior mobile y tablet -->

<!-- barra inferior  -->
    <div class="barraInferior" id="main-nav">
        <!-- menu hamburguesa para mobile -->
        <div class="menuHamburguesa">
            <img id= "logoHamburguesa" src="{{ asset('img/menuHamburguesa.png') }}" alt="logoW">
        </div>
        <!-- fin menu hamburguesa para mobile -->

        <!-- logo principal -->
        <div id="divLogo">
          <div id="divLogo2">
            <a id="aLogo" href="/home">
            <img id="imgLogo" src="{{ asset('img/logoWanderlust.png') }}" alt="logoW">
            </a>
          </div>
        </div>


        <!-- fin logo principal -->

        <!-- Opciones para tablet y desktop -->
        <div class="opciones">
            <nav class="navPrincipal">
                <a href="/productos" class="botones">PRODUCTOS</a>
                <a href="/faqs" class="botones">PREGUNTAS FRECUENTES</a>
                <!-- solo desktop: -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

                    @if (Route::has('register'))

                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>

                    @endif
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/miperfil">
                        Hola, {{Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest

                <!-- carrito desktop: -->
                <div class="carritoD">
                <a href="/carrito"><i class="fas fa-shopping-cart">
                </i></a>
                  </div>
                <!-- fin Carrito desktop -->
            </nav>
        </div>




        <!-- fin opciones para tablet y desktop -->
    </div>
<!-- fin barra inferior  -->

    </header>
<!--///Fin contenido-header///-->
<nav class="navegacion-hamburguesa">

        <a href="/productos">Productos</a>
        <a href="/faqs">Preguntas frecuentes</a>
        @guest
        <a href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}">{{ __('Registrarse') }}</a>
        @endif
        @else
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/miperfil">
        Ver mi perfil<span class="caret"></span>
        </a>
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @endguest

    </nav>




@yield('sectionContenido')

<!--///Inicio FOOTER///-->
<footer class="site-footer">
    <div class="contenedor">
          <div class="footer-informacion">
              <h3>Sobre <span>wanderlust</span></h3>
                <p>Creemos que cada viaje nos ofrece nuevas oportunidades de conectarnos con el mundo, con otras personas y con nosotros mismos.</p>
          </div>
          <div class="medios-pago">
              <h3>Medios de <span>Pago</span></h3>
              <ul><!--Medios de pago-->
                <li><i class="fab fa-cc-mastercard"></i> <i class="fab fa-cc-visa"></i> <i class="fab fa-cc-amex"></i> <i class="fab fa-cc-paypal"></i></li>
              </ul>
          </div>
          <div class="menu">
              <h3>Redes <span>sociales</span></h3>
              <nav class="redes-sociales">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-pinterest-p"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>

              </nav><!--Fin redes-sociales-->
          </div>

    </div><!--////Fin contenedor////-->

    <!--Frase Copyright-->
    <p class="copyrights">Copyright &copy Todos los derechos reservados Wanderlust- 2019</p>

  </footer>
  <script  src="js/api.js"></script>
  <script  src="js/validacionFormulario.js"></script>
  <script>    //FIJACION DE BARRA NAVEGACION
  var windowHeight = $(window).height();
  var barraAltura = $('#main-nav').innerHeight()+30;
  // console.log(barraAltura);
  $(window).scroll(function(){
      var scroll = $(window).scrollTop();
      if(scroll > barraAltura) {
          $('#main-nav').addClass('fixed');
          //Al crear la clase voy al main de css y aplico propiedades a la clase fixed
          $('#logoPrincipal').addClass('ocultar');
      } else {
          $('#main-nav').removeClass('fixed');
          $('#logoPrincipal').removeClass('ocultar');

      }
  });

  //MENU HAMBURGUESA

  $('.menuHamburguesa').on('click', function(){
      $('nav.navegacion-hamburguesa').slideToggle();
  });</script>
@yield('js')
  </body>
</html>
