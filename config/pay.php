<?php
include('./connection.php');
session_start();
$id = $_GET['id'];
$query = "UPDATE reservas SET estado='aprobado' WHERE id= '$id'";

if(mysqli_query($mysqli, $query)){
    echo'Exito';
    header('location: ../views/partials/pay.php');
    mysqli_close($mysqli);
}else{
    echo'error';
    mysqli_close($mysqli);

};






