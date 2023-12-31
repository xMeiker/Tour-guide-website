<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Paquetes</title>

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

      <div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
         <h1>paquetes</h1>
      </div>

      <!-- comienza la sección de paquetes  -->

      <section class="packages">

         <h1 class="heading-title">mejores destinos</h1>

         <div class="box-container">

         <div class="box">
               <div class="image">
                  <img src="images/img-1.jpg" alt="">
               </div>
               <div class="content">
                  <h3>Restaurantes</h3>
                  <p>Descubre las mejores gastronomias en tijuana!</p>
                  <a href="restaurants.php" class="btn">ver mas</a>
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="images/img-10.jpg" alt="">
               </div>
               <div class="content">
                  <h3>Hoteles</h3>
                  <p>Descubre los hoteles mas cercanos y reserva ahora!</p>
                  <a href="hotels.php" class="btn">ver mas</a>
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

            <div class="box">
               <div class="image">
                  <img src="images/img-2.jpg" alt="">
               </div>
               <div class="content">
                  <h3>Entretenimiento</h3>
                  <p>Descubre lugares a los que puedes visitar y divertirte!</p>
                  <a href="places.php" class="btn">ver mas</a>
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="images/img-13.jpg" alt="">
               </div>
               <div class="content">
                  <h3>Museos</h3>
                  <p>Conoce sobre la cultura y arte de la ciudad y adentrate al museo!</p>
                  <a href="museums.php" class="btn">ver mas</a>
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="images/img-14.jpg" alt="">
               </div>
               <div class="content">
                  <h3>Transporte publico</h3>
                  <p>Conoce las estaciones que hay y donde puedes tomar tu transporte hacia tu destino.</p>
                  <a target="_blank" href="https://maps.app.goo.gl/YdJdXAkZK6ZY3Lir8" class="btn">ir</a>
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="images/img-15.jpg" alt="">
               </div>
               <div class="content">
                  <h3>Farmacias</h3>
                  <p>Descubre la farmacia mas cercana a tu ubicación.</p>
                  <a target="_blank" href="https://maps.app.goo.gl/CMCXK5m8n8ceowc49" class="btn">ir</a>
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="images/img-16.jpg" alt="">
               </div>
               <div class="content">
                  <h3>Cajeros automaticos</h3>
                  <p>¿Necesitas dinero y no sabes donde hay un cajero cerca? dale click aqui y descubre los cajeros mas cercanos a tu ubicación.</p>
                  <a target="_blank" href="https://maps.app.goo.gl/amCe9XtCSPv6CHLX8" class="btn">ir</a>
               </div>
            </div>

         </div>

         <div class="load-more"><span class="btn">ver mas paquetes</span></div>

      </section>

      <!-- termina la sección de paquetes  -->

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

      <!-- termina la sección de pie de página  -->

      <!-- enlace js deslizador  -->
      <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

      <!-- enlace de archivo js personalizado  -->
      <script src="js/script.js"></script>

   </body>
</html>