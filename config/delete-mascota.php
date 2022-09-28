<?php 
include('./connection.php');

$id = $_GET['id'];

    //eliminar
    $query= "DELETE FROM mascotas WHERE id='$id'";
    $resultado = mysqli_query($mysqli, $query);
    
    if($query){
        echo"Exito";   
        header('location:../views/partials/mascota.php'); 
        mysqli_close($mysqli);
    }else{
        echo"Error";
        header('location:../views/partials/mascota.php');
        mysqli_close($mysqli);
        exit();
    }