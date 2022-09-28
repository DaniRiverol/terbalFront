<?php
include('./connection.php');
session_start();
$id_persona = $_SESSION['id'];

//echo"id ".$id_persona;
$nombre = $_POST["nombre"];
$raza = $_POST["raza"];
$color = $_POST["color"];
$edad = $_POST["edad"];
$alimento = $_POST["alimento"];




$query = "INSERT INTO mascotas(id_persona, nombre, edad, raza, alimento, color) VALUES ('$id_persona','$nombre','$edad','$raza','$alimento','$color')";
$resultado = mysqli_query($mysqli, $query);

if ($resultado) {
    header('location:../views/partials/mascota.php');
    mysqli_close($mysqli);
}else{
    echo"Error";
   // header('location:../inicio.php');
    mysqli_close($mysqli);

}


?>