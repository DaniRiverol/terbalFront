<?php
include('./connection.php');
session_start();
$id_persona = $_SESSION['id'];
//Actualizar mascota

$nombre = $_POST["nombre"];
$raza = $_POST["raza"];
$color = $_POST["color"];
$edad = $_POST["edad"];
$alimento = $_POST["alimento"];

$id = $_GET['id'];


$query = "UPDATE mascotas SET id_persona = '$id_persona', nombre = '$nombre', edad ='$edad', raza = '$raza', alimento = '$alimento', color = '$color' WHERE id ='$id'";
$resultado = mysqli_query($mysqli, $query);
if ($query) {
  
    header('location:../views/partials/mascota.php');
    mysqli_close($mysqli);
}else{
    echo"Error";
   // header('location:../inicio.php');
    mysqli_close($mysqli);

}


?>