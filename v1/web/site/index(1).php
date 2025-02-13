<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Inicio</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Kanit:300,400,500,500i,600,900%7CRoboto:400,900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    
    <style>.ie-panel{display: none;background: #0b0909;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
   
    <div class="preloader">
      <div class="preloader-body">
        <div class="preloader-item"></div>
      </div>
    </div>
    <!-- Page-->
     <!-- fondo superior-->
    <div class="page"><a class="d-none d-xl-block" href="https://www.levanteud.com/" target="blank"><img class="d-block w-100" src="images/fondo.jpg" alt=""></a>
      <!-- Page Header-->
      <header class="section page-header rd-navbar-dark">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="166px" data-xl-stick-up-offset="166px" data-xxl-stick-up-offset="166px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-panel">
              <!-- RD Navbar Toggle-->
              <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-main"><span></span></button>
              <!-- RD Navbar Panel-->
             
            </div>
            <div class="rd-navbar-main">
              
              <div class="rd-navbar-main-bottom rd-navbar-darker">
                
                <div class="rd-navbar-main-container container">
                  
                  <!-- RD Navbar Nav-->
                                    <ul class="rd-navbar-nav">
                                      <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">Inicio</a>
                                      </li>
                                      <li class="rd-nav-item"><a class="rd-nav-link" href="">Clasificación</a>
                                      </li>
                                      <li class="rd-nav-item"><a class="rd-nav-link" href="">opcion2</a>
                                      </li>
                                      <li class="rd-nav-item"><a class="rd-nav-link" href="">opcion3</a>
                                      </li>
                                    </ul>
                                    <ul class="list-inline list-inline-bordered">
                    <li>
                      <!-- Select 2-->
                      <select class="select select-inline" data-placeholder="Select an option" data-dropdown-class="select-inline-dropdown">
                        <option value="es" selected="">es</option>
                        <option value="fr">cat</option>
                        <option value="en">en</option>
                      </select>
                    </li>
                  
                   
                  </ul>
                  
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Swiper-->
      <section class="section swiper-container swiper-slider swiper-classic bg-gray-2" data-loop="true" data-autoplay="4000" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper">
       
          <div class="swiper-slide" data-slide-bg="images/levan02.jpg">
            <div class="container">
              <div class="row justify-content-end">
                <div class="col-xl-5">
                  <div class="swiper-slide-caption">
                    <h1 data-caption-animate="fadeInUp" data-caption-delay="100">Levante U.D.</h1>
                    <h4 data-caption-animate="fadeInUp" data-caption-delay="200">Toda la información granota</h4><a class="button button-primary" data-caption-animate="fadeInUp" data-caption-delay="300" href="about-us.html">Leer más</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-slide-bg="images/levan1.jpg">
            <div class="container">
              <div class="row">
                <div class="col-xl-5">
                  <div class="swiper-slide-caption">
                    <h1 data-caption-animate="fadeInUp" data-caption-delay="100">Noticias</h1>
                    <h4 data-caption-animate="fadeInUp" data-caption-delay="200">Lesionados, sancionados, onces <br class="d-none d-xl-block"> y todos los resultados</h4><a class="button button-primary" data-caption-animate="fadeInUp" data-caption-delay="300" href="about-us.html">Leer más</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button swiper-button-prev"></div>
        <div class="swiper-button swiper-button-next"></div>
        <div class="swiper-pagination"></div>
      </section>

      <!-- Latest News-->
      <section class="section section-md bg-gray-100">
        <div class="container">
          <div class="row row-50">


          <div class="col-lg-10">
              <div class="main-component">
              <article class="heading-component">
                  <div class="heading-component-inner">
                    <h5 class="heading-component-title">Clasificación
                   
                  </div>
                </article>
                <!-- Heading Component-->
                <div class="owl-carousel-navbar owl-carousel-inline-outer">
                   
                    <div class="owl-carousel-inline-wrap">
                      
                        <!-- Post Inline-->
                        <?php
include('includes/clasificacion.php');
?>
  
                      </div>
                    </div>
                  </div>
                </div>

<!-- -->







            
            <div class="col-lg-10">
              <div class="main-component">
              <article class="heading-component">
                  <div class="heading-component-inner">
                    <h5 class="heading-component-title">Próximos partidos
                   
                  </div>
                </article>
                <!-- Heading Component-->
                <div class="owl-carousel-navbar owl-carousel-inline-outer">
                    <div class="owl-inline-nav">
                      <button class="owl-arrow owl-arrow-prev"></button>
                      <button class="owl-arrow owl-arrow-next"></button>
                    </div>
                    <div class="owl-carousel-inline-wrap">
                      
                      <div class="owl-carousel owl-carousel-inline" data-items="1" data-dots="false" data-nav="true" data-autoplay="true" data-autoplay-speed="3200" data-stage-padding="0" data-loop="true" data-margin="10" data-mouse-drag="false" data-touch-drag="false" data-nav-custom=".owl-carousel-navbar">
                        <!-- Post Inline-->
                     
                        <?php
include('includes/partidos.php');
?>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Calendario-->
                <div class="col-md-6">
<?php
include('includes/calendariocom.php');
?>
</div>
<div class="col-lg-10">
<div class="main-component">
              <article class="heading-component">
                  <div class="heading-component-inner">
                    <h5 class="heading-component-title">Noticias
                   
                  </div>
                </article>
                <div class="row row-30">
                 
                  
                  
                  
<!-- rss superdeporte-->
<div class="col-md-6">
<?php
include('includes/superdeporte.php');
?>
</div>
<!-- fin rss superdeporte-->
 <!-- rss marca-->
<div class="col-md-6">
<?php
include('includes/marca.php');
?>
</div>
<!-- fin rss marca-->
 <!-- levante emv-->
<div class="col-md-6">
<?php
include('includes/levante.php');
?>
  
</div>
<!-- fin rss levante emv-->
 
<!-- provincias emv-->
<div class="col-md-6">
<?php
include('includes/provincias.php');
?>
</div>


<!-- fin rss provincias-->

</div>







<!-- fin Calendario-->


 <!-- clasificacion-->
<article class="heading-component">
  
    
  </div>
  <!-- posicion levante fin -->
 
</div>
<div class="col-md-6">

</div>

<!-- JavaScript para alternar la tabla -->
<script>
    // Obtener los elementos del DOM
    const toggleButton = document.getElementById('toggleButton');
    const clasificacionTable = document.getElementById('clasificacionTable');
    
    // Agregar evento de clic al botón
    toggleButton.addEventListener('click', () => {
        // Alternar la visibilidad de la tabla
        if (clasificacionTable.style.display === 'none') {
            clasificacionTable.style.display = 'block'; // Mostrar tabla completa
            toggleButton.textContent = 'Ocultar clasificación'; // Cambiar texto del botón
        } else {
            clasificacionTable.style.display = 'none'; // Ocultar tabla completa
            toggleButton.textContent = 'Ver Completa'; // Cambiar texto del botón
        }
    });
</script>




</body>
</html>



                  
                  </div>
                  <div class="col-md-12">
                    <!-- Post Gloria-->
                    
                  </div>
                  <div class="col-md-12">
                    <!-- Post Future-->
                   
                  </div>
                  <div class="col-md-12">
                   
                  </div>
                  <div class="col-md-12">
                    <!-- Swiper-->
                    
                      </div>
                      <!-- Swiper Pagination-->
                    
                    </div>
                  </div>
                  <div class="col-md-12">
                    <!-- Post Future-->
                   
                  </div>
                </div>
              </div>
              <div class="main-component">
                <!-- Heading Component-->
              
               
              </div>
            </div>
            <!-- Aside Block-->
            <div class="col-lg-4">
              <aside class="aside-components">
                <div class="aside-component">
                  <div class="owl-carousel-outer-navigation-1">
                    <!-- Heading Component-->
                 
                    <!-- Owl Carousel-->
                    
                      <!-- Game Result Creative-->
                      
                  </div>
                </div>
                

                <div class="aside-component">
                  
                
                  <!-- Buttons Media-->
             
                <div class="aside-component">
                  <!-- Heading Component-->
                 
                  <!-- Owl Carousel-->
                 
                </div>
                <div class="aside-component">
                  <!-- Heading Component-->
                  
                </div>
                
                <div class="aside-component">
                  <div class="owl-carousel-outer-navigation">
                    <!-- Heading Component-->
                    
                        </footer>
                      </article>
                      
                      </article>
                    </div>
                  </div>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
      <footer class="section footer-classic footer-classic-dark context-dark">
        <div class="footer-classic-main">
          <div class="container">
            
              </div>
             
            </form>
            <div class="row row-50">
              <div class="col-lg-5 text-center text-sm-left">
                <article class="unit unit-sm-horizontal unit-middle justify-content-center justify-content-sm-start footer-classic-info">
                  <div class="unit-left"><a  href="https://jaumecrespo.com/"><img class="brand-logo " src="images/jcm01.jpg" alt="" width="100" height="126"/></a>
                  </div>
                  <div class="unit-body">
                    <p>Esta página solo recopila información del Levante UD, no se hace responsable de nada más.</p>
                  </div>
                </article>
                <ul class="list-inline list-inline-bordered list-inline-bordered-lg">
                  <li>
                    <div class="unit unit-horizontal unit-middle">
                      <div class="unit-left">
                       
                      </div>
                     
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-horizontal unit-middle">
                      <div class="unit-left">
                        <svg class="svg-color-primary svg-sizing-35" x="0px" y="0px" width="72px" height="72px" viewbox="0 0 72 72">
                          <path d="M36.002,0c-0.41,0-0.701,0.184-0.931,0.332c-0.23,0.149-0.4,0.303-0.4,0.303l-9.251,8.18H11.58 c-1.236,0-1.99,0.702-2.318,1.358c-0.329,0.658-0.326,1.3-0.326,1.3v11.928l-8.962,7.936V66c0,0.015-0.038,1.479,0.694,2.972 C1.402,70.471,3.006,72,5.973,72h30.03h30.022c2.967,0,4.571-1.53,5.306-3.028c0.736-1.499,0.702-2.985,0.702-2.985V31.338 l-8.964-7.936V11.475c0,0,0.004-0.643-0.324-1.3c-0.329-0.658-1.092-1.358-2.328-1.358H46.575l-9.251-8.18 c0,0-0.161-0.154-0.391-0.303C36.703,0.184,36.412,0,36.002,0z M36.002,3.325c0.49,0,0.665,0.184,0.665,0.184l6,5.306h-6.665 h-6.665l6-5.306C35.337,3.51,35.512,3.325,36.002,3.325z M12.081,11.977h23.92H59.92v9.754v2.121v14.816L48.511,48.762 l-10.078-8.911c0,0-0.307-0.279-0.747-0.548s-1.022-0.562-1.684-0.562c-0.662,0-1.245,0.292-1.686,0.562 c-0.439,0.268-0.747,0.548-0.747,0.548l-10.078,8.911L12.082,38.668V23.852v-2.121v-9.754H12.081z M8.934,26.867v9.015 l-5.091-4.507L8.934,26.867z M63.068,26.867l5.091,4.509l-5.091,4.507V26.867z M69.031,34.44v31.559 c0,0.328-0.103,0.52-0.162,0.771L50.685,50.684L69.031,34.44z M2.971,34.448l18.348,16.235L3.133,66.77 c-0.059-0.251-0.162-0.439-0.162-0.769C2.971,66.001,2.971,34.448,2.971,34.448z M36.002,41.956c0.264,0,0.437,0.057,0.546,0.104 c0.108,0.047,0.119,0.059,0.119,0.059l30.147,26.675c-0.3,0.054-0.79,0.207-0.79,0.207H36.002H5.98H5.972 c-0.003,0-0.488-0.154-0.784-0.207l30.149-26.675c0,0,0.002-0.011,0.109-0.059C35.555,42.013,35.738,41.956,36.002,41.956z"></path>
                        </svg>
                      </div>
                      <div class="unit-body">
                        <h6>Contactame</h6><a class="link" href="mailto:#">jaumecrespo@jaumecrespo.com</a>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="group-md group-middle">
                  <div class="group-item">
                    <ul class="list-inline list-inline-xs">
                      <li><a class="icon icon-corporate fa fa-facebook" href="https://jaumecrespo.com/"></a></li>
                      <li><a class="icon icon-corporate fa fa-twitter" href="https://jaumecrespo.com/"></a></li>
                      <li><a class="icon icon-corporate fa fa-google-plus" href="https://jaumecrespo.com/"></a></li>
                      <li><a class="icon icon-corporate fa fa-instagram" href="https://jaumecrespo.com/"></a></li>
                    </ul>
                  </div><a class="button button-sm button-gray-outline" href="contact-us.html">Estamos en conacto</a>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <div class="footer-classic-aside footer-classic-darken">
          <div class="container">
            <div class="layout-justify">
              <!-- Rights-->
              <p class="rights">
                <a href="https://www.jaumecrespo.com" target="_blank">
                    <span>Creado por :Jaume Crespo</span>
                </a>
                
            </p>
            

                <ul class="nav-minimal-list">
                  <li class="active"><a href="index.php">Inicio</a></li>
                  <li><a href="#">Clasificación</a></li>
                  <li><a href="#">Próximo partido</a></li>
                  <li><a href="#">seccion3</a></li>
                  <li><a href="#">seccion4</a></li>
                  <li><a href="#">seccion5</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </footer>
      <!-- Modal Video-->
      
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>



    
  </body>
</html>
