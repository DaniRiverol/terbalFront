<?php 
include ("./connection.php");
session_start();
$id = $_SESSION['id'];
//editar
if(!empty($_POST["btnEditar"])){

    if(!empty($_POST["nombre_completo"]) &&  !empty($_POST["direccion"]) && !empty($_POST["telefono"]) && !empty($_POST["email"]) && !empty($_POST["password"])){
        
    $nombre = $_POST["nombre_completo"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $query = "UPDATE personas SET nombre_completo ='$nombre',direccion ='$direccion',telefono ='$telefono', email='$email',password='$password',cuil='null' WHERE id ='$id'";
    

    $resultado = mysqli_query($mysqli, $query);
    if(!$resultado){
        echo('No se puede registrar');
        //header('localtion: ../register.php');
        
    }else{
        header('location:../views/home.php');
    }
    
    
    mysqli_close($mysqli);

   } 
    
}

