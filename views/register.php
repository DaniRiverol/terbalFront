
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


<section class="contact" id="contact">

    <h1 class="heading"> <i class="fas fa-paw"></i> Regístrate <i class="fas fa-paw"></i> </h1>

    <form action="../config/register.php" method="POST">

        <div class="inputBox">
            <input type="text" name="nombre_completo" placeholder="nombre completo">
            <input type="text" name="direccion" placeholder="dirección">
        </div>
        
        <div class="inputBox">
            <input type="text" name="telefono" placeholder="teléfono">
            <input type="email" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <input type="submit" value="registrar" name="btnRegistro" class="btn">
        </div>
        <div class="inputBox">
        <span> <a href="./login.php">Ya tienes cuenta?</a></span>
        
        </div>

    </form>

</section>

<!-- contact section ends -->

<!-- footer section  -->

<section class="footer">
  

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