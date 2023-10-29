<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>home</title>

      <!-- enlace css deslizador  -->
      <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

      <!-- fuente impresionante enlace cdn  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

      <!-- enlace de archivo css personalizado  -->
      <link rel="stylesheet" href="css/style.css">

   </head>
   <body>
      
      <!-- comienza la sección del encabezado  -->

      <section class="header">

         <a href="home.php" class="logo">Tijuana, B.C.</a>

         <nav class="navbar">
            <a href="home.php">Inicio</a>
            <a href="about.php">Acerca de</a>
            <a href="package.php">Paquetes</a>
            <a href="book.php">Reserva</a>
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

      <section class="home-about">

         <div class="image">
            <img src="images/about-img.jpg" alt="">
         </div>

         <div class="content">
            <h3>acerca de tijuana</h3>
            <p>Tijuana B.C. es una ciudad fronteriza de México, al sur de California. Su desbordante calle principal, la Avenida Revolución, está repleta de tiendas de recuerdos y animados bares. Entre los sitios icónicos se incluyen el palacio Jai Alai Frontón y el Centro Cultural Tijuana, un moderno complejo cultural en el distrito Zona Río. La ciudad tiene estadios donde se presentan eventos de lucha libre, mientras que la ciudad de Rosarito tiene playas de arena.</p>
            <a href="about.php" class="btn">leer más</a>
         </div>

      </section>

      <!-- termino sobre la sección de about -->

      <!-- comienza la sección de paquetes  -->

      <section class="home-packages">

         <h1 class="heading-title"> nuestros paquetes </h1>

         <div class="box-container">

            <div class="box">
               <div class="image">
                  <img src="images/img-1.jpg" alt="">
               </div>
               <div class="content">
                  <h3>Comidas</h3>
                  <p>Descubre las mejores gastronomias en tijuana!</p>
                  <a href="book.php" class="btn">reserva ahora</a>
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="images/img-2.jpg" alt="">
               </div>
               <div class="content">
                  <h3>Lugares</h3>
                  <p>Descubre los mejores lugares en tijuana!</p>
                  <a href="book.php" class="btn">reserva ahora</a>
               </div>
            </div>
            
            <div class="box">
               <div class="image">
                  <img src="images/img-3.jpg" alt="">
               </div>
               <div class="content">
                  <h3>Playas</h3>
                  <p>Conoce las playas y sus locales increibles!</p>
                  <a href="book.php" class="btn">reserva ahora</a>
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
               <a href="package.php"> <i class="fas fa-angle-right"></i> Paquete </a>
               <a href="book.php"> <i class="fas fa-angle-right"></i> Reserva</a>
            </div>

            <div class="box">
               <h3>Enlaces</h3>
               <a href="#"> <i class="fas fa-angle-right"></i> pregunats</a>
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