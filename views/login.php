<?php
include('../config/connection.php');



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardería Terbal</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!--  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div id="menu" class="fas fa-bars"></div>

    <a href="../index.html" class="logo"><i class="fas fa-bone"></i>Terbal</a>

    
    <nav class="navbar">
        <a href="./home.php">home</a>
        <a href="./partials/calendar.php">calendario</a>
        <a href="./partials/mascota.php">mascotas</a>
        <a href="./partials/reservas.php">reservas</a>
        <a href="./partials/profile.php">perfil</a>
    </nav>

    <div class="icons">
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="./login.php" class="fas fa-user-circle"></a>
    </div>

    <form action="" id="search-box">
        <input type="search" id="search" placeholder="buscar">
        <label for="search" class="fas fa-search"></label>
    </form>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<!-- <section class="home" id="home">

    <div class="content">
        <span>Guardería de Mascotas</span>
        <h3>Todo para <br> su tranquilidad!</h3>
        <a href="#" class="btn">Reservar</a>
    </div>

</section> -->



<section class="contact" id="contact">

    <h1 class="heading"> <i class="fas fa-paw"></i> inicia sesión <i class="fas fa-paw"></i> </h1>

    <form action="../config/login.php" method="POST">

        <div class="inputBox">
            <!-- <input type="text" name="nombre" placeholder="nombre"> -->
            <input type="email" name="email" placeholder="email">
        </div>
        
        <div class="inputBox">
          <!--   <input type="text" name="direccion" placeholder="dirección">
            <input type="text" name="telefono" placeholder="teléfono"> -->
            <input type="password" name="password" placeholder="password">

        </div>
        <input type="submit" value="Ingresar" name="btnIngreso" class="btn">
        <div class="inputBox">
        <span> <a href="./register.php">no tienes cuenta?</a></span>
        </div>
    </form>

</section>

<!-- contact section ends -->

<!-- footer section  -->

<section class="footer">
    
   <!--  <div class="share">
        <a href="#" class="btn">
            <i class="fab fa-youtube"></i>
        </a>
        <a href="#" class="btn">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="btn">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="btn">
            <i class="fab fa-linkedin"></i>
        </a>
        <a href="#" class="btn">
            <i class="fab fa-instagram"></i>
        </a>
    </div> -->

    <h1 class="credit"> created by <span> Six Sigma </span> | all rights reserved! </h1>

</section>


<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!--  -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<!-- custom js file link  -->
<script src="../js/script.js"></script>

</body>
</html>