<?php
include('../../config/connection.php');

session_start();
if(!$_SESSION["id"])header('location:../login.php');
$id = $_SESSION["id"];

/* SELECT r.id, p.nombre_completo, r.fecha_ingreso as ingreso, r.fecha_egreso as egreso, r.estado  FROM reservas as r INNER JOIN personas  as p ON r.id_cliente = p.id; */
/* SELECT r.id, p.nombre_completo, m.nombre as nombre_mascota,s.nombre as nombre_servicio, r.fecha_ingreso as ingreso, r.fecha_egreso as egreso, r.estado  FROM reservas as r INNER JOIN personas  as p ON r.id_cliente = p.$id INNER JOIN mascotas as m ON r.id_mascota = m.id INNER JOIN servicios as s ON r.id_servicio = s.id */
$query="SELECT reservas.id as id from reservas INNER JOIN personas ON reservas.id_cliente = 'personas.$id'" ;

$reservas = mysqli_query($mysqli, $query);

/* if($reservas){
   
    echo"Exito ";
  
}else{
    echo"error";
} */
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardería Terbal</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- fullcalendar -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css">

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales-all.js"></script>
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




<section class="product" id="product">

    <h1 class="heading"> <i class="fas fa-paw"></i> calendario <i class="fas fa-paw"></i> </h1>
    <div class="box-container">
        <div class="box">
         <div id="calendar"></div>
        </div>
    </div>
   
   

</section>



<section class="footer">
    
   

    <h1 class="credit"> created by <span> Six Sigma </span> | all rights reserved! </h1>

</section>


<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script>
    //fullCalendar

document.addEventListener('DOMContentLoaded', function() {
  const calendarEl = document.getElementById('calendar');
  const calendar = new FullCalendar.Calendar(calendarEl, {
    locale:"es",
    initialView: 'dayGridMonth',
    events:[
        {
            title:'Evento 1',
            start:'2022-09-28',
            end:'2022-09-30'
        }
    ]
 /*    events:[
        <?php //while($dataEvento = $reservas->fetch_array(MYSQLI_BOTH)){ ?>
                {
                    //title:"<?php echo $dataEvento["id"];?>",
                    //start:"<?php echo $dataEvento["fecha_ingreso"];?>",
                   // end:"<?php echo $dataEvento["fecha_egreso"];?>",
                    //description:"<?php echo $dataEvento["nombre"];?>",


                }
            <?php //}?>
    ] */
  });
  calendar.render();
});
</script>

<script src="../../js/script.js"></script>

</body>
</html>