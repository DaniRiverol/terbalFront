<?php
include ("./connection.php");
session_start();
$id = $_SESSION['id'];

$query = "SELECT * FROM reservas as r INNER JOIN personas as p ON r.id_cliente = p.id INNER JOIN servicios as s ON r.id_servicio = s.id_s WHERE id_cliente = $id";
$reservas = mysqli_query($mysqli, $query);

