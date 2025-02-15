<!DOCTYPE html>
<html lang="es" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Noticias y datos del Levante ud">
    <meta name="keywords" content="Levante UD, fútbol, noticias, Levante, plantilla, resultados, Jaume Crespo granota, calendario levante ud, calendario levante u.d.calendario llevant ud">
    <meta name="author" content="Jaume Crespo">
    <meta property="og:title" content="Noticias Levante UD">
    <meta property="og:description" content="Una descripción más detallada de tu página para compartir en redes sociales.">
    <meta property="og:image" content="URL_DE_TU_IMAGEN">
    <meta property="og:url" content="URL_DE_TU_PÁGINA">
    <meta name="robots" content="index, follow">
    <title>Noticias Levante UD</title>
</head>


    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/styles.css">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/levantelogo.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="images/levantelogo.svg">
    <link rel="icon" type="image/png" sizes="16x16" href="images/levantelogo.svg>
    <link rel="manifest" href="site.webmanifest">

</head>


<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <header>
    <?php include 'includes/header.php'; ?>
    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap ss-home">


        <!-- # site header 
        ================================================== -->
      

           

          

        </header> <!-- end s-header -->


        <!-- # site-content
        ================================================== -->
        <section id="content" class="s-content">


            <!-- ventana principal -->
            <div class="hero">

                <div class="hero__slider swiper-container">
                    <!-- Flechas de navegación -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
             
                    
                    

                    <div class="swiper-wrapper">
                        <article class="hero__slide swiper-slide">
                            <div class="hero__entry-image" style="background-image: url('images/levanteportada1.jpg');"></div>
                            <div class="hero__entry-text">
                                <div class="hero__entry-text-inner">
                                    <div class="hero__entry-meta">
                                        <span class="cat-links">
                                        <div class="logo-container">
                                        <img src="images/levantelogo.svg" alt="Logo Levante" width="80" height="auto">
                                        </div>
                                            <a href="category.html">Llevant U.D.</a>
                                        </span>
                                    </div>
                                    <h2 class="hero__entry-title">
                                        <a href="plantilla.php">
                                            Todo sobre el universo granota
                                        </a>
                                    </h2>
                                    <p class="hero__entry-desc">
                                    Bienvenido a esta web granota para ver todo lo relacionado con el Levante UD. 
                                    Aquí encontrarás las últimas noticias, análisis, estadísticas y resultados del equipo. 
                                    Nuestro sitio te mantiene al día con la información más relevante sobre el club, sus jugadores y las competiciones. 
                                    No te pierdas nada de lo que sucede en el mundo granota. 
                                    </p>
                                   
                                </div>
                            </div>
                        </article>
                        
                        <article class="hero__slide swiper-slide">
                            <div class="hero__entry-image" style="background-image: url('images/-estadiociutatvalencia.jpg');"></div>
                            <div class="hero__entry-text">
                                <div class="hero__entry-text-inner">
                                <div class="logo-container">
                                        <img src="images/LaLiga_Hypermotion_2023_Horizontal_Logo.svg.png" alt="Logo Levante" width="220" height="auto">
                                        </div>
                                <?php include 'includes/clasificacion.php'; ?>
                                <a class="hero__more-link" href="clasificaciondet.php">Ver clasificación más detallada</a>

                                </div>
                            </div>
                        </article>
                        <article class="hero__slide swiper-slide">
                            <div class="hero__entry-image" style="background-image: url('images/aficion.jpg');"></div>
                            <div class="hero__entry-text">
                                <div class="hero__entry-text-inner">
                                
                                <?php include 'includes/proximo.php'; ?>

                                </div>
                            </div>
                        </article>
                       
                        
                        <article class="hero__slide swiper-slide">
                            <div class="hero__entry-image" style="background-image: url('images/kocho01.jpg');"></div>
                            <div class="hero__entry-text">
                                <div class="hero__entry-text-inner">
                                    <div class="hero__entry-meta">
                                    <div class="logo-container">
                                        <img src="images/levantelogo.svg" alt="Logo Levante" width="200" height="auto">
                                        </div>
                                        <span class="cat-links">
                                            <a href="resultados.php">Resultados</a>
                                        </span>
                                    </div>
                                   
                                   
                                    <?php include 'includes/mostrarpartidos.php'; ?>
                                </div>
                            </div>
                        </article>
                        
                        
                    </div> <!-- swiper-wrapper -->

                    <div class="swiper-pagination"></div>
                    
    
                </div> <!-- end hero slider -->

                <a href="#bricks" class="hero__scroll-down smoothscroll">
                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.25 6.75L4.75 12L10.25 17.25"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 12H5"></path>
                    </svg>
                    <span>Scroll</span>
                </a>

            </div> <!-- fin ventana principal-->


            <!--  masonry -->
            <div id="bricks" class="bricks">

                <div class="masonry">

                    <div class="bricks-wrapper" data-animate-block>
                    <article class="brick entry" data-animate-el>
        
        <div class="entry__thumb">
            <a href="plantilla.php" class="thumb-link">
                <img src="images/plantilla.jpg" 
                    srcset="images/plantilla.jpg" alt="">
            </a>
        </div> <!-- end entry__thumb -->
     
        <div class="entry__text">
            <div class="entry__header">
                <div class="entry__meta">
                    <span class="cat-links">
                        <a href="#">Datos</a>
                    </span>
                    <span class="post-date">
                        
                        <a href="plantilla.php">Plantilla</a>
                    </span>
                </div>
                <h1 class="entry__title"><a href="plantilla.php">Plantilla 2024-2025</a></h1>
            </div>
            <div class="entry__excerpt">
                <p>
                Todos los datos de la plantilla 2024/25.
            </div>
            <a class="entry__more-link" href="plantilla.php">LEER MÁS</a>
        </div> <!-- end entry__text -->
    
    </article> <!-- end article -->
