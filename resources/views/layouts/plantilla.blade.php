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
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
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
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
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

              </nav>
            </div>
            <!-- fin inicio/registro -->

            <!-- carrito: -->
            <div class="carrito">
              <i class="fas fa-shopping-cart"></i>
            </div>
            <!-- fin Carrito -->
      </div>

      </div>

<!-- fin barra superior mobile y tablet -->

<!-- barra inferior  -->
    <div class="barraInferior">
        <!-- menu hamburguesa para mobile -->
        <div class="menuHamburguesa">
            <img id= "logoHamburguesa" src="{{ asset('img/menuHamburguesa.png') }}" alt="logoW">
        </div>
        <!-- fin menu hamburguesa para mobile -->

        <!-- logo principal -->

        <img id= "logoPrincipal" src= "{{ asset('img/logoWanderlust.png') }}" alt="logoW">

        <!-- fin logo principal -->

        <!-- Opciones para tablet y desktop -->
        <div class="opciones">
            <nav class="navPrincipal">
                <a href="/productos" class="botones">PRODUCTOS</a>
                <a href="faqs.html" class="botones">PREGUNTAS FRECUENTES</a>
                <!-- solo desktop: -->
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
                            {{ Auth::user()->name }} <span class="caret"></span>
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

                <!-- carrito desktop: -->
                <div class="carritoD">
                    <i class="fas fa-shopping-cart"></i>
                  </div>
                <!-- fin Carrito desktop -->
            </nav>
        </div>




        <!-- fin opciones para tablet y desktop -->
    </div>
<!-- fin barra inferior  -->

    </header>
<!--///Fin contenido-header///-->

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

  </body>
</html>
