<?php
include('../../config/connection.php');
include('../../config/get-mascota.php');
session_start();
if(!$_SESSION["id"])header('location:../login.php');


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
    <link rel="stylesheet" href="../../css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div id="menu" class="fas fa-bars"></div>

    <a href="../../index.html" class="logo"><i class="fas fa-bone"></i>Terbal</a>

    <nav class="navbar">
        <a href="../home.php">home</a>
        <a href="../partials/calendar.php">calendario</a>
        <a href="../partials/mascota.php">mascotas</a>
        <a href="../partials/reservas.php">reservas</a>
        <a href="../partials/profile.php">perfil</a>
    </nav>

    <div class="icons">
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="../../config/logout.php" class="btn btn-icons"> Salir</a>
    </div>

    <form action="" id="search-box">
        <input type="search" id="search" placeholder="buscar">
        <label for="search" class="fas fa-search"></label>
    </form>

</header>


<section class="products" id="products">

    <h1 class="heading"> <i class="fas fa-paw"></i> mis mascotas <i class="fas fa-paw"></i> </h1>
    <div class="box-container">
        <div class="box">
            <table class="table">
                <tr>
                <thead>
                    <th>id</th>
                    <th>nombre</th>
                    <th>edad</th>
                    <th>raza</th>
                    <th>color</th>
                    <th>alimento</th> 
                    <th><a href='./save-mascota.php' class='btn'>Agregar Mascota</a></th> 
                </thead>
                </tr>
                <tbody>
                
                    <?php while($mascota = $resultado->fetch_array(MYSQLI_BOTH)){

                        echo"
                        <tr>
                        <td>$mascota[id]</td>
                        <td>$mascota[nombre]</td>
                        <td>$mascota[edad]</td>
                        <td>$mascota[raza]</td>
                        <td>$mascota[color]</td>
                        <td>$mascota[alimento]</td>
                        <td> <a href='./edit-mascota.php?id=$mascota[id]' id='$mascota[id]' class='fas fa-edit'></a>
                        <a href='../../config/delete-mascota.php?id=$mascota[id]' id='$mascota[id]' class='fas fa-trash'></a></td>
                        </tr>"
                        ;
                    }  ?>
                    
                </tbody>
            </table>
        </div>
    </div>

</section>


<section class="footer">
<h1 class="credit"> created by <span> Six Sigma </span> | all rights reserved! </h1>
</section>


<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!--  -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<!-- custom js file link  -->
<script src="../../js/script.js"></script>

</body>
</html>