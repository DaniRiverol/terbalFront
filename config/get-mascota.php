<?php
include('./connection.php');
session_start();
$id = $_SESSION['id'];

//Mostrar mascotas

$query = "SELECT id, nombre, edad, raza, alimento, color FROM mascotas WHERE id_persona='$id'";

$resultado = mysqli_query($mysqli, $query);

/* if($data = $resultado1->fetch_object()){
 $data->nombre;
 $data->id_persona;
 $data->id;
}  */