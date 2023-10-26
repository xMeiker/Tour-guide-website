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

   $success_msg[] = 'booked successfully!'; 

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">tijuana.</a>

   <nav class="navbar">
      <a href="home.php">inicio</a>
      <a href="about.php">acerca de</a>
      <a href="package.php">paquete</a>
      <a href="book.php">reserva</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>reserva ahora</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">reserva tu viaje!</h1>

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
            <input type="number" maxlength="10" min="0" max="9999999999" placeholder="ingresa tu numero" name="phone">
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

<!-- booking section ends -->

















<!-- footer section starts  -->

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

   <div class="credit"> creado por <span>Omar Garcia Torres</span> | ¡Todos los derechos reservados! </div>

</section>

<!-- footer section ends -->






<!-- sweetalert cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
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