<?php

$db_name = 'mysql:host=localhost;dbname=book_db';
$db_user_name = 'root';
$db_user_pass = '';

$conn = new PDO($db_name, $db_user_name, $db_user_pass);

function create_unique_id(){
   $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
   $characters_lenght = strlen($characters);
   $random_string = '';
   for($i = 0; $i < 20; $i++){
      $random_string .= $characters[mt_rand(0, $characters_lenght - 1)];
   }
   return $random_string;
}

if(isset($_POST['send'])){

   $id = create_unique_id();
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $location = $_POST['location'];
   $guests = $_POST['guests'];
   $arrivals = $_POST['arrivals'];
   $leaving = $_POST['leaving'];

   $insert_book = $conn->prepare("INSERT INTO `book_form`(id, name, email, phone, address, location, guests, arrivals, leaving) VALUES(?,?,?,?,?,?,?,?,?)");
   $insert_book->execute([$id, $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving]);

   $success_msg[] = 'Datos Registrados, en un momento seras contactado!'; 

}

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Reserva</title>

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

      <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
         <h1>reserva ahora</h1>
      </div>

      <!-- comienza la sección de reserva  -->

      <section class="booking">

         <h1 class="heading-title">No te quedes sin un lugar!</h1>

         <form action="" method="post" class="book-form">

            <div class="flex">
               <div class="inputBox">
                  <span>nombre :</span>
                  <input type="text" placeholder="ingresa tu nombre" maxlength="30" name="name">
               </div>
               <div class="inputBox">
                  <span>email :</span>
                  <input type="email" maxlength="50" placeholder="ingresa tu email" name="email">
               </div>
               <div class="inputBox">
                  <span>telefono :</span>
                  <input type="tel" maxlength="12" placeholder="ingresa tu numero" name="phone">
               </div>
               <div class="inputBox">
                  <span>direccion :</span>
                  <input type="text" maxlength="50" placeholder="ingresa tu direccion" name="address">
               </div>
               <div class="inputBox">
                  <span>A donde vas :</span>
                  <input type="text" placeholder="dime a donde iras" name="location" maxlength="50">
               </div>
               <div class="inputBox">
                  <span>cuantas personas :</span>
                  <input type="number" min="1" max="99" maxlength="2" placeholder="ingresa cantidad de personas" name="guests">
               </div>
               <div class="inputBox">
                  <span>llegada :</span>
                  <input type="date" name="arrivals">
               </div>
               <div class="inputBox">
                  <span>regreso :</span>
                  <input type="date" name="leaving">
               </div>
            </div>

            <input type="submit" value="enviar" class="btn" name="send">

         </form>

      </section>

      <!-- termina la sección de reserva  -->

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

      <!-- sweetalert cdn link  -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

      <!-- enlace js deslizador  -->
      <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

      <!-- enlace de archivo js personalizado  -->
      <script src="js/script.js"></script>

      <?php
      if(isset($success_msg)){
         foreach($success_msg as $success_msg){
            echo '<script>swal("'.$success_msg.'", "", "success");</script>';
         }
      }
      ?>
   </body>
</html>