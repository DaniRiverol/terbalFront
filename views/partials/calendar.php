<?php
include('../../config/connection.php');
include('../../config/get-reserva.php');
session_start();
if(!$_SESSION["id"])header('location:../login.php');
$id = $_SESSION["id"];

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
      
        <div class="inputBox">
            <div class="box-calendar">
                <div id="calendar"></div>
                <span></span>
            </div>
            
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
  let calendarEl = document.getElementById('calendar');
  let calendar = new FullCalendar.Calendar(calendarEl, {
    headerToolbar:{
        letf:'title',
        center:'',
        right:'dayGridMonth,timeGridWeek,timeGridDay'
    },
    locale:'es',
    //initialView: 'dayGridMonth',
   events:[
    <?php
        foreach($reservas as $res){ 
    ?>
        { 
            title:'<?php echo $res["nombre"];?>',
            start: '<?php echo $res["fecha_ingreso"]; ?>',
            end: '<?php echo $res["fecha_egreso"]; ?>',
            description: '<?php echo $res["descripción"]; ?>',
        },
    <?php
        }
    ?>

   ],
   color:'red'

  });
  calendar.render();
});
</script>

<script src="../../js/script.js"></script>

</body>
</html>