<!-- end
    <article class="brick entry" data-animate-el>

        <div class="entry__thumb">
            <a href="single-standard.html" class="thumb-link">
                <img src="images/analisis.jpg" 
                    srcset="images/analisis.jpg" alt="">
            </a>
        </div> <!-- end entry__thumb -->
<!-- end
        <div class="entry__text">
            <div class="entry__header">
                <div class="entry__meta">
                    <span class="cat-links">
                        <a href="#">Datos</a>
                    </span>
                    <span class="byline">
                        
                        <a href="#0">ültimo partidos</a>
                    </span>
                </div>
                <h1 class="entry__title"><a href="single-standard.html">Analisis del último partido</a></h1>
            </div>
            <div class="entry__excerpt">
                <p>
                Analisis del último partido
                </p>
            </div>
            <a class="entry__more-link" href="#0">LEER MÁS</a>
        </div> <!-- end entry__text -->
        
    </article> <!-- end article -->

    <article class="brick entry" data-animate-el>

        <div class="entry__thumb">
            <a href="single-standard.html" class="thumb-link">
                <img src="images/clasificacion01.jpg" 
                    srcset="images/clasificacion01.jpg" alt="">
            </a>
        </div> <!-- end entry__thumb -->

        <div class="entry__text">
            <div class="entry__header">
                <div class="entry__meta">
                    <span class="cat-links">
                        <a href="#">Datos</a>
                    </span>
                    <span class="byline">
                        
                        <a href="#0">Clasificación</a>
                    </span>
                </div>
                <h1 class="entry__title"><a href="clasificaciondet.php">Clasificación Liga Hipermotion</a></h1>
            </div>
            <div class="entry__excerpt">
                <p>
                Clasificación detallada
                </p>
            </div>
            <a class="entry__more-link" href="clasificaciondet.php">LEER MÁS</a>
        </div> <!-- end entry__text -->
        
        
    </article> <!-- end article -->
    <article class="brick entry" data-animate-el>

        <div class="entry__thumb">
            <a href="resultados.php" class="thumb-link">
                <img src="images/partdioscarlos.jpg" 
                    srcset="images/partdioscarlos.jpg" alt="">
            </a>
        </div> <!-- end entry__thumb -->

        <div class="entry__text">
            <div class="entry__header">
                <div class="entry__meta">
                    <span class="cat-links">
                        <a href="#">Datos</a>
                    </span>
                    <span class="byline">
                        
                        <a href="resultados.php">Partidos y calendario</a>
                    </span>
                </div>
                <h1 class="entry__title"><a href="resultados.php">Calendario/Resultados temporada</a></h1>
            </div>
            <div class="entry__excerpt">
                <p>
                Datos de los partidos jugados y por jugar
                </p>
            </div>
            <a class="entry__more-link" href="resultados.php">LEER MÁS</a>
        </div> <!-- end entry__text -->
        
        
    </article> <!-- end article -->
                    <?php
                        include('includes/superdeporte.php');
                        include('includes/marca.php');
                        include('includes/provincias.php');
                        include('includes/levante.php');
                        ?>

                        <div class="grid-sizer"></div>
                        
                    
                        
                        


                        

                        

                        

                        
        
                       


                       

                        <
                    </div> <!-- end bricks-wrapper -->

                </div> <!-- end masonry-->


               
            </div> <!-- end bricks -->

        </section> <!-- end s-content -->


        <!-- # site-footer
        ================================================== -->
        <footer id="colophon" class="s-footer">

            

            <div class="row s-footer__main">

                <div class="column lg-5 md-6 tab-12 s-footer__about">
                    
                    <img src="images/jcm01.jpg" width="60" height="auto"> <p>jaumecrespo@jaumecrespo.com</p>

                    <p>
                    Este sitio web se dedica exclusivamente a recopilar noticias, artículos y datos relacionados con el Levante UD, basados en fuentes públicas. 
                    No somos responsables del contenido original ni de su veracidad, ya que nuestra labor es compartir información relevante y actualizada. 
                    Todos los derechos sobre los contenidos pertenecen a sus respectivos propietarios. 
                    
                    </p>
                </div> <!-- end s-footer__about -->

                <div class="column lg-5 md-6 tab-12">
                    <div class="row">
                        <div class="column lg-6">
                            <h4>Categories</h4>
                            <ul class="link-list">
                                <li><a href="category.html">Noticias</a></li>
                                <li><a href="category.html">Datos</a></li>
                                <li><a href="category.html">Sobre nosotros</a></li>
                                <li><a href="category.html">Contactame</a></li>

                                
                            </ul>
                        </div>
                        <div class="column lg-6">
                            <h4>Enlaces de interes</h4>
                            <ul class="link-list">
                                <li><a href="index.html">01</a></li>
                                <li><a href="category.html">02</a></li>
                                <li><a href="category.html">03</a></li>
                                <li><a href="about.html">04</a></li>
                                <li><a href="about.html">04</a></li>
                                <li><a href="#0">06</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div> <!-- end s-footer__main -->

            <div class="row s-footer__bottom">

                
                <div class="column lg-5 md-6 tab-12">
                    <div class="ss-copyright">
                        
                        <span>Jaume Crespo</span> 
                        <span>Visitame en <a href="https://www.jaumecrespo.com/">www.jaumecrespo.com</a></span>
                    </div>
                </div>

            </div> <!-- end s-footer__bottom -->
           
            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top">
                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 10.25L12 4.75L6.75 10.25"/>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19.25V5.75"/>
                    </svg>
                </a>
            </div> <!-- end ss-go-top -->

        </footer><!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    

</body>
</html>