@extends('layouts.plantilla')

<!-- php -->
@section('sectionPhp')
<?php
session_start();

// var_dump($_SESSION);
// var_dump($_COOKIE['email']);

if($_POST){
  if(isset($_POST['logout'])){
    session_destroy();
    setcookie('email',"",time()-100);
    header('Location:index.php');
  }
}
?>
@endsection

<!-- body -->
@section('sectionContenido')
<!--///Inicio Primera Seccion/Parte///-->

<div class="inicio">
    <section class="seccion1">
      <h2>Encontrá todo para tus viajes</h2>
      <div class="contenedor-dibujo">
        <img class="dibujo db1" src="img/avion.png" alt="avion">
        <img class="dibujo db2" src="img/frase.png" alt="frase">
      </div>
      <!--Fin contenedor dibujo-->
    </section>
</div>
<!-- ///Fin Primera Seccion/Parte/// -->


<!--///Inicio SECCION PRODUCTOS///-->

<section class="productos-contenedor">
    <h2>Nuestros Productos</h2>
    <ul class="lista-productos ">
          <li>
            <div class="producto">
              <img src="img/producto1.jpg" alt="img producto">
              <p>Maletas</p>
            </div>
          </li>

          <li>
            <div class="producto">
              <img src="img/producto2.jpg" alt="img producto">
              <p>Mochilas</p>
            </div>
          </li>

          <li>
            <div class="producto">
              <img src="img/producto3.jpg" alt="img producto">
              <p>Neck Pillows</p>
            </div>
          </li>

          <li>
            <div class="producto">
              <img src="img/producto4.jpg" alt="img producto">
              <p>Paraguas</p>
            </div>
          </li>

          <li>
            <div class="producto">
              <img src="img/producto5.jpg" alt="img producto">
              <p>Bolsos</p>
            </div>
          </li>

          <li>
            <div class="producto">
              <img src="img/producto6.jpg" alt="img producto">
              <p>Otros</p>
            </div>
          </li>
        </ul>

  </section>
  <!--////Fin productos////-->

  <!--///Inicio DESCUENTOS///-->
  <div class="contenedor-descuentos fondo-inmovil">
      <div class="contenedor">
        <ul class="resumen-promo">
            <li><p class="numero"><img src="img/destacados.png"></p>Destacados</li>
            <li><p class="numero"><img src="img/ofertas.png"></p>Ofertas</li>
            <li><p class="numero"><img src="img/imperdibles.png"></p>Imperdibles</li>
            <li><img id= "logoW" src="img/logoW.png"></li>
        </ul>
      </div>
  </div>
  <!--///Fin DESCUENTOS///-->


<!--///Inicio COMENTARIOS///-->
<section class="comentarios">

    <h2>OPINIONES</h2>

    <div class="testimonialesContenedor">
        <div class="testimonial">
            <div class="cajaTestimonial">
                <img class="comillas" src="img/comillas.png" alt="comillas">
                <p><span>sangríadoble</span>¡Amo mi maleta! Desde el día que la compré me acompaña a todos lados.</p>
                <footer class="info-testimonial" >
                    <div class="infoTestimonial">
                        <img src="img/testimonial_1.jpg" alt="imagenTestimonial">
                        <cite>Pedro Jerez<br> <span>Bs. As., Argentina</span></cite>
                    </div>
                </footer>
            </div>

        </div><!--////Fin primera opinion////-->


        <div class="testimonial">
            <div class="cajaTestimonial">
                <img class="comillas" src="img/comillas.png" alt="comillas">
                <p><span>sangríadoble</span>Me encanta viajar! Los sellos en mi pasaporte son como tatuajes para mi alma.</p>
                <footer class="info-testimonial" >
                    <div class="infoTestimonial">
                        <img src="img/testimonial_2.jpg" alt="imagenTestimonial">
                        <cite>Maria López <br> <span> Córdoba, Argentina</span></cite>
                    </div>
                </footer>
            </div>

        </div><!--////Fin segunda opinion////-->


        <div class="testimonial">
            <div class="cajaTestimonial">
                <img class="comillas" src="img/comillas.png" alt="comillas">
                <p><span>sangríadoble</span>Hace poco descubrí que una parte de mi siempre quiere ir de viaje… y la otra también.</p>
                <footer class="info-testimonial" >
                    <div class="infoTestimonial">
                        <img src="img/testimonial_3.jpg" alt="imagenTestimonial">
                        <cite>Susana Ramirez <br> <span> Rosario, Argentina</span></cite>
                    </div>
                </footer>
            </div>
        </div>
    </div><!--////Fin clase testimonial contenedor////-->
  </section>
  <!--///Fin Comentarios///-->

  <!--///Inicio NEWSLETTER///-->
  <div class="newsletter fondo-inmovil">
      <div class="contenido contenedor">
          <p>Registrate al newsletter:</p>
            <h3 class="logo-newsletter"><img src="img/logo letras blanco.png"></h3>
              <a href="formulario.html" class="buttonTransparente">registro</a>
      </div>
  </div>
<!--///Fin newsletter///-->
@endsection
