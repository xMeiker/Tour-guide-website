<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Inicio</title>

      <!-- enlace css deslizador  -->
      <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

      <!-- fuente impresionante enlace cdn  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

      <!-- enlace de archivo css personalizado  -->
      <link rel="stylesheet" href="css/style.css">

      <!-- visualizar favicon para la pagina web desde distintos dispositivos -->
      <link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
      <link rel="manifest" href="/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">
   </head>
   <body>
      
      <!-- comienza la sección del encabezado  -->

      <section class="header">

         <a href="home.php" class="logo">Tijuana, B.C.</a>

         <nav class="navbar">
            <a href="home.php">Inicio</a>
            <a href="package.php">Paquetes</a>
            <a href="book.php">Reserva</a>
            <a href="about.php">Acerca de</a>
         </nav>

         <div id="menu-btn" class="fas fa-bars"></div>

      </section>

      <!-- termina la sección del encabezado -->

      <!-- comienza la sección de inicio  -->

      <section class="home">

         <div class="swiper home-slider">

            <div class="swiper-wrapper">

               <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                  <div class="content">
                     <span>explora, Descubre, Viaja, Disfruta</span>
                     <h3>descubre lugares en tijuana</h3>
                     <a href="package.php" class="btn">descubrir ahora</a>
                  </div>
               </div>

               <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                  <div class="content">
                     <span>explora, Descubre, Viaja, Disfruta</span>
                     <h3>comida</h3>
                     <a href="package.php" class="btn">descubrir ahora</a>S
                  </div>
               </div>

               <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                  <div class="content">
                     <span>explora, Descubre, Viaja, Disfruta</span>
                     <h3>cecut</h3>
                     <a href="package.php" class="btn">descubrir ahora</a>
                  </div>
               </div>

               <div class="swiper-slide slide" style="background:url(images/home-slide-4.jpg) no-repeat">
                  <div class="content">
                     <span>explora, Descubre, Viaja, Disfruta</span>
                     <h3>playas</h3>
                     <a href="package.php" class="btn">descubrir ahora</a>
                  </div>
               </div>
               
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

         </div>

      </section>

      <!-- termina la sección de inicio -->

      <!-- comienza la sección de servicios y visualización del contenido  -->

      <section class="services">

         <h1 class="heading-title"> Nuestros servicios</h1>

         <div class="box-container">

            <div class="box">
               <img src="images/icon-1.png" alt="">
               <h3>Aventura</h3>
            </div>

            <div class="box">
               <img src="images/icon-2.png" alt="">
               <h3>guia turistica</h3>
            </div>

            <div class="box">
               <img src="images/icon-3.png" alt="">
               <h3>caminatas</h3>
            </div>

            <div class="box">
               <img src="images/icon-6.png" alt="">
               <h3>fogatas</h3>
            </div>

            <div class="box">
               <img src="images/icon-5.png" alt="">
               <h3>caminos</h3>
            </div>

            <div class="box">
               <img src="images/icon-6.png" alt="">
               <h3>campamento</h3>
            </div>

         </div>

      </section>

      <!-- termina la sección de servicios y visualización del contenido -->

      <!-- inicio sobre la sección de about  -->

      <h1 class="heading-title"> Información </h1>

      <section class="home-about">

         <div class="image">
            <img src="images/about-img.jpg" alt="">
         </div>

         <div class="content">
            <h3>acerca de tijuana</h3>
            <p>Tijuana B.C. es una ciudad fronteriza de México, al sur de California. Su desbordante calle principal, la Avenida Revolución, 
               está repleta de tiendas de recuerdos y animados bares. Entre los sitios icónicos se incluyen el palacio Jai Alai Frontón y el 
               Centro Cultural Tijuana, un moderno complejo cultural en el distrito Zona Río. La ciudad tiene estadios donde se presentan eventos de lucha libre, 
               mientras que la ciudad de Rosarito tiene playas de arena.</p>
            <a href="about.php" class="btn">leer más</a>
         </div>

      </section>

      <!-- termino sobre la sección de about -->

      <!-- seccion sobre informacion sobre la pagina -->

      <section class="home-about">

         <div class="image">
            <img src="images/sobre-img.jpg" alt="">
         </div>

         <div class="content">
            <h3>¿que encontraras aqui?</h3>
            <p>se trata de un sitio web dedicado para los turistas o personas en general que deseen conocer mas y visitar diversos lugares de la ciudad de Tijuana, B.C. 
               El objetivo principal del sitio es proporcionar a los visitantes una plataforma fácil y conveniente para buscar 
               y reservar lugares a los cuales poder pasar un buen rato y conocer la ciudad en general, asi mismo poder brindarles algunos guias profesionales 
               que los acompañen durante su estancia en Tijuana.</p>
         </div>

      </section>

      <!-- seccion sobre novedades -->

      <h1 class="heading-title"> Novedades</h1>

      <section class="home-about">

         <div class="image">
            <img src="images/novedad1-img.jpg" alt="">
         </div>

         <div class="content">
            <h3>Recibe Tijuana 8.5 millones de turistas</h3>
            <p>Tijuana, BC.- El municipio de Tijuana recibió a más de 8.5 millones de visitantes y turistas de enero a agosto del 2023, 
               compartió el presidente del Comité de Turismo y Convenciones Municipal (Cotuco), Arturo Gutiérrez Sánchez.
               El titular de la paramunicipal precisó que esto representa un incremento del 4.7% con relación a lo registrado en el año pasado, 
               esto considerando eventos celebrados a nivel local y afluencia en establecimientos.</p>
         </div>

      </section>

      <section class="home-about">

         <div class="image">
            <img src="images/novedad2-img.jpg" alt="">
         </div>

         <div class="content">
            <h3>Tijuana presenta nuevo servicio de transporte público que cruzará la frontera a San Ysidro</h3>
            <p>La ciudad de Tijuana anunció un nuevo servicio de transporte de ida y vuelta entre la Avenida Revolución y San Ysidro (California). 
               Se estima que, en un inicio, esta opción de transporte beneficiará a más de 30 mil personas al mes.</p>
         </div>

      </section>

      <!-- comienza la sección de paquetes  -->

      <section class="home-packages">

         <h1 class="heading-title"> nuestros paquetes </h1>

         <div class="box-container">

            <div class="box">
               <div class="image">
                  <img src="images/img-1.jpg" alt="">
               </div>
               <div class="content">
                  <h3>Comida</h3>
                  <p>Descubre las mejores gastronomias en tijuana!</p>
                  <a href="restaurants.php" class="btn">ver mas</a>
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="images/img-2.jpg" alt="">
               </div>
               <div class="content">
                  <h3>Lugares</h3>
                  <p>Descubre los mejores lugares en tijuana!</p>
                  <a href="places.php" class="btn">ver mas</a>
               </div>
            </div>
            
            <div class="box">
               <div class="image">
                  <img src="images/img-3.jpg" alt="">
               </div>
               <div class="content">
                  <h3>Playas</h3>
                  <p>Conoce las playas y sus locales increibles!</p>
                  <a href="beachs.php" class="btn">ver mas</a>
               </div>
            </div>

         </div>

         <div class="load-more"> <a href="package.php" class="btn">ver más paquetes</a> </div>

      </section>

      <!-- termina la sección de paquetes -->

      <!-- comienza la sección de oferta  -->

      <section class="home-offer">
         <div class="content">
            <h3>HASTA 50% DE DESCUENTO</h3>
            <p>No te lo pierdas!</p>
            <a href="book.php" class="btn">reserva ahora</a>
         </div>
      </section>

      <!-- termina la sección de oferta -->

      <!-- comienza la sección de pie de página  -->

      <section class="footer">

         <div class="box-container">

            <div class="box">
               <h3>Enlaces</h3>
               <a href="home.php"> <i class="fas fa-angle-right"></i> inicio</a>
               <a href="about.php"> <i class="fas fa-angle-right"></i> Acerca De </a>
               <a href="package.php"> <i class="fas fa-angle-right"></i> Paquetes </a>
               <a href="book.php"> <i class="fas fa-angle-right"></i> Reserva</a>
            </div>

            <div class="box">
               <h3>Sobre Nosotros</h3>
               <a href="#"> <i class="fas fa-angle-right"></i> preguntas</a>
               <a href="#"> <i class="fas fa-angle-right"></i> acerca de</a>
               <a href="#"> <i class="fas fa-angle-right"></i> politica de privacidad</a>
               <a href="#"> <i class="fas fa-angle-right"></i> terminos de uso</a>
            </div>

            <div class="box">
               <h3>contact info</h3>
               <a href="#"> <i class="fas fa-phone"></i> 6642149981 </a>
               <a href="#"> <i class="fas fa-phone"></i> 6648738493 </a>
               <a href="#"> <i class="fas fa-envelope"></i> omar.garcia201@tectijuana.edu.mx </a>
               <a href="#"> <i class="fas fa-map"></i> Tijuana, Baja californa, Mexico</a>
            </div>

            <div class="box">
               <h3>follow us</h3>
               <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
               <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
               <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
               <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>

         </div>

         <div class="credit"> creado por <span>Private Studio</span> | ¡Todos los derechos reservados! </div>

      </section>

      <!-- termina la sección de pie de página -->

      <!-- enlace js deslizador  -->
      <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

      <!-- enlace de archivo js personalizado  -->
      <script src="js/script.js"></script>

   </body>
</html>