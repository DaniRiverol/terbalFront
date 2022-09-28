<?php

session_start();
$id = $_SESSION["id"];
$nombre = $_SESSION["nombre_completo"];

?>
<section class="products" id="products">

<h1 class="heading"> <i class="fas fa-paw"></i> panel de control <i class="fas fa-paw"></i> </h1>

<div class="box-container">

    <div class="box">
       <img src='https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortWaved&accessoriesType=Blank&hairColor=BrownDark&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light'
/>
        <div class="content">
            <div class="stars">
             
            </div>
            <h3>Perfil</h3>
            <div class="price"> <?php echo $nombre?></div>
            <a href="./partials/edit-profile.php" class="btn">Editar</a>
        </div>
    </div>

    <div class="box">
        <img src="../images/notepad.png" alt="">
        <div class="content">
            <div class="stars">
               
            </div>
            <h3>Mis reservas</h3>
           <!--  <div class="price"> $10.03 <span>12.50</span> </div> -->
            <a href="./partials/reservas.php" class="btn">Reservar</a>
        </div>
    </div>

    <div class="box">
    <img src='../images/paw.png'/>
        <div class="content">
            <div class="stars">
                
            </div>
            <h3>mis mascotas</h3>
           <!--  <div class="price"> $10.03 <span>12.50</span> </div> -->
            <a href="./partials/mascota.php" class="btn">Ver mascotas</a>
        </div>
    </div>

    <div class="box">
        <img src="../images/calendar.png" alt="">
        <div class="content">
            <div class="stars">
               
            </div>
            <h3>calendario</h3>
            
            <a href="./partials/calendar.php" class="btn">Ver calendario</a>
        </div>
    </div>

    <!-- <div class="box">
        <img src="images/p5.webp" alt="">
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>healthy pets food</h3>
            <div class="price"> $10.03 <span>12.50</span> </div>
            <a href="#" class="btn">add to cart</a>
        </div>
    </div>

    <div class="box">
        <img src="images/p6.webp" alt="">
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>healthy pets food</h3>
            <div class="price"> $10.03 <span>12.50</span> </div>
            <a href="#" class="btn">add to cart</a>
        </div>
    </div> -->

</div>

</section>