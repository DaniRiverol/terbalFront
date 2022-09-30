<?php
include('./connection.php');
session_start();

$id = $_SESSION["id"];

$servicio = $_POST['servicio'];
$mascota = $_POST['mascota'];
$fecha_ingreso= $_POST['desde'];
$fecha_egreso= $_POST['hasta'];

$query = "INSERT INTO reservas(id_mascota, id_cliente, id_servicio, fecha_ingreso, fecha_egreso) VALUES ('$mascota','$id','$servicio','$fecha_ingreso','$fecha_egreso')";

$reservas = mysqli_query($mysqli, $query);

if($reservas){
    echo'Exito';
    header('location:../views/partials/pay.php');
    mysqli_close($mysqli);
}else{
    echo'Error';
    mysqli_close($mysqli);
}